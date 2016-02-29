<?php
/**
 * Template Name: About Template
 */
?>

	<!-- About -->
	<section id="about" class="about bg-coal">
		<div class="container">
			<div class="row">
				<h2 class="text-center">About</h2><hr class="bg-light-green small">
			</div>
			<div class="row">            
				<div class="col-lg-12">
					<img class="mar-b-20 mar-t-20 img-center img-responsive img-circle img-thumbnail" src="<?= esc_url(get_template_directory_uri('/')); ?>/dist/images/dvanorman-homepage.jpg" alt="Dustin Van Orman image" title="Dustin Van Orman" />
				</div>
				<!-- <div class="col-lg-10 col-lg-offset-1 text-vertical-center">
					<p class="lead">A native of Washington state and a highly motivated individual, Cameron Van&nbsp;Orman is a talented web developer currently developing websites in Seattle, WA.</p>
					<br />
					<p class="lead"><a class="" href="#aboutModal" data-toggle="modal">Read More <i class="btl bt-circle-arrow-right bt-fw"></i></a></p>
				</div> -->
			</div>
		</div>
		<!-- /.container -->
	</section>

	<div class="about-modal modal fade" id="aboutModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<div class="close-modal" data-dismiss="modal">
				<i class="btl bt-times bt-3x"></i>
			</div>
			<div class="container">
				<div class="modal-body">
					<div class="row">
						<h2 class="text-center">About</h2><hr class="small border-coal">
					</div>
					<!-- <div class="row">
						<div class="col-md-6">
							<p class="lead">In the last 5 years, Cameron has worked in various technical roles at several fortune 500 companies. Beginning in 2010 when Cameron first moved to Seattle, he quickly found contract work at Google providing quality assurance for Google Maps. 2 years later, Cameron landed an opportunity at Amazon where he provided technical support for Amazon's digital products. After a year of working at Amazon, Cameron sought to learn web development as a hobby and took a brief hiatus in his career to focus on learning computer science fundamentals, HTML, CSS, Javascript, and PHP. In April 2013, vanormandesign.com was registered and a new website was created.</p>
						</div>
						<div class="col-md-6">    
							<p class="lead">
							Since launching Van&nbsp;Orman Design, Cameron Van&nbsp;Orman has been developing websites with HTML5, CSS3, jQuery, and PHP for clients throughout the United States. Lately, he has been leveraging the Twitter Bootstrap framework for front-end development and WordPress for content management. This website is currently built on WordPress with Twitter Bootstrap, CSS3, HTML5, jQuery, and PHP.</p>

							<p class="lead">Please <a href="mailto:cameron.vanorman@gmail.com" rel="nofollow">contact</a> Cameron Van&nbsp;Orman if you would like to discuss any project opportunities.</p>
						</div>
					</div> -->
					<div class="row">
						<div class="text-center">
							<a href="#" aria-label="Close" data-dismiss="modal"><i class="text-coal border-coal btl bt-times-circle bt-3x"></i></a>
						</div>
					</div>
				</div>
				<!-- /.row -->
			</div>
		</div>
	</div>