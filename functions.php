<?php 
	function init_func_theme(){
		add_theme_support( 'custom-logo' ,array(
			'height'=>53,
			'width'=>254,
			'flex-height' => true,
   			'flex-width'  => true
			));
		register_nav_menu('Menu','Главное меню'); 
	}


	add_action('after_setup_theme','init_func_theme');
 function style_script_load(){

	//wow
	wp_enqueue_script("wow", get_template_directory_uri() .'/assets/wow/wow.min.js');
	//font-awesome
	 wp_enqueue_style( 'font-awesome',  get_template_directory_uri() ."/assets/font-awesome-4.7.0/css/font-awesome.min.css");
	//bootstrap
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() ."/assets/bootstrap/css/bootstrap.min.css");
	//animate
	wp_enqueue_style( 'animate_css', get_template_directory_uri() ."/assets/animate/animate.css");
	wp_enqueue_style( 'animate_set', get_template_directory_uri() ."/assets/animate/set.css");
	// gallery
	wp_enqueue_style( 'gallery', get_template_directory_uri() ."/assets/gallery/blueimp-gallery.min.css");
	//style
	wp_enqueue_style( 'style', get_template_directory_uri() ."/assets/style.css");
	//touchSwipe.min
	wp_enqueue_script("touchSwipe", get_template_directory_uri() .'/assets/mobile/touchSwipe.min.js',array('jquery'),false,true);
	//jquery.blueimp-gallery.min
	wp_enqueue_script("jqgallery", get_template_directory_uri() .'/assets/gallery/jquery.blueimp-gallery.min.js',array('jquery'),false,true);
	//respond
	wp_enqueue_script("respond", get_template_directory_uri() .'/assets/respond/respond.js',array('jquery'),false,true);
	//myscript
	wp_enqueue_script("myscript", get_template_directory_uri() .'/assets/myscript.js',array('jquery'),false,true);
}
add_action( 'wp_enqueue_scripts', 'style_script_load' );

?>
