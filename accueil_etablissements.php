<?php
/*
Template Name: Accueil établissement
*/
?>
<?php
/*
Template Name: template1
*/
?>

<?php get_header(); ?>

<div class="col-md-12 carousel">
<?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 1,
            'category_name' => get_the_title().'-bandeau',
        );

        $my_query = new WP_Query($args);

        if($my_query->have_posts()) : while ($my_query->have_posts() ) : $my_query->the_post();
    ?> 

        <div class="template_contenu_description"> 
        <?php the_content(); ?>
        </div>

    <?php
        endwhile;
        endif;
        wp_reset_postdata();
    ?>

</div>    
</div>

<!-- L'ETALISSEMENT ================================ -->
<div class="col-md-6 global-div">
	<div class="col-md-12 global-title">
		<h3>L'ÉTABLISSEMENT</h3>
	</div>
    <?php

        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 1,
            'category_name' => get_the_title_mod().'-letablissement',
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

<!-- L'ECOLE ================================ -->
<div class="col-md-6 global-div">
	<div class="col-md-12 global-title">
		<h3>L'ÉCOLE</h3>
	</div>
    <?php

        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 1,
            'category_name' => get_the_title_mod().'-lecole',
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

<!-- PROJET ================================ -->
<div class="col-md-12 main-offset">
</div>

<div class="col-md-12 global-large-div">
	<div class="col-md-12 global-title">
		<h3>PROJET</h3>
	</div>
    <?php

        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 1,
            'category_name' => get_the_title_mod().'-projet',
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

<!-- CLASSES ================================ -->
<div class="col-md-12 main-offset">
</div>

<div class="col-md-12 global-large-div">
	<div class="col-md-12 global-title">
		<h3>CLASSES</h3>
	</div>
    <?php

        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 1,
            'category_name' => get_the_title_mod().'-classes',
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

<!-- ACTUALITES ================================ -->
<div class="col-md-12 main-offset">
</div>

<div class="col-md-12 global-large-div">
	<div class="col-md-12 global-title">
		<h3>ACTUALITÉS</h3>
	</div>
	<div class="col-md-12">
	    <?php

            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 4,
                'category_name' => get_the_title_mod().'-actualites',
            );
            $my_query = new WP_Query($args);

            if($my_query->have_posts()) : while ($my_query->have_posts() ) : $my_query->the_post();
        
        ?> 

        <div class="col-md-3 main-actu">
        	<img src="<?php the_post_thumbnail_url(); ?>">
            <?php the_content(); ?>
        </div>

        <?php
            endwhile;
            endif;
            wp_reset_postdata();
        ?>
	</div>
</div>



<!-- ALBUM PHOTOS ================================ -->
<div class="col-md-12 main-offset">
</div>

<div class="col-md-12 global-large-div">
	<div class="col-md-12 global-title">
		<h3>ALBUM PHOTOS</h3>
	</div>
    <div class="col-md-12 main-top">
    	<div class="galerie">
    <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 12,
            'category_name' => 'album-'.get_the_title_mod().'-album',
        );
        $my_query = new WP_Query($args);
        if($my_query->have_posts()) : while ($my_query->have_posts() ) : $my_query->the_post();
    ?> 
    	<div class="col-md-3">
        	<?php the_content(); ?>
        </div>

    <?php
        endwhile;
        endif;
        wp_reset_postdata();
    ?>
    	</div>
    </div>
</div>


<!-- INFORMATIONS PRATIQUES ================================ -->
<div class="col-md-12 main-offset">
</div>

<div class="col-md-12 global-large-div">
	<div class="col-md-12 global-title">
		<h3>INFORMATIONS PRATIQUES</h3>
	</div>

	<?php wp_nav_menu( array(
	'theme_location' => get_the_title_mod().'-accueil-infos',
	'container' => false,
	'menu_class' => 'inner-menu'
	)); ?>
</div>

<?php get_footer(); ?>