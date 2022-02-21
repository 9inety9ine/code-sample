<?php $designs = get_field('designs'); ?>
<?php $imageid = get_field('full_size'); ?>
<?php $preview = wp_get_attachment_image_src($imageid, 'full'); ?>	
<?php $description = get_field('description'); ?>
<?php $tools = get_field('tools'); ?>

<section class="page-title jarallax">
	<div class="container">		
		<div class="row">			
			<div class="col-lg-12">				
				<h2>Branding &amp; Promotional</h2>				
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

				</article>
				
			</div>
			<div class="col-lg-9">
				
				<?php if ($preview) { ?>
				<a href="<?php echo $preview[0]; ?>" class="full final" data-fancybox>
					<?php if($designs): ?><h3>Final Design</h3><?php endif; ?> 
					<img src="<?php echo $preview[0]; ?>" alt="" />
				</a>
				<?php } else { ?>
				<img src="<?php bloginfo('template_directory'); ?>/img/website-placeholder.png" alt="" />
				<?php } ?>
				
				<?php if($designs): ?>
				<div class="row designs">
				
					<h4>Alternate Designs</h4>
					
					<?php foreach($designs as $design): ?>
						<div class="col-md-4">
							<a href="<?php echo esc_url($design['url']); ?>" data-fancybox="gallery">
								 <img src="<?php echo esc_url($design['sizes']['large']); ?>" alt="" />
							</a>
						</div>
					<?php endforeach; ?>
				</div>
				<?php endif; ?> 

			</div>
		</div>	
	</div>	
</section>