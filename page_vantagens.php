<?php
/*
Template Name: Vantagens
*/

get_header(); ?>

<style type="text/css">
	header.content-page:before {
		content: "";
		position: absolute;
		display: block;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background-image: url('<?php bloginfo('template_url') ?>/images/vantagens-agenda-big.png');
		background-repeat: no-repeat;
		background-position: center;
		opacity: 0.1;
	}
</style>

<main id="content">
	<section class="advantage-featured">
		<header class="content-page">
			<div class="container">
				<div class="row">

					<div class="featured-content col-lg-6 col-md-6 col-sm-8 col-xs-12 center-x">
						<img src="<?php bloginfo('template_url') ?>/images/icones_vantagens/vantagens2-agenda.png" alt="<?php the_title() ?>" />
						
						<?php if(have_posts()): ?>
						<?php while(have_posts()):the_post(); ?>

						<h1><?php the_title(); ?></h1>
						<p><?php the_content(); ?></p>

						<?php endwhile; ?>
						<?php endif; ?>

						<?php get_template_part('breadcrumbs'); ?>

					</div>

				</div>
			</div>
		</header>

		<section class="content-page">
			<div class="container">
				<?php get_template_part('content-vantagens'); ?>
			</div>
		</section>

	</section>
</main>

<?php get_footer(); ?>