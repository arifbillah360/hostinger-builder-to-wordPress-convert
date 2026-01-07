<?php
/**
 * Template Name: About Page
 * Template for displaying the about page (Partner für Klimatechnik)
 *
 * @package TWK_Rheinland
 * @since 1.0.0
 */

get_header();
?>

<main id="primary" class="site-main about-page">

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

                <!-- About sections -->
                <div class="about-sections">
                    <section class="about-section">
                        <h2><?php esc_html_e( 'Über uns', 'twk-rheinland' ); ?></h2>
                        <div class="about-content">
                            <!-- Content will be added via WordPress editor -->
                        </div>
                    </section>

                    <section class="about-section">
                        <h2><?php esc_html_e( 'Unsere Mission', 'twk-rheinland' ); ?></h2>
                        <div class="mission-content">
                            <!-- Content will be added via WordPress editor -->
                        </div>
                    </section>

                    <section class="about-section">
                        <h2><?php esc_html_e( 'Unser Team', 'twk-rheinland' ); ?></h2>
                        <div class="team-content">
                            <!-- Content will be added via WordPress editor -->
                        </div>
                    </section>
                </div>
            </div>
        </article>

        <?php
    endwhile;
    ?>

</main><!-- #primary -->

<?php
get_footer();
