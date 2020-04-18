<!doctype html>
<html class="no-js" lang="">

<?php require_once 'head.php'; ?>
<style type="text/css">
  .human_resource_inner .cwrapper{
      overflow: hidden;
      margin: 100px 0 0 0;
    }
    .human_resource_inner .screentop_para{
      margin: 50px 50px 0 0;
      overflow: hidden;
      display: inline-block;
      position: relative;
    }
    .human_resource_inner .right{ float: right; margin-right: 50px; }
    .human_resource_inner .left{ float: left;  position: relative; }
    .operation_faqs {
      overflow: hidden;
      position: relative;
      width: calc( 100% - 100px );
      margin: 0 auto;
      display: flex;
      flex-wrap: wrap;
    }
    .human_resource_inner .cwrapper .img_wrap{
        min-height: 400px;
        text-align: left;
    }
     .human_resource_inner .cwrapper .img_wrap img{
      height: 100%;
      width: 100%;
      object-fit: cover;
      object-position: top right;
    }
    .operation_faqs .faq_listing{
      float: right;
      width: 40%;
      margin-left: 10%;
    }

    .operations_table{
      width: calc( 100% - 100px );
      overflow: hidden;
      margin: 100px 50px;
    }

    .human_resource_inner .tabular_data{
    /*width:calc( 100% - 100px );*/
      width: 100%;
      margin: 0 auto;
      margin-bottom: 100px;
    }
    .human_resource_inner .tabular_data .c_row{
      display: flex;
    }
    .human_resource_inner .tabular_data .c_row div{
      flex: 1;
      padding: 40px;
      width: calc( 100% / 4 );
      text-align: center;
      color: #4f0f8c;
      border: 1px solid #4f0f8c;
      border-left: none;
      display: inline-flex; 
      word-break: break-word;
      align-items: center;
      border-bottom: none;
      transition: all 0.2s ease-in;
    }
    .human_resource_inner .tabular_data .c_row div:last-child{
      border-left: 1px solid #4f0f8c;
    }
    .human_resource_inner .tabular_data .c_row:last-child div{
      border-bottom: 1px solid #4f0f8c; 
    }
    .human_resource_inner .tabular_data .tabular_data_inner .c_row:hover div:first-child{
      background: #FF375E;
    }
    .human_resource_inner .tabular_data .tabular_data_inner .c_row div:first-child{
      text-align: center;
      justify-content: center;
    }
    .human_resource_inner .tabular_data .tabular_data_inner .c_row:hover div{
      background: #4f0f8c;
      color: #fff;
    }
    .human_resource_inner .tabular_data .c_row.second div  {
        padding: 10px;
      }
     
      .human_resource_inner .tabular_data .c_row.first div{
        border:none;
        border-left: 1px solid #fff;
        color: #fff;
        padding: 20px;
        text-align: center;
        justify-content: center;
      }
      .human_resource_inner .tabular_data .c_row.first div.last{
        padding: 0;
        flex-wrap: wrap;
        border-left: 0;
        flex: 1;
        align-items: initial;
      }
      .human_resource_inner .content-wrapper {
        position: relative;
        /*margin: 50px 0;*/
        display: flex;
        align-items: stretch;
      }
      .human_resource_inner .content-wrapper.c-row-reverse .left{
        width: 50%;
        float: right;
      }
      .human_resource_inner .content-wrapper.c-row-reverse .left .box_center_content{
        float: right;
        width: 90%;
      }
      .human_resource_inner .content-wrapper.c-row-reverse .right{
      }
      .human_resource_inner .content-wrapper:after {
        content: '';
        display: table;
        clear: both;
      }
      .human_resource_inner .content-wrapper .left{
        width: 50%;
        float: left;
        position: relative;
        margin-right: 50px;
        margin-left: 50px;
        padding: 60px;
        order: 2;
        display: inline-flex;
        align-items: center;
      }
      .human_resource_inner .content-wrapper .left .box_center_content{
          /*margin:0 auto;*/
          min-height: 400px;
          /*float: left;*/
      }

      .human_resource_inner .content-wrapper .left .box_center_content p{
        font-size: 18px;
        line-height: 24px;
        font-family: "stc_light";
      }
      .human_resource_inner .content-wrapper .img-wrap{
        height: 400px;
      }
      .human_resource_inner .content-wrapper .img-wrap img{
        height: 100%;
        width: 100%;
        object-fit: cover;
        object-position: top right;
      }
      .human_resource_inner .content-wrapper .right{
        width: 40%;
        float: right;
        position: relative;
        order: 1;
        min-height: 250px;
        align-items: center;
        padding: 30px;
        border: 1px solid #4f0f8c;
      }
     .human_resource_inner .sp_row{
          display: flex;
          margin:50px 0;
     }
     .human_resource_inner .sp_row .left,
     .human_resource_inner .sp_row .right{
      flex: initial;
     }
     .border_purple{
      border: 1px solid #4F0F8C ;
     }
     .human_resource_inner .content-wrapper .left p {
         color: #fff;
         line-height: 40px;
         font-size: 25px;
     }

     .human_resource_inner .content-wrapper .right p {
         line-height: 28px;
     }
