<?php
require '../bootstrap.php';
/**
* 
*/
class TransferorTest extends PHPUnit_Framework_TestCase {

	public function testGetCompanyNameMethod(){
		$object = new stdClass();
		$object->companyName = 'Foo LTDA.';
		$object->branchNumber = 3030;
		$object->branchDigit = 4;
		$object->accountNumber = 10203040;
		$object->accountDigit = 5;

		$transferor = new Transferor($object);

		$this->assertEquals($object->companyName, $transferor->getCompanyName());
	}

}
?>