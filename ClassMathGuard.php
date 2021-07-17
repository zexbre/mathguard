<?
class MathGuard {

	/** A main hashing function: concat of user's answer, hour and the additional prime number (default 37) */
	function encode($input, $prime) {
		return md5($input.date("H").$prime);
	}

	/** This function generates the hash code from the two numbers 
	 * @param $a 	first number
	 * @param $b	second sumber
	 * @param $prime	additional number to encode with
	 * */
	function generateCode($a, $b, $prime) {
		$code = MathGuard::encode($a + $b, $prime);
		return $code;
	}

	/** This function checks whether the answer and generated security code match 
	 * @param $mathguard_answer		answer the user has entered
	 * @param $mathguard_code		hashcode the mathguard has generated
	 */
	function checkResult($mathguard_answer, $mathguard_code, $prime = 37) {

//		echo("prime; $prime, $mathguard_answer");
		$result_encoded = MathGuard::encode($mathguard_answer, $prime);
		
		if ($result_encoded == $mathguard_code)
			return true;
		else
			return false;

	}

	/** this function inserts the two math term into your form, the parameter is optional */
	function insertQuestion($prime = 37) { //default prime is 37, you can change it when specifying the different parameter
		$a = rand() % 10; // generates the random number
		$b = rand() % 10; // generates the random number
		$code = MathGuard :: generateCode($a, $b, $prime);
		echo ("<a href='http://www.codegravity.com/projects/mathguard'>MathGuard</a> security question: $a + $b =
				<input type='input' name='mathguard_answer' size='2'/><input type='hidden' name='mathguard_code' value='$code' />");

	}

	/** this function returns math expression into your form, the parameter is optional 
	 * quite simmilar to insertQuestion, but returns the output as a text instead of echoing
	 */
	function returnQuestion($prime = 37) { //default prime is 37, you can change it when specifying the different parameter
		$a = rand() % 10; // generates the random number
		$b = rand() % 10; // generates the random number
		$code = MathGuard :: generateCode($a, $b, $prime);
		return ("<a href='http://www.codegravity.com/projects/mathguard'>MathGuard</a> security question: $a + $b =
				<input type='input' name='mathguard_answer' size='2'/><input type='hidden' name='mathguard_code' value='$code' />");

	}

}
?>