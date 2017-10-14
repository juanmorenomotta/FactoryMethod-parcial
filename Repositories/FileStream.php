<?php
namespace Repositories\Stream;

class FileStream implements InterfaceStream
{

   public function save($message): void
   {
      log($message);
   }

}