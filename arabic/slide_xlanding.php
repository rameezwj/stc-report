<div class="page_landing outer_wrapper">
	<div class="screenContent1">
		<div class="screentop_para">
			<div class="mask_a xmask_reveal_para" style="width: 200%; height: 100%;">
				<div class="maskl bk_pink col2"></div>
				<div class="maskl bk_white col3"></div>
				<div class="maskr bk_purple col5"></div>
			</div>
			<h1> <span class="landingH1 txt_upper xhover-this colr_white"> Pushing the </span> </h1>
			<h1> <span class="landingH1 txt_upper xhover-this colr_white"> Boundaries </span> </h1>
			<h1> <span class="landingH1 txt_upper xhover-this colr_white"> towards the </span> </h1>
			<h1> <span class="landingH1 txt_upper xhover-this colr_white bk_pink" style="padding: 5px 50px 5px 15px;"> Future </span> </h1>
		</div>
	</div>

	<div class="report_title">
		<div class="mask_a xmask_reveal_para" style="width: 200%; height: 100%;">
			<div class="maskl bk_pink col2"></div>
			<div class="maskl bk_white col3"></div>
			<div class="maskr bk_purple col5"></div>
		</div>

		<p>
			annual report <br /> 2019
		</p>
	</div>

	<div class="logo_stc">

		<div class="mask_a xmask_reveal_para" style="width: 200%; height: 100%;">
			<div class="maskl bk_pink col2"></div>
			<div class="maskl bk_white col3"></div>
			<div class="maskr bk_purple col5"></div>
		</div>

		<img src="img/stc_logo.png" />
	</div>


	<!-- masking content -->
		<div class="landing_picture_wrapper">
			<div class="lp1">
				<div class="mask_a xmask_reveal_para" style="width: 200%; height: 100%;">
					<div class="maskl bk_pink col2"></div>
					<div class="maskl bk_white col3"></div>
					<div class="maskr bk_purple col5"></div>
				</div>
				<img src="https://images.unsplash.com/photo-1495510096779-5fbe73258c83?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=749&q=80">
			</div>
			<div class="lp2">
				<div class="mask_a xmask_reveal_para" style="width: 200%; height: 100%;">
					<div class="maskl bk_pink col2"></div>
					<div class="maskl bk_white col3"></div>
					<div class="maskr bk_purple col5"></div>
				</div>
				<img src="https://images.unsplash.com/photo-1530825894095-9c184b068fcb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=753&q=80">
			</div>
			<!-- <div class="lp3">
				<img src="https://images.unsplash.com/photo-1495510096779-5fbe73258c83?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=749&q=80">
			</div>
			<div class="lp4">
				<img src="https://images.unsplash.com/photo-1495510096779-5fbe73258c83?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=749&q=80">
			</div> -->
		</div>
	<!-- masking content -->
</div>

<style type="text/css">
	.landing_picture_wrapper{
		position: fixed;
		width: 100%;
		height: 100%;
		overflow: hidden;
		z-index: 1;
		top: 0;
		left: 0;
	}
	.landing_picture_wrapper > div{
		width: 100%;
		height: 100%;
		overflow: hidden;
		transition: all .3s ease-out;
		position: absolute;
		top: 0;
		left: 0;
	}
	.landing_picture_wrapper > div > img{
		width: 100%;
		height: 100%;
		object-fit: cover;
		position: relative;
		/*transition: all .3s ease-out;*/
	}
	.landing_picture_wrapper > div > img:hover{
		/*object-fit: cover;*/
	}
	.landing_picture_wrapper .lp1{
		clip-path: inset(40% 50% 20% 20%);
	}
	.landing_picture_wrapper .lp2{
		clip-path: inset(50% 80% 40% 10%);
	}
	.landing_picture_wrapper .lp3{
		clip-path: inset(40% 50% 20% 20%);
	}
	.landing_picture_wrapper .lp4{
		clip-path: inset(40% 50% 10% 20%);
	}
	.landing_picture_wrapper > div:hover {
	    clip-path: inset(0);
	}
</style>