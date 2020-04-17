<!doctype html>
<html class="no-js" lang="">

<?php require_once 'head.php'; ?>

<body class="page_inner">
  
  <style type="text/css">
    /*page_creation_bod_a*/
    .page_creation_bod_a .screentop_para{
      margin: 50px 50px 50px 0;
      overflow: hidden;
      display: inline-block;
      position: relative;
    }
    .page_creation_bod_a .tabular_data{
      width:calc( 100% - 100px );
      margin: 0 auto;
      clear: both;
    }
    .page_creation_bod_a .tabular_data .c_row{
     display: flex;
    }
    .page_creation_bod_a .tabular_data .c_row div{
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
    .page_creation_bod_a .tabular_data .c_row div:last-child{
      border-left: 1px solid #4f0f8c;
    }
    .page_creation_bod_a .tabular_data .c_row:last-child div{
      border-bottom: 1px solid #4f0f8c; 
    }
    .page_creation_bod_a .tabular_data .tabular_data_inner .c_row:hover div:first-child{
      background: #FF375E;
    }
    .page_creation_bod_a .tabular_data .tabular_data_inner .c_row div:first-child{
      text-align: center;
      justify-content: center;
    }
    .page_creation_bod_a .tabular_data .tabular_data_inner .c_row:hover div{
      background: #4f0f8c;
      color: #fff;
    }
    .page_creation_bod_a .tabular_data .c_row.second div  {
      padding: 10px;
    }
    .page_creation_bod_a .tabular_data .c_row.first {
      margin-bottom: 20px;
    }
    .page_creation_bod_a .tabular_data .c_row.first div{
      border:none;
      border-left: 1px solid #fff;
      color: #fff;
      padding: 20px;
      text-align: center;
      justify-content: center;
    }

    .page_creation_bod_a .tabular_data2{
      width:calc( 100% - 100px );
      margin: 0 auto;
      clear: both;
    }
    .page_creation_bod_a .tabular_data2 .c_row{
     display: flex;
    }

    .page_creation_bod_a .tabular_data2 .c_row.first.table_white div{
      color: #4f0f8c;
      border: 1px solid #4f0f8c;
      border-left: none;
      border-top: none;
    }
    .page_creation_bod_a .tabular_data2 .c_row.first.table_white div.last div.c_row{
      border-left: 0 !important;
    }
    .page_creation_bod_a .tabular_data2 .c_row.first.table_white div span{
      border-left: 1px solid #4f0f8c !important;
    }
    .page_creation_bod_a .tabular_data2 .c_row.first.table_white div span:last-child{
      border-left: none !important;
    }
    .page_creation_bod_a .tabular_data2 .c_row div{
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
    .page_creation_bod_a .tabular_data2 .c_row div:last-child{
      border-left: 1px solid #4f0f8c !important;
    }
    .page_creation_bod_a .tabular_data2 .c_row:last-child div{
      border-bottom: 1px solid #4f0f8c; 
    }
    .page_creation_bod_a .tabular_data2 .tabular_data_inner .c_row:hover div:first-child{
      background: #FF375E;
    }
    .page_creation_bod_a .tabular_data2 .tabular_data_inner .c_row div:first-child{
      text-align: center;
      justify-content: center;
    }
    .page_creation_bod_a .tabular_data2 .tabular_data_inner .c_row:hover div{
      background: #4f0f8c;
      color: #fff;
    }
    .page_creation_bod_a .tabular_data2 .c_row.second div  {
      padding: 10px;
    }
    .page_creation_bod_a .tabular_data2 .c_row.first {
      margin-bottom: 0;
    }
    .page_creation_bod_a .tabular_data2 .c_row.first div{
      border:none;
      border-left: 1px solid #fff;
      color: #fff;
      padding: 20px;
      text-align: center;
      justify-content: center;
    }
    .page_creation_bod_a .tabular_data2 .c_row.first div.last{
      padding: 0;
      flex-wrap: wrap;
      flex: 20%;
      align-items: initial;
    }
    .page_creation_bod_a .tabular_data2 .c_row.first div.last .f-row{
      display: flex;
      flex: initial;
      flex-wrap: wrap;
      flex: 0 0 100%;
      border: none;
      padding: 0;
    }
    .page_creation_bod_a .tabular_data2 .c_row.first div.last .f-row span{
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
    .page_creation_bod_a .tabular_data2 .c_row.first div.last .f-row span:last-child{
       border-left: none !important;
    }
    .page_creation_bod_a .img_wrap {
      position: relative;
      overflow: hidden;
    }
    .page_creation_bod_a .img_wrap .left{
      width: 40%;
      float: left;

    }
    .page_creation_bod_a .img_wrap .right{
      width: 35%;
      float: right;
    }
    .page_creation_bod_a .img_wrap img{
      width: 100%;
    }
    .page_creation_bod_a .cwrapper{
        margin-bottom:50px;
    }
    .page_creation_bod_a .bar-wrap{
      position: relative;
      height: 10px;
      width: 100%;
      margin-bottom: 50px;
    }
   
   .page_creation_bod_a .sp_wrap .content-wrapper {
      position: relative;
      /*margin: 50px 0;*/
    }
    .page_creation_bod_a .sp_wrap .content-wrapper.c-row-reverse .left{
      width: 50%;
      float: right;
    }
    .page_creation_bod_a .sp_wrap .content-wrapper.c-row-reverse .left .box_center_content{
      float: right;
      width: 90%;
    }
    .page_creation_bod_a .sp_wrap .content-wrapper.c-row-reverse .right{
    }
    .page_creation_bod_a .sp_wrap .content-wrapper:after {
      content: '';
      display: table;
      clear: both;
    }
    .page_creation_bod_a .sp_wrap .content-wrapper .left{
      width: 50%;
      float: left;
      position: relative;
      min-height: 250px;
    }
    .page_creation_bod_a .sp_wrap .content-wrapper .left .box_center_content{
        /*margin:0 auto;*/
        width: 80%;
        min-height: 400px;
        /*float: left;*/
    }

    .page_creation_bod_a .sp_wrap .content-wrapper .left .box_center_content p{
      font-size: 28px;
      line-height: 38px;
      font-family: "stc_light";
    }
    .page_creation_bod_a .sp_wrap .content-wrapper .img-wrap{
      height: 400px;
    }
    .page_creation_bod_a .sp_wrap .content-wrapper .img-wrap img{
      height: 100%;
      width: 100%;
      object-fit: cover;
      object-position: top right;
    }
    .page_creation_bod_a .sp_wrap .content-wrapper .right{
      width: 40%;
      float: right;
      position: relative;
      min-height: 250px;
    }
   .page_creation_bod_a .sp_wrap .sp_row{
        display: flex;
        margin:50px 0;
   }
   .page_creation_bod_a .sp_wrap .sp_row .left,
   .page_creation_bod_a .sp_wrap .sp_row .right{
    flex: initial;
   }
  .page_creation_bod_a .sp2_row .left,
  .page_creation_bod_a .sp2_row .right{
    height: 400px;
  }
  .page_creation_bod_a .sp2_row .right
  {
    height: 400px;
    padding: 40px;
    width: 45%;
  }
  .page_creation_bod_a .sp_wrap .sp_row .right .content_para{
    margin-bottom: 0;
  }
  .page_creation_bod_a .sp_wrap .bar-wrap {
    position: absolute;
    height: 60px;
    width: 80%;
    top: 50%;
    right: 0;
    transform: translate(0,-100%);
  }
 /*page_creation_bod_a*/

 
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
    <!-- SECTION1 -->
      <div class="page_creation_bod_a">
         <div class="cwrapper">
          <div class="screentop_para">
            <h1>
              <span class="h1 colr_white bk_purple" style="padding: 5px 15px 5px 150px;"> ‫
              ‫في‬ ‫عضاء‬ ‫ا‬ ‫مشاركة‬
              </span> 
            </h1>
            <h1>
              <span class="h1 colr_purple"> 
               ‫‫واللجان‬ ‫المجلس‬ ‫اجتماعات‬
              </span>
          </h1>
          </div>
          <div class="img_wrap">
            <div class="right marginr50" style="width: 40%;">
             <p class="content_para">
              ‫لتلك‬ ‫عضاء‬ ‫ا‬ ‫وحضور‬ ‫السابعة‪،‬‬ ‫للدورة‬ ‫واللجان‬ ‫دارة‬ ‫ا‬ ‫مجلس‬ ‫اجتماعات‬ ‫عدد‬ ‫التالية‬ ‫الجداول‬ ‫تُبين‬ ‫ً‪:‬‬ ‫أو‬
              ‫التالي‬ ‫النحو‬ ‫على‬ ‫‪2019‬م‪،‬‬ ‫عام‬ ‫ل‬ ‫خ‬ ‫جتماعات‬ ‫ا‬ ‫‪:‬‬
             </p>
             <br><br>
             <b class="content_para">‫دارة‬ ‫ا‬ ‫مجلس‬ ‫اجتماعات‬</b>
              <p class="content_para">
              ‫‫اجتماعات‬ ‫عدد‬ ‫التالي‬ ‫الجدول‬ ‫ويبين‬ ‫اجتماعات‪،‬‬ ‫خمسة‬ ‫دارة‬ ‫ا‬ ‫مجلس‬ ‫عقد‬
             </p>
            </div>
          </div>
          <div class="tabular_data2 margint50">
            <div class="c_row first bk_purple">
             <div>‫م‬</div>
             <div>‫‫‫سم‬ ‫ا‬</div>
             <div>‫المنصب‬</div>
             <div class="c_row last">
               <div class="c_row f-row" style="padding:10px 20px;">‫‫مقرها‬</div>
               <div class="c_row f-row">
                 <span>‫‪‫‪20‬‬ ‫مارس‬</span>
                 <span>‫‪‫‪21‬‬ ‫مارس‬</span>
                 <span>‫‪‫‪15‬‬ ‫مايو‬</span>
                 <span>‫‪‫‪18‬‬ ‫سبتمبر‬</span>
                 <span>‫‪‫‪18‬‬ ‫ديسمبر‬</span>
               </div>
             </div>
             <div>‫المجموع‬</div>
            </div>
            <div class="c_row first table_white">
             <div>‫
              1
             </div>
             <div>‫</div>
             <div>‫</div>
             <div class="c_row last">
               <div class="c_row f-row">
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
               </div>
             </div>
             <div>‫
             </div>
            </div>
            <div class="c_row first table_white">
             <div>‫
              2
             </div>
             <div>‫</div>
             <div>‫</div>
             <div class="c_row last">
               <div class="c_row f-row">
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
               </div>
             </div>
             <div>‫</div>
            </div>
            <div class="c_row first table_white">
             <div>‫
              3
             </div>
             <div>‫</div>
             <div>‫</div>
             <div class="c_row last">
               <div class="c_row f-row">
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
               </div>
             </div>
             <div>‫</div>
            </div>
            <div class="c_row first table_white">
             <div>‫
              4
             </div>
             <div>‫</div>
             <div>‫</div>
             <div class="c_row last">
               <div class="c_row f-row">
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
               </div>
             </div>
             <div>‫</div>
            </div>
            <div class="c_row first table_white">
             <div>‫
              5
             </div>
             <div>‫</div>
             <div>‫</div>
             <div class="c_row last">
               <div class="c_row f-row">
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
               </div>
             </div>
             <div>‫</div>
            </div>
            <div class="c_row first table_white">
             <div>‫
              6
             </div>
             <div>‫</div>
             <div>‫</div>
             <div class="c_row last">
               <div class="c_row f-row">
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
               </div>
             </div>
             <div>‫</div>
            </div>
            <div class="c_row first table_white">
             <div>‫
              7
             </div>
             <div>‫</div>
             <div>‫</div>
             <div class="c_row last">
               <div class="c_row f-row">
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
               </div>
             </div>
             <div>‫</div>
            </div>
            <div class="c_row first table_white">
             <div>‫
              8
             </div>
             <div>‫</div>
             <div>‫</div>
             <div class="c_row last">
               <div class="c_row f-row">
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
               </div>
             </div>
             <div>‫</div>
            </div>
            <div class="c_row first table_white">
             <div>‫
              9
             </div>
             <div>‫</div>
             <div>‫</div>
             <div class="c_row last">
               <div class="c_row f-row">
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
               </div>
             </div>
             <div>‫</div>
            </div>
          </div>
          <div class="sp_wrap margint50">
            <div class="content-wrapper ">
              <div class="left">
               <div class="img-wrap">
                 <img src="img/planning.png">
               </div>
              </div>
              <div class="right marginr50">
              <h5 class="h5 colr_purple">
              ‫‫دارة‬ ‫ا‬ ‫مجلس‬ ‫لجان‬ ‫اجتماعات‬       
              </h5>
               <p class="content_para">
                ‫‫حوكمة‬ ‫ئحة‬ ‫ل‬ ‫وفقاً‬ ‫‪stc،‬‬ ‫لتأدية‬ ‫زمة‬ ‫ال‬ ‫اللجان‬ ‫المجلس‬ ‫يشكل‬ ‫قة‪،‬‬ ‫الع‬ ‫ذات‬ ‫الجهات‬ ‫من‬ ‫الصادرة‬ ‫واللوائح‬ ‫نظمة‬ ‫وا‬
                ‫قبل‬ ‫من‬ ‫عملها‪،‬‬ ‫وإجراءات‬ ‫مسؤولياتها‪،‬‬ ‫تحديد‬ ‫اللجان‬ ‫تشكيل‬ ‫عند‬ ‫ويراعى‬ ‫المجلس‪،‬‬ ‫وفاعلية‬ ‫كفاءة‬ ‫يحقق‬ ‫بما‬ ‫عمله‬
                ‫نحو‬ ‫على‬ ‫بها‬ ‫قة‬ ‫الع‬ ‫ذوي‬ ‫وتعريف‬ ‫لذلك‪،‬‬ ‫زمة‬ ‫ال‬ ‫القرارات‬ ‫وإصدار‬ ‫جراءات‪،‬‬ ‫وا‬ ‫المسؤوليات‬ ‫هذه‬ ‫وتوثيق‬ ‫المجلس‬
                ‫التالي‬ ‫النحو‬ ‫على‬ ‫)السابعة(‬ ‫الحالية‬ ‫للدورة‬ ‫المجلس‬ ‫لجان‬ ‫شُكلت‬ ‫وقد‬ ‫‪:‬مناسب‪.‬‬
               </p>
               <br><br>
               <h5 class="h5 colr_purple">
                ‫‫التنفيذية‬ ‫‪:‬اللجنة‬          
               </h5>
               <p class="content_para">
                ‫‫‫كة‪،‬‬ ‫لل‬ ‫التنفيذي‬ ‫الرئيس‬ ‫أحدهما‬ ‫خارجيين‬ ‫وعضوين‬ ‫دارة‪،‬‬ ‫ا‬ ‫مجلس‬ ‫أعضاء‬ ‫من‬ ‫أعضاء‬ ‫أربعة‬ ‫من‬ ‫اللجنة‬ ‫تتكون‬
                ‫في‬ ‫كة‬ ‫لل‬ ‫والدولية‬ ‫المحلية‬ ‫عمال‬ ‫وا‬ ‫التقديرية‬ ‫السنوية‬ ‫والموازنات‬ ‫ستراتيجيات‬ ‫ا‬ ‫بمراجعة‬ ‫اللجنة‬ ‫وتختص‬
                ‫قبل‬ ‫من‬ ‫والمحددة‬ ‫بها‬ ‫المنوطة‬ ‫حيات‬ ‫الص‬ ‫بحسب‬ ‫عليها‬ ‫والموافقة‬ ‫ساسية‪،‬‬ ‫ا‬ ‫وغير‬ ‫ساسية‬ ‫ا‬ ‫العمل‬ ‫ت‬ ‫مجا‬
                ‫التالي‬ ‫الجدول‬ ‫في‬ ‫موضح‬ ‫هو‬ ‫كما‬ ‫‪2019‬م‪،‬‬ ‫عام‬ ‫ل‬ ‫خ‬ ‫اجتماعات‬ ‫ستة‬ ‫اللجنة‬ ‫عقدت‬ ‫وقد‬ ‫دارة‪،‬‬ ‫ا‬ ‫‪:‬مجلس‬
               </p>
              </div>
            </div>
          </div>
          <div class="tabular_data2 margint50">
            <div class="c_row first bk_purple">
             <div>‫م‬</div>
             <div>‫‫‫سم‬ ‫ا‬</div>
             <div>‫المنصب‬</div>
             <div class="c_row last">
               <div class="c_row f-row" style="padding:10px 20px;">‫‫مقرها‬</div>
               <div class="c_row f-row">
                 <span>‫‪‫‪20‬‬ ‫مارس‬</span>
                 <span>‫‪‫‪21‬‬ ‫مارس‬</span>
                 <span>‫‪‫‪15‬‬ ‫مايو‬</span>
                 <span>‫‪‫‪18‬‬ ‫سبتمبر‬</span>
                 <span>‫‪‫‪18‬‬ ‫ديسمبر‬</span>
               </div>
             </div>
             <div>‫المجموع‬</div>
            </div>
            <div class="c_row first table_white">
             <div>‫
              1
             </div>
             <div>‫</div>
             <div>‫</div>
             <div class="c_row last">
               <div class="c_row f-row">
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
               </div>
             </div>
             <div>‫
             </div>
            </div>
            <div class="c_row first table_white">
             <div>‫
              2
             </div>
             <div>‫</div>
             <div>‫</div>
             <div class="c_row last">
               <div class="c_row f-row">
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
               </div>
             </div>
             <div>‫</div>
            </div>
            <div class="c_row first table_white">
             <div>‫
              3
             </div>
             <div>‫</div>
             <div>‫</div>
             <div class="c_row last">
               <div class="c_row f-row">
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
               </div>
             </div>
             <div>‫</div>
            </div>
            <div class="c_row first table_white">
             <div>‫
              4
             </div>
             <div>‫</div>
             <div>‫</div>
             <div class="c_row last">
               <div class="c_row f-row">
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
               </div>
             </div>
             <div>‫</div>
            </div>
            <div class="c_row first table_white">
             <div>‫
              5
             </div>
             <div>‫</div>
             <div>‫</div>
             <div class="c_row last">
               <div class="c_row f-row">
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
               </div>
             </div>
             <div>‫</div>
            </div>
            <div class="c_row first table_white">
             <div>‫
              6
             </div>
             <div>‫</div>
             <div>‫</div>
             <div class="c_row last">
               <div class="c_row f-row">
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
               </div>
             </div>
             <div>‫</div>
            </div>
            <div class="c_row first table_white">
             <div>‫
              7
             </div>
             <div>‫</div>
             <div>‫</div>
             <div class="c_row last">
               <div class="c_row f-row">
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
               </div>
             </div>
             <div>‫</div>
            </div>
            <div class="c_row first table_white">
             <div>‫
              8
             </div>
             <div>‫</div>
             <div>‫</div>
             <div class="c_row last">
               <div class="c_row f-row">
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
               </div>
             </div>
             <div>‫</div>
            </div>
            <div class="c_row first table_white">
             <div>‫
              9
             </div>
             <div>‫</div>
             <div>‫</div>
             <div class="c_row last">
               <div class="c_row f-row">
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
               </div>
             </div>
             <div>‫</div>
            </div>
          </div>
          <div class="sp_wrap">
            <div class="content-wrapper inner-wrapper c-row-reverse sp_row">
              <div class="right marginr50" style="position: relative; width: 50%;">
                <h5 class="h5 colr_purple">
                 ‫‫والمكافآت‬ ‫الترشيحات‬ ‫‪:‬لجنة‬         
                 </h5>
                 <p class="content_para">
                  ‫‫‫عليها‬ ‫والمصادقة‬ ‫ئمة‬ ‫الم‬ ‫التشغيل‬ ‫آلية‬ ‫تصميم‬ ‫عملية‬ ‫بمراجعة‬ ‫اللجنة‬ ‫وتختص‬ ‫خارجيين‬ ‫وعضوين‬ ‫دارة‪،‬‬ ‫ا‬ ‫مجلس‬ ‫أعضاء‬ ‫من‬ ‫عضوين‬ ‫من‬ ‫اللجنة‬ ‫تتكون‬
                  ‫والموظفين‬ ‫دارة‬ ‫ل‬ ‫زمة‬ ‫ال‬ ‫الحوافز‬ ‫يؤمّن‬ ‫بما‬ ‫ً‬ ‫عاد‬ ‫تطبيقاً‬ ‫وتطبيقها‬ ‫السوق‪،‬‬ ‫وتطورات‬ ‫معايير‬ ‫مع‬ ‫يتناسب‬ ‫بما‬ ‫الرواتب‬ ‫هيكل‬ ‫ومراجعة‬ ‫ووضع‬ ‫وإقرارها‪،‬‬
                  ‫من‬ ‫سنوي‬ ‫بشكل‬ ‫والتأكد‬ ‫إجراؤها‪،‬‬ ‫يمكن‬ ‫التي‬ ‫التغييرات‬ ‫بشأن‬ ‫دارة‬ ‫ا‬ ‫لمجلس‬ ‫التوصيات‬ ‫ورفع‬ ‫دارة‬ ‫ا‬ ‫مجلس‬ ‫هيكل‬ ‫ومراجعة‬ ‫المطلوب‪،‬‬ ‫بالدور‬ ‫للقيام‬
                  ‫سياسة‬ ‫مراجعة‬ ‫وكذلك‬ ‫أخرى‪،‬‬ ‫كة‬ ‫إدارة‬ ‫مجلس‬ ‫عضوية‬ ‫يشغل‬ ‫العضو‬ ‫كان‬ ‫إذا‬ ‫خصوصاً‬ ‫مصالح‬ ‫تعارض‬ ‫أي‬ ‫وجود‬ ‫وعدم‬ ‫المستقلين‬ ‫عضاء‬ ‫ا‬ ‫لية‬ ‫استق‬
                  ‫أعمال‬ ‫أن‬ ‫من‬ ‫والتأكد‬ ‫دارة‪،‬‬ ‫ا‬ ‫مجلس‬ ‫إلى‬ ‫حالتها‬ ‫تمهيداً‬ ‫عليها‬ ‫والمصادقة‬ ‫دارة‬ ‫ا‬ ‫لمجلس‬ ‫والتعويضات‬ ‫المميزات‬ ‫‪stc‬‬ ‫الممارسات‬ ‫أفضل‬ ‫مع‬
                  ‫تتما‬
                  ‫التالي‬ ‫الجدول‬ ‫في‬ ‫موضح‬ ‫هو‬ ‫كما‬ ‫‪2019‬م‪،‬‬ ‫عام‬ ‫ل‬ ‫خ‬ ‫اجتماعات‬ ‫أربعة‬ ‫اللجنة‬ ‫عقدت‬ ‫وقد‬ ‫الحوكمة‪،‬‬ ‫مجال‬ ‫‪:‬في‬
                </p>
              </div>
              <div class="left">
                <div class="bar-wrap" style="left: 0;right: auto;height: 25px;">
                    <div class="element_bars_hr" style="width: 80%;position: absolute;left: 0;height: 100%;">
                        <div class="leftbar bk_pink" style="width: 5%"></div>
                        <div class="rightbar  bk_purple" style="width: 95%"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="tabular_data2 margint50">
            <div class="c_row first bk_purple">
             <div>‫م‬</div>
             <div>‫‫‫سم‬ ‫ا‬</div>
             <div>‫المنصب‬</div>
             <div class="c_row last">
               <div class="c_row f-row" style="padding:10px 20px;">‫‫مقرها‬</div>
               <div class="c_row f-row">
                 <span>‫‪‫‪20‬‬ ‫مارس‬</span>
                 <span>‫‪‫‪21‬‬ ‫مارس‬</span>
                 <span>‫‪‫‪15‬‬ ‫مايو‬</span>
                 <span>‫‪‫‪18‬‬ ‫سبتمبر‬</span>
                 <span>‫‪‫‪18‬‬ ‫ديسمبر‬</span>
               </div>
             </div>
             <div>‫المجموع‬</div>
            </div>
            <div class="c_row first table_white">
             <div>‫
              1
             </div>
             <div>‫</div>
             <div>‫</div>
             <div class="c_row last">
               <div class="c_row f-row">
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
               </div>
             </div>
             <div>‫
             </div>
            </div>
            <div class="c_row first table_white">
             <div>‫
              2
             </div>
             <div>‫</div>
             <div>‫</div>
             <div class="c_row last">
               <div class="c_row f-row">
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
               </div>
             </div>
             <div>‫</div>
            </div>
            <div class="c_row first table_white">
             <div>‫
              3
             </div>
             <div>‫</div>
             <div>‫</div>
             <div class="c_row last">
               <div class="c_row f-row">
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
               </div>
             </div>
             <div>‫</div>
            </div>
            <div class="c_row first table_white">
             <div>‫
              4
             </div>
             <div>‫</div>
             <div>‫</div>
             <div class="c_row last">
               <div class="c_row f-row">
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
               </div>
             </div>
             <div>‫</div>
            </div>
            <div class="c_row first table_white">
             <div>‫
              5
             </div>
             <div>‫</div>
             <div>‫</div>
             <div class="c_row last">
               <div class="c_row f-row">
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
               </div>
             </div>
             <div>‫</div>
            </div>
            <div class="c_row first table_white">
             <div>‫
              6
             </div>
             <div>‫</div>
             <div>‫</div>
             <div class="c_row last">
               <div class="c_row f-row">
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
               </div>
             </div>
             <div>‫</div>
            </div>
            <div class="c_row first table_white">
             <div>‫
              7
             </div>
             <div>‫</div>
             <div>‫</div>
             <div class="c_row last">
               <div class="c_row f-row">
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
               </div>
             </div>
             <div>‫</div>
            </div>
            <div class="c_row first table_white">
             <div>‫
              8
             </div>
             <div>‫</div>
             <div>‫</div>
             <div class="c_row last">
               <div class="c_row f-row">
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
               </div>
             </div>
             <div>‫</div>
            </div>
            <div class="c_row first table_white">
             <div>‫
              9
             </div>
             <div>‫</div>
             <div>‫</div>
             <div class="c_row last">
               <div class="c_row f-row">
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
               </div>
             </div>
             <div>‫</div>
            </div>
          </div>
          <div class="sp_wrap">
            <div class="content-wrapper inner-wrapper c-row-reverse sp_row">

              <div class="right marginr50 noheight" style="position: relative; width: 50%;">
                <h5 class="h5 colr_purple">
                ‫ستثمار‬ ‫ا‬ ‫‪:‬لجنة‬      
                 </h5>
                 <p class="content_para">
                 ‫استراتيجيات‬ ‫وفق‬ ‫ستثمارات‬ ‫ا‬ ‫سياسة‬ ‫بمراجعة‬ ‫اللجنة‬ ‫وتختص‬ ‫خارجي‬ ‫وعضو‬ ‫دارة‪،‬‬ ‫ا‬ ‫مجلس‬ ‫أعضاء‬ ‫من‬ ‫أعضاء‬ ‫أربعة‬ ‫من‬ ‫اللجنة‬ ‫تتكون‬ ‫‪stc،‬‬ ‫تراجع‬ ‫كما‬ ‫
                </p>
              </div>
            </div>
          </div>
          <div class="tabular_data2 margint50">
            <div class="c_row first bk_purple">
             <div>‫م‬</div>
             <div>‫‫‫سم‬ ‫ا‬</div>
             <div>‫المنصب‬</div>
             <div class="c_row last">
               <div class="c_row f-row" style="padding:10px 20px;">‫الفعلية‬ ‫الملكية‬ ‫نسبة‬</div>
               <div class="c_row f-row">
                 <span>‫‪‫‪20‬‬ ‫مارس‬</span>
                 <span>‫‪‫‪21‬‬ ‫مارس‬</span>
                 <span>‫‪‫‪15‬‬ ‫مايو‬</span>
                 <span>‫‪‫‪18‬‬ ‫سبتمبر‬</span>
                 <span>‫‪‫‪18‬‬ ‫ديسمبر‬</span>
               </div>
             </div>
             <div>‫المجموع‬</div>
            </div>
            <div class="c_row first table_white">
             <div>‫
              1
             </div>
             <div>‫</div>
             <div>‫</div>
             <div class="c_row last">
               <div class="c_row f-row">
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
               </div>
             </div>
             <div>‫
             </div>
            </div>
            <div class="c_row first table_white">
             <div>‫
              2
             </div>
             <div>‫</div>
             <div>‫</div>
             <div class="c_row last">
               <div class="c_row f-row">
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
               </div>
             </div>
             <div>‫</div>
            </div>
            <div class="c_row first table_white">
             <div>‫
              3
             </div>
             <div>‫</div>
             <div>‫</div>
             <div class="c_row last">
               <div class="c_row f-row">
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
               </div>
             </div>
             <div>‫</div>
            </div>
            <div class="c_row first table_white">
             <div>‫
              4
             </div>
             <div>‫</div>
             <div>‫</div>
             <div class="c_row last">
               <div class="c_row f-row">
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
               </div>
             </div>
             <div>‫</div>
            </div>
            <div class="c_row first table_white">
             <div>‫
              5
             </div>
             <div>‫</div>
             <div>‫</div>
             <div class="c_row last">
               <div class="c_row f-row">
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
               </div>
             </div>
             <div>‫</div>
            </div>
            <div class="c_row first table_white">
             <div>‫
              6
             </div>
             <div>‫</div>
             <div>‫</div>
             <div class="c_row last">
               <div class="c_row f-row">
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
               </div>
             </div>
             <div>‫</div>
            </div>
            <div class="c_row first table_white">
             <div>‫
              7
             </div>
             <div>‫</div>
             <div>‫</div>
             <div class="c_row last">
               <div class="c_row f-row">
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
               </div>
             </div>
             <div>‫</div>
            </div>
            <div class="c_row first table_white">
             <div>‫
              8
             </div>
             <div>‫</div>
             <div>‫</div>
             <div class="c_row last">
               <div class="c_row f-row">
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
               </div>
             </div>
             <div>‫</div>
            </div>
            <div class="c_row first table_white">
             <div>‫
              9
             </div>
             <div>‫</div>
             <div>‫</div>
             <div class="c_row last">
               <div class="c_row f-row">
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
                 <span>‬</span>
               </div>
             </div>
             <div>‫</div>
            </div>
          </div>
          <div class="sp_wrap">
            <div class="content-wrapper inner-wrapper c-row-reverse sp_row">
              <div class="left" style="position: relative;">
                <div class="bar-wrap" style="top: 0;transform: translate(0,0);height: 20px;width: 100%">
                   <div class="element_bars_hr" style="width: 100%;position: absolute;right: 0;height: 100%;">
                        <div class="leftbar bk_purple" style="width: 95%"></div>
                        <div class="rightbar bk_pink" style="width: 5%"></div>
                  </div>
                </div>
                <div class="img-wrap margint100 marginr50">
                  <img src="img/growth.png">
                </div>
                <div class="marginr50 margint100">
                  <h5 class="h5 colr_purple">
                  ‫الحا‬ ‫المجلس‬ ‫أعضاء‬ ‫وأسماء‬ ‫‪2019‬م‬ ‫المالية‬ ‫السنة‬ ‫ل‬ ‫خ‬ ‫المنعقدة‬ ‫للمساهمين‬ ‫العامة‬ ‫الجمعيات‬ ‫بتواريخ‬ ‫بيان‬
                </h5>
                <div class="tabular_data nomargin col10" style="width: 100%;">
                  <div class="c_row first bk_purple nomargin">
                    <div>‫م‬</div>
                    <div>‫سم‬ ‫ا‬</div>
                    <div>‫الحضور‬</div>
                  </div>
                  <div class="tabular_data_inner">
                    <div class="c_row">
                      <div>1</div>
                      <div></div>
                      <div></div>
                    </div>
                    <div class="c_row">
                      <div>2</div>
                      <div></div>
                      <div></div>
                    </div>
                    <div class="c_row">
                      <div>3</div>
                      <div></div>
                      <div></div>
                    </div>
                    <div class="c_row">
                      <div>4</div>
                      <div></div>
                      <div></div>
                    </div>
                  </div>
                </div>
                <p class="content_para margint50">
                   ‫‫مسبقاً‬ ‫رتباطهما‬ ‫تشـســنـــــــــــات‪،‬‬ ‫روي‬ ‫ستاذ‪/‬‬ ‫وا‬ ‫كابـور‪،‬‬ ‫سانجـــاي‬ ‫ستاذ‪/‬‬ ‫ا‬ ‫حضور‬ ‫عدم‬ ‫‪.‬يعزى‬
                   <br>
                   <br>
                    ‫محا‬ ‫على‬ ‫ع‬ ‫ط‬ ‫ا‬ ‫يمكن‬ ‫‪stc‬‬ ‫لكتروني‬ ‫ا‬ ‫‪www.stc.com.sa‬‬
                    ‫موقع‬ ‫في‬ ‫جتماعات‬ ‫ا‬
                </p>

                </div>
              </div>
              <div class="right marginr50">
                <h5 class="h5 colr_purple">
                  ‫الحا‬ ‫المجلس‬ ‫أعضاء‬ ‫وأسماء‬ ‫‪2019‬م‬ ‫المالية‬ ‫السنة‬ ‫ل‬ ‫خ‬ ‫المنعقدة‬ ‫للمساهمين‬ ‫العامة‬ ‫الجمعيات‬ ‫بتواريخ‬ ‫بيان‬
                  ‫الجمعيات‬ ‫‪:‬لهذه‬               
                </h5>
                <p class="content_para">
                ‫‫‪24/4/2019‬م‬ ‫بتاريخ‬ ‫العادية‬ ‫غير‬ ‫العامة‬ ‫الجمعية‬ ‫ً‪:‬‬ ‫‪:‬أو‬
                <br><br>
                ‫‫ن‬ ‫وجرى‬ ‫م(‪،‬‬ ‫‪24/4/2019‬‬ ‫)الموافق‬ ‫هـ‬ ‫‪19/8/1440‬‬ ‫بتاريخ‬ ‫بالرياض‪،‬‬ ‫الرئيس‬
                ‫التالي‬ ‫النحو‬ ‫على‬ ‫الجمعية‬ ‫أعمال‬ ‫جدول‬ ‫على‬ ‫التصويت‬ ‫نتائج‬ ‫وكانت‬ ‫‪25/4/2019‬م‪،‬‬ ‫بتاريخ‬ ‫التالي‬ ‫اليوم‬ ‫في‬ ‫تداول‬ ‫موقع‬ ‫‪:‬في‬
                <br><br>
                ‫‫م‬ ‫‪31/12/2018‬‬ ‫في‬ ‫المنتهية‬ ‫المالية‬ ‫السنة‬ ‫عن‬ ‫دارة‬ ‫ا‬ ‫مجلس‬ ‫تقرير‬ ‫على‬ ‫الموافقة‬ ‫‪.‬‬
                <br><br>
                ‫حسابات‬ ‫مراجع‬ ‫تقرير‬ ‫على‬ ‫الموافقة‬ ‫‪stc‬‬ ‫م‬ ‫‪31/12/2018‬‬ ‫في‬ ‫المنتهية‬ ‫المالية‬ ‫للسنة‬ ‫‪.‬‬
                <br><br>
                ‫لل‬ ‫الموحدة‬ ‫المالية‬ ‫القوائم‬ ‫على‬ ‫الموافقة‬ ‫‪.‬‬
                ‫‪3.
                ‫م‬ ‫‪31/12/2018‬‬ ‫في‬ ‫المنتهية‬ ‫المالية‬ ‫للسنة‬ ‫كة‬
                <br><br>
                ‫‫و‬ ‫ويونغ‬ ‫ارنست‬ ‫مكتب‬ ‫تعيين‬ ‫على‬ ‫الموافقة‬
                ‫لل‬ ‫الخارجي‬ ‫الحسابات‬ ‫مراجع‬ ‫(‬ ‫قانونيون‬ ‫محاسبون‬ ‫)‬ ‫كاهم‬
                ‫وال‬ ‫الزكاة‬ ‫خدمات‬ ‫لتقديم‬ ‫وذلك‬ ‫المراجعة‪،‬‬ ‫لجنة‬ ‫توصية‬ ‫على‬ ‫بناءً‬ ‫المرشحين‬
                ‫‪4.‬‬
                ‫بين‬ ‫من‬ ‫كة‬
                ‫الثاني‬ ‫للربع‬ ‫المالية‬ ‫القوائم‬ ‫وتدقيق‬ ‫ومراجعة‬ ‫ولفحص‬ ‫يبة‬
                ‫ول‬ ‫ا‬ ‫الربع‬ ‫و‬ ‫‪2020‬م‬ ‫المالي‬ ‫العام‬ ‫من‬ ‫والسنوي‬ ‫والرابع‬ ‫والثالث‬ ‫والثاني‬ ‫ول‬ ‫ا‬ ‫للربع‬ ‫و‬ ‫‪2019‬م‪،‬‬ ‫المالي‬ ‫العام‬ ‫من‬ ‫والسنوي‬ ‫والرابع‬ ‫والثالث‬
                ‫أتعابه‬ ‫وتحديد‬ ‫‪2021‬م‬ ‫‪.‬لعام‬
                <br><br>
                ‫‫لل‬ ‫رباح‬ ‫ا‬ ‫توزيع‬ ‫سياسة‬ ‫على‬ ‫الموافقة‬ ‫‪.‬‬
                ‫‪5.‬‬
                ‫م‬ ‫‪2018‬‬ ‫عام‬ ‫من‬ ‫الرابع‬ ‫الربع‬ ‫من‬ ‫بداية‬ ‫القادمة‬ ‫ث‬ ‫الث‬ ‫السنوات‬ ‫لفترة‬ ‫كة‬
                <br><br>
                ‫‫سعودي‬ ‫ريال‬ ‫مليون‬ ‫‪4.000‬‬ ‫مقداره‬ ‫بمبلغ‬ ‫م‬ ‫‪2018‬‬ ‫عام‬ ‫عن‬ ‫واحدة‬ ‫لمرة‬ ‫إضافية‬ ‫بتوزيعات‬ ‫دارة‬ ‫ا‬ ‫مجلس‬ ‫توصية‬ ‫على‬ ‫لموافقة‬
                ‫وراق‬ ‫ا‬ ‫إيداع‬ ‫مركز‬ ‫لدى‬ ‫المسجلين‬ ‫سهم‬ ‫ل‬ ‫المالكين‬ ‫للمساهمين‬ ‫رباح‬ ‫ا‬ ‫توزيعات‬ ‫أحقية‬ ‫وستكون‬ ‫سهم‪،‬‬ ‫كل‬ ‫عن‬ ‫سعودي‬ ‫ريال‬ ‫‪2‬‬ ‫بواقع‬
                ‫لل‬ ‫العامة‬ ‫الجمعية‬ ‫انعقاد‬ ‫يوم‬ ‫يلي‬ ‫تداول‬ ‫يوم‬ ‫ثاني‬ ‫بنهاية‬ ‫المالية‬
                ‫‪2,000‬‬ ‫تبلغ‬ ‫والتي‬ ‫للتوزيعات‬ ‫المستحقة‬ ‫سهم‬ ‫ل‬ ‫التوزيع‬ ‫يتم‬ ‫أن‬ ‫وتقرر‬ ‫كة‪،‬‬
                ‫مسبقا‬ ‫عنه‬ ‫ن‬ ‫ع‬ ‫ا‬ ‫تم‬ ‫ما‬ ‫حسب‬ ‫وذلك‬ ‫‪16/5/2019‬م‬ ‫الموافق‬ ‫‪11/9/1440‬هـ‬ ‫تاريخ‬ ‫في‬ ‫سهم‬ ‫‪.‬مليون‬
                <br><br>
                ‫المادة‬ ‫باستثناء‬ ‫المالية‬ ‫السوق‬ ‫هيئة‬ ‫من‬ ‫الصادرة‬ ‫كات‬ ‫ال‬ ‫حوكمة‬ ‫ئحة‬ ‫أحكام‬ ‫جميع‬ ‫تطبيق‬ ‫تم‬ ‫وقد‬
                ‫حين‬ ‫في‬ ‫خمسة‪،‬‬ ‫عن‬ ‫يزيد‬ ‫و‬ ‫ثة‬ ‫ث‬ ‫عن‬ ‫اللجان‬ ‫أعضاء‬ ‫عدد‬ ‫يقل‬ ‫أ‬ ‫على‬ ‫تنص‬ ‫التي‬ ‫رابعاً(‪،‬‬ ‫)الفقرة‬ ‫الخمسون‬
                ‫الرئيس‬ ‫أحدهم‬ ‫خارجيين‪،‬‬ ‫وعضوين‬ ‫دارة‪،‬‬ ‫ا‬ ‫مجلس‬ ‫أعضاء‬ ‫من‬ ‫أعضاء‬ ‫أربعة‬ ‫من‬ ‫التنفيذية‬ ‫اللجنة‬ ‫تتكون‬
                <br><br>
                ‫‫لل‬ ‫ساس‬ ‫ا‬ ‫النظام‬ ‫من‬ ‫)ب(‬ ‫الفقرة‬ ‫(‪،‬‬ ‫‪16‬‬ ‫)‬ ‫رقم‬ ‫المادة‬ ‫تعديل‬ ‫على‬ ‫الموافقة‬
                ‫لل‬
                ‫‪7.‬‬
                ‫“يجوز‬ ‫لتكون‪:‬‬ ‫والصكوك‬ ‫بالسندات‬ ‫المتعلقة‬ ‫كة‪،‬‬
                ‫الدين‬ ‫أدوات‬ ‫أنواع‬ ‫من‬ ‫نوع‬ ‫أي‬ ‫إصدار‬ ‫قة‪،‬‬ ‫الع‬ ‫ذات‬ ‫خرى‬ ‫ا‬ ‫واللوائح‬ ‫نظمة‬ ‫وا‬ ‫المالية‬ ‫السوق‬ ‫لنظام‬ ‫ووفقاً‬ ‫‪-‬‬ ‫دارة‬ ‫ا‬ ‫مجلس‬ ‫من‬ ‫بقرار‬ ‫‪-‬‬ ‫كة‬
                ‫الوقت‬ ‫في‬ ‫دوات‬ ‫ا‬ ‫تلك‬ ‫أصدرت‬ ‫سواء‬ ‫والصكوك‪،‬‬ ‫كالسندات‬ ‫خارجها‪،‬‬ ‫أو‬ ‫المملكة‬ ‫داخل‬ ‫غيرها‪،‬‬ ‫او‬ ‫السعودية‬ ‫بالعملة‬ ‫سواء‬ ‫للتداول‬ ‫القابلة‬
                ‫وقات‬ ‫ا‬ ‫في‬ ‫ذلك‬ ‫وكل‬ ‫آخر‪،‬‬ ‫إلى‬ ‫وقت‬ ‫من‬ ‫دارة‬ ‫ا‬ ‫مجلس‬ ‫يضعه‬ ‫أكثر‬ ‫أو‬ ‫برنامج‬ ‫ل‬ ‫خ‬ ‫من‬ ‫أو‬ ‫صدارات‬ ‫ا‬ ‫من‬ ‫سلسلة‬ ‫ل‬ ‫خ‬ ‫من‬ ‫أو‬ ‫نفسه‬
                <br><br>
                ‫لل‬ ‫ساس‬ ‫ا‬ ‫النظام‬ ‫من‬ ‫(‬ ‫‪2‬‬ ‫)‬ ‫رقم‬ ‫الفقرة‬ ‫(‪،‬‬ ‫‪29‬‬ ‫)‬ ‫رقم‬ ‫دة‬
                ‫‪8.‬‬
                ‫العامة‪،‬‬ ‫الجمعية‬ ‫نعقاد‬ ‫بالدعوة‬ ‫المتعلقة‬ ‫كة‪،‬‬
                ‫ع‬ ‫يوماً‬ ‫‪21‬‬ ‫قبل‬ ‫المدة‬ ‫‪.‬لتكون‬
                <br><br>
                 <br><br>
                ‫لل‬ ‫ساس‬ ‫ا‬ ‫النظام‬ ‫من‬ ‫(‬ ‫‪2‬‬ ‫)‬ ‫رقم‬ ‫الفقرة‬ ‫(‪،‬‬ ‫‪29‬‬ ‫)‬ ‫رقم‬ ‫دة‬
                ‫‪9.‬‬
                ‫العامة‪،‬‬ ‫الجمعية‬ ‫نعقاد‬ ‫بالدعوة‬ ‫المتعلقة‬ ‫كة‪،‬‬
                ‫ع‬ ‫يوماً‬ ‫‪21‬‬ ‫قبل‬ ‫المدة‬ ‫‪.‬لتكون‬
                <br><br>
                 <br><br>
                ‫لل‬ ‫ساس‬ ‫ا‬ ‫النظام‬ ‫من‬ ‫(‬ ‫‪2‬‬ ‫)‬ ‫رقم‬ ‫الفقرة‬ ‫(‪،‬‬ ‫‪29‬‬ ‫)‬ ‫رقم‬ ‫دة‬
                ‫‪10.‬‬
                ‫العامة‪،‬‬ ‫الجمعية‬ ‫نعقاد‬ ‫بالدعوة‬ ‫المتعلقة‬ ‫كة‪،‬‬
                ‫ع‬ ‫يوماً‬ ‫‪21‬‬ ‫قبل‬ ‫المدة‬ ‫‪.‬لتكون‬
                <br><br>
                 <br><br>
                ‫لل‬ ‫ساس‬ ‫ا‬ ‫النظام‬ ‫من‬ ‫(‬ ‫‪2‬‬ ‫)‬ ‫رقم‬ ‫الفقرة‬ ‫(‪،‬‬ ‫‪29‬‬ ‫)‬ ‫رقم‬ ‫دة‬
                ‫‪11.‬‬
                ‫العامة‪،‬‬ ‫الجمعية‬ ‫نعقاد‬ ‫بالدعوة‬ ‫المتعلقة‬ ‫كة‪،‬‬
                ‫ع‬ ‫يوماً‬ ‫‪21‬‬ ‫قبل‬ ‫المدة‬ ‫‪.‬لتكون‬
                <br><br>
                  <br><br>
                ‫لل‬ ‫ساس‬ ‫ا‬ ‫النظام‬ ‫من‬ ‫(‬ ‫‪2‬‬ ‫)‬ ‫رقم‬ ‫الفقرة‬ ‫(‪،‬‬ ‫‪29‬‬ ‫)‬ ‫رقم‬ ‫دة‬
                ‫‪12.‬‬
                ‫العامة‪،‬‬ ‫الجمعية‬ ‫نعقاد‬ ‫بالدعوة‬ ‫المتعلقة‬ ‫كة‪،‬‬
                ‫ع‬ ‫يوماً‬ ‫‪21‬‬ ‫قبل‬ ‫المدة‬ ‫‪.‬لتكون‬
                <br><br>
                  <br><br>
                ‫لل‬ ‫ساس‬ ‫ا‬ ‫النظام‬ ‫من‬ ‫(‬ ‫‪2‬‬ ‫)‬ ‫رقم‬ ‫الفقرة‬ ‫(‪،‬‬ ‫‪29‬‬ ‫)‬ ‫رقم‬ ‫دة‬
                ‫‪13.‬‬
                ‫العامة‪،‬‬ ‫الجمعية‬ ‫نعقاد‬ ‫بالدعوة‬ ‫المتعلقة‬ ‫كة‪،‬‬
                ‫ع‬ ‫يوماً‬ ‫‪21‬‬ ‫قبل‬ ‫المدة‬ ‫‪.‬لتكون‬
                <br><br>
                  <br><br>
                ‫لل‬ ‫ساس‬ ‫ا‬ ‫النظام‬ ‫من‬ ‫(‬ ‫‪2‬‬ ‫)‬ ‫رقم‬ ‫الفقرة‬ ‫(‪،‬‬ ‫‪29‬‬ ‫)‬ ‫رقم‬ ‫دة‬
                ‫‪14.‬‬
                ‫العامة‪،‬‬ ‫الجمعية‬ ‫نعقاد‬ ‫بالدعوة‬ ‫المتعلقة‬ ‫كة‪،‬‬
                ‫ع‬ ‫يوماً‬ ‫‪21‬‬ ‫قبل‬ ‫المدة‬ ‫‪.‬لتكون‬
                <br><br>
                  <br><br>
                ‫لل‬ ‫ساس‬ ‫ا‬ ‫النظام‬ ‫من‬ ‫(‬ ‫‪2‬‬ ‫)‬ ‫رقم‬ ‫الفقرة‬ ‫(‪،‬‬ ‫‪29‬‬ ‫)‬ ‫رقم‬ ‫دة‬
                ‫‪15.‬‬
                ‫العامة‪،‬‬ ‫الجمعية‬ ‫نعقاد‬ ‫بالدعوة‬ ‫المتعلقة‬ ‫كة‪،‬‬
                ‫ع‬ ‫يوماً‬ ‫‪21‬‬ ‫قبل‬ ‫المدة‬ ‫‪.‬لتكون‬
                <br><br>

                </p>
              </div>
            </div>
          </div>
          <div class="sp_wrap cwrapper">
              <div class="screentop_para">
                <h1>
                  <span class="h1 colr_white bk_pink" style="padding: 5px 15px 5px 150px;"> ‫
                    ‫السنوي‬ ‫التقييم‬
                  </span> 
                </h1>
                <h1>
                  <span class="h1 colr_purple"> 
                  ‫دارة‬ ‫ا‬ ‫لمجلس‬
                  </span>
                </h1>
              </div>
              <div class="content-wrapper">
                <div class="left">
                  <div class="col8">
                    <h5 class="h5 colr_purple">
                  ‫‫ال‬ ‫ياسة‬
                  ‫رباح‬ ‫ا‬ ‫توزيع‬ ‫في‬ ‫كة‬              
                  </h5>
                  <p class="content_para">
                    ‫‫‪‫ال‬ ‫سياسة‬
                    ‫رباح‬ ‫ا‬ ‫توزيع‬ ‫في‬ ‫كة‬
                    <br><br>
                    ‫‫ن‬ ‫وجرى‬ ‫م(‪،‬‬ ‫‪24/4/2019‬‬ ‫)الموافق‬ ‫هـ‬ ‫‪19/8/1440‬‬ ‫بتاريخ‬ ‫بالرياض‪،‬‬ ‫الرئيس‬
                    ‫التالي‬ ‫النحو‬ ‫على‬ ‫الجمعية‬ ‫أعمال‬ ‫جدول‬ ‫على‬ ‫التصويت‬ ‫نتائج‬ ‫وكانت‬ ‫‪25/4/2019‬م‪،‬‬ ‫بتاريخ‬ ‫التالي‬ ‫اليوم‬ ‫في‬ ‫تداول‬ ‫موقع‬ ‫‪:‬في‬
                    <br><br>
                    ‫‫م‬ ‫‪31/12/2018‬‬ ‫في‬ ‫المنتهية‬ ‫المالية‬ ‫السنة‬ ‫عن‬ ‫دارة‬ ‫ا‬ ‫مجلس‬ ‫تقرير‬ ‫على‬ ‫الموافقة‬ ‫‪.‬‬
                    <br><br>
                    ‫حسابات‬ ‫مراجع‬ ‫تقرير‬ ‫على‬ ‫الموافقة‬ ‫‪stc‬‬ ‫م‬ ‫‪31/12/2018‬‬ ‫في‬ ‫المنتهية‬ ‫المالية‬ ‫للسنة‬ ‫‪.‬‬
                    <br><br>
                    ‫لل‬ ‫الموحدة‬ ‫المالية‬ ‫القوائم‬ ‫على‬ ‫الموافقة‬ ‫‪.‬‬
                    ‫‪3.
                    ‫م‬ ‫‪31/12/2018‬‬ ‫في‬ ‫المنتهية‬ ‫المالية‬ ‫للسنة‬ ‫كة‬
                    <br><br>
                    ‫‫و‬ ‫ويونغ‬ ‫ارنست‬ ‫مكتب‬ ‫تعيين‬ ‫على‬ ‫الموافقة‬
                    ‫لل‬ ‫الخارجي‬ ‫الحسابات‬ ‫مراجع‬ ‫(‬ ‫قانونيون‬ ‫محاسبون‬ ‫)‬ ‫كاهم‬
                    ‫وال‬ ‫الزكاة‬ ‫خدمات‬ ‫لتقديم‬ ‫وذلك‬ ‫المراجعة‪،‬‬ ‫لجنة‬ ‫توصية‬ ‫على‬ ‫بناءً‬ ‫المرشحين‬
                    ‫‪4.‬‬
                    ‫بين‬ ‫من‬ ‫كة‬
                    ‫الثاني‬ ‫للربع‬ ‫المالية‬ ‫القوائم‬ ‫وتدقيق‬ ‫ومراجعة‬ ‫ولفحص‬ ‫يبة‬
                    ‫ول‬ ‫ا‬ ‫الربع‬ ‫و‬ ‫‪2020‬م‬ ‫المالي‬ ‫العام‬ ‫من‬ ‫والسنوي‬ ‫والرابع‬ ‫والثالث‬ ‫والثاني‬ ‫ول‬ ‫ا‬ ‫للربع‬ ‫و‬ ‫‪2019‬م‪،‬‬ ‫المالي‬ ‫العام‬ ‫من‬ ‫والسنوي‬ ‫والرابع‬ ‫والثالث‬
                    ‫أتعابه‬ ‫وتحديد‬ ‫‪2021‬م‬ ‫‪.‬لعام‬
                    <br><br>
                    ‫‫لل‬ ‫رباح‬ ‫ا‬ ‫توزيع‬ ‫سياسة‬ ‫على‬ ‫الموافقة‬ ‫‪.‬‬
                    ‫‪5.‬‬
                    ‫م‬ ‫‪2018‬‬ ‫عام‬ ‫من‬ ‫الرابع‬ ‫الربع‬ ‫من‬ ‫بداية‬ ‫القادمة‬ ‫ث‬ ‫الث‬ ‫السنوات‬ ‫لفترة‬ ‫كة‬
                    <br><br>
                    ‫‫سعودي‬ ‫ريال‬ ‫مليون‬ ‫‪4.000‬‬ ‫مقداره‬ ‫بمبلغ‬ ‫م‬ ‫‪2018‬‬ ‫عام‬ ‫عن‬ ‫واحدة‬ ‫لمرة‬ ‫إضافية‬ ‫بتوزيعات‬ ‫دارة‬ ‫ا‬ ‫مجلس‬ ‫توصية‬ ‫على‬ ‫لموافقة‬
                    ‫وراق‬ ‫ا‬ ‫إيداع‬ ‫مركز‬ ‫لدى‬ ‫المسجلين‬ ‫سهم‬ ‫ل‬ ‫المالكين‬ ‫للمساهمين‬ ‫رباح‬ ‫ا‬ ‫توزيعات‬ ‫أحقية‬ ‫وستكون‬ ‫سهم‪،‬‬ ‫كل‬ ‫عن‬ ‫سعودي‬ ‫ريال‬ ‫‪2‬‬ ‫بواقع‬
                    ‫لل‬ ‫العامة‬ ‫الجمعية‬ ‫انعقاد‬ ‫يوم‬ ‫يلي‬ ‫تداول‬ ‫يوم‬ ‫ثاني‬ ‫بنهاية‬ ‫المالية‬
                    ‫‪2,000‬‬ ‫تبلغ‬ ‫والتي‬ ‫للتوزيعات‬ ‫المستحقة‬ ‫سهم‬ ‫ل‬ ‫التوزيع‬ ‫يتم‬ ‫أن‬ ‫وتقرر‬ ‫كة‪،‬‬
                    ‫مسبقا‬ ‫عنه‬ ‫ن‬ ‫ع‬ ‫ا‬ ‫تم‬ ‫ما‬ ‫حسب‬ ‫وذلك‬ ‫‪16/5/2019‬م‬ ‫الموافق‬ ‫‪11/9/1440‬هـ‬ ‫تاريخ‬ ‫في‬ ‫سهم‬ ‫‪.‬مليون‬
                    <br><br>
                    ‫المادة‬ ‫باستثناء‬ ‫المالية‬ ‫السوق‬ ‫هيئة‬ ‫من‬ ‫الصادرة‬ ‫كات‬ ‫ال‬ ‫حوكمة‬ ‫ئحة‬ ‫أحكام‬ ‫جميع‬ ‫تطبيق‬ ‫تم‬ ‫وقد‬
                    ‫حين‬ ‫في‬ ‫خمسة‪،‬‬ ‫عن‬ ‫يزيد‬ ‫و‬ ‫ثة‬ ‫ث‬ ‫عن‬ ‫اللجان‬ ‫أعضاء‬ ‫عدد‬ ‫يقل‬ ‫أ‬ ‫على‬ ‫تنص‬ ‫التي‬ ‫رابعاً(‪،‬‬ ‫)الفقرة‬ ‫الخمسون‬
                    ‫الرئيس‬ ‫أحدهم‬ ‫خارجيين‪،‬‬ ‫وعضوين‬ ‫دارة‪،‬‬ ‫ا‬ ‫مجلس‬ ‫أعضاء‬ ‫من‬ ‫أعضاء‬ ‫أربعة‬ ‫من‬ ‫التنفيذية‬ ‫اللجنة‬ ‫تتكون‬
                    <br><br>
                    ‫‫لل‬ ‫ساس‬ ‫ا‬ ‫النظام‬ ‫من‬ ‫)ب(‬ ‫الفقرة‬ ‫(‪،‬‬ ‫‪16‬‬ ‫)‬ ‫رقم‬ ‫المادة‬ ‫تعديل‬ ‫على‬ ‫الموافقة‬
                    ‫لل‬
                    ‫‪7.‬‬
                    ‫“يجوز‬ ‫لتكون‪:‬‬ ‫والصكوك‬ ‫بالسندات‬ ‫المتعلقة‬ ‫كة‪،‬‬
                    ‫الدين‬ ‫أدوات‬ ‫أنواع‬ ‫من‬ ‫نوع‬ ‫أي‬ ‫إصدار‬ ‫قة‪،‬‬ ‫الع‬ ‫ذات‬ ‫خرى‬ ‫ا‬ ‫واللوائح‬ ‫نظمة‬ ‫وا‬ ‫المالية‬ ‫السوق‬ ‫لنظام‬ ‫ووفقاً‬ ‫‪-‬‬ ‫دارة‬ ‫ا‬ ‫مجلس‬ ‫من‬ ‫بقرار‬ ‫‪-‬‬ ‫كة‬
                  </p>
                  </div>
                  
                </div>
                <div class="right marginr50">
                  <div class="box_center_content bk_purple" style="padding:60px;">
                    <p class="content_para colr_white">
                      ‫‫‫‪‫‪4/7/1439‬هـ‬ ‫بتاريخ‬ ‫اجتماعه‬ ‫في‬ ‫دارة‬ ‫ا‬ ‫مجلس‬ ‫أقر‬
                      ‫دارة‬ ‫ا‬ ‫مجلس‬ ‫أداء‬ ‫تقييم‬ ‫سياسة‬ ‫‪21/3/2018‬م(‬ ‫)الموافق‬
                      ‫العمل‬ ‫قواعد‬ ‫تحديد‬ ‫إلى‬ ‫السياسة‬ ‫هذه‬ ‫وتهدف‬ ‫ولجانه‪،‬‬
                      ‫لغرض‬ ‫ولجانه‪،‬‬ ‫المجلس‬ ‫أداء‬ ‫بتقييم‬ ‫المعنية‬ ‫والضوابط‬
                      ‫النظامية‪،‬‬ ‫بالمتطلبات‬ ‫والوفاء‬ ‫داء‪،‬‬ ‫ا‬ ‫وتطوير‬ ‫المتابعة‬
                      ‫وتعزيز‬ ‫الحوكمة‪،‬‬ ‫مجال‬ ‫في‬ ‫الممارسات‬ ‫أفضل‬ ‫وتطبيق‬
                      ‫تعاقدت‬ ‫وقد‬ ‫المجلس‪.‬‬ ‫فاعلية‬ ‫‪stc‬‬ ‫سبتمبر‬ ‫شهر‬ ‫في‬
                      ‫وتقييم‬ ‫دراسة‬ ‫جراء‬ ‫متخصص‬ ‫استشاري‬ ‫مع‬ ‫‪2019‬م‬
                      ‫نتائج‬ ‫وستعرض‬ ‫‪2019‬م‪،‬‬ ‫عام‬ ‫المجلس‬ ‫وأداء‬ ‫لفاعلية‬
                      ‫حيث‬ ‫‪17/3/2020‬م‪،‬‬ ‫بتاريخ‬ ‫المجلس‬ ‫على‬ ‫النهائية‬ ‫التقييم‬
                      ‫ل‬ ‫خ‬ ‫من‬ ‫التقييم‬ ‫عملية‬ ‫في‬ ‫المجلس‬ ‫أعضاء‬ ‫شارك‬
                      ‫بآرائهم‬ ‫ء‬ ‫د‬ ‫وا‬ ‫المستقل‬ ‫ستشاري‬ ‫ا‬ ‫مع‬ ‫الكامل‬ ‫التعاون‬
                      ‫مجلس‬ ‫ودور‬ ‫هيكل‬ ‫بينها‪:‬‬ ‫من‬ ‫ت‬ ‫المجا‬ ‫من‬ ‫عدد‬ ‫في‬
                      ‫واحد‪،‬‬ ‫كفريق‬ ‫المجلس‬ ‫أعضاء‬ ‫بين‬ ‫والتفاعل‬ ‫ولجانه‪،‬‬ ‫دارة‬ ‫ا‬
                      ‫والتحديات‬ ‫والحوكمة‬ ‫التنفيذية‪،‬‬ ‫دارة‬ ‫وا‬ ‫والمجلس‬
                    </p>
                  </div>
                </div>
              </div>
          </div>
          <div class="sp_wrap">
            <div class="content-wrapper inner-wrapper c-row-reverse sp_row">
              <div class="right marginr50 noheight" style="position: relative; width: 50%;">
                 <b class="content_para">
              ‫‫‫لل‬ ‫دين‬ ‫أدوات‬ ‫أو‬ ‫أسهم‬ ‫في‬ ‫وأقربائهم‬ ‫دارة‬ ‫ا‬ ‫مجلس‬ ‫عضاء‬ ‫تعود‬ ‫اكتتاب‬ ‫وحقوق‬ ‫تعاقدية‬ ‫وأوراق‬ ‫مصلحة‬ ‫ي‬ ‫وصف‬
              ‫السابعة(‬ ‫)الدورة‬ ‫كة‬
                </b>
              </div>
            </div>
          </div>
          <div class="tabular_data2 margint50">
             <div class="c_row first bk_purple">
                <div>‫‫م‬‬</div>
                <div>
                ‫‫‫العضو‬ ‫اسم‬
                </div>
                <div class="c_row last">
                   <div class="c_row f-row" style="padding:10px 20px;">‫‫‪2019‬‬ ‫العام‬ ‫بداية‬</div>
                   <div class="c_row f-row">
                     <span>‫‫سهم‬ ‫ا‬ ‫عدد‬</span>
                     <span>‫ا‫الدين‬ ‫أدوات‬</span>
                   </div>
                </div>
                 <div class="c_row last">
                   <div class="c_row f-row" style="padding:10px 20px;">‫‫‪2019‬‬ ‫العام‬ ‫نهاية‬</div>
                     <div class="c_row f-row">
                     <span>‫‫سهم‬ ‫ا‬ ‫عدد‬</span>
                     <span>‫‫الدين‬ ‫أدوات‬</span>
                   </div>
                 </div>
                 <div>‫
                  ‫التغيير‬ ‫صافي‬
                </div>
                 <div>
                  ‫‫التغيير‬ ‫نسبة‬
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
               <div class="c_row last">
                 <div class="c_row f-row">
                   <span></span>
                   <span></span>
                 </div>
               </div>
               <div>
               </div>
               <div></div>
              </div>
              <div class="c_row first table_white">
               <div>2</div>
               <div></div>
               <div class="c_row last">
                 <div class="c_row f-row">
                   <span></span>
                   <span></span>
                 </div>
               </div>
               <div class="c_row last">
                 <div class="c_row f-row">
                   <span></span>
                   <span></span>
                 </div>
               </div>
               <div>
               </div>
               <div></div>
              </div>
              <div class="c_row first table_white">
               <div>3</div>
               <div></div>
               <div class="c_row last">
                 <div class="c_row f-row">
                   <span></span>
                   <span></span>
                 </div>
               </div>
               <div class="c_row last">
                 <div class="c_row f-row">
                   <span></span>
                   <span></span>
                 </div>
               </div>
               <div>
               </div>
               <div></div>
              </div>
              <div class="c_row first table_white">
               <div>4</div>
               <div></div>
               <div class="c_row last">
                 <div class="c_row f-row">
                   <span></span>
                   <span></span>
                 </div>
               </div>
               <div class="c_row last">
                 <div class="c_row f-row">
                   <span></span>
                   <span></span>
                 </div>
               </div>
               <div>
               </div>
               <div></div>
              </div>
          </div>
          <div class="sp_wrap">
            <div class="content-wrapper inner-wrapper c-row-reverse sp_row">
              <div class="right marginr50 noheight" style="position: relative; width: 50%;">
                 <b class="content_para">
              ‫‫‫لل‬ ‫دين‬ ‫أدوات‬ ‫أو‬ ‫أسهم‬ ‫في‬ ‫وأقربائهم‬ ‫دارة‬ ‫ا‬ ‫مجلس‬ ‫عضاء‬ ‫تعود‬ ‫اكتتاب‬ ‫وحقوق‬ ‫تعاقدية‬ ‫وأوراق‬ ‫مصلحة‬ ‫ي‬ ‫وصف‬
              ‫السابعة(‬ ‫)الدورة‬ ‫كة‬
                </b>
              </div>
            </div>
          </div>
          <div class="tabular_data2 margint50">
             <div class="c_row first bk_purple">
                <div>‫‫م‬‬</div>
                <div>
                ‫‫‫العضو‬ ‫اسم‬
                </div>
                <div class="c_row last">
                   <div class="c_row f-row" style="padding:10px 20px;">‫‫‪2019‬‬ ‫العام‬ ‫بداية‬</div>
                   <div class="c_row f-row">
                     <span>‫‫سهم‬ ‫ا‬ ‫عدد‬</span>
                     <span>‫ا‫الدين‬ ‫أدوات‬</span>
                   </div>
                </div>
                 <div class="c_row last">
                   <div class="c_row f-row" style="padding:10px 20px;">‫‫‪2019‬‬ ‫العام‬ ‫نهاية‬</div>
                     <div class="c_row f-row">
                     <span>‫‫سهم‬ ‫ا‬ ‫عدد‬</span>
                     <span>‫‫الدين‬ ‫أدوات‬</span>
                   </div>
                 </div>
                 <div>‫
                  ‫التغيير‬ ‫صافي‬
                </div>
                 <div>
                  ‫‫التغيير‬ ‫نسبة‬
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
               <div class="c_row last">
                 <div class="c_row f-row">
                   <span></span>
                   <span></span>
                 </div>
               </div>
               <div>
               </div>
               <div></div>
              </div>
              <div class="c_row first table_white">
               <div>2</div>
               <div></div>
               <div class="c_row last">
                 <div class="c_row f-row">
                   <span></span>
                   <span></span>
                 </div>
               </div>
               <div class="c_row last">
                 <div class="c_row f-row">
                   <span></span>
                   <span></span>
                 </div>
               </div>
               <div>
               </div>
               <div></div>
              </div>
              <div class="c_row first table_white">
               <div>3</div>
               <div></div>
               <div class="c_row last">
                 <div class="c_row f-row">
                   <span></span>
                   <span></span>
                 </div>
               </div>
               <div class="c_row last">
                 <div class="c_row f-row">
                   <span></span>
                   <span></span>
                 </div>
               </div>
               <div>
               </div>
               <div></div>
              </div>
              <div class="c_row first table_white">
               <div>4</div>
               <div></div>
               <div class="c_row last">
                 <div class="c_row f-row">
                   <span></span>
                   <span></span>
                 </div>
               </div>
               <div class="c_row last">
                 <div class="c_row f-row">
                   <span></span>
                   <span></span>
                 </div>
               </div>
               <div>
               </div>
               <div></div>
              </div>
          </div>
          <div class="sp_wrap">
            <div class="content-wrapper inner-wrapper c-row-reverse sp_row">
              <div class="right marginr50 noheight" style="position: relative; width: 50%;">
                 <b class="content_para">
              ‫‫‫لل‬ ‫دين‬ ‫أدوات‬ ‫أو‬ ‫أسهم‬ ‫في‬ ‫وأقربائهم‬ ‫دارة‬ ‫ا‬ ‫مجلس‬ ‫عضاء‬ ‫تعود‬ ‫اكتتاب‬ ‫وحقوق‬ ‫تعاقدية‬ ‫وأوراق‬ ‫مصلحة‬ ‫ي‬ ‫وصف‬
              ‫السابعة(‬ ‫)الدورة‬ ‫كة‬
                </b>
              </div>
            </div>
          </div>
          <div class="tabular_data2 margint50">
             <div class="c_row first bk_purple">
                <div>‫‫م‬‬</div>
                <div>
                ‫‫‫العضو‬ ‫اسم‬
                </div>
                <div class="c_row last">
                   <div class="c_row f-row" style="padding:10px 20px;">‫‫‪2019‬‬ ‫العام‬ ‫بداية‬</div>
                   <div class="c_row f-row">
                     <span>‫‫سهم‬ ‫ا‬ ‫عدد‬</span>
                     <span>‫ا‫الدين‬ ‫أدوات‬</span>
                   </div>
                </div>
                 <div class="c_row last">
                   <div class="c_row f-row" style="padding:10px 20px;">‫‫‪2019‬‬ ‫العام‬ ‫نهاية‬</div>
                     <div class="c_row f-row">
                     <span>‫‫سهم‬ ‫ا‬ ‫عدد‬</span>
                     <span>‫‫الدين‬ ‫أدوات‬</span>
                   </div>
                 </div>
                 <div>‫
                  ‫التغيير‬ ‫صافي‬
                </div>
                 <div>
                  ‫‫التغيير‬ ‫نسبة‬
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
               <div class="c_row last">
                 <div class="c_row f-row">
                   <span></span>
                   <span></span>
                 </div>
               </div>
               <div>
               </div>
               <div></div>
              </div>
              <div class="c_row first table_white">
               <div>2</div>
               <div></div>
               <div class="c_row last">
                 <div class="c_row f-row">
                   <span></span>
                   <span></span>
                 </div>
               </div>
               <div class="c_row last">
                 <div class="c_row f-row">
                   <span></span>
                   <span></span>
                 </div>
               </div>
               <div>
               </div>
               <div></div>
              </div>
              <div class="c_row first table_white">
               <div>3</div>
               <div></div>
               <div class="c_row last">
                 <div class="c_row f-row">
                   <span></span>
                   <span></span>
                 </div>
               </div>
               <div class="c_row last">
                 <div class="c_row f-row">
                   <span></span>
                   <span></span>
                 </div>
               </div>
               <div>
               </div>
               <div></div>
              </div>
              <div class="c_row first table_white">
               <div>4</div>
               <div></div>
               <div class="c_row last">
                 <div class="c_row f-row">
                   <span></span>
                   <span></span>
                 </div>
               </div>
               <div class="c_row last">
                 <div class="c_row f-row">
                   <span></span>
                   <span></span>
                 </div>
               </div>
               <div>
               </div>
               <div></div>
              </div>
          </div>
          <div class="sp_wrap">
            <div class="content-wrapper inner-wrapper c-row-reverse sp_row">
              <div class="right marginr50 noheight" style="position: relative; width: 50%;">
                 <b class="content_para">
              ‫‫‫لل‬ ‫دين‬ ‫أدوات‬ ‫أو‬ ‫أسهم‬ ‫في‬ ‫وأقربائهم‬ ‫دارة‬ ‫ا‬ ‫مجلس‬ ‫عضاء‬ ‫تعود‬ ‫اكتتاب‬ ‫وحقوق‬ ‫تعاقدية‬ ‫وأوراق‬ ‫مصلحة‬ ‫ي‬ ‫وصف‬
              ‫السابعة(‬ ‫)الدورة‬ ‫كة‬
                </b>
              </div>
            </div>
          </div>
          <div class="tabular_data2 margint50">
             <div class="c_row first bk_purple">
                <div>‫‫م‬‬</div>
                <div>
                ‫‫‫العضو‬ ‫اسم‬
                </div>
                <div class="c_row last">
                   <div class="c_row f-row" style="padding:10px 20px;">‫‫‪2019‬‬ ‫العام‬ ‫بداية‬</div>
                   <div class="c_row f-row">
                     <span>‫‫سهم‬ ‫ا‬ ‫عدد‬</span>
                     <span>‫ا‫الدين‬ ‫أدوات‬</span>
                   </div>
                </div>
                 <div class="c_row last">
                   <div class="c_row f-row" style="padding:10px 20px;">‫‫‪2019‬‬ ‫العام‬ ‫نهاية‬</div>
                     <div class="c_row f-row">
                     <span>‫‫سهم‬ ‫ا‬ ‫عدد‬</span>
                     <span>‫‫الدين‬ ‫أدوات‬</span>
                   </div>
                 </div>
                 <div>‫
                  ‫التغيير‬ ‫صافي‬
                </div>
                 <div>
                  ‫‫التغيير‬ ‫نسبة‬
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
               <div class="c_row last">
                 <div class="c_row f-row">
                   <span></span>
                   <span></span>
                 </div>
               </div>
               <div>
               </div>
               <div></div>
              </div>
              <div class="c_row first table_white">
               <div>2</div>
               <div></div>
               <div class="c_row last">
                 <div class="c_row f-row">
                   <span></span>
                   <span></span>
                 </div>
               </div>
               <div class="c_row last">
                 <div class="c_row f-row">
                   <span></span>
                   <span></span>
                 </div>
               </div>
               <div>
               </div>
               <div></div>
              </div>
              <div class="c_row first table_white">
               <div>3</div>
               <div></div>
               <div class="c_row last">
                 <div class="c_row f-row">
                   <span></span>
                   <span></span>
                 </div>
               </div>
               <div class="c_row last">
                 <div class="c_row f-row">
                   <span></span>
                   <span></span>
                 </div>
               </div>
               <div>
               </div>
               <div></div>
              </div>
              <div class="c_row first table_white">
               <div>4</div>
               <div></div>
               <div class="c_row last">
                 <div class="c_row f-row">
                   <span></span>
                   <span></span>
                 </div>
               </div>
               <div class="c_row last">
                 <div class="c_row f-row">
                   <span></span>
                   <span></span>
                 </div>
               </div>
               <div>
               </div>
               <div></div>
              </div>
          </div>
          <div class="sp_wrap cwrapper">
          <div class="screentop_para">
              <h1>
                <span class="h1 colr_purple"> ‫
                 ‫حوكمة‬
                </span> 
              </h1>
              <h1>
                <span class="h1  colr_white bk_purple"  style="padding: 5px 15px 5px 150px;"> 
               ‫كة‬ ‫ال‬
                </span>
            </h1>
            </div>
          <div class="content-wrapper">
            <div class="left">
             <div class="img-wrap">
               <img src="img/guy_tab1.jpg">
             </div>
            </div>
            <div class="right marginr50">
             <p class="content_para">
              ‫‫إدارة‬ ‫مجلس‬ ‫حرص‬ ‫‪stc‬‬ ‫داري‬ ‫ا‬ ‫كة‬ ‫ال‬ ‫نظام‬ ‫من‬ ‫يتجزأ‬ ‫جزء‬ ‫واعتباره‬ ‫فاعل‬ ‫حوكمة‬ ‫نظام‬ ‫تأسيس‬ ‫على‬
              ‫دارة‬ ‫ا‬ ‫مجلس‬ ‫بين‬ ‫قة‬ ‫الع‬ ‫إيضاح‬ ‫ل‬ ‫خ‬ ‫من‬ ‫الداخلية‬ ‫عمال‬ ‫ا‬ ‫تنظيم‬ ‫الحوكمة‬ ‫نظام‬ ‫يتولى‬ ‫حيث‬ ‫والمالي‪،‬‬
              ‫نظام‬ ‫يتولى‬ ‫كما‬ ‫أخرى‪،‬‬ ‫جهة‬ ‫من‬ ‫التنفيذية‬ ‫دارة‬ ‫وا‬ ‫دارة‬ ‫ا‬ ‫ومجلس‬ ‫جهة‪،‬‬ ‫من‬ ‫المساهمين‬ ‫وجمعية‬
              ‫في‬ ‫الحوكمة‬ ‫‪stc‬‬ ‫والجهات‬ ‫الحكومية‬ ‫القطاعات‬ ‫مع‬ ‫قاتها‬ ‫ع‬ ‫إدارة‬ ‫ل‬ ‫خ‬ ‫من‬ ‫الخارجية‬ ‫عمال‬ ‫ا‬ ‫تنظيم‬
              ‫أهداف‬ ‫تحقيق‬ ‫تكفل‬ ‫عالية‬ ‫وفاعلية‬ ‫كفاءة‬ ‫تحقيق‬ ‫بغرض‬ ‫والمقاولين‬ ‫والمورّدين‬ ‫يعية‬ ‫الت‬ ‫‪stc‬‬
              ‫تحرص‬ ‫كما‬ ‫ستراتيجية‪.‬‬ ‫ا‬ ‫‪stc‬‬ ‫والمراقبة‬ ‫بالتوجيه‬ ‫المتعلقة‬ ‫العمل‬ ‫وقواعد‬ ‫التنظيمات‬ ‫شمولية‬ ‫على‬
              ‫ستثمار‬ ‫وا‬ ‫التجارة‬ ‫وزارة‬ ‫مقام‬ ‫من‬ ‫الصادر‬ ‫كات‬ ‫ال‬ ‫نظام‬ ‫في‬ ‫ورد‬ ‫ما‬ ‫مع‬ ‫متوافقة‬ ‫لتكون‬ ‫والشفافية‬
              ‫قة‪،‬‬ ‫الع‬ ‫ذات‬ ‫خرى‬ ‫ا‬ ‫نظمة‬ ‫وا‬ ‫المالية‪،‬‬ ‫السوق‬ ‫هيئة‬ ‫إدارة‬ ‫مجلس‬ ‫من‬ ‫الصادرة‬ ‫كات‬ ‫ال‬ ‫حوكمة‬ ‫ئحة‬ ‫و‬
              ‫في‬ ‫عمال‬ ‫ا‬ ‫حوكمة‬ ‫مستوى‬ ‫رفع‬ ‫إلى‬ ‫ضافة‬ ‫با‬ ‫‪stc‬‬ ‫قليمية‬ ‫ا‬ ‫الممارسات‬ ‫أفضل‬ ‫من‬ ‫ستفادة‬ ‫ا‬ ‫ل‬ ‫خ‬ ‫من‬
              <br>
              <br>
              ‫‫في‬ ‫الحوكمة‬ ‫نظام‬ ‫مكن‬ ‫لقد‬ ‫‪stc‬‬ ‫ركائز‬ ‫من‬ ‫هامة‬ ‫ركيزة‬ ‫تعتبر‬ ‫والتي‬ ‫المستهدفة‬ ‫ستدامة‬ ‫ا‬ ‫تحقيق‬ ‫من‬
              ‫مجموعة‬ ‫استراتيجية‬ ‫‪stc،‬‬ ‫الجهات‬ ‫قبل‬ ‫من‬ ‫معتمدة‬ ‫وثائق‬ ‫على‬ ‫تستند‬ ‫ونشاطاتها‬ ‫كة‬ ‫ال‬ ‫فأعمال‬
              ‫كة‬ ‫ل‬ ‫ساس‬ ‫ا‬ ‫النظام‬
              ‫الح‬ ‫المثال‬ ‫سبيل‬ ‫على‬ ‫ذلك‬ ‫ومن‬ ‫المعنية‪،‬‬ ‫‪stc‬‬ ‫وزارة‬ ‫قبل‬ ‫من‬ ‫والمعتمد‬
              ‫الجمعية‬ ‫من‬ ‫المعتمدة‬ ‫رباح‬ ‫ا‬ ‫توزيع‬ ‫وسياسة‬ ‫العامة‪،‬‬ ‫الجمعية‬ ‫على‬ ‫عرضه‬ ‫بعد‬ ‫ستثمار‬ ‫وا‬ ‫التجارة‬
              ‫قبل‬ ‫من‬ ‫المعتمدة‬ ‫المراجعة‬ ‫لجنة‬ ‫عمل‬ ‫ئحة‬ ‫ك‬ ‫عنه‬ ‫المنبثقة‬ ‫واللجان‬ ‫دارة‬ ‫ا‬ ‫مجلس‬ ‫عمل‬ ‫ولوائح‬ ‫العامة‪،‬‬
              ‫حوكمة‬ ‫ئحة‬ ‫و‬ ‫العامة‪،‬‬ ‫الجمعية‬ ‫‪stc‬‬ ‫تفويض‬ ‫مصفوفة‬ ‫توثيق‬ ‫أن‬ ‫كما‬ ‫دارة‪.‬‬ ‫ا‬ ‫مجلس‬ ‫قبل‬ ‫من‬ ‫المعتمدة‬
              ‫في‬ ‫الداخلية‬ ‫الرقابة‬ ‫ضوابط‬ ‫متطلبات‬ ‫من‬ ‫أساسياً‬ ‫مطلباً‬ ‫يعد‬ ‫والمالية‬ ‫ستراتيجية‬ ‫ا‬ ‫حيات‬ ‫الص‬ ‫‪stc‬‬ ‫حيث‬
              ‫دارية‬ ‫ا‬ ‫الوظائف‬ ‫لشاغلي‬ ‫والمالية‬ ‫ستراتيجية‬ ‫ا‬ ‫حيات‬ ‫والص‬ ‫المسؤوليات‬ ‫تحديد‬ ‫على‬ ‫تعمل‬ ‫أنها‬
              ‫في‬ ‫ت‬ ‫والمعام‬ ‫القرارات‬ ‫باعتماد‬ ‫المفوضين‬ ‫‪stc،‬‬ ‫آليات‬ ‫وحوكمة‬ ‫ضبط‬ ‫من‬ ‫تعزز‬ ‫أن‬ ‫شأنها‬ ‫من‬ ‫والتي‬
             </p>
             <br><br><br>
             
            </div>
          </div>
          <div class="content-wrapper inner-wrapper c-row-reverse sp_row">
                  <div class="left" style="position: relative;">
                  <div class="bar-wrap">
                     <div class="element_bars_hr" style="width: 100%;position: absolute;right: 0;height: 100%;">
                          <div class="leftbar bk_purple" style="width: 90%"></div>
                          <div class="rightbar bk_pink" style="width: 10%"></div>
                    </div>
                  </div>
                  </div>
                  <div class="right">
                    <p class="content_para">
                      ‫‫استراتيجية‬ ‫مع‬ ‫واضح‬ ‫وبشكل‬ ‫مرتبطة‬ ‫بالحوكمة‬ ‫خاصة‬ ‫استراتيجية‬ ‫وجود‬ ‫همية‬ ‫و‬ ‫‪stc،‬‬ ‫دارة‬ ‫ا‬ ‫حرصت‬
                      ‫استراتيجية‬ ‫واعتماد‬ ‫تطوير‬ ‫على‬ ‫دارة‬ ‫ا‬ ‫مجلس‬ ‫في‬ ‫والمكافآت‬ ‫الترشيحات‬ ‫لجنة‬ ‫من‬ ‫وبدعم‬ ‫التنفيذية‬
                      ‫هذا‬ ‫في‬ ‫كة‬ ‫لل‬ ‫ستراتيجي‬ ‫ا‬ ‫التوجه‬ ‫تشكل‬ ‫رئيسة‬ ‫محاور‬ ‫تضمنت‬ ‫والتي‬ ‫‪2019‬م‪،‬‬ ‫العام‬ ‫بداية‬ ‫في‬ ‫الحوكمة‬
                      ‫بالتطوير‪،‬‬ ‫المستهدفة‬ ‫ستراتيجية‬ ‫ا‬ ‫المبادرات‬ ‫من‬ ‫مجموعة‬ ‫المعتمدة‬ ‫ستراتيجية‬ ‫ا‬ ‫تضمنت‬ ‫كما‬ ‫الشأن‪.‬‬
                      ‫العامة‬ ‫الجمعية‬ ‫مستوى‬ ‫على‬ ‫منها‬ ‫بعضٍ‬ ‫إنجاز‬ ‫كة‬ ‫ال‬ ‫في‬ ‫الحوكمة‬ ‫بأعمال‬ ‫المختص‬ ‫الفريق‬ ‫أكمل‬ ‫حيث‬
                      ‫السلوك‬ ‫وسياسة‬ ‫المصالح‬ ‫تعارض‬ ‫سياسة‬ ‫واعتماد‬ ‫العامة‪،‬‬ ‫الجمعية‬ ‫من‬ ‫رباح‬ ‫ا‬ ‫توزيع‬ ‫سياسة‬ ‫كاعتماد‬
                      ‫مستوى‬ ‫على‬ ‫أعمال‬ ‫تطوير‬ ‫على‬ ‫الحوكمة‬ ‫بأعمال‬ ‫المختص‬ ‫الفريق‬ ‫عمل‬ ‫كما‬ ‫دارة‪.‬‬ ‫ا‬ ‫مجلس‬ ‫من‬ ‫المهني‬
                      ‫في‬ ‫الحوكمة‬ ‫عمل‬ ‫إطار‬ ‫تطوير‬ ‫ومنها‬ ‫التنفيذية‬ ‫دارة‬ ‫ا‬ ‫‪stc،‬‬ ‫دارية‬ ‫ا‬ ‫اللجان‬ ‫عمل‬ ‫‪.‬وإطار‬
                    <br><br>
                    ‫قبل‬ ‫من‬ ‫الصادرة‬ ‫يعات‬ ‫والت‬ ‫نظمة‬ ‫ا‬ ‫صعيد‬ ‫على‬ ‫متغيرات‬ ‫من‬ ‫يستجد‬ ‫بما‬ ‫وطيدة‬ ‫قة‬ ‫ع‬ ‫وللحوكمة‬
                    ‫في‬ ‫الحوكمة‬ ‫لوثائق‬ ‫مستمر‬ ‫تقييم‬ ‫عمل‬ ‫ورة‬
                    ‫يعني‬ ‫مما‬ ‫الحكومية‪،‬‬ ‫وشبه‬ ‫الحكومية‬ ‫القطاعات‬ ‫‪stc‬‬
                    ‫سنوية‬ ‫مبادرة‬ ‫ق‬ ‫إط‬ ‫التنفيذية‬ ‫دارة‬ ‫ا‬ ‫تبنت‬ ‫كما‬ ‫يعات‪.‬‬ ‫وت‬ ‫تنظيمات‬ ‫من‬ ‫يستجد‬ ‫لما‬ ‫وفقاً‬ ‫وتحديثها‬
                    ‫فرص‬ ‫عن‬ ‫البحث‬ ‫بغرض‬ ‫بالحوكمة‬ ‫المعنية‬ ‫عمال‬ ‫وا‬ ‫الوثائق‬ ‫لجميع‬ ‫داخلي‬ ‫سنوي‬ ‫تقييم‬ ‫عمل‬ ‫إلى‬ ‫تهدف‬
                    ‫من‬ ‫حققتها‬ ‫وما‬ ‫كة‬ ‫ال‬ ‫أعمال‬ ‫على‬ ‫يجابي‬ ‫ا‬ ‫ثر‬ ‫ا‬ ‫المبادرة‬ ‫لهذه‬ ‫كان‬ ‫لقد‬ ‫تطويرها‪.‬‬ ‫على‬ ‫والعمل‬ ‫التحسين‬
                    ‫مركز‬ ‫من‬ ‫المقدمة‬ ‫الحوكمة‬ ‫في‬ ‫التميز‬ ‫جائزة‬ ‫تحقيق‬ ‫من‬ ‫سبحانه‬ ‫الله‬ ‫توفيق‬ ‫بعد‬ ‫استطاعت‬ ‫حيث‬ ‫إنجازات‪،‬‬
                    ‫جامعة‬ ‫وبإدارة‬ ‫ستثمار‬ ‫ل‬ ‫العامة‬ ‫والهيئة‬ ‫المالية‬ ‫السوق‬ ‫هيئة‬ ‫عليه‬ ‫ف‬ ‫ت‬ ‫والذي‬ ‫كات‬ ‫ال‬ ‫حوكمة‬
                    ‫تكريم‬ ‫وجاء‬ ‫الفيصل‪،‬‬ ‫‪stc‬‬ ‫ل‬ ‫خ‬ ‫الرياض‬ ‫مدينة‬ ‫في‬ ‫المنعقد‬ ‫كات‬ ‫ال‬ ‫لحوكمة‬ ‫ول‬ ‫ا‬ ‫العالمي‬ ‫المؤتمر‬ ‫ل‬ ‫خ‬
                    ‫‪2019‬م‬ ‫‪.‬العام‬
                    <br><br>
                    ‫المادة‬ ‫باستثناء‬ ‫المالية‬ ‫السوق‬ ‫هيئة‬ ‫من‬ ‫الصادرة‬ ‫كات‬ ‫ال‬ ‫حوكمة‬ ‫ئحة‬ ‫أحكام‬ ‫جميع‬ ‫تطبيق‬ ‫تم‬ ‫وقد‬
                    ‫حين‬ ‫في‬ ‫خمسة‪،‬‬ ‫عن‬ ‫يزيد‬ ‫و‬ ‫ثة‬ ‫ث‬ ‫عن‬ ‫اللجان‬ ‫أعضاء‬ ‫عدد‬ ‫يقل‬ ‫أ‬ ‫على‬ ‫تنص‬ ‫التي‬ ‫رابعاً(‪،‬‬ ‫)الفقرة‬ ‫الخمسون‬
                    ‫الرئيس‬ ‫أحدهم‬ ‫خارجيين‪،‬‬ ‫وعضوين‬ ‫دارة‪،‬‬ ‫ا‬ ‫مجلس‬ ‫أعضاء‬ ‫من‬ ‫أعضاء‬ ‫أربعة‬ ‫من‬ ‫التنفيذية‬ ‫اللجنة‬ ‫تتكون‬
                    </p>
                  </div>
          </div>
          <div class="sp_wrap cwrapper">
            <div class="screentop_para">
              <h1>
                <span class="h1 colr_white bk_purple" style="padding: 5px 15px 5px 150px;"> ‫
                  ‫الرقابة‬
                </span> 
              </h1>
              <h1>
                <span class="h1 colr_purple"> 
                ‫الداخلية‬
                </span>
            </h1>
            </div>
            <div class="content-wrapper sp2_row">
              <div class="left pink_border ">
              </div>
              <div class="right bk_purple nopadding marginr50">
                <div class="box_center_content">
                  <p class="content_para colr_white" style="text-align: right;">
                    ‫‫ال‬ ‫إدارة‬ ‫مجلس‬ ‫يقر‬
                    ‫الرقابة‬ ‫وإجراءات‬ ‫نظام‬ ‫وأن‬ ‫الصحيح‪،‬‬ ‫بالشكل‬ ‫أعدت‬ ‫الحسابات‬ ‫ت‬ ‫سج‬ ‫بأن‬ ‫كة‬
                    ‫ال‬ ‫قدرة‬ ‫في‬ ‫تؤثر‬ ‫قد‬ ‫جوهرية‬ ‫ملحوظات‬ ‫وجود‬ ‫دون‬ ‫عالية‪،‬‬ ‫وكفاءة‬ ‫سليمة‬ ‫أسس‬ ‫على‬ ‫أعد‬ ‫الداخلية‬
                    ‫وت‬ ‫نشاطها‪.‬‬ ‫مواصلة‬ ‫على‬
                    ‫كة‬
                    ‫لتزام‬ ‫ا‬ ‫إدارة‬ ‫أعمال‬ ‫على‬ ‫دارة‬ ‫ا‬ ‫مجلس‬ ‫عن‬ ‫المنبثقة‬ ‫المراجعة‬ ‫لجنة‬ ‫ف‬
                    ‫وإجراءات‬ ‫نظام‬ ‫وفاعلية‬ ‫كفاية‬ ‫مدى‬ ‫دوري‬ ‫بشكل‬ ‫تفحص‬ ‫التي‬ ‫الداخلية‬ ‫والمراجعة‬ ‫المخاطر‬ ‫وإدارة‬
                    ‫ذلك‬ ‫ويأتي‬ ‫فاعليته‪.‬‬ ‫ومدى‬ ‫الداخلية‬ ‫الرقابة‬ ‫لنظام‬ ‫مستمر‬ ‫تقويم‬ ‫توفير‬ ‫من‬ ‫يمكن‬ ‫بما‬ ‫الداخلية‬ ‫الرقابة‬
                    ‫أداء‬ ‫وفاعلية‬ ‫تصميم‬ ‫مة‬ ‫س‬ ‫مدى‬ ‫عن‬ ‫معقول‬ ‫اقتناع‬ ‫على‬ ‫الحصول‬ ‫في‬ ‫دارة‬ ‫ا‬ ‫مجلس‬ ‫أهداف‬ ‫ضمن‬
                    ‫ال‬ ‫في‬ ‫الداخلية‬ ‫الرقابة‬ ‫نظام‬
                    ‫المالي‬ ‫العام‬ ‫ل‬ ‫وخ‬ ‫السبيل‬ ‫هذا‬ ‫في‬ ‫المراجعة‬ ‫لجنة‬ ‫عقدت‬ ‫حيث‬ ‫كة‪،‬‬
                    ‫على‬ ‫ومنها‬ ‫اللجنة‬ ‫بأعمال‬ ‫الصلة‬ ‫ذات‬ ‫الموضوعات‬ ‫من‬ ‫عدداً‬ ‫لها‬ ‫خ‬ ‫ناقشت‬ ‫اجتماعات‬ ‫سبعة‬ ‫‪2019‬م‬
                    ‫ال‬ ‫في‬ ‫عمال‬ ‫ا‬ ‫وحدات‬ ‫ومراجعة‬ ‫ستثمارات‬ ‫وا‬ ‫المالية‬ ‫القوائم‬ ‫مراجعة‬ ‫المثال‬ ‫سبيل‬
                    ‫الب‬ ‫والموارد‬ ‫والتنظيمية‬ ‫ستراتيجية‬ ‫ا‬ ‫الشؤون‬
                    ‫وكذلك‬ ‫كة‬
                    ‫تقنية‬ ‫أنظمة‬ ‫مراجعة‬ ‫إلى‬ ‫إضافة‬ ‫والمشتريات‪،‬‬ ‫ية‬
                    ‫من‬ ‫ذلك‬ ‫غير‬ ‫إلى‬ ‫الداخلية‪،‬‬ ‫والمراجعة‬ ‫التنفيذية‬ ‫دارة‬ ‫ا‬ ‫في‬ ‫المسؤولين‬ ‫بحضور‬ ‫وذلك‬ ‫المعلومات‪،‬‬
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="content-wrapper ">
              <div class="left">
               <div class="screentop_para nomargin">
                  <h1>
                  <span class="h1 colr_purple"> ‫
                  ‫المراجعة‬
                  </span> 
                  </h1>
                  <h1>
                  <span class="h1 colr_white bk_purple"  style="padding: 5px 15px 5px 150px;"> 
                  ‫الداخلية‬
                  </span>
                  </h1>
                </div>
                 <p class="content_para margint50 col8">
                  ‫‫إضافة‬ ‫بغرض‬ ‫وموضوعية‬ ‫لية‬ ‫باستق‬ ‫واستشارية‬ ‫تأكيدية‬ ‫خدمات‬ ‫كة‬ ‫ال‬ ‫في‬ ‫الداخلية‬ ‫المراجعة‬ ‫تقدم‬
                  ‫كة‬ ‫ال‬ ‫الداخلية‬ ‫المراجعة‬ ‫وتساعد‬ ‫العليا‪.‬‬ ‫كة‬ ‫ال‬ ‫أهداف‬ ‫وتحقيق‬ ‫العمليات‬ ‫وتحسين‬ ‫قيمة‬ ‫‪st‬‬ ‫تحقيق‬ ‫في‬
                  ‫وقد‬ ‫الداخلية‪.‬‬ ‫والرقابة‬ ‫المخاطر‬ ‫إدارة‬ ‫فاعلية‬ ‫وتحسين‬ ‫لتقويم‬ ‫منتظم‬ ‫مدخل‬ ‫تبني‬ ‫ل‬ ‫خ‬ ‫من‬ ‫أهدافها‬
                  ‫السنوية‬ ‫المراجعة‬ ‫لخطة‬ ‫وفقاً‬ ‫والخاصة‬ ‫الدورية‬ ‫المراجعة‬ ‫عمليات‬ ‫من‬ ‫العديد‬ ‫الداخلية‬ ‫المراجعة‬ ‫نفّذت‬
                  ‫الداخلية‬ ‫الرقابة‬ ‫وكفاءة‬ ‫فاعلية‬ ‫بشأن‬ ‫زمة‬ ‫ال‬ ‫التأكيدات‬ ‫إعطاء‬ ‫بهدف‬ ‫المراجعة‬ ‫لجنة‬ ‫قبل‬ ‫من‬ ‫المعتمدة‬
                  ‫خطة‬ ‫وشملت‬ ‫العالية‪.‬‬ ‫المخاطر‬ ‫ذات‬ ‫والوظائف‬ ‫نشطة‬ ‫ا‬ ‫على‬ ‫التركيز‬ ‫مع‬ ‫‪،‬‬ ‫كة‬ ‫ال‬ ‫في‬ ‫المخاطر‬ ‫وإدارة‬
                  ‫والشؤون‬ ‫بالمشتريات‬ ‫المتعلقة‬ ‫جراءات‬ ‫وا‬ ‫السياسات‬ ‫مراجعة‬ ‫المثال‬ ‫سبيل‬ ‫على‬ ‫السنوية‬ ‫المراجعة‬
                  ‫تقدم‬ ‫كما‬ ‫المالي‪،‬‬ ‫القطاع‬ ‫إلى‬ ‫إضافة‬ ‫عمال‬ ‫ا‬ ‫ووحدات‬ ‫المعلومات‬ ‫وتقنية‬ ‫ية‬ ‫الب‬ ‫والموارد‬ ‫ستراتيجية‬ ‫ا‬
                  ‫وفاعلية‬ ‫كفاءة‬ ‫تحسين‬ ‫في‬ ‫التنفيذية‬ ‫دارة‬ ‫ا‬ ‫مع‬ ‫سهام‬ ‫ا‬ ‫بغرض‬ ‫استشارية‬ ‫خدمات‬ ‫الداخلية‬ ‫المراجعة‬
                  ‫مراجعة‬ ‫في‬ ‫سهام‬ ‫ا‬ ‫إلى‬ ‫إضافة‬ ‫يرادات‪،‬‬ ‫ا‬ ‫فقد‬ ‫من‬ ‫والحد‬ ‫التكاليف‬ ‫وخفض‬ ‫المختلفة‪،‬‬ ‫كة‬ ‫ال‬ ‫عمليات‬
                  ‫المراجعة‬ ‫عمليات‬ ‫بأن‬ ‫علماً‬ ‫الخارجية‪،‬‬ ‫الرقابية‬ ‫الجهات‬ ‫أعمال‬ ‫وتنسيق‬ ‫والسنوية‬ ‫ولية‬ ‫ا‬ ‫المالية‬ ‫القوائم‬
                  ‫كما‬ ‫أعمالها‪.‬‬ ‫تنفيذ‬ ‫مواصلة‬ ‫في‬ ‫كة‬ ‫ال‬ ‫قدرة‬ ‫في‬ ‫تؤثر‬ ‫جوهرية‬ ‫ملحوظات‬ ‫وجود‬ ‫تظهر‬ ‫لم‬ ‫إليها‬ ‫المشار‬
                  ‫خلص‬ ‫الذي‬ ‫الداخلية‬ ‫المراجعة‬ ‫نضج‬ ‫لمستوى‬ ‫المستقل‬ ‫الخارجي‬ ‫التقييم‬ ‫نتائج‬ ‫المراجعة‬ ‫لجنة‬ ‫استعرضت‬
                 </p>
              </div>
              <div class="right marginr50">
                <div class="img-wrap">
                 <img src="img/guy_tab1.jpg">
                </div>
              </div>
          </div>

          <div class="sp_wrap cwrapper">
            <div class="screentop_para">
              <h1>
                <span class="h1 colr_purple"> ‫
                  ‫سجل‬
                </span> 
              </h1>
              <h1>
                <span class="h1 colr_white bk_purple" style="padding: 5px 15px 5px 150px;"> 
                ‫‫المساهمين‬
                </span>
            </h1>
            </div>
            <div class="content-wrapper sp2_row">
              <div class="left">
                <div class="img-wrap">
                  <img src="img/guy_tab1.jpg">
                </div>
              </div>
              <div class="right pink_border nopadding">
                <div class="box_center_content">
                  <p class="content_para" style="text-align: right;">
                  ‫من‬ ‫المساهمين‬ ‫لسجل‬ ‫مرة‬ ‫)‪(13‬‬ ‫الطلب‬ ‫تم‬
                  ‫التالية‬ ‫غراض‬ ‫ل‬ ‫وذلك‬ ‫‪2019‬م‬ ‫عام‬ ‫‪:‬‬
                  <br><br><br>
                  ‫شهريا‬ ‫المساهمين‬ ‫سجل‬ ‫تحديث‬ ‫‪.‬‬
                  ‫•‬
                  <br><br><br>
                  ‫سنوية‬ ‫الربع‬ ‫رباح‬ ‫ا‬ ‫توزيع‬ ‫‪.‬‬
                  <br><br><br>
                  ‫العمومية‬ ‫الجمعية‬ ‫عقد‬ ‫‪.‬‬
                  ‫م‬
                  ‫‪1‬‬
                  ‫‪2‬‬
                  ‫‪3‬‬
                  ‫‪4‬‬
                  ‫ل‬ ‫خ‬ ‫المالية‬ ‫وراق‬ ‫ا‬ ‫إيداع‬ ‫مركز‬ ‫كة‬
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="tabular_data margint50">
                <div class="c_row first bk_purple nomargin">
                   <div>م</div>
                    <div>‫المساهمين‬ ‫سجل‬ ‫طلب‬ ‫تاريخ‬</div>
                    <div>‫‫المساهمين‬ ‫سجل‬ ‫طلب‬ ‫تاريخ‬</div>
                </div>
                <div class="tabular_data_inner">
                 
                  <div class="c_row">
                    <div>1</div>
                    <div></div>
                    <div></div>
                  </div>
                  <div class="c_row">
                    <div>2</div>
                    <div></div>
                    <div></div>
                  </div>
                  <div class="c_row">
                    <div>3</div>
                    <div></div>
                    <div></div>
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