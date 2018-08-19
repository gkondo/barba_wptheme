</div></div>
      <footer class="l_footer js_window_in bttchange">
        <div class="inner">
          <ul class="_footlist foot_mainlist">
            <li><a href="<?php echo home_url() ?>/concept">コンセプト</a></li>
            <li><a href="<?php echo home_url() ?>/costume">衣裳</a></li>
            <li><a href="<?php echo home_url() ?>/shop">店舗</a></li>
            <li><a href="<?php echo home_url() ?>/schedule">スケジュール</a></li>
            <li><a href="<?php echo home_url() ?>/report">結婚報告式</a></li>
            <li><a href="<?php echo home_url() ?>/price">料金表</a></li>
            <li><a href="<?php echo home_url() ?>/option">オプション</a></li>
            <li><a href="<?php echo home_url() ?>/gallery">季節のフォトギャラリー</a></li>
            <li><a href="<?php echo home_url() ?>/news">新着情報</a></li>
          </ul>
          <div class="wrap">
            <div class="foot_half">
              <ul class="_footlist foot_shoplist">
              


                <li>
                  <dl class="shoparea">
                    <dt><a href="<?php echo home_url() ?>/tokyo/">東京都</a></dt>
                    <dd><a href="<?php echo home_url() ?>/tokyo/asakusabashi/">浅草橋本店</a></dd>
                    <dd><a href="<?php echo home_url() ?>/tokyo/asagaya/">阿佐ヶ谷店</a></dd>
                    <dd><a href="<?php echo home_url() ?>/tokyo/higashinakano/">東中野店</a></dd>
                    <dd><a href="<?php echo home_url() ?>/tokyo/nishihachioji/">西八王子店</a></dd>
                  </dl>  
                </li>
                <li>
                  <dl class="shoparea">
                    <dt><a href="<?php echo home_url() ?>/kanagawa/">神奈川県</a></dt>
                    <dd><a href="<?php echo home_url() ?>/kanagawa/yokohama/">横浜店</a></dd>
                    <dd><a href="<?php echo home_url() ?>/kanagawa/kamakura/">鎌倉店</a></dd>
                  </dl>  
                </li>
                <li>
                  <dl class="shoparea">
                    <dt><a href="<?php echo home_url() ?>/saitama/">埼玉県</a></dt>
                    <dd><a href="<?php echo home_url() ?>/saitama/koshigaya/">越谷店</a></dd>
                    <dd><a href="<?php echo home_url() ?>/saitama/soka/">草加店</a></dd>
                  </dl>  
                </li>
                <li>
                  <dl class="shoparea">
                    <dt><a href="<?php echo home_url() ?>/chiba/">千葉県</a></dt>
                    <dd><a href="<?php echo home_url() ?>/chiba/nishichiba/">西千葉店</a></dd>
                  </dl>  
                </li>
                <li>
                  <dl class="shoparea">
                    <dt><a href="<?php echo home_url() ?>/ibaraki/">茨城県</a></dt>
                    <dd><a href="<?php echo home_url() ?>/ibaraki/tsukuba/">つくば店</a></dd>
                  </dl>  
                </li>
              </ul>
              <ul class="_footlist foot_linklist">
                <li><a href="<?php echo home_url() ?>/company">会社概要</a></li>
                <li><a href="<?php echo home_url() ?>/recruit">採用情報</a></li>
                <li><a href="<?php echo home_url() ?>/policy">プライバシーポリシー</a></li>
                <li><a href="<?php echo home_url() ?>/sitemap">サイトマップ</a></li>
              </ul>
            </div>

            <div class="footer_spconversion"><?php get_template_part( 'templates/part_conversion' ); ?></div>
            <div class="foot_half _tel">
              <div class="inner">
                <a href="" class="foot_telbox">
                    <p class="txt">
                      お電話でのお問い合わせ
                    </p>
                    <p class="num _arima">
                      03-5809-3295
                    </p>
                    <span class="subtxt">
                      営業時間 10:00～20:00(年末年始以外は無休)
                    </span>
                </a>
              </div>
              <div class="inner right_box">
                <a href="<?php echo home_url() ?>/contact" class="foot_telbox _contact">
                  <p class="num ">資料請求・お問い合わせ</p>
                </a>
                <a href="" class="foot_telbox">
                    <p class="txt">つくば店へのお問い合わせ</p>
                    <p class="num _arima">029-846-3360</p>
                    <span class="subtxt">営業時間 10:00～18:00(年末年始以外は無休)</span>
                </a>
              </div>
            </div>
          </div>
          <p class="copyright">
            Copyright © 2017 Kagaenn. All Rights Reserved.
          </p>
        </div>

        <div class="gototop">
          <a href="#gototp" class="js_anchor _btt">
            <span class="txt _arima">BACK to TOP</span>
          </a>
        </div>        
      </footer>  
    </div>




  <?php get_template_part( 'assets/include/js' ); ?>

  <?php if(is_page('price')){ ?>
    <script src="<?php tempath() ?>/assets/js/p_price.js"></script>
  <?php } ?>
  <?php if(is_page('access')){ ?>
    <script type="text/javascript">
      $(function initMap() {
        var pin = "http://" + document.domain + '/kgendev/wp-content/themes/bridalfacs/';
        var mark = {
          url: pin + 'assets/img/common/icon_pin.png'
        };
        console.log(pin);
        var map;
        var latLng = new google.maps.LatLng(<?php the_field('lat') ?>, <?php the_field('lng') ?>);
        map = new google.maps.Map(
          document.getElementById('map'),
          {
            zoom: 18,
            center: latLng,
            scrollwheel: false
          }
        );

        var mark = new google.maps.Marker({
          position: latLng,
          map: map,
          icon: mark
        });

        var mapStyle = [
          {
            "stylers": [
              { "saturation": -100 }
            ]
          }
        ];
        var mapType = new google.maps.StyledMapType(mapStyle);
        map.mapTypes.set('GrayScaleMap', mapType);
        map.setMapTypeId('GrayScaleMap');
      });

    </script>

  <?php } ?>

  <?php wp_footer(); ?>

</body><!-- page -->
</html>
