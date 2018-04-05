<div class="am-main-row">

	<?php
	// WP_Query arguments
	$args = array(
		'post_type'              => array( 'post' ),
		'post_status'            => array( 'publish' ),
		'nopaging'               => false,
		'category_name'					 => 'epreuve-e4',
		'posts_per_page'         => '2',
		'ignore_sticky_posts'    => true,
		'order'                  => 'DESC',
		'orderby'                => 'date',
		'tax_query'         => array(
                                	'taxonomy'  => 'category',
                                	'field'     => 'slug',
                                	'terms'     => 'epreuve-e4',
                    ),
	);

	// The Query
	$e4_query = new WP_Query( $args );

	// The Loop
	if ( $e4_query->have_posts() ) {
		while ( $e4_query->have_posts() ) {
			$e4_query->the_post();?>
<article class="am-main-content-card">
  <div class="am-main-content-card-detail">
  	<header>
  		<?php if (has_post_thumbnail()): ?>
  			<img src="<?= the_post_thumbnail_url("card");?>" alt="">
  		<?php endif; ?>
  	</header>
  	<div class="am-main-content-card-block">
  		<h2><?= the_title();?></h2>
  		<?php the_content();?>
  	</div>
  	<footer>
  	</footer>
  </div>
</article>
			<?php
		}
	} else {
		// no posts found
	}

	// Restore original Post Data
	wp_reset_postdata();
	?>
</div>
