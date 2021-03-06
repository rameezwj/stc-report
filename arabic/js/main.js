(function() {
  if(jQuery(window).width() <= 767){
    /*var pass = prompt("Please enter the password");

    if (pass != 'null') {
      window.location.href = "http://google.com";
    }*/
  }
}());

// dom ready event
var navigate = '';
jQuery('document').ready(function(){

  if(jQuery(window).width() >= 767){
    jQuery('').hover(function(){
      
    }, function()
    {
      
    })

    jQuery(".slide_mouse_move").mousemove(function(e){
      var left = jQuery(window).width()/2;
      /*jQuery('.custom_cursor').css({
        'top': `${e.pageY-25}px`,
        'left': `${e.pageX-25}px`,
      })*/

      // console.log(e.pageX, e.pageY);

      var xLeft = jQuery('.slide_mouse_move_content').width()-jQuery('.slide_mouse_move').width()
      if(e.pageX < left){
        // jQuery('.custom_cursor').addClass('left');
        // jQuery('.custom_cursor').removeClass('right');
        // navigate = 'swiper-button-prev';
        console.log('left')

        jQuery('.slide_mouse_move_content').css({'left':'0'})
      }
      else if(e.pageX > left){
        // jQuery('.custom_cursor').addClass('right');
        // jQuery('.custom_cursor').removeClass('left');
        // navigate = 'swiper-button-next';
        console.log('right')
        jQuery('.slide_mouse_move_content').css({'left':`-${xLeft}px`})
      }
    });

    jQuery(".slide_mouse_move").bind('mouseleave', function() {
      // alert(jQuery(".slide_mouse_move").position().left);
      // jQuery(".slide_mouse_move").unbind('mousemove').removeAttr('style');
    });

    jQuery('body').on('click', '#whats_happening_wrapper, #top_events_offers_wrapper', function(e){
      // document.getElementById(`${navigate}`).click();
    });
  }

  // scroll to a div
    jQuery("").click(function() {
        $('html, body').animate({
            scrollTop: $(".leasing_wrapper").offset().top
        }, 1000);
    });
  // scroll to a div


  // for parallax images
    /*var images = document.querySelectorAll('.aboutus_img img');
    new simpleParallax(images, {
      overflow: false,
      delay: 2,
      transition: 'cubic-bezier(0,0,0,1)'
    });*/
  // for parallax images
  
  // manos custom scroll
     // $(".page_chairman .cont_right .cont_right_inner .c_scrollbar").mCustomScrollbar();
     // $(".page_activities .cont_right .cont_right_inner .c_scrollbar").mCustomScrollbar();
  // manos custom scroll
});
// dom ready event


// window resize event
  jQuery(window).resize(function(){
  });
// window resize event

// window scroll event
  jQuery(window).scroll(function(){

    if(jQuery(this).scrollTop()>50){
      // TweenMax.to('.short_menu', .2, {x: -50, opacity: 0, ease: Linear.easeNone})

      if(current_slide==3 || jQuery('body').hasClass('page_inner')){
        TweenMax.to('.charimans_numbers', .2, {x: 50, opacity: 0, ease: Linear.easeNone})
        TweenMax.to('.ceo_numbers', .2, {x: 50, opacity: 0, ease: Linear.easeNone})
      }
    }
    else{
      // TweenMax.to('.short_menu', .2, {x: 0, opacity: 1, ease: Linear.easeNone})
      if(current_slide==3 || jQuery('body').hasClass('page_inner')){
        TweenMax.to('.charimans_numbers', .2, {x: 0, opacity: 1, ease: Linear.easeNone})
        TweenMax.to('.ceo_numbers', .2, {x: 0, opacity: 1, ease: Linear.easeNone})
      }
    }
  });
// window scroll event

