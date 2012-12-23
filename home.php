<?php
  require_once('./core/lib/ctrl.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title><?= SEITENTITEL; ?></title>

		<meta charset="utf-8">
		<meta name="keywords" content="{%keywords}">
		<meta name="description" content="{%description}">
		<meta name="publisher" content="{%publisher}">
		<meta name="language" content="<?= LANG; ?>">
		<meta name="robots" content="index,follow">
		
		<!-- iOS Support -->
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0;" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<link rel="apple-touch-icon" sizes="72x72" href="{%imgurl}" />
		<link rel="apple-touch-icon" sizes="114x114" href="{%imgurl@2x}" />
		<!-- iOS Support -->		
		
		<link rel="stylesheet/less" type="text/css" href="<?= WEBROOT; ?>app/css/UI.less">

		<!-- Google Webfont Support -->
		<link href="http://fonts.googleapis.com/css?family=Bitter" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet" type="text/css">		
		<!-- @end -->
	
		<!-- prefere jquery? -->
		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<!-- @end -->

		<!-- prefere zepto? -->
		<!-- <script src="http://zeptojs.com/zepto.min.js"></script>-->   
		<!-- @end -->

		<!-- less clientseitig -->
		<script src="http://lesscss.googlecode.com/files/less-1.3.0.min.js"></script>
		<!-- @end -->

    <script src="<?= WEBROOT; ?>plugins/jquery.plugin.js"></script>

    <!--[if lt IE 9]>
    	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

	</head>
	<body>
	 
	 <header>
  	   	 {%header code}
	 </header>

	 <section>
  	<?php 
  	 $html = file_get_contents('./app/sites/home.php');
  	 echo $html;
  	 ?>
	 </section>
	 
	 <footer>
  	 {%footer code}
	 </footer>
	 
	</body>
</html>