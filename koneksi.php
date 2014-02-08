<?
$dbHost = "localhost";
$dbName = "myadvisor";
$dbUser = "root";
$dbPass = "root";

$dbLink = mysql_connect($dbHost, $dbUser, $dbPass) or die('Could not connect: ' . mysql_error($dbLink));
if (!mysql_select_db($dbName, $dbLink)) {
    die('Database Connection Failed!');}
?>