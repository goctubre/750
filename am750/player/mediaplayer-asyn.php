 <script src="https://player.cdn.mdstrm.com/lightning_player/api.js" importance="low"></script>

	<style>
		#playerloading { background: #000; height: 70px; width: 100%; position: fixed;  bottom: 0; text-align: center; z-index: 999}
		.lds-ellipsis {display: inline-block;position: relative; width: 80px;height: 80px;}
		.lds-ellipsis div { position: absolute;  top: 33px; width: 13px; height: 13px; border-radius: 50%; background: #fff; animation-timing-function: cubic-bezier(0, 1, 1, 0);}
		.lds-ellipsis div:nth-child(1) { left: 8px; animation: lds-ellipsis1 0.6s infinite;}
		.lds-ellipsis div:nth-child(2) { left: 8px; animation: lds-ellipsis2 0.6s infinite;}
		.lds-ellipsis div:nth-child(3) { left: 32px; animation: lds-ellipsis2 0.6s infinite;}
		.lds-ellipsis div:nth-child(4) { left: 56px; animation: lds-ellipsis3 0.6s infinite;}
		@keyframes lds-ellipsis1 { 0% {transform: scale(0); }  100% { transform: scale(1); }}
		@keyframes lds-ellipsis3 { 0% { transform: scale(1);} 100% { transform: scale(0);}}
		@keyframes lds-ellipsis2 { 0% { transform: translate(0, 0); } 100% { transform: translate(24px, 0);}}
	</style>




	<div id="player-div"> </div>

	<!--loading--->
	<div id="playerloading"> <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div></div>
	<!--//loading--->

	<div id="falsoplayer">

		<div class="msp_radio" style="">

			<div class="np__global_wrapper"><div class="np__global_player">
				<div class="np__container_ads_full np__hidden np__container_ads_full__bottom">
					<div class="np__ads_full"></div>
				</div>

				<div class="np__player_widget">
					<div class="np__controls_elements np__elements_soundbadge">
						<div class="np__container_bg" style="background-image: url(&quot;//crop-platform-static.cdn.mdstrm.com/show/images/60106eadf34de307dd720e7b_602e8a47b590f170a86676f1_1613662819783.jpg?fit=crop&amp;w=600&amp;h=195&quot;);">
						</div>

						<div class="np__soundbadge_info">
							<div class="np__soundbadge_info_top">
								<div class="np__soundbadge_info_small np__soundbadge_onair">
									<div class="np__soundbadge_ecualizer">
										<div class="np__equalizer np__equalizer__stop"> <div> </div> <div>
									</div>
								<div>
							</div>
						</div>

						<span>al aire</span>
					</div>
				</div>
			
				<span class="np__soundbadge_info_small">AM750</span></div>
				<div class="np__soundbadge_info_principal"> <span class="np__info_principal">Escuchanos</span> <span class="np__info_principal"> - </span> <span class="np__info_principal"> En vivo </span> </div>
			</div>
		</div>

		<div class="np__controls_elements np__elements_play_controls" id='playmedia'>

	 		<div class="np__btn_controls_volume_container" style="opacity: 0.2;">
				<div class="np__btn_controls">
					<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="volume-up" class="svg-inline--fa fa-volume-up fa-w-18 np__btn_controls_icon" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M215.03 71.05L126.06 160H24c-13.26 0-24 10.74-24 24v144c0 13.25 10.74 24 24 24h102.06l88.97 88.95c15.03 15.03 40.97 4.47 40.97-16.97V88.02c0-21.46-25.96-31.98-40.97-16.97zm233.32-51.08c-11.17-7.33-26.18-4.24-33.51 6.95-7.34 11.17-4.22 26.18 6.95 33.51 66.27 43.49 105.82 116.6 105.82 195.58 0 78.98-39.55 152.09-105.82 195.58-11.17 7.32-14.29 22.34-6.95 33.5 7.04 10.71 21.93 14.56 33.51 6.95C528.27 439.58 576 351.33 576 256S528.27 72.43 448.35 19.97zM480 256c0-63.53-32.06-121.94-85.77-156.24-11.19-7.14-26.03-3.82-33.12 7.46s-3.78 26.21 7.41 33.36C408.27 165.97 432 209.11 432 256s-23.73 90.03-63.48 115.42c-11.19 7.14-14.5 22.07-7.41 33.36 6.51 10.36 21.12 15.14 33.12 7.46C447.94 377.94 480 319.54 480 256zm-141.77-76.87c-11.58-6.33-26.19-2.16-32.61 9.45-6.39 11.61-2.16 26.2 9.45 32.61C327.98 228.28 336 241.63 336 256c0 14.38-8.02 27.72-20.92 34.81-11.61 6.41-15.84 21-9.45 32.61 6.43 11.66 21.05 15.8 32.61 9.45 28.23-15.55 45.77-45 45.77-76.88s-17.54-61.32-45.78-76.86z"></path></svg>
				</div>

				<div class="np__player_volume_container">
					<div class="np__player_volume_container_elements react-draggable" style="transform: translate(0px);">
						<div class="np__player_volume_track">
							<div class="np__player_volume_percent" style="height: 100%;"></div>
						</div>

						<div class="np__player_volume_dragging" style="bottom: 100%;"></div>
					</div>
				</div>
			</div>

			<button class="np__btn_controls disabled" style="opacity: 0.2;">
				<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="step-backward" class="svg-inline--fa fa-step-backward fa-w-14 np__btn_controls_icon" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
					<path fill="currentColor" d="M64 468V44c0-6.6 5.4-12 12-12h48c6.6 0 12 5.4 12 12v176.4l195.5-181C352.1 22.3 384 36.6 384 64v384c0 27.4-31.9 41.7-52.5 24.6L136 292.7V468c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12z"></path>
				</svg>
			</button>

			<button class="np__btn_controls np__btn_controls_play"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="play" class="svg-inline--fa fa-play fa-w-14 np__btn_controls_icon" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M424.4 214.7L72.4 6.6C43.8-10.3 0 6.1 0 47.9V464c0 37.5 40.7 60.1 72.4 41.3l352-208c31.4-18.5 31.5-64.1 0-82.6z"></path></svg></button>

			<button class="np__btn_controls disabled" style="opacity: 0.2;"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="step-forward" class="svg-inline--fa fa-step-forward fa-w-14 np__btn_controls_icon" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M384 44v424c0 6.6-5.4 12-12 12h-48c-6.6 0-12-5.4-12-12V291.6l-195.5 181C95.9 489.7 64 475.4 64 448V64c0-27.4 31.9-41.7 52.5-24.6L312 219.3V44c0-6.6 5.4-12 12-12h48c6.6 0 12 5.4 12 12z"></path></svg></button>

			<button class="np__btn_controls" style="opacity: 0.2;"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="share-alt" class="svg-inline--fa fa-share-alt fa-w-14 np__btn_controls_icon np__btn_controls_icon__share" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
				<path fill="currentColor" d="M352 320c-22.608 0-43.387 7.819-59.79 20.895l-102.486-64.054a96.551 96.551 0 0 0 0-41.683l102.486-64.054C308.613 184.181 329.392 192 352 192c53.019 0 96-42.981 96-96S405.019 0 352 0s-96 42.981-96 96c0 7.158.79 14.13 2.276 20.841L155.79 180.895C139.387 167.819 118.608 160 96 160c-53.019 0-96 42.981-96 96s42.981 96 96 96c22.608 0 43.387-7.819 59.79-20.895l102.486 64.054A96.301 96.301 0 0 0 256 416c0 53.019 42.981 96 96 96s96-42.981 96-96-42.981-96-96-96z"></path></svg>
			</button>

			<div class="np__btn_controls_mobile">
				<button class="np__btn_controls moreless"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="np__btn_controls_icon"><path d="M12 8l-6 6 1.41 1.41L12 10.83l4.59 4.58L18 14z"></path><path d="M0 0h24v24H0z" fill="none"></path></svg>
				</button>
			</div>
		</div>

			<div class="np__controls_elements np__elements_menu_controls" style="opacity: 0.1"><button class="np__btn_controls moreless"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="np__btn_controls_icon"><path d="M12 8l-6 6 1.41 1.41L12 10.83l4.59 4.58L18 14z"></path><path d="M0 0h24v24H0z" fill="none"></path></svg></button></div>

		</div>
	</div>
</div>
</div>

	</div>
	

<!--   <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/css/mini-player-v02.css" as="style" onload="this.onload=null;this.rel='stylesheet'" importance="low">
  <noscript><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/mini-player-v02.css"></noscript> -->

  <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/css/mini-player-filtrado.css" as="style" onload="this.onload=null;this.rel='stylesheet'" importance="low">
  <noscript><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/mini-player-filtrado.css"></noscript>
  <!--//defer-non-critical-css // AJAXIFY-->
  
  <div id="playerLoaded"> </div>


	<script type="text/javascript">

	// SEGUIR
		  var reproduciendo = false; 
		  var falsoplayeron = true; 

		  var falsoplayer = document.getElementById('falsoplayer');      
		  var playerloading = document.getElementById('playerloading');  
		  var btfalsotop = document.querySelectorAll(".play_btn");  //#playnav
		  var btfalsobottom = document.querySelector('#falsoplayer .np__btn_controls_play'); 

		  function llamarposta () {
		  	//console.log("llamar-falsoplayer");
		    reproduciendo = true;
		    window.reproduciendo=true;
		    //console.log("reproduciendo:"+reproduciendo);
		    //console.log("falsoplayeron:"+falsoplayeron);
		    dataLayer.push({'event': 'play'});
		    btfalsotop.forEach(function(el) {  el.classList.add('reproduciendo'); });
		    btfalsotop.forEach(function(el) {  el.classList.remove('llamarfalsoplayer'); });
		    
		    // calling script
		    var script = document.createElement("script");
		    script.type = "text/javascript";
		    script.src = "https://player.cdn.mdstrm.com/lightning_player/api.js";
		    script.dataset.container = "player-div";
		    script.dataset.type = "live";
		    script.dataset.id = "601bf3e463786007e6d3b9b0";
		    script.dataset.appName = "am750";
		    script.id = "playerScript";
		    //script.dataset.loaded = "playerLoaded";
		    script.dataset.autoplay = "autoplay";
		    document.getElementsByTagName("head")[0].appendChild(script);
		    falsoplayer.remove();
		    setTimeout(function(){ playerloading.remove(); },2000);

		    //setTimeout(function(){document.querySelector("#player-div .np__btn_controls_play").style.background = "blue"; }, 3000);

	      setTimeout(function(){
		    	var btbottom = document.querySelector('#player-div .np__btn_controls_play'); 
	        btbottom.addEventListener("click", haztugraciadown);
		    }, 4000);
	      
		    falsoplayeron = false; 
				return false;
		  }


			 function haztugraciatop() {
			    //YA ANDANDO
			    if(falsoplayeron === false){	
				    if (reproduciendo === true) {
				      document.querySelector('#player-div .np__btn_controls_play').click();
				    } else {
				       document.querySelector('#player-div .np__btn_controls_play').click();
				    }  

			    //LLAMAR PLAYER
			    } else if (falsoplayeron === true) { llamarposta(); };
			  }

			 function haztugraciadown () {
			    //YA ANDANDO
			    if(falsoplayeron === false){	
				    if (reproduciendo === true) {
				      document.querySelectorAll('.play_btn').forEach(function(el) {  el.classList.remove('reproduciendo'); });

				      console.log("*pausado*");
				      reproduciendo = false;
				      console.log("reproduciendo:"+reproduciendo);
				      dataLayer.push({'event': 'stop'});
				    } else {
				      document.querySelectorAll('.play_btn').forEach(function(el) {  el.classList.add('reproduciendo'); });
				      console.log("*play*");
				      reproduciendo = true;
				      console.log("reproduciendo:"+reproduciendo);
				      dataLayer.push({'event': 'play'});
				    }  
			    //LLAMAR PLAYER
			    } else if (falsoplayeron === true) { llamarposta(); };
			  }

	//btfalsotop.addEventListener("click", haztugraciatop);
	btfalsotop.forEach(function(el) {  el.addEventListener("click", haztugraciatop); });
	btfalsobottom.addEventListener("click", haztugraciadown);
	btbottom = document.querySelector('#player-div .np__btn_controls_play'); 
  if (btbottom !== null) {  btbottom.addEventListener("click", haztugraciadown); }
  

	</script>
