<?php
/**
 * The template for displaying search results pages.
 *
 * @package eightphoto
 */

get_header(); ?>
<div class="container">

	<header class="page-header">
		<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'eightphoto' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
	</header><!-- .page-header -->
	<div class="foto-container">
		<section id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				<?php if ( have_posts() ) : ?>

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php
					/**
					 * Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called content-search.php and that will be used instead.
					 */
					get_template_part( 'template-parts/content', 'search' );
					?>

				<?php endwhile; ?>

				<?php the_posts_navigation(); ?>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->
	<?php get_sidebar('eightphoto-right-sidebar'); ?>
</div>
</div>
<?php get_footer();