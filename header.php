<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <?php
    get_template_part( 'assets/include/viewport' );
    get_template_part( 'assets/include/icon' );
    get_template_part( 'assets/include/css' );
  ?>
  <?php wp_head(); ?>
</head>



 <?php if(is_page('access')){ ?>
<body class="_underpages" >
 <?php }else if(is_front_page()){ ?>
<body class="_topfixed">
 <?php }else{ ?>
<body class="_underpages">
 <?php } ?>


  <div class="l_container" id="gototp">

    <header class="l_header">
      <div class="inner">
        <?php if(is_front_page()){ ?>
          <h1 class="logo">
            <a href="<?php echo home_url() ?>"><img src="<?php tempath() ?>/assets/img/common/logo.png" alt="華雅苑"></a>
          </h1>
        
        <?php }else{?>
          <div class="logo">
            <a href="<?php echo home_url() ?>"><img src="<?php tempath() ?>/assets/img/common/logo.png" alt="華雅苑"></a>
          </div>
        
        <?php } ?>



        <div class="spnav">
          <div class="inner">

            <ul class="headlist">
              <li>
                <a class="list_parent" href="<?php echo home_url() ?>/concept">
                  <div class="inner"><span class="jp">コンセプト</span><span class="en">CONCEPT</span></div>
                </a>
              </li>
              <li>
                <a class="list_parent" href="<?php echo home_url() ?>/costume/">
                  <div class="inner"><span class="jp">衣装</span><span class="en">KIMONO</span></div>
                </a>
              </li>
              <li class="nav_shopmemu">
                <div class="list_parent" id="spmenuopen">
                  <div class="inner"><span class="jp">店舗</span><span class="en">SHOP</span></div>
                </div>
            
                <div class="shop_menuopen">
                  <ul class="inner">
                    <li>
                      <div class="remove2ndmenu">
                        <div class="wrap">
                        	<span class="jp">目次へ戻る</span>
                        	<span class="en _arima">BACK</span>
                        </div>
                      </div>
                    </li>


                    <li>
                      <a href="<?php echo home_url() ?>/shop/">
                        <div class="wrap"><span class="jp">店舗一覧を見る</span><span class="en _arima">ALL SHOPS</span></div>
                      </a>
                    </li>
                    <li>
                      <a href="<?php echo home_url() ?>/shop/tokyo/asakusabashi"><div class="wrap"><span class="jp">浅草橋本店</span><span class="en _arima">TOKYO</span></div></a>
                    </li>
                    <li>
                      <a href="<?php echo home_url() ?>/shop/tokyo/asagaya"><div class="wrap"><span class="jp">阿佐ヶ谷店</span><span class="en _arima">TOKYO</span></div></a>
                    </li>
                    <li>
                      <a href="<?php echo home_url() ?>/shop/tokyo/higashinakano"><div class="wrap"><span class="jp">東中野店</span><span class="en _arima">TOKYO</span></div></a>
                    </li>
                    <li>
                      <a href="<?php echo home_url() ?>/shop/tokyo/nishihachiouji"><div class="wrap"><span class="jp">西八王子店</span><span class="en _arima">TOKYO</span></div></a>
                    </li>

                    <li>
                      <a href="<?php echo home_url() ?>/shop/kanagawa/yokohama"><div class="wrap"><span class="jp">横浜店</span><span class="en _arima">KANAGAWA</span></div></a>
                    </li>
                    <li>
                      <a href="<?php echo home_url() ?>/shop/kanagawa/kamakura"><div class="wrap"><span class="jp">鎌倉店</span><span class="en _arima">KANAGAWA</span></div></a>
                    </li>



                    <li>
                      <a href="<?php echo home_url() ?>/shop/saitama/koshigaya"><div class="wrap"><span class="jp">越谷店</span><span class="en _arima">SAITAMA</span></div></a>
                    </li>
                    <li>
                      <a href="<?php echo home_url() ?>/shop/saitama/soka"><div class="wrap"><span class="jp">草加店</span><span class="en _arima">SAITAMA</span></div></a>
                    </li>
                    <li>
                      <a href="<?php echo home_url() ?>/shop/chiba/nishichiba"><div class="wrap"><span class="jp">西千葉店</span><span class="en _arima">CHIBA</span></div></a>
                    </li>
                    <li>
                      <a href="<?php echo home_url() ?>/shop/ibaraki/tsukuba"><div class="wrap"><span class="jp">つくば店</span><span class="en _arima">IBARAKI</span></div></a>
                    </li>
                  </ul>
                </div>
              </li>
              <li>
                <a class="list_parent" href="<?php echo home_url() ?>/schedule/">
                  <div class="inner"><span class="jp">スケジュール</span><span class="en">SCHEDULE</span></div>
                </a>
              </li>
              <li>
                <a class="list_parent" href="<?php echo home_url() ?>/price">
                  <div class="inner"><span class="jp">料金表</span><span class="en">PRICE</span></div>
                </a>
              </li>
              <li>
                <a class="list_parent" href="<?php echo home_url() ?>/option">
                  <div class="inner"><span class="jp">オプション</span><span class="en">OPTION</span></div>
                </a>
              </li>
            </ul>


            <div class="_mail head_btn"><a href="<?php echo home_url() ?>/contact"><span>資料請求・お問い合わせ</span></a></div>
            
            <div class="_tel  head_btn ">
              <a href=""><span>電話をかける</span></a>
              <div class="tel_menuopen">
                <div class="inner">
                  <div class="box">
                    <p class="txt">
                      お電話でのお問い合わせ
                    </p>
                    <p class="num _arima">
                      03-5809-3295
                    </p>
                    <span class="subtxt">
                      営業時間 10:00～20:00(年末年始以外は無休)
                    </span>
                  </div>
                  <div class="box">
                    <p class="txt">
                      お電話でのお問い合わせ
                    </p>
                    <p class="num _arima">
                      03-5809-3295
                    </p>
                    <span class="subtxt">
                      営業時間 10:00～20:00(年末年始以外は無休)
                    </span>
                  </div>
            
                </div>
              </div>
            </div>
            <p class="spdisp_txt">
              営業時間 10:00～20:00(年末年始以外は無休)            
            </p>
                          
            <div class="_tel  head_btn _spdisp">
              <a href=""><span>つくば店に電話をかける</span></a>
            </div>
            <p class="spdisp_txt">
              営業時間 10:00～20:00(年末年始以外は無休)
            </p>
                          
                
              



                        
            
          </div>

        </div>
        <div class="hammenu">
          <span class="_1 bdr"></span>
          <span class="_2 bdr"></span>
          <span class="_3 bdr"></span>
          <span class="txt">MENU</span>
        </div>
      </div>
    </header>
	


<div id="barba-wrapper">
  <div class="barba-container">