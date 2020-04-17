<!doctype html>
<html class="no-js" lang="">

<?php require_once 'head.php'; ?>

<body class="page_inner bk_purple">
  <?php
    require_once 'menu_screen.php';
    require_once 'short_menu.php';
    require_once 'vwipes_loader.php';
  ?>

  <div class="page_consolidate_financials outer_wrapper">
    <div class="cont_left bk_purple">
      <div class="screentop_para">
        <h1>
          <span class="h1 colr_white bk_pink" style="padding: 5px 15px 5px 15px;"> القوائم المالية  </span> </h1>
        <h1>
          <span class="h1 colr_white"> الموحدة  </span>
        </h1>
      </div>

      <div class="horizontal_fBox snipit" style="margin-right: 50px; overflow: visible; margin-top: 50px;">
        <div class="snipit_img" style="border: 1px solid #a54ee1;">
            <img src="img/icons/icon_a.png" alt="">
        </div>
        <div class="snipit_price bk_purple2">
          <span>
            10,665
            <b> مليون ريال سعودي  </b>
          </span> 
        </div>
        <div class="snipit_text" style="background: transparent; margin: -90px 0 0 0; border: 1px solid #a54ee1; width: 20%; text-align: center;">
          <p>
            صافي الربح 
          </p>
        </div>
      </div>

      <div class="ch_num">
        <div>
          <p>
            مجموع ايرادات  
          </p>  
          <span> 40,259,106 </span> <b> مليون ريال سعودي  </b>
        </div>
      </div>
    </div>
    <div class="cont_right bk_purple">
      <!-- financials pdfs -->
        <div class="financials_pdfs_wrapper">
          <div>
            <div> &nbsp; </div>
            <div>
              <a href="javascript: void:(0)" class="btn_right">
                <b>  </b>
                <span>
                  قائمة الدخل الشامل الموحدة 
                </span>
              </a>
            </div>
          </div>

          <div>
            <div>
              <a href="javascript: void:(0)" class="btn_left">
                <span>
                  تقرير المراجع المستقل
                </span>
                <b>  </b>
              </a>
            </div>
            <div> &nbsp; </div>
          </div>

          <div>
            <div> &nbsp; </div>
            <div>
              <a href="javascript: void:(0)" class="btn_right">
                <b>  </b>
                <span>
                  قائمة التدفقات النقدية الموحدة 
                </span>
              </a>
            </div>
          </div>

          <div>
            <div>
              <a href="javascript: void:(0)" class="btn_left">
                <span>
                  قائمة الربح أو الخسارة الموحدة 
                </span>
                <b>  </b>
              </a>
            </div>
            <div> &nbsp; </div>
          </div>

          <div>
            <div> &nbsp; </div>
            <div>
              <a href="javascript: void:(0)" class="btn_right">
                <b>  </b>
                <span>
                  قائمة التغيرات في حقوق الملكية الموحدة 
                </span>
              </a>
            </div>
          </div>

          <div>
            <div>
              <a href="javascript: void:(0)" class="btn_left">
                <span>
                  قائمة المركز المالي الموحدة 
                </span>
                <b>  </b>
              </a>
            </div>
            <div> &nbsp; </div>
          </div>

          <div>
            <div> &nbsp; </div>
            <div>
              <a href="javascript: void:(0)" class="btn_right">
                <b>  </b>
                <span>
                  إيضاحات حول القوائم المالية الموحدة 
                </span>
              </a>
            </div>
          </div>
          
        </div>
      <!-- financials pdfs -->
    </div>

  </div>

  <!-- video section | consolidate_financials -->
    <div class="video_wrapper" style="z-index: 99; width: 100%; height: 100vh; position: fixed; top: 0;">
      <video id="category_video" playsinline="" xmuted style="width: 100%; height: 100vh; object-fit: cover; ">
        <source src="video/cat_4.mp4" type="video/mp4">
      </video>
    </div>
  <!-- video section | consolidate_financials -->

  <?php require_once 'scripts.php'; ?>
  <script type="text/javascript" src="js/inner_page.js"></script>
</body>

</html>