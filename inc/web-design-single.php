<?php $imageid = get_field('full_size'); ?>
<?php $preview = wp_get_attachment_image_src($imageid, 'full'); ?>				
<?php $description = get_field('description'); ?>
<?php $tools = get_field('tools'); ?>
<?php $link = get_field('live_site'); ?>

<section class="page-title jarallax">
	<div class="container">		
		<div class="row">			
			<div class="col-lg-12">				
				<h2>Web Design &amp; Development</h2>				
			</div>
		</div>	
	</div>
</section>
<section class="main">
	<div class="container">			
		<div class="row">
			<div class="col-lg-3">
				
				<article>
					
					<h3><?php the_title(); ?></h3>
					<?php if ($description) { ?>
					<p><?php echo $description; ?></p>
					<?php } ?>
					<?php if($tools): ?>                    
					<h4>Tools</h4>
					<ul class="tools">
					<?php foreach( $tools as $tool ): ?>
						<li class="type-<?php echo $tool['value']; ?>"><?php echo $tool['label']; ?></li>
					<?php endforeach; ?>
					</ul>                    
					<?php endif; ?>					
					<?php if ($link) { ?>
					<h4>Live Site</h4>
					<p><a href="//<?php echo $link; ?>" target="_blank" rel="nofollow">Open in New Window &rarr;</a></p>
					<?php } else { ?>
					<h4>Live Site</h4>
					<p>Unavailable.</p>
					<?php } ?>

				</article>
				
			</div>
			<div class="col-lg-9">

				<?php if ($preview) { ?>
				<a href="<?php echo $preview[0]; ?>" class="full" data-fancybox><img src="<?php echo $preview[0]; ?>" alt="" /></a>
				<?php } else { ?>
				<img src="<?php bloginfo('template_directory'); ?>/img/website-placeholder.png" alt="" />
				<?php } ?>

			</div>
		</div>	
	</div>	
</section>