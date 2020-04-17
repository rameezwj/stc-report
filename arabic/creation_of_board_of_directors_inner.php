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
    ul.new_disc li {
    list-style-type: disc;
    }
    /*HELPER CLASSES*/

  </style>
<div class="main_boc">
    <div class=" outer_wrapper">
      <div class="page_contribution_1">
        <div class="cont_left bk_white">
          <div class="media_content">
            <p class="content_para">
            ‫حدد النظام الأساس لشركة الاتصالات السعودية (stc) عدد أعضاء مجلس الإدارة بتسعة أعضاء، وهو ما يتوافق مع لائحة حوكمة الشركات الصادرة عن هيئة السوق المالية، وقد اُنتخب في عام 2018م مجلس إدارة جديد للدورة السابعة في 28/4/2018م ولمدة ثلاث سنوات ميلادية، وتُبين الجداول التالية قائمة بأسماء أعضاء مجلس الإدارة في دورته السابعة، وعضويتهم في مجالس الإدارة في الشركات المساهمة المدرجة في السوق المالية وغير المدرجة داخل المملكة وخارجها وسيرهم الذاتية.</p>
          </div>
       
        </div>

        <div class="cont_right bk_purple">
          <div class="screentop_para">
          <h1>
          <span class="h1 colr_white bk_pink">مجلس إدارة الشركة </span> </h1>
          <h1>
          <span class="h1 colr_white">
            ‫تكوين مجلس الإدارة ولجانه وتصنيف أعضائه والإدارة التنفيذية
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
              ‫ أعضاء مجلس الإدارة           
              </span> 
            </h1>
            <h1>
              <span class="h1 colr_purple"> 
               ‫ ولجانه وتصنيف عضويتهم
              </span>
            </h1>
          </div>
          <div class="img_wrap" style="margin-top: -150px;">
            <div class="left">
               <img src="img/board_boxes.png">
            </div>
          </div>
          <!-- <div class="tabular_data">
            <div class="c_row first bk_purple">
              <div>‫م‬</div>
              <div>‫الاسم </div>
              <div>‫العضوية</div>
              <div>‫المؤهلات العلمية</div>
              <div>‫الخبرات العملية</div>
              <div>‫الوظيفة الحالية </div>
              <div>‫الوظيفة السابقة</div>
              <div>‫تصنيف العضوية</div>
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
                <div>ص
                  احب السمو الملكي الأمير/ محمد بن خالد العبدالله الفيصل
                </div>
                <div>
                  <ul class="new_disc">
                    <li>رئيس مجلس الإدارة</li>
                    <li>رئيس اللجنة التنفيذية</li>
                    <li>رئيس لجنة الاستثمار</li>
                  </ul>
                </div>
                <div>
                  ماجستير إدارة الأعمال
                </div>
                <div>
                  خبرة في المجال المصرفي والإداري لمدة 26 سنة
                </div>
                <div>
                  رئيس مجموعة الفيصلية القابضة
                </div>
                <div>
                  نائب رئيس مجموعة الفيصلية القابضة
                </div>
                <div>
                    مستقل
                </div>
              </div>
              
              <div class="c_row">
                <div>2</div>
                <div>
                  الدكتور/ خالد بن حسين بياري
                </div>
                <div>
                  <ul class="new_disc">
                    <li>نائب رئيس مجلس الإدارة</li>
                    <li>عضو اللجنة التنفيذية</li>
                  </ul>
                </div>
                <div>
                  دكتــــــوراه هندسة كهربائية
                </div>
                <div>
                  استاذ مشارك بجامعة الملك فهد للبترول والمعادن لمدة 12 سنة، وخبرة في الأعمال الإدارية لمدة 23سنة
                </div>
                <div>
                  مساعد وزير الدفاع للشؤون التنفيذية – وزارة الدفاع
                </div>
                <div>
                  الرئيس التنفيذي لشركة الاتصالات السعودية
                </div>
                <div>
                  غير تنفيذي/غير مستقل
                </div>
              </div>

              <div class="c_row">
                <div>3</div>
                <div>
                  الأستاذ/ محمد بن طلال النحاس
                </div>
                <div>
                  <ul class="new_disc">
                    <li>عضو مجلس الإدارة</li>
                    <li>عضو لجنة الاستثمار</li>
                  </ul>
                </div>
                <div>
                  بكالوريوس المحاسبة
                </div>
                <div>
                  خبرة في المجال المصرفي وتطوير الأعمال والإدارة لمدة 32 سنة
                </div>
                <div>
                  محافظ المؤسسة العامة للتقاعد
                </div>
                <div>
                  مدير شبكة الفروع بمصرف الإنماء
                </div>
                <div>
                  غير تنفيذي/غير مستقل
                </div>
              </div>

              <div class="c_row">
                <div>4</div>
                <div>
                الأستاذ/ راشد بن إبراهيم شريف
                </div>
                <div>
                  <ul class="new_disc">
                    <li>عضو مجلس الإدارة </li>
                    <li>عضو لجنة الاستثمار </li>
                  </ul>
                </div>
                <div>
                ماجستير إدارة الأعمال
                </div>
                <div>
                خبرة عملية بالقطاع المالي وعضو عدد من الشركات المساهمة
                </div>
                <div>
                رئيس الإدارة العامة للاستثمارات في الشركات المحلية في صندوق الاستثمارات العامة
                </div>
                <div>
                الرئيس التنفيذي لشركة الرياض المالية
                </div>
                <div>
                غير تنفيذي/غير مستقل
                </div>
              </div>

              <div class="c_row">
                <div>5</div>
                <div>
                  الأستاذ/ سانجاي كابور
                </div>
                <div>
                  <ul class="new_disc">
                    <li>عضو مجلس الإدارة</li>
                    <li>عضو اللجنة التنفيذية</li>
                  </ul>
                </div>
                <div>
                ماجستير إدارة الأعمال
                </div>
                <div>
                خبرة في الأعمال الإدارية لمدة 12 سنة
                </div>
                <div>
                  مستشار
                </div>
                <div>
                  رئيس مجلس تنفيذي في ماكروماكس
                </div>
                <div>
                  غير تنفيذي/غير مستقل
                </div>
              </div>
              <div class="c_row">
                <div>6</div>
                <div>
                  الأستاذ/ روي تشسنات
                </div>
                <div>
                  <ul class="new_disc">
                    <li>عضو مجلس الإدارة</li>
                    <li>عضو لجنة الاستثمار</li>
                  </ul>
                </div>
                <div>
                ماجستير إدارة الأعمال
                </div>
                <div>
                خبرة في الأعمال الإدارية لمدة 31 سنة
                </div>
                <div>
                  مستشار
                </div>
                <div>
                  نائب الرئيس التنفيذي للاستراتيجيةشركة فرايزون
                </div>
                <div>
                  غير تنفيذي/غير مستقل
                </div>
              </div>

              <div class="c_row">
                <div>7</div>
                <div>
                  الدكتور/ إبراهيم بن عبدالرحمن القاضي
                </div>
                <div>
                  <ul class="new_disc">
                    <li>عضو مجلس الإدارة</li>
                    <li>رئيس لجنة المراجعة</li>
                    <li>عضو اللجنة التنفيذية</li>
                  </ul>
                </div>
                <div>
                  دكتوراه هندسة كهربائية
                </div>
                <div>
                  أستاذ هندسة الاتصالات بجامعة الملك سعود لمدة 26 سنة، و35 سنة خبرة في مجال الاتصالات والمعلوماتية والتخطيط الاستراتيجي وإدارة المخاطر وأمن المعلومات والآثار الاقتصادية والاجتماعية للتقنية.
                </div>
                <div>
                مستشار حر
                </div>
                <div>
                كبير المستشارين في هيئة الاتصالات وتقنية المعلومات
                </div>
                <div>
                  مستقل
                </div>
              </div>

              <div class="c_row">
                <div>8</div>
                <div>
                الأستاذ/ أسامة بن ياسين الخياري
                </div>
                <div>
                  <ul class="new_disc">
                    <li>عضو مجلس الإدارة</li>
                    <li>رئيس لجنة الترشيحات والمكافآت</li>
                  </ul>
                </div>
                <div>
                بحوحوكالوريوس بحوث العمليات
                </div>
                <div>
                  خبرة في المجال الإداري لمدة 25سنة
                </div>
                <div>
                متقاعد – ومستشار مستقل
                </div>
                <div> 
                المدير العام ورئيس القطاع الحكومي شركة اكسنتشر
                </div>
                <div>
                  مستقل
                </div>
              </div>

              <div class="c_row">
                <div>9</div>
                <div>
                الأستاذ/ أحمد بن محمد العمران
                </div>
                <div>
                  <ul class="new_disc">
                    <li>عضو مجلس الإدارة</li>
                    <li>عضو لجنة الترشيحات والمكافآت</li>
                  </ul>
                </div>
                <div>
                ماجستير علوم الحاسب الآلي
                </div>
                <div>
                خبره في مجال تقنية المعلومات لمدة 18سنة
                </div>
                <div>
                مساعد محافظ المؤسسة العامة للتأمينات الاجتماعية لتقنية المعلومات
                </div>
                <div>
                مدير عام إدارة البنية الأساسية لتقنية المعلوماتفي المؤسسة العامة للتأمينات الاجتماعية
                </div>
                <div>
                  غير تنفيذي/غير مستقل
                </div>
              </div>
            </div>
          </div> -->
          <div class="ctable_wrapper">
            <table class="stc_table">
              <tbody>
                <tr>
                  <td>
                    <p><strong>م</strong></p>
                  </td>
                  <td>
                    <p><strong>الاسم</strong></p>
                  </td>
                  <td>
                    <p><strong>العضوية</strong></p>
                  </td>
                  <td>
                    <p><strong>المؤهلات العلمية</strong></p>
                  </td>
                  <td>
                    <p><strong>الخبرات العملية</strong></p>
                  </td>
                  <td>
                    <p><strong>الوظيفة الحالية&nbsp;</strong></p>
                  </td>
                  <td>
                    <p><strong>الوظيفة السابقة</strong></p>
                  </td>
                  <td>
                    <p><strong>تصنيف العضوية</strong></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><strong>1</strong></p>
                  </td>
                  <td>
                    <p><span>صاحب السمو الملكي الأمير/ محمد بن خالد العبدالله الفيصل</span></p>
                  </td>
                  <td>
                    <ul>
                      <li><span>رئيس مجلس الإدارة</span></li>
                      <li><span>رئيس اللجنة التنفيذية</span></li>
                      <li><span>رئيس لجنة الاستثمار</span></li>
                    </ul>
                  </td>
                  <td>
                    <p><span>ماجستير إدارة الأعمال</span></p>
                  </td>
                  <td>
                    <p><span>خبرة في المجال المصرفي والإداري لمدة 26 سنة</span></p>
                  </td>
                  <td>
                    <p><span>رئيس مجموعة الفيصلية القابضة</span></p>
                  </td>
                  <td>
                    <p><span>نائب رئيس مجموعة الفيصلية القابضة</span></p>
                  </td>
                  <td>
                    <p><span>مستقل</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><strong>2</strong></p>
                  </td>
                  <td>
                    <p><span>الدكتور/ خالد بن حسين بياري</span></p>
                  </td>
                  <td>
                    <ul>
                      <li><span>نائب رئيس مجلس الإدارة</span></li>
                      <li><span>عضو اللجنة التنفيذية</span></li>
                    </ul>
                  </td>
                  <td>
                    <p><span>دكتــــــوراه هندسة كهربائية</span></p>
                  </td>
                  <td>
                    <p><span>استاذ مشارك بجامعة الملك فهد للبترول والمعادن لمدة 12 سنة، وخبرة في الأعمال الإدارية لمدة 23سنة</span></p>
                  </td>
                  <td>
                    <p><span>مساعد وزير الدفاع للشؤون التنفيذية &ndash; وزارة الدفاع</span></p>
                  </td>
                  <td>
                    <p><span>الرئيس التنفيذي لشركة الاتصالات السعودية</span></p>
                  </td>
                  <td>
                    <p><span>غير تنفيذي/غير مستقل</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><strong>3</strong></p>
                  </td>
                  <td>
                    <p><span>الأستاذ/ محمد بن طلال النحاس</span></p>
                  </td>
                  <td>
                    <ul>
                      <li><span>عضو مجلس الإدارة</span></li>
                      <li><span>عضو لجنة الاستثمار</span></li>
                    </ul>
                  </td>
                  <td>
                    <p><span>بكالوريوس المحاسبة</span></p>
                  </td>
                  <td>
                    <p><span>خبرة في المجال المصرفي وتطوير الأعمال والإدارة لمدة 32 سنة</span></p>
                  </td>
                  <td>
                    <p><span>محافظ المؤسسة العامة للتقاعد</span></p>
                  </td>
                  <td>
                    <p><span>مدير شبكة الفروع بمصرف الإنماء</span></p>
                  </td>
                  <td>
                    <p><span>غير تنفيذي/غير مستقل</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><strong>4</strong></p>
                  </td>
                  <td>
                    <p><span>الأستاذ/ راشد بن إبراهيم شريف</span></p>
                  </td>
                  <td>
                    <ul>
                      <li><span>عضو مجلس الإدارة</span></li>
                      <li><span>عضو لجنة الاستثمار</span></li>
                    </ul>
                  </td>
                  <td>
                    <p><span>ماجستير إدارة الأعمال</span></p>
                  </td>
                  <td>
                    <p><span>خبرة عملية بالقطاع المالي وعضو عدد من الشركات المساهمة</span></p>
                  </td>
                  <td>
                    <p><span>رئيس الإدارة العامة للاستثمارات في الشركات المحلية في صندوق الاستثمارات العامة</span></p>
                  </td>
                  <td>
                    <p><span>الرئيس التنفيذي لشركة الرياض المالية</span></p>
                  </td>
                  <td>
                    <p><span>غير تنفيذي/غير مستقل</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><strong>5</strong></p>
                  </td>
                  <td>
                    <p><span>الأستاذ/ سانجاي كابور</span></p>
                  </td>
                  <td>
                    <ul>
                      <li><span>عضو مجلس الإدارة</span></li>
                      <li><span>عضو اللجنة التنفيذية</span></li>
                    </ul>
                  </td>
                  <td>
                    <p><span>ماجستير إدارة الأعمال</span></p>
                  </td>
                  <td>
                    <p><span>خبرة في الأعمال الإدارية لمدة </span><strong>12</strong><span> سنة</span></p>
                  </td>
                  <td>
                    <p><span>مستشار</span></p>
                  </td>
                  <td>
                    <p><span>رئيس مجلس تنفيذي في ماكروماكس</span></p>
                  </td>
                  <td>
                    <p><span>غير تنفيذي/غير مستقل</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><strong>6</strong></p>
                  </td>
                  <td>
                    <p><span>الأستاذ/ روي تشسنات</span></p>
                  </td>
                  <td>
                    <ul>
                      <li><span>عضو مجلس الإدارة</span></li>
                      <li><span>عضو لجنة الاستثمار</span></li>
                    </ul>
                  </td>
                  <td>
                    <p><span>ماجستير إدارة الأعمال</span></p>
                  </td>
                  <td>
                    <p><span>خبرة في الأعمال الإدارية لمدة </span><strong>31</strong><span> سنة</span></p>
                  </td>
                  <td>
                    <p><span>مستشار</span></p>
                  </td>
                  <td>
                    <p><span>نائب الرئيس التنفيذي للاستراتيجية</span></p>
                    <p><span>شركة فرايزون</span></p>
                  </td>
                  <td>
                    <p><span>غير تنفيذي/غير مستقل</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><strong>7</strong></p>
                  </td>
                  <td>
                    <p><span>الدكتور/ إبراهيم بن عبدالرحمن القاضي</span></p>
                  </td>
                  <td>
                    <ul>
                      <li><span>عضو مجلس الإدارة</span></li>
                      <li><span>رئيس لجنة المراجعة</span></li>
                      <li><span>عضو اللجنة التنفيذية</span></li>
                    </ul>
                  </td>
                  <td>
                    <p><span>دكتوراه هندسة كهربائية</span></p>
                  </td>
                  <td>
                    <p><span>أستاذ هندسة الاتصالات بجامعة الملك سعود لمدة 26 سنة، و35 سنة خبرة في مجال الاتصالات والمعلوماتية والتخطيط الاستراتيجي وإدارة المخاطر وأمن المعلومات والآثار الاقتصادية والاجتماعية للتقنية.</span></p>
                  </td>
                  <td>
                    <p><span>مستشار حر</span></p>
                  </td>
                  <td>
                    <p><span>كبير المستشارين في هيئة الاتصالات وتقنية المعلومات</span></p>
                  </td>
                  <td>
                    <p><span>مستقل</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><strong>8</strong></p>
                  </td>
                  <td>
                    <p><span>الأستاذ/ أسامة بن ياسين الخياري</span></p>
                  </td>
                  <td>
                    <ul>
                      <li><span>عضو مجلس الإدارة</span></li>
                      <li><span>رئيس لجنة الترشيحات والمكافآت</span></li>
                    </ul>
                  </td>
                  <td>
                    <p><span>بكالوريوس بحوث العمليات</span></p>
                  </td>
                  <td>
                    <p><span>خبرة في المجال الإداري لمدة 25سنة</span></p>
                  </td>
                  <td>
                    <p><span>متقاعد &ndash; ومستشار مستقل</span></p>
                  </td>
                  <td>
                    <p><span>المدير العام ورئيس القطاع الحكومي شركة اكسنتشر</span></p>
                  </td>
                  <td>
                    <p><span>مستقل</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><strong>9</strong></p>
                  </td>
                  <td>
                    <p><span>الأستاذ/ أحمد بن محمد العمران</span></p>
                  </td>
                  <td>
                    <ul>
                      <li><span>عضو مجلس الإدارة</span></li>
                      <li><span>عضو لجنة الترشيحات والمكافآت</span></li>
                    </ul>
                  </td>
                  <td>
                    <p><span>ماجستير علوم الحاسب الآلي</span></p>
                  </td>
                  <td>
                    <p><span>خبره في مجال تقنية المعلومات لمدة 18سنة</span></p>
                  </td>
                  <td>
                    <p><span>مساعد محافظ المؤسسة العامة للتأمينات الاجتماعية لتقنية المعلومات</span></p>
                  </td>
                  <td>
                    <p><span>مدير عام إدارة البنية الأساسية لتقنية المعلومات</span></p>
                    <p><span>في المؤسسة العامة للتأمينات الاجتماعية</span></p>
                  </td>
                  <td>
                    <p><span>غير تنفيذي/غير مستقل</span></p>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="cwrapper">
          <div class="screentop_para">
          <h1>
            <span class="h1 colr_white bk_purple" style="padding: 5px 15px 5px 150px;"> 
             ‫‫أعضاء لجان مجلس
            </span> 
          </h1>
          <h1>
            <span class="h1 colr_purple"> 
            ‫‫ الإدارة الخارجيين
            </span>
          </h1>
          </div>
          <div class="ctable_wrapper">
            <table class="stc_table">
            <tbody>
              <tr>
                <td>
                  <p><strong>م</strong></p>
                </td>
                <td>
                  <p><strong>الاسم</strong></p>
                </td>
                <td>
                  <p><strong>العضوية</strong></p>
                </td>
                <td>
                  <p><strong>المؤهلات العلمية</strong></p>
                </td>
                <td>
                  <p><strong>الخبرات العملية</strong></p>
                </td>
                <td>
                  <p><strong>الوظيفة الحالية&nbsp;</strong></p>
                </td>
                <td>
                  <p><strong>الوظيفة السابقة</strong></p>
                </td>
                <td>
                  <p><strong>تصنيف العضوية</strong></p>
                </td>
              </tr>
              <tr>
                <td>
                  <p><strong>1</strong></p>
                </td>
                <td>
                  <p>الأستاذ/ خالد بن عبدالله العـنقـري</p>
                </td>
                <td>
                  <p>عضو لجنة المراجعة</p>
                </td>
                <td>
                  <p>بكالوريوس محاسبة</p>
                </td>
                <td>
                  <p>خبرة فنية وإدارية في مجال التدقيق</p>
                </td>
                <td>
                  <p>مدير عام مؤسسة بابل الخير للتجارة والعقارات</p>
                </td>
                <td>
                  <p>رئيس الخدمات المصرفية الخاصة، ومدير منتجات برنامج الإقراض والهبات المصرفية الخاصة في مجموعة سامبا المالية</p>
                </td>
                <td>
                  <p>عضو خارجي</p>
                </td>
              </tr>
              <tr>
                <td>
                  <p><strong>2</strong></p>
                </td>
                <td>
                  <p>الأستاذ/ مدحـت بن فــريـد توفـيق</p>
                </td>
                <td>
                  <p>عضو لجنة المراجعة</p>
                </td>
                <td>
                  <p>ماجستير برنامج سيتي بنك آسيا والمحيط الهادي</p>
                </td>
                <td>
                  <p>خبرة فنية وإدارية في مجال التدقيق وإدارة المخاطر</p>
                </td>
                <td>
                  <p>مؤسس شركة للاستعانة بمصادر خارجية باسم IRSAA لحلول الأعمال<br />تتولى مسؤولية إدارة المخاطر والتدقيق الداخلي</p>
                </td>
                <td>
                  <p>مدير حسابات&nbsp;</p>
                  <p>في مجموعة سامبا المالية</p>
                </td>
                <td>
                  <p>عضو خارجي</p>
                </td>
              </tr>
              <tr>
                <td>
                  <p><strong>3</strong></p>
                </td>
                <td>
                  <p>الدكتور/ عمـرو بــن خـالـد كـردي</p>
                </td>
                <td>
                  <p>عضو لجنة المراجعة</p>
                </td>
                <td>
                  <p>دكتوراه المحاسبة</p>
                </td>
                <td>
                  <p>خبرة في مجال المحاسبة 9 سنوات</p>
                </td>
                <td>
                  <p>نائب الرئيس التنفيذي للأعمال لشركة دسر</p>
                </td>
                <td>
                  <p>الرئيس التنفيذي للمالية لشركة أميانتيت العربية السعودية</p>
                </td>
                <td>
                  <p>عضو خارجي</p>
                </td>
              </tr>
              <tr>
                <td>
                  <p><strong>4</strong></p>
                </td>
                <td>
                  <p>المهندس/ طـارق بن عبدالعزيز الـرخيمي</p>
                </td>
                <td>
                  <p>عضو لجنة المراجعة</p>
                </td>
                <td>
                  <h3>ماجستير العلوم</h3>
                </td>
                <td>
                  <p>خبرة في مجال الخدمات المالية والمصرفية وإدارة البنوك الاستثمارية وإدارة المخاطر 27 سنة</p>
                </td>
                <td>
                  <p>مستشار مالي مستقل ومستشار للاستثمار&nbsp;</p>
                  <p>وإدارة المخاطر</p>
                </td>
                <td>
                  <p>الرئيس التنفيذي لبيت التمويل السعودي الكويتي</p>
                </td>
                <td>
                  <p>عضو خارجي</p>
                </td>
              </tr>
              <tr>
                <td>
                  <p><strong>5</strong></p>
                </td>
                <td>
                  <p>الأستاذ/ سلطان بن عبدالملك آل الشيخ</p>
                </td>
                <td>
                  <p>عضو اللجنة التنفيذية</p>
                </td>
                <td>
                  <p>ماجستير العلوم المالية</p>
                </td>
                <td>
                  <p>خبرة في عمليات الاستثمار المصرفي</p>
                </td>
                <td>
                  <p>نائب رئيس أول في قسم الاستثمارات المحلية بصندوق الاستثمارات العامة</p>
                </td>
                <td>
                  <p>نائب الرئيس &ndash; الاستثمار المصرفي شركة السعودي الفرنسي كابيتال</p>
                </td>
                <td>
                  <p>عضو خارجي</p>
                </td>
              </tr>
              <tr>
                <td>
                  <p><strong>6</strong></p>
                </td>
                <td>
                  <p>المهندس/ ناصر بن سليمان الناصر</p>
                </td>
                <td>
                  <p>عضو اللجنة التنفيذية</p>
                </td>
                <td>
                  <p>بكالوريوس الهندسة الكهربائية</p>
                </td>
                <td>
                  <p>خبرة في قطاع الاتصالات</p>
                </td>
                <td>
                  <p>الرئيس التنفيذي&nbsp;</p>
                  <p>لشركة الاتصالات السعودية</p>
                </td>
                <td>
                  <p>الرئيس التنفيذي للعمليات في شركة الاتصالات السعوية&nbsp;</p>
                </td>
                <td>
                  <p>عضو خارجي/ تنفيذي</p>
                </td>
              </tr>
              <tr>
                <td>
                  <p><strong>7</strong></p>
                </td>
                <td>
                  <p>الأستاذ/ جون براند</p>
                </td>
                <td>
                  <p>عضو لجنة الترشيحات والمكافآت</p>
                </td>
                <td>
                  <p>ماجستير الاقتصاد التجاري وماجستير قانون الأعمال&nbsp;</p>
                  <p>وماجستير القانون الخاص&nbsp;</p>
                </td>
                <td>
                  <p>خبرة في الاستشارات الإدارية</p>
                </td>
                <td>
                  <p>مستشار مستقل في شركة الاستشارية القيادية&nbsp;</p>
                </td>
                <td>
                  <p>شريك رئيس في شركة Egon Zehnder</p>
                </td>
                <td>
                  <p>عضو خارجي</p>
                </td>
              </tr>
              <tr>
                <td>
                  <p><strong>8</strong></p>
                </td>
                <td>
                  <p>الأستاذة/ هدى بنت محمد الغصن</p>
                </td>
                <td>
                  <p>عضو لجنة الترشيحات والمكافآت</p>
                </td>
                <td>
                  <p>ماجستير إدارة الأعمال</p>
                </td>
                <td>
                  <p>خبرة في الموارد البشرية</p>
                </td>
                <td>
                  <p>مدير تنفيذي لعلاقات الموظفين والتدريب في شركة أرامكو</p>
                </td>
                <td>
                  <p>المدير العام للتدريب والتنمية، في شركة أرامكو</p>
                </td>
                <td>
                  <p>عضو خارجي</p>
                </td>
              </tr>
              <tr>
                <td>
                  <p><strong>9</strong></p>
                </td>
                <td>
                  <p>الأستاذ/ مازن بن أحمد الجبير</p>
                </td>
                <td>
                  <p>عضو لجنة الاستثمار</p>
                </td>
                <td>
                  <p>ماجستير إدارة الأعمال</p>
                </td>
                <td>
                  <p>خبرة في إدارة عدد من الشركات</p>
                </td>
                <td>
                  <p>العضو المنتدب لشركة جوارس</p>
                </td>
                <td>
                  <p>نائب الرئيس التنفيذي لشركة أموال الخليج</p>
                </td>
                <td>
                  <p>عضو خارجي</p>
                </td>
              </tr>
            </tbody>
            </table>
          </div>
        </div>

        <div class="cwrapper">
          <div class="screentop_para">
          <h1>
            <span class="h1 colr_white bk_purple" style="padding: 5px 15px 5px 150px;"> &#8235;
              ‫أعضاء الإدارة         
            </span> 
          </h1>
          <h1>
            <span class="h1 colr_purple"> 
            ‫‫‫ التنفيذية
            </span>
          </h1>
          </div>
           <!-- <div class="tabular_data">
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
          </div> -->
          <div class="ctable_wrapper">
            <table class="stc_table">
              <tbody>
                <tr>
                  <td>
                    <p><strong>م</strong></p>
                  </td>
                  <td>
                    <p><strong>الاسم</strong></p>
                  </td>
                  <td>
                    <p><strong>المؤهلات العلمية</strong></p>
                  </td>
                  <td>
                    <p><strong>الوظيفة الحالية (الاتصالات السعودية)</strong></p>
                  </td>
                  <td>
                    <p><strong>الوظيفة السابقة</strong></p>
                  </td>
                  <td>
                    <p><strong>الشركة</strong></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>1</span></p>
                  </td>
                  <td>
                    <p><span>م. ناصر بن سليمان الناصر</span></p>
                  </td>
                  <td>
                    <p><span>بكالوريوس هندسة كهرباء</span></p>
                  </td>
                  <td>
                    <p><span>الرئيس التنفيذي لمجموعة stc</span></p>
                  </td>
                  <td>
                    <p><span>الرئيس التنفيذي للعمليات</span></p>
                  </td>
                  <td>
                    <p><span>موبايلي</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>2</span></p>
                  </td>
                  <td>
                    <p><span>أ. أمين بن فهد الشدي</span></p>
                  </td>
                  <td>
                    <p><span>ماجستير محاسبة</span></p>
                  </td>
                  <td>
                    <p><span>الرئيس التنفيذي للمالية</span></p>
                  </td>
                  <td>
                    <p><span>نائب الرئيس لقطاع المالية</span></p>
                  </td>
                  <td>
                    <p><span>stc</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>3</span></p>
                  </td>
                  <td>
                    <p><span>م. عماد بن عودة العودة</span></p>
                  </td>
                  <td>
                    <p><span>بكالوريس نظم معلومات</span></p>
                  </td>
                  <td>
                    <p><span>نائب الرئيس لقطاع المشتريات وخدمات الدعم</span></p>
                  </td>
                  <td>
                    <p><span>الرئيس التنفيذي لشركة NUPCO</span></p>
                  </td>
                  <td>
                    <p><span>NUPCO</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>4</span></p>
                  </td>
                  <td>
                    <p><span>&nbsp;جيرمي سيل</span></p>
                  </td>
                  <td>
                    <p><span>ماجستير جغرافية</span></p>
                  </td>
                  <td>
                    <p><span>رئيس العمليات الاستراتيجية</span></p>
                  </td>
                  <td>
                    <p><span>Group CFO</span></p>
                  </td>
                  <td>
                    <p><span>Mountain Partners AG</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>5</span></p>
                  </td>
                  <td>
                    <p><span>م. هيثم بن محمد الفرج</span></p>
                  </td>
                  <td>
                    <p><span>بكالوريوس هندسة حاسب</span></p>
                  </td>
                  <td>
                    <p><span>نائب أعلى للرئيس للتقنية و العمليات</span></p>
                  </td>
                  <td>
                    <p><span>نائب الرئيس لقطاع التشغيل</span></p>
                  </td>
                  <td>
                    <p><span>stc</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>6</span></p>
                  </td>
                  <td>
                    <p><span>أ. عبدالله بن محسن العويني</span></p>
                  </td>
                  <td>
                    <p><span>ماجستيرهندسة حاسب آلي</span></p>
                  </td>
                  <td>
                    <p><span>نائب الرئيس لهيكلية التقنية المؤسسية</span></p>
                  </td>
                  <td>
                    <p><span>نائب الرئيس لقطاع التقنية</span></p>
                  </td>
                  <td>
                    <p><span>stc</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>7</span></p>
                  </td>
                  <td>
                    <p><span>أ. عبدالعزيز بن عبدالله القطعي</span></p>
                  </td>
                  <td>
                    <p><span>بكالوريوس محاسبة</span></p>
                  </td>
                  <td>
                    <p><span>نائب الرئيس لقطاع المراقبة والتقارير المالية</span></p>
                  </td>
                  <td>
                    <p><span>رئيس العمليات المالية (stc الكويت)</span></p>
                  </td>
                  <td>
                    <p><span>stc الكويت</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>8</span></p>
                  </td>
                  <td>
                    <p><span>أ. رياض بن سعيد معوض</span></p>
                  </td>
                  <td>
                    <p><span>بكالوريوس حاسب آلي</span></p>
                  </td>
                  <td>
                    <p><span>النائب الأعلى للرئيس لوحدة الأعمال</span></p>
                  </td>
                  <td>
                    <p><span>نائب الرئيس للمبيعات الحكومية والشركات</span></p>
                  </td>
                  <td>
                    <p><span>stc</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>9</span></p>
                  </td>
                  <td>
                    <p><span>أ. رياض بن حمدان العنزي</span></p>
                  </td>
                  <td>
                    <p><span>بكالوريوس نظم معلومات</span></p>
                  </td>
                  <td>
                    <p><span>نائب الرئيس لقطاع تجارب العملاء والعمليات</span></p>
                  </td>
                  <td>
                    <p><span>نائب الرئيس لمراكز العناية بالعملاء</span></p>
                  </td>
                  <td>
                    <p><span>stc</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>10</span></p>
                  </td>
                  <td>
                    <p><span>م. أحمد بن مسفر الغامدي</span></p>
                  </td>
                  <td>
                    <p><span>بكالوريوس هندسة نظم</span></p>
                  </td>
                  <td>
                    <p><span>نائب الرئيس لقطاع الموارد البشرية</span></p>
                  </td>
                  <td>
                    <p><span>مدير عام تخطيط الموارد البشرية والتطوير التنظيمي</span></p>
                  </td>
                  <td>
                    <p><span>stc</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>11</span></p>
                  </td>
                  <td>
                    <p><span>م. محمد بن عبدالله العبادي</span></p>
                  </td>
                  <td>
                    <p><span>ماجستير إدارة أعمال</span></p>
                  </td>
                  <td>
                    <p><span>نائب قطاع تنفيذ الاستراتيجية والشؤون التنفيذية</span></p>
                  </td>
                  <td>
                    <p><span>الرئيس التنفيذي لشركة سيسكو</span></p>
                  </td>
                  <td>
                    <p><span>سيسكو</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>12</span></p>
                  </td>
                  <td>
                    <p><span>أ. سلطان بن حسن بن سعيد</span></p>
                  </td>
                  <td>
                    <p><span>بكالوريوس تقنية معلومات</span></p>
                  </td>
                  <td>
                    <p><span>نائب للرئيس لقطاع تطوير الأعمال</span></p>
                  </td>
                  <td>
                    <p><span>الرئيس التنفيذي لشركة حلول stc</span></p>
                  </td>
                  <td>
                    <p><span>حلول stc</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>13</span></p>
                  </td>
                  <td>
                    <p><span>د. خالد بن منصور البراك</span></p>
                  </td>
                  <td>
                    <p><span>دكتوراة تقنية معلومات</span></p>
                  </td>
                  <td>
                    <p><span>نائب الرئيس لقطاع التحليل والبيانات المؤسسية</span></p>
                  </td>
                  <td>
                    <p><span>مستشار الشركة العربية لخدمات الأنترنت</span></p>
                  </td>
                  <td>
                    <p><span>العربية لخدمات الأنترنت</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>14</span></p>
                  </td>
                  <td>
                    <p><span>أ. ماركوس جولدير</span></p>
                  </td>
                  <td>
                    <p><span>ماجستير إدارة أعمال</span></p>
                  </td>
                  <td>
                    <p><span>نائب الرئيس لقطاع إدارة العملاء</span></p>
                  </td>
                  <td>
                    <p><span>نائب الرئيس لقطاع التسويق</span></p>
                  </td>
                  <td>
                    <p><span>stc</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>15</span></p>
                  </td>
                  <td>
                    <p><span>أ. وجناند ارنست فان تيل</span></p>
                  </td>
                  <td>
                    <p><span>ماجستير إدارة مالية</span></p>
                  </td>
                  <td>
                    <p><span>نائب الرئيس لقطاع الأعمال المالية</span></p>
                  </td>
                  <td>
                    <p><span>نائب الرئيس لإستراتيجية التسعير والحوافز</span></p>
                  </td>
                  <td>
                    <p><span>اتصالات &ndash; الامارات&nbsp;</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>16</span></p>
                  </td>
                  <td>
                    <p><span>أ. الان فرانسيس ويلان</span></p>
                  </td>
                  <td>
                    <p><span>بكالوريوس علم نفس</span></p>
                  </td>
                  <td>
                    <p><span>نائب الرئيس لوحده النواقل والمشغلين</span></p>
                  </td>
                  <td>
                    <p><span>Vertiv Cmpany Managing Director Northern Europe</span></p>
                  </td>
                  <td>
                    <p><span>Vertiv</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>17</span></p>
                  </td>
                  <td>
                    <p><span>أ. عبد الله بن صايل العنزي</span></p>
                  </td>
                  <td>
                    <p><span>ماجستير إدارة تنفيذية</span></p>
                  </td>
                  <td>
                    <p><span>رئيس المراجعة الداخلية</span></p>
                  </td>
                  <td>
                    <p><span>مدير عام مراجعة انظمة المعلومات والشبكة</span></p>
                  </td>
                  <td>
                    <p><span>stc</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>18</span></p>
                  </td>
                  <td>
                    <p><span>ديمتريوس لولياس</span></p>
                  </td>
                  <td>
                    <p><span>ماجستير إدارة اعمال</span></p>
                  </td>
                  <td>
                    <p><span>نائب الرئيس لقطاع الشؤون الاستراتيجية&nbsp;</span></p>
                  </td>
                  <td>
                    <p><span>Group chief&nbsp;operation officer</span></p>
                  </td>
                  <td>
                    <p><span>LAP GreenN &ndash; Dubai</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>19</span></p>
                  </td>
                  <td>
                    <p><span>رأفت باري مالك</span></p>
                  </td>
                  <td>
                    <p><span>بكالوريوس هندسة طيران</span></p>
                  </td>
                  <td>
                    <p><span>عميد اكاديمية stc</span></p>
                  </td>
                  <td>
                    <p><span>Vice President&nbsp;</span></p>
                  </td>
                  <td>
                    <p><span>IE Corporate Learning Alliance</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>20</span></p>
                  </td>
                  <td>
                    <p><span>علي عبدالله حميد الفقيه الحربي</span></p>
                  </td>
                  <td>
                    <p><span>ماجستير محاسبة</span></p>
                  </td>
                  <td>
                    <p><span>نائب الرئيس لقطاع مالية الشركات&nbsp;</span></p>
                  </td>
                  <td>
                    <p><span>CFO</span></p>
                  </td>
                  <td>
                    <p><span>البحري</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>21</span></p>
                  </td>
                  <td>
                    <p><span>بدر عبدالله سليمان اللهيب</span></p>
                  </td>
                  <td>
                    <p><span>بكالوريوس هندسة كهربائية</span></p>
                  </td>
                  <td>
                    <p><span>نائب الرئيس لقطاع التشغيل&nbsp;</span></p>
                  </td>
                  <td>
                    <p><span>مدير عام عمليات خدمة العملاء</span></p>
                  </td>
                  <td>
                    <p><span>stc</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>22</span></p>
                  </td>
                  <td>
                    <p><span>ياسر زابن العتيبي</span></p>
                  </td>
                  <td>
                    <p><span>بكالوريوس هندسة كهربائية</span></p>
                  </td>
                  <td>
                    <p><span>نائب الرئيس لقطاع العمليات التشغيلية بوحدة الأعمال</span></p>
                  </td>
                  <td>
                    <p><span>مدير عام تطوير الأعمال</span></p>
                  </td>
                  <td>
                    <p><span>stc</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>23</span></p>
                  </td>
                  <td>
                    <p><span>خالد إبراهيم عبدالرحمن الضراب</span></p>
                  </td>
                  <td>
                    <p><span>بكالوريوس هندسه صناعية</span></p>
                  </td>
                  <td>
                    <p><span>نائب الرئيس لقطاع البنية التحتية</span></p>
                  </td>
                  <td>
                    <p><span>مدير عام تصميم البنية التحتية</span></p>
                  </td>
                  <td>
                    <p><span>stc</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>24</span></p>
                  </td>
                  <td>
                    <p><span>عليان محمد حمد بن وتيد</span></p>
                  </td>
                  <td>
                    <p><span>بكالوريوس هندسة كهربائية</span></p>
                  </td>
                  <td>
                    <p><span>نائب أعلى للرئيس لوحدة المستهلك</span></p>
                  </td>
                  <td>
                    <p><span>الرئيس التنفيذي (stc البحرين)</span></p>
                  </td>
                  <td>
                    <p><span>stc البحرين</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>25</span></p>
                  </td>
                  <td>
                    <p><span>عثمان دهش عثمان الدهش</span></p>
                  </td>
                  <td>
                    <p><span>ماجستير إدارة أعمال</span></p>
                  </td>
                  <td>
                    <p><span>نائب للرئيس لقطاع التطوير المؤسسي</span></p>
                  </td>
                  <td>
                    <p><span>نائب الرئيس للأبحاث والتطوير</span></p>
                  </td>
                  <td>
                    <p><span>حلول المتقدمة</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>26</span></p>
                  </td>
                  <td>
                    <p><span>عبدالعزيز محمد عبدالرحمن الحيدر</span></p>
                  </td>
                  <td>
                    <p><span>بكالوريوس هندسة كهربائية</span></p>
                  </td>
                  <td>
                    <p><span>نائب الرئيس لقطاع مبيعات الشركات</span></p>
                  </td>
                  <td>
                    <p><span>مدير عام مبيعات القطاع الحكومي</span></p>
                  </td>
                  <td>
                    <p><span>stc</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>27</span></p>
                  </td>
                  <td>
                    <p><span>ياسر نجيب عبدالعزيز السويلم</span></p>
                  </td>
                  <td>
                    <p><span>بكالوريوس نظم معلومات</span></p>
                  </td>
                  <td>
                    <p><span>نائب الرئيس لقطاع الأمن السيبراني</span></p>
                  </td>
                  <td>
                    <p><span>مدير عام للإدارة العامة لأمن المعلومات</span></p>
                  </td>
                  <td>
                    <p><span>stc</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>28</span></p>
                  </td>
                  <td>
                    <p><span>بندر مسلم عاتق اللحياني</span></p>
                  </td>
                  <td>
                    <p><span>ماجستير إدارة أعمال</span></p>
                  </td>
                  <td>
                    <p><span>نائب الرئيس لقطاع خدمات الجوال</span></p>
                  </td>
                  <td>
                    <p><span>مدير عام الإدارة العامة لخدمات الجوال</span></p>
                  </td>
                  <td>
                    <p><span>stc</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>29</span></p>
                  </td>
                  <td>
                    <p><span>منيف نايف بندر بن درويش</span></p>
                  </td>
                  <td>
                    <p><span>ماجستير إدارة أعمال</span></p>
                  </td>
                  <td>
                    <p><span>نائب الرئيس لقطاع الخدمات السكنية</span></p>
                  </td>
                  <td>
                    <p><span>نائب الرئيس لخدمات التوزيع</span></p>
                  </td>
                  <td>
                    <p><span>stc قنوات</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>30</span></p>
                  </td>
                  <td>
                    <p><span>معضد فيصل معضد العجمي</span></p>
                  </td>
                  <td>
                    <p><span>ماجستير إدارة أعمال</span></p>
                  </td>
                  <td>
                    <p><span>نائب الرئيس و المستشار العام للشؤون القانونية</span></p>
                  </td>
                  <td>
                    <p><span>عضو مجلس إدارة&nbsp;</span></p>
                  </td>
                  <td>
                    <p><span>سابك</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>31</span></p>
                  </td>
                  <td>
                    <p><span>يزيد عبدالعزيز عبدالرحمن الفارس</span></p>
                  </td>
                  <td>
                    <p><span>ماجستير علوم الحاسب</span></p>
                  </td>
                  <td>
                    <p><span>نائب الرئيس لقطاع التطبيقات</span></p>
                  </td>
                  <td>
                    <p><span>مدير عام عمليات التطبيقات</span></p>
                  </td>
                  <td>
                    <p><span>stc</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>32</span></p>
                  </td>
                  <td>
                    <p><span>امير عبدالعزيز حمد الجبرين</span></p>
                  </td>
                  <td>
                    <p><span>ماجستير إدارة متقدمة</span></p>
                  </td>
                  <td>
                    <p><span>نائب الرئيس لقطاع الشؤون التنظيمية</span></p>
                  </td>
                  <td>
                    <p><span>مدير عام لشؤون التنظيمية والترخيص</span></p>
                  </td>
                  <td>
                    <p><span>هيئة الاتصالات وتقنية المعلومات</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>33</span></p>
                  </td>
                  <td>
                    <p><span>عبدالله عبدالرحمن عبدالله الكنهل</span></p>
                  </td>
                  <td>
                    <p><span>ماجستير إدارة أعمال</span></p>
                  </td>
                  <td>
                    <p><span>نائب الرئيس الأعلى للشؤون المؤسساتية</span></p>
                  </td>
                  <td>
                    <p><span>وكيل الوزارة للاتصالات والبنية التحتية</span></p>
                  </td>
                  <td>
                    <p><span>هيئة الاتصالات وتقنية المعلومات</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>34</span></p>
                  </td>
                  <td>
                    <p><span>فيصل عبدالعزيز آدم البكري</span></p>
                  </td>
                  <td>
                    <p><span>بكالوريوس إدارة الإعمال الدولية</span></p>
                  </td>
                  <td>
                    <p><span>نائب الرئيس لقطاع المبيعات الحكومية</span></p>
                  </td>
                  <td>
                    <p><span>مدير عام المبيعات الحكومية&nbsp;</span></p>
                  </td>
                  <td>
                    <p><span>stc</span></p>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <!-- <div class="cwrapper">
          <div class="screentop_para">
          <h1>
            <span class="h1 colr_white bk_purple" style="padding: 5px 15px 5px 150px;"> &#8235;
           أسماء الشركات التي يكون عضو مجلس الإدارة عضواً
            </span> 
          </h1>
          <h1>
            <span class="h1 colr_purple"> 
           ‫ في مجالس إدارتها الحالية والسابقة أو من مديريها
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
        </div> -->

        <div class="cwrapper">
          <div class="screentop_para">
          <h1>
            <span class="h1 colr_white bk_purple" style="padding: 5px 15px 5px 150px;"> 
            ‫‫أسماء الشركات التي يكون عضو
            </span> 
          </h1>
          <h1>
            <span class="h1 colr_purple"> 
            ‫‫ مجلس الإدارة عضواً في مجالس إدارتها 
            <br>
            ‫الحالية والسابقة أو من مديريها
            </span>
          </h1>
          </div>
          <div class="ctable_wrapper">
            <table class="stc_table">
              <tbody>
                <tr>
                  <td rowspan="6">
                    <p><strong>1</strong></p>
                  </td>
                  <td rowspan="6">
                    <p><strong>صاحب السمو الملكي الأمير/ محمد بن خالد العبدالله الفيصل</strong></p>
                    <p><strong>رئيس مجلس الإدارة</strong></p>
                    <p><strong>رئيس اللجنة التنفيذية</strong></p>
                    <p><strong>&nbsp;رئيس لجنة الاستثمار</strong></p>
                  </td>
                  <td rowspan="2">
                    <p><span>م</span></p>
                  </td>
                  <td rowspan="2">
                    <p><span>أسماء الشركات التي يكون عضو مجلس الإدارة عضواً في مجالس إدارتها (الحالية) أو من مديريها</span></p>
                  </td>
                  <td colspan="2">
                    <p><span>مقرها</span></p>
                  </td>
                  <td rowspan="2">
                    <p><span>الكيان القانوني</span></p>
                    <p><span>(مساهمة مدرجة/مساهمة غير مدرجة/ ذات مسؤولية محددة / ....)</span></p>
                  </td>
                  <td rowspan="2">
                    <p><span>أسماء الشركات التي يكون عضو مجلس الإدارة عضواً في مجالس إدارتها (السابقة) أو من مديريها</span></p>
                  </td>
                  <td colspan="2">
                    <p><span>مقرها</span></p>
                  </td>
                  <td rowspan="2">
                    <p><span>الكيان القانوني</span></p>
                    <p><span>(مساهمة مدرجة/مساهمة غير مدرجة/ ذات مسؤولية محددة / ....)</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>داخل المملكة</span></p>
                  </td>
                  <td>
                    <p><span>خارج المملكة</span></p>
                  </td>
                  <td>
                    <p><span>داخل المملكة</span></p>
                  </td>
                  <td>
                    <p><span>خارج المملكة</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>1</span></p>
                  </td>
                  <td>
                    <p><span>stc</span></p>
                  </td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>مساهمة مدرجة</span></p>
                  </td>
                  <td>
                    <p><span>شركة أودي كابيتال</span></p>
                  </td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>مساهمة مقفلة</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>2</span></p>
                  </td>
                  <td>
                    <p><span>مجموعة الفيصلية</span></p>
                  </td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>مساهمة مقفلة</span></p>
                  </td>
                  <td>
                    <p><span>-</span></p>
                  </td>
                  <td>
                    <p><span>-</span></p>
                  </td>
                  <td>
                    <p><span>-</span></p>
                  </td>
                  <td>
                    <p><span>-</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>3</span></p>
                  </td>
                  <td>
                    <p><span>شركة الخزامي&nbsp;</span></p>
                  </td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>مساهمة مقفلة</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>
                    <p><span>4</span></p>
                  </td>
                  <td>
                    <p><span>جي بي مورجان السعودية</span></p>
                  </td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>مساهمة مقفلة</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
              </tbody>
            </table>
            <p><br /><br /><br /></p>
            <table class="stc_table">
              <tbody>
                <tr>
                  <td rowspan="8">
                    <p><strong>2</strong></p>
                  </td>
                  <td rowspan="8">
                    <p><strong>الدكتور/ خالد بن حسين بياري</strong></p>
                    <p><strong>نائب رئيس مجلس الإدارة</strong></p>
                    <p><strong>&nbsp;عضو اللجنة التنفيذية&nbsp;</strong></p>
                  </td>
                  <td rowspan="2">
                    <p><span>م</span></p>
                  </td>
                  <td rowspan="2">
                    <p><span>أسماء الشركات التي يكون عضو مجلس الإدارة عضواً في مجالس إدارتها</span></p>
                    <p><span>(الحالية) أو من مديريها</span></p>
                  </td>
                  <td colspan="2">
                    <p><span>مقرها</span></p>
                  </td>
                  <td rowspan="2">
                    <p><span>الكيان القانوني</span></p>
                    <p><span>(مساهمة مدرجة/مساهمة غير مدرجة/ ذات مسؤولية محددة / ....)</span></p>
                  </td>
                  <td rowspan="2">
                    <p><span>أسماء الشركات التي يكون عضو مجلس الإدارة عضواً في مجالس إدارتها (السابقة) أو من مديريها</span></p>
                  </td>
                  <td colspan="2">
                    <p><span>مقرها</span></p>
                  </td>
                  <td rowspan="2">
                    <p><span>الكيان القانوني</span></p>
                    <p><span>(مساهمة مدرجة/مساهمة غير مدرجة/ ذات مسؤولية محددة / ....)</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>داخل المملكة</span></p>
                  </td>
                  <td>
                    <p><span>خارج المملكة</span></p>
                  </td>
                  <td>
                    <p><span>داخل المملكة</span></p>
                  </td>
                  <td>
                    <p><span>خارج المملكة</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>1</span></p>
                  </td>
                  <td>
                    <p><span>stc</span></p>
                  </td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>مساهمة مدرجة</span></p>
                  </td>
                  <td>
                    <p><span>stc الكويت</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>
                    <p><span>مساهمة مدرجة</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>2</span></p>
                  </td>
                  <td>
                    <p><span>الشركة السعودية لتقنية المعلومات (SITE)</span></p>
                  </td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>مساهمة مقفلة</span></p>
                  </td>
                  <td>
                    <p><span>شركة الاتصالات التركية</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>
                    <p><span>مساهمة مدرجة</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>3</span></p>
                  </td>
                  <td>
                    <p><span>-</span></p>
                  </td>
                  <td>
                    <p><span>-</span></p>
                  </td>
                  <td>
                    <p><span>-</span></p>
                  </td>
                  <td>
                    <p><span>-</span></p>
                  </td>
                  <td>
                    <p><span>شركة أوجيه تيليكوم</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>
                    <p><span>ذات مسؤولية محدودة</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>4</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>الشركة العربية لخدمات الانترنت )حلول stc)</span></p>
                  </td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>ذات مسؤولية محدودة</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>5</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>شركة سفاير المحدودة</span></p>
                  </td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>ذات مسؤولية محدودة</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>6</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>شركة الخليج للإعلام الرقمي</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>
                    <p><span>ذات مسؤولية محدودة</span></p>
                  </td>
                </tr>
              </tbody>
            </table>
            <p><br /><br /><br /><br /><br /></p>
            <table class="stc_table">
              <tbody>
                <tr>
                  <td rowspan="14">
                    <p><strong>3</strong></p>
                  </td>
                  <td rowspan="14">
                    <p><strong>الأستاذ/ محمد بن طــــلال النحاس</strong></p>
                    <p><strong>عضو مجلس الإدارة&nbsp;</strong></p>
                    <p><strong>عضو لجنة الاستثمار</strong></p>
                  </td>
                  <td rowspan="2">
                    <p><span>م</span></p>
                  </td>
                  <td rowspan="2">
                    <p><span>أسماء الشركات التي يكون عضو مجلس الإدارة عضواً في مجالس إدارتها</span></p>
                    <p><span>&nbsp;(الحالية) أو من مديريها</span></p>
                  </td>
                  <td colspan="2">
                    <p><span>مقرها</span></p>
                  </td>
                  <td rowspan="2">
                    <p><span>الكيان القانوني</span></p>
                    <p><span>(مساهمة مدرجة/مساهمة غير مدرجة/ ذات مسؤولية محددة / ....)</span></p>
                  </td>
                  <td rowspan="2">
                    <p><span>أسماء الشركات التي يكون عضو مجلس الإدارة عضواً في مجالس إدارتها (السابقة) أو من مديريها</span></p>
                  </td>
                  <td colspan="2">
                    <p><span>مقرها</span></p>
                  </td>
                  <td rowspan="2">
                    <p><span>الكيان القانوني</span></p>
                    <p><span>(مساهمة مدرجة/مساهمة غير مدرجة/ ذات مسؤولية محددة / ....)</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>داخل المملكة</span></p>
                  </td>
                  <td>
                    <p><span>خارج المملكة</span></p>
                  </td>
                  <td>
                    <p><span>داخل المملكة</span></p>
                  </td>
                  <td>
                    <p><span>خارج المملكة</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>1</span></p>
                  </td>
                  <td>
                    <p><span>stc</span></p>
                  </td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>مساهمة مدرجة</span></p>
                  </td>
                  <td>
                    <p><span>شركة طيبة القابضة&nbsp;</span></p>
                  </td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>مساهمة مدرجة</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>2</span></p>
                  </td>
                  <td>
                    <p><span>المؤسسة العامة للتقاعد</span></p>
                  </td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>لا ينطبق</span></p>
                  </td>
                  <td>
                    <p><span>شركة الشيكات السياحية السعودية</span></p>
                  </td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>غير مدرجة</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>3</span></p>
                  </td>
                  <td>
                    <p><span>الشركة السعودية للصناعات الأساسية (سابك)&nbsp;</span></p>
                  </td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>مساهمة مدرجة</span></p>
                  </td>
                  <td>
                    <p><span>-</span></p>
                  </td>
                  <td>
                    <p><span>-</span></p>
                  </td>
                  <td>
                    <p><span>-</span></p>
                  </td>
                  <td>
                    <p><span>-</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>4</span></p>
                  </td>
                  <td>
                    <p><span>بنك الرياض</span></p>
                  </td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>مساهمة مدرجة</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>
                    <p><span>5</span></p>
                  </td>
                  <td>
                    <p><span>المؤسسة العامة للتأمينات الاجتماعية</span></p>
                  </td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>لا ينطبق</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>
                    <p><span>6</span></p>
                  </td>
                  <td>
                    <p><span>المركز الوطني للتخصيص</span></p>
                  </td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>غير مدرجة</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>
                    <p><span>7</span></p>
                  </td>
                  <td>
                    <p><span>الشركة الدولية لمشاريع الطاقة والمياه اكواباور</span></p>
                  </td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>غير مدرجة</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>
                    <p><span>8</span></p>
                  </td>
                  <td>
                    <p><span>شركة أسماء كابيتال </span><strong>ASMA</strong> <strong>Capital</strong></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>
                    <p><span>غير مدرجة</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>
                    <p><span>9</span></p>
                  </td>
                  <td>
                    <p><span>شركة الاستثمارات الرائدة</span></p>
                  </td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>غير مدرجة</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>
                    <p><span>10</span></p>
                  </td>
                  <td>
                    <p><span>شركة رزا العقارية</span></p>
                  </td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>غير مدرجة</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>
                    <p><span>11</span></p>
                  </td>
                  <td>
                    <p><span>الشركة التعاونية للاستثمار العقاري&nbsp;</span></p>
                  </td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>غير مدرجة</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>
                    <p><span>12</span></p>
                  </td>
                  <td>
                    <p><span>شركة سبيماكو الدوائية</span></p>
                  </td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>مساهمة مدرجة</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
              </tbody>
            </table>
            <p><br /><br /><br /></p>
            <table class="stc_table">
              <tbody>
                <tr>
                  <td rowspan="8">
                    <p><strong>4</strong></p>
                  </td>
                  <td rowspan="8">
                    <p><strong>الأستاذ/ راشد بن ابراهيم شريف</strong></p>
                    <p><strong>عضو مجلس الإدارة&nbsp;</strong></p>
                    <p><strong>عضو لجنة الاستثمار</strong></p>
                  </td>
                  <td rowspan="2">
                    <p><span>م</span></p>
                  </td>
                  <td rowspan="2">
                    <p><span>أسماء الشركات التي يكون عضو مجلس الإدارة عضواً في مجالس إدارتها</span></p>
                    <p><span>&nbsp;(الحالية) أو من مديريها</span></p>
                  </td>
                  <td colspan="2">
                    <p><span>مقرها</span></p>
                  </td>
                  <td rowspan="2">
                    <p><span>الكيان القانوني</span></p>
                    <p><span>(مساهمة مدرجة/مساهمة غير مدرجة/ ذات مسؤولية محددة / ....)</span></p>
                  </td>
                  <td rowspan="2">
                    <p><span>أسماء الشركات التي يكون عضو مجلس الإدارة عضواً في مجالس إدارتها (السابقة) أو من مديريها</span></p>
                  </td>
                  <td colspan="2">
                    <p><span>مقرها</span></p>
                  </td>
                  <td rowspan="2">
                    <p><span>الكيان القانوني</span></p>
                    <p><span>(مساهمة مدرجة/مساهمة غير مدرجة/ ذات مسؤولية محددة / ....)</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>داخل المملكة</span></p>
                  </td>
                  <td>
                    <p><span>خارج المملكة</span></p>
                  </td>
                  <td>
                    <p><span>داخل المملكة</span></p>
                  </td>
                  <td>
                    <p><span>خارج المملكة</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>1</span></p>
                  </td>
                  <td>
                    <p><span>stc</span></p>
                  </td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>مساهمة مدرجة</span></p>
                  </td>
                  <td>
                    <p><span>شركة رؤى المدينة القابضة (الشركة السعودية للتنمية والاستثمار العقاري)</span></p>
                    <p><span>(دار الهجرة سابقاً)</span></p>
                  </td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>غير مدرجة</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>2</span></p>
                  </td>
                  <td>
                    <p><span>البنك الأهلي التجاري</span></p>
                  </td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>مساهمة مدرجة</span></p>
                  </td>
                  <td>
                    <p><span>شركة تحكم الاستثمارية</span></p>
                  </td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>مساهمة غير مدرجة</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>3</span></p>
                  </td>
                  <td>
                    <p><span>الشركة السعودية للكهرباء</span></p>
                  </td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>مساهمة مدرجة</span></p>
                  </td>
                  <td>
                    <p><span>-</span></p>
                  </td>
                  <td>
                    <p><span>-</span></p>
                  </td>
                  <td>
                    <p><span>-</span></p>
                  </td>
                  <td>
                    <p><span>-</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>4</span></p>
                  </td>
                  <td>
                    <p><span>شركة إدارة وتطوير مركز الملك عبدالله المالي</span></p>
                  </td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>غير مدرجة</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>
                    <p><span>5</span></p>
                  </td>
                  <td>
                    <p><span>AccorInvest Group</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>
                    <p><span>شركة خاصة</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>
                    <p><span>6</span></p>
                  </td>
                  <td>
                    <p><span>الشركة السعودية للصناعات الأساسية&nbsp; سابك</span></p>
                  </td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>مساهمة مدرجة</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
              </tbody>
            </table>
            <p><br /><br /><br /><br /><br /><br /></p>
            <table class="stc_table">
              <tbody>
                <tr>
                  <td rowspan="9">
                    <p><strong>5</strong></p>
                  </td>
                  <td rowspan="9">
                    <p><strong>الأستاذ/ سانجاي كابور</strong></p>
                    <p><strong>عضو مجلس الإدارة&nbsp;</strong></p>
                    <p><strong>عضو اللجنة التنفيذية&nbsp;</strong></p>
                  </td>
                  <td rowspan="2">
                    <p><span>م</span></p>
                  </td>
                  <td rowspan="2">
                    <p><span>أسماء الشركات التي يكون عضو مجلس الإدارة عضواً في مجالس إدارتها</span></p>
                    <p><span>(الحالية) أو من مديريها</span></p>
                  </td>
                  <td colspan="2">
                    <p><span>مقرها</span></p>
                  </td>
                  <td rowspan="2">
                    <p><span>الكيان القانوني</span></p>
                    <p><span>(مساهمة مدرجة/مساهمة غير مدرجة/ ذات مسؤولية محددة / ....)</span></p>
                  </td>
                  <td rowspan="2">
                    <p><span>أسماء الشركات التي يكون عضو مجلس الإدارة عضواً في مجالس إدارتها (السابقة) أو من مديريها</span></p>
                  </td>
                  <td colspan="2">
                    <p><span>مقرها</span></p>
                  </td>
                  <td rowspan="2">
                    <p><span>الكيان القانوني</span></p>
                    <p><span>(مساهمة مدرجة/مساهمة غير مدرجة/ ذات مسؤولية محددة / ....)</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>داخل المملكة</span></p>
                  </td>
                  <td>
                    <p><span>خارج المملكة</span></p>
                  </td>
                  <td>
                    <p><span>داخل المملكة</span></p>
                  </td>
                  <td>
                    <p><span>خارج المملكة</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>1</span></p>
                  </td>
                  <td>
                    <p><span>stc</span></p>
                  </td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>مساهمة مدرجة</span></p>
                  </td>
                  <td>
                    <p><span>Bennet, Coleman and Company Ltd.</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>
                    <p><span>غير مدرجة</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>2</span></p>
                  </td>
                  <td>
                    <p><span>OnMobile Global Ltd.</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>
                    <p><span>مساهمة مدرجة</span></p>
                  </td>
                  <td>
                    <p><span>PVR Ltd.</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>
                    <p><span>مساهمة مدرجة</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>3</span></p>
                  </td>
                  <td>
                    <p><span>VLCC Health Care Ltd.</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>
                    <p><span>غير مدرجة&nbsp;</span></p>
                  </td>
                  <td>
                    <p><span>Micromax Informatics Ltd.</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>
                    <p><span>غير مدرجة</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>4</span></p>
                  </td>
                  <td>
                    <p><span>iBus Network &amp; Infrastructure Pvt. Ltd.</span></p>
                    <p><span>(Advisor)</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>
                    <p><span>غير مدرجة</span></p>
                  </td>
                  <td>
                    <p><span>Indus Towers Ltd.</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>
                    <p><span>غير مدرجة</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>5</span></p>
                  </td>
                  <td>
                    <p><span>Tech-Connect Retail Pvt. Ltd.</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>
                    <p><span>غير مدرجة</span></p>
                  </td>
                  <td>
                    <p><span>IFFCO Kisan Sanchar Ltd.</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>
                    <p><span>غير مدرجة&nbsp;</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>6</span></p>
                  </td>
                  <td>
                    <p><span>Tanla Solutions Ltd.</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>
                    <p><span>مساهمة مدرجة</span></p>
                  </td>
                  <td>
                    <p><span>Bharti Cellular Ltd.</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>
                    <p><span>غير مدرجة&nbsp;</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>7</span></p>
                  </td>
                  <td>
                    <p><span>Z-Axis Management Consultants &amp; Strategic Advisors</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>
                    <p><span>شركة تضامنية محدودة المسؤولية</span></p>
                  </td>
                  <td>
                    <p><span>GSMA</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>
                    <p><span>غير مدرجة&nbsp;</span></p>
                  </td>
                </tr>
              </tbody>
            </table>
            <p><br /><br /></p>
            <table class="stc_table">
              <tbody>
                <tr>
                  <td rowspan="10">
                    <p><strong>6</strong></p>
                  </td>
                  <td rowspan="10">
                    <p><strong>الأستاذ/ روي تشـســنـــــــــــات</strong></p>
                    <p><strong>عضو مجلس الإدارة&nbsp;</strong></p>
                    <p><strong>عضو لجنة الاستثمار&nbsp;</strong></p>
                  </td>
                  <td rowspan="2">
                    <p><span>م</span></p>
                  </td>
                  <td rowspan="2">
                    <p><span>أسماء الشركات التي يكون عضو مجلس الإدارة عضواً في مجالس إدارتها</span></p>
                    <p><span>&nbsp;(الحالية) أو من مديريها</span></p>
                  </td>
                  <td colspan="2">
                    <p><span>مقرها</span></p>
                  </td>
                  <td rowspan="2">
                    <p><span>الكيان القانوني</span></p>
                    <p><span>(مساهمة مدرجة/مساهمة غير مدرجة/ ذات مسؤولية محددة / ....)</span></p>
                  </td>
                  <td rowspan="2">
                    <p><span>أسماء الشركات التي يكون عضو مجلس الإدارة عضواً في مجالس إدارتها (السابقة) أو من مديريها</span></p>
                  </td>
                  <td colspan="2">
                    <p><span>مقرها</span></p>
                  </td>
                  <td rowspan="2">
                    <p><span>الكيان القانوني</span></p>
                    <p><span>(مساهمة مدرجة/مساهمة غير مدرجة/ ذات مسؤولية محددة / ....)</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>داخل المملكة</span></p>
                  </td>
                  <td>
                    <p><span>خارج المملكة</span></p>
                  </td>
                  <td>
                    <p><span>داخل المملكة</span></p>
                  </td>
                  <td>
                    <p><span>خارج المملكة</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>1</span></p>
                  </td>
                  <td>
                    <p><span>stc</span></p>
                  </td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>مساهمة مدرجة</span></p>
                  </td>
                  <td>
                    <p><span>-</span></p>
                  </td>
                  <td>
                    <p><span>-</span></p>
                  </td>
                  <td>
                    <p><span>-</span></p>
                  </td>
                  <td>
                    <p><span>-</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>2</span></p>
                  </td>
                  <td>
                    <p><span>Telstar Corporation</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>
                    <p><span>مساهمة مدرجة</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>
                    <p><span>3</span></p>
                  </td>
                  <td><br />
                    <p><span>Digital Turbine Inc.</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>
                    <p><span>شركة عامة</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>
                    <p><span>4</span></p>
                  </td>
                  <td>
                    <p><span>Blackstone Group</span></p>
                    <p><span>(Independent Advisor)</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>
                    <p><span>شركة عامة</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>
                    <p><span>5</span></p>
                  </td>
                  <td>
                    <p><span>Delta Partners Company</span></p>
                    <p><span>(Independent Advisor)</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>
                    <p><span>شركة خاصة</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>
                    <p><span>6</span></p>
                  </td>
                  <td>
                    <p><span>LotusFlare</span></p>
                    <p><span>(Independent Advisor)</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>
                    <p><span>شركة عامة</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>
                    <p><span>7</span></p>
                  </td>
                  <td>
                    <p><span>VMware</span></p>
                    <p><span>(Senior&nbsp; Advisor)</span></p>
                  </td>
                  <td>
                    <p><span>-</span></p>
                  </td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>
                    <p><span>شركة عامة</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>
                    <p><span>8</span></p>
                  </td>
                  <td>
                    <p><span>Boingo Wireless Inc.</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>
                    <p><span>شركة عامة</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
              </tbody>
            </table>
            <p><br /><br /></p>
            <table class="stc_table">
              <tbody>
                <tr>
                  <td rowspan="5">
                    <p><strong>7</strong></p>
                  </td>
                  <td rowspan="5">
                    <p><strong>الدكتور / إبراهيم بن عبد الرحمن القاضي</strong></p>
                    <p><strong>عضو مجلس الإدارة&nbsp;</strong></p>
                    <p><strong>رئيس لجنة المراجعة</strong></p>
                    <p><strong>عضو اللجنة التنفيذية&nbsp;</strong></p>
                  </td>
                  <td rowspan="2">
                    <p><span>م</span></p>
                  </td>
                  <td rowspan="2">
                    <p><span>أسماء الشركات التي يكون عضو مجلس الإدارة عضواً في مجالس إدارتها</span></p>
                    <p><span>&nbsp;(الحالية) أو من مديريها</span></p>
                  </td>
                  <td colspan="2">
                    <p><span>مقرها</span></p>
                  </td>
                  <td rowspan="2">
                    <p><span>الكيان القانوني</span></p>
                    <p><span>(مساهمة مدرجة/مساهمة غير مدرجة/ ذات مسؤولية محددة / ....)</span></p>
                  </td>
                  <td rowspan="2">
                    <p><span>أسماء الشركات التي يكون عضو مجلس الإدارة عضواً في مجالس إدارتها (السابقة) أو من مديريها</span></p>
                  </td>
                  <td colspan="2">
                    <p><span>مقرها</span></p>
                  </td>
                  <td rowspan="2">
                    <p><span>الكيان القانوني</span></p>
                    <p><span>(مساهمة مدرجة/مساهمة غير مدرجة/ ذات مسؤولية محددة / ....)</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>داخل المملكة</span></p>
                  </td>
                  <td>
                    <p><span>خارج المملكة</span></p>
                  </td>
                  <td>
                    <p><span>داخل المملكة</span></p>
                  </td>
                  <td>
                    <p><span>خارج المملكة</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>1</span></p>
                  </td>
                  <td>
                    <p><span>stc</span></p>
                  </td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>مساهمة مدرجة</span></p>
                  </td>
                  <td>
                    <p><span>شركة ماكــســس الماليزية</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>
                    <p><span>مساهمة مدرجة</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>2</span></p>
                  </td>
                  <td>
                    <p><span>-</span></p>
                  </td>
                  <td>
                    <p><span>-</span></p>
                  </td>
                  <td>
                    <p><span>-</span></p>
                  </td>
                  <td>
                    <p><span>-</span></p>
                  </td>
                  <td>
                    <p><span>شركة ماكسس للاتصالات</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>
                    <p><span>مساهمة غير مدرجة</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>3</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>شركة أوجــيــــه للاتصالات</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>
                    <p><span>مساهمة غير مدرجة</span></p>
                  </td>
                </tr>
              </tbody>
            </table>
            <p><br /><br /><br /></p>
            <table class="stc_table">
              <tbody>
                <tr>
                  <td rowspan="7">
                    <p><strong>8</strong></p>
                  </td>
                  <td rowspan="7">
                    <p><strong>الأستاذ/ أسامة بن ياسين الخياري</strong></p>
                    <p><strong>عضو مجلس الإدارة&nbsp;</strong></p>
                    <p><strong>رئيس لجنة الترشيحات والمكافآت&nbsp;</strong></p>
                  </td>
                  <td rowspan="2">
                    <p><span>م</span></p>
                  </td>
                  <td rowspan="2">
                    <p><span>أسماء الشركات التي يكون عضو مجلس الإدارة عضواً في مجالس إدارتها</span></p>
                    <p><span>&nbsp;(الحالية) أو من مديريها</span></p>
                  </td>
                  <td colspan="2">
                    <p><span>مقرها</span></p>
                  </td>
                  <td rowspan="2">
                    <p><span>الكيان القانوني</span></p>
                    <p><span>(مساهمة مدرجة/مساهمة غير مدرجة/ ذات مسؤولية محددة / ....)</span></p>
                  </td>
                  <td rowspan="2">
                    <p><span>أسماء الشركات التي يكون عضو مجلس الإدارة عضواً في مجالس إدارتها (السابقة) أو من مديريها</span></p>
                  </td>
                  <td colspan="2">
                    <p><span>مقرها</span></p>
                  </td>
                  <td rowspan="2">
                    <p><span>الكيان القانوني</span></p>
                    <p><span>(مساهمة مدرجة/مساهمة غير مدرجة/ ذات مسؤولية محددة / ....)</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>داخل المملكة</span></p>
                  </td>
                  <td>
                    <p><span>خارج المملكة</span></p>
                  </td>
                  <td>
                    <p><span>داخل المملكة</span></p>
                  </td>
                  <td>
                    <p><span>خارج المملكة</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>1</span></p>
                  </td>
                  <td>
                    <p><span>stc</span></p>
                  </td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>
                    <p><span>&nbsp;</span></p>
                  </td>
                  <td>
                    <p><span>مساهمة مدرجة</span></p>
                  </td>
                  <td>
                    <p><span>شركة اكسنتشر السعودية</span></p>
                  </td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>
                    <p><span>&nbsp;</span></p>
                  </td>
                  <td>
                    <p><span>ذات مسؤولية محدودة</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>2</span></p>
                  </td>
                  <td>
                    <p><span>شركة رقمية</span></p>
                    <p><span>(مستشار)</span></p>
                  </td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>
                    <p><span>&nbsp;</span></p>
                  </td>
                  <td>
                    <p><span>ذات مسؤولية محدودة</span></p>
                  </td>
                  <td>
                    <p><span>شركة اكسنتشر الشرق الأوسط</span></p>
                  </td>
                  <td>
                    <p><span>&nbsp;</span></p>
                  </td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>
                    <p><span>ذات مسؤولية محدودة</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>3</span></p>
                  </td>
                  <td>
                    <p><span>شركة نماء المنورة</span></p>
                  </td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>
                    <p><span>&nbsp;</span></p>
                  </td>
                  <td>
                    <p><span>ذات مسؤولية محدودة</span></p>
                  </td>
                  <td>
                    <p><span>مجموعة الفيصلية القابضة</span></p>
                  </td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>
                    <p><span>&nbsp;</span></p>
                  </td>
                  <td>
                    <p><span>مساهمة مقفلة</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>4</span></p>
                  </td>
                  <td>
                    <p><span>شركة تبادل</span></p>
                  </td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>
                    <p><span>&nbsp;</span></p>
                  </td>
                  <td>
                    <p><span>ذات مسؤولية محدودة</span></p>
                  </td>
                  <td>
                    <p><span>&nbsp;-</span></p>
                  </td>
                  <td>
                    <p><span>&nbsp;-</span></p>
                  </td>
                  <td>
                    <p><span>-&nbsp;</span></p>
                  </td>
                  <td>
                    <p><span>&nbsp;-</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>5</span></p>
                  </td>
                  <td>
                    <p><span>شركة اركوم</span></p>
                  </td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>
                    <p><span>&nbsp;</span></p>
                  </td>
                  <td>
                    <p><span>مساهمة مقفلة</span></p>
                  </td>
                  <td>
                    <p><span>&nbsp;</span></p>
                  </td>
                  <td>
                    <p><span>&nbsp;</span></p>
                  </td>
                  <td>
                    <p><span>&nbsp;</span></p>
                  </td>
                  <td>
                    <p><span>&nbsp;</span></p>
                  </td>
                </tr>
              </tbody>
            </table>
            <p>&nbsp;</p>
            <table class="stc_table">
              <tbody>
                <tr>
                  <td rowspan="7">
                    <p><strong>9</strong></p>
                  </td>
                  <td rowspan="7">
                    <p><strong>الأستاذ/ أحمد بن محمد العمران</strong></p>
                    <p><strong>عضو مجلس الإدارة&nbsp;</strong></p>
                    <p><strong>عضو لجنة الترشيحات والمكافآت</strong></p>
                  </td>
                  <td rowspan="2">
                    <p><span>م</span></p>
                  </td>
                  <td rowspan="2">
                    <p><span>أسماء الشركات التي يكون عضو مجلس الإدارة عضواً في مجالس إدارتها</span></p>
                    <p><span>&nbsp;(الحالية) أو من مديريها</span></p>
                  </td>
                  <td colspan="2">
                    <p><span>مقرها</span></p>
                  </td>
                  <td rowspan="2">
                    <p><span>الكيان القانوني</span></p>
                    <p><span>(مساهمة مدرجة/مساهمة غير مدرجة/ ذات مسؤولية محددة / ....)</span></p>
                  </td>
                  <td rowspan="2">
                    <p><span>أسماء الشركات التي يكون عضو مجلس الإدارة عضواً في مجالس إدارتها (السابقة) أو من مديريها</span></p>
                  </td>
                  <td colspan="2">
                    <p><span>مقرها</span></p>
                  </td>
                  <td rowspan="2">
                    <p><span>الكيان القانوني</span></p>
                    <p><span>(مساهمة مدرجة/مساهمة غير مدرجة/ ذات مسؤولية محددة / ....)</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>داخل المملكة</span></p>
                  </td>
                  <td>
                    <p><span>خارج المملكة</span></p>
                  </td>
                  <td>
                    <p><span>داخل المملكة</span></p>
                  </td>
                  <td>
                    <p><span>خارج المملكة</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>1</span></p>
                  </td>
                  <td>
                    <p><span>stc</span></p>
                  </td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>مساهمة مدرجة</span></p>
                  </td>
                  <td>
                    <p><span>المجموعة السعودية للاستثمار الصناعي</span></p>
                  </td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>مساهمة مدرجة</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>2</span></p>
                  </td>
                  <td>
                    <p><span>شركة تكامل القابضة</span></p>
                  </td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>ذات مسؤولية محدودة</span></p>
                  </td>
                  <td>
                    <p><span>-</span></p>
                  </td>
                  <td>
                    <p><span>-</span></p>
                  </td>
                  <td>
                    <p><span>-</span></p>
                  </td>
                  <td>
                    <p><span>-</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>3</span></p>
                  </td>
                  <td>
                    <p><span>شركة الاسمنت السعودية</span></p>
                  </td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>مساهمة مدرجة</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>
                    <p><span>4</span></p>
                  </td>
                  <td>
                    <p><span>شركة مدد الأعمال لتقنية نظم المعلومات</span></p>
                  </td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>ذات مسؤولية محدودة</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>
                    <p><span>5</span></p>
                  </td>
                  <td>
                    <p><span>شركة مصدر لحلول البيانات&nbsp;</span></p>
                  </td>
                  <td>
                    <p><span>✓</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>ذات مسؤولية محدودة</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
              </tbody>
            </table>            
          </div>

          <!-- <div class="table_4">
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
          </div> -->
         
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