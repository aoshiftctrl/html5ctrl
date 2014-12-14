<?php
  require_once('./core/lib/ctrl.php');
?>
<!DOCTYPE html>
<html lang="<?= LANG; ?>">
	<head>
		<title><?= SEITENTITEL; ?></title>

		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta charset="utf-8">
		<meta name="keywords" content="{%keywords}">
		<meta name="description" content="{%description}">
		<meta name="publisher" content="{%publisher}">
		<meta name="robots" content="index,follow">
		
		<!-- iOS Support -->
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="no">
		<link rel="apple-touch-icon" sizes="72x72" href="<?= WEBROOT; ?>app/img/{logo.png}.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?= WEBROOT; ?>app/img/{logo@2x.png}.png">
		<!-- iOS Support -->		
		
		<link rel="stylesheet" type="text/css" href="<?= WEBROOT; ?>app/css/ui.min.css">
		<link type="text/plain" rel="author" href="<?= WEBROOT; ?>humans.txt">
		<!-- Google Webfont Support -->
		<link href="http://fonts.googleapis.com/css?family=Karla" rel="stylesheet" type="text/css">
		<!-- @end -->
	
		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="<?= WEBROOT; ?>plugins/jquery.plugin.js"></script>

    <!--[if lt IE 9]>
    	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

	</head>
	<body>
	 
<?php /* ____ footer tpl */ include("app/tpl/header.tpl"); ?>
	 <section>
  	<?php 
	  
  	 $html = file_get_contents('./app/sites/'.$Site.'.php');
  	 echo $html;
  	 ?>
	 </section>
	 
<?php /* ____ footer tpl */ include("app/tpl/footer.tpl"); ?>
 
	</body>
</html>