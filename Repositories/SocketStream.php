<?php
namespace Repositories\Stream;

class SocketStream implements InterfaceStream
{

   public function save($message): void
   {
      saveSocket($message);
   }

}