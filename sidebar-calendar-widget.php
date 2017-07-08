<!--Calendar-->
<?php if ( is_active_sidebar( 'calendar-widget' ) ) { ?>
<div class="calendar-wrap front-page-element" role="main">

  <div class="row">
    <div class="large-1 medium-1 small-14 column">
      <h1 class="sideways">TERMINE</h1>
    </div>

    <div class="large-13 medium-13 small-14 column">

	    <div class="events-border">
	      <div class="orbit" role="region" data-orbit>

				<?php dynamic_sidebar( 'calendar-widget' ); ?>

				<script>
					$( document ).ready(function () {
						var numButtons = $('ol.tribe-list-widget li').length;
						var buttonArray = $('.orbit-bullets button');
						for (var i = numButtons; i < buttonArray.length; i++) {
							buttonArray[i].remove();
						}
					});

					var containers = document.getElementsByClassName('tribe-list-widget');
					for (var i = 0; i < containers.length; i++) {
						containers[i].classList.add("orbit-container");
					}

					var elements = document.getElementsByClassName('tribe-events-first');
					for (var i = 0; i < elements.length; i++) {
						elements[i].classList.add("orbit-slide");
					}
				</script>

				<nav class="orbit-bullets">
					<button data-slide="0" class="is-active"></button>
					<button data-slide="1"></button>
					<button data-slide="2"></button>
					<button data-slide="3"></button>
					<button data-slide="4"></button>
					<button data-slide="5"></button>
					<button data-slide="6"></button>
					<button data-slide="7"></button>
					<button data-slide="8"></button>
					<button data-slide="9"></button>
				</nav>
			</div> 
		</div>
    </div>
    
  </div>
</div>
<?php } ?>