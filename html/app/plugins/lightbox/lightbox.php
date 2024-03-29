<?php
/*
Plugin Name: Huge IT lightbox
Plugin URI: http://huge-it.com/lightbox
Description: Lightbox is the perfect tool for viewing photos.
Version: 10.0
Author: Huge-IT
Author URI: http://huge-it.com
License: GPL
*/

add_action('admin_menu', 'huge_it_lightbox_options_panel');
register_activation_hook(__FILE__, 'hugeit_lightbox_activate');
define('HUGEIT_PLUGIN_DIR', WP_PLUGIN_DIR . "/" . plugin_basename(dirname(__FILE__)));

function huge_it_lightbox_options_panel()
{
    add_menu_page('Theme page title', 'Huge IT Lightbox', 'manage_options', 'huge_it_light_box', 'huge_it_light_box', plugins_url('images/huge_it_lightboxLogoHover-for_menu.png', __FILE__));
	$page_option = add_submenu_page('huge_it_light_box', 'Lightbox', 'Lightbox', 'manage_options', 'huge_it_light_box', 'huge_it_light_box');
    add_submenu_page('huge_it_light_box', 'Featured Plugins', 'Featured Plugins', 'manage_options', 'huge_it_featured_plugins', 'huge_it_featured_plugins');
	add_action('admin_print_styles-' . $page_option, 'huge_it_lightbox_option_admin_script');
	add_action('admin_print_styles-' . $page_option, 'huge_it_lightbox_option_admin_script');

}


function huge_it_lightbox_option_admin_script()
{
        wp_enqueue_media();
	wp_enqueue_script("jquery_old", "http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js", FALSE);

	wp_enqueue_script("simple_slider_js",  plugins_url("js/admin/simple-slider.js", __FILE__), FALSE);
	wp_enqueue_style("simple_slider_css", plugins_url("css/admin/simple-slider.css", __FILE__), FALSE);
	
	wp_enqueue_style("admin_css", plugins_url("css/admin/admin.style.css", __FILE__), FALSE);
	wp_enqueue_script("admin_js", plugins_url("js/admin/admin.js", __FILE__), FALSE);
	wp_enqueue_script('param_block2', plugins_url("js/admin/jscolor/jscolor.js", __FILE__));
}

function huge_it_design_customization()
{
	switch ($_GET['task']) {
	default:
		include_once("admin/controller/huge_it_design_customization.php");
		$controller = new Controller();
		$controller->invoke();
		break;
	}
}
function huge_it_light_box()
{
	switch ($_GET['task']) {
	default:
		include_once("admin/controller/huge_it_light_box.php");
		$controller = new Controller();
		$controller->invoke();
		break;
	}
}
function huge_it_featured_plugins()
{
	switch ($_GET['task']) {
	default:
		include_once("admin/controller/huge_it_featured_plugins.php");
		break;
	}
}
function hugeit_lightbox_activate()
{
	include_once("admin/controller/install_base.php");
}
function huge_it_scripts() {

}
add_action( 'wp_enqueue_scripts', 'huge_it_scripts' );

