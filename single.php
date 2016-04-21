<!-- Template article seul -->
<?php get_header(); ?>
<div class="col-md-12">
<?php if(have_posts()) : while (have_posts()) : the_post();?>
	<div id="article-seul">
		<div class="prewNext">
			<div class="article-prew"><?php previous_post_link(); ?></div>
			<div class="article-next"><?php next_post_link(); ?></div>
		</div>
		<h2 id="single-h2"><?php the_title(); ?></h2>
		<p id="single-p">
		<?php the_content(); ?>
		<em class="pull-right">Publié le : <?php the_time('j F Y'); ?></em>
		</p>
		<p id="single-author">Les article de : <?php the_author_posts_link(); ?></p>
	</div>
	<?php endwhile; ?>
	<?php endif; ?>
<?php get_footer(); ?>
</div>