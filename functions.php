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
//require get_template_directory() . '/inc/acf-fields.php';


/**
 * Load how it works timeline
 */
require get_template_directory() . '/inc/how_it_works_timeline.php';



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



function alt_lab_register_admin_scripts() {

wp_register_script( 'alt-js-dash', get_template_directory_uri() . '/js/alt-lab-dashboard.js' );
wp_enqueue_script( 'alt-js-dash', array('jquery'), '1.0.0', true );

   $local_arr = array(
        'ajaxurl'   => admin_url( 'admin-ajax.php' ),
        'ajax_nonce'  => wp_create_nonce( 'my-special-string' )
    );

    // Assign that data to our script as an JS object
    wp_localize_script( 'alt-js-dash', 'ajax_object', $local_arr );

} // end custom_register_admin_scripts
add_action( 'admin_enqueue_scripts', 'alt_lab_register_admin_scripts' );


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
      'nopaging' => false,
                    );
    $i = 0;
    $the_query = new WP_Query( $args );
                    if( $the_query->have_posts() ): 
                      while ( $the_query->have_posts() ) : $the_query->the_post();
                      $clean_title = sanitize_title(get_the_title());                            
                      $html_a .= '<div class="col-md-4 topic-slide" id="'. $clean_title .'-parent"><a class="btn btn-primary topic-link" data-toggle="collapse" href="#' . $clean_title .'" role="button" aria-expanded="false" aria-controls="' . sanitize_title(get_the_title()) . '" ><h3>' . get_the_title() . '</h3><i class="fa fa-caret-down"></i></a></div>';
                      $html_b .= '<div class="col-md-12 collapse accordion" data-parent="#topic-parent" id="' . sanitize_title(get_the_title()) . '"><div class="topic-description">'. acf_fetch_topic_callout() .'</div><i class="fa fa-envelope"></i></div>'; 
                      $i++;     
                       if ($i === 3 || $i === 6 || $i === 9 || $i === 12 || $i === 15 || $i === 18 ) {
                          $html .= $html_a . $html_b . '<div class="col-md-12 collapse" id="placeholder-' . $i . '"></div>';  
                          $html_a = "";
                          $html_b = "";
                        }                                 
                       endwhile;
                  endif;
            wp_reset_query();  // Restore global post data stomped by the_post().
   return '<div class="row topic-wrapper">' . $html . '</div>';
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


//WORKSHOP

function learning_outcomes(){
    global $post;
    $html = "";
    if( have_rows('learning_outcomes') ):
    $html .= '<div class="col-md-6 outcomes"><h2>Learning Outcomes</h2><ul>';
    while ( have_rows('learning_outcomes') ) : the_row();
        // Your loop code
      $html .= '<li>' . get_sub_field('learning_statement') . '</li>';
    endwhile;
    $html .= '</ul></div>';
    else :
        // no rows found
    endif;
    return $html;
}


function acf_fetch_audience(){
  global $post;
  $html = '';
  $audience = get_field('audience');

    if( $audience) {      
      $html = '<div class="col-md-6 audience"><h2>Audience</h2>' . $audience . '</div>';  
     return $html;    
    }

}


function vcu_examples(){
    global $post;
    $html = "";
    if( have_rows('vcu_examples') ):
    $html .= '<div class="col-md-6 vcu-examples"><h2>VCU Resources</h2><ul>';
    while ( have_rows('vcu_examples') ) : the_row();
        // Your loop code
      $html .= '<li><a href="' . get_sub_field('vcu_example_url') . '">' . get_sub_field('vcu_example_title') . '</a> - ' . get_sub_field('vcu_example_text') . '</li>';
    endwhile;
    $html .= '</ul></div>';
    else :
        // no rows found
    endif;
    return $html;
}

function outside_examples(){
    global $post;
    $html = "";
    if( have_rows('outside_examples') ):
    $html .= '<div class="col-md-6 outside-examples"><h2>External Resources</h2><ul>';
    while ( have_rows('outside_examples') ) : the_row();
        // Your loop code
      $html .= '<li><a href="' . get_sub_field('outside_example_url') . '">' . get_sub_field('outside_example_title') . '</a> - ' . get_sub_field('outside_example_text') . '</li>';
    endwhile;
    $html .= '</ul></div>';
    else :
        // no rows found
    endif;
    return $html;
}



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



//faculty bio functions


function acf_fetch_title(){
  global $post;
  $html = '';
  $title = get_field('title');

    if( $title) {      
      $html = $title;  
     return $html;    
    }

}




//WORKSHOP TO EVENT BUTTON ETC.***********************************************

//ADD COLUMN HEADER TO LIST VIEW
function make_event_columns_head($defaults) {
    $defaults['make_event'] = 'Make Event';
    return $defaults;
}
 
// ADD BUTTON TO LIST VIEW
function make_event_columns_content($column_name, $post_ID) {
    if ($column_name == 'make_event') {
       echo '<button class="button-primary workshop-to-event-button" id="workshop-to-event-'.$post_ID.'" name="make_event" data-id="'.$post_ID.'" ><span class="dashicons dashicons-calendar-alt"></span></button>';
    }
}

add_filter('manage_workshop_posts_columns', 'make_event_columns_head');
add_action('manage_workshop_posts_custom_column', 'make_event_columns_content', 10, 2);

function var_error_log( $object=null ){
    ob_start();                    // start buffer capture
    var_dump( $object );           // dump the values
    $contents = ob_get_contents(); // put the buffer into a variable
    ob_end_clean();                // end capture
    error_log( $contents );        // log contents of the result of var_dump( $object )
}

