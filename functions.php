<?php

/**
 * Theme setup.
 */
function tailpress_setup() {
	add_theme_support( 'title-tag' );

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'tailpress' ),
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);

    add_theme_support( 'custom-logo' );
	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );

	add_theme_support( 'editor-styles' );
	add_editor_style( 'css/editor-style.css' );
}

add_action( 'after_setup_theme', 'tailpress_setup' );

/**
 * Add jQuery
 */

add_action( 'init', 'true_jquery_register' );

function true_jquery_register() {
	if ( !is_admin() ) {
		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', ( 'http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js' ), false, null, true );
		wp_enqueue_script( 'jquery' );
	}
}

/**
 * Enqueue theme assets.
 */
function tailpress_enqueue_scripts() {
	$theme = wp_get_theme();

	wp_enqueue_style( 'tailpress', tailpress_asset( 'css/app.css' ), array(),'0.141' );
	wp_enqueue_script( 'tailpress', tailpress_asset( 'js/app.js' ), array(), $theme->get( 'Version' ) );
	if (is_page_template('template-parts/main.php')) { wp_enqueue_script( 'main', get_template_directory_uri() . '/js/animation.js', array('jquery'), '0.36' ); }
}

add_action( 'wp_enqueue_scripts', 'tailpress_enqueue_scripts' );

/**
 * Get asset path.
 *
 * @param string  $path Path to asset.
 *
 * @return string
 */
function tailpress_asset( $path ) {
	if ( wp_get_environment_type() === 'production' ) {
		return get_stylesheet_directory_uri() . '/' . $path;
	}

	return add_query_arg( 'time', time(),  get_stylesheet_directory_uri() . '/' . $path );
}

/**
 * Adds option 'li_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The curren item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_li_class( $classes, $item, $args, $depth ) {
	if ( isset( $args->li_class ) ) {
		$classes[] = $args->li_class;
	}

	if ( isset( $args->{"li_class_$depth"} ) ) {
		$classes[] = $args->{"li_class_$depth"};
	}

	return $classes;
}

add_filter( 'nav_menu_css_class', 'tailpress_nav_menu_add_li_class', 10, 4 );

/**
 * Adds option 'submenu_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The curren item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_submenu_class( $classes, $args, $depth ) {
	if ( isset( $args->submenu_class ) ) {
		$classes[] = $args->submenu_class;
	}

	if ( isset( $args->{"submenu_class_$depth"} ) ) {
		$classes[] = $args->{"submenu_class_$depth"};
	}

	return $classes;
}

add_filter( 'nav_menu_submenu_css_class', 'tailpress_nav_menu_add_submenu_class', 10, 3 );

// Allow SVG
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

	global $wp_version;
	if ( $wp_version !== '4.7.1' ) {
	   return $data;
	}

	$filetype = wp_check_filetype( $filename, $mimes );

	return [
		'ext'             => $filetype['ext'],
		'type'            => $filetype['type'],
		'proper_filename' => $data['proper_filename']
	];

  }, 10, 4 );

  function cc_mime_types( $mimes ){
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
  }
  add_filter( 'upload_mimes', 'cc_mime_types' );

  function fix_svg() {
	echo '<style type="text/css">
		  .attachment-266x266, .thumbnail img {
			   width: 100% !important;
			   height: auto !important;
		  }
		  </style>';
  }
  add_action( 'admin_head', 'fix_svg' );

  /* remove '...' (3 dots) filter */

  remove_filter( 'the_content', 'wptexturize' );

  /* API */

  add_action( 'init', 'rewrite_rule_my' );
  function rewrite_rule_my(){
	  add_rewrite_rule( '^(api)/([^/]*)/?', 'index.php?pagename=$matches[1]&token=$matches[2]', 'top' );
	  add_rewrite_tag( '%token%', '([^&]+)' );
  }

  /* Hide Author of the Page from Snippet */

add_filter( 'oembed_response_data', 'disable_embeds_filter_oembed_response_data_' );
function disable_embeds_filter_oembed_response_data_( $data ) {
    unset($data['author_url']);
    unset($data['author_name']);
    return $data;
}

