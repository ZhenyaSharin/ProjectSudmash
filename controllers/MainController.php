<?php

include_once ROOT.'/models/Main.php';
class MainController
{
	
	public function actionIndex()
	{

		$newsLastList = array();
		$newsLastList = Main::getLastNewsList();

		require_once(ROOT. "/views/main/index.php");

		return true;
	}
}