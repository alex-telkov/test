<?php

namespace App\Console\Processes;

use Amp\Loop;
use Amp\Promise;
use Amp\Coroutine;
use Amp\Process\Process;
use App\Console\Logger\BasicLogger;

/**
 * Class ClientMatchesImportProcess
 * @package App\Console\Processes
 */
class ClientMatchesImportProcess
{
    /**
     * @var array
     */
    protected $importer;

    /**
     * @var string
     */
    protected $command;

    /**
     * @var Process
     */
    protected $process;

    /**
     * @var int
     */
    protected $restartDelay;

    /**
     * @var \DateTime $startedAt
     */
    protected $startedAt;

    /**
     * @var \DateTime $endedAt
     */
    protected $endedAt;

    /**
     * @var Coroutine
     */
    protected $promise;

    /**
     * How many times import processed was spawned
     * @var int
     */
    protected $times = 0;

    /**
     * @var BasicLogger
     */
    protected $logger;

    /**
     * ClientMatchesImportProcess constructor.
     * @param $command
     * @param $importer
     * @param $logger
     */
    public function __construct($command, $importer, $logger)
    {
        $this->importer = $importer;
        $this->logger = $logger;
        $this->command = sprintf($command, $this->importer['codename']);
        $this->restartDelay = $this->importer['delay'];
    }

    /**
     * @throws \Amp\Process\StatusError
     * @throws \Error
     */
    public function start()
    {
        $this->startedAt = new \DateTime('now');
        $this->process = new Process($this->command);
        $this->process->start();
        $this->logger->logStart($this);
        $this->promise = new Coroutine($this->checkStatus($this->process));
        $this->promise->onResolve($this->onResolveClosure());
        return $this->promise;
    }

    /**
     *
     */
    protected function stop()
    {
        $this->startedAt = null;
        $this->endedAt = null;
        $this->promise = null;
    }

    /**
     * @throws \Amp\Process\StatusError
     * @throws \Error
     */
    public function restart()
    {
        $this->endedAt = new \DateTime('now');
        $secondsElapsed = ($this->startedAt->diff($this->endedAt))->s;
        if ($secondsElapsed < $this->restartDelay) {
            Loop::delay(($this->restartDelay - $secondsElapsed) / 1000, $this->getRestartClosure());
        } else {
            $this->stop();
            $this->start();
        }
    }

    /**
     * @return int
     */
    public function getCount()
    {
        return $this->times;
    }

    /**
     * @return \Closure
     */
    protected function onResolveClosure() : \Closure
    {
        $importProcess = $this;
        return function (\Throwable $error = null, $result = null) use ($importProcess) {
            if ($result || !$importProcess->process->isRunning()) {
                $importProcess->restart();
            }
        };
    }

    /**
     * @return \Closure
     */
    protected function getRestartClosure() : \Closure
    {
        $importProcess = $this;
        return function () use ($importProcess) {
            if (!$importProcess->process->isRunning()) {
                $importProcess->restart();
            }
        };
    }

    /**
     * @param Process $process
     * @return \Generator
     * @throws \Amp\ByteStream\PendingReadError
     * @throws \Amp\Process\StatusError
     */
    protected function checkStatus(Process $process) : \Generator
    {
        $stream = $process->getStdout();
        while (null !== $chunk = yield $stream->read()) {
            $this->logger->logProcessOutput($this, $chunk);
        }
        $code = yield $process->join();
        $pid = yield $process->getPid();

        $this->times++;
        $this->endedAt = new \DateTime('now');
        $this->logger->logProcessComplete($this, $pid, $code);
    }

    /**
     * @return array
     */
    public function getImporter(): array
    {
        return $this->importer;
    }

    /**
     * @return Process
     */
    public function getProcess(): Process
    {
        return $this->process;
    }

    /**
     * @return \DateTime
     */
    public function getStartedAt(): \DateTime
    {
        return $this->startedAt;
    }

    /**
     * @return \DateTime
     */
    public function getEndedAt(): \DateTime
    {
        return $this->endedAt;
    }
}
