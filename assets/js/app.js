

// 料金表スライダー
$(document).ready(function() {
  // 料金表スライダー本体
  var slider = $('.p_price .tbl_block').slick();

  $('.change').on('click', function(){
    $('.change').removeClass('active');
    $(this).addClass('active');
    slider.slick('slickUnfilter');
    $target = $(this).find('.txt_base').text();
    console.log($target);
    // 柔軟フィールドの個数分回す
    $('.content').each(function(){
      $shop_name = $(this).find('.shop').text();
      if($shop_name != $target){
        $(this).removeClass('filter');
      }else{
        $(this).addClass('filter');
      }
    });
    slider.slick('slickFilter','.filter');
  });
  $('._selectshop').change(function(){
    console.log($(this).val());
    $target = $(this).val();
    $('.content').each(function(){
      $shop_name = $(this).find('.shop').text();
      if($shop_name != $target){
        $(this).removeClass('filter');
      }else{
        $(this).addClass('filter');
      }
    });
    slider.slick('slickFilter','.filter');
  });


});



// 初期表示
$(window).load(
  function(){
   // デバイス
   var ww = $(window).innerWidth();
   if(ww > 768) {
      // pc
      device_column = 4; // デバイスのカラム数算出
      sortbox_h = $('.sortbox').height() ;

    }else{
      // sp
      device_column = 2; // デバイスのカラム数算出
      sortbox_h = $('.sortbox').height() + 40;

    }
    // liの高さ
    li_h = $('.gallery_inner').find('.piclist').children('li').height();
    console.log('li_h : ' + li_h);
    for( var i=0; i<$('.gallery_inner').length; i++) {
      // 初期表示のリストの数
      console.log(i + '番目のボックス');

      h =0;
      // カラムの高さ
      var len = $('.gallery_inner').eq(i).find('.piclist').eq(0).children('li').length;
      // カラムが最大８個以上はボタン出したりそういう感じの処理が
      if($('.gallery_inner').hasClass('_nolimit')){
        h = li_h*Math.ceil(len/device_column);
        btn_h =0 ;

      }else if(len > 8){
        console.log('fullが8');
        btn_h = $('.gallery_inner').eq(i).find('.btn_wrap').height() + 50;
        h = li_h*Math.ceil(8/device_column);
      }else{
        h = li_h * Math.ceil(len/device_column);
        btn_h =0 ;
        $('.gallery_inner').eq(i).find('.c_btn_1 ').addClass('_hidebtn');
      }

      console.log('h(リストの高さ) : ' + h); // リストの高さ
      console.log('sortbox_h(もろもろの調整高さ) : ' + sortbox_h); //もろもろの調整高さ
      console.log('btn_h(ボタンの高さ) : ' + (btn_h ) ); // ボタンの高さ
      // 高さを取る
      $('.gallery_inner').eq(i).height(h  + sortbox_h + btn_h);
    }
  }
);


// リストが変わった時の処理

