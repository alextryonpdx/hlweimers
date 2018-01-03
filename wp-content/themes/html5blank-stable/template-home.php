<?php /* Template Name: Home Page Template */ get_header(); ?>

	<main role="main">


		<!-- Logo -->
		<img id="logo" src="<?php the_field('logo'); ?>">	


		<!-- Testimonials -->		
		<?php if( have_rows('testimonials') ): ?>
    			<?php while( have_rows('testimonials') ): the_row(); ?>
 					<div class="testimonial">
	    		    	<h1><?php the_sub_field('testimonial'); ?></h1>
	    		    	<h2><?php the_sub_field('name'); ?></h2>
	    		    </div>
    			<?php endwhile; ?>
		<?php endif; ?>



</main>





<?php get_footer(); ?>