function find_replace_my_fancy_svg( $items, $args ) {
    $items = str_replace(
        '%DAPP_SVG%',
        '<svg xmlns="http://www.w3.org/2000/svg" width="63" height="26" viewBox="0 0 63 26" fill="none"><rect x="0.794922" y="0.846191" width="62.0141" height="24.5439" rx="12.272" fill="#997B5F"/><path d="M30.52 17.5063C30.5688 18.1899 30.6055 18.7555 30.6299 19.2031C30.6624 19.6507 30.6828 20.0088 30.6909 20.2773C30.6991 20.4076 30.7031 20.5256 30.7031 20.6313C30.7031 20.729 30.6991 20.8307 30.6909 20.9365C30.6828 21.0423 30.6665 21.1237 30.6421 21.1807C30.6177 21.2458 30.5851 21.2905 30.5444 21.3149C30.3247 21.4696 30.0358 21.5469 29.6777 21.5469C29.6615 21.5469 29.5557 21.5469 29.3604 21.5469C29.165 21.5469 28.9575 21.4614 28.7378 21.2905C28.689 21.2498 28.6483 21.2051 28.6157 21.1562C28.5913 21.1074 28.571 21.0342 28.5547 20.9365C28.5384 20.8307 28.5221 20.6802 28.5059 20.4849C28.4896 20.2814 28.4733 20.0088 28.457 19.667C28.4245 19.2031 28.3879 18.7189 28.3472 18.2144C28.3146 17.7017 28.2821 17.2622 28.2495 16.896C28.217 16.5216 28.1925 16.3223 28.1763 16.2979C28.1681 16.2979 28.0623 16.306 27.8589 16.3223C27.6636 16.3304 27.4194 16.3467 27.1265 16.3711C26.8335 16.3874 26.5405 16.4077 26.2476 16.4321C25.9627 16.4565 25.7186 16.481 25.5151 16.5054L24.9414 16.5542L24.8682 18.0557C24.8275 18.9997 24.7786 19.728 24.7217 20.2407C24.6729 20.7453 24.5955 21.1074 24.4897 21.3271C24.384 21.5469 24.2375 21.6974 24.0503 21.7788C23.8306 21.8765 23.505 21.9334 23.0737 21.9497C22.9761 21.9578 22.8825 21.9619 22.793 21.9619C22.4919 21.9619 22.2437 21.9294 22.0483 21.8643C21.5926 21.6852 21.2996 21.3841 21.1694 20.9609C21.0799 20.6029 21.0229 19.96 20.9985 19.0322C20.9904 18.6335 20.9863 18.2184 20.9863 17.7871C20.9863 17.2174 20.9985 16.5094 21.0229 15.6631C21.0555 14.8167 21.1206 13.9826 21.2183 13.1606C21.438 11.4272 21.7798 9.84847 22.2437 8.42432C22.7075 7.00016 23.208 5.98698 23.7451 5.38477C24.2578 4.86393 24.8804 4.52214 25.6128 4.35938C25.8813 4.30241 26.1458 4.27393 26.4062 4.27393C26.8538 4.27393 27.2852 4.35938 27.7002 4.53027C28.2373 4.71745 28.6686 5.18945 28.9941 5.94629C29.3278 6.69499 29.6045 7.97266 29.8242 9.7793C30.0521 11.5778 30.284 14.1535 30.52 17.5063ZM28.0054 15.0161C28.0135 14.9998 28.0176 14.9591 28.0176 14.894C28.0176 14.7394 27.9891 14.418 27.9321 13.9297C27.8833 13.4414 27.7979 12.7985 27.6758 12.001C27.5618 11.1953 27.4398 10.4222 27.3096 9.68164C27.1794 8.94108 27.0654 8.37956 26.9678 7.99707C26.8538 7.54134 26.7643 7.24023 26.6992 7.09375C26.6667 7.00423 26.6341 6.95947 26.6016 6.95947C26.5853 6.95947 26.569 6.97575 26.5527 7.0083C26.4958 7.10596 26.4103 7.35824 26.2964 7.76514C26.1825 8.17204 26.0645 8.61149 25.9424 9.0835C25.8285 9.54736 25.7471 9.91764 25.6982 10.1943C25.6006 10.7396 25.4867 11.4964 25.3564 12.4648C25.2262 13.4251 25.1408 14.1616 25.1001 14.6743L25.0391 15.3579H25.5273C25.6657 15.3579 25.8325 15.3498 26.0278 15.3335C26.2231 15.3172 26.3981 15.3009 26.5527 15.2847C27.4316 15.1545 27.9159 15.0649 28.0054 15.0161Z" fill="#C9D6E3"/><path d="M42.2021 9.27881C42.3324 9.83219 42.3975 10.4222 42.3975 11.0488C42.3975 11.6755 42.3324 12.2288 42.2021 12.709C41.307 15.3783 39.5003 16.9123 36.7822 17.311L36.3428 17.3599L36.2817 18.8247C36.2573 19.4351 36.2288 19.9071 36.1963 20.2407C36.1719 20.5662 36.1353 20.8022 36.0864 20.9487C36.0376 21.0871 35.9725 21.1847 35.8911 21.2417C35.647 21.4126 35.293 21.5306 34.8291 21.5957C34.6582 21.6201 34.4954 21.6323 34.3408 21.6323C34.0641 21.6323 33.8118 21.5998 33.584 21.5347C33.112 21.4045 32.8353 21.2498 32.7539 21.0708C32.6644 20.9325 32.5993 20.2896 32.5586 19.1421C32.526 17.9865 32.5098 16.131 32.5098 13.5757C32.5098 8.15576 32.5993 5.31152 32.7783 5.04297C32.8109 4.9209 32.8638 4.82324 32.937 4.75C33.0103 4.67676 33.1283 4.59945 33.291 4.51807C33.4131 4.45296 33.5311 4.4082 33.645 4.38379C33.7671 4.35124 33.938 4.33089 34.1577 4.32275C34.3856 4.30648 34.7192 4.29427 35.1587 4.28613C35.5981 4.27799 35.9399 4.27799 36.1841 4.28613C36.4282 4.28613 36.6357 4.30241 36.8066 4.33496C36.9775 4.35938 37.1851 4.40413 37.4292 4.46924C39.9032 5.16911 41.4941 6.7723 42.2021 9.27881ZM39.8218 10.8901V10.7559C39.8218 10.235 39.7729 9.77523 39.6753 9.37646C39.5776 8.96956 39.3864 8.49756 39.1016 7.96045C38.8656 7.51286 38.54 7.07747 38.125 6.6543C37.71 6.23112 37.2949 5.9056 36.8799 5.67773C36.7253 5.59635 36.591 5.53125 36.4771 5.48242C36.3794 5.44987 36.3184 5.43359 36.2939 5.43359H36.2817V5.51904C36.2817 5.56787 36.2817 5.66553 36.2817 5.81201C36.2899 5.95036 36.3021 6.15381 36.3184 6.42236C36.3346 6.72347 36.3509 7.37858 36.3672 8.3877C36.3835 9.39681 36.3916 10.528 36.3916 11.7812C36.3916 14.7191 36.4242 16.188 36.4893 16.188C36.5137 16.188 36.5706 16.1676 36.6602 16.127C36.7578 16.0863 36.8636 16.0374 36.9775 15.9805C38.8249 15.0283 39.7729 13.3315 39.8218 10.8901Z" fill="#C9D6E3"/><path d="M53.6035 9.27881C53.7337 9.83219 53.7988 10.4222 53.7988 11.0488C53.7988 11.6755 53.7337 12.2288 53.6035 12.709C52.7083 15.3783 50.9017 16.9123 48.1836 17.311L47.7441 17.3599L47.6831 18.8247C47.6587 19.4351 47.6302 19.9071 47.5977 20.2407C47.5732 20.5662 47.5366 20.8022 47.4878 20.9487C47.439 21.0871 47.3739 21.1847 47.2925 21.2417C47.0483 21.4126 46.6943 21.5306 46.2305 21.5957C46.0596 21.6201 45.8968 21.6323 45.7422 21.6323C45.4655 21.6323 45.2132 21.5998 44.9854 21.5347C44.5133 21.4045 44.2367 21.2498 44.1553 21.0708C44.0658 20.9325 44.0007 20.2896 43.96 19.1421C43.9274 17.9865 43.9111 16.131 43.9111 13.5757C43.9111 8.15576 44.0007 5.31152 44.1797 5.04297C44.2122 4.9209 44.2651 4.82324 44.3384 4.75C44.4116 4.67676 44.5296 4.59945 44.6924 4.51807C44.8145 4.45296 44.9325 4.4082 45.0464 4.38379C45.1685 4.35124 45.3394 4.33089 45.5591 4.32275C45.7869 4.30648 46.1206 4.29427 46.5601 4.28613C46.9995 4.27799 47.3413 4.27799 47.5854 4.28613C47.8296 4.28613 48.0371 4.30241 48.208 4.33496C48.3789 4.35938 48.5864 4.40413 48.8306 4.46924C51.3045 5.16911 52.8955 6.7723 53.6035 9.27881ZM51.2231 10.8901V10.7559C51.2231 10.235 51.1743 9.77523 51.0767 9.37646C50.979 8.96956 50.7878 8.49756 50.5029 7.96045C50.2669 7.51286 49.9414 7.07747 49.5264 6.6543C49.1113 6.23112 48.6963 5.9056 48.2812 5.67773C48.1266 5.59635 47.9924 5.53125 47.8784 5.48242C47.7808 5.44987 47.7197 5.43359 47.6953 5.43359H47.6831V5.51904C47.6831 5.56787 47.6831 5.66553 47.6831 5.81201C47.6912 5.95036 47.7035 6.15381 47.7197 6.42236C47.736 6.72347 47.7523 7.37858 47.7686 8.3877C47.7848 9.39681 47.793 10.528 47.793 11.7812C47.793 14.7191 47.8255 16.188 47.8906 16.188C47.915 16.188 47.972 16.1676 48.0615 16.127C48.1592 16.0863 48.265 16.0374 48.3789 15.9805C50.2262 15.0283 51.1743 13.3315 51.2231 10.8901Z" fill="#C9D6E3"/></svg>',
        $items
    );

    return $items;
}
add_filter( 'wp_nav_menu_items', 'find_replace_my_fancy_svg', 10, 2 );
