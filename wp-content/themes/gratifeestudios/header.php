<?php
/**
 * The template for displaying the header
 *
 */
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Your site title -->
    <title>Picku</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Your site description" />

    <!-- Favicon Image. -->
    <link rel="icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/favicon.png" type="image/x-icon" />

    <!-- Google Web Font. -->
    <link href="//fonts.googleapis.com/css?family=Lato:700,300" rel="stylesheet" type="text/css">

    <!-- Normalize v.3.0.0 - makes browsers render all elements more consistently. -->

    <!-- Stylesheet - to improve site's load speed, better use the minimized version.
         The unminified version is also included in package. -->
    <?php wp_head(); ?>
</head>

<body id="parent"  <?php body_class(); ?>>
<?php get_sidebar(); ?>
<div class="main-container"> <!-- Main Container Begins -->

<!-- Logo and menu inside this container. -->
    <div class="header">
        <div class="clearfix">

            <!-- Put your site logo here. Recommended size is 165px x 50px. -->
            <div class="float-left logo">
                <h1>
                    <a href="#">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/Logo_Gratifee.png" alt="" />
                    </a>
                </h1>
            </div>

            <!-- Top Menu Bar -->
            <div class="float-right">
                <ul id="top-nav" class="slimmenu">

                    <!-- To create menu, type these...
                         <li>
                             <a href="URL" target="open-iframe">Your Menu Item</a>
                         </li>

                         Note:
                         There's a fullscreen function in this template. To prevent fullscreen (if enabled) from exiting when user clicked a link,
                         put the linked web page into an iframe by using ... target="open-iframe" ...

                         The same goes for main-entry.
                    -->
                    <li>
                        <a href="#" target="open-iframe">About Us</a>
                    </li>
                    <li>
                        <a href="#" target="open-iframe">Portfolio</a>
                    </li>
                    <li>
                        <a href="#" target="open-iframe">Contact</a>
                    </li>

                    <!-- This is the filter menu, to filter and display your works based on class name (usually named after a category) in main-entry.
                         To create filter, type these...
                         <a href="#" class="filter-label" data-filter=".cat-1"> (change .cat-1 accordingly)
                    -->
                    <!-- <li>
                        <a href="#">Filter Work</a>
                        <ul>
                            <li>
                                <a href="#" class="filter-label active">All Category</a>
                            </li>
                            <li>
                                <a href="#" class="filter-label" data-filter=".cat-1">Filter Category 1</a>
                            </li>
                            <li>
                                <a href="#" class="filter-label" data-filter=".cat-2">Filter Category 2</a>
                            </li>
                            <li>
                                <a href="#" class="filter-label" data-filter=".cat-3">Filter Category 3</a>
                            </li>
                        </ul>
                    </li> -->
                    <li>
                        <a href="#">Follow Us On</a>
                        <ul>
                            <li>
                                <a href="#">Facebook</a>
                            </li>
                            <li>
                                <a href="#">Twitter</a>
                            </li>
                            <li>
                                <a href="#">Pinterest</a>
                            </li>
                            <li>
                                <a href="#">Instagram</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="fullscreen tooltip" title="Go Full Screen">
                            <span class="pictogram">&#xe801;</span>
                        </a>
                        <a href="#" class="fullscreenExit tooltip" title="Exit Full Screen">
                            <span class="pictogram">&#xe802;</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
