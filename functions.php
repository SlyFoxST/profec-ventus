<?php
/**
 * profec-ventus functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package profec-ventus
 */

pll_register_string('Товаров, соответствующих вашему запросу, не обнаружено.','Товаров, соответствующих вашему запросу, не обнаружено.','Строки');
pll_register_string('CHECKOUT','CHECKOUT','Строки');
pll_register_string('Last viewed','Last viewed','Строки');
pll_register_string('Language','Language','Строки');
pll_register_string('Produc...','Produc...','Строки');
pll_register_string('Kalibrierservice','Kalibrierservice','Строки');
pll_register_string('Akkreditierte Dienstleistungen (DAkkS / ISO)','Akkreditierte Dienstleistungen (DAkkS / ISO)','Строки');
pll_register_string('Sensoren Messtechni','Sensoren Messtechni','Строки');
pll_register_string('Windmessmasten','Windmessmasten','Строки');
pll_register_string('Alle','Alle','Строки');
pll_register_string('Show Cart','Show Cart','Строки');
pll_register_string('Total','Total','Строки');
pll_register_string('Continue shoping','Continue shoping','Строки');
pll_register_string('Copys','Copys','Строки');
pll_register_string('Copy','Copy','Строки');
pll_register_string('Unit price:','Unit price:','Строки');
pll_register_string('Model No.:','Model No.:','Строки');
pll_register_string('Sitemap','Sitemap','Строки');
pll_register_string('Shopping Cart','Shopping Cart','Строки');
pll_register_string('Sitemap','Sitemap','Строки');
pll_register_string('Search','Search','Строки');
pll_register_string('Login','Login','Строки');
pll_register_string('Change languege','Change languege','Строки');
pll_register_string('Change currency','Change currency','Строки');
pll_register_string('Wish list','Wish list','Строки');
pll_register_string('Our advice','Our advice','Строки');
pll_register_string('Show cart','Show cart','Строки');
pll_register_string('New products','New products','Строки');
pll_register_string('Bestsellers','Bestsellers','Строки');
pll_register_string('Downloads','Downloads','Строки');
pll_register_string('Back','Back','Строки');
pll_register_string('Add to cart','Add to cart','Строки');
pll_register_string('One Stop Wind Shop, powered by','One Stop Wind Shop, powered by','Строки');
pll_register_string('NEW CUSTOMER','NEW CUSTOMER','Строки');
pll_register_string('Forgot password','Forgot password','Строки');
pll_register_string('I AM A CUSTOMER','I AM A CUSTOMER','Строки');
pll_register_string('Register','Register','Строки');
pll_register_string('If you register at our store you can shop more quickly and obtain info on your order status and a history of your previous orders at any time.','If you register at our store you can shop more quickly and obtain info on your order status and a history of your previous orders at any time.','Строки');
pll_register_string('Save me','Save me','Строки');
pll_register_string('Log in','Log in','Строки');
define('PATH','http://coder.cx.ua/coder.profec/');
if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'profec_ventus_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function profec_ventus_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on profec-ventus, use a find and replace
		 * to change 'profec-ventus' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'profec-ventus', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'profec-ventus' ),
				'front_sidebar' => 'Sidebar главной',
				'header_menu' => 'Header',
				'footer_menu1' => 'Footer1',
				'footer_menu2' => 'Footer2',
			)
		);


		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'profec_ventus_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'profec_ventus_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function profec_ventus_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'profec_ventus_content_width', 640 );
}
add_action( 'after_setup_theme', 'profec_ventus_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function profec_ventus_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'profec-ventus' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'profec-ventus' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'profec_ventus_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function profec_ventus_scripts() {
	wp_enqueue_style( 'profec-ventus-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'profec-ventus-style', 'rtl', 'replace' );
	wp_enqueue_style( 'corporates-style', get_stylesheet_uri() );
	wp_deregister_script('jquery');
	wp_register_script( 'jquery', get_template_directory_uri().'/js/jquery-3.2.1.min.js',true, null, true);
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'core', get_template_directory_uri().'/js/script.core.js', array('jquery'), false, true);
	wp_enqueue_script( 'pjax', get_template_directory_uri().'/js/jquery.pjax.js', array('jquery'), false, true);
	wp_enqueue_script( 'slick', get_template_directory_uri().'/js/slick.min.js', array('jquery'), false, true);	
	wp_enqueue_script( 'lazyload', get_template_directory_uri().'/plugins/lazyload/jquery.lazy.js', array('jquery'), false, true);	

	wp_enqueue_style( 'reset', get_template_directory_uri() . '/css/reset.css');
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
	wp_enqueue_style( 'style-shop', get_template_directory_uri() . '/css/style-shop.css');
	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css');
	wp_enqueue_style( 'fonts', get_template_directory_uri() . '/fonts/font-awesome/css/font-awesome.min.css');
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/css/slick.css');
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'profec_ventus_scripts' );
add_action( 'wp_enqueue_scripts', 'my_enqueue' );
function my_enqueue() {
	wp_enqueue_script( 'ajax-script', get_template_directory_uri() . '/js/script.init.js', array('jquery') );
	wp_localize_script( 'ajax-script', 'my_ajax_object',
		array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
}


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

define('IMG_SIZE', [
	'programming' => [
		'width' =>200,
		'height' => 280,
		'crop' => true
	],
	'event-thumbnail' => [
		'width' => 370,
		'height' => 220,
		'crop' => true
	],
	'carousel' => [
		'width' => 229,
		'height' => 420,
		'crop' => true
	],
	'product' => [
		'width' => 385,
		'height' => 230,
		'crop'  => true
	],
	'icon' => [
		'width' => 90,
		'height' => 90,
		'crop'  => true,
	],
	'slider-big' => [
		'width' => 930,
		'height' => 660,
		'crop'  => true,
	]
]);
function wp_img_resize( $url, $size = '') {

	if(!$url OR !$size) return $url;

	$url = str_replace('https:', 'http:', $url);
	if(mb_strpos($url, '-150x150.') !== false){

		$url = str_replace('-150x150.', '.', $url);
	}

	if(is_array($size)){
		$size_data = $size;
	}
	else{
		$size_data = IMG_SIZE[$size] ?? [];
	}

	if(!$size_data || !isset($size_data['width']) || !$size_data['width'] || mb_strpos(basename($url), '.svg') !== false) return $url;


	$width = (int)$size_data['width'];
	$height = isset($size_data['height']) ? $size_data['height'] : null;
	$crop = isset($size_data['crop']) ? $size_data['crop'] : null;
	$single = isset($size_data['crop']) ? $size_data['crop'] : true;

	$upload_info = wp_upload_dir();
	$upload_dir = $upload_info['basedir'];
	$upload_url = str_replace('https:', 'http:', $upload_info['baseurl']);



	if(mb_strpos( $url, $upload_url ) === false) return false;

	$rel_path = str_replace( $upload_url, '', $url);
	$img_path = $upload_dir . $rel_path;

	if( !file_exists($img_path) OR !getimagesize($img_path) ) return false;

	$info = pathinfo($img_path);
	$ext = $info['extension'];
	list($orig_w,$orig_h) = getimagesize($img_path);

	$dims = image_resize_dimensions($orig_w, $orig_h, $width, $height, $crop);
	$dst_w = $dims[4];
	$dst_h = $dims[5];

	$suffix = "{$dst_w}x{$dst_h}";
	$dst_rel_path = str_replace( '.'.$ext, '', $rel_path);
	$destfilename = "{$upload_dir}{$dst_rel_path}-{$suffix}.{$ext}";

	if(!$dst_h) {
		$img_url = $url;
		$dst_w = $orig_w;
		$dst_h = $orig_h;
	} elseif(file_exists($destfilename) && getimagesize($destfilename)) {
		$img_url = "{$upload_url}{$dst_rel_path}-{$suffix}.{$ext}";
	} else {
		$resized_img_path = image_resize( $img_path, $width, $height, $crop );
		if(!is_wp_error($resized_img_path)) {
			$resized_rel_path = str_replace( $upload_dir, '', $resized_img_path);
			$img_url = $upload_url . $resized_rel_path;
		} else {
			return false;
		}
	}
	if($single) {
		$image = $img_url;
	} else {
		$image = array (
			0 => $img_url,
			1 => $dst_w,
			2 => $dst_h
		);
	}

    /*if($size == 'thumb-max'){
        global $post;
        print_array_server_die(wp_get_attachment_image_url(get_post_meta($post->ID,'thumb_max',true)));
    }*/


    return $image;
}

/*  WOOCOMMERCE  */
add_action( 'after_setup_theme', 'woocommerce_support' );


/*  WOOCOMMERCE  */
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
	add_theme_support('woocommerce');
}


/**
 * Хлебные крошки для WordPress (breadcrumbs)
 *
 * @param  string [$sep  = '']      Разделитель. По умолчанию ' » '
 * @param  array  [$l10n = array()] Для локализации. См. переменную $default_l10n.
 * @param  array  [$args = array()] Опции. См. переменную $def_args
 * @return string Выводит на экран HTML код
 *
 * version 3.3.2
 */
function kama_breadcrumbs( $sep = ' » ', $l10n = array(), $args = array() ){
	$lng = pll_current_language();
	$kb = new Kama_Breadcrumbs;
	$lng = pll_current_language();
	if($lng == 'en'){
		$home = "Main page";
	}
	elseif($lng == 'uk'){
		$home = "Головна";
	}
	elseif($lng == 'ru'){
		$home = "Главная";
	}
	elseif($lng == 'de'){
		$home = "Main page";
	}
	$l10n = array(
		'home'       => $home,
		'paged'      => 'Страница %d',
		'_404'       => 'Ошибка 404',
		'search'     => 'Результаты поиска по запросу - <b>%s</b>',
		'author'     => 'Архив автора: <b>%s</b>',
		'year'       => 'Архив за <b>%d</b> год',
		'month'      => 'Архив за: <b>%s</b>',
		'day'        => '',
		'attachment' => 'Медиа: %s',
		'tag'        => 'Записи по метке: <b>%s</b>',
		'tax_tag'    => '%1$s из "%2$s" по тегу: <b>%3$s</b>',
	);
	echo $kb->get_crumbs( $sep, $l10n, $args );
}

class Kama_Breadcrumbs {
	public $arg;
	static $l10n = array(
		'home'       => 'Главная',
		'paged'      => 'Страница %d',
		'_404'       => 'Ошибка 404',
		'search'     => 'Результаты поиска по запросу - <b>%s</b>',
		'author'     => 'Архив автора: <b>%s</b>',
		'year'       => 'Архив за <b>%d</b> год',
		'month'      => 'Архив за: <b>%s</b>',
		'day'        => '',
		'attachment' => 'Медиа: %s',
		'tag'        => 'Записи по метке: <b>%s</b>',
		'tax_tag'    => '%1$s из "%2$s" по тегу: <b>%3$s</b>',
	);
	static $args = array(
		'on_front_page'   => true,
		'show_post_title' => true,
		'show_term_title' => true,
		'title_patt'      => '<span class="kb_title">%s</span>',
		'last_sep'        => true,
		'markup'          => 'schema.org',
		'priority_tax'    => array('category'),
		'priority_terms'  => array(),
		'nofollow' => false,
		'sep'             => '',
		'linkpatt'        => '',
		'pg_end'          => '',
	);
	function get_crumbs( $sep, $l10n, $args ){
		global $post, $wp_query, $wp_post_types;
		self::$args['sep'] = $sep;
		$loc = (object) array_merge( apply_filters('kama_breadcrumbs_default_loc', self::$l10n ), $l10n );
		$arg = (object) array_merge( apply_filters('kama_breadcrumbs_default_args', self::$args ), $args );
		$arg->sep = '<span class="kb_sep">'. $arg->sep .'</span>'; // дополним
		$sep = & $arg->sep;
		$this->arg = & $arg;
		if(1){
			$mark = & $arg->markup;
			if( ! $mark ) $mark = array(
				'wrappatt'  => '<div class="kama_breadcrumbs">%s</div>',
				'linkpatt'  => '<a href="%s">%s</a>',
				'sep_after' => '',
			);
				elseif( $mark === 'rdf.data-vocabulary.org' ) $mark = array(
					'wrappatt'   => '<div class="kama_breadcrumbs" prefix="v: http://rdf.data-vocabulary.org/#">%s</div>',
					'linkpatt'   => '<span typeof="v:Breadcrumb"><a href="%s" rel="v:url" property="v:title">%s</a>',
				'sep_after'  => '</span>', // закрываем span после разделителя!
			);
					elseif( $mark === 'schema.org' ) $mark = array(
						'wrappatt'   => '<div class="kama_breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">%s</div>',
						'linkpatt'   => '<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="%s" itemprop="item"><span itemprop="name">%s</span></a></span>',
						'sep_after'  => '',
					);

						elseif( ! is_array($mark) )
							die( __CLASS__ .': "markup" parameter must be array...');

						$wrappatt  = $mark['wrappatt'];
						$arg->linkpatt  = $arg->nofollow ? str_replace('<a ','<a rel="nofollow"', $mark['linkpatt']) : $mark['linkpatt'];
						$arg->sep      .= $mark['sep_after']."\n";
					}

					$linkpatt = $arg->linkpatt;
					$q_obj = get_queried_object();
					$ptype = null;
					if( empty($post) ){
						if( isset($q_obj->taxonomy) )
							$ptype = & $wp_post_types[ get_taxonomy($q_obj->taxonomy)->object_type[0] ];
					}
					else $ptype = & $wp_post_types[ $post->post_type ];
					$arg->pg_end = '';
					if( ($paged_num = get_query_var('paged')) || ($paged_num = get_query_var('page')) )
						$arg->pg_end = $sep . sprintf( $loc->paged, (int) $paged_num );

					$pg_end = $arg->pg_end;
					$out = '';
					if( is_front_page() ){
						return $arg->on_front_page ? sprintf( $wrappatt, ( $paged_num ? sprintf($linkpatt, get_home_url(), $loc->home) . $pg_end : $loc->home ) ) : '';
					}
					elseif( is_home() ) {
						$out = $paged_num ? ( sprintf( $linkpatt, get_permalink($q_obj), esc_html($q_obj->post_title) ) . $pg_end ) : esc_html($q_obj->post_title);
					}
					elseif( is_404() ){
						$out = $loc->_404;
					}
					elseif( is_search() ){
						$out = sprintf( $loc->search, esc_html( $GLOBALS['s'] ) );
					}
					elseif( is_author() ){
						$tit = sprintf( $loc->author, esc_html($q_obj->display_name) );
						$out = ( $paged_num ? sprintf( $linkpatt, get_author_posts_url( $q_obj->ID, $q_obj->user_nicename ) . $pg_end, $tit ) : $tit );
					}
					elseif( is_year() || is_month() || is_day() ){
						$y_url  = get_year_link( $year = get_the_time('Y') );

						if( is_year() ){
							$tit = sprintf( $loc->year, $year );
							$out = ( $paged_num ? sprintf($linkpatt, $y_url, $tit) . $pg_end : $tit );
						}
						else {
							$y_link = sprintf( $linkpatt, $y_url, $year);
							$m_url  = get_month_link( $year, get_the_time('m') );

							if( is_month() ){
								$tit = sprintf( $loc->month, get_the_time('F') );
								$out = $y_link . $sep . ( $paged_num ? sprintf( $linkpatt, $m_url, $tit ) . $pg_end : $tit );
							}
							elseif( is_day() ){
								$m_link = sprintf( $linkpatt, $m_url, get_the_time('F'));
								$out = $y_link . $sep . $m_link . $sep . get_the_time('l');
							}
						}
					}
					elseif( is_singular() && $ptype->hierarchical ){
						$out = $this->_add_title( $this->_page_crumbs($post), $post );
					}
					else {
						$term = $q_obj;
						if( is_singular() ){
							if( is_attachment() && $post->post_parent ){
								$save_post = $post;
								$post = get_post($post->post_parent);
							}
							$taxonomies = get_object_taxonomies( $post->post_type );
							$taxonomies = array_intersect( $taxonomies, get_taxonomies( array('hierarchical' => true, 'public' => true) ) );
							if( $taxonomies ){
								if( ! empty($arg->priority_tax) ){
									usort( $taxonomies, function($a,$b)use($arg){
										$a_index = array_search($a, $arg->priority_tax);
										if( $a_index === false ) $a_index = 9999999;

										$b_index = array_search($b, $arg->priority_tax);
										if( $b_index === false ) $b_index = 9999999;

							return ( $b_index === $a_index ) ? 0 : ( $b_index < $a_index ? 1 : -1 ); // меньше индекс - выше
						} );
								}
								foreach( $taxonomies as $taxname ){
									if( $terms = get_the_terms( $post->ID, $taxname ) ){
							// проверим приоритетные термины для таксы
										$prior_terms = & $arg->priority_terms[ $taxname ];
										if( $prior_terms && count($terms) > 2 ){
											foreach( (array) $prior_terms as $term_id ){
												$filter_field = is_numeric($term_id) ? 'term_id' : 'slug';
												$_terms = wp_list_filter( $terms, array($filter_field=>$term_id) );

												if( $_terms ){
													$term = array_shift( $_terms );
													break;
												}
											}
										}
										else
											$term = array_shift( $terms );

										break;
									}
								}
							}

							if( isset($save_post) ) $post = $save_post;
						}
						if( $term && isset($term->term_id) ){
							$term = apply_filters('kama_breadcrumbs_term', $term );

				// attachment
							if( is_attachment() ){
								if( ! $post->post_parent )
									$out = sprintf( $loc->attachment, esc_html($post->post_title) );
								else {
									if( ! $out = apply_filters('attachment_tax_crumbs', '', $term, $this ) ){
										$_crumbs    = $this->_tax_crumbs( $term, 'self' );
										$parent_tit = sprintf( $linkpatt, get_permalink($post->post_parent), get_the_title($post->post_parent) );
										$_out = implode( $sep, array($_crumbs, $parent_tit) );
										$out = $this->_add_title( $_out, $post );
									}
								}
							}
				// single
							elseif( is_single() ){
								if( ! $out = apply_filters('post_tax_crumbs', '', $term, $this ) ){
									$_crumbs = $this->_tax_crumbs( $term, 'self' );
									$out = $this->_add_title( $_crumbs, $post );
								}
							}
							elseif( ! is_taxonomy_hierarchical($term->taxonomy) ){
					// метка
								if( is_tag() )
									$out = $this->_add_title('', $term, sprintf( $loc->tag, esc_html($term->name) ) );
					// такса
								elseif( is_tax() ){
									$post_label = $ptype->labels->name;
									$tax_label = $GLOBALS['wp_taxonomies'][ $term->taxonomy ]->labels->name;
									$out = $this->_add_title('', $term, sprintf( $loc->tax_tag, $post_label, $tax_label, esc_html($term->name) ) );
								}
							}
							else {
								if( ! $out = apply_filters('term_tax_crumbs', '', $term, $this ) ){
									$_crumbs = $this->_tax_crumbs( $term, 'parent' );
									$out = $this->_add_title( $_crumbs, $term, esc_html($term->name) );                     
								}
							}
						}
						elseif( is_attachment() ){
							$parent = get_post($post->post_parent);
							$parent_link = sprintf( $linkpatt, get_permalink($parent), esc_html($parent->post_title) );
							$_out = $parent_link;
							if( is_post_type_hierarchical($parent->post_type) ){
								$parent_crumbs = $this->_page_crumbs($parent);
								$_out = implode( $sep, array( $parent_crumbs, $parent_link ) );
							}

							$out = $this->_add_title( $_out, $post );
						}
						elseif( is_singular() ){
							$out = $this->_add_title( '', $post );
						}
					}
					$home_after = apply_filters('kama_breadcrumbs_home_after', '', $linkpatt, $sep, $ptype );
					if( '' === $home_after ){
						if( $ptype && $ptype->has_archive && ! in_array( $ptype->name, array('post','page','attachment') )
							&& ( is_post_type_archive() || is_singular() || (is_tax() && in_array($term->taxonomy, $ptype->taxonomies)) )
						){
							$pt_title = $ptype->labels->name;
						if( is_post_type_archive() && ! $paged_num )
							$home_after = sprintf( $this->arg->title_patt, $pt_title );
						else{
							$home_after = sprintf( $linkpatt, get_post_type_archive_link($ptype->name), $pt_title );

							$home_after .= ( ($paged_num && ! is_tax()) ? $pg_end : $sep );
						}
					}
				}

				$before_out = sprintf( $linkpatt, home_url(), $loc->home ) . ( $home_after ? $sep.$home_after : ($out ? $sep : '') );

				$out = apply_filters('kama_breadcrumbs_pre_out', $out, $sep, $loc, $arg );

				$out = sprintf( $wrappatt, $before_out . $out );

				return apply_filters('kama_breadcrumbs', $out, $sep, $loc, $arg );
			}

			function _page_crumbs( $post ){
				$parent = $post->post_parent;

				$crumbs = array();
				while( $parent ){
					$page = get_post( $parent );
					$crumbs[] = sprintf( $this->arg->linkpatt, get_permalink($page), esc_html($page->post_title) );
					$parent = $page->post_parent;
				}

				return implode( $this->arg->sep, array_reverse($crumbs) );
			}

			function _tax_crumbs( $term, $start_from = 'self' ){
				$termlinks = array();
				$term_id = ($start_from === 'parent') ? $term->parent : $term->term_id;
				while( $term_id ){
					$term       = get_term( $term_id, $term->taxonomy );
					$termlinks[] = sprintf( $this->arg->linkpatt, get_term_link($term), esc_html($term->name) );
					$term_id    = $term->parent;
				}

				if( $termlinks )
					return implode( $this->arg->sep, array_reverse($termlinks) ) /*. $this->arg->sep*/;
				return '';
			}
			function _add_title( $add_to, $obj, $term_title = '' ){
		$arg = & $this->arg; // упростим...
		$title = $term_title ? $term_title : esc_html($obj->post_title); // $term_title чиститься отдельно, теги моугт быть...
		$show_title = $term_title ? $arg->show_term_title : $arg->show_post_title;

		// пагинация
		if( $arg->pg_end ){
			$link = $term_title ? get_term_link($obj) : get_permalink($obj);
			$add_to .= ($add_to ? $arg->sep : '') . sprintf( $arg->linkpatt, $link, $title ) . $arg->pg_end;
		}
		// дополняем - ставим sep
		elseif( $add_to ){
			if( $show_title )
				$add_to .= $arg->sep . sprintf( $arg->title_patt, $title );
			elseif( $arg->last_sep )
				$add_to .= $arg->sep;
		}
		// sep будет потом...
		elseif( $show_title )
			$add_to = sprintf( $arg->title_patt, $title );

		return $add_to;
	}

}


if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Настройки',
		'menu_title'	=> 'Настройи',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	
	acf_add_options_page(array(
		'page_title' 	=> 'Добавить файлы для скчивания в сайдбар',
		'menu_title'	=> 'Добавить файлы для скчивания в сайдбар',
		'menu_slug' 	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Добавить контакты',
		'menu_title'	=> 'Добавить контакты',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Настройки footer',
		'menu_title'	=> 'Настройки footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
remove_action( 'woocommerce_single_variation', 'woocommerce_single_variation', 10);
add_action( 'woocommerce_before_variations_form', 'woocommerce_single_variation', 20);
//add_theme_support ('wc-product-gallery-zoom');
add_theme_support ('wc-product-gallery-lightbox');
add_theme_support ('wc-product-gallery-slider');



## Оставляет пользователя на той же странице при вводе неверного логина/пароля в форме авторизации wp_login_form()
add_action( 'wp_login_failed', 'my_front_end_login_fail' );
function my_front_end_login_fail( $username ) {
	$referrer = $_SERVER['HTTP_REFERER'];  // откуда пришел запрос

	// Если есть referrer и это не страница wp-login.php
	if( !empty($referrer) && !strstr($referrer,'wp-login') && !strstr($referrer,'wp-admin') ) {
		$lng = pll_current_language();
		if($lng == 'en'){
			wp_redirect('http://coder.cx.ua/coder.profec/login/');
		}
		elseif($lng == 'uk'){
			wp_redirect('http://coder.cx.ua/coder.profec/uk/login/');
		}
		elseif($lng == 'ru'){
			wp_redirect('http://coder.cx.ua/coder.profec/ru/login/');
		}
		elseif($lng == 'de'){
			wp_redirect('http://coder.cx.ua/coder.profec/de/login/');
		}
		
		exit;
	}
}

add_filter('login_redirect', 'redirect_my_account');
function redirect_my_account() {
	return PATH.'my-account';
}

/* Минимальная сумма заказа */
add_action( 'woocommerce_before_cart', 'truemisha_minimum_order_amount' );

function truemisha_minimum_order_amount(){

	$minimum_amount = 1000;

	if ( WC()->cart->subtotal < $minimum_amount ) {

		wc_print_notice(
			sprintf(
				'Минимальная сумма заказа %s, у вас сумма заказа %s.' ,
				wc_price( $minimum_amount ),
				wc_price( WC()->cart->subtotal )
			),
			'notice'
		);
	}

}
add_action( 'woocommerce_before_checkout_form', 'truemisha_minimum_order_amount' );
add_action( 'woocommerce_checkout_process', 'truemisha_no_checkout_min_order_amount' );

function truemisha_no_checkout_min_order_amount() {

	$minimum_amount = 1000;

	if ( WC()->cart->subtotal < $minimum_amount ) {

		wc_add_notice( 
			sprintf( 
				'Минимальная сумма заказа %s, ваш заказ на сумму %s.',
				wc_price( $minimum_amount ),
				wc_price( WC()->cart->subtotal )
			),
			'error'
		);

	}

}


function wp_corenavi(){
	global $wp_query;
	$total = isset( $wp_query->max_num_pages ) ? $wp_query->max_num_pages : 1;
	$a['total'] = $total;
  $a['mid_size'] = 3; // сколько ссылок показывать слева и справа от текущей
  $a['end_size'] = 1; // сколько ссылок показывать в начале и в конце
  $a['prev_text'] = '&laquo;'; // текст ссылки "Предыдущая страница"
  $a['next_text'] = '&raquo;'; // текст ссылки "Следующая страница"

  if ( $total > 1 ) echo '<nav class="pagination">';
  echo paginate_links( $a );
  if ( $total > 1 ) echo '</nav>';
}

add_action( 'init', 'create_product_taxonomies' );
function create_product_taxonomies(){

	register_taxonomy('Manufacturer', array('product'), array(
		'hierarchical'  => true,
		'labels'        => array(
			'name'              => _x( 'Manufacturer', 'taxonomy general name' ),
			'singular_name'     => _x( 'Manufacturer', 'taxonomy singular name' ),
			'search_items'      =>  __( 'Search Manufacturer' ),
			'all_items'         => __( 'All Manufacturer' ),
			'parent_item'       => __( 'Parent Manufacturer' ),
			'parent_item_colon' => __( 'Parent Manufacturer:' ),
			'edit_item'         => __( 'Edit Manufacturer' ),
			'update_item'       => __( 'Update Manufacturer' ),
			'add_new_item'      => __( 'Add New Manufacturer' ),
			'new_item_name'     => __( 'New Manufacturer Name' ),
			'menu_name'         => __( 'Manufacturer' ),
		),
		'show_ui'       => true,
		'query_var'     => true,
	));
};

add_action('wp_ajax_search_product', 'search_product');
add_action('wp_ajax_nopriv_search_product', 'search_product');

function search_product(){
	$key = $_POST['key'];
	$cat = $_POST['cat'];
	$term = $_POST['term'];
	$price_over = $_POST['price_over'];
	$price_to   = $_POST['price_to'];
	$arg = array(
		'post_type' => 'product',
		'tax_query' => array(
			'relation' => 'OR',
			array(
				'taxonomy' => 'product_cat',
				'field'    => 'id',
				'terms'    => $cat,
			),
			array(
				'taxonomy' => 'Manufacturer',
				'field'    => 'id',
				'terms'    => $term,
			)
		),
		'meta_query' => array(
			'_price'=>array(
				'key' => '_price',
				'value' => array($price_over, $price_to),
				'compare' => 'BETWEEN',
				'type' => 'NUMERIC',
			),
			'orderby' => '_price',
			'order'   => 'ASC',
		)
	);
	//print_r($arg);
	$query = new WP_Query($arg);
	//print_r($query);
	if($query->have_posts()){

		while ( $query->have_posts() ) {
			$query->the_post();
			wc_get_template_part('content','product-square');
		}
	}
	else{?>
	<p class="woocommerce-info"><?= pll__('Товаров, соответствующих вашему запросу, не обнаружено.')?></p>
	<form role="search" method="get" class="woocommerce-product-search" action="http://coder.cx.ua/coder.profec/">
		<div class="wrap-searh">
			<input type="search" id="" class="search-field" placeholder="Search..." value="" name="s">
			<input type="hidden" name="post_type" value="product">
		</div>
		<div class="wrap-btn-search">
			<button type="submit" value="Search" class="button-seach">Search...</button>
		</div>
	</form>
	<?php
}
die();
}





