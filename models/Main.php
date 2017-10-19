<?php

class Main {
public static function getLastNewsList()
	{
		// запрос к БД
		$db = Db::getConnection();

		$newsLastList = array();

		$result = $db->query('SELECT id_news, curr_time, title_news, text_news FROM cnii_news ORDER BY id_news DESC LIMIT 3');

		$i = 0;
		while($row = $result->fetch()) {
			$newsLastList[$i]['id_news'] = $row['id_news'];
			$newsLastList[$i]['curr_time'] = $row['curr_time'];
			$newsLastList[$i]['title_news'] = $row['title_news'];
			$newsLastList[$i]['text_news'] = $row['text_news'];
			$i++;
		}
		return $newsLastList;
	}
}