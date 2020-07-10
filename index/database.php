<?php  

	/**
	 * Version: 1.0
	 * Date: 29/5/2020
	 * Author: Danny van der Weijde
	 * notes:
	 */

	/**
	* Gets the database info.
	* Other functions can use this to get into the database.
	*/
	function getDbInfo(){
		$host = "localhost";
		$user = "root";
		$password = "mysql";
		$dbname = "";

		$dsn = "mysql:host=". $host .";dbname=" . $dbname;

		$pdo = new PDO($dsn, $user, $password);
		$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
		return $pdo;
	}

	/**
	* Function that cleans a string to prevent hacking and makes sure that the string doesn't have unnecessary characters.
	*/
	function test_input($data){
		//Removes unnecessary spaces, tabs and newlines.
		$data = trim($data);
		//Removes backslashes (\).
		$data = stripslashes($data);
		//Changes special characters to html.
		$data = htmlspecialchars($data);
		return $data;
    }
?>