</div> <!-- .main -->

<footer class="site-footer" role="contentinfo">
    <h3>
        <a href="<?php echo esc_url(home_url()); ?>"><?php bloginfo('title'); ?></a>
    </h3>


    <?php if(get_bloginfo('description') && ( get_theme_mod('tagline_display_setting') == 'header-footer' ) || ( get_theme_mod('tagline_display_setting') == 'footer' )){ ?>
        <p class="site-description"><?php bloginfo('description'); ?></p>
    <?php } ?>
<<<<<<< HEAD
<h4>eric.r.watkins@gmail.com | 803.386.7835</h4>
=======
<h4>eric@threehour.co | 803.386.7835</h4>
>>>>>>> 4aa195d1895b4ec3bc5bc9cfab8324b3e2ada766

    <?php
        // add footer menu if set
        get_template_part( 'menu', 'footer' );
    ?>
    <?php
        // add social icons if set
        if( (get_theme_mod('social_icons_display_setting') == 'header-footer') || (get_theme_mod('social_icons_display_setting') == 'footer')){
            ct_tracks_customizer_social_icons_output();
        }
    ?>
    <div class="design-credit">
        <p>
            <?php
            /* Get the user's footer text input */
            $user_footer_text = get_theme_mod('ct_tracks_footer_text_setting');

            /* If it's not empty, output their text */
            if( ! empty($user_footer_text) ) {
                echo $user_footer_text;
            }
            /* Otherwise, output the default text */
            else {
                $site_url = 'http://www.competethemes.com/tracks/';
                $footer_text = sprintf( __( '<a target="_blank" href="%s">Tracks WordPress Theme</a> by Compete Themes.', 'tracks' ), esc_url( $site_url ) );
                echo $footer_text;
            }
            ?>
        </p>
    </div>
</footer>
<button id="return-top" class="return-top">
    <i class="fa fa-arrow-up"></i>
</button>

<?php
    // add the background image if being used
    if(get_theme_mod( 'ct_tracks_background_image_setting')){
        echo "<div class='background-image'></div>";
    }
?>

</div><!-- .overflow-container -->

<?php wp_footer(); ?>
</body>
<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> 4aa195d1895b4ec3bc5bc9cfab8324b3e2ada766
