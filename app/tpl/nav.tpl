<nav>
  <ul>
    <?php
      /** renders the site navigation
       * @param         array $Sites the sites for navigation
       * @filesource    ./core/routes.php
       */
      foreach($Sites as $NavSite){
        echo "<li><a href=\"". WEBROOT . $NavSite['url'] ."/\" title=\"". $NavSite["site_title"] ."\">" .$NavSite['site_title']. "</a></li>";
      } ?>
  </ul>
  <span class="clearfix"></span>
</nav>
