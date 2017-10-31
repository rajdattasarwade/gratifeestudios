<?php
get_header();
?>
<div class="content">
	<div class="container">
		<div class="post_content">
			<div class="blog">
	            <div class="archive_title">
	                <h2><?php the_title(); ?></h2>
	            </div><!--//archive_title-->
	            <div class="archive-portfolio">
	            <?php while ( have_posts() ) : the_post(); ?>
	            	<?php $galleryArray = get_post_gallery_ids(get_the_ID());  ?>
	            	<?php foreach ($galleryArray as $id) { ?>
	                <div class="portfolio-box">
	                    <div class="port-image">
	                        <a href="#" style="background-image: url(<?php echo wp_get_attachment_url( $id ); ?>)">                     
	                        </a>                                                  
	                    </div>
	                </div>
	                <?php } ?>
	                <?php endwhile; ?>
	                <div class="clear"></div>
	            </div><!-- blog-posts -->
	            <div class="blog-pagination"></div>
	        </div><!-- blog -->
			<?php //if ( comments_open() || '0' != get_comments_number() ) : ?>
						<!-- <div class="home_blog_box">
							<div class="comments_cont">
							<?php
								//comments_template( '', true );
							?>
							</div>
						</div> -->
			<?php //endif; ?>
		</div>
	</div>
</div>
<?php
get_footer();
?>