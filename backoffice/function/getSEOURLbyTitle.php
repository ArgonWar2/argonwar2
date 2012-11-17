<?php
function getSEOURLbyTitle($title){
	$url = trim($title);
	$url = strtolower($url);
	$url = str_replace(" ","-",$url);	
	$url = str_replace("'","-",$url);
	$url = str_replace("�","a",$url);	
	$url = str_replace("�","e",$url);
	$url = str_replace("�","i",$url);
	$url = str_replace("�","o",$url);
	$url = str_replace("�","u",$url);
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
