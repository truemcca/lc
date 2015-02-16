<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo(); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?> "/>
<meta http.equiv="content_type" content= <?php bloginfo('html_type'); ?> Chartset= <?php bloginfo('chartset'); ?> "><php? wp_head();?>
<script src="http://use.edgefonts.net/josefin-slab.js"></script>
	<script src="http://use.edgefonts.net/merriweather.js"></script>
</head>
	<body <php body_class( $class ) ; ?>>
		<header>
			<h1>Life Clinic Blog</h1>
			<nav>
				<?php wp_nav_menu( array( 'menu' => 'Main Nav') ); ?>
			</nav>
		</header>