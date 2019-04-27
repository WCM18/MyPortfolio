<!-- /*?php
  $logo = get_field('logo');
  echo"<pre>";
  print_r($logo);
  echo"<pre>";
  */ -->

<div class="wrapper-portfolio col-md-6 col-log-4">
	<article class="portfolio">
<?php
/* if($icon = get_post_meta(get_the_ID(), 'icon', true)) {
?>
<span class= "fa ?php echo $icon; ?> fa-3x" ></span>
?php
} */
?>
<header>
<div>
<?php if(has_post_thumbnail()):?>
     <a href="<?php the_permalink();?>">
		<?php the_post_thumbnail('portfolio-thumbnail',['class'=>'img-fluid']);
		?>
		</a>
<?php endif;?>
</div>
		<h1><?php the_title();?></h1>
		<main>
		<p><?php the_excerpt();?></p>
</main>
	<footer>
	<?php the_terms(get_the_id(),'us_portfolio_branch',__('branch:', 'understrap'));?>
	</footer>	
		
</article>
</div>

 
 