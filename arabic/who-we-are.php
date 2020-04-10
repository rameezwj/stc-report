<!doctype html>
<html class="no-js" lang="">

<?php require_once 'head.php'; ?>

<body class="page_inner">
  <?php
    require_once 'menu_screen.php';
    require_once 'short_menu.php';
  ?>
<div class="page_whoweare">
  <div class="cont_left bk_white">
    <div class="media_content">
      <div class="img_wrap">
        <div class="element_bars_hr" style="width: 700px; right: -60%; position: relative; margin: 0 0 30px 0;">
          <div class="rightbar bk_white" style="width: 10%"></div>
          <div class="leftbar bk_pink" style="width: 90%"></div>
        </div>
      </div>
      <p class="content_para">
        نحن شركة رقمية رائدة، نهدف للتقدم دائماً، ونسعى للتطور والابتكار، نفكر بالمستقبل لنصنعه، للبقاء في المقدمة كشركة ذات إرادة وهدف.
      </p>
    </div>
  </div>

  <div class="cont_right bk_purple">
    <div class="screentop_para">
      <h1>
          <span class="h1 colr_white bk_pink"> من  </span> </h1>
      <h1>
          <span class="h1 colr_white"> نحن  </span>
      </h1>
    </div>

    <div class="wwa_img_wrap">
      <img src="img/img_2g_ar.png" alt="">
    </div>
  </div>
</div>

<!-- video section | consolidate_financials -->
  <div class="video_wrapper" style="z-index: 99; width: 100%; height: 100vh; position: fixed; top: 0;">
    <!-- play button -->
    <a id="play_video" style="position: absolute; opacity: 0;">&nbsp;</a>
    <video id="category_video" playsinline="" xmuted style="width: 100%; height: 100vh; object-fit: cover; ">
      <source src="video/company_profile.mp4" type="video/mp4">
    </video>
  </div>
<!-- video section | consolidate_financials -->

<?php require_once 'scripts.php'; ?>
<script type="text/javascript" src="js/inner_page.js"></script>
</body>

</html>
