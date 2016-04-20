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

<div class="col-md-6 global-div">
	<div class="col-md-12 global-title">
		<h3>L'ÉTABLISSEMENT</h3>
	</div>
    <?php

        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 1,
            'category_name' => get_the_title_mod().'-l-etablissement',
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

<div class="col-md-6 global-div">
	<div class="col-md-12 global-title">
		<h3>L'ÉCOLE</h3>
	</div>
    <?php

        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 1,
            'category_name' => get_the_title_mod().'-l-ecole',
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

<div class="col-md-12 main-offset">
</div>

<div class="col-md-12 global-large-div">
	<div class="col-md-12 global-title">
		<h3>Classes</h3>
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

<div class="col-md-12 main-offset">
</div>

<div class="col-md-12 global-large-div">
	<div class="col-md-12 global-title">
		<h3>ACTUALITES</h3>
	</div>
	<div class="col-md-12">
	    <?php

            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 4,
                'category_name' => get_the_title_mod().'-actualites',
            );
            echo get_the_title_mod().'-actualites';
            $my_query = new WP_Query($args);

            if($my_query->have_posts()) : while ($my_query->have_posts() ) : $my_query->the_post();
        
        ?> 

        <div class="col-md-3 main-actu">
            <?php the_content(); ?>
        </div>

        <?php
            endwhile;
            endif;
            wp_reset_postdata();
        ?>
	</div>
</div>

<div class="col-md-12 main-offset">
</div>

<div class="col-md-12 global-large-div">
	<div class="col-md-12 global-title">
		<h3>MEDIA</h3>
	</div>
</div>

<?php get_footer(); ?>