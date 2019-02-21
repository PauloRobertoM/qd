<?php
	$args = array(
		'posts_per_page' => 4,
		'post_type'      => 'vitrines',
	);

	$vitrines = get_posts($args);
?>

	<section class="vitrine">
		<div class="owl-carousel owl-theme owl-vitrine">
			<?php foreach ($vitrines as $vitrine) : ?>
				<div class="item">
					<?php
			        	$vitrines = rwmb_meta('vitrines_foto', 'type=plupload_image', $vitrine->ID);
			        	foreach ( $vitrines as $vitrine ) {
			        		echo "<img src='{$vitrine['url']}' class='hidden-xs' alt='{$vitrine['alt']}' />";
			        	}
		        	?>
		        	<div class="conteudo">
	                	<div>
	                		<h1><?php the_title(); ?></h1>
	                		<h4><?php the_content(); ?></h4>
	                	</div>
	                </div><!-- conteudo -->
				</div><!-- item -->
			<?php endforeach; ?>
        </div><!-- . owl-carousel -->
	</section><!-- vitrine -->