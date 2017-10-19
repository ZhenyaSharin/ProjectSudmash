<?php

include_once ROOT.'/models/Vacancy.php';

class VacancyController
{	

	public function actionView($id)
	{
		if ($id) {
			$vacanItem = Vacancy::getVacancyById($id);

			// echo '<pre>';
			// print_r($vacanItem);
			// echo '</pre>';

			// echo 'actionView';
			require_once(ROOT.'/views/vacancy/view.php');
		}

		return true;
	}
}