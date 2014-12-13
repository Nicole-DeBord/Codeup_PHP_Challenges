<?php

// PHP Challenege 1: Create a function alphabet_soup($str) that accepts a string 
// and will return the string in alphabetical order. E.g. "hello world" becomes 
// "ehllo dlorw". So make sure your function separates and alphabetizes each word 
// separately.

$string = "meow meow meow";

function alphabetSoup($message) {
	$message = strtolower($message);
	$arrayOfWords = explode(' ', $message);
	$sortedWordsArray = [];
	foreach ($arrayOfWords as $word) {
		$arrayOfLetters = str_split($word);
		asort($arrayOfLetters);
		$stringOfLetters = implode('', $arrayOfLetters);
		array_push($sortedWordsArray, "$stringOfLetters ");
	}

	$sortedMessage = implode($sortedWordsArray);
	$capitalizedMessage = ucfirst($sortedMessage);
	return $capitalizedMessage;
}

echo alphabetSoup($string);

?>