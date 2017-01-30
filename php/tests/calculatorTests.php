<?php

require_once('calculator.php');

class CalculatorTests extends PHPUnit_Framework_TestCase {

	public function testLoginAbigail() {
		$this->assertTrue(calculateFor('Abigail'));
	}
	public function testLoginJos() {
		$this->assertTrue(calculateFor('Jos'));
	}
	public function testLogin27CharactersName() {
		$this->assertTrue(calculateFor('Abcdefghijklmnopqrstuvwxyza'));
	}
	public function testNoLogin2CharactersName() {
		$this->assertFalse(calculateFor('An'));
	}
	public function testNoLoginSecondCharacterDigit() {
		$this->assertFalse(calculateFor('A4c'));
	}
	public function testLoginFifthCharacterDigit() {
		$this->assertTrue(calculateFor('Abcd5'));
	}
	public function testLoginDottedName() {
		$this->assertTrue(calculateFor('domein.com'));
	}
	public function testNoLoginDoubleDottedName() {
		$this->assertFalse(calculateFor('mijn.domein.com'));
	}
		public function testLoginUnderscoreName() {
		$this->assertTrue(calculateFor('domein_com'));
	}
	public function testNoLoginDoubleUnderscoreName() {
		$this->assertFalse(calculateFor('mijn_domein_com'));
	}

}

?>