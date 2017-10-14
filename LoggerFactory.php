<?php
require_once('DatabaseLogger.php');
require_once('FileLogger.php');
require_once('NetworkLogger.php');

class LoggerFactory implements InterfaceLoggerFactory
{
    private static $Logger;

    public static function Logger($type, $message)
    {

        if ($this->Logger){
            return $this->logger;
        }

        if (empty($type)) {
            throw new Exception("No se paso tipo de Logger.");
        }

        switch ($type) {
            case 'file':
                $this->logger = new FileLogger($message);
                break;
            case 'database':
                $this->logger = new DatabseLogger($message);
                break;
            case 'network':
                $this->logger = new NetworkLogger($message);
                break;
            default:
                throw new Exception("Logger Invalido");
                break;
        }

        return $this->Logger;
    }
}