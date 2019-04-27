<?php
/**
 * usps setup.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/* $languages= new wp_query([
'post_type'=>'Programming_language',
'post_per_page'=>'6',

]); */
$languages=get_field('Programming_languages');
if ($languages) {

	?>
	<section id="wrapper-languages">
	  <div class="container">
	       <div class="row">	
 
									<?php
									
								    foreach($languages as $post){
									    setup_postdata($post);
							        ?>
							        <div class="col-md"> 
                                        <?php get_template_part('loop-templates/content','us_language');?> 
                                        </div> 
                                        <?php
                                            } 
                                                wp_reset_postdata();                                                
                                            ?> 
		   
	        </div>
	    </div>
		</section>
  <?php 
	}
		?>

