<?php
include ('config.php');

//Connect to Database
$mangos_connection = mysql_connect($mangos['db_ip'], $mangos['db_user'], $mangos['db_pass']);

mysql_close();
?>