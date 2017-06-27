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

  <!--Logo-->
	<div class="row" data-equalizer>
		<div class="large-offset-1 large-6 medium-7 hide-for-small-only column" data-equalizer-watch>
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/wkkv/logo_white_pur.svg" style="width: 100%;">
		</div>

		<div class="large-6 medium-7 small-14 column end logo-text-bottom" data-equalizer-watch>
			<img class="" src="<?php echo get_template_directory_uri(); ?>/assets/images/wkkv/logo_white_text_pur.svg" style="width: 100%;">
		</div>

		<div class="large-offset-7 large-6 medium-offset-7 medium-7 small-14 end columns">
			<article class="main-content">
			<?php if ( have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
						
					<div id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry'); ?>>
						<div class="entry-content">
							<?php the_content( __( 'Continue reading...', 'foundationpress' ) ); ?>
						</div>
					</div>

					<?php break; ?>
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

</div>

</section>

<!--<?php include 'help.php';?>-->

<!--Calendar-->
<div class="calendar-wrap" role="main">

  <div class="row">
    <div class="large-1 medium-1 small-14 column">
      <h1 class="sideways">TERMINE</h1>
    </div>

    <div class="large-13 medium-13 small-14 column">

	    <div class="events-border">
	      <div class="orbit" role="region" data-orbit>

				<?php get_sidebar(); ?>


				<script>
				var containers = document.getElementsByClassName('tribe-list-widget');
					for (var i = 0; i < containers.length; i++) {
						containers[i].classList.add("orbit-container");
					}

					var elements = document.getElementsByClassName('tribe-events-first');
					for (var i = 0; i < elements.length; i++) {
						elements[i].classList.add("orbit-slide");
					}
				</script>
				<style>
				.sidebar {
					width: 100%;

				}
				.sidebar h6 {
					display: none;
				}

				.sidebar li {
					height: 200px;
					/*background: grey;*/
				}
				.tribe-events-widget-link {
					display: none;
				}
				</style>


				<nav class="orbit-bullets">
					<button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
					<button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
					<button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
					<button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
				</nav>
			</div> 
		</div>
    </div>
    
  </div>
</div>

<!--Offer-->
<div class="offer-wrap" role="main">

  <div class="row collapse">
    <div class="large-1 medium-1 small-14 columns">
      <h1 class="sideways">ANGEBOT</h1>
    </div>

    <div class="show-for-medium large-4 medium-6 small-14 columns end">
      <div class="boxColor"></div>
    </div>
    <div class="large-4 medium-6 small-14 columns end">
      <div class="boxLink">Ueberschrift</div>
    </div>
   </div>


  <div class="row collapse">
    <div class="large-offset-1 large-4 medium-offset-1 medium-6 small-14 columns end">
      <div class="boxLink">Ueberschrift</div>
    </div>
    <div class="show-for-medium large-4 medium-6 small-14 column end">
      <div class="boxColor"></div>
    </div>
  </div>

  <div class="row collapse">
    <div class="large-offset-1 medium-offset-1 show-for-medium large-4 medium-6 small-14 column end">
      <div class="boxColor"></div>
    </div>
    <div class="large-4  medium-6 small-14 columns end">
      <div class="boxLink">Ueberschrift</div>
    </div>
    <div class="show-for-medium large-offset-0 large-4 medium-offset-7 medium-6 small-14 column end">
      <div class="boxColor"></div>
    </div>
  </div>
  <div class="row collapse">
    <div class="large-offset-9 large-4 medium-offset-7 medium-6 small-14 columns end">
      <div class="boxLink">Ueberschrift</div>
    </div>
  </div>
</div>

<div class="map-wrap" role="main">

	<div class="row ">
		<div class="large-1 medium-1 small-14 columns">
			<h1 class="sideways">Karte</h1>
		</div>

		<div class="large-13 medium-13 small-14 columns end" id="fancy-map-widget">
			
			<?php get_sidebar( 'map-widget' ); ?>

		</div>
	</div>

</div>


<?php get_footer();
