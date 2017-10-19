<?php


class News
{
	// возвращает единичную новость
	public static function getNewsItemById($id)
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

			$result = $db->query('SELECT * from cnii_news WHERE id_news=' .$id);


			$result->setFetchMode(PDO::FETCH_ASSOC);

			$newsItem = $result->fetch();

			return $newsItem;
		}
	}
	// возвращает список новостей
	public static function getNewsList()
	{
		// запрос к БД
		$db = Db::getConnection();

		$newsList = array();

		$result = $db->query('SELECT id_news, curr_time, title_news, text_news FROM cnii_news ORDER BY id_news DESC LIMIT 10');

		$i = 0;
		while($row = $result->fetch()) {
			$newsList[$i]['id_news'] = $row['id_news'];
			$newsList[$i]['curr_time'] = $row['curr_time'];
			$newsList[$i]['title_news'] = $row['title_news'];
			$newsList[$i]['text_news'] = $row['text_news'];
			$i++;
		}
		return $newsList;
	}
}