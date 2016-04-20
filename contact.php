<?php
/*
Template Name: Contact
*/
?>

<?php
get_header(); 
?>
<div class="template_contact">
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4"><?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			    <div class=""><h3><?php the_title(); ?></h3></div>
			    <?php the_content(); ?>
			    <?php endwhile; ?>
			    <?php endif; ?>
			</div>
			<div class="col-md-4"></div>
	    </div>
	</div>

	<div class=""><h3>Informations complémentaires</h3></div>
	<div class='row'>
		<div class="col-md-4">
			<?php
	            $args = array(
	                'post_type' => 'post',
	                'posts_per_page' => 1,
	                'category_name' => get_the_title_mod().'-contact-info-1',
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
		</div>
		<div class="col-md-4">
			<?php
	            $args = array(
	                'post_type' => 'post',
	                'posts_per_page' => 1,
	                'category_name' => get_the_title_mod().'-contact-info-2',
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
		</div>
		<div class="col-md-4">
			<?php
	            $args = array(
	                'post_type' => 'post',
	                'posts_per_page' => 1,
	                'category_name' => get_the_title_mod().'-contact-info-3',
	            );

	            $my_query = new WP_Query($args);

	            if($my_query->have_posts()) : while ($my_query->have_posts() ) : $my_query->the_post();
	        
	        ?> 

	        <div class="">
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
<?php
get_footer(); 
?>