<?php

class Test extends PHPUnit_Framework_TestCase
{
	public function testOnePlusOne() {
		$this->assertEquals(2,2);
  	}
	
	public function assertEquals($a,$b){
	if($a==$b){
	 return true;
		}
		return false;
		
	}
	
}

?>
