<?php
add_filter( 'wpcf7_load_js', '__return_false' );
add_filter( 'wpcf7_load_css', '__return_false' );


/*function ct_tracks_excerpt_read_more_link2($output) {
		remove_filter('the_excerpt', 'ct_tracks_excerpt_read_more_link');
			global $post;

			if ( is_archive( 'jetpack-portfolio' ) ) {


			return $output . "<p><a class='more-link' href='". get_permalink() ."'>View project <span class='screen-reader-text'>" . get_the_title() . "</span></a></p>";

			} else {
			return $output . "<p><a class='more-link' href='". get_permalink() ."'>Read post <span class='screen-reader-text'>" . get_the_title() . "</span></a></p>";
			}



		} */

//add_filter('the_excerpt', 'ct_tracks_excerpt_read_more_link2');
//remove_filter('the_excerpt', 'ct_tracks_excerpt_read_more_link');

    // filter the link on excerpts



    function jquery_register() {
    if ( !is_admin() ) {
        wp_deregister_script( 'jquery' );
        wp_register_script( 'jquery', ( 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js' ), false, null, true );
        wp_enqueue_script( 'jquery' );
       }
    }
    add_action( 'init', 'jquery_register' );

?>
