<?php
 
namespace App\Tests;

use PHPUnit\Framework\TestCase;
 
class MyTest extends TestCase
{
    public function testPushArray()
    {
        $stack = array();
        $this->assertEquals(0, count($stack));
        array_push($stack, 'push');
        $this->assertEquals('push', $stack[count($stack)-1]);
        $this->assertEquals(1, count($stack));
 
    }

    public function testPopArray()
    {
        $stack = array('pop');
        $this->assertEquals(1, count($stack));
        
        $this->assertEquals('pop', array_pop($stack));
        $this->assertEquals(0, count($stack));
    }
}