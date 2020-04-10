<!-- vertical wipes -->
  <div class="vertical_wipes_wrapper">
    <div class="vwipe1 bk_white"></div>
    <div class="vwipe2 bk_white"></div>
    <div class="vwipe3 bk_white"></div>
    <div class="vwipe5 bk_white"></div>
    <div class="vwipe5 bk_white"></div>
  </div>
<!-- vertical wipes -->

<div class="cursor"></div>
<div class="m"></div>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
<script src="js/vendor/modernizr-3.8.0.min.js"></script>
<script type="text/javascript" src="js/vendor/jquery-1.11.2.min.js"></script>
<script src="js/gsap_scrollmagic.js"></script>
<script src="js/jquery.mCustomScrollbar.js"></script>
<script src="js/parallax.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/kursor"></script> -->
<!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/three.js/84/three.min.js'></script>
<script  src="js/glitch_effect.js"></script> -->
<script src="js/swiper.min.js"></script>
<script src="js/jquery.mousewheel.min.js"></script>

<!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
<!-- <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script> -->
<!-- <script src="https://vjs.zencdn.net/7.7.5/video.js"></script> -->
<script src="js/main.js"></script>

<script type="text/javascript">
	if(!(jQuery('body').hasClass('landing_screen'))){
	  var selected_cat = localStorage.getItem("stc_selected_category");
	  var last_played_video = localStorage.getItem("stc_last_played_video");

	  if(last_played_video!=selected_cat){
	    localStorage.setItem("stc_last_played_video", selected_cat);
	    alert('play the video');
	  }
	  else{
	    alert('dont play the video');
	  }
	}
</script>