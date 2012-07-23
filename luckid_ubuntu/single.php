<?php
/**
 * The main template file.
 */

get_header(); ?>

    <div id="container">
	<div id="content">
				
	    <?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>							
		    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class=postHeader>
			    <h2 class="entry-title">
				<a href="<?php echo get_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
				    <?php the_title(); ?>
				</a>
			    </h2>
			    					
		        <div class="post_time"><?php echo get_the_author();echo '  发布于  ';the_time('Y年n月j日'); ?></div>
		        <div class="post_comments"><?php comments_popup_link ('抢沙发','1条评论','%条评论'); ?></div>
		        <div class="clearBoth"></div>											
		        </div><!-- end postHeader -->
								
			<div class="entry-content">
			    <?php the_content(); ?>
			</div>

						
								
			<div id="nav-below" class="navigation">
			    <div class="nav-previous">
			        <?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'luckid' ) . '</span> %title' ); ?>
			    </div>
			    <div class="nav-next">
			        <?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'luckid' ) . '</span>' ); ?>
			    </div>
			</div><!-- #nav-below -->
			
			<?php comments_template( '', true ); ?>
			
		    </div><!-- end post -->							
		<?php endwhile; ?>
		<?php else : ?>
		    <div class="post">		
			<p>Sorry, there were no posts found.</p>		
		    </div><!-- end post -->
		<?php endif; ?>			
	</div><!-- #content -->
    </div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
