<?php
/**
 * The front page template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>


<div class="main-wrap" role="main">

	<div class="row" style="padding-bottom: 50px;">
		<div class="large-1 columns" style="text-align: center; color: white;"><- col -></div>
		<div class="large-1 columns" style="text-align: center; color: white;"><- col -></div>
		<div class="large-1 columns" style="text-align: center; color: white;"><- col -></div>
		<div class="large-1 columns" style="text-align: center; color: white;"><- col -></div>
		<div class="large-1 columns" style="text-align: center; color: white;"><- col -></div>
		<div class="large-1 columns" style="text-align: center; color: white;"><- col -></div>
		<div class="large-1 columns" style="text-align: center; color: white;"><- col -></div>
		<div class="large-1 columns" style="text-align: center; color: white;"><- col -></div>
		<div class="large-1 columns" style="text-align: center; color: white;"><- col -></div>
		<div class="large-1 columns" style="text-align: center; color: white;"><- col -></div>
		<div class="large-1 columns" style="text-align: center; color: white;"><- col -></div>
		<div class="large-1 columns" style="text-align: center; color: white;"><- col -></div>
		<div class="large-1 columns" style="text-align: center; color: white;"><- col -></div>

	</div>

	<div class="row">
		<div class="large-offset-1 large-5 small-13 columns">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/wkkv/logo_white_pur.svg" style="width: 100%;">
		</div>

		<div class="large-offset-1 large-5 small-13 columns">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/wkkv/logo_white_pur.svg" style="width: 100%;">
		</div>

		<div class="large-1"></div>

	</div>

	<div class="row">

		<div class="large-offset-7 large-5 small-13 columns">
			<article class="main-content">
			<?php if ( have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
						

					<div id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry'); ?>>
						<!--<header>
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<?php foundationpress_entry_meta(); ?>
						</header>-->
						<div class="entry-content">
							<?php the_content( __( 'Continue reading...', 'foundationpress' ) ); ?>
						</div>


						<!--<footer>
							<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
						</footer>
						<hr />-->
					</div>



				<?php endwhile; ?>

				<?php else : ?>
					<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; // End have_posts() check. ?>

				<?php /* Display navigation to next/previous pages when applicable */ ?>
				<?php
				if ( function_exists( 'foundationpress_pagination' ) ) :
					foundationpress_pagination();
				elseif ( is_paged() ) :
				?>
					<nav id="post-nav">
						<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
						<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
					</nav>
				<?php endif; ?>

			</article>
		</div>

	</div>


	
	<!--<?php get_sidebar(); ?>-->

</div>

<?php get_footer();
