
<!DOCTYPE html>
<html>
<head>
	<title>
		ЗАО "ЦНИИ СМ"
	</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="template/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="template/css/style.css">
</head>
<body>
	<div class="container-fluid">
		<div class="navbar navbar-fixed-top topper">
			<nav class="navbar-inner">
				<div class="row-fluid">
					<div class="offset2 span3">
						<a href="/../"><img class="logo" src="template/img/logo-cnii1.png"></a>
					</div>
					<div class="offset3 span1 entr">
						<a href="javascript:PopUpShow()" class="btn btn-large">Войти</a>
					</div>
				</div>
				<div class="b-popup" id="popup1">
	    			<div class="b-popup-content">
		        		<div class="container">
							<div class="row-fluid">
								<div class="well span4">
									<legend>Авторизация на сайт</legend>
									<div class="alert alert-terror">
										<a class="close" href="javascript:PopUpHide()" data-dismiss="alert">x</a>Введены неверные данные
									</div>
									<form method="POST" action="" accept-charset="utf-8">
										<input type="text" name="login" class="span12" placeholder="Введите логин">
										<input type="password" name="password" class="span12" placeholder="Введите пароль">
										<label class="checkbox">
											<input type="checkbox" value="1" name="remember">Запомнить меня
										</label>
										<button type="submit" name="submit" class="btn btn-block btn-success">Войти на сайт</button>
										<div>
											<a href="javascript:PopUpHide()" class="btn btn-block btn-warning">Закрыть</a>
										</div>
									</form>
								</div>
							</div>	
						</div>
					</div>
				</div>
			</nav>
		</div>
	</div>