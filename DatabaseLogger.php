<?php

namespace Repositories\DatabaseStream;

class DatabseLogger extends Logger
{
    private $message;
    private $database;

    public function __construct($message, DatabaseStream $database)
    {
        parent::__construct($message);
        $this->database = $database;
    }

    public function validateTo(): bool
    {
        return $message ? true : false;
    }

    public function sendLogger(): void
    {

        if ($this->validateTo() === false) {
            throw new Exception("No existe mensaje.");
        }

        $loggerType = get_class($this);
        $this->database->save($this->message);
    }
}