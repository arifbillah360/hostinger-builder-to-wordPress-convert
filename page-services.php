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

        <!-- Hero Section -->
        <section class="services-hero" style="background: linear-gradient(rgba(102, 126, 234, 0.85), rgba(118, 75, 162, 0.85)), url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/services/photo-1574334292321-4844f63aefef') center/cover; padding: 100px 20px; text-align: center; color: white;">
            <div class="container" style="max-width: 1200px; margin: 0 auto;">
                <h1 style="font-size: 48px; margin-bottom: 20px; font-weight: 700;"><?php the_title(); ?></h1>
                <p style="font-size: 24px; max-width: 800px; margin: 0 auto;">
                    Professionelle Kälte- und Klimalösungen für jeden Bedarf
                </p>
            </div>
        </section>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="padding: 60px 20px; background: white;">
            <div class="container" style="max-width: 1200px; margin: 0 auto;">

                <!-- User Content -->
                <div class="entry-content" style="font-size: 18px; line-height: 1.8; color: #555; margin-bottom: 60px; text-align: center;">
                    <?php the_content(); ?>
                </div>

                <!-- Main Services Grid -->
                <section style="margin-bottom: 80px;">
                    <h2 style="font-size: 36px; color: #333; margin-bottom: 50px; text-align: center;">Unsere Hauptleistungen</h2>

                    <div class="services-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 40px;">

                        <!-- Service 1: Klimaanlagen -->
                        <div style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 6px 20px rgba(0,0,0,0.1); transition: transform 0.3s;">
                            <div style="height: 200px; overflow: hidden;">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/services/photo-1619140099965-06d74aaf51fa" alt="Klimaanlagen Installation" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <div style="padding: 30px;">
                                <div style="width: 60px; height: 60px; background: #e6f4ff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 30px; margin-bottom: 20px;">
                                    ❄️
                                </div>
                                <h3 style="font-size: 24px; color: #333; margin-bottom: 15px;">Klimaanlagen</h3>
                                <p style="color: #666; font-size: 16px; line-height: 1.7; margin-bottom: 15px;">
                                    Installation und Wartung von Klimaanlagen für Wohn- und Gewerberäume. Moderne Split-Geräte und zentrale Klimatisierungssysteme.
                                </p>
                                <ul style="color: #666; font-size: 15px; line-height: 1.8; margin: 0; padding-left: 20px;">
                                    <li>Split-Klimageräte</li>
                                    <li>Multi-Split Systeme</li>
                                    <li>Zentrale Klimaanlagen</li>
                                    <li>Regelmäßige Wartung</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Service 2: Kältetechnik -->
                        <div style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 6px 20px rgba(0,0,0,0.1);">
                            <div style="height: 200px; overflow: hidden;">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/services/photo-1654694019457-eb36c0201d30" alt="Kältetechnik" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <div style="padding: 30px;">
                                <div style="width: 60px; height: 60px; background: #e6f4ff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 30px; margin-bottom: 20px;">
                                    🧊
                                </div>
                                <h3 style="font-size: 24px; color: #333; margin-bottom: 15px;">Kältetechnik</h3>
                                <p style="color: #666; font-size: 16px; line-height: 1.7; margin-bottom: 15px;">
                                    Professionelle Kältetechnik-Lösungen für Industrie, Gastronomie und Handel. Von der Planung bis zur Installation.
                                </p>
                                <ul style="color: #666; font-size: 15px; line-height: 1.8; margin: 0; padding-left: 20px;">
                                    <li>Kühlräume & Kühlzellen</li>
                                    <li>Gewerbekälteanlagen</li>
                                    <li>Tiefkühltechnik</li>
                                    <li>Notreparaturen</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Service 3: Heiztechnik -->
                        <div style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 6px 20px rgba(0,0,0,0.1);">
                            <div style="height: 200px; overflow: hidden;">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/services/photo-1700124084147-995973b6a970" alt="Heiztechnik" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <div style="padding: 30px;">
                                <div style="width: 60px; height: 60px; background: #e6f4ff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 30px; margin-bottom: 20px;">
                                    🌡️
                                </div>
                                <h3 style="font-size: 24px; color: #333; margin-bottom: 15px;">Heiztechnik</h3>
                                <p style="color: #666; font-size: 16px; line-height: 1.7; margin-bottom: 15px;">
                                    Moderne Heizsysteme und -lösungen für effiziente Wärmeversorgung. Energieeffizient und umweltfreundlich.
                                </p>
                                <ul style="color: #666; font-size: 15px; line-height: 1.8; margin: 0; padding-left: 20px;">
                                    <li>Wärmepumpen</li>
                                    <li>Fußbodenheizung</li>
                                    <li>Heizkörper</li>
                                    <li>Heizungswartung</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Service 4: Wartung & Service -->
                        <div style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 6px 20px rgba(0,0,0,0.1);">
                            <div style="height: 200px; overflow: hidden;">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/services/photo-1607374744542-726a199aaa08" alt="Wartung und Service" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <div style="padding: 30px;">
                                <div style="width: 60px; height: 60px; background: #e6f4ff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 30px; margin-bottom: 20px;">
                                    🔧
                                </div>
                                <h3 style="font-size: 24px; color: #333; margin-bottom: 15px;">Wartung & Service</h3>
                                <p style="color: #666; font-size: 16px; line-height: 1.7; margin-bottom: 15px;">
                                    Regelmäßige Wartung und schneller Service für maximale Betriebssicherheit Ihrer Anlagen.
                                </p>
                                <ul style="color: #666; font-size: 15px; line-height: 1.8; margin: 0; padding-left: 20px;">
                                    <li>Jahreswartungen</li>
                                    <li>Reparaturservice</li>
                                    <li>24/7 Notdienst</li>
                                    <li>Fernwartung</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </section>

                <!-- Additional Services -->
                <section style="background: #f8f9fa; padding: 60px 40px; border-radius: 15px; margin-bottom: 80px;">
                    <h2 style="font-size: 36px; color: #333; margin-bottom: 40px; text-align: center;">Weitere Dienstleistungen</h2>

                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
                        <div style="text-align: center; padding: 20px;">
                            <div style="font-size: 40px; margin-bottom: 15px;">🏢</div>
                            <h4 style="font-size: 20px; color: #333; margin-bottom: 10px;">Gebäudetechnik</h4>
                            <p style="color: #666; font-size: 15px;">Lüftungsanlagen und Gebäudeleittechnik</p>
                        </div>

                        <div style="text-align: center; padding: 20px;">
                            <div style="font-size: 40px; margin-bottom: 15px;">⚡</div>
                            <h4 style="font-size: 20px; color: #333; margin-bottom: 10px;">Energieberatung</h4>
                            <p style="color: #666; font-size: 15px;">Optimierung Ihrer Energiekosten</p>
                        </div>

                        <div style="text-align: center; padding: 20px;">
                            <div style="font-size: 40px; margin-bottom: 15px;">📋</div>
                            <h4 style="font-size: 20px; color: #333; margin-bottom: 10px;">Planung</h4>
                            <p style="color: #666; font-size: 15px;">Fachgerechte Projektplanung</p>
                        </div>

                        <div style="text-align: center; padding: 20px;">
                            <div style="font-size: 40px; margin-bottom: 15px;">📞</div>
                            <h4 style="font-size: 20px; color: #333; margin-bottom: 10px;">Beratung</h4>
                            <p style="color: #666; font-size: 15px;">Kostenlose Erstberatung</p>
                        </div>
                    </div>
                </section>

                <!-- Why Choose Us -->
                <section style="margin-bottom: 60px;">
                    <h2 style="font-size: 36px; color: #333; margin-bottom: 40px; text-align: center;">Warum TWK Rheinland?</h2>

                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
                        <div style="display: flex; gap: 20px; align-items: start;">
                            <div style="width: 50px; height: 50px; background: #667eea; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold; flex-shrink: 0;">
                                1
                            </div>
                            <div>
                                <h4 style="font-size: 20px; color: #333; margin-bottom: 10px;">Erfahrung</h4>
                                <p style="color: #666; font-size: 16px; line-height: 1.6;">
                                    Jahrelange Expertise in der Kälte- und Klimatechnik-Branche.
                                </p>
                            </div>
                        </div>

                        <div style="display: flex; gap: 20px; align-items: start;">
                            <div style="width: 50px; height: 50px; background: #667eea; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold; flex-shrink: 0;">
                                2
                            </div>
                            <div>
                                <h4 style="font-size: 20px; color: #333; margin-bottom: 10px;">Qualität</h4>
                                <p style="color: #666; font-size: 16px; line-height: 1.6;">
                                    Hochwertige Komponenten und fachgerechte Installation.
                                </p>
                            </div>
                        </div>

                        <div style="display: flex; gap: 20px; align-items: start;">
                            <div style="width: 50px; height: 50px; background: #667eea; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold; flex-shrink: 0;">
                                3
                            </div>
                            <div>
                                <h4 style="font-size: 20px; color: #333; margin-bottom: 10px;">Service</h4>
                                <p style="color: #666; font-size: 16px; line-height: 1.6;">
                                    Schneller und zuverlässiger Kundenservice rund um die Uhr.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- CTA Section -->
                <section style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding: 60px 40px; border-radius: 15px; text-align: center; color: white;">
                    <h2 style="font-size: 36px; margin-bottom: 20px; color: white;">Interesse an unseren Leistungen?</h2>
                    <p style="font-size: 20px; margin-bottom: 30px; opacity: 0.95;">
                        Kontaktieren Sie uns für ein individuelles Angebot!
                    </p>
                    <a href="<?php echo esc_url( home_url( '/kontakt' ) ); ?>" style="background: white; color: #667eea; padding: 15px 40px; text-decoration: none; border-radius: 30px; display: inline-block; font-weight: 600; font-size: 18px;">
                        Jetzt Anfrage senden
                    </a>
                </section>

            </div>
        </article>

        <?php
    endwhile;
    ?>

</main><!-- #primary -->

<?php
get_footer();
