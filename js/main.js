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

  var financials_p1 = jQuery('.page_financials .cont_right > p').html().split(' ');
  var text = '';
  text = financials_p1.map((i, v)=>{
    return `<span>${i}</span>`;
  })

  jQuery('.page_financials .cont_right > p').html(text);


  var financials_p2 = jQuery('.page_financials p.footer').html().split(' ');
  var text = '';
  text = financials_p2.map((i, v)=>{
    return `<span>${i}</span>`;
  })

  jQuery('.page_financials p.footer').html(text);

  /*var text_split_array = jQuery('.should_split');

  text_split_array.each(function(i, v){
    var text_array = jQuery(this).html().split(' ');
    var text = '';
    // console.log(text_array.split(' '))
    text = jQuery(text_array).each(function(i2, v2){
      text+='<span>'+v2+'</span>';
      // text+= `<span>${v2}</span>`
    });
    console.log(text.toString())
    // jQuery(this).html(text)    
  })*/

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
     $(".page_chairman .cont_right .cont_right_inner .c_scrollbar").mCustomScrollbar();
  // manos custom scroll
});
// dom ready event


// window resize event
jQuery(window).resize(function(){
});
// window resize event


// window load event
jQuery(window).on('load', function(){
  jQuery('body').css({'overflow': 'auto'});
  jQuery('.loader-wrapper').addClass('loaded');

  var vid = document.getElementById("b-viddy"); 

  function playVid() { 
    vid.play(); 
  } 


  setTimeout(()=>{
    // alert('sd')
    var vid = jQuery('#b-viddy');
    console.log(vid);
    // playVid();
  }, 5000)

  anim_landing();
  anim_shortmenu();
});
// window load event

// click and hold event listener
  /*var timeout_id = 0,
      hold_time = 1000,
      hold_menu = $('.hold_menu'),
      hold_trigger = $('.hold_trigger');

  hold_menu.hide();

  hold_trigger.mousedown(function() {
      timeout_id = setTimeout(menu_toggle, hold_time);
  }).bind('mouseup mouseleave', function() {
      clearTimeout(timeout_id);
  });

  function menu_toggle() {
    hold_menu.slideToggle();
  }*/

  // mouse cordinates
  var mousePosition = 0;
  var timeout_id = 0,
      hold_time = 1000,
      hold_trigger = $('.xscreenLanding');
      hole_time_achieved = false;

  hold_trigger.mousedown(function() {
      // console.log(mouseX);
      // jQuery('.m').addClass('reveal');
      // jQuery('.m').css('clip-path', `circle(100% at ${mousePosition.clientX}px ${mousePosition.clientY}px)`);
      jQuery('.m').css('clip-path', `circle(150% at 100vw 100vh)`)
      timeout_id = setTimeout(menu_toggle, hold_time);
  }).bind('mouseup', function() {
      resetTime(timeout_id)
  });

  function menu_toggle() {
    hole_time_achieved = true;
      jQuery('.m').css('clip-path', `circle(150% at 100vw 100vh)`);
  }

  function resetTime(timeout){
      if(hole_time_achieved){
        clearTimeout(timeout);

      }
      else{
        jQuery('.m').css('clip-path', `circle(0 at bottom right)`)
        clearTimeout(timeout);

      }
  }
//

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

// TweenMax.to('.logo_stc', 4, {z: 30, ease: Power4.easeInOut});

