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

    /*page_creation_bod_b*/
      .page_creation_bod_b .screentop_para{
        margin: 50px 50px 50px 0;
        overflow: hidden;
        display: inline-block;
        position: relative;
      }
      .page_creation_bod_b .tabular_data{
        width:calc( 100% - 100px );
        margin: 0 auto;
        clear: both;
      }
      .page_creation_bod_b .tabular_data .c_row{
       display: flex;
      }
      .page_creation_bod_b .tabular_data .c_row div{
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
      .page_creation_bod_b .tabular_data .c_row div:last-child{
        border-left: 1px solid #4f0f8c;
      }
      .page_creation_bod_b .tabular_data .c_row:last-child div{
        border-bottom: 1px solid #4f0f8c; 
      }
      .page_creation_bod_b .tabular_data .tabular_data_inner .c_row:hover div:first-child{
        background: #FF375E;
      }
      .page_creation_bod_b .tabular_data .tabular_data_inner .c_row div:first-child{
        text-align: center;
        justify-content: center;
      }
      .page_creation_bod_b .tabular_data .tabular_data_inner .c_row:hover div{
        background: #4f0f8c;
        color: #fff;
      }
      .page_creation_bod_b .tabular_data .c_row.second div  {
        padding: 10px;
      }
      .page_creation_bod_b .tabular_data .c_row.first {
        margin-bottom: 20px;
      }
      .page_creation_bod_b .tabular_data .c_row.first div{
        border:none;
        border-left: 1px solid #fff;
        color: #fff;
        padding: 20px;
        text-align: center;
        justify-content: center;
      }

      .page_creation_bod_b .tabular_data2{
        width:calc( 100% - 100px );
        margin: 0 auto;
        clear: both;
      }
      .page_creation_bod_b .tabular_data2 .c_row{
       display: flex;
      }

      .page_creation_bod_b .tabular_data2 .c_row.first.table_white div{
        color: #4f0f8c;
        border: 1px solid #4f0f8c;
        border-left: none;
        border-top: none;
      }
       .page_creation_bod_b .tabular_data2 .c_row.first.table_white div.last div.c_row{
        border-left: 0 !important;
      }
      .page_creation_bod_b .tabular_data2 .c_row.first.table_white div span{
        border-left: 1px solid #4f0f8c !important;
      }
      .page_creation_bod_b .tabular_data2 .c_row.first.table_white div span:last-child{
        border-left: none !important;
      }
      .page_creation_bod_b .tabular_data2 .c_row div{
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
      .page_creation_bod_b .tabular_data2 .c_row div:last-child{
        border-left: 1px solid #4f0f8c !important;
      }
      .page_creation_bod_b .tabular_data2 .c_row:last-child div{
        border-bottom: 1px solid #4f0f8c; 
      }
      .page_creation_bod_b .tabular_data2 .tabular_data_inner .c_row:hover div:first-child{
        background: #FF375E;
      }
      .page_creation_bod_b .tabular_data2 .tabular_data_inner .c_row div:first-child{
        text-align: center;
        justify-content: center;
      }
      .page_creation_bod_b .tabular_data2 .tabular_data_inner .c_row:hover div{
        background: #4f0f8c;
        color: #fff;
      }
      .page_creation_bod_b .tabular_data2 .c_row.second div  {
        padding: 10px;
      }
      .page_creation_bod_b .tabular_data2 .c_row.first {
        margin-bottom: 0;
      }
      .page_creation_bod_b .tabular_data2 .c_row.first div{
        border:none;
        border-left: 1px solid #fff;
        color: #fff;
        padding: 20px;
        text-align: center;
        justify-content: center;
      }
      .page_creation_bod_b .tabular_data2 .c_row.first div.last{
        padding: 0;
        flex-wrap: wrap;
        flex: 20%;
        align-items: initial;
      }
      .page_creation_bod_b .tabular_data2 .c_row.first div.last .f-row{
        display: flex;
        flex: initial;
        flex-wrap: wrap;
        flex: 0 0 100%;
        border: none;
        padding: 0;
      }
      .page_creation_bod_b .tabular_data2 .c_row.first div.last .f-row span{
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
      .page_creation_bod_b .tabular_data2 .c_row.first div.last .f-row span:last-child{
         border-left: none !important;
      }
      .page_creation_bod_b .img_wrap {
        position: relative;
        overflow: hidden;
      }
      .page_creation_bod_b .img_wrap .left{
        width: 40%;
        float: left;

      }
      .page_creation_bod_b .img_wrap .right{
        width: 35%;
        float: right;
      }
      .page_creation_bod_b .img_wrap img{
        width: 100%;
      }
      .page_creation_bod_b .cwrapper{
          margin-bottom:50px;
      }
      .page_creation_bod_b .bar-wrap{
        position: relative;
        height: 10px;
        width: 100%;
        margin-bottom: 50px;
      }

      .page_creation_bod_b .sp_wrap .content-wrapper {
        position: relative;
        /*margin: 50px 0;*/
      }
      .page_creation_bod_b .sp_wrap .content-wrapper.c-row-reverse .left{
        width: 50%;
        float: right;
      }
      .page_creation_bod_b .sp_wrap .content-wrapper.c-row-reverse .left .box_center_content{
        float: right;
        width: 90%;
      }
      .page_creation_bod_b .sp_wrap .content-wrapper.c-row-reverse .right{
      }
      .page_creation_bod_b .sp_wrap .content-wrapper:after {
        content: '';
        display: table;
        clear: both;
      }
      .page_creation_bod_b .sp_wrap .content-wrapper .left{
        width: 50%;
        float: left;
        position: relative;
        min-height: 250px;
      }
      .page_creation_bod_b .sp_wrap .content-wrapper .left .box_center_content{
          /*margin:0 auto;*/
          width: 80%;
          min-height: 400px;
          /*float: left;*/
      }

      .page_creation_bod_b .sp_wrap .content-wrapper .left .box_center_content p{
        font-size: 28px;
        line-height: 38px;
        font-family: "stc_light";
      }
      .page_creation_bod_b .sp_wrap .content-wrapper .img-wrap{
        height: 400px;
      }
      .page_creation_bod_b .sp_wrap .content-wrapper .img-wrap img{
        height: 100%;
        width: 100%;
        object-fit: cover;
        object-position: top right;
      }
      .page_creation_bod_b .sp_wrap .content-wrapper .right{
        width: 40%;
        float: right;
        position: relative;
        min-height: 250px;
      }
      .page_creation_bod_b .sp_wrap .sp_row{
          display: flex;
          margin:50px 0;
      }
      .page_creation_bod_b .sp_wrap .sp_row .left,
      .page_creation_bod_b .sp_wrap .sp_row .right{
      flex: initial;
      }
      .page_creation_bod_b .sp2_row .left,
      .page_creation_bod_b .sp2_row .right{
      height: 400px;
      }
      .page_creation_bod_b .sp2_row .right
      {
      height: 400px;
      padding: 40px;
      width: 45%;
      }
      .page_creation_bod_b .sp_wrap .sp_row .right .content_para{
      margin-bottom: 0;
      }
      .page_creation_bod_b .sp_wrap .bar-wrap {
      position: absolute;
      height: 60px;
      width: 80%;
      top: 50%;
      right: 0;
      transform: translate(0,-100%);
      }
    /*page_creation_bod_b*/


    /*page_creation_bod_c*/
     .page_creation_bod_c .screentop_para{
        margin: 50px 50px 50px 0;
        overflow: hidden;
        display: inline-block;
        position: relative;
      }
      .page_creation_bod_c .tabular_data{
        width:calc( 100% - 100px );
        margin: 0 auto;
        clear: both;
      }
      .page_creation_bod_c .tabular_data .c_row{
       display: flex;
      }
      .page_creation_bod_c .tabular_data .c_row div{
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
      .page_creation_bod_c .tabular_data .c_row div:last-child{
        border-left: 1px solid #4f0f8c;
      }
      .page_creation_bod_c .tabular_data .c_row:last-child div{
        border-bottom: 1px solid #4f0f8c; 
      }
      .page_creation_bod_c .tabular_data .tabular_data_inner .c_row:hover div:first-child{
        background: #FF375E;
      }
      .page_creation_bod_c .tabular_data .tabular_data_inner .c_row div:first-child{
        text-align: center;
        justify-content: center;
      }
      .page_creation_bod_c .tabular_data .tabular_data_inner .c_row:hover div{
        background: #4f0f8c;
        color: #fff;
      }
      .page_creation_bod_c .tabular_data .c_row.second div  {
        padding: 10px;
      }
      .page_creation_bod_c .tabular_data .c_row.first {
        margin-bottom: 20px;
      }
      .page_creation_bod_c .tabular_data .c_row.first div{
        border:none;
        border-left: 1px solid #fff;
        color: #fff;
        padding: 20px;
        text-align: center;
        justify-content: center;
      }

      .page_creation_bod_c .tabular_data2{
        width:calc( 100% - 100px );
        margin: 0 auto;
        clear: both;
      }
      .page_creation_bod_c .tabular_data2 .c_row{
       display: flex;
      }

      .page_creation_bod_c .tabular_data2 .c_row.first.table_white div{
        color: #4f0f8c;
        border: 1px solid #4f0f8c;
        border-left: none;
        border-top: none;
      }
       .page_creation_bod_c .tabular_data2 .c_row.first.table_white div.last div.c_row{
        border-left: 0 !important;
      }
      .page_creation_bod_c .tabular_data2 .c_row.first.table_white div span{
        border-left: 1px solid #4f0f8c !important;
      }
      .page_creation_bod_c .tabular_data2 .c_row.first.table_white div span:last-child{
        border-left: none !important;
      }
      .page_creation_bod_c .tabular_data2 .c_row div{
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
      .page_creation_bod_c .tabular_data2 .c_row div:last-child{
        border-left: 1px solid #4f0f8c !important;
      }
      .page_creation_bod_c .tabular_data2 .c_row:last-child div{
        border-bottom: 1px solid #4f0f8c; 
      }
      .page_creation_bod_c .tabular_data2 .tabular_data_inner .c_row:hover div:first-child{
        background: #FF375E;
      }
      .page_creation_bod_c .tabular_data2 .tabular_data_inner .c_row div:first-child{
        text-align: center;
        justify-content: center;
      }
      .page_creation_bod_c .tabular_data2 .tabular_data_inner .c_row:hover div{
        background: #4f0f8c;
        color: #fff;
      }
      .page_creation_bod_c .tabular_data2 .c_row.second div  {
        padding: 10px;
      }
      .page_creation_bod_c .tabular_data2 .c_row.first {
        margin-bottom: 0;
      }
      .page_creation_bod_c .tabular_data2 .c_row.first div{
        border:none;
        border-left: 1px solid #fff;
        color: #fff;
        padding: 20px;
        text-align: center;
        justify-content: center;
      }
      .page_creation_bod_c .tabular_data2 .c_row.first div.last{
        padding: 0;
        flex-wrap: wrap;
        flex: 20%;
        align-items: initial;
      }
      .page_creation_bod_c .tabular_data2 .c_row.first div.last .f-row{
        display: flex;
        flex: initial;
        flex-wrap: wrap;
        flex: 0 0 100%;
        border: none;
        padding: 0;
      }
      .page_creation_bod_c .tabular_data2 .c_row.first div.last .f-row span{
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
      .page_creation_bod_c .tabular_data2 .c_row.first div.last .f-row span:last-child{
         border-left: none !important;
      }
      .page_creation_bod_c .img_wrap {
        position: relative;
        overflow: hidden;
      }
      .page_creation_bod_c .img_wrap .left{
        width: 40%;
        float: left;

      }
      .page_creation_bod_c .img_wrap .right{
        width: 35%;
        float: right;
      }
      .page_creation_bod_c .img_wrap img{
        width: 100%;
      }
      .page_creation_bod_c .cwrapper{
          margin-bottom:50px;
      }
      .page_creation_bod_c .bar-wrap{
        position: relative;
        height: 10px;
        width: 100%;
        margin-bottom: 50px;
      }

      .page_creation_bod_c .sp_wrap .content-wrapper {
        position: relative;
        /*margin: 50px 0;*/
      }
      .page_creation_bod_c .sp_wrap .content-wrapper.c-row-reverse .left{
        width: 50%;
        float: right;
      }
      .page_creation_bod_c .sp_wrap .content-wrapper.c-row-reverse .left .box_center_content{
        float: right;
        width: 90%;
      }
      .page_creation_bod_c .sp_wrap .content-wrapper.c-row-reverse .right{
      }
      .page_creation_bod_c .sp_wrap .content-wrapper:after {
        content: '';
        display: table;
        clear: both;
      }
      .page_creation_bod_c .sp_wrap .content-wrapper .left{
        width: 50%;
        float: left;
        position: relative;
        min-height: 250px;
      }
      .page_creation_bod_c .sp_wrap .content-wrapper .left .box_center_content{
          /*margin:0 auto;*/
          width: 80%;
          min-height: 400px;
          /*float: left;*/
      }

      .page_creation_bod_c .sp_wrap .content-wrapper .left .box_center_content p{
        font-size: 28px;
        line-height: 38px;
        font-family: "stc_light";
      }
      .page_creation_bod_c .sp_wrap .content-wrapper .img-wrap{
        height: 400px;
      }
      .page_creation_bod_c .sp_wrap .content-wrapper .img-wrap img{
        height: 100%;
        width: 100%;
        object-fit: cover;
        object-position: top right;
      }
      .page_creation_bod_c .sp_wrap .content-wrapper .right{
        width: 40%;
        float: right;
        position: relative;
        min-height: 250px;
      }
      .page_creation_bod_c .sp_wrap .sp_row{
          display: flex;
          margin:50px 0;
      }
      .page_creation_bod_c .sp_wrap .sp_row .left,
      .page_creation_bod_c .sp_wrap .sp_row .right{
      flex: initial;
      }
      .page_creation_bod_c .sp2_row .left,
      .page_creation_bod_c .sp2_row .right{
      height: 400px;
      }
      .page_creation_bod_c .sp2_row .right
      {
      height: 400px;
      padding: 40px;
      width: 45%;
      }
      .page_creation_bod_c .sp_wrap .sp_row .right .content_para{
      margin-bottom: 0;
      }
      .page_creation_bod_c .sp_wrap .bar-wrap {
      position: absolute;
      height: 60px;
      width: 80%;
      top: 50%;
      right: 0;
      transform: translate(0,-100%);
      }  
    /*page_creation_bod_c*/

    /*page_creation_bod_d*/
     .page_creation_bod_d .screentop_para{
        margin: 50px 50px 50px 0;
        overflow: hidden;
        display: inline-block;
        position: relative;
      }
      .page_creation_bod_d .tabular_data{
        width:calc( 100% - 100px );
        margin: 0 auto;
        clear: both;
      }
      .page_creation_bod_d .tabular_data .c_row{
       display: flex;
      }
      .page_creation_bod_d .tabular_data .c_row div{
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
      .page_creation_bod_d .tabular_data .c_row div:last-child{
        border-left: 1px solid #4f0f8c;
      }
      .page_creation_bod_d .tabular_data .c_row:last-child div{
        border-bottom: 1px solid #4f0f8c; 
      }
      .page_creation_bod_d .tabular_data .tabular_data_inner .c_row:hover div:first-child{
        background: #FF375E;
      }
      .page_creation_bod_d .tabular_data .tabular_data_inner .c_row div:first-child{
        text-align: center;
        justify-content: center;
      }
      .page_creation_bod_d .tabular_data .tabular_data_inner .c_row:hover div{
        background: #4f0f8c;
        color: #fff;
      }
      .page_creation_bod_d .tabular_data .c_row.second div  {
        padding: 10px;
      }
      .page_creation_bod_d .tabular_data .c_row.first {
        margin-bottom: 20px;
      }
      .page_creation_bod_d .tabular_data .c_row.first div{
        border:none;
        border-left: 1px solid #fff;
        color: #fff;
        padding: 20px;
        text-align: center;
        justify-content: center;
      }

      .page_creation_bod_d .tabular_data2{
        width:calc( 100% - 100px );
        margin: 0 auto;
        clear: both;
      }
      .page_creation_bod_d .tabular_data2 .c_row{
       display: flex;
      }

      .page_creation_bod_d .tabular_data2 .c_row.first.table_white div{
        color: #4f0f8c;
        border: 1px solid #4f0f8c;
        border-left: none;
        border-top: none;
      }
       .page_creation_bod_d .tabular_data2 .c_row.first.table_white div.last div.c_row{
        border-left: 0 !important;
      }
      .page_creation_bod_d .tabular_data2 .c_row.first.table_white div span{
        border-left: 1px solid #4f0f8c !important;
      }
      .page_creation_bod_d .tabular_data2 .c_row.first.table_white div span:last-child{
        border-left: none !important;
      }
      .page_creation_bod_d .tabular_data2 .c_row div{
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
      .page_creation_bod_d .tabular_data2 .c_row div:last-child{
        border-left: 1px solid #4f0f8c !important;
      }
      .page_creation_bod_d .tabular_data2 .c_row:last-child div{
        border-bottom: 1px solid #4f0f8c; 
      }
      .page_creation_bod_d .tabular_data2 .tabular_data_inner .c_row:hover div:first-child{
        background: #FF375E;
      }
      .page_creation_bod_d .tabular_data2 .tabular_data_inner .c_row div:first-child{
        text-align: center;
        justify-content: center;
      }
      .page_creation_bod_d .tabular_data2 .tabular_data_inner .c_row:hover div{
        background: #4f0f8c;
        color: #fff;
      }
      .page_creation_bod_d .tabular_data2 .c_row.second div  {
        padding: 10px;
      }
      .page_creation_bod_d .tabular_data2 .c_row.first {
        margin-bottom: 0;
      }
      .page_creation_bod_d .tabular_data2 .c_row.first div{
        border:none;
        border-left: 1px solid #fff;
        color: #fff;
        padding: 20px;
        text-align: center;
        justify-content: center;
      }
      .page_creation_bod_d .tabular_data2 .c_row.first div.last{
        padding: 0;
        flex-wrap: wrap;
        flex: 20%;
        align-items: initial;
      }
      .page_creation_bod_d .tabular_data2 .c_row.first div.last .f-row{
        display: flex;
        flex: initial;
        flex-wrap: wrap;
        flex: 0 0 100%;
        border: none;
        padding: 0;
      }
      .page_creation_bod_d .tabular_data2 .c_row.first div.last .f-row span{
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
      .page_creation_bod_d .tabular_data2 .c_row.first div.last .f-row span:last-child{
         border-left: none !important;
      }
      .page_creation_bod_d .img_wrap {
        position: relative;
        overflow: hidden;
      }
      .page_creation_bod_d .img_wrap .left{
        width: 40%;
        float: left;

      }
      .page_creation_bod_d .img_wrap .right{
        width: 35%;
        float: right;
      }
      .page_creation_bod_d .img_wrap img{
        width: 100%;
      }
      .page_creation_bod_d .cwrapper{
          margin-bottom:50px;
      }
      .page_creation_bod_d .bar-wrap{
        position: relative;
        height: 10px;
        width: 100%;
        margin-bottom: 50px;
      }

      .page_creation_bod_d .sp_wrap .content-wrapper {
        position: relative;
        /*margin: 50px 0;*/
      }
      .page_creation_bod_d .sp_wrap .content-wrapper.c-row-reverse .left{
        width: 50%;
        float: right;
      }
      .page_creation_bod_d .sp_wrap .content-wrapper.c-row-reverse .left .box_center_content{
        float: right;
        width: 90%;
      }
      .page_creation_bod_d .sp_wrap .content-wrapper.c-row-reverse .right{
      }
      .page_creation_bod_d .sp_wrap .content-wrapper:after {
        content: '';
        display: table;
        clear: both;
      }
      .page_creation_bod_d .sp_wrap .content-wrapper .left{
        width: 50%;
        float: left;
        position: relative;
        min-height: 250px;
      }
      .page_creation_bod_d .sp_wrap .content-wrapper .left .box_center_content{
          /*margin:0 auto;*/
          width: 80%;
          min-height: 400px;
          /*float: left;*/
      }

      .page_creation_bod_d .sp_wrap .content-wrapper .left .box_center_content p{
        font-size: 28px;
        line-height: 38px;
        font-family: "stc_light";
      }
      .page_creation_bod_d .sp_wrap .content-wrapper .img-wrap{
        height: 400px;
      }
      .page_creation_bod_d .sp_wrap .content-wrapper .img-wrap img{
        height: 100%;
        width: 100%;
        object-fit: cover;
        object-position: top right;
      }
      .page_creation_bod_d .sp_wrap .content-wrapper .right{
        width: 40%;
        float: right;
        position: relative;
        min-height: 250px;
      }
      .page_creation_bod_d .sp_wrap .sp_row{
          display: flex;
          margin:50px 0;
      }
      .page_creation_bod_d .sp_wrap .sp_row .left,
      .page_creation_bod_d .sp_wrap .sp_row .right{
      flex: initial;
      }
      .page_creation_bod_d .sp2_row .left,
      .page_creation_bod_d .sp2_row .right{
      height: 400px;
      }
      .page_creation_bod_d .sp2_row .right
      {
      height: 400px;
      padding: 40px;
      width: 45%;
      }
      .page_creation_bod_d .sp_wrap .sp_row .right .content_para{
      margin-bottom: 0;
      }
      .page_creation_bod_d .sp_wrap .bar-wrap {
      position: absolute;
      height: 60px;
      width: 80%;
      top: 50%;
      right: 0;
      transform: translate(0,-100%);
      }  
    /*page_creation_bod_d*/

    /*page_creation_bod_e*/
     .page_creation_bod_e .screentop_para{
        margin: 50px 50px 50px 0;
        overflow: hidden;
        display: inline-block;
        position: relative;
      }
      .page_creation_bod_e .tabular_data{
        width:calc( 100% - 100px );
        margin: 0 auto;
        clear: both;
      }
      .page_creation_bod_e .tabular_data .c_row{
       display: flex;
      }
      .page_creation_bod_e .tabular_data .c_row div{
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
      .page_creation_bod_e .tabular_data .c_row div:last-child{
        border-left: 1px solid #4f0f8c;
      }
      .page_creation_bod_e .tabular_data .c_row:last-child div{
        border-bottom: 1px solid #4f0f8c; 
      }
      .page_creation_bod_e .tabular_data .tabular_data_inner .c_row:hover div:first-child{
        background: #FF375E;
      }
      .page_creation_bod_e .tabular_data .tabular_data_inner .c_row div:first-child{
        text-align: center;
        justify-content: center;
      }
      .page_creation_bod_e .tabular_data .tabular_data_inner .c_row:hover div{
        background: #4f0f8c;
        color: #fff;
      }
      .page_creation_bod_e .tabular_data .c_row.second div  {
        padding: 10px;
      }
      .page_creation_bod_e .tabular_data .c_row.first {
        margin-bottom: 20px;
      }
      .page_creation_bod_e .tabular_data .c_row.first div{
        border:none;
        border-left: 1px solid #fff;
        color: #fff;
        padding: 20px;
        text-align: center;
        justify-content: center;
      }

      .page_creation_bod_e .tabular_data2{
        width:calc( 100% - 100px );
        margin: 0 auto;
        clear: both;
      }
      .page_creation_bod_e .tabular_data2 .c_row{
       display: flex;
      }

      .page_creation_bod_e .tabular_data2 .c_row.first.table_white div{
        color: #4f0f8c;
        border: 1px solid #4f0f8c;
        border-left: none;
        border-top: none;
      }
       .page_creation_bod_e .tabular_data2 .c_row.first.table_white div.last div.c_row{
        border-left: 0 !important;
      }
      .page_creation_bod_e .tabular_data2 .c_row.first.table_white div span{
        border-left: 1px solid #4f0f8c !important;
      }
      .page_creation_bod_e .tabular_data2 .c_row.first.table_white div span:last-child{
        border-left: none !important;
      }
      .page_creation_bod_e .tabular_data2 .c_row div{
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
      .page_creation_bod_e .tabular_data2 .c_row div:last-child{
        border-left: 1px solid #4f0f8c !important;
      }
      .page_creation_bod_e .tabular_data2 .c_row:last-child div{
        border-bottom: 1px solid #4f0f8c; 
      }
      .page_creation_bod_e .tabular_data2 .tabular_data_inner .c_row:hover div:first-child{
        background: #FF375E;
      }
      .page_creation_bod_e .tabular_data2 .tabular_data_inner .c_row div:first-child{
        text-align: center;
        justify-content: center;
      }
      .page_creation_bod_e .tabular_data2 .tabular_data_inner .c_row:hover div{
        background: #4f0f8c;
        color: #fff;
      }
      .page_creation_bod_e .tabular_data2 .c_row.second div  {
        padding: 10px;
      }
      .page_creation_bod_e .tabular_data2 .c_row.first {
        margin-bottom: 0;
      }
      .page_creation_bod_e .tabular_data2 .c_row.first div{
        border:none;
        border-left: 1px solid #fff;
        color: #fff;
        padding: 20px;
        text-align: center;
        justify-content: center;
      }
      .page_creation_bod_e .tabular_data2 .c_row.first div.last{
        padding: 0;
        flex-wrap: wrap;
        flex: 20%;
        align-items: initial;
      }
      .page_creation_bod_e .tabular_data2 .c_row.first div.last .f-row{
        display: flex;
        flex: initial;
        flex-wrap: wrap;
        flex: 0 0 100%;
        border: none;
        padding: 0;
      }
      .page_creation_bod_e .tabular_data2 .c_row.first div.last .f-row span{
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
      .page_creation_bod_e .tabular_data2 .c_row.first div.last .f-row span:last-child{
         border-left: none !important;
      }
      .page_creation_bod_e .img_wrap {
        position: relative;
        overflow: hidden;
      }
      .page_creation_bod_e .img_wrap .left{
        width: 40%;
        float: left;

      }
      .page_creation_bod_e .img_wrap .right{
        width: 35%;
        float: right;
      }
      .page_creation_bod_e .img_wrap img{
        width: 100%;
      }
      .page_creation_bod_e .cwrapper{
          margin-bottom:50px;
      }
      .page_creation_bod_e .bar-wrap{
        position: relative;
        height: 10px;
        width: 100%;
        margin-bottom: 50px;
      }

      .page_creation_bod_e .sp_wrap .content-wrapper {
        position: relative;
        /*margin: 50px 0;*/
      }
      .page_creation_bod_e .sp_wrap .content-wrapper.c-row-reverse .left{
        width: 50%;
        float: right;
      }
      .page_creation_bod_e .sp_wrap .content-wrapper.c-row-reverse .left .box_center_content{
        float: right;
        width: 90%;
      }
      .page_creation_bod_e .sp_wrap .content-wrapper.c-row-reverse .right{
      }
      .page_creation_bod_e .sp_wrap .content-wrapper:after {
        content: '';
        display: table;
        clear: both;
      }
      .page_creation_bod_e .sp_wrap .content-wrapper .left{
        width: 50%;
        float: left;
        position: relative;
        min-height: 250px;
      }
      .page_creation_bod_e .sp_wrap .content-wrapper .left .box_center_content{
          /*margin:0 auto;*/
          width: 80%;
          min-height: 400px;
          /*float: left;*/
      }

      .page_creation_bod_e .sp_wrap .content-wrapper .left .box_center_content p{
        font-size: 28px;
        line-height: 38px;
        font-family: "stc_light";
      }
      .page_creation_bod_e .sp_wrap .content-wrapper .img-wrap{
        height: 400px;
      }
      .page_creation_bod_e .sp_wrap .content-wrapper .img-wrap img{
        height: 100%;
        width: 100%;
        object-fit: cover;
        object-position: top right;
      }
      .page_creation_bod_e .sp_wrap .content-wrapper .right{
        width: 40%;
        float: right;
        position: relative;
        min-height: 250px;
      }
      .page_creation_bod_e .sp_wrap .sp_row{
          display: flex;
          margin:50px 0;
      }
      .page_creation_bod_e .sp_wrap .sp_row .left,
      .page_creation_bod_e .sp_wrap .sp_row .right{
      flex: initial;
      }
      .page_creation_bod_e .sp2_row .left,
      .page_creation_bod_e .sp2_row .right{
      height: 400px;
      }
      .page_creation_bod_e .sp2_row .right
      {
      height: 400px;
      padding: 40px;
      width: 45%;
      }
      .page_creation_bod_e .sp_wrap .sp_row .right .content_para{
      margin-bottom: 0;
      }
      .page_creation_bod_e .sp_wrap .bar-wrap {
      position: absolute;
      height: 60px;
      width: 80%;
      top: 50%;
      right: 0;
      transform: translate(0,-100%);
      }  
    /*page_creation_bod_e*/

    /*page_creation_bod_f*/
     .page_creation_bod_f .screentop_para{
        margin: 50px 50px 50px 0;
        overflow: hidden;
        display: inline-block;
        position: relative;
      }
      .page_creation_bod_f .tabular_data{
        width:calc( 100% - 100px );
        margin: 0 auto;
        clear: both;
      }
      .page_creation_bod_f .tabular_data .c_row{
       display: flex;
      }
      .page_creation_bod_f .tabular_data .c_row div{
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
      .page_creation_bod_f .tabular_data .c_row div:last-child{
        border-left: 1px solid #4f0f8c;
      }
      .page_creation_bod_f .tabular_data .c_row:last-child div{
        border-bottom: 1px solid #4f0f8c; 
      }
      .page_creation_bod_f .tabular_data .tabular_data_inner .c_row:hover div:first-child{
        background: #FF375E;
      }
      .page_creation_bod_f .tabular_data .tabular_data_inner .c_row div:first-child{
        text-align: center;
        justify-content: center;
      }
      .page_creation_bod_f .tabular_data .tabular_data_inner .c_row:hover div{
        background: #4f0f8c;
        color: #fff;
      }
      .page_creation_bod_f .tabular_data .c_row.second div  {
        padding: 10px;
      }
      .page_creation_bod_f .tabular_data .c_row.first {
        margin-bottom: 20px;
      }
      .page_creation_bod_f .tabular_data .c_row.first div{
        border:none;
        border-left: 1px solid #fff;
        color: #fff;
        padding: 20px;
        text-align: center;
        justify-content: center;
      }

      .page_creation_bod_f .tabular_data2{
        width:calc( 100% - 100px );
        margin: 0 auto;
        clear: both;
      }
      .page_creation_bod_f .tabular_data2 .c_row{
       display: flex;
      }

      .page_creation_bod_f .tabular_data2 .c_row.first.table_white div{
        color: #4f0f8c;
        border: 1px solid #4f0f8c;
        border-left: none;
        border-top: none;
      }
       .page_creation_bod_f .tabular_data2 .c_row.first.table_white div.last div.c_row{
        border-left: 0 !important;
      }
      .page_creation_bod_f .tabular_data2 .c_row.first.table_white div span{
        border-left: 1px solid #4f0f8c !important;
      }
      .page_creation_bod_f .tabular_data2 .c_row.first.table_white div span:last-child{
        border-left: none !important;
      }
      .page_creation_bod_f .tabular_data2 .c_row div{
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
      .page_creation_bod_f .tabular_data2 .c_row div:last-child{
        border-left: 1px solid #4f0f8c !important;
      }
      .page_creation_bod_f .tabular_data2 .c_row:last-child div{
        border-bottom: 1px solid #4f0f8c; 
      }
      .page_creation_bod_f .tabular_data2 .tabular_data_inner .c_row:hover div:first-child{
        background: #FF375E;
      }
      .page_creation_bod_f .tabular_data2 .tabular_data_inner .c_row div:first-child{
        text-align: center;
        justify-content: center;
      }
      .page_creation_bod_f .tabular_data2 .tabular_data_inner .c_row:hover div{
        background: #4f0f8c;
        color: #fff;
      }
      .page_creation_bod_f .tabular_data2 .c_row.second div  {
        padding: 10px;
      }
      .page_creation_bod_f .tabular_data2 .c_row.first {
        margin-bottom: 0;
      }
      .page_creation_bod_f .tabular_data2 .c_row.first div{
        border:none;
        border-left: 1px solid #fff;
        color: #fff;
        padding: 20px;
        text-align: center;
        justify-content: center;
      }
      .page_creation_bod_f .tabular_data2 .c_row.first div.last{
        padding: 0;
        flex-wrap: wrap;
        flex: 20%;
        align-items: initial;
      }
      .page_creation_bod_f .tabular_data2 .c_row.first div.last .f-row{
        display: flex;
        flex: initial;
        flex-wrap: wrap;
        flex: 0 0 100%;
        border: none;
        padding: 0;
      }
      .page_creation_bod_f .tabular_data2 .c_row.first div.last .f-row span{
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
      .page_creation_bod_f .tabular_data2 .c_row.first div.last .f-row span:last-child{
         border-left: none !important;
      }
      .page_creation_bod_f .img_wrap {
        position: relative;
        overflow: hidden;
      }
      .page_creation_bod_f .img_wrap .left{
        width: 40%;
        float: left;

      }
      .page_creation_bod_f .img_wrap .right{
        width: 35%;
        float: right;
      }
      .page_creation_bod_f .img_wrap img{
        width: 100%;
      }
      .page_creation_bod_f .cwrapper{
          margin-bottom:50px;
      }
      .page_creation_bod_f .bar-wrap{
        position: relative;
        height: 10px;
        width: 100%;
        margin-bottom: 50px;
      }

      .page_creation_bod_f .sp_wrap .content-wrapper {
        position: relative;
        /*margin: 50px 0;*/
      }
      .page_creation_bod_f .sp_wrap .content-wrapper.c-row-reverse .left{
        width: 50%;
        float: right;
      }
      .page_creation_bod_f .sp_wrap .content-wrapper.c-row-reverse .left .box_center_content{
        float: right;
        width: 90%;
      }
      .page_creation_bod_f .sp_wrap .content-wrapper.c-row-reverse .right{
      }
      .page_creation_bod_f .sp_wrap .content-wrapper:after {
        content: '';
        display: table;
        clear: both;
      }
      .page_creation_bod_f .sp_wrap .content-wrapper .left{
        width: 50%;
        float: left;
        position: relative;
        min-height: 250px;
      }
      .page_creation_bod_f .sp_wrap .content-wrapper .left .box_center_content{
          /*margin:0 auto;*/
          width: 80%;
          min-height: 400px;
          /*float: left;*/
      }

      .page_creation_bod_f .sp_wrap .content-wrapper .left .box_center_content p{
        font-size: 28px;
        line-height: 38px;
        font-family: "stc_light";
      }
      .page_creation_bod_f .sp_wrap .content-wrapper .img-wrap{
        height: 400px;
      }
      .page_creation_bod_f .sp_wrap .content-wrapper .img-wrap img{
        height: 100%;
        width: 100%;
        object-fit: cover;
        object-position: top right;
      }
      .page_creation_bod_f .sp_wrap .content-wrapper .right{
        width: 40%;
        float: right;
        position: relative;
        min-height: 250px;
      }
      .page_creation_bod_f .sp_wrap .sp_row{
          display: flex;
          margin:50px 0;
      }
      .page_creation_bod_f .sp_wrap .sp_row .left,
      .page_creation_bod_f .sp_wrap .sp_row .right{
      flex: initial;
      }
      .page_creation_bod_f .sp2_row .left,
      .page_creation_bod_f .sp2_row .right{
      height: 400px;
      }
      .page_creation_bod_f .sp2_row .right
      {
      height: 400px;
      padding: 40px;
      width: 45%;
      }
      .page_creation_bod_f .sp_wrap .sp_row .right .content_para{
      margin-bottom: 0;
      }
      .page_creation_bod_f .sp_wrap .bar-wrap {
      position: absolute;
      height: 60px;
      width: 80%;
      top: 50%;
      right: 0;
      transform: translate(0,-100%);
      }  
    /*page_creation_bod_f*/

    /*page_creation_bod_g*/
     .page_creation_bod_g .screentop_para{
        margin: 50px 50px 50px 0;
        overflow: hidden;
        display: inline-block;
        position: relative;
      }
      .page_creation_bod_g .tabular_data{
        width:calc( 100% - 100px );
        margin: 0 auto;
        clear: both;
      }
      .page_creation_bod_g .tabular_data .c_row{
       display: flex;
      }
      .page_creation_bod_g .tabular_data .c_row div{
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
      .page_creation_bod_g .tabular_data .c_row div:last-child{
        border-left: 1px solid #4f0f8c;
      }
      .page_creation_bod_g .tabular_data .c_row:last-child div{
        border-bottom: 1px solid #4f0f8c; 
      }
      .page_creation_bod_g .tabular_data .tabular_data_inner .c_row:hover div:first-child{
        background: #FF375E;
      }
      .page_creation_bod_g .tabular_data .tabular_data_inner .c_row div:first-child{
        text-align: center;
        justify-content: center;
      }
      .page_creation_bod_g .tabular_data .tabular_data_inner .c_row:hover div{
        background: #4f0f8c;
        color: #fff;
      }
      .page_creation_bod_g .tabular_data .c_row.second div  {
        padding: 10px;
      }
      .page_creation_bod_g .tabular_data .c_row.first {
        margin-bottom: 20px;
      }
      .page_creation_bod_g .tabular_data .c_row.first div{
        border:none;
        border-left: 1px solid #fff;
        color: #fff;
        padding: 20px;
        text-align: center;
        justify-content: center;
      }

      .page_creation_bod_g .tabular_data2{
        width:calc( 100% - 100px );
        margin: 0 auto;
        clear: both;
      }
      .page_creation_bod_g .tabular_data2 .c_row{
       display: flex;
      }

      .page_creation_bod_g .tabular_data2 .c_row.first.table_white div{
        color: #4f0f8c;
        border: 1px solid #4f0f8c;
        border-left: none;
        border-top: none;
      }
       .page_creation_bod_g .tabular_data2 .c_row.first.table_white div.last div.c_row{
        border-left: 0 !important;
      }
      .page_creation_bod_g .tabular_data2 .c_row.first.table_white div span{
        border-left: 1px solid #4f0f8c !important;
      }
      .page_creation_bod_g .tabular_data2 .c_row.first.table_white div span:last-child{
        border-left: none !important;
      }
      .page_creation_bod_g .tabular_data2 .c_row div{
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
      .page_creation_bod_g .tabular_data2 .c_row div:last-child{
        border-left: 1px solid #4f0f8c !important;
      }
      .page_creation_bod_g .tabular_data2 .c_row:last-child div{
        border-bottom: 1px solid #4f0f8c; 
      }
      .page_creation_bod_g .tabular_data2 .tabular_data_inner .c_row:hover div:first-child{
        background: #FF375E;
      }
      .page_creation_bod_g .tabular_data2 .tabular_data_inner .c_row div:first-child{
        text-align: center;
        justify-content: center;
      }
      .page_creation_bod_g .tabular_data2 .tabular_data_inner .c_row:hover div{
        background: #4f0f8c;
        color: #fff;
      }
      .page_creation_bod_g .tabular_data2 .c_row.second div  {
        padding: 10px;
      }
      .page_creation_bod_g .tabular_data2 .c_row.first {
        margin-bottom: 0;
      }
      .page_creation_bod_g .tabular_data2 .c_row.first div{
        border:none;
        border-left: 1px solid #fff;
        color: #fff;
        padding: 20px;
        text-align: center;
        justify-content: center;
      }
      .page_creation_bod_g .tabular_data2 .c_row.first div.last{
        padding: 0;
        flex-wrap: wrap;
        flex: 20%;
        align-items: initial;
      }
      .page_creation_bod_g .tabular_data2 .c_row.first div.last .f-row{
        display: flex;
        flex: initial;
        flex-wrap: wrap;
        flex: 0 0 100%;
        border: none;
        padding: 0;
      }
      .page_creation_bod_g .tabular_data2 .c_row.first div.last .f-row span{
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
      .page_creation_bod_g .tabular_data2 .c_row.first div.last .f-row span:last-child{
         border-left: none !important;
      }
      .page_creation_bod_g .img_wrap {
        position: relative;
        overflow: hidden;
      }
      .page_creation_bod_g .img_wrap .left{
        width: 40%;
        float: left;

      }
      .page_creation_bod_g .img_wrap .right{
        width: 35%;
        float: right;
      }
      .page_creation_bod_g .img_wrap img{
        width: 100%;
      }
      .page_creation_bod_g .cwrapper{
          margin-bottom:50px;
      }
      .page_creation_bod_g .bar-wrap{
        position: relative;
        height: 10px;
        width: 100%;
        margin-bottom: 50px;
      }

      .page_creation_bod_g .sp_wrap .content-wrapper {
        position: relative;
        /*margin: 50px 0;*/
      }
      .page_creation_bod_g .sp_wrap .content-wrapper.c-row-reverse .left{
        width: 50%;
        float: right;
      }
      .page_creation_bod_g .sp_wrap .content-wrapper.c-row-reverse .left .box_center_content{
        float: right;
        width: 90%;
      }
      .page_creation_bod_g .sp_wrap .content-wrapper.c-row-reverse .right{
      }
      .page_creation_bod_g .sp_wrap .content-wrapper:after {
        content: '';
        display: table;
        clear: both;
      }
      .page_creation_bod_g .sp_wrap .content-wrapper .left{
        width: 50%;
        float: left;
        position: relative;
        min-height: 250px;
      }
      .page_creation_bod_g .sp_wrap .content-wrapper .left .box_center_content{
          /*margin:0 auto;*/
          width: 80%;
          min-height: 400px;
          /*float: left;*/
      }

      .page_creation_bod_g .sp_wrap .content-wrapper .left .box_center_content p{
        font-size: 28px;
        line-height: 38px;
        font-family: "stc_light";
      }
      .page_creation_bod_g .sp_wrap .content-wrapper .img-wrap{
        height: 400px;
      }
      .page_creation_bod_g .sp_wrap .content-wrapper .img-wrap img{
        height: 100%;
        width: 100%;
        object-fit: cover;
        object-position: top right;
      }
      .page_creation_bod_g .sp_wrap .content-wrapper .right{
        width: 40%;
        float: right;
        position: relative;
        min-height: 250px;
      }
      .page_creation_bod_g .sp_wrap .sp_row{
          display: flex;
          margin:50px 0;
      }
      .page_creation_bod_g .sp_wrap .sp_row .left,
      .page_creation_bod_g .sp_wrap .sp_row .right{
      flex: initial;
      }
      .page_creation_bod_g .sp2_row .left,
      .page_creation_bod_g .sp2_row .right{
      height: 400px;
      }
      .page_creation_bod_g .sp2_row .right
      {
      height: 400px;
      padding: 40px;
      width: 45%;
      }
      .page_creation_bod_g .sp_wrap .sp_row .right .content_para{
      margin-bottom: 0;
      }
      .page_creation_bod_g .sp_wrap .bar-wrap {
      position: absolute;
      height: 60px;
      width: 80%;
      top: 50%;
      right: 0;
      transform: translate(0,-100%);
      }  
    /*page_creation_bod_g*/

    /*page_creation_bod_h*/
     .page_creation_bod_h .screentop_para{
        margin: 50px 50px 50px 0;
        overflow: hidden;
        display: inline-block;
        position: relative;
      }
      .page_creation_bod_h .tabular_data{
        width:calc( 100% - 100px );
        margin: 0 auto;
        clear: both;
      }
      .page_creation_bod_h .tabular_data .c_row{
       display: flex;
      }
      .page_creation_bod_h .tabular_data .c_row div{
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
      .page_creation_bod_h .tabular_data .c_row div:last-child{
        border-left: 1px solid #4f0f8c;
      }
      .page_creation_bod_h .tabular_data .c_row:last-child div{
        border-bottom: 1px solid #4f0f8c; 
      }
      .page_creation_bod_h .tabular_data .tabular_data_inner .c_row:hover div:first-child{
        background: #FF375E;
      }
      .page_creation_bod_h .tabular_data .tabular_data_inner .c_row div:first-child{
        text-align: center;
        justify-content: center;
      }
      .page_creation_bod_h .tabular_data .tabular_data_inner .c_row:hover div{
        background: #4f0f8c;
        color: #fff;
      }
      .page_creation_bod_h .tabular_data .c_row.second div  {
        padding: 10px;
      }
      .page_creation_bod_h .tabular_data .c_row.first {
        margin-bottom: 20px;
      }
      .page_creation_bod_h .tabular_data .c_row.first div{
        border:none;
        border-left: 1px solid #fff;
        color: #fff;
        padding: 20px;
        text-align: center;
        justify-content: center;
      }

      .page_creation_bod_h .tabular_data2{
        width:calc( 100% - 100px );
        margin: 0 auto;
        clear: both;
      }
      .page_creation_bod_h .tabular_data2 .c_row{
       display: flex;
      }

      .page_creation_bod_h .tabular_data2 .c_row.first.table_white div{
        color: #4f0f8c;
        border: 1px solid #4f0f8c;
        border-left: none;
        border-top: none;
      }
       .page_creation_bod_h .tabular_data2 .c_row.first.table_white div.last div.c_row{
        border-left: 0 !important;
      }
      .page_creation_bod_h .tabular_data2 .c_row.first.table_white div span{
        border-left: 1px solid #4f0f8c !important;
      }
      .page_creation_bod_h .tabular_data2 .c_row.first.table_white div span:last-child{
        border-left: none !important;
      }
      .page_creation_bod_h .tabular_data2 .c_row div{
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
      .page_creation_bod_h .tabular_data2 .c_row div:last-child{
        border-left: 1px solid #4f0f8c !important;
      }
      .page_creation_bod_h .tabular_data2 .c_row:last-child div{
        border-bottom: 1px solid #4f0f8c; 
      }
      .page_creation_bod_h .tabular_data2 .tabular_data_inner .c_row:hover div:first-child{
        background: #FF375E;
      }
      .page_creation_bod_h .tabular_data2 .tabular_data_inner .c_row div:first-child{
        text-align: center;
        justify-content: center;
      }
      .page_creation_bod_h .tabular_data2 .tabular_data_inner .c_row:hover div{
        background: #4f0f8c;
        color: #fff;
      }
      .page_creation_bod_h .tabular_data2 .c_row.second div  {
        padding: 10px;
      }
      .page_creation_bod_h .tabular_data2 .c_row.first {
        margin-bottom: 0;
      }
      .page_creation_bod_h .tabular_data2 .c_row.first div{
        border:none;
        border-left: 1px solid #fff;
        color: #fff;
        padding: 20px;
        text-align: center;
        justify-content: center;
      }
      .page_creation_bod_h .tabular_data2 .c_row.first div.last{
        padding: 0;
        flex-wrap: wrap;
        flex: 20%;
        align-items: initial;
      }
      .page_creation_bod_h .tabular_data2 .c_row.first div.last .f-row{
        display: flex;
        flex: initial;
        flex-wrap: wrap;
        flex: 0 0 100%;
        border: none;
        padding: 0;
      }
      .page_creation_bod_h .tabular_data2 .c_row.first div.last .f-row span{
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
      .page_creation_bod_h .tabular_data2 .c_row.first div.last .f-row span:last-child{
         border-left: none !important;
      }
      .page_creation_bod_h .img_wrap {
        position: relative;
        overflow: hidden;
      }
      .page_creation_bod_h .img_wrap .left{
        width: 40%;
        float: left;

      }
      .page_creation_bod_h .img_wrap .right{
        width: 35%;
        float: right;
      }
      .page_creation_bod_h .img_wrap img{
        width: 100%;
      }
      .page_creation_bod_h .cwrapper{
          margin-bottom:50px;
      }
      .page_creation_bod_h .bar-wrap{
        position: relative;
        height: 10px;
        width: 100%;
        margin-bottom: 50px;
      }

      .page_creation_bod_h .sp_wrap .content-wrapper {
        position: relative;
        /*margin: 50px 0;*/
      }
      .page_creation_bod_h .sp_wrap .content-wrapper.c-row-reverse .left{
        width: 50%;
        float: right;
      }
      .page_creation_bod_h .sp_wrap .content-wrapper.c-row-reverse .left .box_center_content{
        float: right;
        width: 90%;
      }
      .page_creation_bod_h .sp_wrap .content-wrapper.c-row-reverse .right{
      }
      .page_creation_bod_h .sp_wrap .content-wrapper:after {
        content: '';
        display: table;
        clear: both;
      }
      .page_creation_bod_h .sp_wrap .content-wrapper .left{
        width: 50%;
        float: left;
        position: relative;
        min-height: 250px;
      }
      .page_creation_bod_h .sp_wrap .content-wrapper .left .box_center_content{
          /*margin:0 auto;*/
          width: 80%;
          min-height: 400px;
          /*float: left;*/
      }

      .page_creation_bod_h .sp_wrap .content-wrapper .left .box_center_content p{
        font-size: 28px;
        line-height: 38px;
        font-family: "stc_light";
      }
      .page_creation_bod_h .sp_wrap .content-wrapper .img-wrap{
        height: 400px;
      }
      .page_creation_bod_h .sp_wrap .content-wrapper .img-wrap img{
        height: 100%;
        width: 100%;
        object-fit: cover;
        object-position: top right;
      }
      .page_creation_bod_h .sp_wrap .content-wrapper .right{
        width: 40%;
        float: right;
        position: relative;
        min-height: 250px;
      }
      .page_creation_bod_h .sp_wrap .sp_row{
          display: flex;
          margin:50px 0;
      }
      .page_creation_bod_h .sp_wrap .sp_row .left,
      .page_creation_bod_h .sp_wrap .sp_row .right{
      flex: initial;
      }
      .page_creation_bod_h .sp2_row .left,
      .page_creation_bod_h .sp2_row .right{
      height: 400px;
      }
      .page_creation_bod_h .sp2_row .right
      {
      height: 400px;
      padding: 40px;
      width: 45%;
      }
      .page_creation_bod_h .sp_wrap .sp_row .right .content_para{
      margin-bottom: 0;
      }
      .page_creation_bod_h .sp_wrap .bar-wrap {
      position: absolute;
      height: 60px;
      width: 80%;
      top: 50%;
      right: 0;
      transform: translate(0,-100%);
      }  
    /*page_creation_bod_h*/

     /*page_creation_bod_i*/
     .page_creation_bod_i .screentop_para{
        margin: 50px 50px 50px 0;
        overflow: hidden;
        display: inline-block;
        position: relative;
      }
      .page_creation_bod_i .tabular_data{
        width:calc( 100% - 100px );
        margin: 0 auto;
        clear: both;
      }
      .page_creation_bod_i .tabular_data .c_row{
       display: flex;
      }
      .page_creation_bod_i .tabular_data .c_row div{
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
      .page_creation_bod_i .tabular_data .c_row div:last-child{
        border-left: 1px solid #4f0f8c;
      }
      .page_creation_bod_i .tabular_data .c_row:last-child div{
        border-bottom: 1px solid #4f0f8c; 
      }
      .page_creation_bod_i .tabular_data .tabular_data_inner .c_row:hover div:first-child{
        background: #FF375E;
      }
      .page_creation_bod_i .tabular_data .tabular_data_inner .c_row div:first-child{
        text-align: center;
        justify-content: center;
      }
      .page_creation_bod_i .tabular_data .tabular_data_inner .c_row:hover div{
        background: #4f0f8c;
        color: #fff;
      }
      .page_creation_bod_i .tabular_data .c_row.second div  {
        padding: 10px;
      }
      .page_creation_bod_i .tabular_data .c_row.first {
        margin-bottom: 20px;
      }
      .page_creation_bod_i .tabular_data .c_row.first div{
        border:none;
        border-left: 1px solid #fff;
        color: #fff;
        padding: 20px;
        text-align: center;
        justify-content: center;
      }

      .page_creation_bod_i .tabular_data2{
        width:calc( 100% - 100px );
        margin: 0 auto;
        clear: both;
      }
      .page_creation_bod_i .tabular_data2 .c_row{
       display: flex;
      }

      .page_creation_bod_i .tabular_data2 .c_row.first.table_white div{
        color: #4f0f8c;
        border: 1px solid #4f0f8c;
        border-left: none;
        border-top: none;
      }
       .page_creation_bod_i .tabular_data2 .c_row.first.table_white div.last div.c_row{
        border-left: 0 !important;
      }
      .page_creation_bod_i .tabular_data2 .c_row.first.table_white div span{
        border-left: 1px solid #4f0f8c !important;
      }
      .page_creation_bod_i .tabular_data2 .c_row.first.table_white div span:last-child{
        border-left: none !important;
      }
      .page_creation_bod_i .tabular_data2 .c_row div{
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
      .page_creation_bod_i .tabular_data2 .c_row div:last-child{
        border-left: 1px solid #4f0f8c !important;
      }
      .page_creation_bod_i .tabular_data2 .c_row:last-child div{
        border-bottom: 1px solid #4f0f8c; 
      }
      .page_creation_bod_i .tabular_data2 .tabular_data_inner .c_row:hover div:first-child{
        background: #FF375E;
      }
      .page_creation_bod_i .tabular_data2 .tabular_data_inner .c_row div:first-child{
        text-align: center;
        justify-content: center;
      }
      .page_creation_bod_i .tabular_data2 .tabular_data_inner .c_row:hover div{
        background: #4f0f8c;
        color: #fff;
      }
      .page_creation_bod_i .tabular_data2 .c_row.second div  {
        padding: 10px;
      }
      .page_creation_bod_i .tabular_data2 .c_row.first {
        margin-bottom: 0;
      }
      .page_creation_bod_i .tabular_data2 .c_row.first div{
        border:none;
        border-left: 1px solid #fff;
        color: #fff;
        padding: 20px;
        text-align: center;
        justify-content: center;
      }
      .page_creation_bod_i .tabular_data2 .c_row.first div.last{
        padding: 0;
        flex-wrap: wrap;
        flex: 20%;
        align-items: initial;
      }
      .page_creation_bod_i .tabular_data2 .c_row.first div.last .f-row{
        display: flex;
        flex: initial;
        flex-wrap: wrap;
        flex: 0 0 100%;
        border: none;
        padding: 0;
      }
      .page_creation_bod_i .tabular_data2 .c_row.first div.last .f-row span{
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
      .page_creation_bod_i .tabular_data2 .c_row.first div.last .f-row span:last-child{
         border-left: none !important;
      }
      .page_creation_bod_i .img_wrap {
        position: relative;
        overflow: hidden;
      }
      .page_creation_bod_i .img_wrap .left{
        width: 40%;
        float: left;

      }
      .page_creation_bod_i .img_wrap .right{
        width: 35%;
        float: right;
      }
      .page_creation_bod_i .img_wrap img{
        width: 100%;
      }
      .page_creation_bod_i .cwrapper{
          margin-bottom:50px;
      }
      .page_creation_bod_i .bar-wrap{
        position: relative;
        height: 10px;
        width: 100%;
        margin-bottom: 50px;
      }

      .page_creation_bod_i .sp_wrap .content-wrapper {
        position: relative;
        /*margin: 50px 0;*/
      }
      .page_creation_bod_i .sp_wrap .content-wrapper.c-row-reverse .left{
        width: 50%;
        float: right;
      }
      .page_creation_bod_i .sp_wrap .content-wrapper.c-row-reverse .left .box_center_content{
        float: right;
        width: 90%;
      }
      .page_creation_bod_i .sp_wrap .content-wrapper.c-row-reverse .right{
      }
      .page_creation_bod_i .sp_wrap .content-wrapper:after {
        content: '';
        display: table;
        clear: both;
      }
      .page_creation_bod_i .sp_wrap .content-wrapper .left{
        width: 50%;
        float: left;
        position: relative;
        min-height: 250px;
      }
      .page_creation_bod_i .sp_wrap .content-wrapper .left .box_center_content{
          /*margin:0 auto;*/
          width: 80%;
          min-height: 400px;
          /*float: left;*/
      }

      .page_creation_bod_i .sp_wrap .content-wrapper .left .box_center_content p{
        font-size: 28px;
        line-height: 38px;
        font-family: "stc_light";
      }
      .page_creation_bod_i .sp_wrap .content-wrapper .img-wrap{
        height: 400px;
      }
      .page_creation_bod_i .sp_wrap .content-wrapper .img-wrap img{
        height: 100%;
        width: 100%;
        object-fit: cover;
        object-position: top right;
      }
      .page_creation_bod_i .sp_wrap .content-wrapper .right{
        width: 40%;
        float: right;
        position: relative;
        min-height: 250px;
      }
      .page_creation_bod_i .sp_wrap .sp_row{
          display: flex;
          margin:50px 0;
      }
      .page_creation_bod_i .sp_wrap .sp_row .left,
      .page_creation_bod_i .sp_wrap .sp_row .right{
      flex: initial;
      }
      .page_creation_bod_i .sp2_row .left,
      .page_creation_bod_i .sp2_row .right{
      height: 400px;
      }
      .page_creation_bod_i .sp2_row .right
      {
      height: 400px;
      padding: 40px;
      width: 45%;
      }
      .page_creation_bod_i .sp_wrap .sp_row .right .content_para{
      margin-bottom: 0;
      }
      .page_creation_bod_i .sp_wrap .bar-wrap {
      position: absolute;
      height: 60px;
      width: 80%;
      top: 50%;
      right: 0;
      transform: translate(0,-100%);
      }  
    /*page_creation_bod_i*/

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
        <div class="cwrapper ">
          <div class="screentop_para">
            <h1>
              <span class="h1 colr_white bk_purple" style="padding: 5px 15px 5px 150px;"> ‫
                مجلس‬ ‫لجان‬ ‫أعضاء‬  
              </span> 
            </h1>
            <h1>
              <span class="h1 colr_purple"> 
                sa
                وتصنيف عضو 
              </span>
            </h1>
          </div>
          <div class="img_wrap" >
            <div class="left">
               <img src="img/board_boxes.png">
            </div>
            <div class="right"  style="padding-top: 40px;">
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
      </div>
    <!-- SECTION1 -->
   

    <!-- SECTION2 -->
      <div class="page_creation_bod_b">
        <div class="cwrapper">
          <div class="screentop_para">
          <h1>
            <span class="h1 colr_white bk_purple" style="padding: 5px 15px 5px 150px;"> &#8235;
             ‫مجلس‬ ‫لجان‬ ‫أعضاء‬
            </span> 
          </h1>
          <h1>
            <span class="h1 colr_purple"> 
            ‫الخارجيين‬ ‫دارة‬ ‫ا‬ 
            </span>
          </h1>
          </div>
          <div class="img_wrap">
            <div class="left">
               <img src="img/board_boxes.png">
            </div>
            <div class="right" style="padding-top: 40px;">
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
                </div>
                <div>
                </div>
                <div>
                </div>
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
                <div>2</div>
                <div>

                </div>
                <div>
             
                </div>
                <div>
            
                </div>
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
                <div>3</div>
                <div>
          
                </div>
                <div>
             
                </div>
                <div>
               
                </div>
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
                <div>4</div>
                <div>
            
                </div>
                <div>
               
                </div>
                <div>
             
                </div>
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
                <div>5</div>
                <div>
             

                </div>
                <div>
            
                </div>
                <div>
              
               
                </div>
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
                <div>6</div>
                <div>

                </div>
                <div>
               
                </div>
                <div>
             
                </div>
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
                <div>7</div>
                <div>
              

                </div>
                <div>
               
                </div>
                <div>
               
                </div>
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
                <div>8</div>
                <div>
               

                </div>
                <div>
              
                </div>
                <div>
               
                </div>
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
                <div>9</div>
                <div>
            

                </div>
                <div>
               
                </div>
                <div>
             
                </div>
                <div>
               
                </div>
                <div>
               
                </div>
                <div>
               
                </div>
                <div>
                  حكومي
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- SECTION2 -->

    <!-- SECTION3 -->
    <div class="page_creation_bod_c">
      <div class="cwrapper">
        <div class="screentop_para">
          <h1>
            <span class="h1 colr_white bk_purple" style="padding: 5px 15px 5px 150px;"> ‫
              ‫دارة‬ ‫ا‬ ‫أعضاء‬‬
            </span> 
          </h1>
          <h1>
            <span class="h1 colr_purple"> 
             ‫التنفيذية‬
            </span>
        </h1>
        </div>
        <div class="img_wrap" style="overflow: initial;margin-top: -200px;">
          <div class="right" style="width: 40%;padding: 0;margin: 0;">
            <img src="img/board_boxes3.png">
          </div>
        </div>
         

         <div class="tabular_data">
          <div class="c_row first bk_purple">
            <div>‫م‬</div>
            <div>‫سم‬ ‫ا‬</div>
            <div>‫العلمية‬ ‫ت‬ ‫المؤه‬</div>
            <div>‫السعودية(‬ ‫ت‬ ‫تصا‬ ‫)ا‬ ‫الحالية‬ ‫الوظيفة‬</div>
            <div>‫السابقة‬ ‫الوظيفة‬</div>
            <div> ال‬كة‬</div>
           
          </div>
           <div class="c_row bk_purple second">
              <div class="bk_pink"></div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
              
            </div>
          <div class="tabular_data_inner">
           
            <div class="c_row">
              <div>1</div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
            </div>

            <div class="c_row">
              <div>2</div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
            </div>

             <div class="c_row">
              <div>3</div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
            </div>
            

             <div class="c_row">
              <div>4</div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
            </div>

            <div class="c_row">
              <div>5</div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
            </div>

            <div class="c_row">
              <div>6</div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
            </div>

            <div class="c_row">
              <div>7</div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
            </div>

            <div class="c_row">
              <div>8</div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
            </div>

            <div class="c_row">
              <div>9</div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
            </div>

             <div class="c_row">
              <div>10</div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
            </div>

            <div class="c_row">
              <div>11</div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
            </div>

            <div class="c_row">
              <div>12</div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
            </div>

            <div class="c_row">
              <div>13</div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
            </div>

            <div class="c_row">
              <div>14</div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
            </div>

            <div class="c_row">
              <div>15</div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- SECTION3 -->

    <!-- SECTION4 -->
      <div class="page_creation_bod_d">
        <div class="cwrapper">
          <div class="screentop_para">
            <h1>
              <span class="h1 colr_white bk_purple" style="padding: 5px 15px 5px 150px;"> ‫
               ‫‫عضو‬ ‫يكون‬ ‫التي‬ ‫كات‬ ‫ال‬ ‫أسماء‬
              </span> 
            </h1>
            <h1>
              <span class="h1 colr_purple"> 
             ‫إدارتها‬ ‫مجالس‬ ‫في‬ ‫عضواً‬ ‫دارة‬ ‫ا‬ ‫مجلس‬
             <br>
             ‫مديريها‬ ‫من‬ ‫أو‬ ‫والسابقة‬ ‫الحالية‬
              </span>
          </h1>
          </div>
          <div class="tabular_data2 margint50">
             <div class="c_row first bk_purple">
               <div>‫
               ‫م‬
               </div>
               <div>‫‫‫المنصب‬</div>
               <div class="c_row last">
                 <div class="c_row f-row" style="padding:10px 20px;">‫الفعلية‬ ‫الملكية‬ ‫نسبة‬</div>
                 <div class="c_row f-row">
                   <span>‫‪31‬‬ ‫م‬ ‫‪2019‬‬ ‫ديسمبر‬</span>
                   <span>‫‪31‬‬ ‫م‬ ‫‪2018‬‬ ‫ديسمبر‬</span>
                 </div>
               </div>
               <div>‫
                 ال‬ ‫اسم‬
                 ‫التابعة‬ ‫كة‬
               </div>
                <div>‫
                 ال‬ ‫اسم‬
                 ‫التابعة‬ ‫كة‬
               </div>
               <div class="c_row last">
                 <div class="c_row f-row" style="padding:10px 20px;">‫الفعلية‬ ‫الملكية‬ ‫نسبة‬</div>
                 <div class="c_row f-row">
                   <span>‫‪31‬‬ ‫م‬ ‫‪2019‬‬ ‫ديسمبر‬</span>
                   <span>‫‪31‬‬ ‫م‬ ‫‪2018‬‬ ‫ديسمبر‬</span>
                 </div>
               </div>
               <div>‫
                 ال‬ ‫اسم‬
                 ‫التابعة‬ ‫كة‬
               </div>
               <div>‫
                 ال‬ ‫اسم‬
                 ‫التابعة‬ ‫كة‬
               </div>
             </div>
             <div class="c_row first table_white">
               <div>‫
                1
               </div>
               <div>‫التأسيس‬ ‫بلد‬</div>
               <div class="c_row last">
                 <div class="c_row f-row">
                   <span>‫‪31‬‬ ‫م‬ ‫‪2019‬‬ ‫ديسمبر‬</span>
                   <span>‫‪31‬‬ ‫م‬ ‫‪2018‬‬ ‫ديسمبر‬</span>
                 </div>
               </div>
               <div>‫
                 ال‬ ‫اسم‬
                 ‫التابعة‬ ‫كة‬
               </div>
                <div>‫
                 ال‬ ‫اسم‬
                 ‫التابعة‬ ‫كة‬
               </div>
               <div class="c_row last">
                 <div class="c_row f-row">
                   <span>‫‪31‬‬ ‫م‬ ‫‪2019‬‬ ‫ديسمبر‬</span>
                   <span>‫‪31‬‬ ‫م‬ ‫‪2018‬‬ ‫ديسمبر‬</span>
                 </div>
               </div>
               <div>‫
                 ال‬ ‫اسم‬
                 ‫التابعة‬ ‫كة‬
               </div>
               <div>‫
                 ال‬ ‫اسم‬
                 ‫التابعة‬ ‫كة‬
               </div>
             </div>
          </div>
        </div>
      </div>
    <!-- SECTION4 -->

    <!-- SECTION5 -->
      <div class="page_creation_bod_e">
        <div class="cwrapper">
          <div class="screentop_para">
            <h1>
              <span class="h1 colr_white bk_purple" style="padding: 5px 15px 5px 150px;"> ‫
               ‫في‬ ‫عضاء‬ ‫ا‬ ‫مشاركة‬
              </span> 
            </h1>
            <h1>
              <span class="h1 colr_purple"> 
               ‫واللجان‬ ‫المجلس‬ ‫اجتماعات‬
              </span>
          </h1>
          </div>
          <div class="img_wrap">
            <div class="right marginr50" style="width: 40%;">
             <p class="content_para">
              ‫لتلك‬ ‫عضاء‬ ‫ا‬ ‫وحضور‬ ‫السابعة‪،‬‬ ‫للدورة‬ ‫واللجان‬ ‫دارة‬ ‫ا‬ ‫مجلس‬ ‫اجتماعات‬ ‫عدد‬ ‫التالية‬ ‫الجداول‬ ‫تُبين‬ ‫ً‪:‬‬ ‫أو‬
              ‫التالي‬ ‫النحو‬ ‫على‬ ‫‪2019‬م‪،‬‬ ‫عام‬ ‫ل‬ ‫خ‬ ‫جتماعات‬ ‫ا‬ ‫‪:‬‬
             </p>
              <p class="content_para">
              ‫لتلك‬ ‫عضاء‬ ‫ا‬ ‫وحضور‬ ‫السابعة‪،‬‬ ‫للدورة‬ ‫واللجان‬ ‫دارة‬ ‫ا‬ ‫مجلس‬ ‫اجتماعات‬ ‫عدد‬ ‫التالية‬ ‫الجداول‬ ‫تُبين‬ ‫ً‪:‬‬ ‫أو‬
              ‫التالي‬ ‫النحو‬ ‫على‬ ‫‪2019‬م‪،‬‬ ‫عام‬ ‫ل‬ ‫خ‬ ‫جتماعات‬ ‫ا‬ ‫‪:‬‬
             </p>
            </div>
          </div>
          <div class="tabular_data2">
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
          <div class="sp_wrap margint50">
            <div class="content-wrapper ">
              <div class="left">
               <div class="img-wrap">
                 <img src="img/guy_tab1.jpg">
               </div>
              </div>
              <div class="right marginr50">
              <h5 class="h5 colr_purple">
              ‫ا‬دارة‬ ‫ا‬ ‫مجلس‬ ‫لجان‬ ‫اجتماعات‬           
              </h5>
               <p class="content_para">
               ‫حوكمة‬ ‫ئحة‬ ‫ل‬ ‫وفقاً‬ ‫‪stc،‬‬ ‫لتأدية‬ ‫زمة‬ ‫ال‬ ‫اللجان‬ ‫المجلس‬ ‫يشكل‬ ‫قة‪،‬‬ ‫الع‬ ‫ذات‬ ‫الجهات‬ ‫من‬ ‫الصادرة‬ ‫واللوائح‬ ‫نظمة‬ ‫وا‬
                ‫قبل‬ ‫من‬ ‫عملها‪،‬‬ ‫وإجراءات‬ ‫مسؤولياتها‪،‬‬ ‫تحديد‬ ‫اللجان‬ ‫تشكيل‬ ‫عند‬ ‫ويراعى‬ ‫المجلس‪،‬‬ ‫وفاعلية‬ ‫كفاءة‬ ‫يحقق‬ ‫بما‬ ‫عمله‬
                ‫نحو‬ ‫على‬ ‫بها‬ ‫قة‬ ‫الع‬ ‫ذوي‬ ‫وتعريف‬ ‫لذلك‪،‬‬ ‫زمة‬ ‫ال‬ ‫القرارات‬ ‫وإصدار‬ ‫جراءات‪،‬‬ ‫وا‬ ‫المسؤوليات‬ ‫هذه‬ ‫وتوثيق‬ ‫المجلس‬
                ‫التالي‬ ‫النحو‬ ‫على‬ ‫)السابعة(‬ ‫الحالية‬ ‫للدورة‬ ‫المجلس‬ ‫لجان‬ ‫شُكلت‬ ‫وقد‬ ‫‪:‬مناسب‪.‬‬
               </p>
               <br><br>
               <h5 class="h5 colr_purple">
                ‫التنفيذية‬ ‫‪:‬اللجنة‬            
               </h5>
               <p class="content_para">
                ‫‫كة‪،‬‬ ‫لل‬ ‫التنفيذي‬ ‫الرئيس‬ ‫أحدهما‬ ‫خارجيين‬ ‫وعضوين‬ ‫دارة‪،‬‬ ‫ا‬ ‫مجلس‬ ‫أعضاء‬ ‫من‬ ‫أعضاء‬ ‫أربعة‬ ‫من‬ ‫اللجنة‬ ‫تتكون‬
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
              <div class="right marginr50" style="position: relative; width: 50%;">
                <h5 class="h5 colr_purple">
                 ‫والمكافآت‬ ‫الترشيحات‬ ‫‪:‬لجنة‬           
                 </h5>
                 <p class="content_para">
                  ‫‫عليها‬ ‫والمصادقة‬ ‫ئمة‬ ‫الم‬ ‫التشغيل‬ ‫آلية‬ ‫تصميم‬ ‫عملية‬ ‫بمراجعة‬ ‫اللجنة‬ ‫وتختص‬ ‫خارجيين‬ ‫وعضوين‬ ‫دارة‪،‬‬ ‫ا‬ ‫مجلس‬ ‫أعضاء‬ ‫من‬ ‫عضوين‬ ‫من‬ ‫اللجنة‬ ‫تتكون‬
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

              <div class="right marginr50 noheight" style="position: relative; width: 50%;">
                <h5 class="h5 colr_purple">
                 ‫والمكافآت‬ ‫الترشيحات‬ ‫‪:‬لجنة‬           
                 </h5>
                 <p class="content_para">
                  ‫‫عليها‬ ‫والمصادقة‬ ‫ئمة‬ ‫الم‬ ‫التشغيل‬ ‫آلية‬ ‫تصميم‬ ‫عملية‬ ‫بمراجعة‬ ‫اللجنة‬ ‫وتختص‬ ‫خارجيين‬ ‫وعضوين‬ ‫دارة‪،‬‬ ‫ا‬ ‫مجلس‬ ‫أعضاء‬ ‫من‬ ‫عضوين‬ ‫من‬ ‫اللجنة‬ ‫تتكون‬
                  ‫والموظفين‬ ‫دارة‬ ‫ل‬ ‫زمة‬ ‫ال‬ ‫الحوافز‬ ‫يؤمّن‬ ‫بما‬ ‫ً‬ ‫عاد‬ ‫تطبيقاً‬ ‫وتطبيقها‬ ‫السوق‪،‬‬ ‫وتطورات‬ ‫معايير‬ ‫مع‬ ‫يتناسب‬ ‫بما‬ ‫الرواتب‬ ‫هيكل‬ ‫
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
                <div class="bar-wrap" style="top: 0;transform: translate(0,0);">
                   <div class="element_bars_hr" style="width: 100%;position: absolute;right: 0;height: 100%;">
                        <div class="leftbar bk_purple" style="width: 90%"></div>
                        <div class="rightbar bk_pink" style="width: 10%"></div>
                  </div>
                </div>
                <div class="img-wrap margint100 marginr50">
                  <img src="img/guy_tab1.jpg">
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
                </h5>
                <p class="content_para">
                ‫استراتيجية‬ ‫مع‬ ‫واضح‬ ‫وبشكل‬ ‫مرتبطة‬ ‫بالحوكمة‬ ‫خاصة‬ ‫استراتيجية‬ ‫وجود‬ ‫همية‬ ‫و‬ ‫‪stc،‬‬ ‫دارة‬ ‫ا‬ ‫حرصت‬
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
                   <br><br>
                ‫المادة‬ ‫باستثناء‬ ‫المالية‬ ‫السوق‬ ‫هيئة‬ ‫من‬ ‫الصادرة‬ ‫كات‬ ‫ال‬ ‫حوكمة‬ ‫ئحة‬ ‫أحكام‬ ‫جميع‬ ‫تطبيق‬ ‫تم‬ ‫وقد‬
                ‫حين‬ ‫في‬ ‫خمسة‪،‬‬ ‫عن‬ ‫يزيد‬ ‫و‬ ‫ثة‬ ‫ث‬ ‫عن‬ ‫اللجان‬ ‫أعضاء‬ ‫عدد‬ ‫يقل‬ ‫أ‬ ‫على‬ ‫تنص‬ ‫التي‬ ‫رابعاً(‪،‬‬ ‫)الفقرة‬ ‫الخمسون‬
                ‫الرئيس‬ ‫أحدهم‬ ‫خارجيين‪،‬‬ ‫وعضوين‬ ‫دارة‪،‬‬ ‫ا‬ ‫مجلس‬ ‫أعضاء‬ ‫من‬ ‫أعضاء‬ ‫أربعة‬ ‫من‬ ‫التنفيذية‬ ‫اللجنة‬ ‫تتكون‬
                   <br><br>
                ‫المادة‬ ‫باستثناء‬ ‫المالية‬ ‫السوق‬ ‫هيئة‬ ‫من‬ ‫الصادرة‬ ‫كات‬ ‫ال‬ ‫حوكمة‬ ‫ئحة‬ ‫أحكام‬ ‫جميع‬ ‫تطبيق‬ ‫تم‬ ‫وقد‬
                ‫حين‬ ‫في‬ ‫خمسة‪،‬‬ ‫عن‬ ‫يزيد‬ ‫و‬ ‫ثة‬ ‫ث‬ ‫عن‬ ‫اللجان‬ ‫أعضاء‬ ‫عدد‬ ‫يقل‬ ‫أ‬ ‫على‬ ‫تنص‬ ‫التي‬ ‫رابعاً(‪،‬‬ ‫)الفقرة‬ ‫الخمسون‬
                ‫الرئيس‬ ‫أحدهم‬ ‫خارجيين‪،‬‬ ‫وعضوين‬ ‫دارة‪،‬‬ ‫ا‬ ‫مجلس‬ ‫أعضاء‬ ‫من‬ ‫أعضاء‬ ‫أربعة‬ ‫من‬ ‫التنفيذية‬ ‫اللجنة‬ ‫تتكون‬
                   <br><br>
                ‫المادة‬ ‫باستثناء‬ ‫المالية‬ ‫السوق‬ ‫هيئة‬ ‫من‬ ‫الصادرة‬ ‫كات‬ ‫ال‬ ‫حوكمة‬ ‫ئحة‬ ‫أحكام‬ ‫جميع‬ ‫تطبيق‬ ‫تم‬ ‫وقد‬
                ‫حين‬ ‫في‬ ‫خمسة‪،‬‬ ‫عن‬ ‫يزيد‬ ‫و‬ ‫ثة‬ ‫ث‬ ‫عن‬ ‫اللجان‬ ‫أعضاء‬ ‫عدد‬ ‫يقل‬ ‫أ‬ ‫على‬ ‫تنص‬ ‫التي‬ ‫رابعاً(‪،‬‬ ‫)الفقرة‬ ‫الخمسون‬
                ‫الرئيس‬ ‫أحدهم‬ ‫خارجيين‪،‬‬ ‫وعضوين‬ ‫دارة‪،‬‬ ‫ا‬ ‫مجلس‬ ‫أعضاء‬ ‫من‬ ‫أعضاء‬ ‫أربعة‬ ‫من‬ ‫التنفيذية‬ ‫اللجنة‬ ‫تتكون‬
                   <br><br>
                ‫المادة‬ ‫باستثناء‬ ‫المالية‬ ‫السوق‬ ‫هيئة‬ ‫من‬ ‫الصادرة‬ ‫كات‬ ‫ال‬ ‫حوكمة‬ ‫ئحة‬ ‫أحكام‬ ‫جميع‬ ‫تطبيق‬ ‫تم‬ ‫وقد‬
                ‫حين‬ ‫في‬ ‫خمسة‪،‬‬ ‫عن‬ ‫يزيد‬ ‫و‬ ‫ثة‬ ‫ث‬ ‫عن‬ ‫اللجان‬ ‫أعضاء‬ ‫عدد‬ ‫يقل‬ ‫أ‬ ‫على‬ ‫تنص‬ ‫التي‬ ‫رابعاً(‪،‬‬ ‫)الفقرة‬ ‫الخمسون‬
                ‫الرئيس‬ ‫أحدهم‬ ‫خارجيين‪،‬‬ ‫وعضوين‬ ‫دارة‪،‬‬ ‫ا‬ ‫مجلس‬ ‫أعضاء‬ ‫من‬ ‫أعضاء‬ ‫أربعة‬ ‫من‬ ‫التنفيذية‬ ‫اللجنة‬ ‫تتكون‬
                   <br><br>
                ‫المادة‬ ‫باستثناء‬ ‫المالية‬ ‫السوق‬ ‫هيئة‬ ‫من‬ ‫الصادرة‬ ‫كات‬ ‫ال‬ ‫حوكمة‬ ‫ئحة‬ ‫أحكام‬ ‫جميع‬ ‫تطبيق‬ ‫تم‬ ‫وقد‬
                ‫حين‬ ‫في‬ ‫خمسة‪،‬‬ ‫عن‬ ‫يزيد‬ ‫و‬ ‫ثة‬ ‫ث‬ ‫عن‬ ‫اللجان‬ ‫أعضاء‬ ‫عدد‬ ‫يقل‬ ‫أ‬ ‫على‬ ‫تنص‬ ‫التي‬ ‫رابعاً(‪،‬‬ ‫)الفقرة‬ ‫الخمسون‬
                ‫الرئيس‬ ‫أحدهم‬ ‫خارجيين‪،‬‬ ‫وعضوين‬ ‫دارة‪،‬‬ ‫ا‬ ‫مجلس‬ ‫أعضاء‬ ‫من‬ ‫أعضاء‬ ‫أربعة‬ ‫من‬ ‫التنفيذية‬ ‫اللجنة‬ ‫تتكون‬
                   <br><br>
                ‫المادة‬ ‫باستثناء‬ ‫المالية‬ ‫السوق‬ ‫هيئة‬ ‫من‬ ‫الصادرة‬ ‫كات‬ ‫ال‬ ‫حوكمة‬ ‫ئحة‬ ‫أحكام‬ ‫جميع‬ ‫تطبيق‬ ‫تم‬ ‫وقد‬
                ‫حين‬ ‫في‬ ‫خمسة‪،‬‬ ‫عن‬ ‫يزيد‬ ‫و‬ ‫ثة‬ ‫ث‬ ‫عن‬ ‫اللجان‬ ‫أعضاء‬ ‫عدد‬ ‫يقل‬ ‫أ‬ ‫على‬ ‫تنص‬ ‫التي‬ ‫رابعاً(‪،‬‬ ‫)الفقرة‬ ‫الخمسون‬
                ‫الرئيس‬ ‫أحدهم‬ ‫خارجيين‪،‬‬ ‫وعضوين‬ ‫دارة‪،‬‬ ‫ا‬ ‫مجلس‬ ‫أعضاء‬ ‫من‬ ‫أعضاء‬ ‫أربعة‬ ‫من‬ ‫التنفيذية‬ ‫اللجنة‬ ‫تتكون‬
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
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- SECTION5 -->
    
    <!-- SECTION6 -->
      <div class="page_creation_bod_f">
        
      </div>
    <!-- SECTION6 -->

    <!-- SECTION7 -->
      <div class="page_creation_bod_g">
        <div class="sp_wrap cwrapper">
          <div class="screentop_para">
              <h1>
                <span class="h1 colr_white bk_purple" style="padding: 5px 15px 5px 150px;"> ‫
                  ‫‫حوكمة‬
                </span> 
              </h1>
              <h1>
                <span class="h1 colr_purple"> 
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
              ‫إدارة‬ ‫مجلس‬ ‫حرص‬ ‫‪stc‬‬ ‫داري‬ ‫ا‬ ‫كة‬ ‫ال‬ ‫نظام‬ ‫من‬ ‫يتجزأ‬ ‫جزء‬ ‫واعتباره‬ ‫فاعل‬ ‫حوكمة‬ ‫نظام‬ ‫تأسيس‬ ‫على‬
              ‫دارة‬ ‫ا‬ ‫مجلس‬ ‫بين‬ ‫قة‬ ‫الع‬ ‫إيضاح‬ ‫ل‬ ‫خ‬ ‫من‬ ‫الداخلية‬ ‫عمال‬ ‫ا‬ ‫تنظيم‬ ‫الحوكمة‬ ‫نظام‬ ‫يتولى‬ ‫حيث‬ ‫والمالي‪،‬‬
              ‫نظام‬ ‫يتولى‬ ‫كما‬ ‫أخرى‪،‬‬ ‫جهة‬ ‫من‬ ‫التنفيذية‬ ‫دارة‬ ‫وا‬ ‫دارة‬ ‫ا‬ ‫ومجلس‬ ‫جهة‪،‬‬ ‫من‬ ‫المساهمين‬ ‫وجمعية‬
              ‫في‬ ‫الحوكمة‬ ‫‪stc‬‬ ‫والجهات‬ ‫الحكومية‬ ‫القطاعات‬ ‫مع‬ ‫قاتها‬ ‫ع‬ ‫إدارة‬ ‫ل‬ ‫خ‬ ‫من‬ ‫الخارجية‬ ‫عمال‬ ‫ا‬ ‫تنظيم‬
              ‫أهداف‬ ‫تحقيق‬ ‫تكفل‬ ‫عالية‬ ‫وفاعلية‬ ‫كفاءة‬ ‫تحقيق‬ ‫بغرض‬ ‫والمقاولين‬ ‫والمورّدين‬ ‫يعية‬ ‫الت‬ ‫‪stc‬‬
              ‫تحرص‬ ‫كما‬ ‫ستراتيجية‪.‬‬ ‫ا‬ ‫‪stc‬‬ ‫والمراقبة‬ ‫بالتوجيه‬ ‫المتعلقة‬ ‫العمل‬ ‫وقواعد‬ ‫التنظيمات‬ ‫شمولية‬ ‫على‬
              ‫ستثمار‬ ‫وا‬ ‫التجارة‬ ‫وزارة‬ ‫مقام‬ ‫من‬ ‫الصادر‬ ‫كات‬ ‫ال‬ ‫نظام‬ ‫في‬ ‫ورد‬ ‫ما‬ ‫مع‬ ‫متوافقة‬ ‫لتكون‬ ‫والشفافية‬
              ‫قة‪،‬‬ ‫الع‬ ‫ذات‬ ‫خرى‬ ‫ا‬ ‫نظمة‬ ‫وا‬ ‫المالية‪،‬‬ ‫السوق‬ ‫هيئة‬ ‫إدارة‬ ‫مجلس‬ ‫من‬ ‫الصادرة‬ ‫كات‬ ‫ال‬ ‫حوكمة‬ ‫ئحة‬ ‫و‬
              ‫في‬ ‫عمال‬ ‫ا‬ ‫حوكمة‬ ‫مستوى‬ ‫رفع‬ ‫إلى‬ ‫ضافة‬ ‫با‬ ‫‪stc‬‬ ‫قليمية‬ ‫ا‬ ‫الممارسات‬ ‫أفضل‬ ‫من‬ ‫ستفادة‬ ‫ا‬ ‫ل‬ ‫خ‬ ‫من‬
              ‫‪.‬والعالمية‬
              <br>
              ‫في‬ ‫الحوكمة‬ ‫نظام‬ ‫مكن‬ ‫لقد‬ ‫‪stc‬‬ ‫ركائز‬ ‫من‬ ‫هامة‬ ‫ركيزة‬ ‫تعتبر‬ ‫والتي‬ ‫المستهدفة‬ ‫ستدامة‬ ‫ا‬ ‫تحقيق‬ ‫من‬
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
                    ‫استراتيجية‬ ‫مع‬ ‫واضح‬ ‫وبشكل‬ ‫مرتبطة‬ ‫بالحوكمة‬ ‫خاصة‬ ‫استراتيجية‬ ‫وجود‬ ‫همية‬ ‫و‬ ‫‪stc،‬‬ ‫دارة‬ ‫ا‬ ‫حرصت‬
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
        </div>
      </div>
    <!-- SECTION7 -->

    <!-- SECTION8 -->
      <div class="page_creation_bod_h">
        <div class="sp_wrap cwrapper">
          <div class="screentop_para">
              <h1>
                <span class="h1 colr_white bk_purple" style="padding: 5px 15px 5px 150px;"> ‫
                  ‫‫‫المراجعة‬
                </span> 
              </h1>
              <h1>
                <span class="h1 colr_purple"> 
                ‫‫الداخلية‬
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
              ‫والمعايير‬ ‫المهنية‬ ‫الممارسات‬ ‫أفضل‬ ‫واتباعها‬ ‫لعملها‪،‬‬ ‫المنظمة‬ ‫بالمعايير‬ ‫الداخلية‬ ‫المراجعة‬ ‫التزام‬ ‫إلى‬
              ‫الشأن‬ ‫بهذا‬ ‫‪.‬الصادرة‬
              <br>
              ‫في‬ ‫الحوكمة‬ ‫نظام‬ ‫مكن‬ ‫لقد‬ ‫‪stc‬‬ ‫ركائز‬ ‫من‬ ‫هامة‬ ‫ركيزة‬ ‫تعتبر‬ ‫والتي‬ ‫المستهدفة‬ ‫ستدامة‬ ‫ا‬ ‫تحقيق‬ ‫من‬
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
        </div>
      </div>
    <!-- SECTION8 -->

    <!-- SECTION9 -->
      <div class="page_creation_bod_i">
        <div class="sp_wrap cwrapper">
            <div class="screentop_para">
              <h1>
                <span class="h1 colr_white bk_purple" style="padding: 5px 15px 5px 150px;"> ‫
                  ‫سجل‬
                </span> 
              </h1>
              <h1>
                <span class="h1 colr_purple"> 
                ‫المساهمين‬
                </span>
            </h1>
            </div>
            <div class="content-wrapper sp2_row">
              <div class="left bk_purple">
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
             <div class="tabular_data margint50">
                <div class="c_row first bk_purple nomargin">
                   <div>‫م‬</div>
                    <div>المساهمين‬ ‫سجل‬ ‫طلب‬ ‫تاريخ‬</div>
                    <div>المساهمين‬ ‫سجل‬ ‫طلب‬ ‫تاريخ‬</div>
                </div>
                <div class="tabular_data_inner">
                 
                  <div class="c_row">
                    <div>‫1</div>
                    <div></div>
                    <div></div>
                  </div>
                  <div class="c_row">
                    <div>‫2</div>
                    <div></div>
                    <div></div>
                  </div>
                  <div class="c_row">
                    <div>‫3</div>
                    <div></div>
                    <div></div>
                  </div>
                </div>
             </div>
        </div>
      </div>    
    <!-- SECTION9 -->


    <!-- SECTION9 -->
    <div class="page_creation_bod_j">
       
    </div>
    <!-- SECTION9 -->


    
    
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