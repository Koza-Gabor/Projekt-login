<?php
define("DB_HOST", 'localhost');
define("DB_NAME", "root");
define("DB_PASS", "asd");
define("DB_DATABASE", "belepes");

$sname= "localhost";
$unmae= "root";
$password = "asd";

$db_name = "belepes";

$conn = new mysqli(DB_HOST, DB_NAME, DB_PASS, DB_DATABASE);

if (!$conn) {
	die("Connection failed!");
}