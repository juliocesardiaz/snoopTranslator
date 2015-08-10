<?php 
	
	require_once "src/SnoopTranslator.php";
	
	class SnoopTranslatorTest extends PHPUnit_Framework_TestCase
	{
		function testSwitch()
		{
			//Arrange
			$test = new SnoopTranslator;
			$input = "what's up my preposterous brothers";
			
			//Act
			$result = $test->translate($input);
			
			//Assert
			$this->assertEquals("what'z up my prepozterouz brotherz", $result);
		}
		
		
		function testSwitchUpper()
		{
			//Arrange
			$test = new SnoopTranslator;
			$input = "Susan has some serious skills";
			
			//Act
			$result = $test->translate($input);
			
			//Assert
			$this->assertEquals("Suzan haz some seriouz skillz", $result);
		}
	}
?>