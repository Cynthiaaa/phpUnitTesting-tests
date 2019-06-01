<?php 

namespace App; 

class PrettyPrint 
{
    private $camelCaselize;

    public function __construct(CamelCaselize $camelCaselize)
    {
       $this->camelCaselize = $camelCaselize; 
    }
  
    public function run(string $input): string {
        $result = $this->camelCaselize->run($input); 

        return "*** " . $result . " ***";
    }

}