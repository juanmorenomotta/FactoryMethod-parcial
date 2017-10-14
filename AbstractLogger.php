<?php

/**
 * User: Junade Ali
 * Date: 13/03/2016
 * Time: 14:25
 */
abstract class Logger
{
    protected $message;

    public function __construct(string $message)
    {
        $this->message = $message;
    }

    abstract public function validateTo(): bool;

    abstract public function sendLogger(): void;

}