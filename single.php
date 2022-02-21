<?php get_header(); ?>
 
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
<?php $type = get_field('type'); ?>

<?php if ($type == 'website') { ?>

	<?php include_once('inc/web-design-single.php'); ?>

<?php } elseif ($type == 'interface') { ?>

	<?php include_once('inc/interface-single.php'); ?>

<?php } elseif ($type == 'marketing') { ?>

	<?php include_once('inc/marketing-single.php'); ?>

<?php } elseif ($type == 'branding') { ?>

	<?php include_once('inc/branding-single.php'); ?>
		
<?php } else { ?>

<section class="main">

	<div class="container">
		
		<div class="row">
			
			<div class="col-lg-12">
				
				<p>Nothing here...</p>
				
			</div>
			
		</div>
	
	</div>
	
</section>
				
<?php } ?>

<?php endwhile; else: ?>
	
<p>Page not found!</p>

<?php endif; ?>
<?php wp_reset_query(); ?>

<?php get_footer(); ?>