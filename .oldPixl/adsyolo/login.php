<?php

$username = urldecode($_GET['username']);
$password = urldecode($_GET['password']);

$users = array(
	"jsanc" => "thatapp22",
	"tony" => "thatapp22",
	"josh" => "thatapp22",
	"chris" => "thatapp22",
	"general" => "thatapp22"
);

foreach($users as $aUname => $aPass){
	if($aUname == $username && $aPass == $password){
		$out = "ok";
		break;
	}
}

if($out) 
	echo $out;
else 
	echo "fail";
