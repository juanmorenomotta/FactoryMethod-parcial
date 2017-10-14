<?php
namespace Repositories\Stream;

interface InterfaceStream
{
  
    private $message;

    public function save($message): void;
}