// window load event
  jQuery(window).on('load', function(){
    jQuery('body').css({'overflow': 'auto'});
    jQuery('.loader-wrapper').addClass('loaded');

    // remove loader once the page is loaded
      TweenMax.to('.lds-ring', .3, {scale: .8, opacity: 0});
      TweenMax.staggerFromTo('.vertical_wipes_wrapper > div.vwipes', .7, {left: 0, transformOrigin: 'center top'}, {left: '100%', transformOrigin: 'center top', ease: Power4.easeInOut}, .1);
      TweenMax.to('.vertical_wipes_wrapper', 0, {display: 'none', delay: 3});
    // remove loader once the page is loaded
 
    anim_landing();
    anim_shortmenu();
    
  });
// window load event

// body custom cursor
    (function(){
      const link = document.querySelectorAll('.hover-this');
      const cursor = document.querySelector('.cursor');

      const animateit = function(e){
        const span = this;
        const { offsetX: x, offsetY: y } = e;
        const { offsetWidth: width, offsetHeight: height } = this;
        const move = 15; 
        const xMove = x / width * (move*2) - move; 
        const yMove = y / height * (move*2) - move;

        span.style.transform = `translate(${xMove}px, ${yMove}px) scale(1)`;

        cursor.style.transform = `translate(-50%, -50%) scale(8)`;
        cursor.style.opacity = `1`;
        
        if(e.type==='mouseleave'){
          cursor.style.opacity = `0`;
          cursor.style.transform = '';
          span.style.transform = '';
        }


      };

      const editCursor = (e)=>{
        const { clientX: x, clientY: y} = e;
        mousePosition = e;
        cursor.style.left = x + 'px';
        cursor.style.top = y + 'px';

        // change clip path position for the hidden section/menu | testing
        // jQuery('.m').css('clip-path', `circle(0 at ${mousePosition.clientX}px ${mousePosition.clientY}px)`);
      };

      link.forEach(b=>b.addEventListener('mousemove', animateit));
      link.forEach(b=>b.addEventListener('mouseleave', animateit));
      window.addEventListener('mousemove', editCursor);
    })();
// body custom cussor

