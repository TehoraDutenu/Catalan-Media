<?php
 /*
  * Template Name: Fans Guide
  */
 
 get_header(); ?>

<main class="guide-main">
	<div class="row">
		<div class="col-md-9">
			<div class="guide-intro">
				<h2>Making the most of your matchday experience</h2>
				<p class="p_1 multi-column">
					The Perpignan weekender is the highlight of the season for many Super League fans who are travelling to watch their team play against the Catalans Dragons.
					<br>
					Make the most of your time in the south of France with Catalan Media's guide to the perfect Perpignan experience.
					<br>
					It's so much more than 80 minutes of Rugby League... this area has much to offer fans who are visiting the city for one day only or spending more time to take in the surrounding area.
					<br>
					Ask us anything - email your queries to <a href="mailto:catalanmedia@orange.fr">catalanmedia@orange.fr</a>
					</p>
				<img class="brutus guide-img img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/guide/FC-Dracs.webp" alt="Fans at Brutus">
			</div>
			<div class="guide-party">
				<h2>Perpignan Party People</h2>
				<p class="p_1 multi-column">
					Most fans head to the red-bricked major monument Le Castillet to eat and drink in the many surrounding bars, but Perpignan offers much more than sunshine singalongs.
					<br>
					The centre of the city has a castle dating back to 1276 - the Palace of the Kings of Mallorca. Excellent place to stroll around and picnic and learn about the ancient history of the region.
					<br>
					There is designer shopping at the Galeries Lafayette (across the river from Le Castillet) which has a rooftop café terrace for excellent views of the city centre.
					<br>
					Great restaurants line either side of the central Basse river, a tributary of the bigger River Tete which also crosses the city boundaries.
					<br>
					Pedallo boats glide between family picnics on the grassy riverside banks.
				</p>
			</div>
			<div class="big-devices rl-slide-1">
				<?php
					echo do_shortcode('[smartslider3 slider="4"]');
				?>
			</div>
			<div class="guide-places">
				<p class="p_1 multi-column">
					<b>Halles Vauban</b> is a beautifully refurbished al fresco dining experience - under cover! <br>
					It combines a fresh food market with the very latest street-food and drink.
					<br>
					<b>Café Vienne</b> is one of the oldest and most well-known city centre restaurants. Its art-deco interior and extensive al fresco eating area provides visitors with all-day-long eating and extensive menus to suit all tastes.
					<br>
					<b>The Delirium Bar</b> and <b>O'Flaherty's</b> are also popular with fans pre-match as are the many bars in the <b>Place de la Republique</b>
				</p>
			</div>
			<div id="perpi-map" class="brutus"></div>
		</div>
		<!-- Sidebar -->
		<div class="col-md-3 guide-page-sb">
			<div class="guide-sb-frame">
				<?php include get_template_directory() . '/sidebar-guide.php'; ?>
			</div>
		</div>
		<img src="<?php echo get_template_directory_uri(); ?>/images/guide/brutus-night.webp" alt="" class="by-night brutus img-fluid">
	</div>
</main>

<?php get_footer(); ?>
