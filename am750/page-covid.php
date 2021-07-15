<?php
/*
 Template Name: COVID-19
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package am750
 */
// refe https://coronavirus.msal.gov.ar/vacunas/d/8wdHBOsMk/seguimiento-vacunacion-covid/d/8wdHBOsMk/seguimiento-vacunacion-covid?orgId=1&refresh=15m%3F%3F%3F%3F%3F%3Flogin
get_header();


if(isset($_GET["sec"])){
	$section = $_GET['sec'];
}else{
	$section = "datos";
}
?>

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/covid-data/style.css?v=5">

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<!--     <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/covid-data/js/functions.js"></script> -->

	<section  id="covid" class="mt-6">
		<div class="">


			<?php include get_theme_file_path( '/covid-data/head.php' );?>


			<div class="">
				<?php if($section=="datos"){?>
					<div class="">
						<?php include get_theme_file_path( '/covid-data/page-datos.php' );?>
					</div>
				<?php }?>
				<?php if($section=="preguntas"){?>
					<div class="">
						<?php include get_theme_file_path( '/covid-data/page-faqs.php' );?>
					</div>
				<?php }?>
				<?php if($section=="vacunas"){?>
					<div class="">
						<?php include get_theme_file_path( '/covid-data/page-vacunas.php' );?>
					</div>
				<?php }?>

			</div>



	</section>

<?php
get_footer();