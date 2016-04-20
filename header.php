<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Institution Notre Dame</title>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/script/jquery.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/script/bootstrap.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/script/script.js"></script>
	</head>
	<body>
		<div class="col-md-12 menu-top">

		</div>

		<div class="col-md-12 menu-nav">
			<div class="col-md-2 menu-nav-part" id="menu1">
				<h4>Accueil</h4>
			</div>
			<div class="col-md-1 menu-nav-part" id="menu3">
				<h4>Collège</h4>
			</div>
			<div class="col-md-1 menu-nav-part" id="menu2">
				<h4>Lycées</h4>
			</div>
			<div class="col-md-2 menu-nav-part" id="menu4">
				<h4>ESCC Supérieur</h4>
			</div>
			<div class="col-md-1 menu-nav-part">
				<h4>Apel</h4>
			</div>
			<div class="col-md-1 menu-nav-part">
				<h4>Pronote</h4>
			</div>
			<div class="col-md-1 menu-nav-part">
				<h4>Contact</h4>
			</div>
			<div class="col-md-2">
			<form class="search_form"><?php get_search_form(); ?></form>
			</div>
		</div>

		<div class="col-md-12 menu-content" id="dropdown1">
			<div class="col-md-3 menu-left">
				<?php wp_nav_menu( array(
				'theme_location' => 'accueil-menu-1',
				'container' => false,
				'menu_class' => 'inner-menu'
				)); ?>
			</div>
			<div class="col-md-2 menu-left">
				<?php wp_nav_menu( array(
				'theme_location' => 'accueil-menu-2',
				'container' => false,
				'menu_class' => 'inner-menu'
				)); ?>
			</div>
			<div class="col-md-2 menu-left">
				<?php wp_nav_menu( array(
				'theme_location' => 'accueil-menu-3',
				'container' => false,
				'menu_class' => 'inner-menu' 
				)); ?>
			</div>
			<div class="col-md-5 menu-right">
			</div>
		</div>

		<div class="col-md-12 menu-content" id="dropdown2">
			</div>
			<div class="col-md-2 menu-left">
			</div>
			<div class="col-md-2 menu-left">
			</div>
			<div class="col-md-6 menu-right">
			</div>
		</div>

		<div class="col-md-12 menu-content" id="dropdown3">
			<div class="col-md-2 menu-left">
			</div>
			<div class="col-md-2 menu-left">
			</div>
			<div class="col-md-2 menu-left">
			</div>
			<div class="col-md-6 menu-right">
			</div>
		</div>

		<div class="col-md-12 menu-content" id="dropdown4">
			<div class="col-md-2 menu-left">
			</div>
			<div class="col-md-2 menu-left">
			</div>
			<div class="col-md-2 menu-left">
			</div>
			<div class="col-md-6 menu-right">
			</div>
		</div>