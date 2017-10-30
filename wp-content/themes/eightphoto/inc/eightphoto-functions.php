<?php
/**
 * eightphoto functions and definitions
 *
 * @package eightphoto
 */

/**
 * Enqueue scripts Admin Section.
 */

    if(is_admin()):
            //load js to control function of switch
        function eightphoto_custom_admin_style($hook){
            if ( 'customize.php' == $hook || 'widgets.php' == $hook ) {

                wp_enqueue_style( 'eightphoto-custom-control-admin-css', get_template_directory_uri() . '/inc/css/custom.css');
                wp_enqueue_script( 'eightphoto-custom-control-admin-js', get_template_directory_uri().'/inc/js/custom.js', array( 'jquery' ), '20160714', true );
            }
        }
        add_action( 'admin_enqueue_scripts', 'eightphoto_custom_admin_style' );
    endif;
    
    /* ---------------------Website layout--------------------------------- */

    if ( ! function_exists( 'eightphoto_website_layout_class' ) ) :
        function eightphoto_website_layout_class($classes) {
            $website_layout = get_theme_mod('eightphoto_webpage_layout','fullwidth');
            if ($website_layout == 'boxed') {

                $classes[] = 'boxed-layout';
            } else {
                $classes[] = 'fullwidth-layout';
            }        
            

            
            if(is_home() || is_front_page() || is_page_template('template-home.php')){
                $noslider = get_theme_mod('eightphoto_homepage_slider_setting_option','disable');
                if($noslider == 'disable'):
                    $classes[] .= 'no-slider';
                endif;
            }
            else{
               $classes[] .= 'no-slider';
            }
            

            return $classes;
        }
        add_filter('body_class', 'eightphoto_website_layout_class');
        endif;

        /* ---------------------Bx Slider Settings Section--------------------------------- */
        if ( ! function_exists( 'eightphoto_bxslider_setting' ) ) :
            function eightphoto_bxslider_setting() {
                $eightphoto_controls = (get_theme_mod('eightphoto_homepage_slider_show_controls','no')=='yes') ? 'true' : 'false';
                $eightphoto_caption = (get_theme_mod('eightphoto_homepage_slider_show_caption','no')=='yes') ? 'true' : 'false';    
                ?>
                <script type="text/javascript">
                    jQuery(document).ready(function ($) {
                        $('#slides').bxSlider({
                            pager: <?php echo esc_attr($eightphoto_controls); ?>,
                            captions: <?php echo esc_attr($eightphoto_caption); ?>,
                            mode:'fade',
                            auto:false,
                            controls: true,
                            adaptiveHeight : true
                        });
                    });
                </script>
                <?php
            }
            add_filter('wp_footer', 'eightphoto_bxslider_setting');
            endif;

    /* * *************************Word Count Limit****************************************** */
   
       if ( ! function_exists( 'eightphoto_word_count' ) ) :
        function eightphoto_word_count($string, $limit) {

            $striped_content = strip_tags($string);
            $striped_content = strip_shortcodes($striped_content);

            $words = explode(' ', $striped_content);
            return implode(' ', array_slice($words, 0, $limit));
        }
        endif;

    
/**
 * Implement the custom metabox feature
 */
require get_template_directory() . '/inc/custom-metabox.php';

/**
 * Load Options Plugin Activation
 */
require get_template_directory() . '/inc/eightphoto-plugin-activation.php';

/**
 * Load Customizer Themes Options
 */
require get_template_directory() . '/inc/eightphoto-customizer.php';

/**
 * Load Widget Area
 */
require get_template_directory() . '/inc/eightphoto-widgets.php';

/* -------------------------Customizer Control for Category------------------------------ */

if (class_exists('WP_Customize_Control')) {
    class Eightphoto_Category_Checkboxes_Control extends WP_Customize_Control {
        public $type = 'category-checkboxes';
        public function render_content() {
            echo '<script src="' . get_template_directory_uri() . '/js/theme-customizer.js"></script>';
            echo '<span class="customize-control-title">' . esc_html($this->label) . '</span>';
            foreach (get_categories() as $category) {
                echo '<label><input type="checkbox" name="category-' . $category->term_id . '" id="category-' . $category->term_id . '" class="cstmzr-category-checkbox"> ' . $category->cat_name . '</label><br>';
            }
            ?>
            <input type="hidden" id="<?php echo $this->id; ?>" class="cstmzr-hidden-categories" <?php $this->link(); ?> value="<?php echo sanitize_text_field($this->value()); ?>">
            <?php
        }
    }
}


