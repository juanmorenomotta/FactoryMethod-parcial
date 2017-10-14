<?php

namespace Repositories\FileStream;

class FileLogger extends Logger
{

    private $message;
    private $file;

    public function __construct($message, FileStream $file)
    {
        parent::__construct($message);
        $this->file = $file;
    }

    public function validateTo(): bool
    {
        return $message ? true : false;
    }

    public function sendLogger(): void
    {

        if ($this->validateTo() === false) {
            throw new Exception("No hay datos que guardar.");
        }

        $loggerType = get_class($this);
        $this->file->save($this->message);
    }
}