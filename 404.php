<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
get_header(); ?>

 <div class="main-wrap" role="main">
	<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
		<header>
			<img height="50px" src="<?php echo get_template_directory_uri(); ?>/assets/images/wkkv/katze_error.png"></img>
			<h1 class="entry-title"><?php _e( 'Ressource nicht gefunden', 'foundationpress' ); ?></h1>
		</header>
		<div class="entry-content">
			<!-- Katzenbild für Error !-->
			<div class="error">
				<p class="bottom"><?php _e( 'Leider konnte für die angefragte Seite kein Design (auf dem TrelloBoard) gefunden werden.', 'foundationpress' ); ?></p>
			</div>
			<p><?php _e( 'Versuche folgendes:', 'foundationpress' ); ?></p>
			<ul>
				<li><?php _e( 'Ueberpruefe Schreibfehler', 'foundationpress' ); ?></li>
				<li>
					<?php
						/* translators: %s: home page url */
						printf( __(
							'Zurueck zur <a href="%s">Startseite</a>', 'foundationpress' ),
							home_url()
						);
					?>
				</li>
				<li><?php _e( '<a href="javascript:history.back()">Hier</a> gelangst du zurueck zur vorherigen Seite.', 'foundationpress' ); ?></li>
			</ul>
		</div>
	</article>

 <?php get_sidebar(); ?>

</div>

<?php get_footer();