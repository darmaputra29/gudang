<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "db_perpus";

$konek = mysql_connect($server, $username, $password) or die(mysql_error());
mysql_select_db($database);

?>