</style>
<body class="page_inner">
 <?php
   require_once 'menu_screen.php';
   require_once 'short_menu.php';
   require_once 'vwipes_loader.php';
 ?>
  
  <div class="human_resource_inner">
      <div class="screentop_para">
        <h1>
          <span class="h1 colr_purple"> الموارد  </span>
        </h1>
        <h1>
          <span class="h1 colr_white bk_purple" style="padding:5px 15px 5px 150px;"> البشرية  </span>
        </h1>
      </div>
      
      <div class="cwrapper">
       
          <div class="left col5">
             <div class="img_wrap">
               <img src="img/w1.jpg" style="width: 80%;">
               <div class="bk_purple" style="text-align: right; padding: 50px; color: #fff; position: absolute; bottom: -50px; width: 50%; right: -50px;">
                  العمل على تمكين المرأة من خلال زيادة نسبة توظيف السيدات بزيادة 42% عن العام الماضي، حيث تم توظيف عدد يتجاوز 233 موظفة في عام 2019م وحيث كان العدد في نهاية 2018م 317 موظفة.
               </div>
          </div>
        </div>
         <div class="right col4">
            <!-- <h5 class="h5 colr_purple">
              شركة الاتصالات السعودية (stc)- المملكة العربية السعودية
            </h5> -->
            <p class="content_para">
              تركزت أعمال ونشاطات الموارد البشرية خلال العام 2019م على العمل على مجموعة من المبادرات والمشاريع الاستراتيجية والتي ساعدت على إحداث نقلة نوعية في أعمال stc وتساهم في جعلها أكثر تمحوراً حول عملاؤها وموظفيها على حداً سواء. بادر قطاع الموارد البشرية في إعداد استراتيجية لنشاط الموارد البشرية تدعم استراتيجية stc وتتكامل معها من خلال التركيز على رقمنه العمليات التي تنّظم نشاط الموارد البشرية وإدخال أفضل الممارسات الناجحة في الشركات المتقدمة. وقد تم إنجاز العديد من البرامج وكان من أبرزها:
              <br><br>
              • هيكلة قطاع الموارد البشرية
              <br><br>
              • رفع نسبة السعودة وتمكين المرأة
              <br><br>
              تم العمل على وضع خطط توظيف للعام المالي 2019م بما يتوافق مع رؤية المملكة 2030 والتوجهات الاستراتيجية للشركة من خلال ضخ دماء جديدة وذلك لغرض رفع نسبة السعودة من جهة ودعم توظيف الكوادر الوطنية الشابة من جهة أخرى وكانت مخرجات هذه العمليات على النحو التالي:
              <br><br>
              • ضخ دماء جديدة في الشركة من خلال توظيف عدد يتجاوز 570 سعودي منهم 379 موظف من حديثي التخرج في عام 2019م.
              <br><br>
              • رفع نسبة السعودة في الشركة من 90.43% في نهاية 2018م لتصبح 90.8% في نهاية 2019م.
              <br><br>
              • الحفاظ على متوسط أعمار الموظفين في الشركة بمعدل 40.7 في نهاية 2019م كما كان في نهاية عام 2018م ويتوقع ان يتم تخفيض متوسط العمر الى مستويات أدنى على المدى المنظور.
              <br><br>
              • العمل على تمكين المرأة من خلال زيادة نسبة توظيف السيدات بزيادة 42% عن العام الماضي، حيث تم توظيف عدد يتجاوز 233 موظفة في عام 2019م وحيث كان العدد في نهاية 2018م 317 موظفة.     
              <br><br>
              • تمكين المرأة من خلال التعيين على وظائف قيادية، حيث بلغ عدد الموظفات اللاتي يشغلن مناصب إدارية في الشركة  21، حيث تم توظيف عدد 18 موظفة على وظائف إشرافية في عام 2019 منها عدد 2 مدير عام و 3 مدير إدارة و 13 مدراء شعب. 
              <br><br>
              • تم زيادة نسبة السعودة بنسبة10% لموظفي العقود وذلك ضمن مخرجات مشروع تحسين جودة المقاولين، حيث تم زيادة نسبة السعودة من 51% في نهاية 2018م لتصبح 61% في نهاية 2019م.
            </p>
          </div>
      </div>
      <div class="cwrapper margint50" style="display: flex;">
        <div class="img_wrap">
          <div class=" right col4" style="height: 100%;position:relative;">
            <div style="position: absolute;bottom: 0;">
             <img src="img/hr.png" style="width: 100%;">
            </div>
          </div>
          <div class="left col5">
            <div class="col8">
              <h5 class="h5 colr_purple">
                برنامج التقاعد المبكر   
              </h5>
              <p class="content_para">
                استمرار تطبيق برنامج التقاعد المبكر الذي استفاد منه عدد 586 موظف في عام 2019 والذي ساهم في رفع كفاءة الشركة من خلال تقليل عدد العمالة الفائضة والذي انعكس إيجابا على ارتفاع صافي أرباح الشركة وتخفيض تكاليف الشركة المالية طويلة الأمد، بالإضافة إلى تخفيض متوسط أعمار موظفي الشركة.
              </p>

              <h5 class="h5 colr_purple">
                سياسات الموارد البشرية
              </h5>
              <p class="content_para">
                بادر قطاع الموارد البشرية بإجراء مراجعة شاملة للسياسات الحالية التي تحكم وتنظم نشاط الموارد البشرية في الشركة، آخذين بعين الاعتبار مصلحة الموظف والشركة في آنٍ واحد، حيث تم رصد جوانب ومجالات تطوير تلك السياسات من واقع الممارسة والتطبيق على أرض الواقع لتنظيم العلاقة بين الشركة والموظفين، هادفين بذلك إلى إيجاد بيئة عمل حاضنة للكفاءات، وعلى وجه الخصوص ما يلي:
                <br /><br />
                • تحديث واعتماد سياسة الموارد البشرية الاستراتيجية
                <br /><br />
                • تحديث واعتماد سياسة التعليم والتطوير.
                <br /><br />
                • تحديث واعتماد سياسة إدارة الرواتب.
                <br /><br />
                • تحديث واعتماد سياسة إدارة أداء الموظفين.
                <br /><br />
                • تحديث واعتماد سياسة البدلات.
                <br /><br />
                • تحديث واعتماد سياسة التكليف الوظيفي.
                <br /><br />
                • تحديث واعتماد سياسة التوظيف الداخلي (نافس).
                <br /><br />
                • تحديث واعتماد سياسة قروض السيارات.
                <br /><br />
                • تحديث واعتماد سياسة قواعد السلوك والجزاءات.
                <br /><br />
                • تحديث واعتماد جدول المخالفات والجزاءات.
              </p>
            </div>
            
          </div>
        </div>
      </div>


      <div class="content-wrapper sp2_row margint100">
        <div class="left bk_purple">
          <p>
            تم زيادة نسبة السعودة بنسبة10% لموظفي العقود وذلك ضمن مخرجات مشروع تحسين جودة المقاولين، حيث تم زيادة نسبة السعودة من 51% في نهاية 2018م لتصبح 61% في نهاية 2019م.
          </p>
        </div>
        <div class="right">
          <p class="content_para">
            إعادة تصميم الهيكل التنظيمي لوحدة المستهلك
            <br />
            رفع المستوى التنظيمي للإدارة العامة للشؤون التنظيمية إلى قطاع الشؤون التنظيمية
            <br />
            استحداث قطاع الشؤون القانونية
            <br />
            إعادة تصميم الهيكل التنظيمي لوحدة الأعمال
            <br />
            استحداث وحدة الشؤون المؤسساتية
            <br />
            إعادة هيكلة وحدة الاستراتيجية
            <br />
            هيكلة الوحدة التنظيمية لأمن المعلومات
            <br />
            مراجعة بعض  المزايا للموظفين بما يتوافق مع استراتيجية الشركة
            <br />
          </p>
        </div>
      </div>

    

      <div class="operation_faqs margint100">
        <div class="faq_listing">
          <h5 class="h5 colr_purple">
            الجودة والمواصفات الدولية المعتمدة
          </h5>
          <p class="content_para">
            سعت الشركة ومازالت على ان تكون منهجية وعمليات التعليم والتطوير وفق أحدث الطرق وأعلى مواصفات الجودة العالمية المعتمدة في مجالات التعليم والتطوير، لذا حرصت على تكليل هذه الجهود بالحصول على شهادات دولية في الجودة وهي: <br>

              ISO9001:2015 quality management systems <br>
              ISO10667-2 Assessment service delivery <br>
              iso 29993  learning services outside formal education <br> 
              iso 40180 information technology 

          </p>
        </div>
        
        <div class="faq_listing">
          <h5 class="h5 colr_purple">
            إنجازات التعليم والتطوير في أرقام خلال عام 2019م 
          </h5>
          <p class="content_para">
           خلال عام 2019 تم تطوير وتدريب عدد 10,755 موظف. <br>
           <br>
           عدد المتدربين في برامج التدريب الالكترونية 13,132 في برامج التدريب الالكتروني والتفاعلي في مجالات اللغة الانجليزية، التدريب الاداري، التدريب المتخصص.
           <br>
           عدد الساعات التدريبية الالكترونية خلال عام 2019م 156,4.31 ساعة. 
           <br>
           عقد 1.048 فعالية تدريبية شملت العديد من البرامج الفنية التخصصية، والبرامج الادارية والشهادات الدولية المتخصصة.
           <br>
           تنفيذ التدريب الخارجي لعدد 831 موظف.
           <br>
           تنفيذ عدد من ورش العمل والندوات لعدد 2,339. 
           <br>
           تطوير وتأهيل عدد 379 موظف في برنامج .TIP
          </p>
        </div>

        <div class="faq_listing">
          <h5 class="h5 colr_purple">
            التعاقب الوظيفي
          </h5>
          <p class="content_para">
            التعاقب الوظيفي عملية هامة واستباقية تمنح الشركة ميزة تنافسية من خلالها تضمن الشركة توفر مجموعة من القادة الجاهزين لشغل المناصب التنفيذية لتحسين مستوى الاستعداد للبدلاء المعتمدين، وقد ساهمت عملية التعاقب الوظيفي في رفع نسبة التوظيف الداخلي للمناصب القيادية حيث بلغت النسبة 84% خلال العام 2019م، كما بلغت نسبة التدوير الوظيفي 29 % للمناصب القيادية.  
          </p>
        </div>

        <div class="faq_listing">
          <h5 class="h5 colr_purple">
             برنامج القرض السكني
          </h5>
          <p class="content_para">
            تولي الشركة اهتماما كبيرا بالعنصر البشري ولما يمثله تملك المنزل من أهمية كبيرة للاستقرار الاسري وأثر إيجابي كبير على إنتاجية الموظف والحفاظ على المواهب ساهمت الشركة خلال هذا العام في تملك ما يقرب من 1,218 موظف لمنازلهم عن طريق برنامج القرض السكني وهي بذلك تدعم جهود المملكة في رفع نسبة تملك المساكن بين المواطنين كأحد أهم أهداف رؤية المملكة 2030.
          </p>
        </div>

        <div class="faq_listing">
          <h5 class="h5 colr_purple">
          قروض السيارات
          </h5>
          <p class="content_para">
             تقرض الشركة موظفيها "السعوديين" المعينين على وظائف مدير شعبة فأعلى ومن في حكمهم مبلغا ماليا محددا بغرض شراء سيارة حيث استفاد من هذا البرنامج 509 موظف. 
          </p>
        </div>

        <div class="faq_listing">
          <h5 class="h5 colr_purple">
            مساهمة تعليم الأبناء
          </h5>
          <p class="content_para">
            انطلاقا من حرص الشركة على توفير أفضل بيئة عمل ولضمان استقرار الموظفين تساهم الشركة في تغطية تكاليف تعليم أبناء الموظفين شاغلي الوظائف الإشرافية حيث استفاد من هذا البرنامج أكثر من 3000 طالب. 
          </p>
        </div>

        <div class="faq_listing">
          <h5 class="h5 colr_purple">
            برامج الدعم المالي للموظفين
          </h5>
          <p class="content_para">
            هي أربعة برامج (برنامج المنح التكافلية، برنامج القروض الحسنة، إعانة الزواج، برنامج دعم أسر الموظفين المتوفين)، صممت هذه البرامج لدعم موظفي الشركة ممن يواجهون أعباء مالية لدعمهم بقروض حسنة وميسرة أو منحهم إعانات مالية غير مستردة حسب شروط كل برنامج. وبلغ عدد الموظفين المستفيدين من برامج الإعانة في الشركة بمختلف أنواعها 2,580 موظفا.
          </p>
        </div>

        <div class="faq_listing">
          <h5 class="h5 colr_purple">
          برنامج صندوق الحالات الطبية الخاصة 
          </h5>
          <p class="content_para">
           يستفيد منه الموظفين وعوائلهم في بعض الحالات الخاصة التي لا تغطيها وثيقة التأمين الطبي، وقد استفاد منه ما يقارب 630 حالة ما بين البرامج التأهيلية وعلاج الأسنان المتقدم للأطفال وعمليات تصحيح النظر وعلاج حالات العقم والأجهزة التعويضية.
          </p>
        </div>
      </div>



      <div class="operation_faqs">
        <div class="faq_listing">
          <h5 class="h5 colr_purple">
            بدل تعليم لذوي الاحتياجات الخاصة
          </h5>
          <p class="content_para">
            تم تغطية بدل تعليم لما يقارب 358 إبن وإبنة من ذوي الاحتياجات الخاصة.
          </p>
        </div>
        
        <div class="faq_listing">
          <h5 class="h5 colr_purple">
            تطوير وتحسين برنامج عمولة المبيعات (تستاهل)
          </h5>
          <p class="content_para">
            من واقع الممارسة والتطبيق على الواقع تم رصد جوانب التحسين والتطوير في برنامج العمولات (تستأهل) والمكون من برامج فرعيه عوضا عن البرنامج السابق لتحقيق أهداف الشركة: <br>
            برنامج تستاهل لعمولة المبيعات يهدف إلى تحفيز موظفين المبيعات ورفع معدلات الإنتاجية ورضى العميل بما ينعكس على أرباح وايرادات الشركة. <br>
            عدد الموظفين المستفيدين من البرنامج خلال العام 766 موظف. <br>
            بلغت الحوافز المدفوعة لموظفين المبيعات من خلال برنامج عمولة المبيعات تستاهل خلال العام 81.6 مليون ريال.
          </p>
        </div>
        
        <div class="faq_listing">
          <h5 class="h5 colr_purple">
            شركاء أكاديمية اس تي سي
          </h5>
          <p class="content_para">
            في الوقت الحاضر لدى أكاديمية stc شراكات استراتيجية مع عدة جهات داخلية وخارجية على سبيل المثال وليس الحصر منها مركز القيادة الإبداعية، يوداستي، مؤسسة مسك الخيرية، وشركة جوجل وشراكات قادمة مع جامعة هارفارد ومعهد ماساتشوستس للتكنولوجيا وامبريال كوليدج في لندن.
          </p>
        </div>

        <!-- <div class="faq_listing">
          <h5 class="h5 colr_purple">
            شركة اس تي سي تركيا القابضة المحدودة (شركة اس تي سي تركيا)
          </h5>
          <p class="content_para">
            شركة اس تي سي تركيا، شركة ذات مسؤولية محدودة تأسست بموجب قانون الشركات التجارية في جزر فيرجن البريطانية بتاريخ 8 أبريل 2007م، وهي شركة ذات أغراض خاصة نشاطها الرئيسي تقديم الخدمات والدعم اللازم المتعلق بالأنشطة الاستثمارية الخاصة بالمجموعة. 
            <br><br>
            استحوذت شركة اس تي سي تركيا على حصة 35% من رأس مال شركة أوجيه تيليكوم المحدودة البالغ 3.6 مليار دولار، ما يعادل تقريباً 13.5 مليار ريال سعودي في أبريل 2008م بسعر الصرف في ذلك التاريخ، والتي مقرها مدينة دبي، الإمارات العربية المتحدة.
            <br><br>
             خلال عام 2016م، وبسبب الخسائر المستمرة و استنفاد كامل رصيد استثمار المجموعة في أوجيه تيليكوم، توقفت المجموعة عن الاعتراف بحصتها في الخسائر الإضافية في شركة أوجية تيليكوم المحدودة (للمزيد من التفاصيل، أنظر إيضاح 21-1 في القوائم المالية السنوية). 

          </p>
        </div> -->

      </div>


      <div class="operations_table">
        <h5 class="h5 colr_purple">
          شالمشاركات منذ إطلاق أكاديمية اس تي سي
        </h5>
        <!-- tabular data -->
        <div class="ctable_wrapper">
          <table class="stc_table">
            <tbody>
              <tr>
                <td>
                  <p><span">اسم البرنامج&nbsp;</span></p>
                </td>
                <td>
                  <p><span">الجهة المقدمة</span></p>
                </td>
                <td>
                  <p><span">عدد المشتركين</span></p>
                </td>
              </tr>
              <tr>
                <td>
                  <p><span">برنامج الأمن السيبراني&nbsp;</span></p>
                </td>
                <td>
                  <p><span">شركة سيكيوريتي أنكور</span></p>
                </td>
                <td>
                  <p><span"> (20) مشترك</span></p>
                </td>
              </tr>
              <tr>
                <td>
                  <p><span">عدة برامج متخصصة في تحليل البيانات و الذكاء الإصطناعي</span></p>
                </td>
                <td>
                  <p><span">برنامج يودسيتي</span></p>
                </td>
                <td>
                  <p><span">(200) مشترك</span></p>
                </td>
              </tr>
              <tr>
                <td>
                  <p><span">مسابقة الذكاء الإصطناعي AIDEA</span></p>
                </td>
                <td>
                  <p><span">شركة مايكروسوفت</span></p>
                </td>
                <td>
                  <p><span">(50) مشترك</span></p>
                </td>
              </tr>
              <tr>
                <td>
                  <p><span">برنامج التسويق الرقمي&nbsp;</span></p>
                </td>
                <td>
                  <p><span">شركة جوجل</span></p>
                </td>
                <td>
                  <p><span">(240) مشترك</span></p>
                </td>
              </tr>
              <tr>
                <td>
                  <p><span">عدة دورات في تحليل البيانات والبرمجة&nbsp;</span></p>
                </td>
                <td>
                  <p><span">برنامج يوداستي بالتعاون مع مسك</span></p>
                </td>
                <td>
                  <p><span">(1,200)مشترك</span></p>
                </td>
              </tr>
              <tr>
                <td>
                  <p><span">مبادرة صناعة الحلم&nbsp;</span></p>
                </td>
                <td>
                  <p><span">وزارة العمل والتنمية الاجتماعية</span></p>
                </td>
                <td>
                  <p><span">(600)&nbsp; مشترك</span></p>
                </td>
              </tr>
              <tr>
                <td>
                  <p><span">معسكر لطلاب المرحلة الثانوية لسايبر كرافت&nbsp;</span></p>
                </td>
                <td>
                  <p><span">أكاديمية </span><span">stc</span></p>
                </td>
                <td>
                  <p><span">(56)&nbsp; مشترك</span></p>
                </td>
              </tr>
              <tr>
                <td>
                  <p><span">برامج اس تي سي في مجال الرقمنة (بما في ذلك برامج الأكاديمية في القيادة الرقمية)</span></p>
                </td>
                <td>
                  <p><span">أكاديمية </span><span">stc</span></p>
                </td>
                <td>
                  <p><span">(3,774) مشترك</span></p>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <!-- tabular data -->
      </div>


    </div>

  <!-- video section | consolidate_financials -->
    <div class="video_wrapper" style="z-index: 99; width: 100%; height: 100vh; position: fixed; top: 0;">
      <video id="category_video" playsinline="" xmuted style="width: 100%; height: 100vh; object-fit: cover; ">
        <source src="video/cat_3.mp4" type="video/mp4">
      </video>
    </div>
  <!-- video section | consolidate_financials -->

  <?php require_once 'scripts.php'; ?>
  <script type="text/javascript" src="js/inner_page.js"></script>
</body>

</html>