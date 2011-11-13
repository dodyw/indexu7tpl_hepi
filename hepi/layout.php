<?php include TPL_PATH."header.php"; ?>

  <div id="container" class="col-full main">
    <div id="navigation" class="col-full">
      
      <!-- menu -->
      <?php print html_content("menu1"); ?>
               
      <div id="search-top">      
        <form role="search" method="get" id="searchform" class="searchform" action="search.php">
          <label class="screen-reader-text" for="s">Search for:</label>
          <input type="text" value="" name="q" id="s"  class="field s" placeholder="Search for listing" />
          <input type="image" class="submit btn" name="submit" value="Search" src="<?php print TPL_URL; ?>images/ico-search.png">
        </form>
        <div class="fix"></div>
      </div><!-- /.search-top -->
        
    </div><!-- /#navigation -->


    <div class="col-full" id="content">
      <div class="col-left" id="main">      

        <?php print html_content("breadcrumb"); ?> 
        <?php print html_content("main"); ?>                    
      
      </div><!-- /#main -->

      <div class="col-right" id="sidebar">
  
        <div class="primary">
          <?php print html_content("sidebar"); ?> 
        </div>

      </div><!-- /#sidebar -->

    </div><!-- /#content -->

  </div>
  <div id="container" class="col-full">

    <div class="col-4" id="footer-widgets">
      <div class="block footer-widget-1">
        <?php print html_content("footer1"); ?> 
      </div><!-- /.block footer-widget-1 -->

      <div class="block footer-widget-2">
        <?php print html_content("footer2"); ?> 
      </div><!-- /.block footer-widget-2 -->

      <div class="block footer-widget-3">
        <?php print html_content("footer3"); ?> 
      </div><!-- /.block footer-widget-3 -->

      <div class="block footer-widget-4">
        <?php print html_content("footer4"); ?> 
      </div><!-- /.block footer-widget-4 -->                    
                  
      <div class="fix"></div>
    </div><!-- /#footer-widgets -->    

  </div><!-- /#container -->

</div><!-- /#wrapper -->

      
<?php include TPL_PATH."footer.php"; ?>