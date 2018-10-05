<?php
  /**
   * Loads the controller to run the site
   * @package     ctrl
   * @filesource  ./core/ctrl.php
   */
   require("./core/ctrl.php"); ?>
<!DOCTYPE html>
<html lang="<?= LANG; ?>">
	<head>
		<title><?= SEITENTITEL ?> &raquo; <?php
    // fetches the individual title
    // @link routes.php
    foreach($Sites as $HtmlTitle){
        if ($App == $HtmlTitle['url']){
          echo $HtmlTitle['site_title'];
          break;
        }
    } ?></title>

		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta charset="utf-8">
		<meta name="keywords" content="<?php
    // fetches the individual keywords
    // @link routes.php
      foreach($Sites as $HtmlTitle){
        if ($App == $HtmlTitle['url']){
          echo $HtmlTitle['site_key'];
          break;
        }
    } ?>">
		<meta name="description" content="<?php
    // fetches the individual description
    // @link routes.php
    foreach($Sites as $HtmlTitle){
        if ($App == $HtmlTitle['url']){
          echo $HtmlTitle['site_description'];
          break;
        }
    } ?>">
		<meta name="robots" content="index,follow">

		<!-- iOS Support -->
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="no">
		<link rel="apple-touch-icon" sizes="72x72" href="<?= WEBROOT; ?>app/img/{logo.png}.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?= WEBROOT; ?>app/img/{logo@2x.png}.png">
		<!-- end iOS Support -->

		<link rel="stylesheet" type="text/css" href="<?= WEBROOT; ?>app/css/ui.min.css">
		<link type="text/plain" rel="author" href="<?= WEBROOT; ?>humans.txt">
		<!-- Google Webfont Support -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<!-- end Google Webfont Support -->

	</head>
	<body>

<?php
  /**
   * Renders the header template file from the tpl directory
   * @filesource  app/tpl/header.php
   */
  include("app/tpl/header.php"); ?>

  <section>
   <?php
   /**
    * Reads the html content from the sites directory
    * @param   string $App is the acutal site helper
    * @param   string $AppSite is the site file (e.g. home.php)
    * @param   string $html reads entire file into a string
    * @link    PHP Documentation (http://php.net/manual/de/function.file-get-contents.php)
    */
    $AppSite = "./app/sites/".$App.".php";

    if (file_exists($AppSite)){
       // include the PHP/HTML content
        include $AppSite;
     } else {
       echo "<div class=\"e404\"><iframe src=\"http://giphy.com/embed/GK2zBA4xXqIPS\" width=\"240\" height=\"180\" frameBorder=\"0\" class=\"giphy-embed\" allowFullScreen></iframe><p><a href=\"http://giphy.com/gifs/loop-space-lost-GK2zBA4xXqIPS\">via GIPHY</a></p></div>";
     } ?>
  </section>

   <?php
     /**
      * Renders the footer template file from the tpl directory
      * @filesource  app/tpl/footer.php
      */
     include("app/tpl/footer.php"); ?>
  <script src="<?= WEBROOT; ?>app/js/app.min.js"></script>
	</body>
</html>
