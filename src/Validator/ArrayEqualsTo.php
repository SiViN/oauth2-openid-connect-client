<?php
/**
 * @author Milan Sivak <sivin@atlas.cz>
 * @license http://opensource.org/licenses/MIT MIT
 */
namespace OpenIDConnectClient\Validator;


class ArrayEqualsTo implements ValidatorInterface
{
	use ValidatorTrait;
	
	public function isValid($expectedValue, $actualValue)
	{
		if (false === is_array($expectedValue)) {
			$expectedValue = [$expectedValue];
		}
		
		if (false === is_array($actualValue)) {
			$actualValue = [$actualValue];
		}
		
		if ($expectedValue === $actualValue) {
			return true;
		}
		
		$this->message = sprintf("%s is invalid as it does not equal expected %s", $actualValue, $expectedValue);
		return false;
	}
}
