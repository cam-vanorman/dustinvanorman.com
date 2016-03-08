<?php
/**
 * Template Name: Blog Template
 */
?>

<?php
// argument that defines three posts per page.
$args = array( 'posts_per_page' => 3 );

// Variable to call WP_Query.
$the_query = new WP_Query( $args );

if ( $the_query->have_posts() ) : ?>

<!-- Blog posts -->
<section id="blog" class="container-fluid portfolio bg-egg-white">
	<div class="row">
		<div class="col-lg-12 text-center">
			<h2>Recent Articles</h2>
			<hr class="small border-coal">
		</div>
	</div>
	<div class="row items">
	
	<?php
	// Start the Loop
	while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

		
		<div class="col-md-4">
			<h3><?php the_title(); ?></h3>
			<hr class="small">
			<p class="lead"><?php the_excerpt(); ?></p>
		</div>
		
	<?php 
	endwhile; // End the Loop 
	?>

	</div> <!-- ./ row items -->
	
	<?php else:
		// If no posts match this query, output this text.
		_e( '<div class="text-vertical-center">
            <i class="btl bt-quote-right bt-3x"></i>
            <hr class="small">
            <h3>"The good writer seems to be writing about himself, but has his eye always on that thread of the Universe which runs through himself and all things."</h3>
            <h4>— Ralph Waldo Emerson</h4>
   			</div>', 'dustinvanorman.com' );
	endif;
	wp_reset_postdata();
 
?>
</section>