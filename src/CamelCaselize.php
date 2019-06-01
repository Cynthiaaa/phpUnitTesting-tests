<?php 

namespace App;

class CamelCaselize 
{
   public function run(string $input): string 
   {
     $arrayWords = explode(" ", $input);

     for($i = 0; $i < count($arrayWords); $i++ ){
         $arrayWords[$i] = ucfirst($arrayWords[$i]);
     }

     $camelCased = implode("", $arrayWords);

     return str_replace ("-", "--", $camelCased);
   }
}