// social icon setting
function eightphoto_social_cb(){
    $facebooklink = get_theme_mod('eightphoto_social_facebook');
    $twitterlink = get_theme_mod('eightphoto_social_twitter');
    $google_pluslink = get_theme_mod('eightphoto_social_googleplus');
    $youtubelink = get_theme_mod('eightphoto_social_youtube');
    $pinterestlink = get_theme_mod('eightphoto_social_pinterest');
    $linkedinlink = get_theme_mod('eightphoto_social_linkedin');
    $flickrlink = get_theme_mod('eightphoto_social_flicker');
    $vimeolink = get_theme_mod('eightphoto_social_vimeo');
    $stumbleuponlink = get_theme_mod('eightphoto_social_stumbleupon');
    $instagramlink = get_theme_mod('eightphoto_social_instagram');
    $soundcloudlink = get_theme_mod('eightphoto_social_soundcloud');
    $githublink = get_theme_mod('eightphoto_social_github');
    $tumblrlink = get_theme_mod('eightphoto_social_tumbler');
    $skypelink = get_theme_mod('eightphoto_social_skype');
    $rsslink = get_theme_mod('eightphoto_social_rss'); 
    ?>
    <div class="social-icons ">
        <?php if(!empty($facebooklink)){ ?>
        <a href="<?php echo esc_url(get_theme_mod('eightphoto_social_facebook')); ?>" class="facebook" data-title="Facebook" target="_blank"><i class="fa fa-facebook"></i><span></span></a>
        <?php } ?>

        <?php if(!empty($twitterlink)){ ?>
        <a href="<?php echo esc_url(get_theme_mod('eightphoto_social_twitter')); ?>" class="twitter" data-title="Twitter" target="_blank"><i class="fa fa-twitter"></i><span></span></a>
        <?php } ?>

        <?php if(!empty($google_pluslink)){ ?>
        <a href="<?php echo esc_url(get_theme_mod('eightphoto_social_googleplus')); ?>" class="gplus" data-title="Google Plus" target="_blank"><i class="fa fa-google-plus"></i><span></span></a>
        <?php } ?>

        <?php if(!empty($youtubelink)){ ?>
        <a href="<?php echo esc_url(get_theme_mod('eightphoto_social_youtube')); ?>" class="youtube" data-title="Youtube" target="_blank"><i class="fa fa-youtube"></i><span></span></a>
        <?php } ?>

        <?php if(!empty($pinterestlink)){ ?>
        <a href="<?php echo esc_url(get_theme_mod('eightphoto_social_pinterest')); ?>" class="pinterest" data-title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i><span></span></a>
        <?php } ?>

        <?php if(!empty($linkedinlink)){ ?>
        <a href="<?php echo esc_url(get_theme_mod('eightphoto_social_linkedin')); ?>" class="linkedin" data-title="Linkedin" target="_blank"><i class="fa fa-linkedin"></i><span></span></a>
        <?php } ?>

        <?php if(!empty($flickrlink)){ ?>
        <a href="<?php echo esc_url(get_theme_mod('eightphoto_social_flicker')); ?>" class="flickr" data-title="Flickr" target="_blank"><i class="fa fa-flickr"></i><span></span></a>
        <?php } ?>

        <?php if(!empty($vimeolink)){ ?>
        <a href="<?php echo esc_url(get_theme_mod('eightphoto_social_vimeo')); ?>" class="vimeo" data-title="Vimeo" target="_blank"><i class="fa fa-vimeo-square"></i><span></span></a>
        <?php } ?>

        <?php if(!empty($instagramlink)){ ?>
        <a href="<?php echo esc_url(get_theme_mod('eightphoto_social_instagram')); ?>" class="instagram" data-title="instagram" target="_blank"><i class="fa fa-instagram"></i><span></span></a>
        <?php } ?>

        <?php if(!empty($tumblrlink)){ ?>
        <a href="<?php echo esc_url(get_theme_mod('eightphoto_social_tumblr')); ?>" class="tumblr" data-title="tumblr" target="_blank"><i class="fa fa-tumblr"></i><span></span></a>
        <?php } ?>
        
        <?php if(!empty($soundcloudlink)){ ?>
        <a href="<?php echo esc_url(get_theme_mod('eightphoto_social_soundcloudlink')); ?>" class="delicious" data-title="delicious" target="_blank"><i class="fa fa-delicious"></i><span></span></a>
        <?php } ?>

        <?php if(!empty($rsslink)){ ?>
        <a href="<?php echo esc_url(get_theme_mod('eightphoto_social_rss')); ?>" class="rss" data-title="rss" target="_blank"><i class="fa fa-rss"></i><span></span></a>
        <?php } ?>

        <?php if(!empty($githublink)){ ?>
        <a href="<?php echo esc_url(get_theme_mod('eightphoto_social_github')); ?>" class="github" data-title="github" target="_blank"><i class="fa fa-github"></i><span></span></a>
        <?php } ?>

        <?php if(!empty($stumbleuponlink)){ ?>
        <a href="<?php echo esc_url(get_theme_mod('eightphoto_social_stumbleupon')); ?>" class="stumbleupon" data-title="stumbleupon" target="_blank"><i class="fa fa-stumbleupon"></i><span></span></a>
        <?php } ?>
        
        <?php if(!empty($skypelink)){ ?>
        <a href="<?php echo __('skype:', 'eightphoto').esc_url(get_theme_mod('eightphoto_social_skype')); ?>" class="skype" data-title="Skype"><i class="fa fa-skype"></i><span></span></a>
        <?php } ?>
    </div>
    <?php
}
add_action('eightphoto_social','eightphoto_social_cb', 10);

