<?php

/* Template Name: Out */

get_header(); ?>

<main class="out-main">
	<div class="row">
		<div class="col-md-9">
			<img src=<?php echo get_template_directory_uri() . "/images/guide/coca.jpeg"; ?> alt="Catalan food" class="img-fluid brutus">
		</div>
		<!-- Sidebar -->
		<div class="col-md-3 out-page-sb">
			<div class="out-sb-frame">
				<?php include get_template_directory() . '/sidebar-out.php'; ?>
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>