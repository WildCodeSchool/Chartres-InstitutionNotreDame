<?php
/*
Template Name: template1
*/
?>

<?php get_header(); ?>

<div class="col-md-12">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">

        <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 1,
                'category_name' => get_the_title().'-Carousel-Active',
            );

            $my_query = new WP_Query($args);

            if($my_query->have_posts()) : while ($my_query->have_posts() ) : $my_query->the_post();
        
        ?> 

        <div class="item active main-carousel">
            <?php the_content(); ?>
        </div>
        
        <?php
            endwhile;
            endif;
            wp_reset_postdata();
        ?>

        <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 2,
                'category_name' => get_the_title().'-Carousel',
            );

            $my_query = new WP_Query($args);

            if($my_query->have_posts()) : while ($my_query->have_posts() ) : $my_query->the_post();
        
        ?> 

        <div class="item main-carousel">
            <?php the_content(); ?>
        </div>
        
        <?php
            endwhile;
            endif;
            wp_reset_postdata();
        ?>

      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
</div>

<div class="col-md-6 global-div">
	<div class="col-md-12 global-title">
		<h3>EVENEMENTS</h3>
	</div>
    <?php

        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 1,
            'category_name' => get_the_title().'-Evénements',
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
		<h3>LE MOT DU DIRECTEUR</h3>
	</div>
    <?php

        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 1,
            'category_name' => get_the_title().'-Directeur',
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
	<div class="col-md-6">
	    <?php

            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 2,
                'category_name' => get_the_title().'-Actualités-Principales',
            );

            $my_query = new WP_Query($args);

            if($my_query->have_posts()) : while ($my_query->have_posts() ) : $my_query->the_post();
        
        ?> 

        <div class="col-md-6 main-actu">
            <?php the_content(); ?>
        </div>

        <?php
            endwhile;
            endif;
            wp_reset_postdata();
        ?>
	</div>
	<div class="col-md-6">
		<?php

            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 4,
                'category_name' => get_the_title().'-Actualités-Lignes',
            );

            $my_query = new WP_Query($args);

            if($my_query->have_posts()) : while ($my_query->have_posts() ) : $my_query->the_post();
        
        ?> 

        <div class="col-md-12 line-actu">
        	<h3><?php the_title(); ?></h3>
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
		<h3>PROJET INTERNATIONAL</h3>
	</div>
    <div class="col-md-12 national-texte">
        <h4>L’Institution Notre Dame est résolument engagée sur un projet International. En quoi consiste-t-il ?</h4>
    </div>
	<div class="col-md-3 col-md-offset-1 national-texte">
        <img src="<?php echo get_template_directory_uri(); ?>/img/monde.png" class="img-responsive">
    </div>
    <div class="col-md-6 national-texte-right">
    </div>
</div>

<div class="col-md-12 main-offset">
</div>

<div class="col-md-12 global-large-div">
	<div class="col-md-12 global-title">
		<h3>MEDIA</h3>
	</div>
    <div class="col-md-4">
        <h4>Vidéo</h4>
    </div>
    <div class="col-md-4">
        <h4>Facebook</h4>
    </div>
    <div class="col-md-4">
        <h4>Twitter</h4>
    </div>
</div>

<?php get_footer(); ?>