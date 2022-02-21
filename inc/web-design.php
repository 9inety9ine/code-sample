<?php $newargs = array(
	'post_type'	  => 'project',
	'meta_key'	  => 'type',
	'meta_value'  => 'website',
    'order'       => 'asc'
	); ?>
<?php query_posts($newargs); ?>

<div class="row items">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
		<?php $imageid = get_field('preview'); ?>
		<?php $preview = wp_get_attachment_image_src($imageid, 'full'); ?>
		<?php $link = get_field('live_site'); ?>
	
	<div class="col-md-4 col-sm-6 col-6">
		<div class="item">
			<?php if ($preview) { ?>
			<a href="<?php the_permalink(); ?>">
				<?php if ($link) { ?><img src="<?php bloginfo('template_directory'); ?>/img/icon-live.svg" alt="" class="is-live"><?php } ?>
				<img src="<?php echo $preview[0]; ?>" alt="" /><p><?php the_title(); ?></p></a>
			<?php } else { ?>
			<img src="<?php bloginfo('template_directory'); ?>/img/website-placeholder.png" alt="" />
			<?php } ?>
		</div><!--/item-->
	</div><!--/col-->

	<?php endwhile; else: ?>
	
		<p>Nothing here..</p>
	
	<?php endif; ?>
	
</div><!--/row-->

<?php wp_reset_query(); ?>
