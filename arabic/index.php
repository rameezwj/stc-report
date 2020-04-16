<!doctype html>
<html class="no-js" lang="">

<?php require_once 'head.php'; ?>

<body class="landing_screen">
  <?php
    require_once 'menu_screen.php';
    require_once 'short_menu.php';
    require_once 'vwipes_loader.php';
  ?>
    <!-- landing slider -->
  <div class="landing_slider_wrapper">
    <div class="lslides bk_purple landing_active_slide" landing-data-slide="1">
      <!-- <canvas style="position: fixed; z-index: 21; pointer-events: none;" class="p-canvas-webgl" id="canvas-webgl"></canvas> -->
      <?php require_once 'slide_landing.php'; ?>
    </div>
    <div class="lslides bk_purple" landing-data-slide="2">
      <?php require_once 'slide_financials.php'; ?>
    </div>
    <div class="lslides bk_purple" landing-data-slide="3">
      <?php require_once 'slide_chairman.php'; ?>
    </div>
    <div class="lslides bk_purple" landing-data-slide="4">
      <?php require_once 'slide_highlights.php'; ?>
    </div>
  </div>
  <!-- landing slider -->

  <!-- <div class="landing_wipes1 bk_pink"></div>
  <div class="landing_wipes2 bk_pink"></div>
  <div class="landing_wipes3 bk_purple"></div>
  <div class="landing_wipes4 bk_white"></div>
  <div class="landing_wipes5 bk_white"></div> -->

  <div class="landing_wipes1 bk_white"></div>
  <div class="landing_wipes2 bk_white"></div>
  <div class="landing_wipes3 bk_purple"></div>
  <div class="landing_wipes4 bk_purple"></div>
  <div class="landing_wipes5 bk_white"></div>

  <?php require_once 'scripts.php'; ?>
</body>

</html>
