<?php
/**
 * The template for displaying all pages
 *
 * This is the default page template when no custom template is selected
 *
 * @package TWK_Rheinland
 * @since 1.0.0
 */

get_header();
?>

<main id="primary" class="site-main" style="padding: 40px 20px; max-width: 1200px; margin: 0 auto;">

    <?php
    while ( have_posts() ) :
        the_post();
        ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="background: white; padding: 40px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">

            <!-- Page Header -->
            <header class="entry-header" style="margin-bottom: 30px; text-align: center; border-bottom: 3px solid #667eea; padding-bottom: 20px;">
                <?php the_title( '<h1 class="entry-title" style="font-size: 42px; color: #333; margin: 0;">', '</h1>' ); ?>
            </header>

            <!-- Featured Image -->
            <?php if ( has_post_thumbnail() ) : ?>
                <div class="post-thumbnail" style="margin-bottom: 30px; border-radius: 8px; overflow: hidden;">
                    <?php the_post_thumbnail( 'large', array( 'style' => 'width: 100%; height: auto; display: block;' ) ); ?>
                </div>
            <?php endif; ?>

            <!-- Page Content -->
            <div class="entry-content" style="font-size: 18px; line-height: 1.8; color: #555;">
                <?php
                the_content();

                wp_link_pages( array(
                    'before' => '<div class="page-links" style="margin-top: 30px; padding-top: 20px; border-top: 1px solid #eee;">' . esc_html__( 'Seiten:', 'twk-rheinland' ),
                    'after'  => '</div>',
                ) );
                ?>
            </div>

            <!-- Edit Link (for logged-in admins) -->
            <?php if ( get_edit_post_link() ) : ?>
                <footer class="entry-footer" style="margin-top: 30px; padding-top: 20px; border-top: 1px solid #eee; text-align: right;">
                    <?php
                    edit_post_link(
                        sprintf(
                            wp_kses(
                                __( 'Bearbeiten <span class="screen-reader-text">%s</span>', 'twk-rheinland' ),
                                array(
                                    'span' => array(
                                        'class' => array(),
                                    ),
                                )
                            ),
                            get_the_title()
                        ),
                        '<span class="edit-link" style="color: #667eea; text-decoration: none;">',
                        '</span>'
                    );
                    ?>
                </footer>
            <?php endif; ?>
        </article>

        <?php
        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
            ?>
            <div style="margin-top: 40px;">
                <?php comments_template(); ?>
            </div>
            <?php
        endif;

    endwhile; // End of the loop.
    ?>

</main><!-- #primary -->

<?php
get_footer();
