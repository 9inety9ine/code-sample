<?php get_header(); ?>
	
	<section class="main intro jarallax" id="top" data-stellar-background-ratio="0.5">
		<div class="container">
			<div class="row">
				<section class="col-lg-12" id="content" role="main">
					<article class="page">
						<h1><?php bloginfo('name'); ?></h1>
						<h2><?php bloginfo('description'); ?></h2>
					</article>
				</section>
			</div>
		</div>
	</section>
	<section class="main projects web-design" id="website">
		<div class="container">
			<div class="row">
				<section class="col-lg-12">
					<h2>Web Design &amp; Development</h2>
					<?php include_once('inc/web-design.php'); ?>
				</section>
			</div>
		</div>
	</section>
	<section class="main projects interface alt" id="interface">
		<div class="container">
			<div class="row">
				<section class="col-lg-12">
					<h2>UI/UX &amp; Interface</h2>
					<?php include_once('inc/interface.php'); ?>
				</section>
			</div>
		</div>
	</section>
	<section class="main projects marketing" id="marketing">
		<div class="container">
			<div class="row">
				<section class="col-lg-12">
					<h2>Marketing &amp; Funnel Pages</h2>
					<?php include_once('inc/marketing.php'); ?>
				</section>
			</div>
		</div>
	</section>
	<section class="main projects branding alt" id="branding">
		<div class="container">
			<div class="row">
				<section class="col-lg-12">
					<h2>Branding &amp; Promotional</h2>
					<?php include_once('inc/branding.php'); ?>
				</section>
			</div>
		</div>
	</section>

<?php get_footer(); ?>