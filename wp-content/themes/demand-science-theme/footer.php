

  <footer>
    <div class="row">
      <div class="col-xs-0 col-md-2 col-md-offset-1">
        <?php wp_nav_menu(array('theme_location'=>'iconmenu')); ?>
      </div>
      <div class="col-xs-12 col-md-2">
        <?php wp_nav_menu(array('theme_location'=>'whymenu')); ?>
      </div>
      <div class="col-xs-12 col-md-2">
        <?php wp_nav_menu(array('theme_location'=>'solutionsmenu')); ?>
      </div>
      <div class="col-xs-12 col-md-2">
        <?php wp_nav_menu(array('theme_location'=>'contactmenu')); ?>
      </div>
      <div class="col-xs-12 col-md-2">
        <p class="footer-p">
          17 Main Street<br>
          Topsfield, MA 01983
        </p>
      </div>
    </div>

    <div class="footer-divider"></div>

    <?php wp_nav_menu(array('theme_location'=>'lowerfootermenu')); ?>
  </footer>

  <?php wp_footer(); ?>

  </body>
</html>
