<?php while (have_posts()) : the_post(); ?>
	<article <?php post_class(); ?>>
		<section class="entry-content bg-coal">
			<div class="container">
				<div class="row">
					<h1 class="text-center entry-title"><?php the_title(); ?></h1><hr class="bg-light-green small">
				</div>
				<div class="row">            
					<div class="col-lg-12">
						<img class="mar-b-20 mar-t-20 img-center img-responsive img-circle img-thumbnail" src="<?= esc_url(get_template_directory_uri('/')); ?>/dist/images/cameron-2013.jpg" alt="Cameron Van Orman" title="Cameron Van Orman" />
					</div>
					<div class="col-lg-10 col-lg-offset-1 text-vertical-center">
						<?php the_content(); ?>
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
