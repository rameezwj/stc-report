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
                ‫توزيع الأرباح والمكافآت
              </span> 
            </h1>
            <h1>
              <span class="h1 colr_purple"> 
               ‫ وتوصيات مجلس الإدارة 
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
                  ‫توزيعات الأرباح 
                  </h5>
                  <p class="content_para">
                  أعلنت الشركة عن توزيع أرباح نقدية على مساهمي الشركة عن الربع الرابع من عام 2019م، بمبلغ مقداره 2,000 مليون ريال سعودي بواقع 1 ريال سعودي عن كل سهم، علماً أن الشركة خلال العام قد قامت بتوزيع أرباح نقدية على مساهمي الشركة عن الربع الأول والثاني والثالث من العام 2019م بمبلغ وقدره 2,000 مليون ريال سعودي عن كل ربع بواقع 1 ريال سعودي عن كل سهم، حسب سياسة توزيع الإرباح التي أقرها مجلس إدارة شركة الاتصالات السعوديـة في اجتماعه المنعقد بتاريخ 09/04/1440هـ (الموافق 16/12/2018م)، والمعتمدة من الجمعية العامة المنعقدة خلال عام 2019م. (لمزيد من الإيضاح نرجو الإطلاع على فقرة سياسة توزيع الإرباح).                  ‫‫
                  <br>
                  ‫‫وبذلك يصبح إجمالي الأرباح الموزعة بعد موافقة الجمعية عن عام 2019 م مبلغ 4 ريال سعودي للسهم (2018م: 6 ريال سعودي للسهم). و فيما يلي بيان للتوزيعات عن عام 2019 م:
                  </p>
              </div>
            </div>
          </div>
          <!-- <div class="tabular_data margint50">
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
          </div> -->
          <div class="ctable_wrapper">
            <table class="stc_table">
              <tbody>
                <tr>
                  <td>
                    <p><span>البيان</span></p>
                  </td>
                  <td>
                    <p><span>إجمالي التوزيع (ملايين الريالات)</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>نصيب السهم (ريال)</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>تاريخ الإعلان</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>تاريخ الاستحقاق</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>تاريخ التوزيع</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>توزيعات نقدية عن الربع الأول 2019م</span></p>
                  </td>
                  <td>
                    <p><span>2,000</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>1</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>22/4/2019م</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>5/5/2019م</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>27/5/2019م</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>توزيعات نقدية عن الربع الثاني 2019م</span></p>
                  </td>
                  <td>
                    <p><span>2,000</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>1</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>22/7/2019م</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>29/7/2019م</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>26/8/2019م</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>توزيعات نقدية عن الربع الثالث 2019م</span></p>
                  </td>
                  <td>
                    <p><span>2,000</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>1</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>22/10/2019م</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>29/10/2019م</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>19/11/2019م</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>توزيعات نقدية عن الربع الرابع 2019م</span></p>
                  </td>
                  <td>
                    <p><span>2,000</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>1</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>22/1/2020م</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>سيحدد لاحقاً</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span> &nbsp; &nbsp; &nbsp; &nbsp; سيحدد لاحقاً</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>إجمالي التوزيعات</span></p>
                  </td>
                  <td>
                    <p><span>8,000</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>4</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
              </tbody>
            </table>
          </div>

          <div class="sp_wrap margint50">
              <div class="content-wrapper inner-wrapper c-row-reverse sp_row">
                <div class="right marginr50" style="position: relative; width: 50%;">
                  <h5 class="h5 colr_purple">
                  مكافآت وتعويضات أعضاء مجلس الإدارة وخمسة من كبار التنفيذيين
                   </h5>
                   <p class="content_para">
                    ‫وافقت الجمعية العامة غير العادية للشركة المنعقدة بتاريخ 19شعبان 1440هـ (الموافق 24 أبريل 2019م)، على تعديل سياسة ترشيح أعضاء مجلس الإدارة ومكافآتهم، ومكافآت اللجان المنبثقة عن المجلس، ومكافآت الإدارة التنفيذية، وعلى تعديل لائحة عمل لجنة المراجعة، وعلى مهامها وضوابط عملها، ومكافآت أعضاء لجنة المراجعة، حيث يحصل عضو مجلس الإدارة على مكافأة بقيمة (200.000) ريال، نظير عضويته في المجلس، ويحصل على مكافأة بقيمة (200.000) ريال، نظير عضويته في لجان المجلس، ويحصل عضو لجنة المراجعة على مكافأة بقيمة (150.000) ريال، نظير عضويته في لجنة المراجعة، كما يحصل العضو الخارجي في اللجان الأخرى على مكافأة بقيمة (100.000) ريال نظير عضويته. كما يحصل عضو مجلس الإدارة وعضو اللجان الأخرى على بدل حضور جلسات المجلس واللجان بقيمة (5.000) ريال عن كل جلسة.
                    <br>
                    <br>
                   وبلغت مكافآت وبدلات أعضاء مجلس إدارة stc عن حضورهم لجلسات المجلس ولجانه خلال السنة المنتهية في 2019م، ومكآفات وبدلات أعضاء اللجان الخارجيين عن حضورهم لجلسات اللجان، إضافة إلى أكبر خمسة تنفيذيين في stc بما فيهم الرئيس التنفيذي، والرئيس التنفيذي للمالية خلال عام 2019م وفق الجداول التالية:
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

          <!-- <div class="tabular_data2 margint50">
            <h5 class="h5 colr_purple">
            ‫  مكافآت وتعويضات أعضاء مجلس الإدارة للدورة السابعة لعام 2019م 
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
          </div> -->

          <div class="ctable_wrapper">
            <table class="stc_table">
              <tbody>
                <tr>
                  <td rowspan="2">
                    <p><span>(ريال)</span></p>
                  </td>
                  <td colspan="6">
                    <p><span>المكافآت الثابتة</span></p>
                  </td>
                  <td colspan="6">
                    <p><span>المكافآت المتغيرة</span></p>
                  </td>
                  <td rowspan="2">
                    <p><span>مكافأة</span></p>
                    <p><span>نهاية</span></p>
                    <p><span>الخدمة</span></p>
                  </td>
                  <td rowspan="2">
                    <p><span>المجموع</span></p>
                    <p><span>الكلي</span></p>
                  </td>
                  <td rowspan="2">
                    <p><span>بدل المصروفات</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>مبلغ معين</span></p>
                  </td>
                  <td>
                    <p><span>بدل حضور جلسات المجلس</span></p>
                  </td>
                  <td>
                    <p><span>مزايا عينية</span></p>
                  </td>
                  <td>
                    <p><span>مكافآت الأعمال الفنية والإدارية&nbsp;</span></p>
                    <p><span>والاستشارية</span></p>
                  </td>
                  <td>
                    <p><span>مكافأة رئيس المجلس أو العضو المنتدب</span></p>
                    <p><span>أو أمين السر إن كان من الأعضاء</span></p>
                  </td>
                  <td>
                    <p><span>المجموع</span></p>
                  </td>
                  <td>
                    <p><span>نسبة من الأرباح</span></p>
                  </td>
                  <td>
                    <p><span>مكافأت دورية</span></p>
                  </td>
                  <td>
                    <p><span>خطط تحفيزية قصيرة الأجل</span></p>
                  </td>
                  <td>
                    <p><span>خطط تحفيزية طويلة الأجل</span></p>
                  </td>
                  <td>
                    <p><span>الاسهم الممنوحة</span></p>
                  </td>
                  <td>
                    <p><span>المجموع</span></p>
                  </td>
                </tr>
                <tr>
                  <td colspan="16">
                    <p><span>أولاً : الأعضاء المستقلين</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>1- صاحب السمو الملكي الأمير/ محمد بن خالد العبدالله الفيصل</span></p>
                  </td>
                  <td>
                    <p><span>200,000</span></p>
                  </td>
                  <td>
                    <p><span>25,000</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>225,000</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>-</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>225,000</span></p>
                  </td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>
                    <p><span>2- الدكتور/ إبراهيم بن عبدالرحمن القاضي</span></p>
                  </td>
                  <td>
                    <p><span>200,000</span></p>
                  </td>
                  <td>
                    <p><span>20,000</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>220,000</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>-</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>220,000</span></p>
                  </td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>
                    <p><span>3- الأستاذ/ أسامة ياسين الخياري</span></p>
                  </td>
                  <td>
                    <p><span>200,000</span></p>
                  </td>
                  <td>
                    <p><span>25,000</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>225,000</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>-</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>225,000</span></p>
                  </td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>
                    <p><span>المجموع</span></p>
                  </td>
                  <td>
                    <p><span>600,000</span></p>
                  </td>
                  <td>
                    <p><span>70,000</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>670,000</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>-</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>670,000</span></p>
                  </td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="16">
                    <p><span>ثانياً: الأعضاء غير التنفيذيين</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>1- الدكتور/ خالد بن حسين بياري *</span></p>
                  </td>
                  <td>
                    <p><span>200,000</span></p>
                  </td>
                  <td>
                    <p><span>25,000</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>225,000</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>-</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>225,000</span></p>
                  </td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>
                    <p><span>2- الأستاذ/ محمد بن طلال النحاس</span></p>
                  </td>
                  <td>
                    <p><span>200,000</span></p>
                  </td>
                  <td>
                    <p><span>25,000</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>225,000</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>-</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>225,000</span></p>
                  </td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>
                    <p><span>3- الأستاذ/ راشد بن ابراهيم شريف**</span></p>
                  </td>
                  <td>
                    <p><span>200,000</span></p>
                  </td>
                  <td>
                    <p><span>25,000</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>225,000</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>-</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>225,000</span></p>
                  </td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>
                    <p><span>4- الأستاذ/ سانجاي كابور*</span></p>
                  </td>
                  <td>
                    <p><span>200,000</span></p>
                  </td>
                  <td>
                    <p><span>25,000</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>225,000</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>-</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>225,000</span></p>
                  </td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>
                    <p><span>5- الأستاذ/ روي تشـســنـــــــــــات *&nbsp;</span></p>
                  </td>
                  <td>
                    <p><span>200,000</span></p>
                  </td>
                  <td>
                    <p><span>25,000</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>225,000</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>-</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>225,000</span></p>
                  </td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>
                    <p><span>6- الأستاذ/ احمد بن محمد العمران</span></p>
                  </td>
                  <td>
                    <p><span>200,000</span></p>
                  </td>
                  <td>
                    <p><span>25,000</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>225,000</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>-</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>225,000</span></p>
                  </td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>
                    <p><span>المجموع</span></p>
                  </td>
                  <td>
                    <p><span>1,200,000</span></p>
                  </td>
                  <td>
                    <p><span>150,000</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>1,350,000</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>-</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>1,350,000</span></p>
                  </td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="16">
                    <p><span>ثالثاً : الأعضاء التنفيذيون</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>لايوجد</span></p>
                  </td>
                  <td>
                    <p><span>-</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>-</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>-</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>-</span></p>
                  </td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>
                    <p><span>المجموع&nbsp;</span></p>
                  </td>
                  <td>
                    <p><span>-</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>-</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>-</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>-</span></p>
                  </td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>
                    <p><span>المجموع الكلي</span></p>
                  </td>
                  <td>
                    <p><span>1,800,000</span></p>
                  </td>
                  <td>
                    <p><span>220,000</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>2,020,000</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>-</span></p>
                  </td>
                  <td>&nbsp;</td>
                  <td>
                    <p><span>2,020,000</span></p>
                  </td>
                  <td>&nbsp;</td>
                </tr>
              </tbody>
            </table>
          </div>



          <!-- <div class="tabular_data2 margint50">
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
          </div> -->

          <div class="ctable_wrapper">
            <h5 class="h5 colr_purple">
              (مكافآت أعضاء اللجان في الدورة السابعة لعام 2019م)
            </h5>
            <table class="stc_table">
              <tbody>
                <tr>
                  <td>
                    <p><span>الاسم</span></p>
                  </td>
                  <td>
                    <p><span>اللجان</span></p>
                  </td>
                  <td>
                    <p><span>المكافآت الثابتة (عدا بدل حضور الجلسات)</span></p>
                  </td>
                  <td>
                    <p><span>بدل حضور جلسات</span></p>
                  </td>
                  <td>
                    <p><span>المجموع</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>صاحب السمو الملكي الأمير/ محمد بن خالد العبدالله الفيصل</span></p>
                  </td>
                  <td>
                    <ul>
                      <li><span>التنفيذية</span></li>
                      <li><span>الاستثمار</span></li>
                    </ul>
                  </td>
                  <td>
                    <p><span>200,000</span></p>
                  </td>
                  <td>
                    <p><span>50,000</span></p>
                  </td>
                  <td>
                    <p><span>250,000</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>الدكتور/ خالد بن حسين بياري</span></p>
                  </td>
                  <td>
                    <ul>
                      <li><span>التنفيذية</span></li>
                    </ul>
                  </td>
                  <td>
                    <p><span>200,000</span></p>
                  </td>
                  <td>
                    <p><span>30,000</span></p>
                  </td>
                  <td>
                    <p><span>230,000</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>الأستاذ/ محمد بن طلال النحاس</span></p>
                  </td>
                  <td>
                    <ul>
                      <li><span>الاستثمار</span></li>
                    </ul>
                  </td>
                  <td>
                    <p><span>200,000</span></p>
                  </td>
                  <td>
                    <p><span>20,000</span></p>
                  </td>
                  <td>
                    <p><span>220,000</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>الأستاذ/ راشد بن ابراهيم شريف *</span></p>
                  </td>
                  <td>
                    <ul>
                      <li><span>الاستثمار</span></li>
                    </ul>
                  </td>
                  <td>
                    <p><span>200,000</span></p>
                  </td>
                  <td>
                    <p><span>20,000</span></p>
                  </td>
                  <td>
                    <p><span>220,000</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>الأستاذ/ سانجاي كابور</span></p>
                  </td>
                  <td>
                    <ul>
                      <li><span>التنفيذية</span></li>
                    </ul>
                  </td>
                  <td>
                    <p><span>200,000</span></p>
                  </td>
                  <td>
                    <p><span>30,000</span></p>
                  </td>
                  <td>
                    <p><span>230,000</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>الأستاذ/ روي تشـســنـــــــــــات</span></p>
                  </td>
                  <td>
                    <ul>
                      <li><span>الاستثمار</span></li>
                    </ul>
                  </td>
                  <td>
                    <p><span>200,000</span></p>
                  </td>
                  <td>
                    <p><span>20,000</span></p>
                  </td>
                  <td>
                    <p><span>220,000</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>الدكتور/ إبراهيم بن عبدالرحمن القاضي</span></p>
                  </td>
                  <td>
                    <ul>
                      <li><span>التنفيذية</span></li>
                      <li><span>المراجعة</span></li>
                    </ul>
                  </td>
                  <td>
                    <p><span>300,000</span></p>
                  </td>
                  <td>
                    <p><span>65,000</span></p>
                  </td>
                  <td>
                    <p><span>365,000</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>الأستاذ/ أسامة بن ياسين الخياري</span></p>
                  </td>
                  <td>
                    <ul>
                      <li><span>الترشيحات والمكافآت</span></li>
                    </ul>
                  </td>
                  <td>
                    <p><span>200,000</span></p>
                  </td>
                  <td>
                    <p><span>20,000</span></p>
                  </td>
                  <td>
                    <p><span>220,000</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>الأستاذ/ احمد بن محمد العمران</span></p>
                  </td>
                  <td>
                    <ul>
                      <li><span>الترشيحات والمكافآت</span></li>
                    </ul>
                  </td>
                  <td>
                    <p><span>200,000</span></p>
                  </td>
                  <td>
                    <p><span>20,000</span></p>
                  </td>
                  <td>
                    <p><span>220,000</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>الدكتور خالد بن داود الفداغ</span></p>
                  </td>
                  <td>
                    <ul>
                      <li><span>المراجعة (عضو خارجي) (مستقيل)</span></li>
                    </ul>
                  </td>
                  <td>
                    <p><span>100.000</span></p>
                  </td>
                  <td>
                    <p><span>25.000</span></p>
                  </td>
                  <td>
                    <p><span>125.000</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>الأستاذ/ خالـد بن عبدالله العـنــقــري</span></p>
                  </td>
                  <td>
                    <ul>
                      <li><span>المراجعة (عضو خارجي)</span></li>
                    </ul>
                  </td>
                  <td>
                    <p><span>100,000</span></p>
                  </td>
                  <td>
                    <p><span>35,000</span></p>
                  </td>
                  <td>
                    <p><span>135,000</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>الأستاذ/ مـدحــت بن فــريـد تــوفــيـق</span></p>
                  </td>
                  <td>
                    <ul>
                      <li><span>المراجعة (عضو خارجي)</span></li>
                    </ul>
                  </td>
                  <td>
                    <p><span>100,000</span></p>
                  </td>
                  <td>
                    <p><span>35,000</span></p>
                  </td>
                  <td>
                    <p><span>135,000</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>الأستاذ/ عمـرو بــن خـالـد كـردي</span></p>
                  </td>
                  <td>
                    <ul>
                      <li><span>المراجعة (عضو خارجي)</span></li>
                    </ul>
                  </td>
                  <td>
                    <p><span>-</span></p>
                  </td>
                  <td>
                    <p><span>10,000</span></p>
                  </td>
                  <td>
                    <p><span>10,000</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>الأستاذ/ طـارق بن عبدالعزيز الـرخيمي</span></p>
                  </td>
                  <td>
                    <ul>
                      <li><span>المراجعة (عضو خارجي)</span></li>
                    </ul>
                  </td>
                  <td>
                    <p><span>-</span></p>
                  </td>
                  <td>
                    <p><span>10,000</span></p>
                  </td>
                  <td>
                    <p><span>10,000</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>الأستاذ/ سلطان بن عبدالملك آل الشيخ *</span></p>
                  </td>
                  <td>
                    <ul>
                      <li><span>التنفيذية (عضو خارجي)</span></li>
                    </ul>
                  </td>
                  <td>
                    <p><span>100,000</span></p>
                  </td>
                  <td>
                    <p><span>30,000</span></p>
                  </td>
                  <td>
                    <p><span>130,000</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>المهندس/ ناصر بن سليمان الناصر</span></p>
                  </td>
                  <td>
                    <ul>
                      <li><span>التنفيذية (عضو خارجي)</span></li>
                    </ul>
                  </td>
                  <td>
                    <p><span>100,000</span></p>
                  </td>
                  <td>
                    <p><span>30,000</span></p>
                  </td>
                  <td>
                    <p><span>130,000</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>الأستاذ/ جون براند</span></p>
                  </td>
                  <td>
                    <ul>
                      <li><span>الترشيحات والمكافآت (عضو خارجي)</span></li>
                    </ul>
                  </td>
                  <td>
                    <p><span>100,000</span></p>
                  </td>
                  <td>
                    <p><span>20,000</span></p>
                  </td>
                  <td>
                    <p><span>120,000</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>الأستاذة/ هدى بنت محمد الغصن</span></p>
                  </td>
                  <td>
                    <ul>
                      <li><span>الترشيحات والمكافآت (عضو خارجي)</span></li>
                    </ul>
                  </td>
                  <td>
                    <p><span>100,000</span></p>
                  </td>
                  <td>
                    <p><span>20,000</span></p>
                  </td>
                  <td>
                    <p><span>120,000</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>الأستاذ/ مازن بن أحمد الجبير</span></p>
                  </td>
                  <td>
                    <ul>
                      <li><span>الاستثمار (عضو خارجي)</span></li>
                    </ul>
                  </td>
                  <td>
                    <p><span>100,000</span></p>
                  </td>
                  <td>
                    <p><span>20,000</span></p>
                  </td>
                  <td>
                    <p><span>120,000</span></p>
                  </td>
                </tr>
                <tr>
                  <td colspan="2">
                    <p><span>المجموع</span></p>
                  </td>
                  <td>
                    <p><span>2,700,000</span></p>
                  </td>
                  <td>
                    <p><span>510,000</span></p>
                  </td>
                  <td>
                    <p><span>3,210,000</span></p>
                  </td>
                </tr>
              </tbody>
            </table>
            <p class="content_para margint50">
               ‫* تورد جميع المكافآت وبدلات حضور الجلسات للمجلس واللجان لممثلي الصندوق العاملين في الصندوق إلى الصندوق.
              </p>
          </div>

          <div class="ctable_wrapper">
            <h5 class="h5 colr_purple">
             مكافآت خمسة من كبار التنفيذيين (من ضمنهم الرئيس التنفيذي والرئيس التنفيذي للمالية خلال عام 2019م)
            </h5>
            <table class="stc_table">
              <tbody>
                <tr>
                  <td rowspan="2">
                    <p><span>(ريال)</span></p>
                  </td>
                  <td colspan="4">
                    <p><span>المكافآت الثابتة</span></p>
                  </td>
                  <td colspan="6">
                    <p><span>المكافآت المتغيرة</span></p>
                  </td>
                  <td rowspan="2">
                    <p><span>مكافآت نهاية الخدمة</span></p>
                  </td>
                  <td rowspan="2">
                    <p><span>مجموع مكافآت التنفيذيين عن المجلس إن وجدت</span></p>
                  </td>
                  <td rowspan="2">
                    <p><span>المجموع الكلي</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>رواتب</span></p>
                  </td>
                  <td>
                    <p><span>بدلات</span></p>
                  </td>
                  <td>
                    <p><span>مزايا عينية</span></p>
                  </td>
                  <td>
                    <p><span>المجموع</span></p>
                  </td>
                  <td>
                    <p><span>مكافآت دورية</span></p>
                  </td>
                  <td>
                    <p><span>أرباح</span></p>
                  </td>
                  <td>
                    <p><span>خطط تحفيزية قصيرة الأجل</span></p>
                  </td>
                  <td>
                    <p><span>خطط تحفيزية طويلة الأجل</span></p>
                  </td>
                  <td>
                    <p><span>الأسهم الممنوحة (يتم إدخال القيمة)</span></p>
                  </td>
                  <td>
                    <p><span>المجموع</span></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><span>المجموع</span></p>
                  </td>
                  <td>
                    <p><span>12,368,440.59</span></p>
                  </td>
                  <td>
                    <p><span>4,713,042.62</span></p>
                  </td>
                  <td>
                    <p><span>-</span></p>
                  </td>
                  <td>
                    <p><span>17,081,483.21</span></p>
                  </td>
                  <td>
                    <p><span>-</span></p>
                  </td>
                  <td>
                    <p><span>-</span></p>
                  </td>
                  <td>
                    <p><span>21,030,972.00</span></p>
                  </td>
                  <td>
                    <p><span>-</span></p>
                  </td>
                  <td>
                    <p><span>-</span></p>
                  </td>
                  <td>
                    <p><span>21,030,972.00</span></p>
                  </td>
                  <td>
                    <p><span>-</span></p>
                  </td>
                  <td>
                    <p><span>1,259,452.05</span></p>
                  </td>
                  <td>
                    <p><span>39,371,907.26</span></p>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>


          <!-- <div class="tabular_data margint100">
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
          </div> -->


          <div class="sp_wrap margint50">
              <div class="content-wrapper inner-wrapper c-row-reverse sp_row">
              <div class="right marginr50" style="position: relative; width: 50%;">
                 <h5 class="h5 colr_purple">الأحداث اللاحقة </h5>
                 <br><br>
                 <p class="content_para">
                  ‫بتاريخ 2 يناير 2020 إستكملت شركة أوبر عملية الإستحواذ على أصول شركة كريم. ومن المتوقع تسجيل أثر هذا الاستحواذ على نتائج المجموعة من بيع إستثمارها المباشر في شركة كريم خلال الربع الأول من عام 2020م.
                  <br>
                  <br>
                  ‫‫بتاريخ 29 يناير 2020 تم توقيع اتفاقية مذكرة تفاهم غير ملزمة، مع مجموعة "فودافون العالمية" تستحوذ بموجبها الشركة على 55% من أسهم شركة فودافون مصر وذلك بقيمة تبلغ حوالي 2,392 مليون دولار أمريكي (ما يعادل حوالي 8,970 مليون ريال سعودي) على ان يتم تحديد المقابل المالي النهائي عند التوقيع على الاتفاقيات النهائية.
                </p>
                <h5 class="h5 colr_purple">إقرارات مجلس الإدارة</h5>


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
                       التوصيات       
                    </h5>
                    <p class="content_para">
                      ‫‫يوصي مجلس إدارة الشركة الجمعية العامة للشركة بمايلي :
                      <br>
                      <br>
                      ‫‫التصويت بالموافقة على تقرير مجلس الإدارة عن السنة المالية المنتهية في 31/12/2019م.
                      <br><br>
                      ‫التصويت بالموافقة على تقرير مراجع حسابات الشركة للسنة المالية المنتهية في 31/12/2019م. 
                      <br><br>
                      ‫‪التصويت بالموافقة على القوائم المالية الموحدة للشركة للسنة المالية المنتهية في 31/12/2019م.
                      <br><br>
                      ‫التصويت بالموافقة على قرار مجلس الإدارة بتعيين الدكتور/ عمــــــرو بــن خــــــالـــــــــد كـــــــــردي، والمهندس/ طـــارق بن عبـــــدالعزيز الـــــرخيمي (عضوين خارجيين) عضوين في لجنة المراجعة ابتداءً من تاريخ  18/9/2019م وحتى نهاية فترة عمل اللجنة الحالية بتاريخ 27/4/2021م،  وذلك بدلاً من عضو اللجنة السابق الدكتور/ خالد بن داود الفداغ (عضو خارجي) على أن يسري التعيين ابتداءً من تاريخ قرار التوصية الصادر في 19/1/1441هـ (الموافق 18/9/2019م)،  ويأتي هذا التعيين وفقاً للائحة عمل لجنة المراجعة. 
                      <br><br>
                      ‫التصويت بالموافقة على شراء الشركة عدداً من أسهمها وبحد أقصى 5.5 مليون سهم، وبمبلغ لا يتجاوز 300 مليون ريال سعودي، وذلك بغرض تخصيصها لبرنامج  أسهم حوافز الموظفين، على أن يتم تمويل عملية الشراء للأسهم من موارد الشركة الذاتية، وتفويض المجلس أو من يفوضه بإتمام عملية الشراء على مرحلة واحد أو عدة مراحل خلال فترة أقصاها (8 أشهر) من تاريخ قرار الجمعية العامة غير العادية وتحديد شروط البرنامج وتنفيذه أو التعديل عليه متى ما دعت الحاجة لذلك.
                      <br><br>
                      ‫التصويت بالموافقة على المكافآت والتعويضات المدفوعة لأعضاء مجلس الإدارة نظير عضويتهم والمضمنة في تقرير مجلس الإدارة للفترة من 1 يناير 2019م وحتى 31 ديسمبر 2019م.
                    </p>
                  </div>
                </div>
                <div class="right marginr50" style="width: 50%;" >
                  <div class="col8">
                    <h5 class="h5 colr_purple">
                        إقرارات مجلس الإدارة             
                    </h5>
                    <p class="content_para">
                      ‫‫يقر مجلس إدارة شركة الاتصالات السعودية بما يلي:
                      <br>
                      <br>
                      ‫‫
                      ‫أن سجلات الحسابات أعدت بالشكل الصحيح.
                      <br><br>
                      ‫أن نظام الرقابة الداخلية أعد على أسس سليمة ونُفذ بفاعلية.  
                      <br><br>
                      ‫‪أنه لا يوجد لدى المجلس أي شك يذكر بشأن قدرة الشركة على مواصلة نشاطها.
                      <br><br>
                      ‫تم إعداد القوائم المالية الموحدة للسنة المنتهية في 31 ديسمبر 2019م وفقاً للمعايير الدولية للتقرير المالي المعتمدة في المملكة العربية السعودية والمعايير و الإصدارات الأخرى المعتمدة من الهيئة السعودية للمحاسبين القانونيين.
                      <br><br>
                      لم تُبلّغ الشركة عن أي شخص طبيعي أو اعتباري تملك (5%) أو أكثر من الأسهم المصدرة للشركة خلال عام 2019م.
                      <br><br>
                      لا يوجد أي أدوات دين قابلة للتحويل إلى أسهم أو أي حقوق خيار أو مذكرات حق اكتتاب أو حقوق مشابهة أصدرتها أو منحتها الشركة خلال عام 2019م.
                      <br><br>
                      ‫لا يوجد أي استرداد أو شراء أو إلغاء قامت به الشركة خلال عام 2019م لأي أدوات دين قابلة للاسترداد.
                      <br><br>
                      ‫لا يوجد أي ترتيبات أو اتفاق تنازل بموجبه أحد أعضاء مجلس إدارة الشركة أو أحد كبار التنفيذيين عن أي راتب أو تعويض.
                      <br><br>
                      ‫لا يوجد أي ترتيبات أو اتفاق تنازل بموجبه أحد مساهمي الشركة عن أي حقوق في الأرباح.
                      <br><br>
                      ‫لا يوجد أي عقد تكون الشركة طرفاً فيه وتوجد أو كانت توجد فيه مصلحة جوهرية لأحد أعضاء مجلس الإدارة أو الرئيس التنفيذي أو الرئيس التنفيذي للمالية أو لأي شخص ذي علاقة بأي منهم.
                      <br><br>
                      لم تقدم الشركة قرضاً نقدياً من أي نوع لأعضاء مجلس إدارتها أو ضمنت أي قرض عقده واحد منهم مع غيره.
                      <br><br>
                      لا يوجد أي حقوق خيار أو حقوق اكتتاب تعود لأعضاء مجلس الإدارة أو كبار التنفيذيين أو أزواجهم أو أولادهم القصر. 
                      <br><br>
                      إن المراجع الخارجي للشركة قد أبدى رأيه دون تحفظ على القوائم المالية الموحدة لعام 2019م.
                      <br><br>
                      لا يوجد توصيات من لجنة المراجعة يوجد بينها تعارض وبين قرارات مجلس الإدارة، أو رفض المجلس الأخذ بها بشأن تعيين مراجع حسابات الشركة وعزله وتحديد أتعابه وتقييم أدائه أو تعيين المراجع الداخلي.
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