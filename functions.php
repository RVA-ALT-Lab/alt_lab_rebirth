<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

/**
 * Initialize theme default settings
 */
require get_template_directory() . '/inc/theme-settings.php';

/**
 * Theme setup and custom theme supports.
 */
require get_template_directory() . '/inc/setup.php';

/**
 * Register widget area.
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom pagination for this theme.
 */
require get_template_directory() . '/inc/pagination.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Custom Comments file.
 */
require get_template_directory() . '/inc/custom-comments.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load custom WordPress nav walker.
 */
require get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

/**
 * Load WooCommerce functions.
 */
require get_template_directory() . '/inc/woocommerce.php';

/**
 * Load Editor functions.
 */
require get_template_directory() . '/inc/editor.php';

/**
 * Load custom post types and taxonomy functions.
 */
require get_template_directory() . '/inc/custom-post-types.php';

/**
 * Load acf options
 */
require get_template_directory() . '/inc/acf-fields.php';


//ADD FONTS and VCU Brand Bar
add_action('wp_enqueue_scripts', 'alt_lab_scripts');
function alt_lab_scripts() {
	$query_args = array(
		'family' => 'Roboto:300,400,700|Old+Standard+TT:400,700|Oswald:400,500,700',
		'subset' => 'latin,latin-ext',
	);
	wp_enqueue_style ( 'google_fonts', add_query_arg( $query_args, "//fonts.googleapis.com/css" ), array(), null );

	wp_enqueue_script( 'vcu_brand_bar', 'https:///branding.vcu.edu/bar/academic/latest.js', array(), '1.1.1', true );

	wp_enqueue_script( 'alt_lab_js', get_template_directory_uri() . '/js/alt-lab.js', array(), '1.1.1', true );
    }

//add footer widget areas
if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Footer - far left',
    'id' => 'footer-far-left',
    'before_widget' => '<div class = "widgetizedArea">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  )
);

if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Footer - medium left',
    'id' => 'footer-med-left',
    'before_widget' => '<div class = "widgetizedArea">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  )
);


if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Footer - medium right',
    'id' => 'footer-med-right',
    'before_widget' => '<div class = "widgetizedArea">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  )
);

if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Footer - far right',
    'id' => 'footer-far-right',
    'before_widget' => '<div class = "widgetizedArea">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  )
);

//set a path for IMGS

  if( !defined('THEME_IMG_PATH')){
   define( 'THEME_IMG_PATH', get_stylesheet_directory_uri() . '/imgs/' );
  }


function bannerMaker(){
	global $post;
	 if ( get_the_post_thumbnail_url( $post->ID ) ) {
      //$thumbnail_id = get_post_thumbnail_id( $post->ID );
      $thumb_url = get_the_post_thumbnail_url($post->ID);
      //$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);

        return '<div class="jumbotron custom-header-img" style="background-image:url('. $thumb_url .')"></div>';

    } 
}

function big_menu(){
  global $post;
  $page = $post->post_name;
  $home='';
  $resources='';
  $events='';
  $action='';
  $about='';

  if(is_front_page()){
    $home = 'active';
  }
  if($page === 'events'){
    $event = 'active';
  }
  if($page === 'resources'){
    $resources = 'active';
  }
  if($page === 'action'){
    $action = 'active';
  }
   if($page === 'about-us'){
    $about = 'active';
  }
  $html ='<div class="container">
        <div class="row row-eq-height" id="alt-logo-row">
          <div class="col-md-3 alt-menu alt-left">
            <div class="menu-holder">
              <a href="" class="menu-item '.$home.'">Home</a>
            </div>
            <div class="menu-holder">
              <a href="events" class="menu-item '.$events.'">Events</a>
            </div>
            <div class="menu-holder">
              <a href="resources" class="menu-item '.$resources.'">Resources</a>
            </div>
          </div>
          <div class="col-lg-6 alt-menu alt-center">
            <h1 id="alt-full-text">Academic Learning Transformation Lab</h1>
          </div>
          <div class="col-md-3 alt-menu alt-right">
            <div class="menu-holder">
              <a href="about-us" class="menu-item '.$about.'">About us</a>
            </div>
            <div class="menu-holder">
              <a href="contact" class="menu-item '.$action.'">Let\'s do this</a>
            </div>
          </div>
        </div>
        
      </div><!-- .container -->';
      return $html;

}

