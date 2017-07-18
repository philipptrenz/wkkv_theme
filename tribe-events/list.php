

<section class="container front-page">
<div class="main-wrap front-page-element"  role="main">

  <!--Logo-->
	<div class="row"  data-equalizer>
		<div class="large-offset-1 large-6 medium-7 hide-for-small-only column" data-equalizer-watch>
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/wkkv/logo_white_pur.svg" style="width: 100%;">
		</div>

		<div class="large-6 medium-7 small-14 column end" data-equalizer-watch>
			<div class="logo-text-wrapper">
				<img class="logo-text" src="<?php echo get_template_directory_uri(); ?>/assets/images/wkkv/logo_white_text_pur.svg" style="width: 100%;">
			</div>
		</div>
	</div>
</section>

<div class="offer-wrap front-page-element" role="main">

  <div class="row ">
		<!-- Headline KALENDAR -->
		<div class="large-1 medium-2 small-14 columns">
      <h1 class="sideways">KALENDER<pre></pre></h1>
  	</div>
		<!-- VERANSTATLUNGEN gelistet -->
    <div class="small-14 large-13 medium-12   columns end">
			<div class="row small-up-12 collapse">
				 <?php tribe_get_template_part( 'list/content' ); ?>
				<div class="tribe-clear"></div>
	   	</div>
    </div>
	</div>

</div>
<?php

get_footer();
