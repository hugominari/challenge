<?php

use PHPUnit\Framework\TestCase;

/**
 * Class IndexTest
 * @author Hugo Minari Diniz <hugominari@icloud.com>
 */
class IndexTest extends TestCase
{
	/**
	 * Test if multiples of 3 is correct
	 */
	public function testIsMultipleOf3()
	{
		$content = isMultiple(3);
		
		$expected = 'Linio';
		
		$this->assertEquals($expected, $content);
	}
	
	/**
	 * Test if multiples of 5 is correct
	 */
	public function testIsMultipleOf5()
	{
		$content = isMultiple(5);
		
		$expected = 'IT';
		
		$this->assertEquals($expected, $content);
	}
	
	/**
	 * Test if multiples of 3 and 5 is correct
	 */
	public function testIsMultipleOfBoth()
	{
		$content = isMultiple(15);
		
		$expected = 'Linianos';
		
		$this->assertEquals($expected, $content);
	}
}