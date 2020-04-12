<!doctype html>
<html class="no-js" lang="">

<?php require_once 'head.php'; ?>

<body class="page_inner">
  <?php
    require_once 'menu_screen.php';
    require_once 'short_menu.php';
    require_once 'vwipes_loader.php';
  ?>
  
  

  <!-- video section | consolidate_financials -->
    <div class="video_wrapper" style="z-index: 99; width: 100%; height: 100vh; position: fixed; top: 0;">
      <video id="category_video" playsinline="" xmuted style="width: 100%; height: 100vh; object-fit: cover; ">
        <source src="video/company_profile.mp4" type="video/mp4">
      </video>
    </div>
  <!-- video section | consolidate_financials -->

  <?php require_once 'scripts.php'; ?>
  <script type="text/javascript" src="js/inner_page.js"></script>
</body>

</html>