/**************************** Main Banner Slider ************************************** */
if ( ! function_exists( 'eightphoto_main_slider' ) ) :
    function eightphoto_main_slider() {
        ?>
        <!-- Slider Section Start here -->
        <?php if (esc_attr(get_theme_mod('eightphoto_homepage_slider_setting_option','disable')) == 'enable') { ?>
        <div class="ed-banner-slider">
            <div id="slides">
                <?php 
                $eightphoto_slider = get_theme_mod('eightphoto_homepage_advance_slider');
                if(!empty($eightphoto_slider)){
                    $eightphoto_sliders = json_decode($eightphoto_slider);
                    foreach ($eightphoto_sliders as $slider) {

                        $website_layout = get_theme_mod('eightphoto_webpage_layout','fullwidth');
                        
                        ?>
                        <div class="single-slide" style="background-image:url(<?php echo esc_url($slider->image_url); ?>); ">
                            <?php if (esc_attr(get_theme_mod('eightphoto_homepage_slider_show_caption','yes')) == 'yes') { ?>
                            <div class="caption">
                                <div class="title fadeInDown animated"><?php echo esc_attr($slider->title);?></div>
                                <div class="desc fadeInUp animated">
                                    <?php echo $slider->text; ?>
                                    <?php if(!empty($slider->link) && !empty($slider->subtitle)) { ?>
                                    <div class="caption-link">
                                        <a href="<?php echo esc_url($slider->link); ?>">
                                            <?php echo esc_attr($slider->subtitle); ?>
                                        </a>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <?php } } ?>
                    </div>
                </div>       
                <?php
            }
        }
        endif;
        /**************************** Our Services Area Function *********************** */
        if ( ! function_exists( 'eightphoto_our_services' ) ) :
            function eightphoto_our_services() {
                $services_one = esc_attr(get_theme_mod('eightphoto_homepage_services_page_one',''));
                $services_two = esc_attr(get_theme_mod('eightphoto_homepage_services_page_two',''));
                $services_three = esc_attr(get_theme_mod('eightphoto_homepage_services_page_three',''));
                $title = esc_html(get_theme_mod('eightphoto_homepage_our_service_title',__('Our Services','eightphoto')));
                ?>

                <div class="section-title">
                    <?php echo $title; ?>    
                </div>

                <div class="service-box-wrap clear">
                    <?php
                    if(!empty($services_one)):
                        $query = new WP_Query('page_id=' . $services_one);
                        while ($query->have_posts()) : $query->the_post();
                            if(has_post_thumbnail()):
                                $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'eightphoto-our-services', true);
                                $img_link = $image[0];
                            else:
                                $img_link = get_template_directory_uri().'/images/service-fb-image.png';
                            endif;
                                ?>
                                <div class="service-box">
                                    <div class="service-image">
                                        <img src="<?php echo esc_url($img_link); ?>"/>
                                    </div>
                                    <div class="service-hover red">
                                        <div class="post-title"><span class="table_cell"><?php the_title(); ?></span></div>
                                        <p><?php echo eightphoto_word_count(get_the_content(), 25);?></p>
                                        <a href="<?php the_permalink(); ?>" class="bttn"><?php esc_html_e( 'Read More', 'eightphoto' ); ?></a>
                                    </div>
                                    
                                </div>
                            <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;

                    if(!empty($services_two)):
                        $query = new WP_Query('page_id=' . $services_two);
                        while ($query->have_posts()) : $query->the_post();
                            if(has_post_thumbnail()):
                                $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'eightphoto-our-services', true);
                                $img_link = $image[0];
                            else:
                                $img_link = get_template_directory_uri().'/images/service-fb-image.png';
                            endif;
                        ?>
                            <div class="service-box">
                                <div class="service-image">
                                    <img src="<?php echo esc_url($img_link); ?>"/>
                                </div>
                                <div class="service-hover blue">
                                    <div class="post-title"><span class="table_cell"><?php the_title(); ?></span></div>
                                    <p><?php echo eightphoto_word_count(get_the_content(), 25);?></p>
                                    <a href="<?php the_permalink(); ?>" class="bttn"><?php esc_html_e( 'Read More', 'eightphoto' ); ?></a>            
                                </div>
                            </div>
                            <?php

                        endwhile;
                        wp_reset_postdata();
                    endif;

                    if(!empty($services_three)):
                        $query = new WP_Query('page_id=' . $services_three);
                        while ($query->have_posts()) : $query->the_post();
                            if(has_post_thumbnail()):
                                $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'eightphoto-our-services', true);
                                $img_link = $image[0];
                            else:
                                $img_link = get_template_directory_uri().'/images/service-fb-image.png';
                            endif;
                            ?>
                            <div class="service-box">
                                <div class="service-image">
                                    <img src="<?php echo esc_url($img_link); ?>"/>
                                </div>
                                <div class="service-hover green">
                                    <div class="post-title">
                                        <span class="table_cell"><?php the_title(); ?></span>
                                    </div>
                                    <p><?php echo eightphoto_word_count(get_the_content(), 25);?></p>
                                    <a href="<?php the_permalink(); ?>" class="bttn"><?php esc_html_e( 'Read More', 'eightphoto' ) ?></a>
                                </div>     
                            </div>
                        </div>
                        <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
            }
            endif;

