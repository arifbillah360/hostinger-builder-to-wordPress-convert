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

        <!-- Hero Section with Background Image -->
        <section class="contact-hero" style="background: linear-gradient(rgba(102, 126, 234, 0.85), rgba(118, 75, 162, 0.85)), url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/contact/photo-1503485487305-41caefb070a5') center/cover; padding: 100px 20px; text-align: center; color: white;">
            <div class="container" style="max-width: 1200px; margin: 0 auto;">
                <h1 style="font-size: 48px; margin-bottom: 20px; font-weight: 700;"><?php the_title(); ?></h1>
                <p style="font-size: 24px; max-width: 800px; margin: 0 auto;">
                    Wir sind für Sie da! Kontaktieren Sie uns für ein unverbindliches Beratungsgespräch.
                </p>
            </div>
        </section>

        <!-- Main Content -->
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="padding: 60px 20px; background: white;">
            <div class="container" style="max-width: 1200px; margin: 0 auto;">

                <!-- User Content from WordPress Editor -->
                <div class="entry-content" style="font-size: 18px; line-height: 1.8; color: #555; margin-bottom: 60px; text-align: center;">
                    <?php the_content(); ?>
                </div>

                <!-- Contact Information Cards -->
                <section style="margin-bottom: 80px;">
                    <h2 style="font-size: 36px; color: #333; margin-bottom: 40px; text-align: center;">Kontaktinformationen</h2>

                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; margin-bottom: 60px;">

                        <!-- Phone Card -->
                        <div style="background: white; padding: 40px; border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.1); text-align: center;">
                            <div style="width: 80px; height: 80px; background: #e6f4ff; border-radius: 50%; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; font-size: 40px;">
                                📞
                            </div>
                            <h3 style="font-size: 24px; color: #333; margin-bottom: 15px;">Telefon</h3>
                            <p style="color: #666; font-size: 18px; line-height: 1.6; margin-bottom: 10px;">
                                Rufen Sie uns an:
                            </p>
                            <a href="tel:+49" style="color: #667eea; font-size: 20px; font-weight: 600; text-decoration: none;">
                                +49 (0) XXX XXXXXXX
                            </a>
                            <p style="color: #999; font-size: 14px; margin-top: 10px;">
                                Mo-Fr: 8:00 - 18:00 Uhr
                            </p>
                        </div>

                        <!-- Email Card -->
                        <div style="background: white; padding: 40px; border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.1); text-align: center;">
                            <div style="width: 80px; height: 80px; background: #e6f4ff; border-radius: 50%; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; font-size: 40px;">
                                📧
                            </div>
                            <h3 style="font-size: 24px; color: #333; margin-bottom: 15px;">E-Mail</h3>
                            <p style="color: #666; font-size: 18px; line-height: 1.6; margin-bottom: 10px;">
                                Schreiben Sie uns:
                            </p>
                            <a href="mailto:info@twk-rheinland.com" style="color: #667eea; font-size: 20px; font-weight: 600; text-decoration: none;">
                                info@twk-rheinland.com
                            </a>
                            <p style="color: #999; font-size: 14px; margin-top: 10px;">
                                Wir antworten innerhalb von 24 Stunden
                            </p>
                        </div>

                        <!-- Address Card -->
                        <div style="background: white; padding: 40px; border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.1); text-align: center;">
                            <div style="width: 80px; height: 80px; background: #e6f4ff; border-radius: 50%; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; font-size: 40px;">
                                📍
                            </div>
                            <h3 style="font-size: 24px; color: #333; margin-bottom: 15px;">Adresse</h3>
                            <p style="color: #666; font-size: 18px; line-height: 1.6; margin-bottom: 10px;">
                                TWK Rheinland
                            </p>
                            <p style="color: #667eea; font-size: 16px; font-weight: 600;">
                                Tim Wassong
                            </p>
                            <p style="color: #999; font-size: 14px; margin-top: 10px;">
                                Rheinland, Deutschland
                            </p>
                        </div>

                    </div>
                </section>

                <!-- Contact Form Section -->
                <section style="background: #f8f9fa; padding: 60px 40px; border-radius: 15px; margin-bottom: 80px;">
                    <h2 style="font-size: 36px; color: #333; margin-bottom: 20px; text-align: center;">Senden Sie uns eine Nachricht</h2>
                    <p style="font-size: 18px; color: #666; text-align: center; margin-bottom: 40px; max-width: 700px; margin-left: auto; margin-right: auto;">
                        Füllen Sie das Formular aus und wir melden uns schnellstmöglich bei Ihnen.
                    </p>

                    <div style="max-width: 800px; margin: 0 auto; background: white; padding: 40px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
                        <?php
                        // Check if Contact Form 7 plugin is active
                        if ( shortcode_exists( 'contact-form-7' ) ) {
                            echo do_shortcode( '[contact-form-7 id="1" title="Kontaktformular"]' );
                        } else {
                            // Fallback: Simple HTML form
                            ?>
                            <form action="#" method="post" style="display: grid; gap: 20px;">
                                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                                    <div>
                                        <label for="name" style="display: block; margin-bottom: 8px; color: #333; font-weight: 600;">Name *</label>
                                        <input type="text" id="name" name="name" required style="width: 100%; padding: 12px; border: 2px solid #e0e0e0; border-radius: 5px; font-size: 16px;">
                                    </div>
                                    <div>
                                        <label for="email" style="display: block; margin-bottom: 8px; color: #333; font-weight: 600;">E-Mail *</label>
                                        <input type="email" id="email" name="email" required style="width: 100%; padding: 12px; border: 2px solid #e0e0e0; border-radius: 5px; font-size: 16px;">
                                    </div>
                                </div>
                                <div>
                                    <label for="phone" style="display: block; margin-bottom: 8px; color: #333; font-weight: 600;">Telefon</label>
                                    <input type="tel" id="phone" name="phone" style="width: 100%; padding: 12px; border: 2px solid #e0e0e0; border-radius: 5px; font-size: 16px;">
                                </div>
                                <div>
                                    <label for="subject" style="display: block; margin-bottom: 8px; color: #333; font-weight: 600;">Betreff *</label>
                                    <input type="text" id="subject" name="subject" required style="width: 100%; padding: 12px; border: 2px solid #e0e0e0; border-radius: 5px; font-size: 16px;">
                                </div>
                                <div>
                                    <label for="message" style="display: block; margin-bottom: 8px; color: #333; font-weight: 600;">Nachricht *</label>
                                    <textarea id="message" name="message" rows="6" required style="width: 100%; padding: 12px; border: 2px solid #e0e0e0; border-radius: 5px; font-size: 16px; resize: vertical;"></textarea>
                                </div>
                                <div>
                                    <button type="submit" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 15px 40px; border: none; border-radius: 30px; font-size: 18px; font-weight: 600; cursor: pointer; transition: transform 0.3s;">
                                        Nachricht senden
                                    </button>
                                </div>
                                <p style="color: #999; font-size: 14px; margin: 0;">
                                    * Pflichtfelder
                                </p>
                            </form>
                            <div style="background: #fff3cd; border-left: 4px solid #ffc107; padding: 15px; margin-top: 20px; border-radius: 5px;">
                                <p style="color: #856404; margin: 0; font-size: 14px;">
                                    <strong>Hinweis:</strong> Installieren Sie das Plugin "Contact Form 7" für erweiterte Formularfunktionen.
                                </p>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </section>

                <!-- Business Hours & Additional Info -->
                <section style="margin-bottom: 80px;">
                    <h2 style="font-size: 36px; color: #333; margin-bottom: 40px; text-align: center;">Öffnungszeiten</h2>

                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">

                        <!-- Business Hours -->
                        <div style="background: white; padding: 40px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.08);">
                            <div style="text-align: center; margin-bottom: 30px;">
                                <div style="font-size: 50px; margin-bottom: 15px;">🕐</div>
                                <h3 style="font-size: 24px; color: #333; margin-bottom: 20px;">Geschäftszeiten</h3>
                            </div>
                            <div style="color: #666; font-size: 16px; line-height: 2;">
                                <div style="display: flex; justify-content: space-between; padding: 10px 0; border-bottom: 1px solid #eee;">
                                    <span style="font-weight: 600;">Montag - Freitag:</span>
                                    <span>08:00 - 18:00</span>
                                </div>
                                <div style="display: flex; justify-content: space-between; padding: 10px 0; border-bottom: 1px solid #eee;">
                                    <span style="font-weight: 600;">Samstag:</span>
                                    <span>Nach Vereinbarung</span>
                                </div>
                                <div style="display: flex; justify-content: space-between; padding: 10px 0;">
                                    <span style="font-weight: 600;">Sonntag:</span>
                                    <span>Geschlossen</span>
                                </div>
                            </div>
                        </div>

                        <!-- Emergency Service -->
                        <div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding: 40px; border-radius: 10px; color: white; text-align: center;">
                            <div style="font-size: 50px; margin-bottom: 15px;">🚨</div>
                            <h3 style="font-size: 24px; margin-bottom: 20px; color: white;">24/7 Notdienst</h3>
                            <p style="font-size: 16px; line-height: 1.8; margin-bottom: 20px; opacity: 0.95;">
                                Bei Notfällen erreichen Sie uns rund um die Uhr. Wir sind schnell vor Ort!
                            </p>
                            <a href="tel:+49" style="background: white; color: #667eea; padding: 12px 30px; text-decoration: none; border-radius: 25px; display: inline-block; font-weight: 600; font-size: 16px;">
                                Notdienst anrufen
                            </a>
                        </div>

                        <!-- Service Area -->
                        <div style="background: white; padding: 40px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.08);">
                            <div style="text-align: center; margin-bottom: 30px;">
                                <div style="font-size: 50px; margin-bottom: 15px;">🗺️</div>
                                <h3 style="font-size: 24px; color: #333; margin-bottom: 20px;">Servicegebiet</h3>
                            </div>
                            <p style="color: #666; font-size: 16px; line-height: 1.8; text-align: center;">
                                Wir sind in der gesamten Rheinland-Region für Sie im Einsatz. Kontaktieren Sie uns für Details zu unserem Einzugsgebiet.
                            </p>
                        </div>

                    </div>
                </section>

                <!-- Why Contact Us Section -->
                <section style="background: #f8f9fa; padding: 60px 40px; border-radius: 15px; margin-bottom: 60px;">
                    <h2 style="font-size: 36px; color: #333; margin-bottom: 40px; text-align: center;">Warum TWK Rheinland?</h2>

                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">

                        <div style="text-align: center;">
                            <div style="font-size: 40px; margin-bottom: 15px;">⚡</div>
                            <h4 style="font-size: 20px; color: #333; margin-bottom: 10px;">Schnelle Reaktion</h4>
                            <p style="color: #666; font-size: 16px; line-height: 1.6;">
                                Wir melden uns innerhalb von 24 Stunden bei Ihrer Anfrage
                            </p>
                        </div>

                        <div style="text-align: center;">
                            <div style="font-size: 40px; margin-bottom: 15px;">👨‍🔧</div>
                            <h4 style="font-size: 20px; color: #333; margin-bottom: 10px;">Fachkompetenz</h4>
                            <p style="color: #666; font-size: 16px; line-height: 1.6;">
                                Langjährige Erfahrung in Kälte- und Klimatechnik
                            </p>
                        </div>

                        <div style="text-align: center;">
                            <div style="font-size: 40px; margin-bottom: 15px;">💰</div>
                            <h4 style="font-size: 20px; color: #333; margin-bottom: 10px;">Faire Preise</h4>
                            <p style="color: #666; font-size: 16px; line-height: 1.6;">
                                Transparente Kostenvoranschläge ohne versteckte Kosten
                            </p>
                        </div>

                        <div style="text-align: center;">
                            <div style="font-size: 40px; margin-bottom: 15px;">✅</div>
                            <h4 style="font-size: 20px; color: #333; margin-bottom: 10px;">Zuverlässig</h4>
                            <p style="color: #666; font-size: 16px; line-height: 1.6;">
                                Pünktliche Termine und professionelle Ausführung
                            </p>
                        </div>

                    </div>
                </section>

                <!-- Map Section (Optional) -->
                <section style="margin-bottom: 60px;">
                    <h2 style="font-size: 36px; color: #333; margin-bottom: 40px; text-align: center;">Unser Standort</h2>
                    <div style="background: #e0e0e0; height: 400px; border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #666;">
                        <div style="text-align: center;">
                            <div style="font-size: 60px; margin-bottom: 20px;">🗺️</div>
                            <p style="font-size: 18px;">Google Maps Integration</p>
                            <p style="font-size: 14px; color: #999; margin-top: 10px;">
                                Fügen Sie hier Ihren Google Maps Embed-Code ein
                            </p>
                        </div>
                    </div>
                </section>

                <!-- Final CTA -->
                <section style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding: 60px 40px; border-radius: 15px; text-align: center; color: white;">
                    <h2 style="font-size: 36px; margin-bottom: 20px; color: white;">Bereit für Ihr Projekt?</h2>
                    <p style="font-size: 20px; margin-bottom: 30px; opacity: 0.95;">
                        Lassen Sie uns gemeinsam die beste Lösung für Ihre Kälte- und Klimatechnik finden!
                    </p>
                    <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                        <a href="tel:+49" style="background: white; color: #667eea; padding: 15px 40px; text-decoration: none; border-radius: 30px; display: inline-block; font-weight: 600; font-size: 18px;">
                            Jetzt anrufen
                        </a>
                        <a href="mailto:info@twk-rheinland.com" style="background: rgba(255,255,255,0.2); color: white; padding: 15px 40px; text-decoration: none; border-radius: 30px; display: inline-block; font-weight: 600; font-size: 18px; border: 2px solid white;">
                            E-Mail schreiben
                        </a>
                    </div>
                </section>

            </div>
        </article>

        <?php
    endwhile;
    ?>

</main><!-- #primary -->

<?php
get_footer();
