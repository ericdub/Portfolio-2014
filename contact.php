<?php
/*
Template Name: Contact Form
*/


    if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
        wpcf7_enqueue_scripts();
    }
 
    if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
        wpcf7_enqueue_styles();
    }

 get_header(); ?>

<?php

// get user's comment display setting
$comments_display = get_theme_mod('ct_tracks_comments_setting');

/* Category header */
if(is_category()){ ?>
    <div class='archive-header'>
    <p>Category:</p>
    <h2><?php single_cat_title(); ?></h2>
    </div><?php
}
/* Tag header */
elseif(is_tag()){ ?>
    <div class='archive-header'>
    <p>Tag:</p>
    <h2><?php single_tag_title(); ?></h2>
    </div><?php
}
/* Author header */
elseif(is_author()){ ?>
    <div class='archive-header'>
    <p>These Posts are by:</p>
    <h2><?php echo get_the_author(); ?></h2>
    </div><?php
}

// The loop
if ( have_posts() ) :
    while (have_posts() ) :
        the_post();

        /* Blog */
        if(is_home()){

            /* Two-column Images Layout */
            if(get_theme_mod('premium_layouts_setting') == 'two-column-images'){
                get_template_part('licenses/content/content-two-column-images');
            }
            /* Full-width Images Layout */
            elseif(get_theme_mod('premium_layouts_setting') == 'full-width-images'){
                get_template_part('licenses/content/content-full-width-images');
            }
            /* Blog - No Premium Layout */
            else {
                get_template_part('content');
            }
        }
        /* Post */
        elseif(is_singular('post')){
            get_template_part('content');

            // error prevention
            if( is_array( $comments_display ) ) {

                // check for posts as a selected option
                if (in_array( 'posts', $comments_display ) ) {
                    comments_template();
                }
            }
        }
        /* Page */
        elseif(is_page()){
            get_template_part('content', 'page');

            // error prevention
            if( is_array( $comments_display ) ) {

                // check for pages as a selected option
                if (in_array( 'pages', $comments_display ) ) {
                    comments_template();
                }
            }
        }
        /* Attachment */
        elseif(is_attachment()){
            get_template_part( 'content', 'attachment' );

            // error prevention
            if( is_array( $comments_display ) ) {

                // check for attachments as a selected option
                if (in_array( 'attachments', $comments_display ) ) {
                    comments_template();
                }
            }
        }
        /* Archive */
        elseif(is_archive()){

            /* check if bbPress is active */
            if( function_exists( 'is_bbpress' ) ) {

                /* if is bbPress forum list */
                if( is_bbpress() ) {
                    get_template_part( 'content/bbpress' );
                }
                /* normal archive */
                else {
                    get_template_part('content');
                }
            }
            elseif(get_theme_mod('premium_layouts_setting') == 'two-column-images'){
                get_template_part('licenses/content/content-two-column-images');
            }
            elseif(get_theme_mod('premium_layouts_setting') == 'full-width-images'){
                get_template_part('licenses/content/content-full-width-images');
            }
            else {
                get_template_part('content');
            }
        }
        /* bbPress */
        elseif( function_exists( 'is_bbpress' ) && is_bbpress() ) {
            get_template_part( 'content/bbpress' );
        }
        /* Custom Post Types */
        else {
            get_template_part('content');
        }
    endwhile;
endif; ?>

<?php

// include loop pagination except for on bbPress Forum root
if( function_exists( 'is_bbpress' ) ) {

    if( ! ( is_bbpress() && is_archive() ) ) {
        ct_tracks_post_navigation();
    }

} else {
    ct_tracks_post_navigation();
}

?>

<?php get_footer(); ?>