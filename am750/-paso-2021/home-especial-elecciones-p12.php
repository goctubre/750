<?php $candidates_p12_url = get_option( 'candidates_p12_url' );?>
<iframe id="pagina12" src="<?php echo get_option( 'candidates_p12_url');?>" scrolling="no" width="100%" style="border: none;" ></iframe>

<script type="text/javascript">
window.addEventListener('message', function(e) {
    if(e.data.height){
        console.log("e.data.height",e.data.height);
        document.querySelector('#pagina12').style.height = e.data.height+"px";
    }
});

</script>

<style> @media screen and (min-width: 775px) { #pagina12{height: 260px !important;}} </style>