<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
	<div id="freewall" class="free-wall">

            <div class="brick tint size11 cat-2">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/wedding1.jpg" alt="" />
                <div class="overlay">
                    <h3 class="project-title">Your Project Title</h3>
                    <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="single-page-lite1.html" class="open-project" target="open-iframe">OPEN <span class="pictogram">&#xe803;</span></a>
                </div>
            </div>
            <div class="brick tint size11 cat-3">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/wedding2.jpg" alt="" />
                <div class="overlay">
                    <h3 class="project-title">Your Project Title</h3>
                    <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="single-page-lite2.html" class="open-project" target="open-iframe">OPEN <span class="pictogram">&#xe803;</span></a>
                </div>
            </div>
            <div class="brick tint size11 cat-2">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/wedding1.jpg" alt="" />
                <div class="overlay">
                    <h3 class="project-title">Your Project Title</h3>
                    <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
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
            <div class="brick tint size12 cat-3">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/4414454672_e91f887d34_o.jpg" alt="" />
                <div class="overlay">
                    <h3 class="project-title">Your Project Title</h3>
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
            <div class="brick tint size11 cat-1">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/5171071313_e4c110ccb2_b.jpg" alt="" />
                <div class="overlay">
                    <h3 class="project-title">Your Project Title</h3>
                    <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="single-page-lite2.html" class="open-project" target="open-iframe">OPEN <span class="pictogram">&#xe803;</span></a>
                </div>
            </div>
            
            <!-- This is the slideshow for text. Wrap your text inside div .cover -->
            <!-- <div class="brick size11 cycle-slideshow" data-cycle-fx="fade" data-cycle-speed="900" data-cycle-slides="> div" data-fixpos="2-2">
                <div class="cover">
                    <h2>" Odipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod in quis neque in neque sagittis scelerisque. Fusce quis quam mollis, varius diam at, tempus mi "</h2>
                    <p>Vivamus dictum</p>
                </div>
                <div class="cover">
                    <h2>" Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed quam facilisis, condimentum nibh eu, hendrerit purus. Ut ut malesuada odio, nec ultricies nisi "</h2>
                    <p>Morbi tempor</p>
                </div>
                <div class="cover">
                    <h2>" Suspendisse malesuada lacus nunc, eu sagittis arcu egestas non. Morbi tempor tempus lobortis. Aenean aliquet dui ipsum, eget ullamcorper nisl ornare ut. Suspendisse in vestibulum sapien "</h2>
                    <p>consectetur</p>
                </div>
            </div> -->
            
            <div class="brick tint size11 cat-2">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/4171682579_91f75f9a6a_o.jpg" alt="" />
                <div class="overlay">
                    <h3 class="project-title">Your Project Title</h3>
                    <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="single-page-lite1.html" class="open-project" target="open-iframe">OPEN <span class="pictogram">&#xe803;</span></a>
                </div>
            </div>
            <div class="brick tint size11 cat-1">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/1330348274_33c00c4886_o.jpg" alt="" />
                <div class="overlay">
                    <h3 class="project-title">Your Project Title</h3>
                    <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="single-page-lite2.html" class="open-project" target="open-iframe">OPEN <span class="pictogram">&#xe803;</span></a>
                </div>
            </div>
            <div class="brick tint size21 cat-3">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/4613181397_78853da480_b.jpg" alt="" />
                <div class="overlay">
                    <h3 class="project-title">Your Project Title</h3>
                    <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="single-page-lite1.html" class="open-project" target="open-iframe">OPEN <span class="pictogram">&#xe803;</span></a>
                </div>
            </div>
            <div class="brick tint size11 cat-1">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/261980228_495975b20b_o.jpg" alt="" />
                <div class="overlay">
                    <h3 class="project-title">Your Project Title</h3>
                    <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="single-page-lite2.html" class="open-project" target="open-iframe">OPEN <span class="pictogram">&#xe803;</span></a>
                </div>
            </div>
        </div>
<?php get_footer(); ?>
