<!-- <ul class="redes"> </ul> -->
<?php $url = urlencode(get_permalink());?>

<a target="_blank" rel="noreferrer" href="https://api.whatsapp.com/send?phone=&text=Estoy%20escuchando%20AM%20750%3A%0A%0A<?php echo $url?>"> 
	<li> <img src="<?php echo get_template_directory_uri(); ?>/img/s-wa.svg" width="" height="" alt="Haz clic para compartir en WhatsApp" /> </li> 
</a>

<a target="_blank" rel="noreferrer" href="mailto:?subject=Estoy escuchando AM 750&body=<?php echo $url?>"> 
	<li> <img src="<?php echo get_template_directory_uri(); ?>/img/s-mail.svg" width="" height="" alt="Haz clic para enviar por correo electrónico a un amigo" /></li>
</a>

<li class="facebook-share"> <img src="<?php echo get_template_directory_uri(); ?>/img/s-facebook.svg" width="" height="" alt="Compartir Noticias de AM 750 por Facebook" /> </li>

<li class="twitter-share"> 
	<img src="<?php echo get_template_directory_uri(); ?>/img/s-twitter.svg" width="" height="" alt="Compartir Noticias de AM 750 por twitter" /> 
</li>
