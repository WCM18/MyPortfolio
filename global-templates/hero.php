<?php
/**
 * Sidebar - hero canvas setup.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<?php if ( is_active_sidebar( 'herocanvas' ) ) : ?>

	<!-- ******************* The Hero Canvas Widget Area ******************* -->


	<div class="jumbotron jumbotron-fluid bg-dark text-white mt-3">
	<div class="row ml-5">
		<img src="wp-content/uploads/2019/04/me1.jpg" style="border-radius:10px;">
		<div class="column ml-5">
			<h2>
			Anju Shahi
		</h2>
			
		<p class="lead">
			<h6>A QA engineer and  webdeveloper</h6> 
			<h6>"Be conservative in what you send,be liberal in what you accept"</h6>
		</p>
		</div>
	</div>
</div>
<?php endif; ?>