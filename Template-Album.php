<?php
/*
Template Name: Album
*/
?>
<?php get_header(); ?>

<div class="col-md-12 global-large-div">
	<div class="col-md-12 global-title">
		<h3>ALBUM</h3>
	</div>
    <div class="col-md-12 main-top">
    	<div class="galerie">
    <?php
        $args = array(
            'post_type' => 'post',
            'category_name' => get_the_title_mod().'-Album',
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

<?php get_footer(); ?>