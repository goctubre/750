<?php $candidates_url = get_option( 'candidates_url' );?>


<script type="text/javascript">
window.addEventListener('message', function(e) {
    if(e.origin!="https://www.pagina12.com.ar"){
        console.log("750 wiget heihgt",e.data.height);

        if(e.data.height){
            // console.log("e.data.height",e.data.height);
            document.querySelector('#GOlistas_paso').style.height = e.data.height+'px';
        }
    }
});
</script>
<iframe src="<?php echo get_option( 'candidates_url');?>" id="GOlistas_paso" scrolling="No" height="120px" width="100%" style="border: none;" ></iframe>

<!--https://especiales.gonoticias.com/2021/elecciones/listas_paso/resultados/widget/index.html?json=get_flowics_json&refresh=true-->