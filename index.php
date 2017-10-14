<?php

require_once('Logger.php');
require_once('InterfaceLoggerFactory.php');
require_once('LoggerFactory.php');

$database = LoggerFactory::getLogger("database","Mensaje para la Base de Datos");
echo $database->sendLogger();

echo "\n";

$file = LoggerFactory::getLogger("file", "Mensaje de error para File");
echo $file->sendLogger();

echo "\n";

$network = LoggerFactory::getLogger("network", "Mensaje de error para el socket");
echo $network->sendLogger();