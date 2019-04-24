<?php
/**
 * Portfolio Items setup.
 *
 * @package understrap
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
// Get the three latest Portfolio Items
$portfolio_items = new WP_Query([
	'post_type' => 'bs_usp',
	'posts_per_page' => -1,
]);
// Did we get any Portfolio Items?
if ($portfolio_items->have_posts()) {
	// GREAT SUCCESS!
	?>
		<div class="wrapper" id="wrapper-portfolio">
			<div class="container">
<h6><?php _e('Portfolio', 'understrap'); ?></h6>

				<div class="row">
					<!-- Loop over the Portfolio Items -->
					<?php
						while ($portfolio_items->have_posts()) {
							$portfolio_items->the_post();
							?>
								<!-- For each Portfolio Item, include a template part? -->
								<?php get_template_part('loop-templates/content','usp'); ?>
							<?php
						}
						// DON'T FORGET TO RESET POSTDATA!
						wp_reset_postdata();
					?>
				</div><!-- /.row -->
			</div>
		</div>
	<?php
}
