


<?php global $wp; 


if(isset($_GET["sec"])){
	$section = $_GET['sec'];
}else{
	$section = "datos";
}
?>
<!-- <div class="info">
	<p class="py-3">En este Especial vas a encontrar datos sobre la campaña de vacunación, fichas de cada una de las vacunas contra el COVID 19 que se aplican en Argentina y una guía con preguntas y respuestas. </p>
</div> -->
<div class="covid-menu tabs is-centered pt-4">
  <ul>
  	<li class="<?php if($section=='vacunas'){echo 'is-active';}?> menu-items">
    	<a href="<?php echo home_url( $wp->request )?>?sec=vacunas" class="has-text-centered" >
	   	 	<img src="<?php echo get_template_directory_uri(); ?>/covid-data/img/covid-btn_3.png" width="80" height="80" alt="" style="" class=""/>
			<span>Tipos de <br/>vacunas</span>
	  	</a>
    </li>
    <li class="<?php if($section=='datos'){echo 'is-active';}?> menu-items">
		<a href="<?php echo home_url( $wp->request )?>?sec=datos" class="has-text-centered">
			<img src="<?php echo get_template_directory_uri(); ?>/covid-data/img/covid-btn_1.png" width="80" height="80" alt="" style="" class=""/>
			<span>Datos</span>
	  	</a>
    </li>
    <li class="<?php if($section=='preguntas'){echo 'is-active';}?> menu-items">
    	<a href="<?php echo home_url( $wp->request )?>?sec=preguntas" class="has-text-centered" >
	   	 	<img src="<?php echo get_template_directory_uri(); ?>/covid-data/img/covid-btn_2.png" width="80" height="80" alt="" style="" class=""/>
			<span>Preguntas<br/>Frecuentes</span>
	  	</a>
    </li>
    
  </ul>
</div>

	