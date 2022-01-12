<script type="text/javascript">
window.addEventListener('message', function(e) {
    if(e.data.height){ //console.log("e.data.height",e.data.height);
        document.querySelector('#covid_data').style.height = e.data.height+"px"; }});
</script>
<iframe src="https://750.am/especiales/covid_data/index.php"  id="covid_data" scrolling="No" height="120" width="100%" style="border: none;" ></iframe>