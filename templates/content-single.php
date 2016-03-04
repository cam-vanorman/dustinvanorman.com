<?php while (have_posts()) : the_post(); ?>
	<article <?php post_class(); ?>>
		<section class="entry-content">
			<div class="container">
				<div class="row">
					<h1 class="text-center entry-title"><?php the_title(); ?></h1><hr class="small">
					<?php 
						the_date('D, M, Y', '<h4 class="text-center">', '</h4>');
					?>
				</div>
			</div>
			<div class="container">
				<div class="row">            
					<div class="col-lg-12">
						<?php
							// check if the post has a Post Thumbnail assigned to it.
							if (has_post_thumbnail()) {
								the_post_thumbnail();
							}
						?>
					</div>
				</div>
			</div>
			<div class="mar-t-20">	
				<div class="container">
					<div class="row">
						<div class="col-lg-10 col-lg-offset-1">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			</div>
			<!-- /.container -->
		</section>
		<footer>
			<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
		</footer>
	</article>
<?php endwhile; ?>
