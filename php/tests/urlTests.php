<?php

require_once('url.php');

class UrlTests extends PHPUnit_Framework_TestCase {

	public function testVerifyUrlWithHttpIsTrue() {
		$this->assertTrue(verifyUrl('http://www.prato.be'));
	}

	public function testVerifyUrlWithoutWWWIsTrue() {
		$this->assertTrue(verifyUrl('http://prato.be'));
	}

	public function testVerifyUrlEndingWithDotShouldFail() {
		$this->assertFalse(verifyUrl('http://.'));
	}

	public function testVerifyUrlWithoutHttpOrHttpsShouldFail() {
		$this->assertFalse(verifyUrl('google.com'));
	}

	public function testVerifyIpAddressShouldFail() {
		$this->assertFalse(verifyUrl('127.0.0.1'));		
	}

	public function testVerifyUrlWithoutDomainIsFalse() {
		$this->assertFalse(verifyUrl('http://'));
	}

}

?>