function huge_lightbox_header()
{
	global $wpdb;
	$query="SELECT * FROM ".$wpdb->prefix."hugeit_lightbox";
    $rowspar = $wpdb->get_results($query);
    $paramssld = array();
    foreach ($rowspar as $rowpar) {
        $key = $rowpar->name;
        $value = $rowpar->value;
        $paramssld[$key] = $value;
    }
?>
<script>
	var lightbox_transition = '<?php echo $paramssld['light_box_transition'];?>';
	var lightbox_speed = <?php echo $paramssld['light_box_speed'];?>;
	var lightbox_fadeOut = <?php echo $paramssld['light_box_fadeout'];?>;
	var lightbox_title = <?php echo $paramssld['light_box_title'];?>;
	var lightbox_scalePhotos = <?php echo $paramssld['light_box_scalephotos'];?>;
	var lightbox_scrolling = <?php echo $paramssld['light_box_scrolling'];?>;
	var lightbox_opacity = <?php echo ($paramssld['light_box_opacity']/100)+0.001;?>;
	var lightbox_open = <?php echo $paramssld['light_box_open'];?>;
	var lightbox_returnFocus = <?php echo $paramssld['light_box_returnfocus'];?>;
	var lightbox_trapFocus = <?php echo $paramssld['light_box_trapfocus'];?>;
	var lightbox_fastIframe = <?php echo $paramssld['light_box_fastiframe'];?>;
	var lightbox_preloading = <?php echo $paramssld['light_box_preloading'];?>;
	var lightbox_overlayClose = <?php echo $paramssld['light_box_overlayclose'];?>;
	var lightbox_escKey = <?php echo $paramssld['light_box_esckey'];?>;
	var lightbox_arrowKey = <?php echo $paramssld['light_box_arrowkey'];?>;
	var lightbox_loop = <?php echo $paramssld['light_box_loop'];?>;
	var lightbox_closeButton = <?php echo $paramssld['light_box_closebutton'];?>;
	var lightbox_previous = "<?php echo $paramssld['light_box_previous'];?>";
	var lightbox_next = "<?php echo $paramssld['light_box_next'];?>";
	var lightbox_close = "<?php echo $paramssld['light_box_close'];?>";
	var lightbox_html = <?php echo $paramssld['light_box_html'];?>;
	var lightbox_photo = <?php echo $paramssld['light_box_photo'];?>;
	var lightbox_width = '<?php if($paramssld['light_box_size_fix'] == 'false'){ echo '';} else { echo $paramssld['light_box_width']; } ?>';
	var lightbox_height = '<?php if($paramssld['light_box_size_fix'] == 'false'){ echo '';} else { echo $paramssld['light_box_height']; } ?>';
	var lightbox_innerWidth = '<?php echo $paramssld['light_box_innerwidth'];?>';
	var lightbox_innerHeight = '<?php echo $paramssld['light_box_innerheight'];?>';
	var lightbox_initialWidth = '<?php echo $paramssld['light_box_initialwidth'];?>';
	var lightbox_initialHeight = '<?php echo $paramssld['light_box_initialheight'];?>';
	var lightbox_maxWidth = <?php if($paramssld['light_box_size_fix'] == 'true'){ echo 'false';} else { echo $paramssld['light_box_maxwidth']; } ?>;
	var lightbox_maxHeight = <?php if($paramssld['light_box_size_fix'] == 'true'){ echo 'false';} else { echo $paramssld['light_box_maxheight']; } ?>;
	var lightbox_slideshow = <?php echo $paramssld['light_box_slideshow'];?>;
	var lightbox_slideshowSpeed = <?php echo $paramssld['light_box_slideshowspeed'];?>;
	var lightbox_slideshowAuto = <?php echo $paramssld['light_box_slideshowauto'];?>;
	var lightbox_slideshowStart = "<?php echo $paramssld['light_box_slideshowstart'];?>";
	var lightbox_slideshowStop = "<?php echo $paramssld['light_box_slideshowstop'];?>";
	var lightbox_fixed = <?php echo $paramssld['light_box_fixed'];?>;
        var logo_pos = <?php echo $paramssld['lightbox_watermark_position'];?>;
        var logo_image_url = "<?php echo $paramssld['watermark_img_src'];?>";
        var logo_width = <?php echo $paramssld['watermark_width'];?>;
        var logo_opacity = <?php echo $paramssld['watermark_transparency'];?>;
        var logo_show = <?php echo $paramssld['watermarket_image'];?>;
	
	
	<?php
	$pos = $paramssld['slider_title_position'];
	switch($pos){ 
	case 1:
	?>
		var lightbox_top = '10%';
		var lightbox_bottom = false;
		var lightbox_left = '10%';
		var lightbox_right = false;
	<?php
	break;	
	case 1:
	?>
		var lightbox_top = '10%';
		var lightbox_bottom = false;
		var lightbox_left = '10%';
		var lightbox_right = false;
	<?php
	break;	
	case 2:
	?>
		var lightbox_top = '10%';
		var lightbox_bottom = false;
		var lightbox_left = false;
		var lightbox_right = false;
	<?php
	break;	
	case 3:
	?>
		var lightbox_top = '10%';
		var lightbox_bottom = false;
		var lightbox_left = false;
		var lightbox_right = '10%';
	<?php
	break;
	case 4:
	?>
		var lightbox_top = false;
		var lightbox_bottom = false;
		var lightbox_left = '10%';
		var lightbox_right = false;
	<?php
	break;	
	case 5:
	?>
		var lightbox_top = false;
		var lightbox_bottom = false;
		var lightbox_left = false;
		var lightbox_right = false;
	<?php
	break;	
	case 6:
	?>
		var lightbox_top = false;
		var lightbox_bottom = false;
		var lightbox_left = false;
		var lightbox_right = '10%';
	<?php
	break;	
	case 7:
	?>
		var lightbox_top = false;
		var lightbox_bottom = '10%';
		var lightbox_left = '10%';
		var lightbox_right = false;
	<?php
	break;	
	case 8:
	?>
		var lightbox_top = false;
		var lightbox_bottom = '10%';
		var lightbox_left = false;
		var lightbox_right = false;
	<?php
	break;	
	case 9:
	?>
		var lightbox_top = false;
		var lightbox_bottom = '10%';
		var lightbox_left = false;
		var lightbox_right = '10%';
	<?php
	break;	
	} ?>
	
	var lightbox_reposition = <?php echo $paramssld['light_box_reposition'];?>;
	var lightbox_retinaImage = <?php echo $paramssld['light_box_retinaimage'];?>;
	var lightbox_retinaUrl = <?php echo $paramssld['light_box_retinaurl'];?>;
	var lightbox_retinaSuffix = "<?php echo $paramssld['light_box_retinasuffix'];?>";
</script>
<?php	
	wp_enqueue_script(
		'custom-js-1',
		plugins_url( '/js/frontend/custom.js' , __FILE__ ),
		array( 'jquery' )
	);
	wp_enqueue_script(
		'colorbox-js',
		plugins_url( '/js/frontend/jquery.colorbox.js' , __FILE__ ),
		array( 'jquery' )
	);
	if($paramssld['light_box_style'] != 6){
	wp_enqueue_style( 'style-name',plugins_url( '/css/frontend/colorbox-'.$paramssld['light_box_style'].'.css' , __FILE__ ) );
	}
	else
	{
	?><style><?php
	include_once('/css/frontend/colorbox-'.$paramssld['light_box_style'].'.css.php');
	?></style><?php
	}
}

add_action('wp_head', 'huge_lightbox_header');
function add_title_attachment_link($link, $id = null) {
$id = intval( $id );
$_post = get_post( $id );
$post_title = esc_attr( $_post->post_title );
return str_replace('<a href', '<a title="'. $post_title .'" href', $link);
}
add_filter('wp_get_attachment_link', 'add_title_attachment_link', 10, 2);
?>