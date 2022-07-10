<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>Расписание поездок курьеров в регионы</title>
		<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
		<link href="http://fonts.googleapis.com/css?family=Kreon" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="/css/style.css" />
		<script src="/js/jquery-3.6.0.min.js" type="text/javascript"></script>
		<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
		<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
		<link rel="stylesheet" type="text/css" href="/css/daterangepicker.css" />
		<script type="text/javascript">
			<?php 
			$files=explode('_',$content_view);
			$jsfile='js/'.$files[0].'.js';
			if (file_exists($jsfile)) {
				include $jsfile;
			}
			 ?>
		</script>
	</head>
	<body>
		<div id="wrapper">
			<div id="header">
				<div id="logo">
				</div>
				<div id="menu">
					<ul>
						<li class="first active"><a href="/">Главная</a></li>
						<li><a href="/raspisanie">Расписание поездок</a></li>
						<li><a href="/komandirovka">Оформить командировку</a></li>
					</ul>
					<br class="clearfix" />
				</div>
			</div>
			<div id="page">
				<div class="box">
					<?php include 'application/views/'.$content_view; ?>
				</div>
				<br class="clearfix" />
			</div>
			<div id="page-bottom">
			</div>
		</div>
		<div id="footer">
			<a href="/">Мамонов М.К.</a> &copy; 2022</a>
		</div>
	</body>
</html>