<?php
include ('config.php');

// Connect to Database
$realmd_connection = mysql_connect($realmd['db_ip'], $realmd['db_user'], $realmd['db_pass']);
@mysql_select_db($realmd['db_name']);

// Get Realm Status Form Database
$realm_name_query = "SELECT name FROM realmlist";
$realm_name = mysql_query($realm_name_query);
$realm_pop_query = "SELECT population FROM realmlist";
$realm_pop = mysql_query($realm_pop_query);

while ($row = mysql_fetch_array($realm_name, MYSQL_ASSOC))
{
	echo $row['name'] . "<br />"; 
}

while ($row = mysql_fetch_array($realm_pop, MYSQL_ASSOC))
{
	echo $row['population'] . "<br />"; 
}

mysql_close();
?>