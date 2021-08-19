<?php


namespace App\DB;

use  PDO;

class DBConnection
{
	private static $db = null;

	private function __construct()
	{

	}

	/**
	 * Establece la conexión a mi base de datos.
	 *
	 * @return PDO|null
	 */
	public static function getConnection(): ?PDO
	{
		if (self::$db === null) {
			$db_host     = 'localhost';
			$db_name     = 'proyecto_bienes_raices';
			$db_user     = 'root';
			$db_password = '';
			$db_dns      = "mysql:host={$db_host};dbname={$db_name};charset?utf8mb4";

			self::$db = new PDO($db_dns, $db_user, $db_password);
		}

		return self::$db;
	}
}

//$db    = DBConnection::getConnection();
//$query = "SELECT * FROM properties";
//$stmt  = $db->prepare($query);
//$stmt->execute();
//$salida = [];
//while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
//	$salida[] = $row;
//}
//
//echo "<pre>";
//print_r($salida);
//echo "</pre>";