/**************************** Our Home Blogs Area Function *********************** */
if ( ! function_exists( 'eightphoto_homeblogs' ) ) :
function eightphoto_homeblogs() {
    $category_slug = esc_attr(get_theme_mod('eightphoto_homepage_blog_cat',''));
    $title = esc_html(get_theme_mod('eightphoto_homepage_blogs_title',__('Blog Posts','eightphoto')));
    ?>      

    <div class="section-title">
        <?php echo $title; ?>   
    </div>

    <div class="ed-latest-post clear">
        <?php                         
        $args = array( 
            'posts_per_page' => 3,
            'category_name' => $category_slug
            );
        $query = new WP_Query($args);
        if ($query->have_posts()): 
            while ($query->have_posts()) : 
                $query->the_post();
                ?>
                <div class="post-item">
                    <div class="ed-post-img-wrap">
                        <a href="<?php the_permalink(); ?>">                      
                            <?php
                            if ( has_post_thumbnail() ) {
                              $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'eightphoto-blog-section', true);            
                              echo '<img class="blog-image" src="' . esc_url($image[0]). '" />'; 
                          }
                          ?>
                      </a>
                    </div>
                  

                    <div class="ed-post-content">
                        <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                        <div class="ed-post-date-comment clear">
                            <div class="ed-post-date">
                                <i class="fa fa-calendar-o"></i>
                                <span><?php the_time('d') ?></span>
                                <span><?php the_time('M'); ?></span>
                            </div>

                            <div class="ed-comment">
                                <i class="fa fa-comment-o"></i>
                                <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?>
                            </div>
                        </div>
                        <div class="ed-item-excerpt">
                            <?php echo eightphoto_word_count(get_the_excerpt(), 50)."..."; ?>
                        </div>
                        <a class="bttn" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read More', 'eightphoto' ) ?></a>
                    </div>               
                </div>
        <?php endwhile;
            wp_reset_postdata(); 
    endif;   ?>
    </div>
