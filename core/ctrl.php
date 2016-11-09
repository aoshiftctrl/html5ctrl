<?php

  /**
   * Controller for the minimal webdevelopment framework
   * PHP version 5
   * @filesource  ./core/ctrl.php
   * @package     ctrl
   * @license     CC BY-SA 4.0 (https://creativecommons.org/licenses/by-sa/4.0/)
   * @author      Rej <rej>
   * @link        https://github.com/aoshiftctrl/html5ctrl
   */
  /**
   * PHP error handling
   * remove comments slashes // for development mode
   */
  // error_reporting(~0);
  // ini_set('display_errors', 1);


  /**
   * PHP constant for use in site
   * @param       constant WEBROOT for webserver directory structure
   * @param       constant HOME_DIRECTORY name of the homepage
   * @param       constant SEITENTITEL content for <title> tag
   * @param       constant language attribute for <html> tag
   * @author      Rej <rej>
   */
  define ("WEBROOT", "../");
  define ("HOME_DIRECTORY", "home");
  define("SEITENTITEL", "html5ctrl - a minimal html5 framework");
  define("LANG","de");


  /**
   * The routes.php contains the sites for the Navi and the content
   * @filesource ./core/routes.php
   */
  include_once("routes.php");

  /**
   * Parsing the url to handle site navigation
   * @param       array $Url parses the request uri
   * @param       array $UrlApp explodes the array
   * @param       string $App is the acutal site
   */
	$Url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
	$UrlApp = explode("/", $Url);
  // configure this array key to your webserver folder structure
  $App = $UrlApp[2];


  /**
   * Redirect function checks if the site url is valid and
   * the requestet url is in the routers.php
   * @package     ctrl
   * @param       string $App the current site
   * @param       array $Sites the sites for navigation and meta tags
   * @filesource ./core/routes.php
   * @return      $ValidUrl
   * @author      Rej <rej>
   */
  function RedirectBaseUrl($App, $Sites){
    // check if the url a valid site for the navigation
    $ValidUrl = array_key_exists($App, $Sites);
    // inital redirect to the home directory
    if (empty($App)){
        header("location: ./".HOME_DIRECTORY."/");
      // redirect to the home directory if it's not in the site array
    } else if ($ValidUrl === false){
        header("location: ./".HOME_DIRECTORY."/");
    }

  }
  // inital function call
  RedirectBaseUrl($App, $Sites);