// menu slider
  if(true){
    
    var menuSwiper = new Swiper('.menu_screen_wrapper .swiper-container', {
      // loop: true,
      updateOnWindowResize: false,
      speed: 1500,
      slidesPerView: 'auto',
      spaceBetween: '10%',
      centeredSlides: true,
      slideToClickedSlide: true,
      mousewheel: true,
      // simulateTouch: false,
      // touchRatio: .7,
      /*freeMode: true,
      freeModeMomentum: true,
      freeModeMomentumRatio: 100,
      velocityRatio: 0.5,
      freeModeSticky: true,*/
      preventInteractionOnTransition: true,
      preventClicks: true,
      pagination: {
        /*el: '.menu_screen_wrapper .swiper-pagination',
        clickable: true,
        renderBullet: function (index, className) {
          return '<span class="' + className + '">' + (index + 1) + '</span>';
        },*/
      },
      on: {
        click: function(){
          // if (!this.params.debugger) return;
          console.log('click');
        },
        transitionStart: function(index){
          var activeSlide = jQuery('.swiper-slide.swiper-slide-active').attr('data-slide');

          jQuery('.menu_screen_wrapper span').css('top', jQuery(`.menu_items > div.mm${activeSlide}`).position().top+11+'px');

          jQuery(`.menu_items > div a`).css({'color': '#ccc', 'opacity': .5})
          jQuery(`.menu_items > div.mm${activeSlide} a`).css({'color': '#fff', 'opacity': 1})

          // console.log();
        }
      }
    });
    
    var menuActiveSlideGlobal = 0;

    // go to sub menu when click on its main
    jQuery('.menu_items > div').click(function(){

      jQuery('.mmenu_back b').html(jQuery(this).find('a').html());

      var gotoSlide = jQuery(this).attr('data-menu-goto-slide');
      menuActiveSlideGlobal = gotoSlide;
      jQuery(`.swiper-slide`).addClass('scaledDown');
      jQuery(`.swiper-slide[data-slide=${gotoSlide}]`).addClass('scaledUp');
      menuSwiper.slideTo((gotoSlide-1));

      TweenMax.set(`.submenu_content`,{display: 'none'})
      TweenMax.set(`.submenu_${gotoSlide}`,{display: 'block'})

      jQuery('.menu_items').addClass('menu_item_reveal');
      jQuery('.sub_menu_wrapper').addClass('submenu_reveal');

      TweenMax.fromTo(`.mmenu_back`, .3, {opacity: 0, x: -150, display: 'none'}, {opacity: 1, x: 0, display: 'block', ease: Power4.easeOut}, '-=1');

      jQuery('.menu_screen_wrapper').toggleClass('submenu_active');
      jQuery('.menu_screen_wrapper .swiper-container').css('pointer-events', 'none');

    });

    // what to do when user clicks on the submenu items
      // set local storage
        if(jQuery('body').hasClass('landing_screen')){
          localStorage.setItem("stc_last_played_video", "0");
          localStorage.setItem("stc_selected_category", "0");
        }
      // set local storage

      jQuery('.sub_menu_wrapper .submenu_content a').click(function(){
        var category_no = jQuery(this).parent().attr('data-parent-category');
        var category_title = jQuery(`.mm${category_no}`).attr('data-category-title');
        var page_link = jQuery(this).attr('data-page-link');

        localStorage.setItem("stc_selected_category", category_title);
        // console.log(localStorage.getItem("stc_selected_category"), '---', page_link);
        
        var goto_url = window.location.origin+'/stc-report/arabic/'+page_link+".php";
        TweenMax.to('.lds-ring', .3, {scale: 1, opacity: 1, delay: .5});
        TweenMax.to('.vertical_wipes_wrapper', 0, {display: 'block'})
        TweenMax.staggerFromTo('.vertical_wipes_wrapper > div.vwipes', .7, {left: '-100%', transformOrigin: 'center bottom'}, {left: 0, transformOrigin: 'center bottom', ease: Power4.easeInOut}, .1)


        setTimeout(function(){
          window.location.href = goto_url;
        }, 1000)
      })
    // what to do when user clicks on the submenu items

    // go back to main menu if user clicks outside submenus
    jQuery('.mmenu_back, .sub_menu_wrapper:not(.sub_menu_wrapper .submenu_content a)').click(function(){
      
      jQuery('.menu_items').removeClass('menu_item_reveal');
      jQuery('.sub_menu_wrapper').removeClass('submenu_reveal');

      TweenMax.fromTo(`.mmenu_back`, .2, {opacity: 1, x: 0, display: 'block'}, {opacity: 0, x: -150, display: 'none', ease: Power4.easeOut}, '-=1');

      jQuery(`.swiper-slide`).removeClass('scaledDown scaledUp');

      jQuery('.menu_screen_wrapper').toggleClass('submenu_active');
      jQuery('.menu_screen_wrapper .swiper-container').css('pointer-events', 'auto');

    });
    
    // move small vertical bar (next to menu title) along with menu hover
    jQuery('.menu_items > div').mouseenter(function(){
      jQuery('.menu_screen_wrapper span').css('top', jQuery(this).position().top+11+'px');

    });

    // reset small vertical bar (next to menu title) when mouse is out
    jQuery('.menu_items > div').mouseleave(function(){
      var activeSlide = jQuery('.swiper-slide.swiper-slide-active').attr('data-slide');
      jQuery('.menu_screen_wrapper span').css('top', jQuery(`.menu_items > div.mm${activeSlide}`).position().top+11+'px');

      jQuery(`.menu_items > div a`).css({'color': '#ccc', 'opacity': .5})
      jQuery(`.menu_items > div.mm${activeSlide} a`).css({'color': '#fff', 'opacity': 1})
    })


    // enter/exit main menu
    var menu_open = false;

    jQuery('#btn_reveal_mmenu').click(function(){

      setTimeout(function(){
        jQuery('.mmenu_back').trigger('click');
      }, 1000)
      
      if(jQuery('.menu_screen_wrapper').hasClass('reveal_mmenu')){

        if(jQuery('body').hasClass('page_inner')){
          TweenMax.to('.short_menu', 1, {left: '-120px', ease: Power4.easeInOut})
        }
        else{
          TweenMax.to('.short_menu', 1, {left: 0, ease: Power4.easeInOut})
        }
        TweenMax.to('.short_menu ul li', 1, {background: '#FF375E', ease: Power4.easeInOut})

        jQuery('.menu_screen_wrapper').toggleClass('reveal_mmenu');

        menu_open = false;
      }
      else{
        menu_open = true;
        menuSwiper.slideTo(0, 100);

        TweenMax.to('.short_menu', 1, {left: -(jQuery('.short_menu ul li a').width()*2)+'px', top: 0, ease: Power4.easeInOut})
        TweenMax.to('.short_menu ul li', 1, {background: '#4F0F8C', ease: Power4.easeInOut})

        TweenMax.set(`.menu_screen_wrapper .swiper-slide .mask_layer`, {x: 0});
        TweenMax.set(`.menu_screen_wrapper .menu_items > div, .menu_screen_wrapper .menu_items > span`, {opacity: 0, y: 100});

        jQuery('.menu_screen_wrapper').toggleClass('reveal_mmenu');
        
        TweenMax.staggerFromTo(`.menu_screen_wrapper .swiper-slide > img`, 2, {opacity: 1, x: '600', scale: 1}, {opacity: 1, x: '0', scale: 1, ease: Power4.easeOut}, 0, 0);
        TweenMax.staggerFromTo(`.menu_screen_wrapper .swiper-slide .mask_layer`, 1.5, {opacity: 1, x: '0'}, {opacity: 1, x: '-100%', ease: Power4.easeInOut}, 0, 0);

        setTimeout(function(){
          TweenMax.staggerFromTo(`.menu_screen_wrapper .menu_items > div, .menu_screen_wrapper .menu_items > span`, 1.5, {opacity: 0, y: 100}, {opacity: 1, y: 0, ease: Power4.easeOut}, .1);
        }, 500)
      }
    });
  }
