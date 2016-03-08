<?php get_template_part('templates/head'); ?>
<?php get_template_part('templates/page', 'header'); ?>
	<body <?php body_class(); ?>>
	<!--[if lt IE 9]>
		<div class="alert alert-warning">
			<?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
		</div>
	<![endif]-->
		<?php
			do_action('get_header');
			get_template_part('templates/header');
		?>
		<main class="main-content">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<?php _e('<h1>We\'reSorry</h1><p class="lead">the page you were trying to view does not exist.</p>', 'sage'); ?>
					</div>
				</div>
			</div>
			
		</main>
		<?php
			get_template_part('templates/footer');
			wp_footer();
		?>
	</body>
</html>



<?php get_search_form(); ?>
