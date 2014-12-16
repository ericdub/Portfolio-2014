<?php 
//Dequeue Contact Form 7 stuff
add_filter( 'wpcf7_load_js', '__return_false' );
add_filter( 'wpcf7_load_css', '__return_false' );

//Load Google Recaptcha API if on contact form
function load_google_recaptcha() {

    if (is_page_template('contact.php')) {


        wp_enqueue_script('recaptcha', 'https://www.google.com/recaptcha/api.js', false, '20141203',false);

    }

} 
add_action('wp_enqueue_scripts', 'load_google_recaptcha');


?>