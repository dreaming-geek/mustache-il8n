<?php

require 'vendor/autoload.php';
$mustache = new Mustache_Engine(array(
	'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__) . '/views')
	));

$mustache->addHelper('il8n', function($text){
	$region = ; // User's region
	$dict = array(
		'Testing' => 'Not a Test'
		);
	return array_key_exists($text, $dict) ? $dict[$text] : $text;
	//return strtoupper($text);
});
$names = array(
	'name' => 'Joseph',
	'planet' => 'Earth'
	);

//Works
//echo $mustache->render('<h2>{{#il8n}}Hello, {{planet}}{{/il8n}}</h2>', $names);
echo 'The Template:';
echo $mustache->render('template', $names);