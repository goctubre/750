<!--
<a class="navbar-item is-hidden-mobile"> 
	<img src="<?php echo get_template_directory_uri(); ?>/img/nav-lupa.svg" width="" height="" alt="Buscar en AM 750" />
</a> -->
<!-- //SEARCH -->


   <!--DARKMODE-->
<!-- <div class="switch is-hidden-mobile" aria-label="Switch to the light theme">
<div class="switch-toggle"> <div class="switch-btn"></div> </div>
</div>-->
<!--DARKMODE-->

<style>
#search-input { box-sizing: border-box; width: 18px;
  height: 18px; border: 2px solid #3D3F52; border-radius: 50%; background: none; color: #3D3F52; font-size: 16px;
  font-weight: 400; outline: 0; -webkit-transition: width 0.4s ease-in-out, border-radius 0.8s ease-in-out,
    padding 0.2s;  transition: width 0.4s ease-in-out, border-radius 0.8s ease-in-out,
    padding 0.2s; -webkit-transition-delay: 0.4s; transition-delay: 0.4s; 
  -webkit-transform: translate(0%, 0%);  -ms-transform: translate(0%, 0%);  transform: translate(0%, 0%);
padding:0; cursor: pointer; color: transparent;}

#search .search {
background: none; /*position:absolute;top:0px;left:0;*/height: 18px;width:18px;
padding: 0;border-radius: 100%;outline: 0;border: 0;color: inherit;cursor: pointer;
-webkit-transition: 0.2s ease-in-out;transition: 0.2s ease-in-out;
-webkit-transform: translate(-100%, -50%);-ms-transform: translate(-100%, -50%);transform: translate(-100%, -50%);}

#search .search:before {
content: "";position: absolute;width: 10px;height: 2px;background-color:#3D3F52;
-webkit-transform: rotate(45deg);-ms-transform: rotate(45deg);
transform: rotate(45deg);margin-top:16px;margin-left: 20px;
-webkit-transition: 0.2s ease-in-out;transition: 0.2s ease-in-out;}

#search .close { -webkit-transition: 0.4s ease-in-out; transition: 0.4s ease-in-out; 
  -webkit-transition-delay: 0.4s; transition-delay: 0.4s; cursor: text;}

#search .close:before {content: "";position: absolute;width:18px;height:2px; 
margin-top:8px;margin-left:-1px;
background-color:#3D3F52;-webkit-transform: rotate(45deg);-ms-transform: rotate(45deg);
transform: rotate(45deg);-webkit-transition: 0.2s ease-in-out;
transition: 0.2s ease-in-out; cursor:e;}

#search .close:after {
content: "";position: absolute;width:18px; height:2px;background-color:#3D3F52;
margin-top: 8px !important;margin-left: -1px;cursor: pointer;
-webkit-transform: rotate(-45deg);-ms-transform: rotate(-45deg);transform: rotate(-45deg);}

#search .square {
box-sizing: border-box;padding: 0 40px 0 10px;width: 300px;height: 30px;border: 1px solid #3D3F52;
border-radius: 10px;background: none;color: #333;font-size:14px;font-weight: 400;outline: 0;
-webkit-transition: width 0.4s ease-in-out, border-radius 0.4s ease-in-out,
  padding 0.2s;transition: width 0.4s ease-in-out, border-radius 0.4s ease-in-out,
  padding 0.2s;-webkit-transition-delay: 0.4s, 0s, 0.4s;
transition-delay: 0.4s, 0s, 0.4s;
-webkit-transform: translate(0%, 0%);-ms-transform: translate(0%, 0%);transform: translate(0%, 0%);}
</style>