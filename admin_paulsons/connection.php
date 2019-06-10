<?php
	try
	{
		$con = new PDO("mysql:host=localhost;dbname=paulsons", "root", "");
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e)
	{
		echo "Connection Failed:". $e->getMessage();
	}
	if(!function_exists('cleanurl'))
	{
		function cleanurl($string) {
    $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
    return preg_replace('/[^A-Za-z0-9\-]/', '', strtolower($string)); // Removes special chars.
		}
	}
	

?>