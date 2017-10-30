<?php
/**
 * Template Name: Portfolio Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); 
if (function_exists('get_wp_term_image')) {
    $meta_image[0] = get_wp_term_image(1);
    $meta_image[1] = get_wp_term_image(2);
    $meta_image[2] = get_wp_term_image(3);
    $meta_image[3] = get_wp_term_image(1);
}
$taxonomy = "category";
$term[0] = get_term(1,$taxonomy);
$term[1] = get_term(2,$taxonomy);
$term[2] = get_term(3,$taxonomy);
$term[3] = get_term(4,$taxonomy);
?>
	<div id="freewall" class="free-wall">

            <div class="brick tint size11 cat-2">
                <img src="<?php if(isset($meta_image[0])){ echo $meta_image[0]; } ?>" alt="" />
                <div class="overlay">
                    <h3 class="project-title"><?php if(isset($term[0]->name)){ echo $term[0]->name; } ?></h3>
                    <p class="project-description"><?php if(isset($term[0]->description)){ echo $term[0]->description; } ?></p>
                    <a href="single-page-lite1.html" class="open-project" target="open-iframe">OPEN <span class="pictogram">&#xe803;</span></a>
                </div>
            </div>
            <div class="brick tint size11 cat-3">
                <img src="<?php if(isset($meta_image[1])){ echo $meta_image[1]; } ?>" alt="" />
                <div class="overlay">
                    <h3 class="project-title"><?php if(isset($term[1]->name)){ echo $term[1]->name; } ?></h3>
                    <p class="project-description"><?php if(isset($term[1]->description)){ echo $term[1]->description; } ?></p>
                    <a href="single-page-lite2.html" class="open-project" target="open-iframe">OPEN <span class="pictogram">&#xe803;</span></a>
                </div>
            </div>
            <div class="brick tint size11 cat-2">
                <img src="<?php if(isset($meta_image[2])){ echo $meta_image[2]; } ?>" alt="" />
                <div class="overlay">
                    <h3 class="project-title"><?php if(isset($term[2]->name)){ echo $term[2]->name; } ?></h3>
                    <p class="project-description"><?php if(isset($term[2]->description)){ echo $term[2]->description; } ?></p>
                    <a href="single-page-lite3.html" class="open-project" target="open-iframe">OPEN <span class="pictogram">&#xe803;</span></a>
                </div>
            </div>

            <!-- This is the slideshow for images -->
            <div class="brick size12 cycle-slideshow" data-cycle-fx="scrollHorz" data-cycle-speed="500" data-fixpos="0-3">
                <!-- Your slideshow images -->
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/5226290116_1409794022_b.jpg" alt="" />
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/8098729514_fa1919474d_b.jpg" alt="" />
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/3919137679_dc05b59927.jpg" alt="" />
            </div>

            <div class="brick size11" data-fixpos="1-0">
                <!-- For text only, put your heading/paragraph inside div .cover -->
                <div class="cover">
                    <p>
                        <strong>Hello!</strong>
                    </p>
                    <p>Welcome to my portfolio. I'm Jane Doe, a 20-something photographer with passion for composition and beauty.</p>
                    <p>Feel free to explore my works. And contact me for photo queries.</p>
                </div>
            </div>
            <div class="brick tint size11 cat-2">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/wedding1.jpg" alt="" />
                <div class="overlay">
                    <h3 class="project-title">Your Project Title 4</h3>
                    <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="single-page-lite1.html" class="open-project" target="open-iframe">OPEN <span class="pictogram">&#xe803;</span></a>
                </div>
            </div>
            <div class="brick size11 cycle-slideshow client-number" data-cycle-fx="scrollHorz" data-cycle-speed="200" data-fixpos="1-2">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/3346647884_a47c71fd9a_o.jpg" alt="" />
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/1452336320_483f721d3d_o.jpg" alt="" />
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/4538256461_96f9e70e9c_b.jpg" alt="" />
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/2310704408_361758fa28_b.jpg" alt="" />
                <div class="client">
                    <div class="number">365</div>
                    <div class="client-text">Happy Clients and Counting</div>
                    <div class="client-text">
                        <a href="#">
                            <strong>BE ONE!</strong>
                        </a>
                    </div>
                </div>
            </div>
            
        </div>
<?php get_footer(); ?>
