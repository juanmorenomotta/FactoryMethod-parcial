<?php

namespace Repositories\SocketStream;

class NetworkLogger extends Logger
{

    private $message;
    private $socket;

    public function __construct($message, SocketStream $socket)
    {
        parent::__construct($message);

        $this->socket = $socket;
    }

    public function validateTo(): bool
    {
        return $message ? true : false;
    }

    public function sendLogger(): void
    {
        if ($this->validateTo() === false) {
            throw new Exception("No hay mensaje que guardar");
        }

        $loggerType = get_class($this);
        $this->socket->save($this->message);
    }
}