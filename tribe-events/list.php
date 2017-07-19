

<section class="container front-page">


  <!--Logo-->
	<div class="row head"  >
		<div class="large-offset-1 large-6 medium-7 hide-for-small-only column" >
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/wkkv/logo_white_pur.svg" style="width: 100%;">
		</div>

		<div class="large-6 medium-7 small-14 column" >
			<div class="">
				<img class="" src="<?php echo get_template_directory_uri(); ?>/assets/images/wkkv/logo_white_text_pur.svg" style="width: 100%;">
			</div>
		</div>

</section>

<div class="offer-wrap front-page-element" role="main">

	<div class="row ">
		<!-- Headline KALENDAR -->
		<div class="small-14 show-for-small-only columns">
			<h1 class="sideways">KALENDER<pre></pre></h1>
		</div>
	</div>

<div class="row ">
	<div class="small-14 float-left">
	<!-- List Footer -->


		<div id="tribe-events-footer" >
			<!-- Footer Navigation -->
			<?php tribe_get_template_part( 'list/nav', 'footer' ); ?>
		</div>

	</div>
</div>

  <div class="row ">
		<!-- Headline KALENDAR -->
		<div class="large-1 medium-2 hide-for-small-only columns">
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
