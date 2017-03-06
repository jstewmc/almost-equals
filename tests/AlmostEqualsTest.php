<?php
/**
 * The file for the almost-equals service tests
 *
 * @author     Jack Clayton <clayjs0@gmail.com>
 * @copyright  2016 Jack Clayton
 * @license    MIT
 */

namespace Jstewmc\AlmostEquals;

use Jstewmc\TestCase\TestCase;

/**
 * Tests for the almost-equals service
 *
 * @since  0.1.0
 */
class AlmostEqualsTest extends TestCase
{
    /* !__invoke() */
    
    /**
	 * __invoke() should return true if a and b are equal floats
	 */
	public function testInvokeReturnsTrueIfFloatsAreEqual()
	{
        $this->assertTrue((new AlmostEquals())(1/10, 0.1));
        
        return;
	}
	
	/**
	 * invoke() should return false if a and b are not equal floats
	 */
    public function testInvokeReturnsFalseIfFloatsAreNotEqual()
    {
        $this->assertFalse((new AlmostEquals())(0.2, 0.7));
        
        return;
	}
	
	/**
	 * invoke() should return true if a and b are equal integers
	 */
	public function testInvokeReturnsTrueIfIntegersAreEqual()
	{
        $this->assertTrue((new AlmostEquals())(1, 1));
        
        return;
	}
	
	/**
	 * invoke() should return false if a and b are not equal integers
	 */
	public function testInvokeReturnsFalseIfIntegersAreNotEqual()
	{
        $this->assertFalse((new AlmostEquals())(1, 2));
        
        return;
	}    
}
