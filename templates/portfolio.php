<?php
/**
 * Template Name: Portfolio Template
 */
?>

	<!-- Portfolio Grid Section -->
	<section id="portfolio" class="container-fluid portfolio bg-egg-white">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2>Research Interests</h2>
				<hr class="small border-coal">
			</div>
		</div>
		<div class="row items">

			<div class="col-sm-4 portfolio-item">
				<a href="#portfolioModal1" class="portfolio-link" data-toggle="modal" data-target="#portfolioModal1">
					<div class="caption">
						<div class="caption-content">
							<p class="lead">Specific-Learning optimization</p>
						</div>
					</div>
				</a>
			</div>
			
		</div>
		<!-- ./row -->
	</section>

	<!-- Portfolio Modals -->
	<!-- <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<div class="close-modal" data-dismiss="modal">
				<i class="btl bt-times bt-3x"></i>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-10 col-lg-offset-1">
						<div class="modal-body" role="document">
							<h2>Aetherkid.com</h2>
							<hr class="small">
							<img class="img-responsive img-center" src="<?= esc_url(get_template_directory_uri('/')); ?>/dist/images/aetherkid_homepage.png" />
							<p>Website developed for a Seattle Rock band. Aetherkid.com is powered by WordPress and has a custom theme built with Twitter Bootstrap, CSS3, HTML5, jQuery, and custom PHP templates</p>
							<ul class="list-inline item-details">
								<li>Client:
									<strong><a href="http://aetherkid.com" target="_blank">Aetherkid</a>
									</strong>
								</li>
								<li>Date:
									<strong>2015</strong>
								</li>
								<li>Service:
									<strong>Web Development</strong>
								</li>
							</ul>
							<a href="#" aria-label="Close" data-dismiss="modal"><i class="text-coal border-coal btl bt-times-circle bt-3x"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<div class="close-modal" data-dismiss="modal">
				<i class="btl bt-times bt-3x"></i>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-10 col-lg-offset-1">
						<div class="modal-body" role="document">
							<h2>Concur.com</h2>
							<hr class="small">
							<img class="img-responsive img-center" src="<?= esc_url(get_template_directory_uri('/')); ?>/dist/images/concur_standard_test_drive.png" />
							<p>Developed and maintained webpages for concur.com and their international websites. Built webpages from design wireframes. This included building features in javascript for user interaction. I developed touch interactive features with HammerJS, and utilized jQuery for animating touch interaction. e.g. <a href="https://www.concur.com/en-us/standard-test-drive" target="_blank">concur.com/en-us/standard-test-drive</a>. Developed in a LEMP stack (Linux, Nginx, MySQL, PHP). Developed feature modules and custom content-types in Drupal using PHP and MySQL. Created admin pages with various user roles for Concur's global marketing department. Used SVN source control software for marketing websites, and GIT for internally developed webpages and web dashboards.</p>
							<ul class="list-inline item-details">
								<li>Company:
									<strong><a href="http://concur.com" target="_blank">Concur</a>
									</strong>
								</li>
								<li>Date:
									<strong>2013</strong>
								</li>
								<li>Role:
									<strong>Web Developer</strong>
								</li>
							</ul>
							<a href="#" aria-label="Close" data-dismiss="modal"><i class="text-coal border-coal btl bt-times-circle bt-3x"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<div class="close-modal" data-dismiss="modal">
				<i class="btl bt-times bt-3x"></i>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-10 col-lg-offset-1">
						<div class="modal-body" role="document">
							<h2>Qualityhardwoodfloors.org</h2>
							<hr class="small">
							<img class="img-responsive img-center" src="<?= esc_url(get_template_directory_uri('/')); ?>/dist/images/quality_hardwood_homepage.png" />
							<p>Website design and development for a Spokane hardwood flooring company. Qualityhardwoodfloors.org is built with the Twitter Bootstrap framework, HTML5 forms, CSS3, jQuery, and custom PHP templates for easy portability to another CMS.</p>
							<ul class="list-inline item-details">
								<li>Client:
									<strong><a href="http://qualityhardwoodfloors.org" target="_blank">Quality Hardwood Floors</a>
									</strong>
								</li>
								<li>Date:
									<strong>2014</strong>
								</li>
								<li>Service:
									<strong>Web Development and Design</strong>
								</li>
							</ul>
							<a href="#" aria-label="Close" data-dismiss="modal"><i class="text-coal border-coal btl bt-times-circle bt-3x"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<div class="close-modal" data-dismiss="modal">
				<i class="btl bt-times bt-3x"></i>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-10 col-lg-offset-1">
						<div class="modal-body" role="document">
							<h2>Fedeltahomecare.org</h2>
							<hr class="small">
							<img class="img-responsive img-center" src="<?= esc_url(get_template_directory_uri('/')); ?>/dist/images/logos/fedelta-capture.jpg" alt="Fedelta Home Care" title="Fedelta Home Care" />
							<p>Front-end Development</p>
							<ul class="list-inline item-details">
								<li>Client:
									<strong><a href="http://fedeltahomecare.com" target="_blank">Fedelta Home Care</a>
									</strong>
								</li>
								<li>Date:
									<strong>2015</strong>
								</li>
								<li>Service:
									<strong>Front-end Development with Fusion CMS on the back-end.</strong>
								</li>
							</ul>
							<a href="#" aria-label="Close" data-dismiss="modal"><i class="text-coal border-coal btl bt-times-circle bt-3x"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<div class="close-modal" data-dismiss="modal">
				<i class="btl bt-times bt-3x"></i>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-10 col-lg-offset-1">
						<div class="modal-body">
							<h2>Ventureseattle.com</h2>
							<hr class="small">
							<img class="img-responsive img-center" src="<?= esc_url(get_template_directory_uri('/')); ?>/dist/images/logos/ventureseattle-capture.jpg" alt="Venture Seattle Frontpage" title="Venture Seattle" />
							<p>Front-end Development</p>
							<ul class="list-inline item-details">
								<li>Client:
									<strong><a href="http://ventureseattle.com" target="_blank">Venture Seattle</a>
									</strong>
								</li>
								<li>Date:
									<strong>2015</strong>
								</li>
								<li>Service:
									<strong>Front-end Development with Fusion CMS on the back-end.</strong>
								</li>
							</ul>
							<a href="#" aria-label="Close" data-dismiss="modal"><i class="text-coal border-coal btl bt-times-circle bt-3x"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<div class="close-modal" data-dismiss="modal">
				<i class="btl bt-times bt-3x"></i>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-10 col-lg-offset-1">
						<div class="modal-body">
							<h2>Tcllfoundation.org</h2>
							<hr class="small">
							<img class="img-responsive img-center" src="<?= esc_url(get_template_directory_uri('/')); ?>/dist/images/logos/tcllfoundation-capture.jpg" alt="TCLL Foundation Frontpage" title="TCLL Foundation" />
							<p>Front-end Development</p>
							<ul class="list-inline item-details">
								<li>Client:
									<strong><a href="http://tcllfoundation.org" target="_blank">T-Cell Leukemia Lymphoma Foundation</a>
									</strong>
								</li>
								<li>Date:
									<strong>2015</strong>
								</li>
								<li>Service:
									<strong>Front-end Development with Fusion CMS on the back-end.</strong>
								</li>
							</ul>
							<a href="#" aria-label="Close" data-dismiss="modal"><i class="text-coal border-coal btl bt-times-circle bt-3x"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
 -->