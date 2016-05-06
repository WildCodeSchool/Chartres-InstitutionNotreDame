<?php
/*
Template Name: Content
*/
?>

<?php get_header(); ?>

<div class="col-md-12">
    <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 1,
            'category_name' => get_the_title().'-carousel-main',
        );

        $my_query = new WP_Query($args);

        if($my_query->have_posts()) :
    ?>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">

        <?php
            while ($my_query->have_posts() ) : $my_query->the_post();
        ?> 

            <div class="item active main-carousel">
                <?php the_content(); ?>
            </div>
        
        <?php
            endwhile;
            wp_reset_postdata();
        ?>

        <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 9,
                'category_name' => get_the_title().'-carousel-item',
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
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span aria-hidden="true"></span>
            <span class="sr-only">Précéent</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span aria-hidden="true"></span>
            <span class="sr-only">Suivant</span>
        </a>
    </div>
    <?php endif;?>
</div>
<?php

    $args1 = array(
        'post_type' => 'post',
        'posts_per_page' => 1,
        'category_name' => get_the_title_mod().'-evenements',
    );

    $args2 = array(
        'post_type' => 'post',
        'posts_per_page' => 1,
        'category_name' => get_the_title_mod().'-directeur',
    );

    $args3 = array(
        'post_type' => 'post',
        'posts_per_page' => 1,
        'category_name' => get_the_title_mod().'-directeur-image',
    );

    $my_query1 = new WP_Query($args1);
    $my_query2 = new WP_Query($args2);
    $my_query3 = new WP_Query($args3);

    if($my_query1->have_posts() && $my_query2->have_posts()) :
?>
    <div class="col-md-6 global-div">
        <div class="col-md-12 global-title">
            <h3>EVENEMENTS</h3>
        </div>

<?php elseif ($my_query1->have_posts() && !$my_query2->have_posts() ) :
?>
    <div class="col-md-12 global-large-div">
        <div class="col-md-12 global-title">
            <h3>EVENEMENTS</h3>
        </div>
<?php 
    while ($my_query1->have_posts() ) : $my_query1->the_post();
?> 
    <div class="col-md-12 main-top">
        <?php the_content(); ?>
    </div>
<?php endwhile;?>
</div>
<?php
    endif;
    wp_reset_postdata();

    if($my_query2->have_posts() && $my_query1->have_posts()) :
?>
    <div class="col-md-6 global-div">
        <div class="col-md-12 global-title">
            <h3>LE MOT DU DIRECTEUR</h3>
        </div>
        <?php 
            while ($my_query3->have_posts() ) : $my_query3->the_post();
        ?>
        <div class="col-md-12 director-img">
            <?php the_content(); ?>
        </div>
        <?php endwhile;?>

<?php elseif ($my_query2->have_posts() && !$my_query1->have_posts() ) :
?>
    <div class="col-md-12 global-large-div">
        <div class="col-md-12 global-title">
            <h3>LE MOT DU DIRECTEUR</h3>
        </div>
        <?php 
            while ($my_query3->have_posts() ) : $my_query3->the_post();
        ?>
        <div class="col-md-3 director-img">
            <?php the_content(); ?>
        </div>
        <?php endwhile;?>
<?php 
    while ($my_query2->have_posts() ) : $my_query2->the_post();
?> 
    <div class="col-md-9 main-top">
        <?php the_content(); ?>
    </div>
<?php endwhile;?>
</div>
<?php
    endif;
    wp_reset_postdata();
?>

<div class="col-md-12 main-offset">
</div>

<?php
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 2,
        'category_name' => get_the_title_mod().'-actu-main',
    );

    $my_query = new WP_Query($args);

    if($my_query->have_posts()) : 
?>
<div class="col-md-12 global-large-div">
    <div class="col-md-12 global-title">
        <h3>ACTUALITES</h3>
    </div>
    <div class="col-md-6">
<?php 
    while ($my_query->have_posts() ) : $my_query->the_post();
?> 
        <div class="col-md-6 main-actu">
            <img src="<?php the_post_thumbnail_url(); ?>">
            <h4><?php the_title() ;?></h4>
            <p><?php the_excerpt();?></p>
        </div>
<?php
    endwhile;
?>
    </div>
<?php
    endif;
    wp_reset_postdata();
?>

<?php
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 4,
        'category_name' => get_the_title_mod().'-actu-line',
    );

    $my_query = new WP_Query($args);

    if($my_query->have_posts()) : 
?>
    <div class="col-md-6">
<?php 
    while ($my_query->have_posts() ) : $my_query->the_post();
?> 
        <div class="col-md-12 line-actu">
            <h3><?php the_title(); ?></h3>
            <?php the_content(); ?>
        </div>
<?php
    endwhile;
?>
    </div>
</div>
<?php
    endif;
    wp_reset_postdata();
?>

<?php
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 1,
        'category_name' => get_the_title().'-content',
    );

    $my_query = new WP_Query($args);

    if($my_query->have_posts()) : while ($my_query->have_posts() ) : $my_query->the_post();
?> 

    <div class="col-md-12 main-offset">
    </div>
    <div class="template-content col-md-10 col-md-offset-1">
        <div class="template_contenu_description"> 
        <?php the_content(); ?>
        </div>
    </div>

<?php
    endwhile;
    endif;
    wp_reset_postdata();
?>

<div class="col-md-12 main-offset">
</div>

<div class="col-md-12 global-large-div">
    <div class="col-md-12 global-title">
        <h3>MEDIA</h3>
    </div>
    <div class="col-md-4">
        <h4>Vidéo</h4>
        <iframe height="300" width="350" src="https://www.youtube.com/embed/videoseries?list=UUr2_AMouXAv838HHARFw93g" frameborder="0" allowfullscreen></iframe> 
    </div>
    <div class="col-md-4">
        <h4>Facebook</h4>
        <div class="fb-page" data-href="https://www.facebook.com/indchartres" data-tabs="timeline" data-width="350" data-height="300" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/indchartres"><a href="https://www.facebook.com/indchartres"></a></blockquote></div></div>
    </div>
    <div class="col-md-4">
        <h4>Twitter</h4>
         <a class="twitter-timeline"  href="https://twitter.com/IndChartres" data-widget-id="716977401792700416">Tweets de @IndChartres</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    </div>
</div>

<?php get_footer(); ?>