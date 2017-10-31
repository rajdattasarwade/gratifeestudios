<?php
/**
* Category Template
*/
get_header(); 
$category_id = get_queried_object_id();
$args = array(
		'post_type' => 'post',
		'cat'=>$category_id,
		'posts_per_page'=>-1	
		);
$query = new WP_Query($args);
?> 
<div class="content">
<div class="container">
    <div class="post_content">
        <div class="blog">
            <div class="archive_title">
                <h2><?php single_cat_title(); ?></h2>
            </div><!--//archive_title-->
            <div class="archive-portfolio">
            <?php if ( $query->have_posts() ) : ?>
            <!-- pagination here -->
 
    		<!-- the loop -->
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            	<?php $post_featured_img = get_field( "post_featured_image", get_the_ID() ); ?>
                <div class="portfolio-box">
                    <div class="port-image">
                        <a href="<?php echo get_permalink(); ?>" style="background-image: url(<?php if(isset($post_featured_img)) echo $post_featured_img; ?>)">                     
                        </a>                                                  
                    </div>
                    <div class="port-body">
                        <h3><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
                        <div class="port-cats"><a href="<?php echo get_permalink(); ?>" rel="category tag"><?php echo get_the_content(); ?></a></div>
                    </div>
                </div>
                <?php endwhile; ?>
                <!-- end of the loop -->
 
    			<!-- pagination here -->
                <?php wp_reset_postdata(); ?>

                <?php else : ?>
				    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>
                <div class="clear"></div>
            </div><!-- blog-posts -->
            <div class="blog-pagination"></div>
        </div><!-- blog -->
    </div>
</div>
</div>
<?php get_footer(); ?>