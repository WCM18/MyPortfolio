<div class="wrapper-portfolio col-md-6 col-log-4">
	<div class="portfolio">
<?php
/* if($icon = get_post_meta(get_the_ID(), 'icon', true)) {
?>
<span class= "fa ?php echo $icon; ?> fa-3x" ></span>
?php
} */
?> <?php if(has_post_thumbnail());?>
     <a href="<?php the_permalink();?>">
		<?php the_post_thumbnail('portfolio-thumbnail',['class'=>'img-fluid']);
		?>
		</a>


		<h1><?php the_title();?></h1>
		<p><?php the_excerpt();?></p>
	
		
		
</div>
</div>

 
 