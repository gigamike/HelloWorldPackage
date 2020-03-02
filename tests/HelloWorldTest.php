<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class HelloWorldTest extends TestCase
{
    /**
     * Test that true does in fact equal true
     */
    public function testTrueIsTrue()
    {
        $this->assertTrue(true);
    }

    public function testIsThereAnySyntaxError()
    {
    	$var = new \Gigamike\HelloWorld;
    	$this->assertTrue(is_object($var));
    	unset($var);
    }

    public function testMethod()
    {
    	$var = new \Gigamike\HelloWorld;
    	$this->assertTrue($var->getHelloWorld() == 'Hello World');
    	unset($var);
    }
}
