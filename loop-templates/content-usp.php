<div class="col-md">
	<div class="usp">
<?php
if($icon = get_post_meta(get_the_ID(), 'icon', true)) {
?>
<span class= "fa <?php echo $icon; ?> fa-3x" ></span>
<?php
}
?>
		<h1><?php the_title();?></h1>
		<p><?php the_content();?></p>
		<?php
                                            
                                                wp_reset_postdata();                                                
                                            ?> 
		
</div></div>
<?php 
if ($link) {
	?>
	<a href="<?php echo $link; ?>" class= "btn btn-primary">
	<?php_e ('Read more', 'understrap'); ?>
</a> 
<?php
 }?>
 
 