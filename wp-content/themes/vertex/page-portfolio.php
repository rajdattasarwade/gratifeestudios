<?php
/**
 * Template Name: Portfolio Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); 

$categories = get_categories( array(
    'hide_empty' => 0,
    'orderby' => 'name',
    'order'   => 'ASC'
));
?>

<div class="content">
<div class="container">
    <div class="post_content">
        <div class="blog">
            <div class="archive_title">
                <h2><?php the_title(); ?></h2>
            </div><!--//archive_title-->
            <div class="archive-portfolio">
            <?php foreach($categories as $cat){ 
                    $category_link = get_category_link($cat->term_id);
                    $cat_image = get_wp_term_image($cat->term_id);
            ?>
                <div class="portfolio-box">
                    <div class="port-image">
                        <a href="<?php echo esc_url( $category_link ); ?>" style="background-image: url(<?php if(isset($cat_image)){ echo $cat_image; } ?>)">                     
                        </a>                                                  
                    </div>
                    <div class="port-body">
                        <h3><a href="<?php echo esc_url( $category_link ); ?>"><?php echo $cat->name; ?></a></h3>
                        <div class="port-cats"><a href="<?php echo esc_url( $category_link ); ?>" rel="category tag"><?php echo $cat->description; ?></a></div>
                    </div>
                </div>
                <?php } ?>
                <div class="clear"></div>
            </div><!-- blog-posts -->
            <div class="blog-pagination"></div>
        </div><!-- blog -->
    </div>
</div>
</div>

<?php get_footer(); ?>
