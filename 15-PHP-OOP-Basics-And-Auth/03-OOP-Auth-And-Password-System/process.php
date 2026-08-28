<?php 
require_once("database_setting.php");
require_once("database.php");

$db = new database($host, $username, $password, $database);

if(isset($_REQUEST['login'])){
	$db->login($_REQUEST['email'], $_REQUEST['password']);
}

if(isset($_REQUEST['signup'])){
	$db->signup($_REQUEST['first_name'], $_REQUEST['last_name'], $_REQUEST['email'], $_REQUEST['password']);
}

if(isset($_REQUEST['forgot'])){
	$db->forgot_password($_REQUEST['email']);
}

if(isset($_REQUEST['change_password'])){
	$db->change_password($_REQUEST['email'], $_REQUEST['old_password'], $_REQUEST['new_password']);
}
?>