$(function(){
    $('.gallery_inner .sb').change(function(){
      var kimono = $(this).parents('.kimono_block').index();
      console.log('kimono : '+ kimono);
      var index = $('.kimono_block').eq(kimono).find('option:selected').index();
      if($('.kimono_block').eq(kimono).find('.piclist').eq(index)){
        $('.kimono_block').eq(kimono).find('.piclist').animate({opacity: 0}).css('display', 'none').removeClass('active _showall');
        $('.kimono_block').eq(kimono).find('.piclist').eq(index).animate({opacity: 1}).css('display', 'flex').addClass(
          //callback で表示と高さを調整
          function(){
            var ww = $(window).innerWidth();


            var target =$('.kimono_block').eq(kimono).find('.piclist').eq(index);
            var p_h = target.find('li').height();
            console.log(p_h);
            var li_length = target.find('li').length;
            console.log('li_length : '+li_length);
            
            //全て見るボタン
            if(li_length > 8) {
              console.log(target.parent().find('.btn_wrap').children());
              target.parent().find('.btn_wrap').children().removeClass('_hidebtn');
              btn_h = 100;
              console.log('route1 : '+ btn_h);

            } else {
              console.log(target.parent().find('.btn_wrap').children());
              target.parent().find('.btn_wrap').children().addClass('_hidebtn');
              btn_h = 0;
              console.log('route1_1 : ' + btn_h);

            }

            //リストオブジェクトの高さ
            if(ww > 768) {
              sortbox_h = $('.sortbox').height() ;

              if(li_length > 4){
                var h = (p_h)*2;
              }else{
                var h = (p_h);
              }
              console.log('route2 : ' + h);
            } else {
              sortbox_h = $('.sortbox').height() +40;
              if(li_length > 8){
                var h = (p_h)*4;
              }else{
                var h = (p_h) * Math.ceil((li_length)/2);
              }
              console.log('route2 : ' + h);
              console.log('route2_1 : ' + h);
            }
            $('.gallery_inner').eq(kimono).height(h + sortbox_h + btn_h);
            return 'active';
          });
      }
    });



  //全て見るボタン
  $('._showall').click(function(){
    $(this).addClass('_hidebtn');
    var ww = $(window).innerWidth();
    if(ww > 768) {
      // pc
      device_column = 4; // デバイスのカラム数算出
      sortbox_h = $('.sortbox').height();
    }else{
      // sp
      device_column = 2; // デバイスのカラム数算出
      sortbox_h = $('.sortbox').height() + 40;
    }           

    $target = $(this).parent().parent().find('.active');
    $target.addClass('_showall');
    //セルの数
    $li_num    = $target.children('li').length;
    console.log('$li_num : '+$li_num);
    $li_height = $target.children('li').height();
    // セルの高さ
    $addCell = $li_height  * Math.ceil($li_num/device_column);
    console.log('$Math.ceil($li_num/device_column) : '+Math.ceil($li_num/device_column));
    console.log('$addCell : '+ $addCell);


      
    $target.parent().parent().parent().height($addCell+ sortbox_h);

  });
});


// ギャラリー
// ギャラリーモーダル
$(function(){
  $('.pop_gallery').parents('body').addClass('_gallery');
  var index = $('.pop_gallery li').length;
  var tmp = document.getElementsByClassName('mfp-hide');
  for(i=0; i<index; i++){
    $('.pop_gallery li').addClass('_pop');
    var add_id = 'inline-wrap_'+i;
    $('._pop a').eq(i).attr('href', '#'+add_id);
    tmp[i].setAttribute('id', add_id);
  }
  $('.pop_gallery a').magnificPopup({
    type: 'inline',
    preloader: false,
    removalDelay: 500,
    gallery: {
      enabled: true
    }
  });
});


$(function() {
  $('.fl_list .fl_li input, .fl_list .fl_li textarea').focus(function(){
    $(this).closest('.fl_li').addClass('active');
  });  
  $('.fl_list .fl_li input, .fl_list .fl_li textarea').focusout(function(){
    if (((null == (this).value) || ('' == (this).value))){
      $(this).closest('.fl_li').removeClass('active');    
    }
  });
});



$(function(){
  $('.js_tabselect li').click(function(){
    $('.js_tabselect li').removeClass('active');
    var tab_itr = $(this).attr('class');
    var pos = $('.intro_box').offset().top;
    if(tab_itr.match(/btn_left/)){
      $('.btn_left').addClass('active');
      $('.tabblock1').show();
      $('.tabblock2').hide();
    }
    if(tab_itr.match(/btn_right/)){
      $('.btn_right').addClass('active');
      $('.tabblock2').show();
      $('.tabblock1').hide();
    }
    $('html,body').animate({scrollTop:pos}, 1000);
  });

});


/*店舗料金*/
$(function(){
  $('.js_planlesect li').click(function(){
    $getID = $(this).parent('.js_planlesect').attr('id');
    $getClass = '._price.' + $getID;
    console.log($getClass);
    if($(this).hasClass('true')){
      $($getClass).addClass('active');
    }else{
      $($getClass).removeClass('active');
    }
  });
});



$(function(){
  $('.js_recruit_tab li').click(function(){
    $('.js_recruit_tab li').removeClass('active');
    $(this).addClass('active');
      var tab_itr = $('.js_recruit_tab li').index(this);
      $('.recruit_block').removeClass('active');
      $('.recruit_block').eq(tab_itr ).addClass('active');
  });
});


//form
$(function(){
  // window.onload = function () {
  //   document.getElementById( "zipcode" ).onkeyup = function(){
  //     AjaxZip3.zip2addr(this,'','住所','住所');
  //   };
  // }  
});


$(function(){
  $('.pricesliders').slick();
});