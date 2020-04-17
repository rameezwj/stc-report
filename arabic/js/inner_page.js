jQuery(window).on('load', function(){

	// if users are on innerpage, hide vertical wipes on page load
	  if(jQuery('body').hasClass('page_inner')){
	  	TweenMax.to('.lds-ring', .3, {scale: .8, opacity: 0});
	    TweenMax.staggerFromTo('.vertical_wipes_wrapper > div.vwipes', .7, {left: 0, transformOrigin: 'center top'}, {left: '100%', transformOrigin: 'center top', ease: Power4.easeInOut}, .1);
	    TweenMax.to('.vertical_wipes_wrapper', 0, {display: 'none', delay: 3});
	  }
	// if users are on innerpage, hide vertical wipes on page load
	

	if(!(jQuery('body').hasClass('landing_screen'))){
	  var selected_cat = localStorage.getItem("stc_selected_category");
	  var last_played_video = localStorage.getItem("stc_last_played_video");

  	// console.log(last_played_video+'---'+selected_cat)
	  
	  // if(true){
	  if(last_played_video==null && selected_cat==null){
	  
	  }
	  else if(last_played_video!=selected_cat){
	  	localStorage.setItem("stc_last_played_video", selected_cat);
	  	
	  	var video = document.getElementById('category_video');
	  	
	  	video.play();
	  	
	  	video.onended = function() {
	  		TweenMax.to('.video_wrapper', 1.5, {top: '-100%', transformOrigin: 'left center', scale: 1, ease: Power4.easeInOut});
	  	};
	  }
	}


	// highlight current pages submenu + goto next page functionality
		// get curent page url
		var page_url = window.location.href.split('.php');
		page_url = page_url[0].split('/');

		// highlight current page menu item
		jQuery('.sub_menu_wrapper .submenu_content a').removeClass('active');
		jQuery(`a[data-page-link=${page_url[page_url.length-1]}]`).addClass('active');

		// get next page url if it exists
		var next_page = jQuery(`a[data-page-link=${page_url[page_url.length-1]}]`).next().attr('data-page-link');
		var next_page_text = jQuery(`a[data-page-link=${next_page}]`).html();

		// get previous page url if it exists
		var previous_page = jQuery(`a[data-page-link=${page_url[page_url.length-1]}]`).prev().attr('data-page-link');
		var previous_page_text = jQuery(`a[data-page-link=${previous_page}]`).html();

		jQuery('body').append(`
			<div class='inner_page_navigation'>
				<div>
					${
						next_page_text!=undefined
						?
							`<a href='javasvript: void(0)' id='btn_gotoNext_page'>${(next_page_text)!=undefined?next_page_text:''}</a>`
						:
						''
					}
				</div>
				<div>
					${
						previous_page_text!=undefined
						?
							`<a href='javasvript: void(0)' id='btn_gotoPrev_page'>${(previous_page_text)!=undefined?previous_page_text:''}</a>`
						:
						''
					}
				</div>
			</div>
		`)

		var page_switching_triggered = true;

		jQuery('.inner_page_navigation > div a#btn_gotoNext_page').on('click', function(){
			if(next_page!=undefined && !(page_switching_triggered)){
				page_switching_triggered = true;
				jQuery(`a[data-page-link=${next_page}]`).trigger('click');
			}			
		});

		jQuery('.inner_page_navigation > div a#btn_gotoPrev_page').on('click', function(){
			if(previous_page!=undefined && !(page_switching_triggered)){
				page_switching_triggered = true;
				jQuery(`a[data-page-link=${previous_page}]`).trigger('click');
			}			
		});

		setTimeout(function(){
			page_switching_triggered = false;

			// mousewheel
			  document.addEventListener('wheel', function(e) {
					if($(window).scrollTop() + $(window).height() == $(document).height()) {
						// jQuery(`#btn_gotoNext_page`).trigger('click');
					}
					// e.preventDefault();
			  }, { passive: false })
			// mousewheel
	}, 3000)

});


jQuery('document').ready(function(){

	// if theres no value set for stc_selected_category & stc_last_played_video, remove video section from the DOM
		var selected_cat = localStorage.getItem("stc_selected_category");
		var last_played_video = localStorage.getItem("stc_last_played_video");

		if((selected_cat==null && last_played_video==null) || (last_played_video==selected_cat)){
			jQuery('.video_wrapper').remove();
		}
	// if theres no value set for stc_selected_category & stc_last_played_video, remove video section from the DOM
})

if(jQuery('body').hasClass('landing_screen')){
}