// menu slider

// mousewheel
  document.addEventListener('wheel', function(e) {
      
      if(false){
      // if(!(menu_open)){
        var delta = e.deltaY;

        if (delta > 0 && transition_complete){
          jQuery('.nav_left').trigger('click')
          // console.log('down')
        }
        else if(transition_complete){
          jQuery('.nav_right').trigger('click')
          // console.log('up')
        }
      }
      // e.preventDefault();
  }, { passive: false })
// mousewheel

// landing slider
  if(false){
    var landing_slider_wrapper = new Swiper('.landing_slider_wrapper .swiper-container', {
      // loop: true,
      updateOnWindowResize: false,
      speed: 2000,
      // effect: 'fade',
      slidesPerView: 1,
      // spaceBetween: '100%',
      slideToClickedSlide: true,
      mousewheel: true,
      preventInteractionOnTransition: true,
      preventClicks: true,
      pagination: {
        /*el: '.menu_screen_wrapper .swiper-pagination',
        clickable: true,
        renderBullet: function (index, className) {
          return '<span class="' + className + '">' + (index + 1) + '</span>';
        },*/
      },
      on: {
        click: function(){
          // if (!this.params.debugger) return;
          console.log('click');
        },
        transitionStart: function(index){
          /*var activeSlide = jQuery('.swiper-slide.swiper-slide-active').attr('data-slide');

          jQuery('.menu_screen_wrapper span').css('top', jQuery(`.menu_items > div.mm${activeSlide}`).position().top+11+'px');

          jQuery(`.menu_items > div a`).css({'color': '#ccc', 'opacity': .5})
          jQuery(`.menu_items > div.mm${activeSlide} a`).css({'color': '#fff', 'opacity': 1})*/

          jQuery('.landing_slider_wrapper').toggleClass('inTransition');
          // console.log('start');
          // TweenMax.set('.page_chairman .cont_left .screentop_para', {opacity: 0, x: -100})
        },
        slideChangeTransitionEnd: function(index){
          jQuery('.landing_slider_wrapper').toggleClass('inTransition');
          // TweenMax.to('.page_chairman .cont_left .screentop_para', 1, {opacity: 1, x: 0}, -1)
          // alert('stop')
        },
        progress: function(data){
        }
      }
    });
  }
