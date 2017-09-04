<?php get_header(); ?>

<main id="content" class="vantagens_page">
	<div class="container">
		<div class="row">
			<section class="col-xs-12">
				<h1><?php the_title(); ?></h1>
				<?php get_template_part('breadcrumbs'); ?>
				<?php get_template_part('content-vantagens'); ?>
			</section>
		</div>
	</div>
</main>

<?php get_footer(); ?>