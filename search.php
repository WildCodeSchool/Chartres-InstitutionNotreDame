<!-- Template Formulaire de Recherche -->

<?php get_header(); ?>
<div id="search" class="container-search">
	<h2>Résultat de la recherche</h2>
		<?php if(have_posts()) : while (have_posts()) : the_post();?>
			<a href="<?php the_permalink(); ?>"><?php the_title();?></a>
			<p>
			<?php the_content(); ?>
			</p>
			<em><?php the_date(); ?></em>
	<?php endwhile; ?>
	<?php endif; ?>
</div>
<?php get_footer(); ?>