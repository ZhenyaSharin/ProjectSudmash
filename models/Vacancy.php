<?php

class Vacancy
{
	// возвращает единичную новость
	public static function getVacancyById($id)
	{
		// запрос к БД

		$id = intval($id);

		if ($id) {
			// $host = 'localhost';
			// $dbname = 'cnii_base';
			// $user = 'root';
			// $password = '';

			// $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);

			$db = Db::getConnection();

			$result = $db->query('SELECT * from cnii_vacan WHERE id_vacan=' .$id);


			$result->setFetchMode(PDO::FETCH_ASSOC);

			$vacanItem = $result->fetch();

			return $vacanItem;
		}
	}
}