<?php
get_header();
?>
<div class="content">
<div class="container">
<div class="post_content">
    <?php
    // Start the loop.
    while ( have_posts() ) : the_post();

        // Include the page content template.
        get_template_part( 'content', 'page' );

        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;

    // End the loop.
    endwhile;
    ?>
</div>
</div>
</div>
	<?php
get_footer();
?>