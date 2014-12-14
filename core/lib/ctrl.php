<?php

  //Define GLOBALS
  define("SEITENTITEL", "html5ctrl - a minimal html5 framework");
  define("LANG","de");
  
  define ("WEBROOT", "../");
  
  
	// The URL PATH
	$URL = parse_url($_SERVER[REQUEST_URI], PHP_URL_PATH);
	// Explode the URL into an array
	$URLA = explode("/", $URL);
	$Site = $URLA[2];

	if (empty($Site)){
		header("location: ./home/");
	}
	
// DEBUG
/*
print_r($URLA);
echo "Seite:" . $Site;
*/

?>