<?php
/**
 * Template Name: Static Front Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<!DOCTYPE html>
<html>
<head>
<style>
body, html {
  height: 100%;
  margin: 0;
  font: 400 15px/1.8 "Lato", sans-serif;
  color: #777;
}

.bgimg-1, .bgimg-2, .bgimg-3 {
  position: relative;
  opacity: 0.65;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
.bgimg-1 {
  background-image: url("<?php echo esc_url( get_template_directory_uri() ); ?>/images/fullpageimage.jpg");
  height: 100%;
}

.caption {
  position: absolute;
  left: 0;
  top: 70%;
  width: 100%;
  text-align: center;
  color: #000;
}

.caption span.border {
  background-color: #111;
  color: #fff;
  padding: 18px;
  font-size: 25px;
  letter-spacing: 10px;
}

h3 {
  letter-spacing: 5px;
  text-transform: uppercase;
  font: 20px "Lato", sans-serif;
  color: #111;
}
</style>
</head>
<body>

<div class="bgimg-1">
  <div class="caption">
    <a href="<?php echo get_permalink(get_page_by_path('portfolio')); ?>"><span class="border">Enter Here</span></a>
  </div>
</div>
</body>
</html>