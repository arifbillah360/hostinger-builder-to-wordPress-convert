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

        <!-- Hero Section with Background Image -->
        <section class="about-hero" style="background: linear-gradient(rgba(102, 126, 234, 0.9), rgba(118, 75, 162, 0.9)), url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/partner/photo-1574334292321-4844f63aefef') center/cover; padding: 100px 20px; text-align: center; color: white;">
            <div class="container" style="max-width: 1200px; margin: 0 auto;">
                <h1 style="font-size: 48px; margin-bottom: 20px; font-weight: 700;"><?php the_title(); ?></h1>
                <p style="font-size: 24px; max-width: 800px; margin: 0 auto;">
                    Ihr zuverlässiger Partner für professionelle Kälte- und Klimatechnik
                </p>
            </div>
        </section>

        <!-- Main Content -->
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="padding: 60px 20px; background: white;">
            <div class="container" style="max-width: 1200px; margin: 0 auto;">

                <!-- User Content from WordPress Editor -->
                <div class="entry-content" style="font-size: 18px; line-height: 1.8; color: #555; margin-bottom: 60px;">
                    <?php the_content(); ?>
                </div>

                <!-- About Sections -->
                <div class="about-sections">

                    <!-- Company Section -->
                    <section class="about-section" style="margin-bottom: 60px;">
                        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 40px; align-items: center;">
                            <div>
                                <h2 style="font-size: 36px; color: #333; margin-bottom: 20px;">Über TWK Rheinland</h2>
                                <p style="font-size: 18px; line-height: 1.8; color: #555; margin-bottom: 15px;">
                                    Als führendes Unternehmen im Bereich Kälte- und Klimatechnik bieten wir maßgeschneiderte Lösungen für Privat- und Gewerbekunden.
                                </p>
                                <p style="font-size: 18px; line-height: 1.8; color: #555; margin-bottom: 15px;">
                                    Mit jahrelanger Erfahrung und modernster Technologie garantieren wir höchste Qualität und Zuverlässigkeit bei allen unseren Dienstleistungen.
                                </p>
                                <p style="font-size: 18px; line-height: 1.8; color: #555;">
                                    Unser Engagement für Exzellenz macht uns zum bevorzugten Partner in der Region.
                                </p>
                            </div>
                            <div style="border-radius: 10px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/partner/photo-1654694019457-eb36c0201d30" alt="Klimatechnik Installation" style="width: 100%; height: auto; display: block;">
                            </div>
                        </div>
                    </section>

                    <!-- Mission Section -->
                    <section class="about-section" style="margin-bottom: 60px; background: #f8f9fa; padding: 60px 40px; border-radius: 10px;">
                        <div style="text-align: center; max-width: 900px; margin: 0 auto;">
                            <h2 style="font-size: 36px; color: #333; margin-bottom: 30px;">Unsere Mission</h2>
                            <p style="font-size: 20px; line-height: 1.8; color: #555; margin-bottom: 20px;">
                                Wir setzen uns dafür ein, jedem Kunden die bestmögliche Klima- und Kältelösung zu bieten, die sowohl energieeffizient als auch umweltfreundlich ist.
                            </p>
                            <p style="font-size: 18px; line-height: 1.8; color: #666;">
                                Durch kontinuierliche Weiterbildung und den Einsatz modernster Technologien bleiben wir an der Spitze unserer Branche.
                            </p>
                        </div>
                    </section>

                    <!-- Services Grid -->
                    <section class="about-section" style="margin-bottom: 60px;">
                        <h2 style="font-size: 36px; color: #333; margin-bottom: 40px; text-align: center;">Unsere Expertise</h2>
                        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">

                            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.08); text-align: center;">
                                <div style="width: 80px; height: 80px; background: #e6f4ff; border-radius: 50%; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; font-size: 40px;">
                                    ❄️
                                </div>
                                <h3 style="font-size: 22px; color: #333; margin-bottom: 15px;">Kältetechnik</h3>
                                <p style="color: #666; font-size: 16px; line-height: 1.6;">
                                    Professionelle Installation und Wartung von Kälteanlagen für jeden Bedarf.
                                </p>
                            </div>

                            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.08); text-align: center;">
                                <div style="width: 80px; height: 80px; background: #e6f4ff; border-radius: 50%; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; font-size: 40px;">
                                    🌡️
                                </div>
                                <h3 style="font-size: 22px; color: #333; margin-bottom: 15px;">Klimatechnik</h3>
                                <p style="color: #666; font-size: 16px; line-height: 1.6;">
                                    Moderne Klimaanlagen für optimales Raumklima das ganze Jahr über.
                                </p>
                            </div>

                            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.08); text-align: center;">
                                <div style="width: 80px; height: 80px; background: #e6f4ff; border-radius: 50%; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; font-size: 40px;">
                                    🔧
                                </div>
                                <h3 style="font-size: 22px; color: #333; margin-bottom: 15px;">Wartung</h3>
                                <p style="color: #666; font-size: 16px; line-height: 1.6;">
                                    Regelmäßige Wartung und schneller Service für maximale Betriebssicherheit.
                                </p>
                            </div>

                        </div>
                    </section>

                    <!-- Team Image Section -->
                    <section class="about-section" style="margin-bottom: 60px;">
                        <h2 style="font-size: 36px; color: #333; margin-bottom: 40px; text-align: center;">Unser Team</h2>
                        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
                            <div style="border-radius: 10px; overflow: hidden; box-shadow: 0 6px 20px rgba(0,0,0,0.1);">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/partner/photo-1619140099965-06d74aaf51fa" alt="Techniker bei der Arbeit" style="width: 100%; height: 300px; object-fit: cover; display: block;">
                            </div>
                            <div style="border-radius: 10px; overflow: hidden; box-shadow: 0 6px 20px rgba(0,0,0,0.1);">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/partner/photo-1684674452842-5f5bb4004bd8" alt="Klimaanlage Service" style="width: 100%; height: 300px; object-fit: cover; display: block;">
                            </div>
                        </div>
                        <div style="text-align: center; margin-top: 40px;">
                            <p style="font-size: 18px; line-height: 1.8; color: #555; max-width: 800px; margin: 0 auto;">
                                Unser erfahrenes Team steht Ihnen mit Fachwissen und Engagement zur Verfügung. Von der Beratung bis zur Installation - wir sind für Sie da.
                            </p>
                        </div>
                    </section>

                    <!-- CTA Section -->
                    <section class="about-cta" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding: 60px 40px; border-radius: 15px; text-align: center; color: white;">
                        <h2 style="font-size: 36px; margin-bottom: 20px; color: white;">Bereit für eine Zusammenarbeit?</h2>
                        <p style="font-size: 20px; margin-bottom: 30px; opacity: 0.95;">
                            Kontaktieren Sie uns noch heute für ein unverbindliches Beratungsgespräch!
                        </p>
                        <a href="<?php echo esc_url( home_url( '/kontakt' ) ); ?>" style="background: white; color: #667eea; padding: 15px 40px; text-decoration: none; border-radius: 30px; display: inline-block; font-weight: 600; font-size: 18px;">
                            Jetzt Kontakt aufnehmen
                        </a>
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
