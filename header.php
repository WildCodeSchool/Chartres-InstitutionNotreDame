<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Institution Notre Dame</title>
		<link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700" type="text/css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">

		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
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
				<h4>ÉCOLE</h4>
			</div>
			<div class="col-md-1 menu-nav-part" id="menu3">
				<h4>COLLÈGE</h4>
			</div>
			<div class="col-md-1 menu-nav-part" id="menu2">
				<h4>LYCÉES</h4>
			</div>
			<div class="col-md-1 menu-nav-part" id="menu4">
				<h4>ESCC</h4>
			</div>
			<div class="col-md-1 menu-nav-part lien-apel">
				<a href="https://sites.google.com/site/apelsaintbenoitv2/"><h4>APEL</h4></a>
			</div>
			<div class="col-md-1 menu-nav-part pronote">
				<a href="https://0280665w.index-education.net/pronote/"><h4>PRONOTE</h4></a>
			</div>
			<div class="col-md-1 menu-nav-part" id="menu0"></div>
			<div class="col-md-1 menu-nav-part lien-apel">
				<a href="#ancre1"><h4>CONTACT</h4></a>
			</div>
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
			    	<div class="titre-directeur"><h4><?php the_title(); ?></h4></div>
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