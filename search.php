<!-- Template Formulaire de Recherche -->

<?php get_header(); ?>

<div class="search col-md-12">

	<div id="search" class="container-search">
		<h2 id="search-h2">Résultat de la recherche</h2>
			<?php if(have_posts()) : while (have_posts()) : the_post();?>
				<a id="search-title" href="<?php the_permalink(); ?>"><?php the_title();?></a>
				<p id="search-p"><?php the_excerpt();?><br><br><em class="pull-right">Publié le <?php the_time('j F Y'); ?> par <?php the_author(); ?></em><br></p>	
		<?php endwhile; ?>
		<?php endif; ?>
	</div>

</div>

<?php get_footer(); ?>