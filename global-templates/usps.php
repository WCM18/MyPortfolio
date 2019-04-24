<?php
/**
 * usps setup.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
$usps= new wp_query([
'post_type'=>'bs_usp',
'post_per_page'=>'3',

]);

if ($usps->have_posts()) {

	?>
	<div class="wrapper" id="wrapper-usps">
	  <div class="container">
	       <div class="row">	
 
							    <?php
								    while($usps->have_posts()){
									$usps->the_post();
							        ?>
							        <div class="col-md"> 
                                        <?php get_template_part('loop-templates/content','usp');?> 
                                        </div> 
                                        <?php
                                            } 
                                                wp_reset_postdata();                                                
                                            ?> 
		   
	        </div>
	    </div>
</div>
  <?php 
	}
		?>
