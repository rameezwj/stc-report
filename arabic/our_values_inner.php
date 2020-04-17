<!doctype html>
<html class="no-js" lang="">

<?php require_once 'head.php'; ?>

<body class="page_inner">
  <?php
    require_once 'menu_screen.php';
    require_once 'short_menu.php';
    require_once 'vwipes_loader.php';
  ?>
<div class="page_values">
  <div class="cont_left bk_white"></div>

  <div class="cont_right bk_purple">
    <div class="screentop_para">
      <h1>
        <span class="h1 colr_white bk_pink">قيمنا </span>
      </h1>
    </div>
  </div>

  <div class="values_List_wrapper">
    <div class="element_bars_hr" style="width: 40%;top: 30px;left: calc( 50% - 100px );z-index: 1;">
      <div class="rightbar bk_white" style="width: 10%"></div>
      <div class="leftbar bk_pink" style="width: 90%"></div>
    </div>
    <div class="value_item">
      <div>
        <h3> الحيوية  </h3>
        <span> مرنين  </span>
        <span> متعاونين  </span>
        <span> متجددين  </span>
      </div>
      <div>
        <div>
          <img src="img/icon_v1.png" />
          <p>
            نتطلع باستمرار إلى اعتماد طرق جديدة أفضل، وتحسينها في إطار قيامنا بأعمالنا، من خلال رؤية جديدة وذكية ومبتكرة.
          </p>
        </div>
      </div>
    </div>

    <div class="value_item pink_border">
      <div>
        <h3> التفاني  </h3>
        <span>مهتمون </span>
        <span> ملتزمون </span>
        <span>جديرون بالثقة </span>
      </div>

      <div>
        <div>
          <img src="img/icon_v2.png" />
          <p>
            ملتزمون بتقديم "المستقبل" بأكثر الطرق مكافأة لعملائنا وموظفينا. 
          </p>
        </div>
      </div>
    </div>

    <div class="value_item">
      <div>
        <h3> الإقدام  </h3>
        <span> مبتكرين  </span>
        <span>   فضوليين   </span>
        <span> استباقين  </span>
      </div>
      <div>
        <div>
          <img src="img/icon_v3.png" />
          <p>
            نحن “لا نكلّ ولا نملّ” في سبيل البحث عن أفضل الحلول الممكنة لعملائنا وموظفينا.
          </p>
        </div>
      </div>
    </div>

    <div class="element_bars_hr" style="width: 60%;bottom: -16px;left: 50%;z-index: 1;transform: translateX(-50%);">
      <div class="rightbar bk_white" style="width: 50%;"></div>
      <div class="leftbar bk_pink" style="width: 50%;"></div>
    </div>
  </div>
</div>

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
