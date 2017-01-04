<?php
/**
 * User: Belal Mostafa
 * Date: 04/01/17
 * Time: 12:23 PM
 */

namespace Database;


class DB {

	public static function init (){
		$serverName = 'localhost';
		$userName = 'root';
		$password = 'belalmostafa';
		try{
			$conn = new PDO("mysql:host=$serverName;dbname=myDB",$userName,$password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		}catch (\PDOException $e){

		}
	}

}