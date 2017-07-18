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

<div  id="frontpagecontent">
<div class="main-wrap front-page-element" role="main">

  <!--Logo-->
	<div class="row" id="logocontent" data-equalizer>
		<div class="large-offset-1 large-6 medium-7 hide-for-small-only column" id="logo" data-equalizer-watch>
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/wkkv/logo_white_pur.svg" style="width: 100%;">
		</div>
		<div id="outer" class="large-6 medium-7 small-14 columns end">
		<div id="parallax" >
			<div>
				<div class="logo-text-wrapper">
					<img class="logo-text" src="<?php echo get_template_directory_uri(); ?>/assets/images/wkkv/logo_white_text_pur.svg" style="width: 100%;">
				</div>
			</div>

			<div>
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
	</div>

</div>
</div>

</section>

<!--<?php include 'help.php';?>-->

<?php do_action( 'foundationpress_before_footer' ); ?>

<?php get_sidebar( 'calendar-widget' ); ?>

<?php do_action( 'foundationpress_after_footer' ); ?>

<!-- Offer -->
<div class="offer-wrap front-page-element" role="main">

  <div class="row ">
    <div class="large-1 medium-1 small-14 columns">
      <h1 class="sideways">ANGEBOT</h1>
    </div>

    <div class="arge-13 medium-13 small-14 columns end">
      
    <!-- inner grid -->

		<div class="row small-up-12 collapse">
		    <div class="show-for-medium large-4 medium-6 small-14 columns end">
		      <div class="grid-img grid-img-1">
				<div class="boxColor-blue">
				</div>
			  </div>
		    </div>
		    <div class="large-4 medium-6 small-14 columns end">
		      <a href="#">
				<div class="boxLink-blue"></div>
			  </a>
		    </div>
	   </div>


	  <div class="row small-up-12 collapse">
		    <div class="large-4 medium-6 small-14 columns end">
		      <a href="#">
				<div class="boxLink-yellow"></div>
			  </a>
		    </div>
		    <div class="show-for-medium large-4 medium-6 small-14 column end">
		      <div class="grid-img grid-img-2">
				<div class="boxColor-yellow">
				</div>
			  </div>
		    </div>
	  </div>

	  <div class="row small-up-12 collapse">
		    <div class=" show-for-medium large-4 medium-6 small-14 column end">
		      <div class="grid-img grid-img-3">
				<div class="boxColor-red">
				</div>
			  </div>
		    </div>
		    <div class="large-4 medium-6 small-14 columns end">
		      <a href="#">
				<div class="boxLink-red"></div>
			  </a>
		    </div>
		    <div class="show-for-medium-only large-4 medium-6 small-14 columns end" id="last-offer-content-for-medium">
		       <a href="#">
				<div class="boxLink-grey"></div>
			  </a>
		    </div>
		    <div class="show-for-medium large-offset-0 large-4 medium-6 small-14 column end">
		      <div class="grid-img grid-img-4">
				<div class="boxColor-grey">
				</div>
			  </div>
		    </div>
	  </div>


	  <div class="row small-up-12 collapse">
		    <div class="hide-for-medium-only large-offset-8 large-4 medium-offset-6 medium-6 small-14 columns end" id="last-offer-content-for-not-medium">
		    	<!-- Content gets copied from #last-offer-content-for-medium, do not edit here -->
		    	<script type="text/javascript">
		    		$(document).ready(function() {
		    			var firstDivContent = document.getElementById('last-offer-content-for-medium');
						var secondDivContent = document.getElementById('last-offer-content-for-not-medium');
						secondDivContent.innerHTML = firstDivContent.innerHTML;
		    		});
				</script>
		    </div>
	  </div>

    <!-- inner grid end -->


    </div>
    
</div>

</div>

<div class="map-wrap front-page-element" role="main">

	<div class="row">
		<div class="large-1 medium-1 small-14 columns">
			<h1 class="sideways">Karte</h1>
		</div>

		<div class="large-13 medium-13 small-14 columns end">
			
			<?php dynamic_sidebar( 'map-widget' ); ?>

		</div>
	</div>

</div>


<?php get_footer();
