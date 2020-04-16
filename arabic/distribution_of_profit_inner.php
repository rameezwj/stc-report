<!doctype html>
<html class="no-js" lang="">

<?php require_once 'head.php'; ?>

<body class="page_inner">
  
  <style type="text/css">
    /*distribution_of_profit_inner*/
    .distribution_of_profit_inner .screentop_para{
      margin: 50px 50px 50px 0;
      overflow: hidden;
      display: inline-block;
      position: relative;
    }
    .distribution_of_profit_inner .tabular_data{
      width:calc( 100% - 100px );
      margin: 0 auto;
      clear: both;
    }
    .distribution_of_profit_inner .tabular_data .c_row{
     display: flex;
    }
    .distribution_of_profit_inner .tabular_data .c_row div{
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
    .distribution_of_profit_inner .tabular_data .c_row div:last-child{
      border-left: 1px solid #4f0f8c;
    }
    .distribution_of_profit_inner .tabular_data .c_row:last-child div{
      border-bottom: 1px solid #4f0f8c; 
    }
    .distribution_of_profit_inner .tabular_data .tabular_data_inner .c_row:hover div:first-child{
      background: #FF375E;
    }
    .distribution_of_profit_inner .tabular_data .tabular_data_inner .c_row div:first-child{
      text-align: center;
      justify-content: center;
    }
    .distribution_of_profit_inner .tabular_data .tabular_data_inner .c_row:hover div{
      background: #4f0f8c;
      color: #fff;
    }
    .distribution_of_profit_inner .tabular_data .c_row.second div  {
      padding: 10px;
    }
    .distribution_of_profit_inner .tabular_data .c_row.first {
      margin-bottom: 20px;
    }
    .distribution_of_profit_inner .tabular_data .c_row.first div{
      border:none;
      border-left: 1px solid #fff;
      color: #fff;
      padding: 20px;
      text-align: center;
      justify-content: center;
    }

    .distribution_of_profit_inner .tabular_data2{
      width:calc( 100% - 100px );
      margin: 0 auto;
      clear: both;
    }
    .distribution_of_profit_inner .tabular_data2 .c_row{
     display: flex;
    }

    .distribution_of_profit_inner .tabular_data2 .c_row.first.table_white div{
      color: #4f0f8c;
      border: 1px solid #4f0f8c;
      border-left: none;
      border-top: none;
    }
     .distribution_of_profit_inner .tabular_data2 .c_row.first.table_white div.last div.c_row{
      border-left: 0 !important;
    }
    .distribution_of_profit_inner .tabular_data2 .c_row.first.table_white div span{
      border-left: 1px solid #4f0f8c !important;
    }
    .distribution_of_profit_inner .tabular_data2 .c_row.first.table_white div span:last-child{
      border-left: none !important;
    }
    .distribution_of_profit_inner .tabular_data2 .c_row div{
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
    .distribution_of_profit_inner .tabular_data2 .c_row div:last-child{
      border-left: 1px solid #4f0f8c !important;
    }
    .distribution_of_profit_inner .tabular_data2 .c_row:last-child div{
      border-bottom: 1px solid #4f0f8c; 
    }
    .distribution_of_profit_inner .tabular_data2 .tabular_data_inner .c_row:hover div:first-child{
      background: #FF375E;
    }
    .distribution_of_profit_inner .tabular_data2 .tabular_data_inner .c_row div:first-child{
      text-align: center;
      justify-content: center;
    }
    .distribution_of_profit_inner .tabular_data2 .tabular_data_inner .c_row:hover div{
      background: #4f0f8c;
      color: #fff;
    }
    .distribution_of_profit_inner .tabular_data2 .c_row.second div  {
      padding: 10px;
    }
    .distribution_of_profit_inner .tabular_data2 .c_row.first {
      margin-bottom: 0;
    }
    .distribution_of_profit_inner .tabular_data2 .c_row.first div{
      border:none;
      border-left: 1px solid #fff;
      color: #fff;
      padding: 20px;
      text-align: center;
      justify-content: center;
    }
    .distribution_of_profit_inner .tabular_data2 .c_row.first div.last{
      padding: 0;
      flex-wrap: wrap;
      align-items: initial;
      width: 50%;
      flex: auto;
    }
    .distribution_of_profit_inner .tabular_data2 .c_row.first div.last .f-row{
      display: flex;
      flex: initial;
      flex-wrap: wrap;
      flex: 0 0 100%;
      border: none;
      padding: 0;
    }
    .distribution_of_profit_inner .tabular_data2 .c_row.first div.last .f-row span{
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
    .distribution_of_profit_inner .tabular_data2 .c_row.first div.last .f-row span:last-child{
       border-left: none !important;
    }
    .distribution_of_profit_inner .img_wrap {
      position: relative;
      overflow: hidden;
    }
    .distribution_of_profit_inner .img_wrap .left{
      width: 40%;
      float: left;

    }
    .distribution_of_profit_inner .img_wrap .right{
      width: 35%;
      float: right;
    }
    .distribution_of_profit_inner .img_wrap img{
      width: 100%;
    }
    .distribution_of_profit_inner .cwrapper{
        margin-bottom:50px;
    }
    .distribution_of_profit_inner .bar-wrap{
      position: relative;
      height: 10px;
      width: 100%;
      margin-bottom: 50px;
    }
   
   .distribution_of_profit_inner .sp_wrap .content-wrapper {
      position: relative;
      /*margin: 50px 0;*/
    }
    .distribution_of_profit_inner .sp_wrap .content-wrapper.c-row-reverse .left{
      width: 50%;
      float: right;
    }
    .distribution_of_profit_inner .sp_wrap .content-wrapper.c-row-reverse .left .box_center_content{
      float: right;
      width: 90%;
    }
    .distribution_of_profit_inner .sp_wrap .content-wrapper.c-row-reverse .right{
    }
    .distribution_of_profit_inner .sp_wrap .content-wrapper:after {
      content: '';
      display: table;
      clear: both;
    }
    .distribution_of_profit_inner .sp_wrap .content-wrapper .left{
      width: 50%;
      float: left;
      position: relative;
      min-height: 250px;
    }
    .distribution_of_profit_inner .sp_wrap .content-wrapper .left .box_center_content{
        /*margin:0 auto;*/
        width: 80%;
        min-height: 400px;
        /*float: left;*/
    }

    .distribution_of_profit_inner .sp_wrap .content-wrapper .left .box_center_content p{
      font-size: 28px;
      line-height: 38px;
      font-family: "stc_light";
    }
    .distribution_of_profit_inner .sp_wrap .content-wrapper .img-wrap{
      height: 400px;
    }
    .distribution_of_profit_inner .sp_wrap .content-wrapper .img-wrap img{
      height: 100%;
      width: 100%;
      object-fit: cover;
      object-position: top right;
    }
    .distribution_of_profit_inner .sp_wrap .content-wrapper .right{
      width: 40%;
      float: right;
      position: relative;
      min-height: 250px;
    }
   .distribution_of_profit_inner .sp_wrap .sp_row{
        display: flex;
        margin:50px 0;
   }
   .distribution_of_profit_inner .sp_wrap .sp_row .left,
   .distribution_of_profit_inner .sp_wrap .sp_row .right{
    flex: initial;
   }
  .distribution_of_profit_inner .sp2_row .left,
  .distribution_of_profit_inner .sp2_row .right{
    height: 400px;
  }
  .distribution_of_profit_inner .sp2_row .right
  {
    height: 400px;
    padding: 40px;
    width: 45%;
  }
  .distribution_of_profit_inner .sp_wrap .sp_row .right .content_para{
    margin-bottom: 0;
  }
  .distribution_of_profit_inner .sp_wrap .bar-wrap {
    position: absolute;
    height: 60px;
    width: 80%;
    top: 50%;
    right: 0;
    transform: translate(0,-100%);
  }
    /*distribution_of_profit_inner*/

 
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
    .txt_vertical
    {
      writing-mode: vertical-lr;
    }
    /*HELPER CLASSES*/

  </style>
<div class="main_boc">
    <div class=" outer_wrapper">
    <!-- SECTION1 -->
      <div class="distribution_of_profit_inner">
        <div class="sp_wrap cwrapper">
          <div class="screentop_para">
            <h1>
              <span class="h1 colr_white bk_purple" style="padding: 5px 15px 5px 150px;"> ‫
                ‫والمكافآت‬ ‫رباح‬ ‫ا‬ ‫توزيع‬
              </span> 
            </h1>
            <h1>
              <span class="h1 colr_purple"> 
               ‫دارة‬ ‫ا‬ ‫مجلس‬ ‫وتوصيات‬ 
              </span>
            </h1>
          </div>
          <div class="content-wrapper">
            <div class="left">
             <div class="img-wrap">
               <img src="img/guy_tab1.jpg">
             </div>
            </div>
            <div class="right marginr50" style="height: 400px;">
              <div style="position: absolute;bottom: 0;">
                  <h5 class="h5 colr_purple">
                  ‫رباح‬ ‫ا‬ ‫توزيعات‬
                  </h5>
                  <p class="content_para">
                  ‫‫بمبلغ‬ ‫‪2019‬م‪،‬‬ ‫عام‬ ‫من‬ ‫الرابع‬ ‫الربع‬ ‫عن‬ ‫كة‬ ‫ال‬ ‫مساهمي‬ ‫على‬ ‫نقدية‬ ‫أرباح‬ ‫توزيع‬ ‫عن‬ ‫كة‬ ‫ال‬ ‫أعلنت‬
                  ‫قد‬ ‫العام‬ ‫ل‬ ‫خ‬ ‫كة‬ ‫ال‬ ‫أن‬ ‫علماً‬ ‫سهم‪،‬‬ ‫كل‬ ‫عن‬ ‫سعودي‬ ‫ريال‬ ‫‪1‬‬ ‫بواقع‬ ‫سعودي‬ ‫ريال‬ ‫مليون‬ ‫‪2,000‬‬ ‫مقداره‬
                  ‫‪2019‬م‬ ‫العام‬ ‫من‬ ‫والثالث‬ ‫والثاني‬ ‫ول‬ ‫ا‬ ‫الربع‬ ‫عن‬ ‫كة‬ ‫ال‬ ‫مساهمي‬ ‫على‬ ‫نقدية‬ ‫أرباح‬ ‫بتوزيع‬ ‫قامت‬
                  ‫حسب‬ ‫سهم‪،‬‬ ‫كل‬ ‫عن‬ ‫سعودي‬ ‫ريال‬ ‫‪1‬‬ ‫بواقع‬ ‫ربع‬ ‫كل‬ ‫عن‬ ‫سعودي‬ ‫ريال‬ ‫مليون‬ ‫‪2,000‬‬ ‫وقدره‬ ‫بمبلغ‬
                  ‫بتاريخ‬ ‫المنعقد‬ ‫اجتماعه‬ ‫في‬ ‫السعوديـة‬ ‫ت‬ ‫تصا‬ ‫ا‬ ‫كة‬ ‫إدارة‬ ‫مجلس‬ ‫أقرها‬ ‫التي‬ ‫رباح‬ ‫ا‬ ‫توزيع‬ ‫سياسة‬
                  ‫‪2019‬م‪.‬‬ ‫عام‬ ‫ل‬ ‫خ‬ ‫المنعقدة‬ ‫العامة‬ ‫الجمعية‬ ‫من‬ ‫والمعتمدة‬ ‫‪16/12/2018‬م(‪،‬‬ ‫)الموافق‬ ‫‪09/04/1440‬هـ‬
                  ‫رباح(‬ ‫ا‬ ‫توزيع‬ ‫سياسة‬ ‫فقرة‬ ‫على‬ ‫ع‬ ‫ط‬ ‫ا‬ ‫نرجو‬ ‫يضاح‬ ‫ا‬ ‫من‬ ‫‪).‬لمزيد‬
                  <br>
                  ‫‫سعودي‬ ‫ريال‬ ‫‪4‬‬ ‫مبلغ‬ ‫م‬ ‫‪2019‬‬ ‫عام‬ ‫عن‬ ‫الجمعية‬ ‫موافقة‬ ‫بعد‬ ‫الموزعة‬ ‫رباح‬ ‫ا‬ ‫إجمالي‬ ‫يصبح‬ ‫وبذلك‬
                  ‫م‬ ‫‪2019‬‬ ‫عام‬ ‫عن‬ ‫للتوزيعات‬ ‫بيان‬ ‫يلي‬ ‫فيما‬ ‫و‬ ‫للسهم(‪.‬‬ ‫سعودي‬ ‫ريال‬ ‫‪6‬‬ ‫)‪2018‬م‪:‬‬ ‫‪:‬للسهم‬
                  </p>
              </div>
            </div>
          </div>
          <div class="tabular_data margint50">
            <div class="c_row first bk_purple nomargin">
              <div>‫البيان‬</div>
              <div>‫ت(‬ ‫الريا‬ ‫يين‬ ‫)م‬ ‫التوزيع‬ ‫إجمالي‬</div>
              <div>‫ن‬ ‫ع‬ ‫ا‬ ‫تاريخ‬</div>
              <div>‫ستحقاق‬ ‫ا‬ ‫تاريخ‬</div>
              <div>‫التوزيع‬ ‫تاريخ‬</div>
           
            </div>
            <div class="tabular_data_inner">
             
              <div class="c_row">
                <div></div>
                <div>
                </div>
                <div>
                </div>
                <div>
                </div>
                <div>
                </div>
              </div>
              <div class="c_row">
                <div></div>
                <div>
                </div>
                <div>
                </div>
                <div>
                </div>
                <div>
                </div>
              </div>
              <div class="c_row">
                <div></div>
                <div>
                </div>
                <div>
                </div>
                <div>
                </div>
                <div>
                </div>
              </div>
              <div class="c_row">
                <div></div>
                <div>
                </div>
                <div>
                </div>
                <div>
                </div>
                <div>
                </div>
              </div>
            </div>
          </div>
          <div class="sp_wrap margint50">
              <div class="content-wrapper inner-wrapper c-row-reverse sp_row">
                <div class="right marginr50" style="position: relative; width: 50%;">
                  <h5 class="h5 colr_purple">
                  ‫التنفيذيين‬ ‫كبار‬ ‫من‬ ‫وخمسة‬ ‫دارة‬ ‫ا‬ ‫مجلس‬ ‫أعضاء‬ ‫وتعويضات‬ ‫مكافآت‬       
                   </h5>
                   <p class="content_para">
                    ‫أبريل‬ ‫‪24‬‬ ‫)الموافق‬ ‫‪1440‬هـ‬ ‫‪19‬شعبان‬ ‫بتاريخ‬ ‫المنعقدة‬ ‫كة‬ ‫لل‬ ‫العادية‬ ‫غير‬ ‫العامة‬ ‫الجمعية‬ ‫وافقت‬
                    ‫عن‬ ‫المنبثقة‬ ‫اللجان‬ ‫ومكافآت‬ ‫ومكافآتهم‪،‬‬ ‫دارة‬ ‫ا‬ ‫مجلس‬ ‫أعضاء‬ ‫ترشيح‬ ‫سياسة‬ ‫تعديل‬ ‫على‬ ‫‪2019‬م(‪،‬‬
                    ‫وضوابط‬ ‫مهامها‬ ‫وعلى‬ ‫المراجعة‪،‬‬ ‫لجنة‬ ‫عمل‬ ‫ئحة‬ ‫تعديل‬ ‫وعلى‬ ‫التنفيذية‪،‬‬ ‫دارة‬ ‫ا‬ ‫ومكافآت‬ ‫المجلس‪،‬‬
                    ‫)‪(200.000‬‬ ‫بقيمة‬ ‫مكافأة‬ ‫على‬ ‫دارة‬ ‫ا‬ ‫مجلس‬ ‫عضو‬ ‫يحصل‬ ‫حيث‬ ‫المراجعة‪،‬‬ ‫لجنة‬ ‫أعضاء‬ ‫ومكافآت‬ ‫عملها‪،‬‬
                    ‫في‬ ‫عضويته‬ ‫نظير‬ ‫ريال‪،‬‬ ‫)‪(200.000‬‬ ‫بقيمة‬ ‫مكافأة‬ ‫على‬ ‫ويحصل‬ ‫المجلس‪،‬‬ ‫في‬ ‫عضويته‬ ‫نظير‬ ‫ريال‪،‬‬
                    ‫في‬ ‫عضويته‬ ‫نظير‬ ‫ريال‪،‬‬ ‫)‪(150.000‬‬ ‫بقيمة‬ ‫مكافأة‬ ‫على‬ ‫المراجعة‬ ‫لجنة‬ ‫عضو‬ ‫ويحصل‬ ‫المجلس‪،‬‬ ‫لجان‬
                    ‫نظير‬ ‫ريال‬ ‫)‪(100.000‬‬ ‫بقيمة‬ ‫مكافأة‬ ‫على‬ ‫خرى‬ ‫ا‬ ‫اللجان‬ ‫في‬ ‫الخارجي‬ ‫العضو‬ ‫يحصل‬ ‫كما‬ ‫المراجعة‪،‬‬ ‫لجنة‬
                    ‫المجلس‬ ‫جلسات‬ ‫حضور‬ ‫بدل‬ ‫على‬ ‫خرى‬ ‫ا‬ ‫اللجان‬ ‫وعضو‬ ‫دارة‬ ‫ا‬ ‫مجلس‬ ‫عضو‬ ‫يحصل‬ ‫كما‬ ‫عضويته‪.‬‬
                    ‫جلسة‬ ‫كل‬ ‫عن‬ ‫ريال‬ ‫)‪(5.000‬‬ ‫بقيمة‬ ‫‪.‬واللجان‬
                    <br>
                    <br>
                    ‫إدارة‬ ‫مجلس‬ ‫أعضاء‬ ‫ت‬ ‫وبد‬ ‫مكافآت‬ ‫وبلغت‬ ‫‪stc‬‬ ‫السنة‬ ‫ل‬ ‫خ‬ ‫ولجانه‬ ‫المجلس‬ ‫لجلسات‬ ‫حضورهم‬ ‫عن‬
                    ‫إضافة‬ ‫اللجان‪،‬‬ ‫لجلسات‬ ‫حضورهم‬ ‫عن‬ ‫الخارجيين‬ ‫اللجان‬ ‫أعضاء‬ ‫ت‬ ‫وبد‬ ‫ومكآفات‬ ‫‪2019‬م‪،‬‬ ‫في‬ ‫المنتهية‬
                    ‫في‬ ‫تنفيذيين‬ ‫خمسة‬ ‫أكبر‬ ‫إلى‬ ‫‪stc‬‬ ‫عام‬ ‫ل‬ ‫خ‬ ‫للمالية‬ ‫التنفيذي‬ ‫والرئيس‬ ‫التنفيذي‪،‬‬ ‫الرئيس‬ ‫فيهم‬ ‫بما‬
                    ‫التالية‬ ‫الجداول‬ ‫وفق‬ ‫‪2019:‬م‬
                  </p>
                </div>
                <div class="left">
                  <div class="bar-wrap" style="left: 0;right: auto;top:initial;bottom: 0; margin-bottom: 0;transform: translate(0);">
                      <div class="element_bars_hr" style="width: 80%;position: absolute;left: 0;height: 100%;">
                          <div class="leftbar bk_pink" style="width: 10%"></div>
                          <div class="rightbar  bk_purple" style="width: 90%"></div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <div class="sp_wrap margint50">
            <div class="content-wrapper inner-wrapper c-row-reverse sp_row">
              <div class="left" style="position: relative;">
                
                <div class="img-wrap marginr50">
                  <img src="img/guy_tab1.jpg">
                </div>
                
              </div>
              <div class="right marginr50">
                <h5 class="h5 colr_purple nomargin">
                 ‫‪2019‬م‬ ‫لعام‬ ‫السابعة‬ ‫للدورة‬ ‫دارة‬ ‫ا‬ ‫مجلس‬ ‫أعضاء‬ ‫وتعويضات‬ ‫مكافآت‬
                </h5>
                <br><br>
                <p class="content_para">
                  ‫تعديل‬ ‫على‬ ‫‪13/3/2017‬م(‪،‬‬ ‫)الموافق‬ ‫‪14/6/1438‬هـ‬ ‫بتاريخ‬ ‫المنعقد‬ ‫اجتماعه‬ ‫في‬ ‫دارة‬ ‫ا‬ ‫مجلس‬ ‫وافق‬
                  ‫في‬ ‫دارة‬ ‫ا‬ ‫مجلس‬ ‫ووافق‬ ‫شهرياً‪،‬‬ ‫ريال‬ ‫ألف‬ ‫مائة‬ ‫)‪(100,000‬‬ ‫لتكون‬ ‫دارة؛‬ ‫ا‬ ‫مجلس‬ ‫رئيس‬ ‫مكافأة‬
                  ‫مجلس‬ ‫رئيس‬ ‫نائب‬ ‫مكافأة‬ ‫تحديد‬ ‫على‬ ‫‪8/5/2018‬م(‪،‬‬ ‫)الموافق‬ ‫‪22/8/1439‬هـ‬ ‫بتاريخ‬ ‫المنعقد‬ ‫اجتماعه‬
                  ‫ريال‬ ‫ألف‬ ‫مائة‬ ‫)‪(100,000‬‬ ‫بقيمة‬ ‫دارة‬ ‫‪.‬ا‬
                  ‫*‬ ‫ستثمارات‬ ‫ا‬ ‫صندوق‬ ‫لممثلي‬ ‫المجلس‬ ‫جلسات‬ ‫حضور‬ ‫وبدل‬ ‫السنوية‪،‬‬ ‫المجلس‬ ‫عضوية‬ ‫مكافأة‬ ‫تورد‬
                  ‫الصندوق‬ ‫إلى‬ ‫)الصندوق(‬ ‫‪.‬العامة‬
                  ‫**‬ ‫في‬ ‫العاملين‬ ‫الصندوق‬ ‫لممثلي‬ ‫واللجان‬ ‫للمجلس‬ ‫الجلسات‬ ‫حضور‬ ‫ت‬ ‫وبد‬ ‫المكافآت‬ ‫جميع‬ ‫تورد‬
                  ‫الصندوق‬ ‫إلى‬ ‫‪.‬الصندوق‬
                </p>
              </div>
            </div>
          </div>

          <div class="tabular_data2 margint50">
            <h5 class="h5 colr_purple">
            ‫   (‬ ‫م‬ ‫‪2019‬‬ ‫لعام‬ ‫السابعة‬ ‫الدورة‬ ‫في‬ ‫اللجان‬ ‫أعضاء‬ ‫مكافآت‬ ‫)‬
            </h5>
             <div class="c_row first bk_purple">
                <div>‫)ريال(‬</div>
                 <div class="c_row last">
                   <div class="c_row f-row" style="padding:10px 20px;">‫المتغيرة‬ ‫المكافآت‬</div>
                     <div class="c_row f-row">
                     <span>‫الثابتة‬ ‫المكافآت‬</span>
                     <span>‫‫
                      في‬ ‫العاملين‬ ‫الصندوق‬ ‫لممثلي‬ ‫واللجان‬ ‫للمجلس‬ ‫الجلسات‬ ‫حضور‬ ‫ت‬ ‫وبد‬ ‫المكافآت‬ ‫جميع‬ ‫تورد‬
                     </span>
                     <span>‫‫للمالية‬ ‫التنفيذي‬</span>
                     <span>‫الثابتة‬ ‫المكافآت‬</span>
                     <span>‫الثابتة‬ ‫المكافآت‬</span>
                     <span>‫الثابتة‬ ‫المكافآت‬</span>
                   </div>
                 </div>
                 <div>‫
                  مكافأة‬
                  ‫نهاية‬
                  ‫الخدمة‬
                </div>
                 <div>
                  ‫المجموع‬
                  ‫الكلي‬
                 </div>
                 <div>
                  ‫بدل‬
                  ‫وفات‬ ‫الم‬
                 </div>
             </div>
             <div class="c_row first table_white">
               <div>1 </div>
               <div class="c_row last">
                 <div class="c_row f-row">
                   <span></span>
                   <span></span>
                   <span></span>
                   <span></span>
                   <span></span>
                   <span></span>
                 </div>
               </div>
               <div>
               </div>
               <div></div>
               <div></div>
             </div>
              <div class="c_row first table_white">
               <div>1 </div>
               
               <div class="c_row last">
                 <div class="c_row f-row">
                   <span></span>
                   <span></span>
                   <span></span>
                   <span></span>
                   <span></span>
                   <span></span>
                 </div>
               </div>
               <div>
               </div>
               <div></div>
               <div></div>
              </div>
              <div class="c_row first table_white">
               <div>1 </div>
               
               <div class="c_row last">
                 <div class="c_row f-row">
                   <span></span>
                   <span></span>
                   <span></span>
                   <span></span>
                   <span></span>
                   <span></span>
                 </div>
               </div>
               <div>
               </div>
               <div></div>
               <div></div>
              </div>
              <div class="c_row first table_white">
               <div>1 </div>
               <div class="c_row last">
                 <div class="c_row f-row">
                   <span></span>
                   <span></span>
                   <span></span>
                   <span></span>
                   <span></span>
                   <span></span>
                 </div>
               </div>
               <div>
               </div>
               <div></div>
               <div></div>
              </div>

          
          </div>

          <div class="tabular_data2 margint50">
             <div class="c_row first bk_purple">
                <div>‫)ريال(‬</div>
                 <div class="c_row last">
                   <div class="c_row f-row" style="padding:10px 20px;">‫المتغيرة‬ ‫المكافآت‬</div>
                     <div class="c_row f-row">
                     <span>‫الثابتة‬ ‫المكافآت‬</span>
                     <span>‫‫
                      في‬ ‫العاملين‬ ‫الصندوق‬ ‫لممثلي‬ ‫واللجان‬ ‫للمجلس‬ ‫الجلسات‬ ‫حضور‬ ‫ت‬ ‫وبد‬ ‫المكافآت‬ ‫جميع‬ ‫تورد‬
                     </span>
                     <span>‫‫للمالية‬ ‫التنفيذي‬</span>
                     <span>‫الثابتة‬ ‫المكافآت‬</span>
                     <span>‫الثابتة‬ ‫المكافآت‬</span>
                     <span>‫الثابتة‬ ‫المكافآت‬</span>
                   </div>
                 </div>
                 <div>‫
                  مكافأة‬
                  ‫نهاية‬
                  ‫الخدمة‬
                </div>
                 <div>
                  ‫المجموع‬
                  ‫الكلي‬
                 </div>
                 <div>
                  ‫بدل‬
                  ‫وفات‬ ‫الم‬
                 </div>
             </div>
             <div class="c_row first table_white">
               <div>1 </div>
               <div class="c_row last">
                 <div class="c_row f-row">
                   <span></span>
                   <span></span>
                   <span></span>
                   <span></span>
                   <span></span>
                   <span></span>
                 </div>
               </div>
               <div>
               </div>
               <div></div>
               <div></div>
             </div>
              <div class="c_row first table_white">
               <div>1 </div>
               
               <div class="c_row last">
                 <div class="c_row f-row">
                   <span></span>
                   <span></span>
                   <span></span>
                   <span></span>
                   <span></span>
                   <span></span>
                 </div>
               </div>
               <div>
               </div>
               <div></div>
               <div></div>
              </div>
              <div class="c_row first table_white">
               <div>1 </div>
               
               <div class="c_row last">
                 <div class="c_row f-row">
                   <span></span>
                   <span></span>
                   <span></span>
                   <span></span>
                   <span></span>
                   <span></span>
                 </div>
               </div>
               <div>
               </div>
               <div></div>
               <div></div>
              </div>
              <div class="c_row first table_white">
               <div>1 </div>
               <div class="c_row last">
                 <div class="c_row f-row">
                   <span></span>
                   <span></span>
                   <span></span>
                   <span></span>
                   <span></span>
                   <span></span>
                 </div>
               </div>
               <div>
               </div>
               <div></div>
               <div></div>
              </div>
                  <p class="content_para margint50">
               ‫*‬ ‫في‬ ‫العاملين‬ ‫الصندوق‬ ‫لممثلي‬ ‫واللجان‬ ‫للمجلس‬ ‫الجلسات‬ ‫حضور‬ ‫ت‬ ‫وبد‬ ‫المكافآت‬ ‫جميع‬ ‫تورد‬
              </p>
          </div>

          <div class="tabular_data margint100">
            <h5 class="h5 colr_purple">
              ‫‪2019‬م(‬ ‫عام‬ ‫ل‬ ‫خ‬ ‫للمالية‬ ‫التنفيذي‬ ‫والرئيس‬ ‫التنفيذي‬ ‫الرئيس‬ ‫ضمنهم‬ ‫)من‬ ‫التنفيذيين‬ ‫كبار‬ ‫من‬ ‫خمسة‬ ‫مكافآت‬
            </h5>
            <div class="c_row first bk_purple nomargin">
              <div>‫سم‬ ‫ا‬</div>
              <div>‫‫اللجان‬</div>
              <div>‫‫حضور‬ ‫بدل‬ ‫)عدا‬ ‫الثابتة‬ ‫المكافآت‬</div>
              <div>‫‫جلسات‬ ‫حضور‬ ‫بدل‬</div>
              <div>‫المجموع‬</div>
           
            </div>
            <div class="tabular_data_inner">
             
              <div class="c_row">
                <div></div>
                <div>
                </div>
                <div>
                </div>
                <div>
                </div>
                <div>
                </div>
              </div>
              <div class="c_row">
                <div></div>
                <div>
                </div>
                <div>
                </div>
                <div>
                </div>
                <div>
                </div>
              </div>
              <div class="c_row">
                <div></div>
                <div>
                </div>
                <div>
                </div>
                <div>
                </div>
                <div>
                </div>
              </div>
              <div class="c_row">
                <div></div>
                <div>
                </div>
                <div>
                </div>
                <div>
                </div>
                <div>
                </div>
              </div>
            </div>
          </div>
          <div class="sp_wrap margint50">
              <div class="content-wrapper inner-wrapper c-row-reverse sp_row">
              <div class="right marginr50" style="position: relative; width: 50%;">
                 <p class="content_para">
                  ‫ومن‬ ‫كريم‪.‬‬ ‫كة‬ ‫أصول‬ ‫على‬ ‫ستحواذ‬ ‫ا‬ ‫عملية‬ ‫أوبر‬ ‫كة‬ ‫إستكملت‬ ‫‪2020‬‬ ‫يناير‬ ‫‪2‬‬ ‫بتاريخ‬
                  ‫كريم‬ ‫كة‬ ‫في‬ ‫المبا‬ ‫إستثمارها‬ ‫بيع‬ ‫من‬ ‫المجموعة‬ ‫نتائج‬ ‫على‬ ‫ستحواذ‬ ‫ا‬ ‫هذا‬ ‫أثر‬ ‫تسجيل‬ ‫المتوقع‬
                  ‫‪2020‬م‬ ‫عام‬ ‫من‬ ‫ول‬ ‫ا‬ ‫الربع‬ ‫ل‬ ‫‪.‬خ‬
                  <br>
                  <br>
                  ‫‫“فودافون‬ ‫مجموعة‬ ‫مع‬ ‫ملزمة‪،‬‬ ‫غير‬ ‫تفاهم‬ ‫مذكرة‬ ‫اتفاقية‬ ‫توقيع‬ ‫تم‬ ‫‪2020‬‬ ‫يناير‬ ‫‪29‬‬ ‫بتاريخ‬
                  ‫حوالي‬ ‫تبلغ‬ ‫بقيمة‬ ‫وذلك‬
                  ‫م‬ ‫فودافون‬ ‫كة‬ ‫أسهم‬ ‫من‬ ‫‪%55‬‬ ‫على‬ ‫كة‬ ‫ال‬ ‫بموجبها‬ ‫تستحوذ‬ ‫العالمية”‬
                  ‫المقابل‬ ‫تحديد‬ ‫يتم‬ ‫ان‬ ‫على‬ ‫سعودي(‬ ‫ريال‬ ‫مليون‬ ‫‪8,970‬‬ ‫حوالي‬ ‫يعادل‬ ‫)ما‬ ‫أمريكي‬ ‫ر‬ ‫دو‬ ‫مليون‬ ‫‪2,392‬‬
                  ‫النهائية‬ ‫تفاقيات‬ ‫ا‬ ‫على‬ ‫التوقيع‬ ‫عند‬ ‫النهائي‬ ‫‪.‬المالي‬
                  <br>
                  <br>
                  ‫‫“فودافون‬ ‫مجموعة‬ ‫مع‬ ‫ملزمة‪،‬‬ ‫غير‬ ‫تفاهم‬ ‫مذكرة‬ ‫اتفاقية‬ ‫توقيع‬ ‫تم‬ ‫‪2020‬‬ ‫يناير‬ ‫‪29‬‬ ‫بتاريخ‬
                  ‫حوالي‬ ‫تبلغ‬ ‫بقيمة‬ ‫وذلك‬
                  ‫م‬ ‫فودافون‬ ‫كة‬ ‫أسهم‬ ‫من‬ ‫‪%55‬‬ ‫على‬ ‫كة‬ ‫ال‬ ‫بموجبها‬ ‫تستحوذ‬ ‫العالمية”‬
                  ‫المقابل‬ ‫تحديد‬ ‫يتم‬ ‫ان‬ ‫على‬ ‫سعودي(‬ ‫ريال‬ ‫مليون‬ ‫‪8,970‬‬ ‫حوالي‬ ‫يعادل‬ ‫)ما‬ ‫أمريكي‬ ‫ر‬ ‫دو‬ ‫مليون‬ ‫‪2,392‬‬
                  ‫النهائية‬ ‫تفاقيات‬ ‫ا‬ ‫على‬ ‫التوقيع‬ ‫عند‬ ‫النهائي‬ ‫‪.‬المالي‬
                  <br>
                  <br>
                  ‫‫“فودافون‬ ‫مجموعة‬ ‫مع‬ ‫ملزمة‪،‬‬ ‫غير‬ ‫تفاهم‬ ‫مذكرة‬ ‫اتفاقية‬ ‫توقيع‬ ‫تم‬ ‫‪2020‬‬ ‫يناير‬ ‫‪29‬‬ ‫بتاريخ‬
                  ‫حوالي‬ ‫تبلغ‬ ‫بقيمة‬ ‫وذلك‬
                  ‫م‬ ‫فودافون‬ ‫كة‬ ‫أسهم‬ ‫من‬ ‫‪%55‬‬ ‫على‬ ‫كة‬ ‫ال‬ ‫بموجبها‬ ‫تستحوذ‬ ‫العالمية”‬
                  ‫المقابل‬ ‫تحديد‬ ‫يتم‬ ‫ان‬ ‫على‬ ‫سعودي(‬ ‫ريال‬ ‫مليون‬ ‫‪8,970‬‬ ‫حوالي‬ ‫يعادل‬ ‫)ما‬ ‫أمريكي‬ ‫ر‬ ‫دو‬ ‫مليون‬ ‫‪2,392‬‬
                  ‫النهائية‬ ‫تفاقيات‬ ‫ا‬ ‫على‬ ‫التوقيع‬ ‫عند‬ ‫النهائي‬ ‫‪.‬المالي‬

                </p>
              </div>
              <div class="left">
                <div class="bar-wrap" style="left: 0;right: auto;height: 25px; width: 95%;">
                    <div class="element_bars_hr" style="width: 100%;position: absolute;left: 0;height: 100%;">
                        <div class="leftbar bk_pink" style="width:5%"></div>
                        <div class="rightbar  bk_purple" style="width: 95%"></div>
                  </div>
                </div>
              </div>
              </div>
          </div>
          <div class="sp_wrap margint50">
            <div class="content-wrapper inner-wrapper c-row-reverse sp_row">
               <div class="left marginr50" style="position: relative;">
                    <div class="img-wrap">
                      <img src="img/guy_tab1.jpg">
                    </div>
                    <div class="col10 margint50">
                    <h5 class="h5 colr_purple">
                         ‫دارة‬ ‫ا‬ ‫مجلس‬ ‫إقرارات‬                 
                    </h5>
                    <p class="content_para">
                      ‫‫إدارة‬ ‫مجلس‬ ‫‪:‬يقر‬
                      ‫يلي‬ ‫بما‬ ‫السعودية‬ ‫ت‬ ‫تصا‬ ‫ا‬ ‫كة‬
                      <br>
                      <br>
                      ‫‫•‬
                      ‫الصحيح‬ ‫بالشكل‬ ‫أعدت‬ ‫الحسابات‬ ‫ت‬ ‫سج‬ ‫‪.‬أن‬
                      <br><br>
                      ‫بفاعلية‬ ‫ونُفذ‬ ‫سليمة‬ ‫أسس‬ ‫على‬ ‫أعد‬ ‫الداخلية‬ ‫الرقابة‬ ‫نظام‬ ‫‪.‬أن‬
                      <br><br>
                      ‫‪.‬أنه‬
                      ‫ال‬ ‫قدرة‬ ‫بشأن‬ ‫يذكر‬ ‫شك‬ ‫أي‬ ‫المجلس‬ ‫لدى‬ ‫يوجد‬
                      ‫•‬
                      <br><br>
                      ‫نشاطها‬ ‫مواصلة‬ ‫على‬ ‫كة‬
                      <br><br>
                      ‫أنه‬
                      ‫ال‬ ‫قدرة‬ ‫بشأن‬ ‫يذكر‬ ‫شك‬ ‫أي‬ ‫المجلس‬ ‫لدى‬ ‫يوجد‬
                      ‫•‬
                      <br><br>
                      ‫نشاطها‬ ‫مواصلة‬ ‫على‬ ‫كة‬
                      ‫•‬
                      <br><br>
                      ‫للمعايير‬ ‫وفقاً‬ ‫م‬ ‫‪2019‬‬ ‫ديسمبر‬ ‫‪31‬‬ ‫في‬ ‫المنتهية‬ ‫للسنة‬ ‫الموحدة‬ ‫المالية‬ ‫القوائم‬ ‫إعداد‬ ‫تم‬
                      ‫خرى‬ ‫ا‬ ‫صدارات‬ ‫ا‬ ‫و‬ ‫والمعايير‬ ‫السعودية‬ ‫العربية‬ ‫المملكة‬ ‫في‬ ‫المعتمدة‬ ‫المالي‬ ‫للتقرير‬ ‫الدولية‬
                      ‫القانونيين‬ ‫للمحاسبين‬ ‫السعودية‬ ‫الهيئة‬ ‫من‬ ‫‪.‬المعتمدة‬
                      ‫•‬
                      <br><br>
                      ‫•‬
                      ‫المصدرة‬ ‫سهم‬ ‫ا‬ ‫من‬ ‫أكثر‬ ‫أو‬ ‫‪(%‬‬ ‫‪5‬‬ ‫)‬ ‫تملك‬ ‫اعتباري‬ ‫أو‬ ‫طبيعي‬ ‫شخص‬ ‫أي‬ ‫عن‬ ‫كة‬ ‫ال‬ ‫تُبلّغ‬ ‫لم‬
                      ‫‪2019‬م‬ ‫عام‬ ‫ل‬ ‫خ‬ ‫كة‬ ‫‪.‬لل‬
                      <br><br>
                      ‫أو‬ ‫اكتتاب‬ ‫حق‬ ‫مذكرات‬ ‫أو‬ ‫خيار‬ ‫حقوق‬ ‫أي‬ ‫أو‬ ‫أسهم‬ ‫إلى‬ ‫للتحويل‬ ‫قابلة‬ ‫دين‬ ‫أدوات‬ ‫أي‬ ‫يوجد‬
                      ‫‪2019‬م‬ ‫عام‬ ‫ل‬ ‫خ‬ ‫كة‬ ‫ال‬ ‫منحتها‬ ‫أو‬ ‫أصدرتها‬ ‫مشابهة‬ ‫‪.‬حقوق‬ ‫•‬
                      <br><br>
                      ‫قابلة‬ ‫دين‬ ‫أدوات‬ ‫ي‬ ‫م‬ ‫‪2019‬‬ ‫عام‬ ‫ل‬ ‫خ‬ ‫كة‬ ‫•‬
                      ‫أو‬ ‫استرداد‬ ‫أي‬ ‫يوجد‬
                      <br><br>
                      ‫سترداد‬ ‫‪.‬ل‬
                      ‫ال‬ ‫به‬ ‫قامت‬ ‫إلغاء‬ ‫أو‬ ‫اء‬
                      <br><br>
                      ‫ال‬ ‫إدارة‬ ‫مجلس‬ ‫أعضاء‬ ‫أحد‬ ‫بموجبه‬ ‫تنازل‬ ‫اتفاق‬ ‫أو‬ ‫ترتيبات‬ ‫أي‬ ‫يوجد‬
                      ‫تعويض‬ ‫أو‬ ‫راتب‬ ‫أي‬ ‫عن‬ ‫‪.‬التنفيذيين‬
                      <br><br>
                      ‫ال‬ ‫مساهمي‬ ‫أحد‬ ‫بموجبه‬ ‫تنازل‬ ‫اتفاق‬ ‫أو‬ ‫ترتيبات‬ ‫أي‬ ‫يوجد‬ ‫‪.‬‬
                      ‫كبار‬ ‫أحد‬ ‫أو‬ ‫كة‬
                      ‫•‬
                      <br><br>
                      ‫•‬
                      ‫رباح‬ ‫ا‬ ‫في‬ ‫حقوق‬ ‫أي‬ ‫عن‬ ‫كة‬
                      <br><br>
                      ‫•‬
                      ‫حد‬ ‫جوهرية‬ ‫مصلحة‬ ‫فيه‬ ‫توجد‬ ‫كانت‬ ‫أو‬ ‫وتوجد‬ ‫فيه‬ ‫طرفاً‬ ‫كة‬ ‫ال‬ ‫تكون‬ ‫عقد‬ ‫أي‬ ‫يوجد‬
                      ‫بأي‬ ‫قة‬ ‫ع‬ ‫ذي‬ ‫شخص‬ ‫ي‬ ‫أو‬ ‫للمالية‬ ‫التنفيذي‬ ‫الرئيس‬ ‫أو‬ ‫التنفيذي‬ ‫الرئيس‬ ‫أو‬ ‫دارة‬ ‫ا‬ ‫مجلس‬ ‫أعضاء‬
                      ‫‪.‬منه‬
                    </p>
                  </div>
                </div>
                <div class="right marginr50" style="width: 50%;" >
                  <div class="col8">
                    <h5 class="h5 colr_purple">
                         ‫دارة‬ ‫ا‬ ‫مجلس‬ ‫إقرارات‬                 
                    </h5>
                    <p class="content_para">
                      ‫‫إدارة‬ ‫مجلس‬ ‫‪:‬يقر‬
                      ‫يلي‬ ‫بما‬ ‫السعودية‬ ‫ت‬ ‫تصا‬ ‫ا‬ ‫كة‬
                      <br>
                      <br>
                      ‫‫•‬
                      ‫الصحيح‬ ‫بالشكل‬ ‫أعدت‬ ‫الحسابات‬ ‫ت‬ ‫سج‬ ‫‪.‬أن‬
                      <br><br>
                      ‫بفاعلية‬ ‫ونُفذ‬ ‫سليمة‬ ‫أسس‬ ‫على‬ ‫أعد‬ ‫الداخلية‬ ‫الرقابة‬ ‫نظام‬ ‫‪.‬أن‬
                      <br><br>
                      ‫‪.‬أنه‬
                      ‫ال‬ ‫قدرة‬ ‫بشأن‬ ‫يذكر‬ ‫شك‬ ‫أي‬ ‫المجلس‬ ‫لدى‬ ‫يوجد‬
                      ‫•‬
                      <br><br>
                      ‫نشاطها‬ ‫مواصلة‬ ‫على‬ ‫كة‬
                      <br><br>
                      ‫أنه‬
                      ‫ال‬ ‫قدرة‬ ‫بشأن‬ ‫يذكر‬ ‫شك‬ ‫أي‬ ‫المجلس‬ ‫لدى‬ ‫يوجد‬
                      ‫•‬
                      <br><br>
                      ‫نشاطها‬ ‫مواصلة‬ ‫على‬ ‫كة‬
                      ‫•‬
                      <br><br>
                      ‫للمعايير‬ ‫وفقاً‬ ‫م‬ ‫‪2019‬‬ ‫ديسمبر‬ ‫‪31‬‬ ‫في‬ ‫المنتهية‬ ‫للسنة‬ ‫الموحدة‬ ‫المالية‬ ‫القوائم‬ ‫إعداد‬ ‫تم‬
                      ‫خرى‬ ‫ا‬ ‫صدارات‬ ‫ا‬ ‫و‬ ‫والمعايير‬ ‫السعودية‬ ‫العربية‬ ‫المملكة‬ ‫في‬ ‫المعتمدة‬ ‫المالي‬ ‫للتقرير‬ ‫الدولية‬
                      ‫القانونيين‬ ‫للمحاسبين‬ ‫السعودية‬ ‫الهيئة‬ ‫من‬ ‫‪.‬المعتمدة‬
                      ‫•‬
                      <br><br>
                      ‫•‬
                      ‫المصدرة‬ ‫سهم‬ ‫ا‬ ‫من‬ ‫أكثر‬ ‫أو‬ ‫‪(%‬‬ ‫‪5‬‬ ‫)‬ ‫تملك‬ ‫اعتباري‬ ‫أو‬ ‫طبيعي‬ ‫شخص‬ ‫أي‬ ‫عن‬ ‫كة‬ ‫ال‬ ‫تُبلّغ‬ ‫لم‬
                      ‫‪2019‬م‬ ‫عام‬ ‫ل‬ ‫خ‬ ‫كة‬ ‫‪.‬لل‬
                      <br><br>
                      ‫أو‬ ‫اكتتاب‬ ‫حق‬ ‫مذكرات‬ ‫أو‬ ‫خيار‬ ‫حقوق‬ ‫أي‬ ‫أو‬ ‫أسهم‬ ‫إلى‬ ‫للتحويل‬ ‫قابلة‬ ‫دين‬ ‫أدوات‬ ‫أي‬ ‫يوجد‬
                      ‫‪2019‬م‬ ‫عام‬ ‫ل‬ ‫خ‬ ‫كة‬ ‫ال‬ ‫منحتها‬ ‫أو‬ ‫أصدرتها‬ ‫مشابهة‬ ‫‪.‬حقوق‬ ‫•‬
                      <br><br>
                      ‫قابلة‬ ‫دين‬ ‫أدوات‬ ‫ي‬ ‫م‬ ‫‪2019‬‬ ‫عام‬ ‫ل‬ ‫خ‬ ‫كة‬ ‫•‬
                      ‫أو‬ ‫استرداد‬ ‫أي‬ ‫يوجد‬
                      <br><br>
                      ‫سترداد‬ ‫‪.‬ل‬
                      ‫ال‬ ‫به‬ ‫قامت‬ ‫إلغاء‬ ‫أو‬ ‫اء‬
                      <br><br>
                      ‫ال‬ ‫إدارة‬ ‫مجلس‬ ‫أعضاء‬ ‫أحد‬ ‫بموجبه‬ ‫تنازل‬ ‫اتفاق‬ ‫أو‬ ‫ترتيبات‬ ‫أي‬ ‫يوجد‬
                      ‫تعويض‬ ‫أو‬ ‫راتب‬ ‫أي‬ ‫عن‬ ‫‪.‬التنفيذيين‬
                      <br><br>
                      ‫ال‬ ‫مساهمي‬ ‫أحد‬ ‫بموجبه‬ ‫تنازل‬ ‫اتفاق‬ ‫أو‬ ‫ترتيبات‬ ‫أي‬ ‫يوجد‬ ‫‪.‬‬
                      ‫كبار‬ ‫أحد‬ ‫أو‬ ‫كة‬
                      ‫•‬
                      <br><br>
                      ‫•‬
                      ‫رباح‬ ‫ا‬ ‫في‬ ‫حقوق‬ ‫أي‬ ‫عن‬ ‫كة‬
                      <br><br>
                      ‫•‬
                      ‫حد‬ ‫جوهرية‬ ‫مصلحة‬ ‫فيه‬ ‫توجد‬ ‫كانت‬ ‫أو‬ ‫وتوجد‬ ‫فيه‬ ‫طرفاً‬ ‫كة‬ ‫ال‬ ‫تكون‬ ‫عقد‬ ‫أي‬ ‫يوجد‬
                      ‫بأي‬ ‫قة‬ ‫ع‬ ‫ذي‬ ‫شخص‬ ‫ي‬ ‫أو‬ ‫للمالية‬ ‫التنفيذي‬ ‫الرئيس‬ ‫أو‬ ‫التنفيذي‬ ‫الرئيس‬ ‫أو‬ ‫دارة‬ ‫ا‬ ‫مجلس‬ ‫أعضاء‬
                      ‫‪.‬منه‬
                    </p>
                  </div>
                 
                  <div class="img-wrap margint100">
                  <img src="img/guy_tab1.jpg">
                  </div>
                </div>
               
               
              </div>
          </div>
        </div>
      </div>
    <!-- SECTION1 -->
   


    
    
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