<?php
session_start();
$username = preg_replace('/[^A-Za-z]/', '', $_POST['username']);
$password = md5($_POST['password']);

if(file_exists('users/' . $username . '.xml')){
	$xml = new SimpleXMLElement('users/' . $username . '.xml', 0, true);
	if($password == $xml->password){
		echo 'true';
		$_SESSION['username'] = $username;
		die;
	}	
}
?>
