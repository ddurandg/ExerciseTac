<?php 
use PHPUnit\Framework\TestCase;


Class ExerciseTest extends TestCase{

	private $exercise;

	public function setUp():void{

		$this->exercise = new Exercise();
	}

	public function testGetMessageMultipleWithout(){
		$this->assertEquals('1', $this->exercise->getMessageMultiple(1));
	}

	public function testGetMessageMultipleThree(){
		$this->assertEquals('Falabella', $this->exercise->getMessageMultiple(3));
	}

	public function testGetMessageMultipleFive(){
		$this->assertEquals('IT', $this->exercise->getMessageMultiple(5));
	}

	public function testGetMessageMultipleBoth(){
		$this->assertEquals('Integraciones', $this->exercise->getMessageMultiple(15));
	}
}


?>