// landing slider

// custom landing slider
  var current_slide = 1;
  var transition_complete = true;
  var total_landing_slide = jQuery('.landing_slider_wrapper .lslides').length;

  // note, since direction is rtl in arabic, arrow right means previous slide
  jQuery('.nav_right').click(function(){
    if(transition_complete){
      transition_complete = false;
      if(current_slide<=1){
        transition_complete = true;
        return;
      }
      else{
        var tlx = new TimelineMax()
        tlx.staggerFromTo('.landing_wipes1, .landing_wipes2, .landing_wipes3, .landing_wipes4, .landing_wipes5', .8, {left: '-100%'}, {left: 0, ease: Power4.easeInOut}, .1)
        .to('.landing_wipes1, .landing_wipes2, .landing_wipes3, .landing_wipes4, .landing_wipes5', .5, {left: '100%', ease: Power4.easeInOut})
        
        current_slide--;
        
        setTimeout(function(){
          if(current_slide<=1)
            jQuery('.short_menu').removeClass('topView')
          else
            jQuery('.short_menu').addClass('topView')

          jQuery('.landing_slider_wrapper .lslides').css({'display': 'none'})      
          jQuery(`.landing_slider_wrapper .lslides[landing-data-slide=${current_slide}]`).css({'display': 'block'})

          anim_landing();
          anim_financial_main();
          anim_shortmenu();
        }, 1000)
      }
    }
    setTimeout(function(){
      transition_complete = true;
    }, 3000)
  })

  // note, since direction is rtl in arabic, arrow left means next slide 
  jQuery('.nav_left').click(function(){
    // alert(current_slide)
    if(transition_complete){
      transition_complete = false;
      if(current_slide>=total_landing_slide){
        transition_complete = true;
        return;
      }
      else{
        var tlx = new TimelineMax()
        tlx.staggerFromTo('.landing_wipes1, .landing_wipes2, .landing_wipes3, .landing_wipes4, .landing_wipes5', .8, {left: '100%'}, {left: 0, ease: Power4.easeInOut}, .1)
        .to('.landing_wipes1, .landing_wipes2, .landing_wipes3, .landing_wipes4, .landing_wipes5', .5, {left: '-100%', ease: Power4.easeInOut})
        
        current_slide++;
        
        setTimeout(function(){

          if(current_slide<=1)
            jQuery('.short_menu').removeClass('topView')
          else
            jQuery('.short_menu').addClass('topView')

          jQuery('.landing_slider_wrapper .lslides').css({'display': 'none'})      
          jQuery(`.landing_slider_wrapper .lslides[landing-data-slide=${current_slide}]`).css({'display': 'block'})

          anim_landing();
          anim_financial_main();
          anim_shortmenu();

        }, 1000)

      }
    }
    setTimeout(function(){
      transition_complete = true;
    }, 3000)
  })
// custom landing slider

