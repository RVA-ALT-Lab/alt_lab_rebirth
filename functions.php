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


/**
 * Load how it works timeline
 */
// require get_template_directory() . '/inc/how_it_works_timeline.php';

/**
 * Load new how it works section
 */

require get_template_directory() . '/inc/how_it_works_area.php';


//ADD FONTS and VCU Brand Bar
add_action('wp_enqueue_scripts', 'alt_lab_scripts');
function alt_lab_scripts() {
	$query_args = array(
		'family' => 'Roboto:300,400,700|Old+Standard+TT:400,700|Oswald:400,500,700|Kalam:700',
		'subset' => 'latin,latin-ext',
	);
	wp_enqueue_style ( 'google_fonts', add_query_arg( $query_args, "//fonts.googleapis.com/css" ), array(), null );

	wp_enqueue_script( 'vcu_brand_bar', 'https:///branding.vcu.edu/bar/academic/latest.js', array(), '1.1.1', true );

	wp_enqueue_script( 'alt_lab_js', get_template_directory_uri() . '/js/alt-lab.js', array(), '1.1.2', true );
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
                      $html_a .= '<div class="col-md-4 topic-slide" id="'. $clean_title .'-parent"><a class="btn btn-primary topic-link" data-toggle="collapse" href="#' . $clean_title .'" role="button" aria-expanded="false"><h3>' . get_the_title() . '</h3><i class="fa fa-caret-down"></i></a></div>';
                      $html_b .= '<div class="col-md-12 collapse accordion" data-parent="#topic-parent" id="' . sanitize_title(get_the_title()) . '"><div class="topic-description">'. acf_fetch_topic_callout() .'</div><i class="icon mail"></i></div>'; 
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
    $html .= '<div class="outcomes"><h2>Learning Outcomes</h2><ul>';
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
      $html = '<div class="audience"><h2>Audience</h2><p>' . $audience . '</p></div>';  
     return $html;    
    }

}


