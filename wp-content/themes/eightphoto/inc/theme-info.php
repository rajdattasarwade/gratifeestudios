<?php
/**
 * 
 * Theme Info EightMedi Lite
 * 
 */

function eightphoto_customizer_themeinfo( $wp_customize ) {
	$wp_customize->add_section( 'theme_info' , array(
		'title'       => __( 'Theme Information' , 'eightphoto' ),
		'priority'    => 500,
		));

	$wp_customize->add_setting('theme_info_theme',array(
		'default' => '',
		'sanitize_callback' => 'eightmedi_sanitize_text',
		));

	$eightphoto_desc_theme_opt = "";
	$eightphoto_desc_theme_opt .= "<strong>".__('Need help?','eightphoto')."</strong><br />";
	$eightphoto_desc_theme_opt .= "<span>".__('View documentation','eightphoto').' : </span> <a target="_blank" href="'.esc_url('http://8degreethemes.com/documentation/8medi-lite/').'">'.__('here','eightphoto').'</a> <br />';
	$eightphoto_desc_theme_opt .= "<span>".__('Support forum','eightphoto').' : </span><a target="_blank" href="'.esc_url('https://8degreethemes.com/support/forum/free-themes/eightphoto/').'">'.__('here','eightphoto').'</a> <br />';
	$eightphoto_desc_theme_opt .= "<span>".__('View Video tutorials','eightphoto').' : </span><a target="_blank" href="'.esc_url('https://www.youtube.com/watch?list=PLyv2_zoytm1ifr1RwkKCsePhS6v5ynylV&v=HhSeA4TyvXQ').'">'.__('here','eightphoto').'</a> <br />';
	$eightphoto_desc_theme_opt .= "<span>".__('Email us','eightphoto').' : </span><a target="_blank" href="'.esc_url('mailto:support@8degreethemes.com').'">support@8degreethemes.com</a> <br />';
	$eightphoto_desc_theme_opt .= "<span>".__('More Details','eightphoto').' : </span><a target="_blank" href="'.esc_url('http://8degreethemes.com/').'">'.__('here','eightphoto').'</a>';

	$wp_customize->add_control( new eightphoto_Theme_Info_Custom_Control( $wp_customize ,'theme_info_theme',array(
		'label' => __( 'About EightPhoto' , 'eightphoto' ),
		'section' => 'theme_info',
		'description' => $eightphoto_desc_theme_opt
		)));

	$wp_customize->add_setting('theme_info_useful_plugins',array(
		'default' => '',
		'sanitize_callback' => 'eightmedi_sanitize_text',
		));

	$eightphoto_desc_theme_opt = '<a class="red" target="_blank" href="'.esc_url('https://wpall.club/').'">'.__('WordPress Tutorials and Resources','eightphoto').'</a> <br />';

	$wp_customize->add_control( new eightphoto_Theme_Info_Custom_Control( $wp_customize ,'theme_info_useful_plugins',array(
		'label' => __( 'WordPress Resources' , 'eightphoto' ),
		'section' => 'theme_info',
		'description' => $eightphoto_desc_theme_opt
		)));

}
add_action( 'customize_register', 'eightphoto_customizer_themeinfo' );


if(class_exists( 'WP_Customize_control')){

	class eightphoto_Theme_Info_Custom_Control extends WP_Customize_Control
	{
    	/**
       	* Render the content on the theme customizer page
       	*/
       	public function render_content()
       	{
       		?>
       		<label>
       			<strong class="customize-text_editor"><?php echo esc_html( $this->label ); ?></strong>
       			<br />
       			<span class="customize-text_editor_desc">
       				<?php echo wp_kses_post( $this->description ); ?>
       			</span>
       		</label>
       		<?php
       	}
    }//editor close
}//class close