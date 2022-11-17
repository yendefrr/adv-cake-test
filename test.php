<?php

require_once 'PHPUnit/Framework.php';
require_once 'revertCharacters.php';

class MainTest extends PHPUnit_Framework_TestCase {
   private $string;
 
    protected function setUp()
    {
        $this->string = new Main();
    }
 
    protected function tearDown()
    {
        $this->string = NULL;
    }
 
    public function testRevert()
    {
        $result = $this->string->revertCharacters("Привет! Давно не виделись.");
        $this->assertEquals("Тевирп! Онвад ен ьсиледив", $result);
    }
}