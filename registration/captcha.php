<?php

/*
* PHP Captcha 1.0
* by Simone
* www.simonewebdesign.it
*
* Creation date: 7/9/2011
* Last modify: 29/10/2011
*/

if ( !isset($_POST['f']) && !isset($_POST['s']) && !isset($_POST['o']) ){

	// Set numbers and operator
	$firstNumber = rand(1,10);
	$secondNumber = rand(1,10);
	function getOperator(){
		$_randomizer = rand(1,100);
		if ($_randomizer >= 30)
			$operator = "+";
		else
			$operator = "-";
		return $operator;
	}
	$operator = getOperator();

	$captcha_question = "Quanto fa $firstNumber $operator $secondNumber ?";

} else {

	// Calculate the right answer
	if ($_POST['o'] == "+")
		$correct_answer = $_POST['f'] + $_POST['s'];
	else if ($_POST['o'] == "-")
		$correct_answer = $_POST['f'] - $_POST['s'];
	else die ("Something went wrong with captcha. We're Sorry.");

}
