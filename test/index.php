<?php

/*
Parse through $list to find a match for $text

*/

$text = '';
//$dictionary = 'locale/dictionary.en_' .$region. '.txt';
$list = file('list.txt'); // Replace with $dictionary
//print_r($list);
$key = array_search($text, $list);


/*
foreach ($list as $key => $value) {
	echo $key. ' - ' .$value;
}
*/

