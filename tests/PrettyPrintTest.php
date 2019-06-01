<?php 

namespace App\Test;

use PHPUnit\Framework\TestCase;
use App\PrettyPrint;
use App\CamelCaselize;

class PrettyPrintTest extends TestCase
{
    public function testGivenAStringWhenTheUserPutsAStringThenTheResultWillBeCamelcaselizedAndWithStars()
    {
        $mockCamelCaselize = $this->createMock(CamelCaselize::class);

        $mockCamelCaselize->method("run")->willReturn("ThisIsATest--2");

        $sentence = "This is a test-2";

        $prettyPrint = new PrettyPrint(new CamelCaselize($mockCamelCaselize)); 

        $this->assertEquals("*** ThisIsATest--2 ***", $prettyPrint->run($sentence));

    }
}