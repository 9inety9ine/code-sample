<?php $screens = get_field('screens'); ?>				
<?php $description = get_field('description'); ?>
<?php $tools = get_field('tools'); ?>
<?php $link = get_field('live_site'); ?>
<?php $cols = get_field('columns'); ?>

<section class="page-title jarallax">
	<div class="container">		
		<div class="row">			
			<div class="col-lg-12">				
				<h2>UI/UX &amp; Interface</h2>				
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
				
				<?php if ($cols == "two") { ?>
				
					<?php if( $screens ): ?>
					<div class="row screens">
						<?php foreach( $screens as $screen ): ?>
							<div class="col-md-6 col-6">
								<a href="<?php echo esc_url($screen['url']); ?>" data-fancybox="gallery">
									 <img src="<?php echo esc_url($screen['sizes']['large']); ?>" alt="" />
								</a>
							</div>
						<?php endforeach; ?>
					</div>
					<?php endif; ?>  
				
				<?php } ?>
				
				<?php if ($cols == "three") { ?>
				
					<?php if( $screens ): ?>
					<div class="row screens">
						<?php foreach( $screens as $screen ): ?>
							<div class="col-md-4 col-sm-4 col-6">
								<a href="<?php echo esc_url($screen['url']); ?>" data-fancybox="gallery">
									 <img src="<?php echo esc_url($screen['sizes']['large']); ?>" alt="" />
								</a>
							</div>
						<?php endforeach; ?>
					</div>
					<?php endif; ?>  
				
				<?php } ?>
				
				<?php if ($cols == "four") { ?>
				
					<?php if( $screens ): ?>
					<div class="row screens">
						<?php foreach( $screens as $screen ): ?>
							<div class="col-md-3 col-sm-4 col-6">
								<a href="<?php echo esc_url($screen['url']); ?>" data-fancybox="gallery">
									 <img src="<?php echo esc_url($screen['sizes']['large']); ?>" alt="" />
								</a>
							</div>
						<?php endforeach; ?>
					</div>
					<?php endif; ?>  
				
				<?php } ?>



			</div>
		</div>	
	</div>	
</section>