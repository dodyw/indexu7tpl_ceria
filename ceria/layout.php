<?php include TPL_PATH."header.php"; ?>

  <div id="container" class="col-full">
    <div id="navigation" class="col-full">
      
      <!-- home -->
      <div id="nav-home" class="fl"><a href="<?php print URL; ?>"><img src="<?php print TPL_URL; ?>images/ico-home-active.png" alt=""></a></div>
      
      <!-- menu -->
      <?php print html_content("menu1"); ?>
               
<!--       <div id="btn-cart" class="fr">
        <a href="http://localhost/wordpress/?page_id=17" title="View your shopping cart"><span>Special</span></a>
      </div> -->
        
      <ul id="account-nav" class="nav fr">
        <li class="account">
          <a href="<?php print URL; ?>usercp/" title="My Account">Account</a>
        </li>
      </ul>
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

    <div class="col-full col-4" id="footer-widgets">
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