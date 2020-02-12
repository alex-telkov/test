<?php

namespace App\Entities;

/**
 * Interface RepositoryEntity
 * @package App\Entities
 */
interface RepositoryEntity
{
    /**
     * Set by parameter name
     *
     * @param $name
     * @param $value
     * @return $this
     */
    public function set($name, $value);
}