// page wise animation
  // landing screen
    function anim_landing(){
      TweenMax.set('.page_landing .landing_bar_1', {scale: 0});
      TweenMax.set('.page_landing .lImg_icon_wrapper img', {opacity: 0});
      TweenMax.set('.page_landing .mask_a', {left: '0%'})
      TweenMax.set('.page_landing .masking > img', {opacity: 0, scale: 3})
      
      TweenMax.staggerFromTo('.page_landing .lImg_icon_wrapper img', 1, {opacity: 0}, {opacity: 1, ease: Power2.easeInOut, delay: 1.5}, .2)

      TweenMax.fromTo('.page_landing .landing_bar_1', 1.5, {scaleX: 0}, {scale: 1, ease: Power2.easeInOut, delay: .8})
      TweenMax.staggerFromTo('.page_landing .mask_a', 2, {left: '0%'}, {left: '-201%', ease: Power3.easeInOut}, .2)
      TweenMax.staggerFromTo('.page_landing .masking > img', 1.5, {opacity: 0, scale: 3}, {opacity: 1, scale: 1, ease: Power2.easeInOut}, .2)
    }
  // landing screen

  // financials | main
    function anim_financial_main(){
      TweenMax.set('.page_financials .mask_a', {left: '0%'});
      TweenMax.set('.page_financials .mask_a_vertical', {top: '0%'});
      TweenMax.set('.page_financials .cont_left p.footer span', {opacity: 0, y: 50});
      TweenMax.set('.page_financials .cont_right > p span', {opacity: 0, y: 50});
      
      TweenMax.staggerFromTo('.page_financials .mask_a', 3, {left: '0%'}, {left: '-202%', ease: Power3.easeInOut}, .2);
      TweenMax.staggerFromTo('.page_financials .mask_a_vertical', 2, {top: '0%'}, {top: '-202%', ease: Power3.easeInOut, delay: 1}, .2);
      TweenMax.staggerFromTo('.page_financials .cont_left p.footer span', 2, {opacity: 0, y: 100}, {opacity: 1, y: 0, ease: Power3.easeInOut, delay: 1}, .01);
      TweenMax.staggerFromTo('.page_financials .cont_right > p span', 1.5, {opacity: 0, y: 100}, {opacity: 1, y: 0, ease: Power3.easeInOut, delay: 1.5}, .01);
    }
  // financials | main

  // short_menu
    function anim_shortmenu(){
      if(jQuery('body').hasClass('page_inner')){
        TweenMax.set('.short_menu', {left: '-360'})
        TweenMax.fromTo('.short_menu', 1, {left: '-360'}, {left: '-120px', ease: Power4.easeOut, delay: .2})
      }
      else{
        TweenMax.set('.short_menu', {left: '-360'})
        TweenMax.fromTo('.short_menu', 1, {left: '-360'}, {left: 0, ease: Power4.easeOut, delay: .2})
      }
    }
  // short_menu
// page wise animation


// scrollmagic
  
    var controller = new ScrollMagic.Controller();
    
    jQuery('.bod_items').each(function(){
      var tl_bod = new TimelineMax(); // what happening timeline

      tl_bod.staggerFromTo(jQuery(this).find(`img`), 1.5, {y: 0, opacity: 0, ease: Power3.easeInOut }, { opacity: 1, y: 0, ease: Linear.easeInOut })
      .staggerFromTo(jQuery(this).find(`p, span`), 2, {y: 200, opacity: 0}, { opacity: 1, y: 0, ease: Power4.easeInOut }, .1, '-=1.5')

      /*tl_bod.fromTo(jQuery(this).find('.mask_a'), 1.5, {left: 0}, { left: '-200%', ease: Power4.easeInOut })
      .staggerFromTo(jQuery(this).find(`p, span`), 2, {y: 200, opacity: 0}, { opacity: 1, y: 0, ease: Power4.easeInOut }, .1, '-=1.5')*/

      var scene_about = new ScrollMagic.Scene({
        offset: -100,
        reverse: false,
        triggerElement: this,
      })
      .setTween(tl_bod).addTo(controller);
    })
  
// scrollmagic