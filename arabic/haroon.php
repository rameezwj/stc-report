<!doctype html>
<html class="no-js" lang="">

<?php require_once 'head.php'; ?>

<body class="page_inner">
  <?php
    require_once 'menu_screen.php';
    require_once 'short_menu.php';
    require_once 'vwipes_loader.php';
  ?>
  <style type="text/css">
    .page_board .screentop_para{
      margin: 50px 50px 50px 0;
      overflow: hidden;
      display: inline-block;
      position: relative;
    }
    .page_board .tabular_data{
      width:calc( 100% - 100px );
      margin: 0 auto;
    }
    .page_board .tabular_data .c_row{
     display: flex;
    }
    .page_board .tabular_data .c_row div{
      flex: 1;
      padding: 40px;
      width: calc( 100% / 8 );
      text-align: right;
      color: #4f0f8c;
      border: 1px solid #4f0f8c;
      border-left: none;
      display: inline-flex;
      word-break: break-word;
      align-items: center;
      border-bottom: none;
      transition: all 0.2s ease-in;
    }
    .page_board .tabular_data .c_row div:last-child{
      border-left: 1px solid #4f0f8c;
    }
    .page_board .tabular_data .c_row:last-child div{
      border-bottom: 1px solid #4f0f8c; 
    }
    .page_board .tabular_data .tabular_data_inner .c_row:hover div:first-child{
      background: #FF375E;
    }
    .page_board .tabular_data .tabular_data_inner .c_row div:first-child{
      text-align: center;
      justify-content: center;
    }
    .page_board .tabular_data .tabular_data_inner .c_row:hover div{
      background: #4f0f8c;
      color: #fff;
    }
    .page_board .tabular_data .c_row.second div  {
      padding: 10px;
    }
    .page_board .tabular_data .c_row.first {
      margin-bottom: 20px;
    }
    .page_board .tabular_data .c_row.first div{
      border:none;
      border-left: 1px solid #fff;
      color: #fff;
      padding: 20px;
      text-align: center;
      justify-content: center;
    }
    .page_board .img_wrap {
      position: relative;
      overflow: hidden;
    }
    .page_board .img_wrap .left{
      width: 40%;
      float: left;

    }
    .page_board .img_wrap .right{
      width: 35%;
      float: right;
      padding-top: 40px;
    }
    .page_board .img_wrap img{
      width: 100%;
    }
    .page_board .cwrapper{
        margin-bottom:50px;
    }
   .page_board .bar-wrap{
      position: relative;
      height: 10px;
      width: 100%;
      margin-bottom: 50px;
   }
   
  </style>

  <div class="page_board outer_wrapper">
    <div class="screentop_para">
      <h1>
        <span class="h1 colr_white bk_purple" style="padding: 5px 15px 5px 150px;"> هم
أعضاء مجلس ادارة   </span> </h1>
      <h1>
        <span class="h1 colr_purple"> sa
