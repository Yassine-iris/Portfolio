<?php
ini_set("date.timezone", "Europe/Paris");

    
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbAuth = "id16669039_auth";
$dbWebsite = "id16669039_auth";


$copyright = "© 2020 Portofiol - By Yassine - 
";



try 
{
	$websiteDB = new PDO("mysql:host=$dbHost;dbname=$dbWebsite;charset=utf8", "$dbUser", "$dbPass");
	try
	{
		$authDB = new PDO("mysql:host=$dbHost;dbname=$dbAuth;charset=utf8", "$dbUser", "$dbPass");
	}
	catch(PDOException $ex)
	{
		header("Location: ./maintenance.php");
		exit;
	}
}
catch(PDOException $ex)
{
	header("Location: ./maintenance.php");
	exit;
}
?>