<?php
function getSEOURLbyTitle($title){
	$url = trim($title);
	$url = strtolower($url);
	$url = str_replace(" ","-",$url);	
	$url = str_replace("'","-",$url);
	$url = str_replace("à","a",$url);	
	$url = str_replace("è","e",$url);
	$url = str_replace("ì","i",$url);
	$url = str_replace("ò","o",$url);
	$url = str_replace("ù","u",$url);
	$url = str_replace(".","",$url);
	$url = str_replace("!","",$url);
	$url = str_replace("?","",$url);
	$url = str_replace("(","",$url);
	$url = str_replace(")","",$url);
	$url = str_replace("[","",$url);
	$url = str_replace("]","",$url);
	$url = str_replace("|","",$url);
	$url = str_replace('"',"",$url);
	//$url = str_replace("","",$url);
	return $url;
}
