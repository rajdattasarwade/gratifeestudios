<?php
/**
 * Template Name: Contact Us Page
 *
 * @package WordPress
 * @subpackage Vertex
 * @since Vertex
 */

get_header();
?>

<div class="content">
<div class="container">
<div class="post_content">
    <article class="post_box" id="post-9">
        <h1>Contact</h1>
        <p>Reach to us and we will capture your moments</p>
        <p><strong></strong></p>
        <?php echo do_shortcode('[cscf-contact-form]'); ?>
    </article>
    <div class="clear"></div>
</div>
<div class="clear"></div>
</div>
</div>

<?php get_footer(); ?>