function home_topics(){
  $html = "";
  $html_a = "";
  $html_b = "";
  $args = array(
      'posts_per_page' => 18,
      'post_type'   => 'topic', 
      'post_status' => 'publish', 
      'order_by' => 'date',  
      'nopaging' => false,                                        
                    );
    $i = 0;
    $the_query = new WP_Query( $args );
                    if( $the_query->have_posts() ): 
                      while ( $the_query->have_posts() ) : $the_query->the_post();
                      $clean_title = sanitize_title(get_the_title());                            
                      $html_a .= '<div class="col-md-4 topic-slide" id="'. $clean_title .'-parent"><a class="btn btn-primary topic-link" data-toggle="collapse" href="#' . $clean_title .'" role="button" aria-expanded="false" aria-controls="collapseExample" ><h3>' . get_the_title() . '</h3><i class="fa fa-caret-down"></i></a></div>';
                      $html_b .= '<div class="col-md-12 collapse accordion" data-parent="#topic-parent" id="' . sanitize_title(get_the_title()) . '">'. acf_fetch_topic_callout() .'<div class=""><i class="fa fa-envelope"></i></div></div>'; 
                      $i++;     
                       if ($i === 3 || $i === 6 || $i === 9 || $i === 12 || $i === 15 || $i === 18 ) {
                          $html .= $html_a . $html_b . '<div class="col-md-12 collapse" id="placeholder-' . $i . '"></div>';  
                          $html_a = "";
                          $html_b = "";
                        }                                 
                       endwhile;
                  endif;
            wp_reset_query();  // Restore global post data stomped by the_post().
   return $html;
}


function acf_fetch_topic_callout(){
  global $post;
  $html = '';
  $topic_callout = get_field('call_out');

    if( $topic_callout) {      
      $html = $topic_callout;  
     return $html;    
    }

}

//ABOUT US






//HOME PAGE ACF FUNCTIONS


function acf_fetch_description_one(){
  global $post;
  $html = '';
  $description_one = get_field('description_one');

    if( $description_one) {      
      $html = $description_one;  
     return $html;    
    }

}


function acf_fetch_call_out_two(){
  global $post;
  $html = '';
  $call_out_two = get_field('call_out_two');

    if( $call_out_two) {      
      $html = $call_out_two;  
     return $html;    
    }

}


function acf_fetch_description_two(){
  global $post;
  $html = '';
  $description_two = get_field('description_two');

    if( $description_two) {      
      $html = $description_two;  
     return $html;    
    }

}

//QUOTES
//FIX TITLE ON QUOTES 
function quoteTitles ($post_id){
  $type = get_post_type($post_id);
  if ($type === 'quote'){
    remove_action( 'save_post', 'quoteTitles' );
    $quote = substr(get_field( "the_quote", $post_id ),0, 40) . ' . . .';
    $my_post = array(
        'ID'           => $post_id,
        'post_title'   => $quote,      
    );

  // Update the post into the database
    wp_update_post( $my_post );
  }
}
    add_action( 'save_post', 'quoteTitles' );

function get_the_quote() {
  global $post;
   $the_quote = get_field( "the_quote", $post->ID );
   if ($the_quote){
    return $the_quote;
   }
}

function get_the_quote_speaker(){
  global $post;
   $person = get_field( "person", $post->ID );
   if ($person){
    return $person;
   }
}


//get the quotes for the front page
function quote_maker(){
  $html = "";
  $inc = 1;
  $args = array(
      'posts_per_page' => 15,
      'post_type'   => 'quote', 
      'post_status' => 'publish', 
      'order_by' => 'date',  
      'nopaging' => false,                                        
                    );
    $the_query = new WP_Query( $args );
                    if( $the_query->have_posts() ): 
                      while ( $the_query->have_posts() ) : $the_query->the_post(); 
                       if ($inc === 1) {
                        $active = "active";
                       } else {
                        $active = "";
                       }
                      $html .= '<div class="carousel-item ' . $active . ' quote-slide"><div class="quote-text"><h3>' . get_the_quote() . '</h3>'.get_the_quote_speaker() .'</div></div>';
                      $inc++;
                       endwhile;
                  endif;
            wp_reset_query();  // Restore global post data stomped by the_post().
   return $html;
}


//auto create topics taxonomy elements based on creation of taxonomy post type

function make_topic_tax( $post_id, $post ) { 
      $title = get_the_title($post_id);
      $type = get_post_type($post_id);
      $status = get_post_status($post_id);
      if ($type === 'topic' && $status = 'publish'){
        wp_insert_term( $title, 'topics');       
      }
    }
add_action( 'save_post', 'make_topic_tax', 10, 2 );


