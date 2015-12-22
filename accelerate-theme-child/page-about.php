<?php
/**
 * The template for displaying the about page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>


<section class="home-page">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='homepage-hero'>
				<?php the_content(); ?>

			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
</section><!-- .home-page -->





<section class="featured-work">
	<div class="site-content">
			<h3>OUR SERVICES</h3>
			<p>We take pride in our clients and content we create for them. <br />Here's a brief of our offered services</p>
		





			<ul class="homepage-featured-work">

			<?php query_posts('posts_per_page=3&post_type=our_services'); ?>
				<?php while ( have_posts() ) : the_post(); 
					$image_1 = get_field("image_1");
					$size = "thumbnail"




				?>

					<li class="individual-featured-work">
					<figure>
						<?php echo wp_get_attachment_image($image_1, $size); ?>

					</figure>
					
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				</li>

				<?php endwhile; // end of the loop. ?>
				<?php wp_reset_query(); // resets the altered query back to the original ?>

			</ul>


		<article class="case-study">
			<aside class="case-study-sidebar">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<h5><?php echo $services; ?></h5>


				<p><strong><a href="<?php the_permalink(); ?>">View Project</a></strong></p>
			</aside>



		</article>

	</div>
</section>

<?php get_footer(); ?>
