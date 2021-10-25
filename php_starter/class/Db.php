<?php
interface DbInterface{
      public static function getData();
}

class Db implements DbInterface{
      public static function getData()
      {
            /**  
             * if need change Database entity just update here
             */
            return DbEntity2::get_data2();
      }
}