<!doctype html>
<html class="no-js" lang="">

<?php require_once 'head.php'; ?>

<body class="page_inner">
  <?php
    require_once 'menu_screen.php';
    require_once 'short_menu.php';
    require_once 'vwipes_loader.php';
  ?>
<div class="page_mission">
    <div class="cont_left bk_white">
      <div class="media_content">
          <div class="img_wrap">
              <div class="element_bars_hr" style="width: 600px; top: 20px; right: -60%; z-index: 1;">
                <div class="rightbar bk_white" style="width: 10%"></div>
                <div class="leftbar bk_pink" style="width: 90%"></div>
              </div>
              <img src="../img/icons/icon_a.png" alt="">
          </div>
          <p class="content_para">
              نحن نبتكر ونقدم أبعاد أكبر
              وأكثر إثراءً لحياة الناس
              .الشخصية والمهن
          </p>
      </div>
    </div>

    <div class="cont_right bk_purple">
      <div class="screentop_para">
        <h1>
            <span class="h1 colr_white bk_pink"> ؤية الكة  </span> </h1>
        <h1>
            <span class="h1 colr_white">وغايت  </span>
        </h1>
      </div>

      <div class="mv_content_wrap">
        <img src="../img/icons/icon_a.png" alt="">
        <p>
        نحن رواد عالميين نقدم
        خدمات رقمية ومنصات
        مبتكرة لعمئنا في دول
        الق اوسط وشمال
        </p>
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