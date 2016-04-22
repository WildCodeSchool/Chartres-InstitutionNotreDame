<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Institution Notre Dame</title>
		<link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700" type="text/css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">

		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/script/jquery.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/script/bootstrap.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/script/script.js"></script>
	</head>
	<body>
		<!--HEADER -->
		<div class="col-md-12 menu-top container__header">
			<header class="header">
				<div class="row">
					<div class="header-logo col-lg-2 col-md-2 col-sm-2 col-xs-3">
						<a href="index.php">
							<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/logo-tr2.png" alt="logo du site institution notre dame">
						</a>
					</div>
					<div class="header-title col-lg-6 col-md-6 col-sm-10 col-xs-9">
						<h1>Institution Notre Dame</h1>
						<h2>Saint Ferdinand</h2>
					</div>
					<div class="projet-inter col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="container-globe">
							<div class="globe">
				   				 <div class="map"></div>
				 			 </div>	
				 			 <span class="slogan">Sapere aude !</span>
							</div>
						</div>
				</div>
			</header>
		</div>
		<!-- END HEADER -->
		<div class="col-md-12 menu-nav">
			<div class="col-md-1 menu-nav-part">
				<a href="<?php echo get_home_url(); ?>/index.php"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-accueil.png"></a>
			</div>
			<div class="col-md-1 menu-nav-part">
				
			</div>
			<div class="col-md-1 menu-nav-part" id="menu1">
				<h4>École</h4>
			</div>
			<div class="col-md-1 menu-nav-part" id="menu3">
				<h4>Collège</h4>
			</div>
			<div class="col-md-1 menu-nav-part" id="menu2">
				<h4>Lycées</h4>
			</div>
			<div class="col-md-1 menu-nav-part" id="menu4">
				<h4>ESCC</h4>
			</div>
			<div class="col-md-1 menu-nav-part">
				<a href="https://sites.google.com/site/apelsaintbenoitv2/"><h4>Apel</h4></a>
			</div>
			<div class="col-md-1 menu-nav-part pronote">
				<a href="https://0280665w.index-education.net/pronote/"><h4>Pronote</h4></a>
			</div>
			<div class="col-md-1 menu-nav-part">
				<h4>Contact</h4>
			</div>
			<div class="col-md-1 menu-nav-part" id="menu0"></div>
			<div class="col-md-2">
			<?php get_search_form(); ?>
			</div>
		</div>

		<div class="col-md-12 menu-content" id="dropdown1">
			<div class="col-md-3 menu-left">
				<?php wp_nav_menu( array(
				'theme_location' => 'ecole-menu-1',
				'container' => false,
				'menu_class' => 'inner-menu'
				)); ?>
			</div>
			<div class="col-md-3 menu-left">
				<?php wp_nav_menu( array(
				'theme_location' => 'ecole-menu-2',
				'container' => false,
				'menu_class' => 'inner-menu'
				)); ?>
			</div>
			<div class="col-md-3 menu-left">
				<?php wp_nav_menu( array(
				'theme_location' => 'ecole-menu-3',
				'container' => false,
				'menu_class' => 'inner-menu' 
				)); ?>
			</div>
			<div class="col-md-3 menu-right">
				<?php

			        $args = array(
			            'post_type' => 'post',
			            'posts_per_page' => 1,
			            'category_name' => 'ecole-directeur',
			        );

			        $my_query = new WP_Query($args);

			        if($my_query->have_posts()) : while ($my_query->have_posts() ) : $my_query->the_post();
			    
			    ?> 

			    <div class="col-md-12 main-top">
			        <?php the_content(); ?>
			    </div>

			    <?php
			        endwhile;
			        endif;
			        wp_reset_postdata();
			    ?>
			</div>
		</div>

		<div class="col-md-12 menu-content" id="dropdown2">
			<div class="col-md-2 menu-left">
				<?php wp_nav_menu( array(
				'theme_location' => 'college-menu-1',
				'container' => false,
				'menu_class' => 'inner-menu'
				)); ?>
			</div>
			<div class="col-md-2 menu-left">
				<?php wp_nav_menu( array(
				'theme_location' => 'college-menu-2',
				'container' => false,
				'menu_class' => 'inner-menu'
				)); ?>
			</div>
			<div class="col-md-2 menu-left">
				<?php wp_nav_menu( array(
				'theme_location' => 'college-menu-3',
				'container' => false,
				'menu_class' => 'inner-menu' 
				)); ?>
			</div>
			<div class="col-md-6 menu-right">
				<?php

			        $args = array(
			            'post_type' => 'post',
			            'posts_per_page' => 1,
			            'category_name' => 'college-directeur',
			        );

			        $my_query = new WP_Query($args);

			        if($my_query->have_posts()) : while ($my_query->have_posts() ) : $my_query->the_post();
			    
			    ?> 

			    <div class="col-md-12 main-top">
			        <?php the_content(); ?>
			    </div>

			    <?php
			        endwhile;
			        endif;
			        wp_reset_postdata();
			    ?>
			</div>
		</div>

		<div class="col-md-12 menu-content" id="dropdown3">
			<div class="col-md-2 menu-left">
				<?php wp_nav_menu( array(
				'theme_location' => 'lycee-menu-1',
				'container' => false,
				'menu_class' => 'inner-menu'
				)); ?>
			</div>
			<div class="col-md-2 menu-left">
				<?php wp_nav_menu( array(
				'theme_location' => 'lycee-menu-2',
				'container' => false,
				'menu_class' => 'inner-menu'
				)); ?>
			</div>
			<div class="col-md-2 menu-left">
				<?php wp_nav_menu( array(
				'theme_location' => 'lycee-menu-3',
				'container' => false,
				'menu_class' => 'inner-menu' 
				)); ?>
			</div>
			<div class="col-md-3 menu-right">
				<?php

			        $args = array(
			            'post_type' => 'post',
			            'posts_per_page' => 1,
			            'category_name' => 'lycee-directeur-1',
			        );

			        $my_query = new WP_Query($args);

			        if($my_query->have_posts()) : while ($my_query->have_posts() ) : $my_query->the_post();
			    
			    ?> 

			    <div class="col-md-12 main-top">
			        <?php the_content(); ?>
			    </div>

			    <?php
			        endwhile;
			        endif;
			        wp_reset_postdata();
			    ?>
			</div>
			<div class="col-md-3 menu-right">
				<?php

			        $args = array(
			            'post_type' => 'post',
			            'posts_per_page' => 1,
			            'category_name' => 'lycee-directeur-2',
			        );

			        $my_query = new WP_Query($args);

			        if($my_query->have_posts()) : while ($my_query->have_posts() ) : $my_query->the_post();
			    
			    ?> 

			    <div class="col-md-12 main-top">
			        <?php the_content(); ?>
			    </div>

			    <?php
			        endwhile;
			        endif;
			        wp_reset_postdata();
			    ?>
			</div>
		</div>

		<div class="col-md-12 menu-content" id="dropdown4">
			<div class="col-md-3 menu-left">
				<?php wp_nav_menu( array(
				'theme_location' => 'escc-menu-1',
				'container' => false,
				'menu_class' => 'inner-menu'
				)); ?>
			</div>
			<div class="col-md-3 menu-left">
				<?php wp_nav_menu( array(
				'theme_location' => 'escc-menu-2',
				'container' => false,
				'menu_class' => 'inner-menu'
				)); ?>
			</div>
			<div class="col-md-6 menu-right">
				<?php

			        $args = array(
			            'post_type' => 'post',
			            'posts_per_page' => 1,
			            'category_name' => 'escc-directeur',
			        );

			        $my_query = new WP_Query($args);

			        if($my_query->have_posts()) : while ($my_query->have_posts() ) : $my_query->the_post();
			    
			    ?> 

			    <div class="col-md-12 main-top">
			        <?php the_content(); ?>
			    </div>

			    <?php
			        endwhile;
			        endif;
			        wp_reset_postdata();
			    ?>
			</div>
		</div>