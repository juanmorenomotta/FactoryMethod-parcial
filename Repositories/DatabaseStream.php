<?php
namespace Repositories\Stream;

class DatabaseStream implements InterfaceStream
{

   public function save($message): void
   {
      save($message);
   }

}