<?php
/*
Template Name: contenu
*/
?>


<?php get_header(); ?>

<div class="template_contenu">
    
    <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 1,
            'category_name' => get_the_title().'-description',
        );

        $my_query = new WP_Query($args);

        if($my_query->have_posts()) : while ($my_query->have_posts() ) : $my_query->the_post();
    ?> 

        <h3><?php the_title(); ?></h3>
        <div class="template_contenu_description"> 
        <?php the_content(); ?>
        </div>

    <?php
        endwhile;
        endif;
        wp_reset_postdata();
    ?>

</div>

<?php get_footer(); ?>