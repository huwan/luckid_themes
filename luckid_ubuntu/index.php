<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query. 
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		<div id="container">
			<div id="content">
				
					<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>
	
							<div class="post">	
								
								<div class=postHeader>
									<h2 class="entry-title">
									<a href="<?php echo get_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
									<?php the_title(); ?>
									</a>
									
									
									<p><?php the_time('Y年n月j日'); ?></p>
									
									
									</h2>			
								</div>
								
								<div class="entry-content">
								  <?php the_content(); ?>
								</div>
								
								<div class="entry-utility">
									<span class="cat-links">
										
										<p class="post_meta">	
										<?php the_tags('Tagged as: ', ' , ' , ''); ?>
										</p>
									</span>
								</div>
								<div class="clear"></div>
		
							</div><!-- end post -->
		
					<?php endwhile; ?>
					<?php else : ?>

							<div class="post">
		
								<p>Sorry, there were no posts found.</p>
		
							</div><!-- end post -->

					<?php endif; ?>


			
			</div><!-- #content -->
			
<?php if ( function_exists ( 'wp_pagenavi' ) ) { wp_pagenavi ( ) ; } else { ?> 
  
<div class="nav-previous"> 
<?php next_posts_link ( '&larr; Previous Entries' ) ?> 
</div> 
<div class="nav-next"> 
<?php previous_posts_link ( 'Next Entries &rarr;' ) ?> 
</div> 
  
<?php } ?> 


		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
