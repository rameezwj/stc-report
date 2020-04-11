jQuery(window).on('load', function(){

	// if users are on innerpage, hide vertical wipes on page load
	  if(jQuery('body').hasClass('page_inner')){
	  	TweenMax.to('.lds-ring', .3, {scale: .8, opacity: 0});
	    TweenMax.staggerFromTo('.vertical_wipes_wrapper > div', .7, {scaleY: 1, transformOrigin: 'center top'}, {scaleY: 0, transformOrigin: 'center top', ease: Power4.easeInOut}, .1);
	    TweenMax.to('.vertical_wipes_wrapper', 0, {display: 'none', delay: 3});
	  }
	// if users are on innerpage, hide vertical wipes on page load
	

	if(!(jQuery('body').hasClass('landing_screen'))){
	  var selected_cat = localStorage.getItem("stc_selected_category");
	  var last_played_video = localStorage.getItem("stc_last_played_video");

  	// console.log(last_played_video+'---'+selected_cat)
	  if(false){
	  // if((last_played_video!=selected_cat) || (last_played_video==null && selected_cat==null)){
	    localStorage.setItem("stc_last_played_video", selected_cat);
			
	    var video = document.getElementById('category_video');
	    
	    video.play();
	    
	    video.onended = function() {
	    	TweenMax.to('.video_wrapper', 1.5, {left: '100%', transformOrigin: 'left center', scale: 1.3, ease: Power4.easeInOut});
	    };
	  }
	  else{
	  	jQuery('.video_wrapper').fadeOut(0);
	    // alert('dont play the video');
	  }
	}

});

if(jQuery('body').hasClass('landing_screen')){
}
