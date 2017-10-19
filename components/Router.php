<?php

/**
* 
*/
class Router {

	private $routes;
	
	public function __construct()
	{
		$routesPath = ROOT.'/config/routes.php';
		$this->routes = include($routesPath);	
	}

	// метод возвращает строку

	private function getURI() {

		if (!empty($_SERVER['REQUEST_URI'])) {
			return trim($_SERVER['REQUEST_URI'], '/');
		}
	}

	public function run()
	{
			// print_r($this->routes);
			// echo "Class router method run";
		// получить строку запроса
		$uri = $this->getURI();

		
		// проверить наличие такого запроса в routes.php
		foreach ($this->routes as $uriPattern => $path) {
		
		//  сравниваем $uriPattern и $uri
			if (preg_match("~$uriPattern~", $uri)) {

				// echo '<br>Где ищем (запрос который ввёл пользователь): '.$uri;
				// echo '<br>Что ищем (совпадение из правила): '.$uriPattern;
				// echo '<br>Кто обрабатывает: '.$path;
				

				// получаем внутренний путь из внешнего согласно правилу

				$internalRoute = preg_replace("~$uriPattern~", $path, $uri);

				// echo '<br><br>Нужно сформировать: '.$internalRoute;
				
		//если есть совпадение определить какой контроллер и action обрабатывает запрос

		// определяем controller, action и параметры
				$segments = explode('/', $internalRoute);

				$controllerName = array_shift($segments).'Controller';
				$controllerName = ucfirst($controllerName);

				$actionName = 'action' . ucfirst(array_shift($segments));

				// echo '<br>controller name: ' .$controllerName;
				// echo '<br>action name:' .$actionName;

				$parameters = $segments;
				// echo '<pre>';
				// print_r($parameters);

				// die;

		// подключение класса контроллера

				$controllerFile = ROOT . '/controllers/' . $controllerName . '.php';

				if (file_exists($controllerFile)) {
					include_once($controllerFile);
				}




				// создать объект и вызвать метод
				$controllerObject = new $controllerName;

				// $result = $controllerObject->$actionName($parameters);

				$result = call_user_func_array(array($controllerObject, $actionName), $parameters);
				if ($result != null) {
					break;
				}

			} 
		}
	}
}