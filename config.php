<?php
$edited = TRUE; //Change This To True to Show That You have Edited the Config File

if ($edited == TRUE)
{
	$realmd = array
	(
		'db_type' => 'mysql', //Database Type
		'db_port' => '3306', //Database Port
		'db_ip' => '127.0.0.1', //Database Ip
		'db_user' => 'root', //Database Username
		'db_pass' => 'saahc2b', //Database Passwoed
		'db_name' => 'realmd', //Realm Database Name
		'db_encoding' => 'utf8' //Datbase Encoding, Do Not Change
	);
	
	$mangos = array
	(
		'db_type' => 'mysql', //Database Type
		'db_port' => '3306', //Database Port
		'db_ip' => '127.0.0.1', //Database Ip
		'db_user' => 'root', //Database Username
		'db_pass' => 'saahc2b', //Database Passwoed
		'db_name' => 'mangos', //Realm Database Name
		'db_encoding' => 'utf8' //Datbase Encoding, Do Not Change
	);
	
	$settings = array
	(
		'template' => 'offlike',
		'template_images' => 'templates/offlike',
		'lang' => 'en',
		'default_lang' => 'en',
		'copyright' => 'All Images and Logos are Copyright 2007 Blizzard Entertainment',
		'use_flash_banners' => 0,
		'account_key_save_length' => 60*60*24*15
	);
}

else
{
	echo "Please configure config.php.";
};
?>