<div class="am-main-row">

  <?php
  // WP_Query arguments
  $args = array(
  	'post_type'              => array( 'post' ),
  	'post_status'            => array( 'publish' ),
  	'nopaging'               => false,
  	'posts_per_page'         => '',
  	'ignore_sticky_posts'    => true,
  	'order'                  => 'DESC',
  	'orderby'                => 'date',
    'tax_query'         => array(
                                	'taxonomy'  => 'category',
                                	'field'     => 'slug',
                                	'terms'     => 'epreuve-e6',
                    ),
	);


  // The Query
  $e6_query = new WP_Query( $args );

  // The Loop
  if ( $e6_query->have_posts() ) {
  	while ( $e6_query->have_posts() ) {
  		$e6_query->the_post();?>
      <article class="am-main-content-card">
        <div class="am-main-content-card-detail">
        	<header>
        		<?php if (has_post_thumbnail()): ?>
        			<img src="<?= the_post_thumbnail_url("card");?>" alt="">
        		<?php endif; ?>
        	</header>
        	<div class="am-main-content-card-block">
            <div class="am-main-content-card-title">
        		    <h2><?= the_title();?></h2>
            </div>
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
