<?php
/**
 * Template Name: Contact Page
 * Template for displaying the contact page
 *
 * @package TWK_Rheinland
 * @since 1.0.0
 */

get_header();
?>

<main id="primary" class="site-main contact-page">

    <?php
    while ( have_posts() ) :
        the_post();
        ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            </header>

            <div class="entry-content">
                <?php the_content(); ?>

                <!-- Contact form section -->
                <div class="contact-form-section">
                    <h2><?php esc_html_e( 'Kontaktieren Sie uns', 'twk-rheinland' ); ?></h2>

                    <!-- You can use Contact Form 7 or any form plugin here -->
                    <?php
                    if ( shortcode_exists( 'contact-form-7' ) ) {
                        echo do_shortcode( '[contact-form-7 id="1" title="Contact form 1"]' );
                    } else {
                        ?>
                        <p><?php esc_html_e( 'Please install Contact Form 7 plugin to display the contact form.', 'twk-rheinland' ); ?></p>
                        <?php
                    }
                    ?>
                </div>

                <!-- Google Maps section -->
                <div class="map-section">
                    <h2><?php esc_html_e( 'Standort', 'twk-rheinland' ); ?></h2>
                    <div id="google-map" class="google-map-container">
                        <!-- Add your Google Maps embed code here -->
                    </div>
                </div>

                <!-- Contact information -->
                <div class="contact-info">
                    <div class="contact-info-item">
                        <h3><?php esc_html_e( 'Adresse', 'twk-rheinland' ); ?></h3>
                        <p>TWK Rheinland - Tim Wassong</p>
                    </div>

                    <div class="contact-info-item">
                        <h3><?php esc_html_e( 'Telefon', 'twk-rheinland' ); ?></h3>
                        <p><a href="tel:+49"></a></p>
                    </div>

                    <div class="contact-info-item">
                        <h3><?php esc_html_e( 'E-Mail', 'twk-rheinland' ); ?></h3>
                        <p><a href="mailto:"></a></p>
                    </div>
                </div>
            </div>
        </article>

        <?php
    endwhile;
    ?>

</main><!-- #primary -->

<?php
get_footer();
