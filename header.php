<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name'); ?></title>
	<head>
	<?php wp_head(); ?>	

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
</head>
<body>
	<div id="header-wrapper">
		<div class="container">
			<header class="row">
				<h1 id="blog-title"><a href="<?php $url = home_url('/'); echo $url; ?>">	
				<?php bloginfo('name'); ?>
				</a></h1>
	    		<h2><?php bloginfo('description'); ?></h2>
			</header>
		</div>
			<div class="row" id="navigationmain">
				<?php 
					wp_nav_menu(array(
						'sort_column' => 'menu_order', 
						'container_class' => 'blank-menu-header'
					));
				?>
			</div>
	</div>	
	<div class="container"> <!-- Begin Container Div -->
