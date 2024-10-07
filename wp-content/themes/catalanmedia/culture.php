<?php

/* Template Name: Culture */

get_header(); ?>

<main class="culture-main">
	<div class="row">
		<div class="col-md-7">
			<div class="par1">
				<img src="<?php echo get_template_directory_uri(); ?>/images/culture/collioure_long.webp" alt="" class="img-fluid brutus collioure-culture" style="margin-bottom: 5vh;">
				<p class="p_1 multi-column">
					The southernmost corner of France is a land of contrasts. From the rugged snow-capped mountain peaks of the Pyrenees to the sandy shores of the Mediterranean, all of life's beauty lies between.
					<br>
					Ancient Cathar castles, prehistoric caves, relics of the Roman empire, Moorish and Catalan architecture are all there for lovers of history and culture.
					<br><br>
					Beautiful wines from the varied independent producers of Languedoc Roussillon perfectly accompany southern French cuisine to provide the visitor with a unique and unforgettable flavour of a region of France which tastes as good as it looks.
					<br><br>
					The region is formed by three fingers of the Pyrenees mountains which spread south-eastwards from the 270-mile-long range which splits Spain from France, as it descends into the sea.
					Three rivers cross the region, L'Agly, Tet and Tech, providing the many vineyards with unique irrigation from the purest of sources.
					<br><br>
					The many ports and resorts in the region provide a fascinating coastal fringe to this area of outstanding natural beauty.
					<br><br>
					Off the beaten track there are many beautiful historic villages in this region.
					<br><br>
					Ceret, Thuir, Castlenou and Arles Sur Tech may not attract the same number of tourists as Carcassonne and Collioure but they are well worth a visit to discover the fascinating culture and history of these hidden gems. 
				</p>
			</div>
			<div class="rl-slide-1 big-devices" style="margin-top: 3vh;">
				<?php
					echo do_shortcode('[smartslider3 slider="5"]');
				?>
			</div>
			<div class="salses-div">
				<img src="<?php echo get_template_directory_uri(); ?>/images/guide/salses.jpeg" alt="Salses Castle" class="img-fluid brutus salses">
				<p>
					<em>Salses Castle, restored by Vauban</em>
				</p>
			</div>
		</div>
		<!-- Sidebar -->
		<div class="col-md-5 culture-page-sb">
			<div class="culture-sb-frame">
				<?php include get_template_directory() . '/sidebar-culture.php'; ?>
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>