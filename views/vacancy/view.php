<?php include ROOT.'\views\layouts\header.php';?>

	<div class="row-fluid middle">
		<div class=" span8 nws-block">
			<h3 class="offset1">ВАКАНСИЯ</h3>
					<div class="nws">
						<h4><?php echo $vacanItem['vacant'];?></h4>
						<p><?php echo $vacanItem['experience'];?></p>
						<p><?php echo $vacanItem['needs'];?></p>
						<p><?php echo $vacanItem['obyaz'];?></p>
					</div>
		</div>
	</div>

<footer>
		<div class="container-fluid foot">
			<div class="row-fluid">
				<div class="offset2 span3 footext">
					<h3>КОНТАКТЫ</h3>
					<p><i class="icon-home icon-white"></i> Закрытое акционерное общество "Центральный научно-исследовательский институт судового машиностроения".</p>
					<p><i class="icon-flag icon-white"></i> 192029, г. Санкт-Петербург, ул. Крупской, д. 2а</p>
					<p><i class="icon-hand-up icon-white"></i> (812) 640-10-51, (812) 640-11-86 - приёмная института.</p>
					<p><i class="icon-list-alt icon-white"></i> (812) 640-11-86 - отдел кадров.</p>
					<p><i class="icon-envelope icon-white"></i> e-mail: sudmash@sudmash.ru</p>
				</div>
				<!-- <div class="offset2 span4 footext">
					<h3>КАРЬЕРА</h3>
					<p class="vacs"><i class="icon-user icon-white"></i><a href="#" style="color:white"> Технический специалист Autodesk Inventor, TDMS и IPS</a></p>
					<p class="vacs"><i class="icon-user icon-white"></i><a href="#" style="color:white"> Программист («1С», С++, Delfi и пр.)</a></p>
					<p class="vacs"><i class="icon-user icon-white"></i><a href="#" style="color:white"> Инженер - механик</a></p>
					<p class="vacs"><i class="icon-user icon-white"></i><a href="#" style="color:white"> Инженер - программист встраиваемой микропроцессорной техники</a></p>
					<p class="vacs"><i class="icon-user icon-white"></i><a href="#" style="color:white"> Инженер - электрик со специализацией в области силовой автоматики</a></p>
					<p class="vacs"><i class="icon-user icon-white"></i><a href="#" style="color:white"> Инженер по автоматизации гидравлических и/или энергетических установок</a></p>
					<p class="vacs"><i class="icon-user icon-white"></i><a href="#" style="color:white"> Инженер - конструктор радиоэлектронной аппаратуры</a></p>
				</div> -->
			</div>
			<div class="row-fluid">
					<div class="offset2 span8">
						<hr size="0.5">
					</div>
			</div>
			<div class="row-fluid copy">
				<h4 class="cright">Copyright © ЗАО «ЦНИИ СМ», 2001-2017</h4>
			</div>
	<!-- <div class="container">
		<div class="row">
			<div class="well span4 offset4">
				<legend>Авторизация на сайт</legend>
				<div class="alert alert-terror">
					<a class="close" href="#" data-dismiss="alert">x</a>Введены неверные данные
				</div>
				<form method="POST" action="" accept-charset="utf-8">
					<input type="text" name="login" class="span4" placeholder="Введите логин">
					<input type="password" name="password" class="span4" placeholder="Введите пароль">
					<label class="checkbox">
						<input type="checkbox" value="1" name="remember">Запомнить меня
					</label>
					<button type="submit" name="submit" class="btn btn-block btn-success">Войти на сайт</button>
				</form>
				</div>
			</div>	
		</div>	 -->
<!-- 				<div class="b-container">
    Sample Text
    <a href="javascript:PopUpShow()">Show popup</a>
</div>
<div class="b-popup" id="popup1">
    <div class="b-popup-content">
        Text in Popup
    <a href="javascript:PopUpHide()">Hide popup</a>
    </div>
</div> -->

		</div>
	</footer>
	<script type="text/javascript" src="template/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="template/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="template/js/news.js">
		    
</script>
</body>
</html>