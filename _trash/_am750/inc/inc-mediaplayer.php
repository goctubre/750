<!--defer-non-critical-css // AJAXIFY-->
  <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/css/mini-player-v02.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/mini-player-v02.css"></noscript>
  <!--//defer-non-critical-css // AJAXIFY-->

  <link rel="preload" href="https://player.cdn.mdstrm.com/lightning_player/api.js" as="script">
  <script type="text/javascript"  src="https://player.cdn.mdstrm.com/lightning_player/api.js" data-container="player-div" data-type="live" data-id="601bf3e463786007e6d3b9b0" data-app-name="am750" id="playerScript" data-loaded="playerLoaded" async>  </script>

  <div id="player-div"></div>


<!-- <script type="text/javascript">
    function playerLoaded (player) { console.log('*** player loaded', player) }
  </script>
 -->


 
    