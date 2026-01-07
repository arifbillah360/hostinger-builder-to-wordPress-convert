<?php
/**
 * Template Name: Services Page
 * Template for displaying the services page (Kältetechnik und Klimalösungen)
 *
 * @package TWK_Rheinland
 * @since 1.0.0
 */

get_header();
?>

<main id="primary" class="site-main services-page">

    <?php
    while ( have_posts() ) :
        the_post();
        ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            </header>

            <?php if ( has_post_thumbnail() ) : ?>
                <div class="post-thumbnail">
                    <?php the_post_thumbnail( 'large' ); ?>
                </div>
            <?php endif; ?>

            <div class="entry-content">
                <?php the_content(); ?>

                <!-- Services sections -->
                <div class="services-grid">
                    <div class="service-item">
                        <div class="service-icon">
                            <!-- Icon placeholder -->
                        </div>
                        <h3><?php esc_html_e( 'Klimaanlagen', 'twk-rheinland' ); ?></h3>
                        <p><?php esc_html_e( 'Installation und Wartung von Klimaanlagen', 'twk-rheinland' ); ?></p>
                    </div>

                    <div class="service-item">
                        <div class="service-icon">
                            <!-- Icon placeholder -->
                        </div>
                        <h3><?php esc_html_e( 'Kältetechnik', 'twk-rheinland' ); ?></h3>
                        <p><?php esc_html_e( 'Professionelle Kältetechnik-Lösungen', 'twk-rheinland' ); ?></p>
                    </div>

                    <div class="service-item">
                        <div class="service-icon">
                            <!-- Icon placeholder -->
                        </div>
                        <h3><?php esc_html_e( 'Heiztechnik', 'twk-rheinland' ); ?></h3>
                        <p><?php esc_html_e( 'Moderne Heizsysteme und -lösungen', 'twk-rheinland' ); ?></p>
                    </div>

                    <div class="service-item">
                        <div class="service-icon">
                            <!-- Icon placeholder -->
                        </div>
                        <h3><?php esc_html_e( 'Wartung & Service', 'twk-rheinland' ); ?></h3>
                        <p><?php esc_html_e( 'Regelmäßige Wartung und schneller Service', 'twk-rheinland' ); ?></p>
                    </div>
                </div>

                <!-- Additional content sections -->
                <section class="service-details">
                    <h2><?php esc_html_e( 'Unsere Leistungen im Detail', 'twk-rheinland' ); ?></h2>
                    <!-- Content will be added via WordPress editor -->
                </section>
            </div>
        </article>

        <?php
    endwhile;
    ?>

</main><!-- #primary -->

<?php
get_footer();
