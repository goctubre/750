<?php  ?>
<style type="text/css">
#especiales .ev{ font-size: 16px; position: absolute; background: #fff;top: -15px; padding-left: 10px; padding-right: 10px; left: 0px;}
.darkmode #especiales .ev{background: #131313;}
#especiales a{ line-height: 20px; display: block; font-weight: bold;}
#especiales a img{ float: left; height: 60px; width: auto; margin-right: 10px;} 
#especiales .borde{ border-right: 1px solid #C4C4C4; display: block; line-height: 60px; height: 60px;}
#especiales .columns{border-top: 1px solid #009FD4; border-bottom: 1px solid #009FD4;}
#especiales .columns .column{position: relative;}
#especiales p{font-size: 12px;padding-top: 10px;}
#especiales a span{ display: block;line-height: 20px;padding-top: 10px;}
#especiales .columns .column>div{width: 170px;margin: 0 auto;}


@media screen and (max-width:769px){ 
  #especiales .borde{ border-right: 0px solid #C4C4C4;}
  #especiales .mw-320{ min-width: 190px; float: left;}
  #especiales .mw-320.primera{max-width: 160px;min-width: 20px;}  
  #especiales .over{ overflow-x: scroll; width: 100%; padding-top: 10px; }
  #especiales .over-content{ width: 900px; }
}

</style>


<div class="over">
<div class="columns m-0 over-content">
    <div class="column mw-320 primera" >
        <h2 class="ev">Especial vacunas</h2>
        <p>Lo que necesitás saber está en AM 750</p>
        
    </div>
    <div class="column mw-320">
        <div class="borde">
            <a href="<?php echo get_site_url(); ?>/vacunas-en-argentina/?sec=vacunas">
                <img src="<?php echo get_template_directory_uri(); ?>/covid-data/img/covid-btn_3.png" loading="lazy" width="80" height="80"/>
                <span>Tipos de <br/>vacunas</span>
            </a>
        </div>
    </div>
    <div class="column  mw-320">
        <div class="borde">
            <a href="<?php echo get_site_url(); ?>/vacunas-en-argentina/?sec=datos">
                <img src="<?php echo get_template_directory_uri(); ?>/covid-data/img/covid-btn_1.png" loading="lazy" width="80" height="80"/>
                <span style="padding-top: 20px;">Datos</span>
            </a>
        </div>
    </div>
    <div class="column  mw-320">
        <div>
            <a href="<?php echo get_site_url(); ?>/vacunas-en-argentina/?sec=preguntas">
                <img src="<?php echo get_template_directory_uri(); ?>/covid-data/img/covid-btn_2.png" loading="lazy" width="80" height="80"/>
                <span>Preguntas<br/>Frecuentes</span>
            </a>
        </div>
        
    </div>
</div>

</div>