// menu slider
  if(true){
    /*var menu_array = [
    {'1'}
    ];*/

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
    
    // menu to submenu timeline
    var menuActiveSlideGlobal = 0;

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
      // TweenMax.fromTo(`.menu_items`, 2, {opacity: 1, x: 0, 'clip-path': 'inset(0)'}, {opacity: 0, x: 50, 'clip-path': 'inset(0px 0 0 100%)', ease: Power4.easeOut});
      // TweenMax.staggerFromTo(`.submenu_${gotoSlide} a`, 1, {opacity: 0, y: 150}, {opacity: 1, y: 0, ease: Power4.easeOut}, .1)
      TweenMax.fromTo(`.mmenu_back`, .3, {opacity: 0, x: -150, display: 'none'}, {opacity: 1, x: 0, display: 'block', ease: Power4.easeOut}, '-=1');

      jQuery('.menu_screen_wrapper').toggleClass('submenu_active');
      jQuery('.menu_screen_wrapper .swiper-container').css('pointer-events', 'none');

    });

    jQuery('.mmenu_back').click(function(){
      
      jQuery('.menu_items').removeClass('menu_item_reveal');
      jQuery('.sub_menu_wrapper').removeClass('submenu_reveal');
      // TweenMax.set(`.submenu_${menuActiveSlideGlobal}`,{display: 'none'});
      // TweenMax.fromTo(`.menu_items`, 2, {opacity: 1, x: 50, 'clip-path': 'inset(0px 0 0 100%)'}, {opacity: 1, x: 0, 'clip-path': 'inset(0)', ease: Power4.easeOut});
      /*TweenMax.fromTo(`.menu_items`, .5, {opacity: 0, x: 100, display: 'none'}, {opacity: 1, x: 0, display: 'block', ease: Power4.easeOut}, 2);
      TweenMax.staggerFromTo(`.submenu_${menuActiveSlideGlobal} a`, .4, {opacity: 1, y: 0}, {opacity: 0, y: 150, ease: Power4.easeOut}, .1)*/
      TweenMax.fromTo(`.mmenu_back`, .2, {opacity: 1, x: 0, display: 'block'}, {opacity: 0, x: -150, display: 'none', ease: Power4.easeOut}, '-=1');

      jQuery(`.swiper-slide`).removeClass('scaledDown scaledUp');

      jQuery('.menu_screen_wrapper').toggleClass('submenu_active');
      jQuery('.menu_screen_wrapper .swiper-container').css('pointer-events', 'auto');

    });
    

    jQuery('.menu_items > div').mouseenter(function(){
      jQuery('.menu_screen_wrapper span').css('top', jQuery(this).position().top+11+'px');

    })

    jQuery('.menu_items > div').mouseleave(function(){
      var activeSlide = jQuery('.swiper-slide.swiper-slide-active').attr('data-slide');
      jQuery('.menu_screen_wrapper span').css('top', jQuery(`.menu_items > div.mm${activeSlide}`).position().top+11+'px');

      jQuery(`.menu_items > div a`).css({'color': '#ccc', 'opacity': .5})
      jQuery(`.menu_items > div.mm${activeSlide} a`).css({'color': '#fff', 'opacity': 1})
    })

    jQuery('#btn_reveal_mmenu').click(function(){

      setTimeout(function(){
        jQuery('.mmenu_back').trigger('click');
      }, 1000)

      if(jQuery('.menu_screen_wrapper').hasClass('reveal_mmenu')){
        jQuery('.menu_screen_wrapper').toggleClass('reveal_mmenu');
      }
      else{
        menuSwiper.slideTo(0, 100);
        TweenMax.set(`.menu_screen_wrapper .swiper-slide .mask_layer`, {x: 0});
        TweenMax.set(`.menu_screen_wrapper .menu_items > div, .menu_screen_wrapper .menu_items > span`, {opacity: 0, y: 100});

        jQuery('.menu_screen_wrapper').toggleClass('reveal_mmenu');
        
        TweenMax.staggerFromTo(`.menu_screen_wrapper .swiper-slide > img`, 2, {opacity: 1, x: '-600', scale: 1}, {opacity: 1, x: '0', scale: 1, ease: Power4.easeOut}, 0, 0);
        TweenMax.staggerFromTo(`.menu_screen_wrapper .swiper-slide .mask_layer`, 1.5, {opacity: 1, x: '0'}, {opacity: 1, x: '100%', ease: Power4.easeInOut}, 0, 0);

        setTimeout(function(){
          TweenMax.staggerFromTo(`.menu_screen_wrapper .menu_items > div, .menu_screen_wrapper .menu_items > span`, 1.5, {opacity: 0, y: 100}, {opacity: 1, y: 0, ease: Power4.easeOut}, .1);
        }, 500)
      }
    });
  }
// menu slider

/*document.addEventListener('wheel', function(e) {
    
    console.log(e.deltaY);
    var delta = e.deltaY;

    if (delta > 0){
      console.log('down')
    }
    else{
      console.log('up')
    }

    // e.preventDefault();
}, { passive: false })*/


//

  /*let elem = document,
    // info = document.getElementById('info'),
    marker = true,
    delta,
    direction,
    interval = 50,
    counter1 = 0,
    counter2,
    counter3,
    counter4;

  elem.addEventListener('wheel',wheel);

  function wheel(e){
    counter1 += 1;
    delta = e.deltaY;
    if (delta > 0) {direction = 'up'} else {direction = 'down'}
    if (marker) {wheelStart()}
    return false;
  }
  function wheelStart(){
    marker = false;
    wheelAct();
    counter3 = new Date();
    // info.innerHTML = 'Start event. Direction: ' + direction;
  }
  function wheelAct(){
    counter2 = counter1;
    setTimeout(function(){
      if (counter2 == counter1) {
        wheelEnd();
      } else {
        // info.innerHTML = info.innerHTML + '<br>...';
        wheelAct();
      }
    },interval);
  }
  function wheelEnd(){
    // alert('sdsd')
    console.log(jQuery(window).scrollTop()+jQuery(window).height());
    counter4 = new Date();
    // info.innerHTML = info.innerHTML + '<br>End event. Duration: ' + (counter4-counter3) + ' ms';
    marker = true;
    counter1 = 0;
    counter2 = false;
    counter3 = false;
    counter4 = false;
  }*/