وتصنيف عضو  </span>
      </h1>
    </div>
    
    <div class="cwrapper">
      <div class="img_wrap">
        <div class="left">
           <img src="img/board_boxes.png">
        </div>
        <div class="right">
          <img src="img/board_boxes2.png">
        </div>
      </div>
       <div class="tabular_data">
        <div class="c_row first bk_purple">
          <div>الرئيس</div>
          <div>الرئيس</div>
          <div>الرئيس</div>
          <div>الرئيس</div>
          <div>الرئيس</div>
          <div>الرئيس</div>
          <div>الرئيس</div>
          <div>الرئيس</div>
        </div>
         <div class="c_row bk_purple second">
            <div class="bk_pink"></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
          </div>
        <div class="tabular_data_inner">
         
          <div class="c_row">
            <div>1</div>
            <div>
                          جانه
            صاحب السمو الملكي
            امير/ محمد بن خالد
            العبدالل

            </div>
            <div>
            استاذ/ أحمد بن
            رئيس مجلس •
            </div>
            <div>
            عضو مجلس 
            ادا
            </div>
            <div>
              بائية
              بكالوريوس بحوث
              ماجستير عل
            </div>
            <div>
            ية
            للتقنية
            خبرة في
            </div>
            <div>
            ر
            مستشار
            مستشار
            </div>
            <div>
              حكومي
            </div>
          </div>
          
          <div class="c_row">
            <div>1</div>
            <div>
                          جانه
            صاحب السمو الملكي
            امير/ محمد بن خالد
            العبدالل

            </div>
            <div>
            استاذ/ أحمد بن
            رئيس مجلس •
            </div>
            <div>
            عضو مجلس 
            ادا
            </div>
            <div>
              بائية
              بكالوريوس بحوث
              ماجستير عل
            </div>
            <div>
            ية
            للتقنية
            خبرة في
            </div>
            <div>
            ر
            مستشار
            مستشار
            </div>
            <div>
              حكومي
            </div>
          </div>

          <div class="c_row">
            <div>2</div>
            <div>
                          جانه
            صاحب السمو الملكي
            امير/ محمد بن خالد
            العبدالل

            </div>
            <div>
            استاذ/ أحمد بن
            رئيس مجلس •
            </div>
            <div>
            عضو مجلس 
            ادا
            </div>
            <div>
              بائية
              بكالوريوس بحوث
              ماجستير عل
            </div>
            <div>
            ية
            للتقنية
            خبرة في
            </div>
            <div>
            ر
            مستشار
            مستشار
            </div>
            <div>
              حكومي
            </div>
          </div>

          <div class="c_row">
            <div>3</div>
            <div>
                          جانه
            صاحب السمو الملكي
            امير/ محمد بن خالد
            العبدالل

            </div>
            <div>
            استاذ/ أحمد بن
            رئيس مجلس •
            </div>
            <div>
            عضو مجلس 
            ادا
            </div>
            <div>
              بائية
              بكالوريوس بحوث
              ماجستير عل
            </div>
            <div>
            ية
            للتقنية
            خبرة في
            </div>
            <div>
            ر
            مستشار
            مستشار
            </div>
            <div>
              حكومي
            </div>
          </div>

          <div class="c_row">
            <div>4</div>
            <div>
                          جانه
            صاحب السمو الملكي
            امير/ محمد بن خالد
            العبدالل

            </div>
            <div>
            استاذ/ أحمد بن
            رئيس مجلس •
            </div>
            <div>
            عضو مجلس 
            ادا
            </div>
            <div>
              بائية
              بكالوريوس بحوث
              ماجستير عل
            </div>
            <div>
            ية
            للتقنية
            خبرة في
            </div>
            <div>
            ر
            مستشار
            مستشار
            </div>
            <div>
              حكومي
            </div>
          </div>
          <div class="c_row">
            <div>5</div>
            <div>
                          جانه
            صاحب السمو الملكي
            امير/ محمد بن خالد
            العبدالل

            </div>
            <div>
            استاذ/ أحمد بن
            رئيس مجلس •
            </div>
            <div>
            عضو مجلس 
            ادا
            </div>
            <div>
              بائية
              بكالوريوس بحوث
              ماجستير عل
            </div>
            <div>
            ية
            للتقنية
            خبرة في
            </div>
            <div>
            ر
            مستشار
            مستشار
            </div>
            <div>
              حكومي
            </div>
          </div>

          <div class="c_row">
            <div>6</div>
            <div>
                          جانه
            صاحب السمو الملكي
            امير/ محمد بن خالد
            العبدالل

            </div>
            <div>
            استاذ/ أحمد بن
            رئيس مجلس •
            </div>
            <div>
            عضو مجلس 
            ادا
            </div>
            <div>
              بائية
              بكالوريوس بحوث
              ماجستير عل
            </div>
            <div>
            ية
            للتقنية
            خبرة في
            </div>
            <div>
            ر
            مستشار
            مستشار
            </div>
            <div>
              حكومي
            </div>
          </div>

          <div class="c_row">
            <div>7</div>
            <div>
                          جانه
            صاحب السمو الملكي
            امير/ محمد بن خالد
            العبدالل

            </div>
            <div>
            استاذ/ أحمد بن
            رئيس مجلس •
            </div>
            <div>
            عضو مجلس 
            ادا
            </div>
            <div>
              بائية
              بكالوريوس بحوث
              ماجستير عل
            </div>
            <div>
            ية
            للتقنية
            خبرة في
            </div>
            <div>
            ر
            مستشار
            مستشار
            </div>
            <div>
              حكومي
            </div>
          </div>

          <div class="c_row">
            <div>8</div>
            <div>
                          جانه
            صاحب السمو الملكي
            امير/ محمد بن خالد
            العبدالل

            </div>
            <div>
            استاذ/ أحمد بن
            رئيس مجلس •
            </div>
            <div>
            عضو مجلس 
            ادا
            </div>
            <div>
              بائية
              بكالوريوس بحوث
              ماجستير عل
            </div>
            <div>
            ية
            للتقنية
            خبرة في
            </div>
            <div>
            ر
            مستشار
            مستشار
            </div>
            <div>
              حكومي
            </div>
          </div>

          <div class="c_row">
            <div>9</div>
            <div>
                          جانه
            صاحب السمو الملكي
            امير/ محمد بن خالد
            العبدالل

            </div>
            <div>
            استاذ/ أحمد بن
            رئيس مجلس •
            </div>
            <div>
            عضو مجلس 
            ادا
            </div>
            <div>
              بائية
              بكالوريوس بحوث
              ماجستير عل
            </div>
            <div>
            ية
            للتقنية
            خبرة في
            </div>
            <div>
            ر
            مستشار
            مستشار
            </div>
            <div>
              حكومي
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bar-wrap">
        <div class="element_bars_hr" style="width: 30%;top: 0;left: 0;z-index: 1;">
          <div class="rightbar bk_purple" style="width: 50%"></div>
          <div class="leftbar bk_pink" style="width: 50%"></div>
        </div>
        <div class="element_bars_hr" style=" width: 15%;top: 0;right: 20%;z-index: 1;">
          <div class="rightbar bk_purple" style="width: 0%"></div>
          <div class="leftbar bk_pink" style="width: 100%"></div>
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