<?php
}
endif;

           
/* * *************************** About Us Section ***************************************** */
if ( ! function_exists( 'eightphoto_aboutus' ) ) :
function eightphoto_aboutus() {
    $about_page = esc_attr(get_theme_mod('eightphoto_homepage_about_page',''));
    query_posts('page_id=' . $about_page);
    while (have_posts()) : the_post();                
        ?>
        <div class="about_desc clear">
            <div class="section-title">                            
                <span><?php the_title(); ?></span>
            </div>

            
            <div class="aboutus-subtitle">
                <?php the_content(); ?>
            </div>      
        </div>
        <?php 
    endwhile;
    wp_reset_postdata();
}
endif;


function eightphoto_counter(){
    $counter_one = esc_attr(get_theme_mod('eightphoto_homepage_about_counter_one','100'));
    $title_one = esc_html(get_theme_mod('eightphoto_homepage_about_title_one',__('Videos Captured','eightphoto')));
    $icon_one = esc_attr(get_theme_mod('eightphoto_homepage_about_icon_one','fa-video-camera'));

    $counter_two = esc_attr(get_theme_mod('eightphoto_homepage_about_counter_two','500'));
    $title_two = esc_html(get_theme_mod('eightphoto_homepage_about_title_two',__('PHOTOS CLICKED','eightphoto')));
    $icon_two = esc_attr(get_theme_mod('eightphoto_homepage_about_icon_two','fa-picture-o'));

    $counter_three = esc_attr(get_theme_mod('eightphoto_homepage_about_counter_three','150'));
    $title_three = esc_html(get_theme_mod('eightphoto_homepage_about_title_three',__('PLACES VISITED','eightphoto')));
    $icon_three = esc_attr(get_theme_mod('eightphoto_homepage_about_icon_three','fa-university'));

    $counter_four = esc_attr(get_theme_mod('eightphoto_homepage_about_counter_four','50'));
    $title_four = esc_html(get_theme_mod('eightphoto_homepage_about_title_four',__('AWARDS WON','eightphoto')));
    $icon_four = esc_attr(get_theme_mod('eightphoto_homepage_about_icon_four','fa-trophy'));
    
    ?>
    <div class="about-counter-wrap clear">
        <div class="about-counter">
            <span class="counter-icon icon-one">                                    
                <i class="fa <?php if (!empty($icon_one)){ echo $icon_one; } ?> fa-2x"></i>
            </span>
            <h6 class="counter-title title-one"><?php
                if (!empty($title_one)) : echo $title_one;
                endif;
                ?>
            </h6>
            <div class="counter-number">
             <span class="counter counter-one">
                 <?php
                 if (!empty($counter_one)) : echo $counter_one;
                 endif;
                 ?>
             </span>
         </div>
     </div>

     <div class="about-counter">
        <span class="counter-icon icon-two">
            <i class="fa <?php
            if (!empty($icon_two)) : echo $icon_two;
            endif
            ?> fa-2x"></i>
        </span>
        <h6 class="counter-title title-two">
            <?php
            if (!empty($title_two)) : echo $title_two;
            endif;
            ?>
        </h6>
        <div class="counter-number">
            <span class="counter counter-two">
                <?php
                if (!empty($counter_two)) : echo $counter_two;
                endif;
                ?>
            </span>
        </div>
    </div>

    <div class="about-counter">
        <span class="counter-icon icon-three">
            <i class="fa <?php
            if (!empty($icon_three)) : echo $icon_three;
            endif
            ?> fa-2x"></i>
        </span>
        <h6 class="counter-title title-three"><?php
            if (!empty($title_three)) : echo $title_three;
            endif;
            ?>
        </h6>
        <div class="counter-number">
            <span class="counter counter-three">
                <?php
                if (!empty($counter_three)) : echo $counter_three;
                endif;
                ?>
            </span>
        </div>
    </div>

    <div class="about-counter">
        <span class="counter-icon icon-four"><i class="fa <?php
            if (!empty($icon_four)) : echo $icon_four;
            endif
            ?> fa-2x"></i>
        </span>
        <h6 class="counter-title title-four"><?php
            if (!empty($title_four)) : echo $title_four;
            endif;
            ?>
        </h6>
        <div class="counter-number">
            <span class="counter counter-four">
                <?php
                if (!empty($counter_four)) : echo $counter_four;
                endif;
                ?>
            </span>
        </div>
    </div>                             
</div>
<?php
}

