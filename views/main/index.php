<?php include ROOT.'\views\layouts\header.php';?>
			<!-- <div class="container-fluid"> -->
				<div class="carousel slide" id="myCarousel">
					<ol class="carousel-indicators">
						<li class="active" data-target="#myCarousel" data-slide-to="0"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="item active">
							<img src="template/img/1.jpg">
							<div class="carousel-caption crsl">
								<h4>ЗАО "ЦНИИ Судового машиностроения"</h4>
								<p>В 1970 г. в соответствии с приказом Министерства судостроительной промышленности от 22 июля 1970 г. на базе ЦКБ </p>
								<p>Пролетарского завода был создан Центральный научно-исследовательский институт судового машиностроения (ЦНИИ СМ)</p>
							</div>
						</div>
						<div class="item">
							<img src="template/img/2.jpg">
							<div class="carousel-caption crsl">
								<p>Предприятие принимало активное участие в работе</p>
								<p>многих всероссийских и международных выставках, форумах по военной и судостроительной  тематике</p>
							</div>
						</div>
						<div class="item">
							<img src="template/img/3.jpg">
							<div class="carousel-caption crsl">
								<p>Изделия, разрабатываемые ЗАО ЦНИИ СМ используются для создания большинства современных</p>
								<p>гражданских и военных судов, подводных лодок, а так же портового оборудования</p>
							</div>
						</div>
					</div>
					<!-- <a class="carousel-control left" data-slide="prev" href="#myCarousel">&lsaquo;</a>
					<a class="carousel-control right" data-slide="next" href="#myCarousel">&rsaquo;</a> -->
				</div>
			<!-- </div> -->
	<!-- <div class="container-fluid"> -->
		<div class="row-fluid middle">
			<div class=" span8 nws-block">
				<h3 class="offset1"><a href="/news">НОВОСТИ</a></h3>
					<?php foreach ($newsLastList as $newsItem):?>
						<div class="nws">
							<h4><a href="/news/<?php echo $newsItem['id_news'];?>"><?php echo $newsItem['title_news'];?></a></h4>
							<p class="crtime"><?php echo $newsItem['curr_time'];?></p>
							<p><?php echo $newsItem['text_news'];?></p>
							<i><a class="offset9" href="/news/<?php echo $newsItem['id_news'];?>">Читать далее...</a></i>
						</div>
					<?php endforeach;?>
					

			</div>
			<div class="span3 menust">
				<h3 class="mnu">МЕНЮ</h3>
				<ul>
					<li class="menli">История</li>
					<li class="menli">Достижения</li>
					<li class="menli">Продукция</li>
					<li class="menli">
						<a href="javascript:LicShow()" style="color: white">Сертификаты и лицензии</a>
					</li>
					<li class="menli">
						<a href="javascript:DirShow()" style="color: white">Руководство предприятия</a>
					</li>
				</ul>
			</div>
		</div>
	<!-- </div> -->
	<div class="container-fluid hdd">
		<div class="srtf" id="lic1">
			<div class="row-fluid">
					<h2 class="sil">CЕРТИФИКАТЫ И ЛИЦЕНЗИИ</h2>
			</div>
			<div class="row-fluid lic">
				<div class="span3">
					<img src="template/img/dip1.jpg">
				</div>
				<div class="span3 offset1">
					<img src="template/img/dip2.jpg">
				</div>
				<div class="span3 offset1">
					<img src="template/img/dip3.png">
				</div>
			</div>
			<div class="row-fluid lic">
				<div class="span3">
					<img src="template/img/dip4.jpg">
				</div>
				<div class="span3 offset1">
					<img src="template/img/dip5.jpg">
				</div>
				<div class="span3 offset1">
					<img src="template/img/dip6.jpg">
				</div>
			</div>
			<div class="row-fluid">
				<div class="offset2">
					<a href="javascript:LicHide()">
						<h3 id="clslic">Закрыть</h3>
					</a>
				</div>
			</div>
			
		</div>
	</div>
	<div class="container-fluid hdd">
		<div class="dirs" id="dir1">
			<div class="row-fluid">
					<h2 class="sil">Руководство предприятия</h2>
			</div>
			<div class="row-fluid dirs-block">
				<div class="offset2 span2">
					<img src="template/img/anonymous.png">
				</div>
				<div class="span6 dirs-text">
					<h3>Александров Михаил Александрович</h3>
					<p>к.т.н. Генеральный директор ЗАО "Центральный научно-исследовательский институт судового машиностроения"</p>
				</div>
			</div>
			<div class="row-fluid dirs-block">
				<div class="offset2 span2">
					<img src="template/img/anonymous.png">
				</div>
				<div class="span6 dirs-text">
					<h3>Богданов Андрей Геннадьевич</h3>
					<p>Заместитель директора по экономике и финансам ЗАО "Центральный научно-исследовательский институт судового машиностроения"</p>
				</div>
			</div>
			<div class="row-fluid dirs-block">
				<div class="offset2 span2">
					<img src="template/img/anonymous.png">
				</div>
				<div class="span6 dirs-text">
					<h3>Маневич Александр Андреевич</h3>
					<p>к.т.н. Главный инженер ЗАО "Центральный научно-исследовательский институт судового машиностроения"</p>
				</div>
			</div>
			<div class="row-fluid">
				<div class="offset2">
					<a href="javascript:DirHide()">
						<h3 id="clslic">Закрыть</h3>
					</a>
				</div>
			</div>
			
		</div>
	</div>
<?php include ROOT.'\views\layouts\footer.php';?>