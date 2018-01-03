<?php /* Template Name: Basic Page Template */ get_header(); ?>

	<main role="main">


		<!-- Logo -->
		<img id="logo" src="<?php the_field('logo', 5); ?>">	


		<?php if (have_posts()): while (have_posts()) : the_post(); ?>


			<div class="content-box">

				<?php the_content(); ?>

			</div>


		<?php endwhile; ?>

		<?php endif; ?>

</main>





<?php get_footer(); ?>
