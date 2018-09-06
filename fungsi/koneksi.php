<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "gudang";
error_reporting(E_ALL ^ E_DEPRECATED);
$konek = mysql_connect($server, $username, $password) or die(mysql_error());
mysql_select_db($database);

?>