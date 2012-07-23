<?php
/**
 * The main template file.
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
			    </h2>
			    
		        <div class="post_time"><?php echo get_the_author();echo '  发布于  ';the_time('Y年n月j日'); ?></div>
		        <div class="post_comments"><?php comments_popup_link ('抢沙发','1条评论','%条评论'); ?></div>
		        <div class="clearBoth"></div>
		    </div><!--end postHeader -->
		    
		    <div class="entry-content">
			<?php the_content(); ?>
		    </div>
								
		    <div class="entry-utility">
	
				<?php the_tags('Tagged as: ', ' , ' , ''); ?> | 
			        <a href="<?php the_permalink() ?>" title="详细阅读 <?php the_title(); ?>" rel="bookmark">阅读全文 &rarr;</a>	|			

		    </div><!-- end entry-utility -->
		    <div class="clear"></div><!-- clear entry-utility -->
		
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