//

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
  var total_landing_slide = jQuery('.landing_slider_wrapper .swiper-slide').length;

  jQuery('.nav_left').click(function(){
    if(transition_complete){
      transition_complete = false;
      if(current_slide<=1){
        transition_complete = true;
        return;
      }
      else{
        var tlx = new TimelineMax()
        tlx.staggerFromTo('.landing_wipes1, .landing_wipes2, .landing_wipes3, .landing_wipes4, .landing_wipes5', 1, {left: '100%'}, {left: 0, ease: Power4.easeInOut}, .1)
        .to('.landing_wipes1, .landing_wipes2, .landing_wipes3, .landing_wipes4, .landing_wipes5', .7, {left: '-100%', ease: Power4.easeInOut})
        
        current_slide--;
        
        setTimeout(function(){

          if(current_slide<=1)
            jQuery('.short_menu').removeClass('topView')
          else
            jQuery('.short_menu').addClass('topView')

          jQuery('.landing_slider_wrapper .swiper-slide').css({'display': 'none'})      
          jQuery(`.landing_slider_wrapper .swiper-slide[landing-data-slide=${current_slide}]`).css({'display': 'block'})

          anim_landing();
          anim_financial_main();
          anim_shortmenu();

        }, 1200)
      }
    }
    setTimeout(function(){
      transition_complete = true;
    }, 3500)
  })

  jQuery('.nav_right').click(function(){
    if(transition_complete){
      transition_complete = false;
      if(current_slide>=total_landing_slide){
        transition_complete = true;
        return;
      }
      else{
        var tlx = new TimelineMax()
        tlx.staggerFromTo('.landing_wipes1, .landing_wipes2, .landing_wipes3, .landing_wipes4, .landing_wipes5', 1, {left: '-100%'}, {left: 0, ease: Power4.easeInOut}, .1)
        .to('.landing_wipes1, .landing_wipes2, .landing_wipes3, .landing_wipes4, .landing_wipes5', .7, {left: '100%', ease: Power4.easeInOut})
        
        current_slide++;
        
        setTimeout(function(){

          if(current_slide>=1)
            jQuery('.short_menu').addClass('topView')
          else
            jQuery('.short_menu').removeClass('topView')

          jQuery('.landing_slider_wrapper .swiper-slide').css({'display': 'none'})      
          jQuery(`.landing_slider_wrapper .swiper-slide[landing-data-slide=${current_slide}]`).css({'display': 'block'})

          anim_landing();
          anim_financial_main();
          anim_shortmenu();

        }, 1200)

      }
    }
    setTimeout(function(){
      transition_complete = true;
    }, 3500)
  })
// custom landing slider

// page wise animation
  // landing screen
    function anim_landing(){
      TweenMax.set('.page_landing .landing_bar_1', {scale: 0});
      TweenMax.set('.page_landing .lImg_icon_wrapper img', {opacity: 0});
      TweenMax.set('.page_landing .mask_a', {right: '0%'})
      TweenMax.set('.page_landing .masking > img', {opacity: 0, scale: 3})
      
      TweenMax.staggerFromTo('.page_landing .lImg_icon_wrapper img', 1, {opacity: 0}, {opacity: 1, ease: Power2.easeInOut, delay: 1.5}, .2)

      TweenMax.fromTo('.page_landing .landing_bar_1', 1.5, {scaleX: 0}, {scale: 1, ease: Power2.easeInOut, delay: .8})
      TweenMax.staggerFromTo('.page_landing .mask_a', 2, {right: '0%'}, {right: '-201%', ease: Power3.easeInOut}, .2)
      TweenMax.staggerFromTo('.page_landing .masking > img', 1.5, {opacity: 0, scale: 3}, {opacity: 1, scale: 1, ease: Power2.easeInOut}, .2)
    }
  // landing screen

  // financials | main
    function anim_financial_main(){
      TweenMax.set('.page_financials .mask_a', {right: '0%'});
      TweenMax.set('.page_financials .mask_a_vertical', {top: '0%'});
      TweenMax.set('.page_financials .cont_left p.footer span', {opacity: 0, y: 50});
      TweenMax.set('.page_financials .cont_right > p span', {opacity: 0, y: 50});
      
      TweenMax.staggerFromTo('.page_financials .mask_a', 3, {right: '0%'}, {right: '-202%', ease: Power3.easeInOut}, .2);
      TweenMax.staggerFromTo('.page_financials .mask_a_vertical', 2, {top: '0%'}, {top: '-202%', ease: Power3.easeInOut, delay: 1}, .2);
      TweenMax.staggerFromTo('.page_financials .cont_left p.footer span', 2, {opacity: 0, y: 100}, {opacity: 1, y: 0, ease: Power3.easeInOut, delay: 1}, .01);
      TweenMax.staggerFromTo('.page_financials .cont_right > p span', 1.5, {opacity: 0, y: 100}, {opacity: 1, y: 0, ease: Power3.easeInOut, delay: 1.5}, .01);
    }
  // financials | main

  // short_menu
    function anim_shortmenu(){
      TweenMax.set('.short_menu', {right: '-360'})
      TweenMax.fromTo('.short_menu', 1, {right: '-360'}, {right: 0, ease: Power4.easeOut, delay: 2})
    }
  // short_menu
// page wise animation