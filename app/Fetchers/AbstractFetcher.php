<?php

namespace App\Fetchers;

/**
 * Class AbstractFetcher
 * @package App\Fetchers
 */
abstract class AbstractFetcher
{
    /**
     * @var array
     */
    protected $importConfig;

    /**
     * @var string
     */
    protected $userAgent = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko)'
        . ' Chrome/61.0.3163.100 Safari/537.36';

    /**
     * AbstractFetcher constructor.
     * @param array $importer
     */
    public function __construct(array $importer)
    {
        $this->importConfig = $importer;
    }

    /**
     * @param $mapper
     * @return mixed
     */
    abstract public function fetch($mapper);

    /**
     * @param $url
     * @return mixed
     */
    protected function getResponse($url)
    {
        $curl_handle = curl_init();
        curl_setopt($curl_handle, CURLOPT_URL, $url);
        curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 10);
        curl_setopt($curl_handle, CURLOPT_TIMEOUT, 10);
        curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl_handle, CURLOPT_USERAGENT, $this->userAgent);
        curl_setopt($curl_handle, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl_handle, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl_handle, CURLOPT_SSL_VERIFYPEER, 0);
        $query = curl_exec($curl_handle);
        curl_close($curl_handle);
        $query = substr($query, 0, -2);
        $query = substr($query, 1);
        return json_decode($query);
    }
}