/* * ******************************** Call To Action Section  ************************************** */
if ( ! function_exists( 'eightphoto_call_to_action' ) ) :
    function eightphoto_call_to_action() {
        $ed_bg_image = get_theme_mod('eightphoto_homepage_call_action_image');
        $ed_call_title = get_theme_mod('eightphoto_homepage_call_action_title',__('Need A Photographer ?','eightphoto'));
        $ed_call_sub_title = get_theme_mod('eightphoto_homepage_call_action_sub_title',__('Contact us if you want a photographer for photography.','eightphoto'));
        $ed_call_button_link = get_theme_mod('eightphoto_homepage_call_action_button_link','#');
        $ed_call_button_text = get_theme_mod('eightphoto_homepage_call_action_button_name',__('Hire Me','eightphoto'));
        ?>
        <div class="call-to-action" <?php if(!empty($ed_bg_image)){ ?> style="background-image:url(<?php echo esc_url( $ed_bg_image ); ?>); background-size: cover; <?php } ?>">   
            <div class="foto-container">
                <div class="section-title"><?php echo esc_html( $ed_call_title ); ?></div>
                <div class="call-to-action-subtitle"><?php echo esc_textarea( $ed_call_sub_title ); ?></div>
                <?php if( !empty($ed_call_button_text) ){ ?>
                <div class="call-to-action-button">
                    <a class="bttn" href="<?php echo esc_url( $ed_call_button_link ); ?>"><?php echo esc_html( $ed_call_button_text ); ?></a>
                </div>
                <?php } ?>
            </div>
        </div>
        <?php
    }
    endif;


/* * ******************************** Quick Contact Info ************************************** */
if ( ! function_exists( 'eightphoto_quick_contact' ) ) :
function eightphoto_quick_contact() {
    $email_icon = get_theme_mod('eightphoto_homepage_quick_email_icon','fa-envelope');
    $email = get_theme_mod('eightphoto_homepage_quick_email','info@8degreethemes.com');
    $twitter_icon = get_theme_mod('eightphoto_homepage_quick_twitter_icon','fa-twitter');
    $twitter = get_theme_mod('eightphoto_homepage_quick_twitter','8DegreeThemes');
    $phone_icon = get_theme_mod('eightphoto_homepage_quick_phone_icon','fa-phone-square');
    $phone = get_theme_mod('eightphoto_homepage_quick_phone','+977-1-4671980');
    ?>
    <div class="ed-email">
        <a href="mailto:<?php echo sanitize_email($email); ?>">
            <div class="email-icon">
                <i class="fa <?php echo esc_attr($email_icon); ?>"></i>
            </div>
            <div class="email-address">
                <?php echo sanitize_email($email); ?>
            </div>
        </a>
    </div>

    <div class="ed-twitter">
        <a href="https://twitter.com/<?php echo $twitter; ?>" target="_blank">
            <div class="twitter-icon">
                <i class="fa <?php echo esc_attr($twitter_icon); ?>"></i>
            </div>
            <div class="twitter-address">
                <?php if(!empty($twitter)) : ?>
                    @<?php echo esc_html($twitter); ?>
                <?php endif; ?>
            </div>
        </a>
    </div>

    <div class="ed-phone">
        <a href="callto:<?php echo esc_html($phone); ?>">
            <div class="phone-icon">
                <i class="fa <?php echo esc_attr($phone_icon); ?> fa-2x"></i>
            </div>
            <div class="phone-number">
                <?php echo esc_attr($phone); ?>
            </div>
        </a>
    </div>
    <?php
}
endif;



// Themes required Plugins Install Section
    if ( ! function_exists( 'eightphoto_register_required_plugins' ) ) :
        function eightphoto_register_required_plugins() {

            $plugins = array(
                array(
                'name'      => '8 Degree Coming Soon Page',
                'slug'      => '8-degree-coming-soon-page',
                'required'  => false,
                'force_activation'   => false,
                'force_deactivation' => true,
                ),
                array(
                    'name'      => '8 Degree Notification Bar',
                    'slug'      => '8-degree-notification-bar',
                    'required'  => false,
                    'force_activation'   => false,
                    'force_deactivation' => true,
                    ),
                array(
                    'name' => 'AccessPress Instagram Feed',
                    'slug' => 'accesspress-instagram-feed',
                    'required' => false,
                    ),                
                array(
                    'name' => 'AccessPress Social Share',
                    'slug' => 'accesspress-social-share',
                    'required' => false,
                    ),        
                array(
                    'name' => 'Contact Form 7',
                    'slug' => 'contact-form-7',
                    'required' => false,
                    ),
                array(
                    'name' => 'Newsletter',
                    'slug' => 'newsletter',
                    'required' => false,
                    )
                );

            $config = array(
        'id' => 'tgmpa', // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '', // Default absolute path to pre-packaged plugins.
        'menu' => 'tgmpa-install-plugins', // Menu slug.
        'parent_slug' => 'themes.php', // Parent menu slug.
        'capability' => 'edit_theme_options', // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
        'has_notices' => true, // Show admin notices or not.
        'dismissable' => true, // If false, a user cannot dismiss the nag message.
        'dismiss_msg' => '', // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => true, // Automatically activate plugins after installation or not.
        'message' => '', // Message to output right before the plugins table.
        'strings' => array(
            'page_title' => __('Install Required Plugins', 'eightphoto'),
            'menu_title' => __('Install Plugins', 'eightphoto'),
            'installing' => __('Installing Plugin: %s', 'eightphoto'), // %s = plugin name.
            'oops' => __('Something went wrong with the plugin API.', 'eightphoto'),
            'notice_can_install_required' => _n_noop(
                'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'eightphoto'
            ), // %1$s = plugin name(s).
            'notice_can_install_recommended' => _n_noop(
                'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'eightphoto'
            ), // %1$s = plugin name(s).
            'notice_cannot_install' => _n_noop(
                'Sorry, but you do not have the correct permissions to install the %1$s plugin.', 'Sorry, but you do not have the correct permissions to install the %1$s plugins.', 'eightphoto'
            ), // %1$s = plugin name(s).
            'notice_ask_to_update' => _n_noop(
                'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'eightphoto'
            ), // %1$s = plugin name(s).
            'notice_ask_to_update_maybe' => _n_noop(
                'There is an update available for: %1$s.', 'There are updates available for the following plugins: %1$s.', 'eightphoto'
            ), // %1$s = plugin name(s).
            'notice_cannot_update' => _n_noop(
                'Sorry, but you do not have the correct permissions to update the %1$s plugin.', 'Sorry, but you do not have the correct permissions to update the %1$s plugins.', 'eightphoto'
            ), // %1$s = plugin name(s).
            'notice_can_activate_required' => _n_noop(
                'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'eightphoto'
            ), // %1$s = plugin name(s).
            'notice_can_activate_recommended' => _n_noop(
                'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'eightphoto'
            ), // %1$s = plugin name(s).
            'notice_cannot_activate' => _n_noop(
                'Sorry, but you do not have the correct permissions to activate the %1$s plugin.', 'Sorry, but you do not have the correct permissions to activate the %1$s plugins.', 'eightphoto'
            ), // %1$s = plugin name(s).
            'install_link' => _n_noop(
                'Begin installing plugin', 'Begin installing plugins', 'eightphoto'
                ),
            'update_link' => _n_noop(
                'Begin updating plugin', 'Begin updating plugins', 'eightphoto'
                ),
            'activate_link' => _n_noop(
                'Begin activating plugin', 'Begin activating plugins', 'eightphoto'
                ),
            'return' => __('Return to Required Plugins Installer', 'eightphoto'),
            'plugin_activated' => __('Plugin activated successfully.', 'eightphoto'),
            'activated_successfully' => __('The following plugin was activated successfully:', 'eightphoto'),
            'plugin_already_active' => __('No action taken. Plugin %1$s was already active.', 'eightphoto'), // %1$s = plugin name(s).
            'plugin_needs_higher_version' => __('Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'eightphoto'), // %1$s = plugin name(s).
            'complete' => __('All plugins installed and activated successfully. %1$s', 'eightphoto'), // %s = dashboard link.
            'contact_admin' => __('Please contact the administrator of this site for help.', 'eightphoto'),
            'nag_type' => 'updated', // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
            )
);
tgmpa($plugins, $config);
}
add_action('tgmpa_register', 'eightphoto_register_required_plugins');
endif;