function make_workshop_to_event_callback(){
  $id = $_POST['id'];
  $post = get_post($id);
  $title = $post->post_title;
  $content = $post->post_content;
  $my_post = array(
      'post_title'    => $title,
      'post_content'  => $content,
      'post_status'   => 'draft',
  );
  
  //get acf data for transfer
  $audience = get_field('audience', $id); 
  
  // Insert the post into the database.
  $new_event = tribe_create_event( $my_post );
  $learning_statements = '';
  $i = 1;
  if( have_rows('learning_outcomes', $id) ) {
    while( have_rows('learning_outcomes', $id) ): the_row();
        $statement = get_sub_field('learning_statement', $id);
        //$learning_statements['learning_statement'][] = $statement;   
        add_sub_row('learning_statement', $statement, $id);
        $i++;      
    endwhile;
    //update_field('learning_outcomes', array($learning_statements), $new_event); 
  }

  //add acf data to new event
  update_field('audience', $audience, $new_event);


  echo get_edit_post_link($new_event, 'fugazi');//builds the edit direct link redirect piece that's used by js
  exit();
}
add_action('wp_ajax_make_workshop_to_event', 'make_workshop_to_event_callback');


//allow custom field view despite acf efforts -- also remember to change option in events calendar
add_filter( 'acf/settings/remove_wp_meta_box', '__return_false' );



function acf_fetch_faculty_title(){
  global $post;
  $html = '';
  $faculty_title = get_field('field_5953e8d7c6322');

    if( $faculty_title) {      
      $html = $faculty_title;  
     return $html;    
    }

}


function acf_fetch_email(){
  global $post;
  $html = '';
  $email = get_field('email');

    if( $email) {      
      $html = $email;  
     return $html;    
    }

}







//faculty loop
function showFaculty($department){
    $args = array(
      'posts_per_page' => -1,
      'post_type'   => 'faculty', 
      'post_status' => 'publish', 
      'order' => 'ASC',
      'orderby' => 'post_title',
        'tax_query' => array(
            array(
              'taxonomy' => 'departments',
              'field'    => 'slug',
              'terms'    => $department,
            ),
          ),
      );
    $html = '';
    $the_query = new WP_Query( $args );
                    if( $the_query->have_posts() ): 
                      while ( $the_query->have_posts() ) : $the_query->the_post();
                        $html .= '<div class="faculty card"><div class="card-body faculty-body">';
                        $html .= '<img class="bio-img" src="' . get_the_post_thumbnail_url(get_the_ID(),'medium') . '" alt="Faculty bio picture.">';
                        $html .= '<h3 class="faculty-name">' . get_the_title() . '</h3>';
                        $html .= '<h4 class="faculty-title">' . acf_fetch_faculty_title() . '</h4>';
                        $html .= '<div class="faculty-bio-text">' . get_the_content() . '</div></div></div>';
                      endwhile;
                    endif;
    wp_reset_query();  // Restore global post data stomped by the_post().
   return $html;
}

//faculty loop for service page
function show_faculty_service($department){
    $args = array(
      'posts_per_page' => -1,
      'post_type'   => 'faculty', 
      'post_status' => 'publish', 
      'order' => 'ASC',
      'orderby' => 'post_title',
        'tax_query' => array(
            array(
              'taxonomy' => 'departments',
              'field'    => 'slug',
              'terms'    => $department,
            ),
          ),
      );
    $html = '';
    $the_query = new WP_Query( $args );
                    if( $the_query->have_posts() ): 
                      while ( $the_query->have_posts() ) : $the_query->the_post();
                        $html .= '<div class="team-member">';
                        $html .= '<img class="service-team-img" src="' . get_the_post_thumbnail_url(get_the_ID(),'thumbnail') . '" alt="Faculty bio picture for '. acf_fetch_faculty_title() . '"><button type="button" class="btn btn-service-contact" data-toggle="modal" data-target="#contactModal" data-person="'.acf_fetch_email().'">@</button></div>';
                      endwhile;
                    endif;
    wp_reset_query();  // Restore global post data stomped by the_post().
   return $html;
}


/*
clean it up 
MAKE THINGS CLEAN FOR NON SUPER ADMINS***********************************************
*/

//episodes was a custom post type added by a previous theme
function remove_admin_menu_items() {
if( current_user_can( 'manage_options' ) ) { }
    else {  
  $remove_menu_items = array(__('Media'),__('Contact'), __('Comments'), __('Profile'), __('Tools'));
  global $menu;
  end ($menu);
  while (prev($menu)){
    $item = explode(' ',$menu[key($menu)][0]);
    if(in_array($item[0] != NULL?$item[0]:"" , $remove_menu_items)){
      unset($menu[key($menu)]);
    }
  }
}
}
add_action('admin_menu', 'remove_admin_menu_items');
 
function remove_menus(){
if( current_user_can( 'manage_options' ) ) { }
    else {      
  remove_menu_page( 'index.php' );                  //Dashboard
  remove_menu_page( 'jetpack' );                    //Jetpack* 
  remove_menu_page( 'options-general.php' );        //Settings
  remove_menu_page( 'vc-welcome' );        //Settings
}
}
add_action( 'admin_menu', 'remove_menus', 999 );


//hide posts from other authors for author level users
function posts_for_current_author($query) {
    global $pagenow;
    if( 'edit.php' != $pagenow || !$query->is_admin )
        return $query;
 
    if( !current_user_can( 'manage_options' ) ) {
        global $user_ID;
        $query->set('author', $user_ID );
    }
    return $query;
}
add_filter('pre_get_posts', 'posts_for_current_author');


/*
UNFINISHED
//change slug for alpha sort 
function faculty_alpha_slug_rewrite( $post_id ) {
      $post_type = get_post_type($post_id);
      if ($post_type === 'faculty'){

      }

}
add_action( 'save_post', 'faculty_alpha_slug_rewrite' );

*/