function vcu_examples(){
    global $post;
    $html = "";
    if( have_rows('vcu_examples') ):
    $html .= '<div class="vcu-examples"><h2>VCU Resources</h2><ul>';
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
    $html .= '<div class="outside-examples"><h2>External Resources</h2><ul>';
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



//CURRENTLY NOT IMPLEMENTED IN WORKSHOP BROWSE get_the_terms( get_the_ID(), 'emails' ) the to array then to function below
function get_the_workshop_people($emails){
    $args = array(
      'posts_per_page' => -1,
      'post_type'   => 'faculty', 
      'post_status' => 'publish', 
      'order' => 'ASC',
      'orderby' => 'post_title',
      'meta_key'    => 'email',
      'meta_value' => $emails,
        // 'tax_query' => array(
        //     array(
        //       'taxonomy' => 'emails',
        //       'field'    => 'name',
        //       'terms'    => 'woodwardtw@vcu.edu',
        //     ),
        //   ),
      );
    $html = '';
    $the_query = new WP_Query( $args );
                    if( $the_query->have_posts() ): 
                      while ( $the_query->have_posts() ) : $the_query->the_post();
                        $html .= '<div class="faculty card" id="' . sanitize_title(get_the_title()) . '"><div class="card-body faculty-body">';
                        $html .= '<img class="bio-img img-fluid" src="' . get_the_post_thumbnail_url(get_the_ID(),'medium') . '" alt="Faculty bio picture for ' . get_the_title() . '">';
                        $html .= '<h3 class="faculty-name">' . get_the_title() . '</h3>';
                        $html .= '<h4 class="faculty-title">' . acf_fetch_faculty_title() . '</h4>';
                        $html .= '<div class="faculty-bio-text">' . get_the_content() . '</div></div></div>';
                      endwhile;
                    endif;
    wp_reset_query();  // Restore global post data stomped by the_post().
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
        'post_title'   => wp_strip_all_tags($quote),      
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

function get_the_quote_speaker_title(){
  global $post;
   $title = get_field( "title", $post->ID );
   if ($title){
    return $title;
   }
}

function get_the_quote_speaker_dept(){
  global $post;
   $dept = get_field( "department", $post->ID );
   if ($dept){
    return $dept;
   }
}

function get_the_quote_speaker_course(){
  global $post;
   $course = get_field( "course", $post->ID );
   if ($course){
    return $course;
   }
}

//get the quotes for the front page
function quote_maker($atts){  
  $a = shortcode_atts( array(
    'category' => '',
  ), $atts );

  if (!$a['category']) {
    $category = '*';
  }

  $html = "";
  $inc = 1;
  $args = array(
      'posts_per_page' => 15,
      'category_name' => $a['category'],
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
                      $html .= '<div class="carousel-item ' . $active . ' quote-slide"><div class="quote-text">';
                      $html .= '<div class="the-quote">' . get_the_quote() . '</div><div class="quote-speaker">' . get_the_quote_speaker(); 
                      $html .=  '</div><div class="quote-title">' . get_the_quote_speaker_title() . '</div>' ;
                      $html .= '<div class="quote-dept">' . get_the_quote_speaker_dept() . '</div>';
                      $html .= '<div class="quote-dept">' . get_the_quote_speaker_course() . '</div>';
                      $html .= '</div></div>';
                      $inc++;
                       endwhile;
                  endif;
            wp_reset_query();  // Restore global post data stomped by the_post().
   return $html;
}

add_shortcode( 'quote', 'quote_maker' );

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
      'orderby' => 'name',
        'tax_query' => array(
            array(
              'taxonomy' => 'departments',
              'field'    => 'slug', //KEEP IN MIND THIS SORTS BY SLUG AND I HAVE YET TO MAKE A FUNCTION TO SWITCH FIRST & LAST NAMES
              'terms'    => $department,
            ),
          ),
      );
    $html = '';
    $the_query = new WP_Query( $args );
                    if( $the_query->have_posts() ): 
                      while ( $the_query->have_posts() ) : $the_query->the_post();
                        $html .= '<div class="faculty card" id="' . sanitize_title(get_the_title()) . '"><div class="card-body faculty-body">';
                        $html .= '<img class="bio-img img-fluid" src="' . get_the_post_thumbnail_url(get_the_ID(),'medium') . '" alt="Faculty bio picture for ' . get_the_title() . '">';
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
    if ($department=='instructional-design') {
      return;
    }
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
                      $html .= '<h2 class="team-header">The Team</h2><div class="team-holder">';
                      while ( $the_query->have_posts() ) : $the_query->the_post();
                        $html .= '<div class="team-member">';
                        $html .= '<a href="../about-us#'.sanitize_title(get_the_title()).'"><img class="service-team-img" src="' . get_the_post_thumbnail_url(get_the_ID(),'thumbnail') . '" alt="Faculty bio picture for '. get_the_title() . '">';
                        $html .= '<span class="faculty-service-info">' . get_the_title() . '</span></a>';
                        $html .= '<a data-toggle="modal" href="#contactModal" data-name="' . get_the_title() . '" data-css="' . basename(get_permalink()) . '" data-person="'.acf_fetch_email().'"><div class="icon mail"></div></a></div>';
                      endwhile;
                      $html .= '</div>';
                    endif;
    wp_reset_query();  // Restore global post data stomped by the_post().
   return $html;
}


function acf_fetch_special_media(){
  global $post;
  $html = '';
  $special_media = get_field('special_media');

    if( $special_media) {      
      $html = $special_media;  
     return $html;    
    }

}



function acf_fetch_call_out_one_text(){
  global $post;
  $html = '';
  $call_out_one_text = get_field('call_out_one_text');

    if( $call_out_one_text) {      
      $html = $call_out_one_text;  
     return $html;    
    }

}


function acf_fetch_call_out_two_title(){
  global $post;
  $html = '';
  $call_out_two_title = get_field('call_out_two_title');

    if( $call_out_two_title) {      
      $html = $call_out_two_title;  
     return $html;    
    }

}


function acf_fetch_call_out_two_text(){
  global $post;
  $html = '';
  $call_out_two_text = get_field('call_out_two_text');

    if( $call_out_two_text) {      
      $html = $call_out_two_text;  
     return $html;    
    }

}


function acf_fetch_department_alignment(){
  global $post;
  $html = '';
  $department_alignment = get_field('department_alignment');

    if( $department_alignment) {      
      $html = $department_alignment->name;  
     return $html;    
    }

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

//ACF allow us to see custom fields in editor view
add_filter( 'acf/settings/remove_wp_meta_box', '__return_true' );
//add_filter( 'is_protected_meta', '__return_false', 999 );



//populate workshop request options from https://docs.gravityforms.com/gform_pre_render/#2-populate-choices-checkboxes
add_filter( 'gform_pre_render_3', 'populate_checkbox' );
add_filter( 'gform_pre_validation_3', 'populate_checkbox' );
add_filter( 'gform_pre_submission_filter_3', 'populate_checkbox' );
add_filter( 'gform_admin_pre_render_3', 'populate_checkbox' );
function populate_checkbox( $form ) {
 
    foreach( $form['fields'] as &$field )  {
 
        //NOTE: replace 3 with your checkbox field id
        $field_id = 6;
        if ( $field->id != $field_id ) {
            continue;
        }
 
        // you can add additional parameters here to alter the posts that are retreieved
        // more info: http://codex.wordpress.org/Template_Tags/get_posts
        $posts = get_posts( 'numberposts=-1&post_status=publish&post_type=workshop' );
 
        $input_id = 1;
        foreach( $posts as $post ) {
 
            //skipping index that are multiples of 10 (multiples of 10 create problems as the input IDs)
            if ( $input_id % 10 == 0 ) {
                $input_id++;
            }
 
            $choices[] = array( 'text' => $post->post_title, 'value' => $post->post_title );
            $inputs[] = array( 'label' => $post->post_title, 'id' => "{$field_id}.{$input_id}" );
 
            $input_id++;
        }
 
        $field->choices = $choices;
        $field->inputs = $inputs;
 
    }
 
    return $form;
}


//PROJECT FUNCTIONS

function faculty_bios_for_project () {    
        global $post;
         //get emails for query
        $terms = get_the_terms( get_the_ID(),'emails');
        $fac_email = [];
        if($terms){
          foreach ($terms as $term) {
            $fac_email[] = $term->slug;
          }
        }
          // args
          $args = array(
            'numberposts' => -1,
            'post_type'   => 'faculty',
            'tax_query' => array(
            array(
              'taxonomy' => 'emails',
              'field'    => 'slug',
              'terms'    => $fac_email,
            ),
          ),
            
          );

          // query
          $the_query = new WP_Query( $args );

         if( $the_query->have_posts() ):
           while ( $the_query->have_posts() ) : $the_query->the_post(); 
            echo '<!--faculty--><div class="alt-proj-faculty-member col-md-6"><a href="' . get_the_permalink() . '"><img class="alt-proj-faculty-thumb" src="' . get_the_post_thumbnail_url(get_the_ID(),'thumbnail') . '" alt="The faculty bio picture for '. get_the_title() . '."><div class="alt-proj-faculty-details"><div class="alt-proj-faculty-name fromLeft">' . get_the_title() . '</div></a><div class="alt-proj-faculty-school">' . faculty_dept_for_project() .'</div></div></a></div><!--end faculty-->';
            endwhile;
          endif;

        wp_reset_query();  // Restore global post data stomped by the_post()

        }
function faculty_dept_for_project(){
  global $post;
 return get_the_term_list($post->ID, 'departments', '', ', ', '');

}
//data



function alt_lab_design_pattern(){
   if (have_rows('course_specific')):
      while( have_rows('course_specific') ): the_row() ;
         $pattern = get_sub_field('design_pattern');
           if ($pattern){
            echo '<a href="?fwp_project_type=' . sanitize_title($pattern) . '">' . $pattern . '</a>';            
          }
      endwhile;
    endif;
}


function alt_lab_project_status(){
    global $post;
    $terms = get_the_terms( $post->ID , 'state' );
    echo sanitize_title($terms[0]->name);

}

/*
ACF LAND
*/
//ACF JSON SAVER
add_filter('acf/settings/save_json', 'my_acf_json_save_point');
 
function my_acf_json_save_point( $path ) {
    
    // update path
    $path = get_stylesheet_directory() . '/acf-json';
    
    // return
    return $path;
    
}


function acf_fetch_work_start_date(){
  global $post;
  $html = '';
  $work_start_date = get_field('work_start_date');

    if( $work_start_date) {      
      $html = $work_start_date;  
      return $html;    
    }

}


function acf_fetch_launch_date(){
  global $post;
  $html = '';
  $launch_date = get_field('launch_date');

    if( $launch_date) {      
      $html = $launch_date;  
     return $html;    
    }

}


function acf_fetch_due_date(){
  global $post;
  $html = '';
  $due_date = get_field('due_date');

    if( $due_date) {      
      $html = $due_date;  
     return $html;    
    }

}


function acf_fetch_updates(){
  $values = get_field('updates');
  if($values)
  {
    echo '<ul class="updates-list">';
    foreach($values as $value)
    {
      echo '<li>' . $value['update_date'] . ' ' . $value['update_details'] . '</li>';
    }
    echo '</ul>';
  }
}


function acf_count_updates(){
  $values = get_field('updates');
  $count = 0;
  if($values)
  {
    foreach($values as $value)
    {
     $count++;
    }
   echo ' (' . $count . ')';
  }
}


//add project to author page
function wpbrigade_author_custom_post_types( $query ) {
  if( is_author() && empty( $query->query_vars['suppress_filters'] ) ) {
    $query->set( 'post_type', array(
     'post', 'project'
    ));
    return $query;
  }
}


function alt_lab_lead(){
   if (have_rows('alt_lab_specific_information')):
      while( have_rows('alt_lab_specific_information') ): the_row() ;
         $leads = get_sub_field('alt_lab_lead');
          if ($leads){
            echo '<a href="?fwp_project_lead=' . $leads->ID . '">' . $leads->display_name . '</a>';        
       }
      endwhile;
    endif;
}

function project_department(){
  global $post;
  $post_id = $post->ID;
  $terms = wp_get_post_terms( $post_id, 'departments');
  if ($terms){
    foreach ( $terms as $term ) {
        echo '<a href="?departments=' . $term->slug . '">' . $term->name . '</a><br>'; //build this out for archive sorting
        ///?departments=foo
    }
  }
}
add_filter( 'pre_get_posts', 'wpbrigade_author_custom_post_types' );


function project_description(){
  if (have_rows('basic_project_information')):
      while( have_rows('basic_project_information') ): the_row() ;
        $description = get_sub_field('project_description');
        return $description;
      endwhile;
    endif;
       
}


function project_faculty(){
  global $post;
  $post_id = $post->ID;
  $terms = wp_get_post_terms( $post_id, 'faculty');
  if ($terms){
    foreach ( $terms as $term ) {
        echo '<a href="?faculty=' . $term->slug . '">' . $term->name . '</a>'; //build this out for archive sorting
    }
  }
}

function acf_fetch_course_url(){
  global $post;
  $html = '';
  $course_url = get_field('course_register_url');

    if( $course_url) {      
      $html = $course_url;  
     return $html;    
    }
}

function acf_fetch_course_description(){
  global $post;
  $html = '';
  $course_description = get_field('course_description');

    if( $course_description) {      
      $html = $course_description;  
     return $html;    
    }
}

//Self-paced Courses loop
function showSelfcourses(){
  $args = array(
    'posts_per_page' => -1,
    'post_type'   => 'selfcourse', 
    'post_status' => 'publish', 
    'order' => 'ASC',
    'orderby' => 'name',
    );
  $html = '';
  $the_query = new WP_Query( $args );
                  if( $the_query->have_posts() ): 
                    while ( $the_query->have_posts() ) : $the_query->the_post();
                      $html .= '<div class="course-card" id="' . sanitize_title(get_the_title()) . '"><div class="card-body">';
                      $html .= '<img class="course-img img-fluid" src="' . get_the_post_thumbnail_url(get_the_ID(),'small') . '" alt="Course image for ' . get_the_title() . '">';
                      $html .= '<h3 class="faculty-name">' . get_the_title() . '</h3>';
                      $html .= '<div class="faculty-bio-text">' . acf_fetch_course_description() . '</div></div>';
                      $html .= '<div class="card-footer"><div class="workshop-request self-course-url"><a href="' . acf_fetch_course_url() . '" class="btn btn-alt">Register for \'' . get_the_title() . '\' </a></div></div></div>';
                    endwhile;
                  endif;
  wp_reset_query();  // Restore global post data stomped by the_post().
 return $html;
 }

 //RESOURCES
 function acf_fetch_resource_url(){
  global $post;
  $html = '';
  $resource_url = get_field('resource_url');

    if( $resource_url) {      
      $html = $resource_url;  
     return $html;    
    }
}

function acf_fetch_resource_description(){
  global $post;
  $html = '';
  $resource_description = get_field('resource_description');

    if( $resource_description) {      
      $html = $resource_description;  
     return $html;    
    }
}

//RESOURCES loop
function showResource(){
  $args = array(
    'posts_per_page' => -1,
    'post_type'   => 'resource', 
    'post_status' => 'publish', 
    'order' => 'ASC',
    'orderby' => 'name',
    );
  $html = '';
  $the_query = new WP_Query( $args );
                  if( $the_query->have_posts() ): 
                    while ( $the_query->have_posts() ) : $the_query->the_post();
                      $html .= '<div class="course-card" id="' . sanitize_title(get_the_title()) . '"><div class="card-body">';
                      $html .= '<img class="course-img img-fluid" src="' . get_the_post_thumbnail_url(get_the_ID(),'small') . '" alt="Resource image for ' . get_the_title() . '">';
                      $html .= '<h3 class="faculty-name">' . get_the_title() . '</h3>';
                      $html .= '<div class="faculty-bio-text">' . acf_fetch_resource_description() . '</div>';
                      $html .= '<div class="workshop-request self-course-url"><a href="' . acf_fetch_resource_url() . '" class="btn btn-alt">Learn more about \'' . get_the_title() . '\' </a></div></div></div>';
                    endwhile;
                  endif;
  wp_reset_query();  // Restore global post data stomped by the_post().
 return $html;
 }

 //PROGRAMS
 function acf_fetch_program_url(){
  global $post;
  $html = '';
  $program_url = get_field('program_url');

    if( $program_url) {      
      $html = $program_url;  
     return $html;    
    }
}

function acf_fetch_program_description(){
  global $post;
  $html = '';
  $program_description = get_field('program_description');

    if( $program_description) {      
      $html = $program_description;  
     return $html;    
    }
}

function acf_fetch_program_date(){
  global $post;
  $html = '';
  $program_date = get_field('program_date');
  $other = get_field('program_date2');

    if( $program_date) {      
      $html = $program_date;  
     return $html;    
    } else if ($other){
      return $other;
    }
}

function acf_fetch_program_file(){
  global $post;
  $html = '';
  $program_file = get_field('program_file');

    if( $program_file) {      
      $html = $program_file;  
     return $html;    
    }
}

//PROGRAMS loop
function showProgram(){
  $args = array(
    'posts_per_page' => -1,
    'post_type'   => 'program', 
    'post_status' => 'publish', 
    'order' => 'ASC',
    'orderby' => 'name',
    );
  $html = '';
  $the_query = new WP_Query( $args );
                  if( $the_query->have_posts() ): 
                    while ( $the_query->have_posts() ) : $the_query->the_post();
                      $html .= '<div class="course-card" id="' . sanitize_title(get_the_title()) . '"><div class="card-body">';
                      $html .= '<img class="course-img img-fluid" src="' . get_the_post_thumbnail_url(get_the_ID(),'small') . '" alt="Program image for ' . get_the_title() . '">';
                      $html .= '<h3 class="faculty-name">' . get_the_title() . '</h3>';
                      $html .= '<div class="faculty-bio-text">' . acf_fetch_program_description() . '</div>';
                      $html .= '<div class="faculty-bio-text">View the <a href="' . acf_fetch_program_file() . '"> ' . get_the_title() . ' syllabus</a></div><br />';
                      $html .= '<div class="faculty-bio-text">Next start date: <strong> ' . acf_fetch_program_date() . '</strong></div>';
                      $html .= '<div class="workshop-request self-course-url"><a href="' . acf_fetch_program_url() . '" class="btn btn-alt">Register for \'' . get_the_title() . '\' </a></div></div></div>';
                    endwhile;
                  endif;
  wp_reset_query();  // Restore global post data stomped by the_post().
 return $html;
 }

// function acf_fetch_course_info(){
//   global $post;
//   $html = '';
//   $rows = get_field('self_paced_course_info');

//   if($rows)
//     {
//       echo '<div class="course-card">';

//       foreach($rows as $row)
//       {
//         echo '<h3 class="course-title">' . $row['course_title'] . '</h3> <div class="course_description">' . $row['course_description'] . '</div> <div class="course_date">' . $row['course_date'] . '</div>';
//       }

//       echo '</div>';
//     }
// }

 //LETS YOU CONTROL WHAT GETS STRIPPED IN CUT/PASTE TO MCE EDITOR 
//fix cut paste drama from https://jonathannicol.com/blog/2015/02/19/clean-pasted-text-in-wordpress/
add_filter('tiny_mce_before_init','configure_tinymce');
 
/**
 * Customize TinyMCE's configuration
 *
 * @param   array
 * @return  array
 */
function configure_tinymce($in) {
  $in['paste_preprocess'] = "function(plugin, args){
    // Strip all HTML tags except those we have whitelisted
    var whitelist = 'p,b,strong,i,em,h2,h3,h4,h5,h6,ul,li,ol,a,href';
    var stripped = jQuery('<div>' + args.content + '</div>');
    var els = stripped.find('*').not(whitelist);
    for (var i = els.length - 1; i >= 0; i--) {
      var e = els[i];
      jQuery(e).replaceWith(e.innerHTML);
    }
    // Strip all class and id attributes
    stripped.find('*').removeAttr('id').removeAttr('class').removeAttr('style');
    // Return the clean HTML
    args.content = stripped.html();
  }";
  return $in;
}