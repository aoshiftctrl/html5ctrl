<?php

  /**
   * Router for the site structure and content
   * extend the array for new content Sites
   * actually only 1-level navigation possible
   * @filesource  ./core/routes.php
   * @package     ctrl
   * @param       array $Sites is the website navigation
   * @param       array key "url" is the request uri
   * @param       array key "site_title" extends the <title> tag
   * @param       array key "site_key" individual keywords <meta> tag
   * @param       array key "site_description" individual description <meta> tag
   * @link        is used in the controller ./core/ctrl.php file
   * @author      Rej <rej>
   */
  $Sites = array (
    "home" => array(
              "url" => "home",
              "site_title" => "Startseite",
              "site_key" => "homepage",
              "site_description" => "A bootstrap homepage"),
    "cupcake" => array(
              "url" => "cupcake",
              "site_title" => "Cupcake",
              "site_key" => "Yummy",
              "site_description" => "A cupcake"),
    "coffee" => array(
              "url" => "coffee",
              "site_title" => "Coffee",
              "site_key" => "Hot",
              "site_description" => "A hot coffee")
  );
