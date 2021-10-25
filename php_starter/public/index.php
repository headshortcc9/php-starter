<?php

require_once "autoload.php";
  




class BookLibrary extends Library {

      use service;

      private $numOfMember;
      
      public function __construct()
      {
            $this->storage=Db::getData();
            $this->numOfMember=0;
      }

      public function checkStorage()
      {
            return $this->storage;
      }
}

$lib = new BookLibrary();
echo $lib->checkStorage();
echo $lib->sale('Doremon');


