<?php
/**
 * Template Name: Dashboard Template
 */
?>
	
	<section class="broke-2015 dashboard">
		<div class="container-fluid">
			<div class="row">
				<aside class="col-md-2">
					<div class="row">
						<div class="col-md-12">
							<div class="nav-side-dashboard">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4>Navigation <i class="pull-right btl bt-caret-down"></i></h4>
									</div>
									<div class="panel-body">
										<ul class="nav nav-pills nav-stacked">
											<li><a href=""><i class="btl bt-home bt-fw"></i> Home</a></li>
											<li><a href=""><i class="btl bt-book bt-fw"></i> Library</a></li>
											<li><a href=""><i class="btl bt-gear bt-fw"></i> Settings</a></li>	
										</ul>
									</div>
								</div>
							</div>						
						</div>
					</div>
				</aside>
				<section class="col-md-10">
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-lg-4">
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4>Quote of the day <i class="pull-right btl bt-caret-down"></i></h4>
										</div>
										<div class="panel-body">
											<div class="text-vertical-center">
									            <i class="btl bt-quote-right bt-3x"></i>
									            <h3>"The only thing that will redeem mankind is cooperation."</h3>
									            <h4>— Bertrand Russell</h4>
									        </div>
										</div>
									</div>
								</div>
								<div class="col-lg-3">
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4>Operating Systems <i class="pull-right btl bt-caret-down"></i></h4>
										</div>
										<div class="panel-body">
											<i class="btl bt-hard-drive bt-3x"></i>
											<canvas id="pieChart" class="chart"></canvas>
										</div>
									</div>
								</div>
								<div class="col-lg-2">
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4>Users <i class="pull-right btl bt-caret-down"></i></h4>
										</div>
										<div class="panel-body">
											<div class="text-center">
									            <i class="btl bt-user bt-3x"></i>
									            <hr class="small">
									            <h1>5</h1>
									        </div>
										</div>
									</div>
								</div>
								<div class="col-lg-3">
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4>Revenue <i class="pull-right btl bt-caret-down"></i></h4>
										</div>
										<div class="panel-body">
											<i class="btl bt-money bt-3x"></i>
											<canvas id="doughnutChart" class="chart"></canvas>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</section>
