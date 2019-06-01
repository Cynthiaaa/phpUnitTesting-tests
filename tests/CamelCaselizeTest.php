<?php 

namespace App\Test;

use PHPUnit\Framework\TestCase;
use App\CamelCaselize;

class CamelCaselizeTest extends TestCase
{
   public function testGivenAStringWhenTheUserUsesTheClassThenWReturnTheSameStringCamelCaselized()
   {
       $testString = "this is a test";
       $camelCaseLizer = new CamelCaseLize();
       $result = $camelCaseLizer->run($testString);

       $this->assertEquals("ThisIsATest", $result);
   }

   public function testGivenAStringWhenTheUserUsesTheClassWithADashThenReturnTwoDash()
   {
       $testStringDash = "this is a test-2"; 
       $dashCameLizer = new CamelCaseLize(); 
       $result = $dashCameLizer->run($testStringDash);

       $this->assertEquals("ThisIsATest--2", $result);
   }
}