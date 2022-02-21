<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php if (is_page(2)) { ?>Portfolio - Alex Crickmay<?php } else { ?><?php wp_title(''); ?><?php } ?>
	</title>	
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.png" type="image/x-icon"/>
	<?php wp_head(); ?>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" media="all" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>">
</head>

<body <?php body_class(); ?> data-spy="scroll" data-target="#menu-main-menu">
		
<header class="main">

	<div class="container">
		
		<div class="row">
		
			<div class="col-md-4 col-8"><a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('name'); ?>" class="logo"><h1>AC</h1></a></div>
			<div class="col-md-8 col-4">
				
				<nav class="main navbar" id="nav-main" role="navigation">
				<?php if (is_single()) { ?>
				
				<ul>
					<li>
						<a href="<?php bloginfo('url'); ?>/">&larr; Back</a>
					</li>
				</ul>
				
				<?php } else { ?>
				<div class="nav-desktop"><?php wp_nav_menu(array('menu' => 'Main Menu')); ?></div>
				<div class="toggle"><img src="<?php bloginfo('template_directory'); ?>/img/icon-burger.svg" alt=""></div>
				<?php } ?>
				</nav>
				
			</div>
		
		</div>
		
	</div>
	
	<div class="nav-mobile"><?php wp_nav_menu(array('menu' => 'Main Menu')); ?></div>

</header>