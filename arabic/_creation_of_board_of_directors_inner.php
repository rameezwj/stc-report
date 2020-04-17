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
    /*page_contribution_a*/
    .page_contribution_a .screentop_para{
      margin: 50px 50px 50px 0;
      overflow: hidden;
      display: inline-block;
      position: relative;
    }
    .page_contribution_a .tabular_data{
      width:calc( 100% - 200px );
      margin: 0 auto;
      clear: both;
    }
    .page_contribution_a .tabular_data .c_row{
     display: flex;
    }
    .page_contribution_a .tabular_data .c_row div{
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
    .page_contribution_a .tabular_data .c_row div:last-child{
      border-left: 1px solid #4f0f8c;
    }
    .page_contribution_a .tabular_data .c_row:last-child div{
      border-bottom: 1px solid #4f0f8c; 
    }
    .page_contribution_a .tabular_data .tabular_data_inner .c_row:hover div:first-child{
      background: #FF375E;
    }
    .page_contribution_a .tabular_data .tabular_data_inner .c_row div:first-child{
      text-align: center;
      justify-content: center;
    }
    .page_contribution_a .tabular_data .tabular_data_inner .c_row:hover div{
      background: #4f0f8c;
      color: #fff;
    }
    .page_contribution_a .tabular_data .c_row.second div  {
      padding: 10px;
    }
    .page_contribution_a .tabular_data .c_row.first {
      margin-bottom: 20px;
    }
    .page_contribution_a .tabular_data .c_row.first div{
      border:none;
      border-left: 1px solid #fff;
      color: #fff;
      padding: 20px;
      text-align: center;
      justify-content: center;
    }

    .page_contribution_a .tabular_data2{
      width:calc( 100% - 200px );
      margin: 0 auto;
      clear: both;
    }
    .page_contribution_a .tabular_data2 .c_row{
     display: flex;
    }

    .page_contribution_a .tabular_data2 .c_row.first.table_white div{
      color: #4f0f8c;
      border: 1px solid #4f0f8c;
      border-left: none;
      border-top: none;
    }
     .page_contribution_a .tabular_data2 .c_row.first.table_white div.last div.c_row{
      border-left: 0 !important;
    }
    .page_contribution_a .tabular_data2 .c_row.first.table_white div span{
      border-left: 1px solid #4f0f8c !important;
    }
    .page_contribution_a .tabular_data2 .c_row.first.table_white div span:last-child{
      border-left: none !important;
    }
    .page_contribution_a .tabular_data2 .c_row div{
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
    .page_contribution_a .tabular_data2 .c_row div:last-child{
      border-left: 1px solid #4f0f8c !important;
    }
    .page_contribution_a .tabular_data2 .c_row:last-child div{
      border-bottom: 1px solid #4f0f8c; 
    }
    .page_contribution_a .tabular_data2 .tabular_data_inner .c_row:hover div:first-child{
      background: #FF375E;
    }
    .page_contribution_a .tabular_data2 .tabular_data_inner .c_row div:first-child{
      text-align: center;
      justify-content: center;
    }
    .page_contribution_a .tabular_data2 .tabular_data_inner .c_row:hover div{
      background: #4f0f8c;
      color: #fff;
    }
    .page_contribution_a .tabular_data2 .c_row.second div  {
      padding: 10px;
    }
    .page_contribution_a .tabular_data2 .c_row.first {
      margin-bottom: 0;
    }
    .page_contribution_a .tabular_data2 .c_row.first div{
      border:none;
      border-left: 1px solid #fff;
      color: #fff;
      padding: 20px;
      text-align: center;
      justify-content: center;
    }
    .page_contribution_a .tabular_data2 .c_row.first div.last{
      padding: 0;
      flex-wrap: wrap;
      flex: 20%;
      align-items: initial;
    }
    .page_contribution_a .tabular_data2 .c_row.first div.last .f-row{
      display: flex;
      flex: initial;
      flex-wrap: wrap;
      flex: 0 0 100%;
      border: none;
      padding: 0;
    }
    .page_contribution_a .tabular_data2 .c_row.first div.last .f-row span{
      display: inline-flex;
      word-break: break-word;
      align-items: center;
      flex: 1;
      height: 100%;
       border-left: 1px solid #fff; 
       border-top: 1px solid #fff; 
      width: 50%;
      justify-content: center;
      padding: 10px 20px;
    }
    .page_contribution_a .tabular_data2 .c_row.first div.last .f-row span:last-child{
       border-left: none !important;
    }
    .page_contribution_a .img_wrap {
      position: relative;
      overflow: hidden;
    }
    .page_contribution_a .img_wrap .left{
      width: 60%;
      float: left;

    }
    .page_contribution_a .img_wrap .right{
      width: 35%;
      float: right;
    }
    .page_contribution_a .img_wrap img{
      width: 100%;
    }
    .page_contribution_a .cwrapper{
        margin-bottom:50px;
    }
    .page_contribution_a .bar-wrap{
      position: relative;
      height: 10px;
      width: 100%;
      margin-bottom: 50px;
    }
   
   .page_contribution_a .sp_wrap .content-wrapper {
      position: relative;
      /*margin: 50px 0;*/
    }
    .page_contribution_a .sp_wrap .content-wrapper.c-row-reverse .left{
      width: 50%;
      float: right;
    }
    .page_contribution_a .sp_wrap .content-wrapper.c-row-reverse .left .box_center_content{
      float: right;
      width: 90%;
    }
    .page_contribution_a .sp_wrap .content-wrapper.c-row-reverse .right{
    }
    .page_contribution_a .sp_wrap .content-wrapper:after {
      content: '';
      display: table;
      clear: both;
    }
    .page_contribution_a .sp_wrap .content-wrapper .left{
      width: 50%;
      float: left;
      position: relative;
      min-height: 250px;
    }
    .page_contribution_a .sp_wrap .content-wrapper .left .box_center_content{
        /*margin:0 auto;*/
        width: 80%;
        min-height: 400px;
        /*float: left;*/
    }

    .page_contribution_a .sp_wrap .content-wrapper .left .box_center_content p{
      font-size: 28px;
      line-height: 38px;
      font-family: "stc_light";
    }
    .page_contribution_a .sp_wrap .content-wrapper .img-wrap{
      height: 400px;
    }
    .page_contribution_a .sp_wrap .content-wrapper .img-wrap img{
      height: 100%;
      width: 100%;
      object-fit: cover;
      object-position: top right;
    }
    .page_contribution_a .sp_wrap .content-wrapper .right{
      width: 40%;
      float: right;
      position: relative;
      min-height: 250px;
    }
   .page_contribution_a .sp_wrap .sp_row{
        display: flex;
        margin:50px 0;
   }
   .page_contribution_a .sp_wrap .sp_row .left,
   .page_contribution_a .sp_wrap .sp_row .right{
    flex: initial;
   }
  .page_contribution_a .sp2_row .left,
  .page_contribution_a .sp2_row .right{
    height: 400px;
  }
  .page_contribution_a .sp2_row .right
  {
    height: 400px;
    padding: 40px;
    width: 45%;
  }
  .page_contribution_a .sp_wrap .sp_row .right .content_para{
    margin-bottom: 0;
  }
  .page_contribution_a .sp_wrap .bar-wrap {
    position: absolute;
    height: 60px;
    width: 80%;
    top: 50%;
    right: 0;
    transform: translate(0,-100%);
  }
  .page_contribution_a .table_4 .tabular_data2 .c_row div{
        width: calc( 100% / 7) !important;
        flex: auto ;
  }
  .page_contribution_a .table_4{
     display: flex;
    width: calc(100% - 200px );
    margin: 0 auto;
  }
  .page_contribution_a .table_4 .tabular_data2{
    margin: 0 !important;
    
  }
 .page_contribution_a .table_4 .c_left{
  width: 80%;
 }
 .page_contribution_a .table_4 .c_right
  {
    display: inline-flex;
    width: 20%;
  }
  .page_contribution_a .c_right div{
    height: 100%;
    justify-content: center;
    align-items: center;
    flex: 1;
    border: 1px solid;
    border: 1px solid #4f0f8c;
    display: inline-flex;
    padding: 30px;
    float: right;
  }
    .page_contribution_a .c_right div:first-child{
      flex: 0;
    }
    /*page_contribution_a*/
    .page_contribution_1 {
    position: relative;
    overflow: hidden;
    height: 100vh;
    }

    .page_contribution_1 .content_para {
    font-family: 'stc_light';
    text-align: right;
    }

    .page_contribution_1 .cont_right {
    width: 50%;
    float: right;
    height: 100%;
    position: relative;
    }

    .page_contribution_1 .cont_left {
    width: 50%;
    float: left;
    height: 100%;
    position: relative;
    }

    .page_contribution_1 .cont_left .media_content {
    width: 90%;
    /*height: 250px;*/
    border: 1px solid #f24b5d;
    position: absolute;
    top: 60%;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    right: -100px;
    padding: 30px 150px 30px 30px;
    z-index: 1;
    }

    .page_contribution_1 .cont_left .content_para {
    margin: 10px 0 0 0;
    font-size: 18px;
    line-height: 26px;
    text-align: right;
    }

    .page_contribution_1 .cont_right .screentop_para {
    margin: 50px 50px 0 0;
    font-size: 24px;
    }

    .page_contribution_1 .cont_right .mv_content_wrap {
      width: 50%;
      margin: 50px 50px 0 0;
      height: auto;
      position: relative;
    }

    .page_contribution_1 .cont_right .mv_content_wrap p {
      font-size: 28px;
      line-height: 38px;
      position: relative;
      font-family: "stc_light";
      color: #fff;
      margin: 10px 0 0 0;
    }

    .page_contribution_1 .img_wrap{
      position: absolute;
      bottom: 40px;
      z-index: 9;
      /* right: 0; */
      height: 30px;
      left: -29px;
      width: 300px;
    }

    /*HELPER CLASSES*/
    .marginr50{
    margin-right: 50px;
    }
    .nopadding{
    padding: 0 !important;
    }
    .noheight{
    height: auto !important;
    min-height: auto !important;
    max-height: auto !important;
    }
    .nomargin{
    margin: 0 !important;
    }
    /*HELPER CLASSES*/

  </style>
<div class="main_boc">
    <div class=" outer_wrapper">
      <div class="page_contribution_1">
        <div class="cont_left bk_white">
          <div class="media_content">
            <p class="content_para">
            ‫السعودية‬ ‫ت‬ ‫تصا‬ ‫ا‬ ‫كة‬ ‫ل‬ ‫ساس‬ ‫ا‬ ‫النظام‬ ‫حدد‬ ‫‪(stc‬‬
            ‫ما‬ ‫وهو‬ ‫أعضاء‪،‬‬ ‫بتسعة‬ ‫دارة‬ ‫ا‬ ‫مجلس‬ ‫أعضاء‬ ‫عدد‬
            ‫هيئة‬ ‫عن‬ ‫الصادرة‬ ‫كات‬ ‫ال‬ ‫حوكمة‬ ‫ئحة‬ ‫مع‬ ‫يتوافق‬
            ‫إدارة‬ ‫مجلس‬ ‫‪2018‬م‬ ‫عام‬ ‫في‬ ‫اُنتخب‬ ‫وقد‬ ‫المالية‪،‬‬ ‫السوق‬
            ‫ث‬ ‫ث‬ ‫ولمدة‬ ‫‪28/4/2018‬م‬ ‫في‬ ‫السابعة‬ ‫للدورة‬ ‫جديد‬
            ‫بأسماء‬ ‫قائمة‬ ‫التالية‬ ‫الجداول‬ ‫وتُبين‬ ‫دية‪،‬‬ ‫مي‬ ‫سنوات‬
            ‫وعضويتهم‬ ‫السابعة‪،‬‬ ‫دورته‬ ‫في‬ ‫دارة‬ ‫ا‬ ‫مجلس‬ ‫أعضاء‬
            ‫المدرجة‬ ‫المساهمة‬ ‫كات‬ ‫ال‬ ‫في‬ ‫دارة‬ ‫ا‬ ‫مجالس‬ ‫في‬
            ‫المملكة‬ ‫داخل‬ ‫المدرجة‬ ‫وغير‬ ‫المالية‬ ‫السوق‬ ‫في‬</p>
          </div>
       
        </div>

        <div class="cont_right bk_purple">
          <div class="screentop_para">
          <h1>
          <span class="h1 colr_white bk_pink"> ‫دارة‬ ‫ا‬ ‫مجلس‬ ‫تكوين‬</span> </h1>
          <h1>
          <span class="h1 colr_white">
            ‫أعضائه‬ ‫وتصنيف‬ ‫ولجانه‬
            ‫التنفيذية‬ ‫دارة‬ ‫وا‬ 
          </span>
          </h1>
          </div>
          <div class="img_wrap">
            <div class="element_bars_hr" style="width: 100%; height:100%;position: relative; margin: 0;">
              <div class="rightbar bk_pink" style="width: 90%"></div>
              <div class="leftbar bk_purple" style="width: 10%"></div>
            </div>
          </div>
        </div>
      </div>
  
      <div class="page_contribution_a margint50">
        <div class="cwrapper ">
          <div class="screentop_para">
            <h1>
              <span class="h1 colr_white bk_purple" style="padding: 5px 15px 5px 150px;"> ‫
              ‫ دارة‬ ‫ا‬ ‫مجلس‬ ‫أعضاء‬             
              </span> 
            </h1>
            <h1>
              <span class="h1 colr_purple"> 
               ‫عضويتهم‬ ‫وتصنيف‬ ‫ولجانه‬
              </span>
            </h1>
          </div>
          <div class="img_wrap" style="margin-top: -150px;">
            <div class="left">
               <img src="img/board_boxes.png">
            </div>
          </div>
          <div class="tabular_data">
            <div class="c_row first bk_purple">
              <div>‫م‬</div>
              <div>‫سم‬ ‫ا‬</div>
              <div>‫العضوية‬</div>
              <div>‫العلمية‬ ‫ت‬ ‫المؤه‬</div>
              <div>‫العملية‬ ‫الخبرات‬</div>
              <div>‫الحالية‬ ‫الوظيفة‬</div>
              <div>‫السابقة‬ ‫الوظيفة‬</div>
              <div>‫العضوية‬ ‫تصنيف‬</div>
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
        <div class="cwrapper">
          <div class="screentop_para">
          <h1>
            <span class="h1 colr_white bk_purple" style="padding: 5px 15px 5px 150px;"> 
             ‫‫دارة‬ ‫ا‬ ‫مجلس‬ ‫أعضاء‬
            </span> 
          </h1>
          <h1>
            <span class="h1 colr_purple"> 
            ‫‫دارة‬ ‫ا‬ ‫مجلس‬ ‫أعضاء‬
            </span>
          </h1>
          </div>
           <div class="tabular_data">
            <div class="c_row first bk_purple">
              <div>‫م‬</div>
              <div>‫سم‬ ‫ا‬</div>
              <div>‫العضوية‬</div>
              <div>‫العلمية‬ ‫ت‬ ‫المؤه‬</div>
              <div>‫العملية‬ ‫الخبرات‬</div>
              <div>‫الحالية‬ ‫الوظيفة‬</div>
              <div>‫السابقة‬ ‫الوظيفة‬</div>
              <div>‫العضوية‬ ‫تصنيف‬</div>
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

        <div class="cwrapper">
          <div class="screentop_para">
          <h1>
            <span class="h1 colr_white bk_purple" style="padding: 5px 15px 5px 150px;"> &#8235;
              ‫مجلس‬ ‫لجان‬ ‫أعضاء‬            
            </span> 
          </h1>
          <h1>
            <span class="h1 colr_purple"> 
            ‫‫‫الخارجيين‬ ‫دارة‬ ‫ا‬‬
            </span>
          </h1>
          </div>
           <div class="tabular_data">
            <div class="c_row first bk_purple">
              <div>‫م‬</div>
              <div>‫سم‬ ‫ا‬</div>
              <div>‫العضوية‬</div>
              <div>‫العلمية‬ ‫ت‬ ‫المؤه‬</div>
              <div>‫العملية‬ ‫الخبرات‬</div>
              <div>‫الحالية‬ ‫الوظيفة‬</div>
              <div>‫السابقة‬ ‫الوظيفة‬</div>
              <div>‫العضوية‬ ‫تصنيف‬</div>
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

        <div class="cwrapper">
          <div class="screentop_para">
          <h1>
            <span class="h1 colr_white bk_purple" style="padding: 5px 15px 5px 150px;"> &#8235;
            ‫دارة‬ ‫ا‬ ‫أعضاء‬
            </span> 
          </h1>
          <h1>
            <span class="h1 colr_purple"> 
           ‫التنفيذية‬
            </span>
          </h1>
          </div>
            <div class="tabular_data">
                <div class="c_row first bk_purple">
                  <div>‫م‬</div>
                  <div>‫سم‬ ‫ا‬</div>
                  <div>‫العضوية‬</div>
                  <div>‫العلمية‬ ‫ت‬ ‫المؤه‬</div>
                  <div>‫العملية‬ ‫الخبرات‬</div>
                  <div>‫الحالية‬ ‫الوظيفة‬</div>
                  <div>‫السابقة‬ ‫الوظيفة‬</div>
                  <div>‫العضوية‬ ‫تصنيف‬</div>
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

        <div class="cwrapper">
          <div class="screentop_para">
          <h1>
            <span class="h1 colr_white bk_purple" style="padding: 5px 15px 5px 150px;"> 
            ‫‫عضو‬ ‫يكون‬ ‫التي‬ ‫كات‬ ‫ال‬ ‫أسماء‬
            </span> 
          </h1>
          <h1>
            <span class="h1 colr_purple"> 
            ‫‫إدارتها‬ ‫مجالس‬ ‫في‬ ‫عضواً‬ ‫دارة‬ ‫ا‬ ‫مجلس‬
            <br>
            ‫مديريها‬ ‫من‬ ‫أو‬ ‫والسابقة‬ ‫الحالية‬
            </span>
          </h1>
          </div>
          <div class="table_4">
            <div class="c_right">
              <div>1</div>
              <div class="bk_pink colr_white">‫
              الملكي‬ ‫السمو‬ ‫صاحب‬
              ‫خالد‬ ‫بن‬ ‫محمد‬ ‫مير‪/‬‬ ‫ا‬
              ‫الفيصل‬ ‫العبدالله‬
              ‫دارة‬ ‫ا‬ ‫مجلس‬ ‫رئيس‬
              ‫التنفيذية‬ ‫اللجنة‬ ‫رئيس‬
              ‫ستثمار‬ ‫ا‬ ‫لجنة‬ ‫رئيس‬
              </div>
            </div>
            <div class="tabular_data2 margint50 c_left">
               <div class="c_row first bk_purple">
                  <div>م</div>
                  <div>
                  العضو اسم
                  </div>
                  <div class="c_row last">
                     <div class="c_row f-row" style="padding:10px 20px;">2019 العام بداية</div>
                     <div class="c_row f-row">
                       <span>سهم ا عدد</span>
                       <span>االدين أدوات</span>
                     </div>
                  </div>
                   <div>
                    ‫القانوني‬ ‫الكيان‬
                    ‫مدرجة‪(/‬‬ ‫مساهمة‬
                    ‫مدرجة‪/‬‬ ‫غير‬ ‫مساهمة‬
                    ‫مسؤولية‬ ‫ذات‬
                    ‫محددة‬ ‫‪/‬‬ ‫)‪....‬‬
                  </div>
                  <div>
                  ‫‫مجلس‬ ‫عضو‬ ‫يكون‬ ‫التي‬ ‫كات‬ ‫ال‬ ‫أسماء‬
                  ‫)السابقة(‬ ‫إدارتها‬ ‫مجالس‬ ‫في‬ ‫عضواً‬ ‫دارة‬ ‫ا‬
                  </div>
                   <div class="c_row last">
                     <div class="c_row f-row" style="padding:10px 20px;">2019 العام نهاية</div>
                       <div class="c_row f-row">
                       <span>سهم ا عدد</span>
                       <span>الدين أدوات</span>
                     </div>
                   </div>
                   <div>
                    ‫القانوني‬ ‫لكيان‬
                    ‫مدرجة‪(/‬‬ ‫مساهمة‬
                    ‫مدرجة‪/‬‬ ‫غير‬ ‫مساهمة‬
                    ‫مسؤولية‬ ‫ذات‬
                    ‫محددة‬ ‫‪/‬‬ ‫)‪....‬‬
                  </div>
               </div>
                <div class="c_row first table_white">
                 <div>1</div>
                 <div></div>
                 <div class="c_row last">
                   <div class="c_row f-row">
                     <span></span>
                     <span></span>
                   </div>
                 </div>
                 <div></div>
                 <div></div>
                 <div class="c_row last">
                   <div class="c_row f-row">
                     <span></span>
                     <span></span>
                   </div>
                 </div>
                 <div></div>
                </div>

                <div class="c_row first table_white">
                 <div>1</div>
                 <div></div>
                 <div class="c_row last">
                   <div class="c_row f-row">
                     <span></span>
                     <span></span>
                   </div>
                 </div>
                 <div></div>
                 <div></div>
                 <div class="c_row last">
                   <div class="c_row f-row">
                     <span></span>
                     <span></span>
                   </div>
                 </div>
                 <div></div>
                </div>

                <div class="c_row first table_white">
                 <div>1</div>
                 <div></div>
                 <div class="c_row last">
                   <div class="c_row f-row">
                     <span></span>
                     <span></span>
                   </div>
                 </div>
                 <div></div>
                 <div></div>
                 <div class="c_row last">
                   <div class="c_row f-row">
                     <span></span>
                     <span></span>
                   </div>
                 </div>
                 <div></div>
                </div>
            </div>
          </div>
          <div class="table_4 margint50">
            <div class="c_right">
              <div>1</div>
              <div class="bk_pink colr_white">‫
              الملكي‬ ‫السمو‬ ‫صاحب‬
              ‫خالد‬ ‫بن‬ ‫محمد‬ ‫مير‪/‬‬ ‫ا‬
              ‫الفيصل‬ ‫العبدالله‬
              ‫دارة‬ ‫ا‬ ‫مجلس‬ ‫رئيس‬
              ‫التنفيذية‬ ‫اللجنة‬ ‫رئيس‬
              ‫ستثمار‬ ‫ا‬ ‫لجنة‬ ‫رئيس‬
              </div>
            </div>
            <div class="tabular_data2 margint50 c_left">
               <div class="c_row first bk_purple">
                  <div>م</div>
                  <div>
                  العضو اسم
                  </div>
                  <div class="c_row last">
                     <div class="c_row f-row" style="padding:10px 20px;">2019 العام بداية</div>
                     <div class="c_row f-row">
                       <span>سهم ا عدد</span>
                       <span>االدين أدوات</span>
                     </div>
                  </div>
                   <div>
                    ‫القانوني‬ ‫الكيان‬
                    ‫مدرجة‪(/‬‬ ‫مساهمة‬
                    ‫مدرجة‪/‬‬ ‫غير‬ ‫مساهمة‬
                    ‫مسؤولية‬ ‫ذات‬
                    ‫محددة‬ ‫‪/‬‬ ‫)‪....‬‬
                  </div>
                  <div>
                  ‫‫مجلس‬ ‫عضو‬ ‫يكون‬ ‫التي‬ ‫كات‬ ‫ال‬ ‫أسماء‬
                  ‫)السابقة(‬ ‫إدارتها‬ ‫مجالس‬ ‫في‬ ‫عضواً‬ ‫دارة‬ ‫ا‬
                  </div>
                   <div class="c_row last">
                     <div class="c_row f-row" style="padding:10px 20px;">2019 العام نهاية</div>
                       <div class="c_row f-row">
                       <span>سهم ا عدد</span>
                       <span>الدين أدوات</span>
                     </div>
                   </div>
                   <div>
                    ‫القانوني‬ ‫لكيان‬
                    ‫مدرجة‪(/‬‬ ‫مساهمة‬
                    ‫مدرجة‪/‬‬ ‫غير‬ ‫مساهمة‬
                    ‫مسؤولية‬ ‫ذات‬
                    ‫محددة‬ ‫‪/‬‬ ‫)‪....‬‬
                  </div>
               </div>
                <div class="c_row first table_white">
                 <div>1</div>
                 <div></div>
                 <div class="c_row last">
                   <div class="c_row f-row">
                     <span></span>
                     <span></span>
                   </div>
                 </div>
                 <div></div>
                 <div></div>
                 <div class="c_row last">
                   <div class="c_row f-row">
                     <span></span>
                     <span></span>
                   </div>
                 </div>
                 <div></div>
                </div>

                <div class="c_row first table_white">
                 <div>1</div>
                 <div></div>
                 <div class="c_row last">
                   <div class="c_row f-row">
                     <span></span>
                     <span></span>
                   </div>
                 </div>
                 <div></div>
                 <div></div>
                 <div class="c_row last">
                   <div class="c_row f-row">
                     <span></span>
                     <span></span>
                   </div>
                 </div>
                 <div></div>
                </div>

                <div class="c_row first table_white">
                 <div>1</div>
                 <div></div>
                 <div class="c_row last">
                   <div class="c_row f-row">
                     <span></span>
                     <span></span>
                   </div>
                 </div>
                 <div></div>
                 <div></div>
                 <div class="c_row last">
                   <div class="c_row f-row">
                     <span></span>
                     <span></span>
                   </div>
                 </div>
                 <div></div>
                </div>
            </div>
          </div>
          <div class="table_4 margint50">
            <div class="c_right">
              <div>1</div>
              <div class="bk_pink colr_white">‫
              الملكي‬ ‫السمو‬ ‫صاحب‬
              ‫خالد‬ ‫بن‬ ‫محمد‬ ‫مير‪/‬‬ ‫ا‬
              ‫الفيصل‬ ‫العبدالله‬
              ‫دارة‬ ‫ا‬ ‫مجلس‬ ‫رئيس‬
              ‫التنفيذية‬ ‫اللجنة‬ ‫رئيس‬
              ‫ستثمار‬ ‫ا‬ ‫لجنة‬ ‫رئيس‬
              </div>
            </div>
            <div class="tabular_data2 margint50 c_left">
               <div class="c_row first bk_purple">
                  <div>م</div>
                  <div>
                  العضو اسم
                  </div>
                  <div class="c_row last">
                     <div class="c_row f-row" style="padding:10px 20px;">2019 العام بداية</div>
                     <div class="c_row f-row">
                       <span>سهم ا عدد</span>
                       <span>االدين أدوات</span>
                     </div>
                  </div>
                   <div>
                    ‫القانوني‬ ‫الكيان‬
                    ‫مدرجة‪(/‬‬ ‫مساهمة‬
                    ‫مدرجة‪/‬‬ ‫غير‬ ‫مساهمة‬
                    ‫مسؤولية‬ ‫ذات‬
                    ‫محددة‬ ‫‪/‬‬ ‫)‪....‬‬
                  </div>
                  <div>
                  ‫‫مجلس‬ ‫عضو‬ ‫يكون‬ ‫التي‬ ‫كات‬ ‫ال‬ ‫أسماء‬
                  ‫)السابقة(‬ ‫إدارتها‬ ‫مجالس‬ ‫في‬ ‫عضواً‬ ‫دارة‬ ‫ا‬
                  </div>
                   <div class="c_row last">
                     <div class="c_row f-row" style="padding:10px 20px;">2019 العام نهاية</div>
                       <div class="c_row f-row">
                       <span>سهم ا عدد</span>
                       <span>الدين أدوات</span>
                     </div>
                   </div>
                   <div>
                    ‫القانوني‬ ‫لكيان‬
                    ‫مدرجة‪(/‬‬ ‫مساهمة‬
                    ‫مدرجة‪/‬‬ ‫غير‬ ‫مساهمة‬
                    ‫مسؤولية‬ ‫ذات‬
                    ‫محددة‬ ‫‪/‬‬ ‫)‪....‬‬
                  </div>
               </div>
                <div class="c_row first table_white">
                 <div>1</div>
                 <div></div>
                 <div class="c_row last">
                   <div class="c_row f-row">
                     <span></span>
                     <span></span>
                   </div>
                 </div>
                 <div></div>
                 <div></div>
                 <div class="c_row last">
                   <div class="c_row f-row">
                     <span></span>
                     <span></span>
                   </div>
                 </div>
                 <div></div>
                </div>

                <div class="c_row first table_white">
                 <div>1</div>
                 <div></div>
                 <div class="c_row last">
                   <div class="c_row f-row">
                     <span></span>
                     <span></span>
                   </div>
                 </div>
                 <div></div>
                 <div></div>
                 <div class="c_row last">
                   <div class="c_row f-row">
                     <span></span>
                     <span></span>
                   </div>
                 </div>
                 <div></div>
                </div>

                <div class="c_row first table_white">
                 <div>1</div>
                 <div></div>
                 <div class="c_row last">
                   <div class="c_row f-row">
                     <span></span>
                     <span></span>
                   </div>
                 </div>
                 <div></div>
                 <div></div>
                 <div class="c_row last">
                   <div class="c_row f-row">
                     <span></span>
                     <span></span>
                   </div>
                 </div>
                 <div></div>
                </div>
            </div>
          </div>
          <div class="table_4 margint50">
            <div class="c_right">
              <div>1</div>
              <div class="bk_pink colr_white">‫
              الملكي‬ ‫السمو‬ ‫صاحب‬
              ‫خالد‬ ‫بن‬ ‫محمد‬ ‫مير‪/‬‬ ‫ا‬
              ‫الفيصل‬ ‫العبدالله‬
              ‫دارة‬ ‫ا‬ ‫مجلس‬ ‫رئيس‬
              ‫التنفيذية‬ ‫اللجنة‬ ‫رئيس‬
              ‫ستثمار‬ ‫ا‬ ‫لجنة‬ ‫رئيس‬
              </div>
            </div>
            <div class="tabular_data2 margint50 c_left">
               <div class="c_row first bk_purple">
                  <div>م</div>
                  <div>
                  العضو اسم
                  </div>
                  <div class="c_row last">
                     <div class="c_row f-row" style="padding:10px 20px;">2019 العام بداية</div>
                     <div class="c_row f-row">
                       <span>سهم ا عدد</span>
                       <span>االدين أدوات</span>
                     </div>
                  </div>
                   <div>
                    ‫القانوني‬ ‫الكيان‬
                    ‫مدرجة‪(/‬‬ ‫مساهمة‬
                    ‫مدرجة‪/‬‬ ‫غير‬ ‫مساهمة‬
                    ‫مسؤولية‬ ‫ذات‬
                    ‫محددة‬ ‫‪/‬‬ ‫)‪....‬‬
                  </div>
                  <div>
                  ‫‫مجلس‬ ‫عضو‬ ‫يكون‬ ‫التي‬ ‫كات‬ ‫ال‬ ‫أسماء‬
                  ‫)السابقة(‬ ‫إدارتها‬ ‫مجالس‬ ‫في‬ ‫عضواً‬ ‫دارة‬ ‫ا‬
                  </div>
                   <div class="c_row last">
                     <div class="c_row f-row" style="padding:10px 20px;">2019 العام نهاية</div>
                       <div class="c_row f-row">
                       <span>سهم ا عدد</span>
                       <span>الدين أدوات</span>
                     </div>
                   </div>
                   <div>
                    ‫القانوني‬ ‫لكيان‬
                    ‫مدرجة‪(/‬‬ ‫مساهمة‬
                    ‫مدرجة‪/‬‬ ‫غير‬ ‫مساهمة‬
                    ‫مسؤولية‬ ‫ذات‬
                    ‫محددة‬ ‫‪/‬‬ ‫)‪....‬‬
                  </div>
               </div>
                <div class="c_row first table_white">
                 <div>1</div>
                 <div></div>
                 <div class="c_row last">
                   <div class="c_row f-row">
                     <span></span>
                     <span></span>
                   </div>
                 </div>
                 <div></div>
                 <div></div>
                 <div class="c_row last">
                   <div class="c_row f-row">
                     <span></span>
                     <span></span>
                   </div>
                 </div>
                 <div></div>
                </div>

                <div class="c_row first table_white">
                 <div>1</div>
                 <div></div>
                 <div class="c_row last">
                   <div class="c_row f-row">
                     <span></span>
                     <span></span>
                   </div>
                 </div>
                 <div></div>
                 <div></div>
                 <div class="c_row last">
                   <div class="c_row f-row">
                     <span></span>
                     <span></span>
                   </div>
                 </div>
                 <div></div>
                </div>

                <div class="c_row first table_white">
                 <div>1</div>
                 <div></div>
                 <div class="c_row last">
                   <div class="c_row f-row">
                     <span></span>
                     <span></span>
                   </div>
                 </div>
                 <div></div>
                 <div></div>
                 <div class="c_row last">
                   <div class="c_row f-row">
                     <span></span>
                     <span></span>
                   </div>
                 </div>
                 <div></div>
                </div>
            </div>
          </div>
         
        </div>
      </div>
    </div>

   <!--  <div class="bar-wrap">
        <div class="element_bars_hr" style="width: 30%;top: 0;left: 0;z-index: 1;">
          <div class="rightbar bk_purple" style="width: 50%"></div>
          <div class="leftbar bk_pink" style="width: 50%"></div>
        </div>
        <div class="element_bars_hr" style=" width: 15%;top: 0;right: 20%;z-index: 1;">
          <div class="rightbar bk_purple" style="width: 0%"></div>
          <div class="leftbar bk_pink" style="width: 100%"></div>
        </div>
    </div> -->
   
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