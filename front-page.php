<?php
/**
 * The front page template file
 *
 * This is the template that displays the homepage
 *
 * @package TWK_Rheinland
 * @since 1.0.0
 */

get_header();
?>

<main id="primary" class="site-main">

    <!-- Hero Section -->
    <section class="hero-section" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding: 80px 20px; text-align: center; color: white;">
        <div class="container" style="max-width: 1200px; margin: 0 auto;">
            <h1 style="font-size: 48px; margin-bottom: 20px; font-weight: 700;">TWK Rheinland</h1>
            <h2 style="font-size: 32px; margin-bottom: 30px; font-weight: 400;">Kälte- und Klimatechnik Experten</h2>
            <p style="font-size: 20px; margin-bottom: 40px; max-width: 800px; margin-left: auto; margin-right: auto;">
                Professionelle Lösungen für Klimaanlagen, Kältetechnik und Gebäudetechnik
            </p>
            <a href="<?php echo esc_url( home_url( '/kontakt' ) ); ?>" class="btn-primary" style="background: white; color: #667eea; padding: 15px 40px; text-decoration: none; border-radius: 30px; display: inline-block; font-weight: 600; font-size: 18px;">
                Kontaktieren Sie uns
            </a>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section" style="padding: 80px 20px; background: #f8f9fa;">
        <div class="container" style="max-width: 1200px; margin: 0 auto;">
            <h2 style="text-align: center; font-size: 36px; margin-bottom: 50px; color: #333;">Unsere Leistungen</h2>
            <p style="text-align: center; font-size: 18px; color: #666; margin-bottom: 50px; max-width: 700px; margin-left: auto; margin-right: auto;">
                Zuverlässige Reparatur und Wartung Ihrer Klima- und Kälteanlagen.
            </p>

            <div class="services-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
                <!-- Service 1 -->
                <div class="service-card" style="background: white; padding: 40px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); text-align: center;">
                    <div class="service-icon" style="width: 80px; height: 80px; background: #e6f4ff; border-radius: 50%; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; font-size: 40px;">
                        ❄️
                    </div>
                    <h3 style="font-size: 24px; margin-bottom: 15px; color: #333;">Klimareparatur</h3>
                    <p style="color: #666; font-size: 16px; line-height: 1.6;">
                        Schnelle und fachgerechte Reparaturen für Ihre Klimaanlagen.
                    </p>
                </div>

                <!-- Service 2 -->
                <div class="service-card" style="background: white; padding: 40px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); text-align: center;">
                    <div class="service-icon" style="width: 80px; height: 80px; background: #e6f4ff; border-radius: 50%; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; font-size: 40px;">
                        🏢
                    </div>
                    <h3 style="font-size: 24px; margin-bottom: 15px; color: #333;">Gebäudetechnik</h3>
                    <p style="color: #666; font-size: 16px; line-height: 1.6;">
                        Effiziente Lösungen für Lüftung, Heizung und Kälteanlagenbau.
                    </p>
                </div>

                <!-- Service 3 -->
                <div class="service-card" style="background: white; padding: 40px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); text-align: center;">
                    <div class="service-icon" style="width: 80px; height: 80px; background: #e6f4ff; border-radius: 50%; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; font-size: 40px;">
                        🔧
                    </div>
                    <h3 style="font-size: 24px; margin-bottom: 15px; color: #333;">Wartung & Service</h3>
                    <p style="color: #666; font-size: 16px; line-height: 1.6;">
                        Regelmäßige Wartung und schneller Service für Ihre Anlagen.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section" style="padding: 80px 20px; background: white;">
        <div class="container" style="max-width: 1200px; margin: 0 auto;">
            <h2 style="text-align: center; font-size: 36px; margin-bottom: 20px; color: #333;">Kundenstimmen</h2>
            <p style="text-align: center; font-size: 18px; color: #666; margin-bottom: 50px;">
                Echte Meinungen zu unserem Service
            </p>

            <div class="testimonials-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 30px;">
                <!-- Testimonial 1 -->
                <div class="testimonial-card" style="background: #f8f9fa; padding: 30px; border-radius: 10px; border-left: 4px solid #667eea;">
                    <p style="font-size: 16px; line-height: 1.8; color: #555; margin-bottom: 20px; font-style: italic;">
                        "Herr Wassong hat mich sehr gut beraten in Sachen Klimaanlagen und kam noch am selben Tag vorbei. Wir haben jetzt eine neue Klimaanlage und nutzen sie aktuell als Heizung. Vielen Dank nochmal!"
                    </p>
                    <div style="display: flex; align-items: center;">
                        <div style="width: 50px; height: 50px; background: #667eea; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold; margin-right: 15px;">
                            N
                        </div>
                        <div>
                            <p style="font-weight: 600; color: #333; margin: 0;">Nadine F.</p>
                            <p style="color: #999; font-size: 14px; margin: 0;">Google Bewertung</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="testimonial-card" style="background: #f8f9fa; padding: 30px; border-radius: 10px; border-left: 4px solid #667eea;">
                    <p style="font-size: 16px; line-height: 1.8; color: #555; margin-bottom: 20px; font-style: italic;">
                        "Super Service! Herr Wassong war sofort zur Stelle und hat unsere Klimaanlage professionell repariert. Sehr zu empfehlen!"
                    </p>
                    <div style="display: flex; align-items: center;">
                        <div style="width: 50px; height: 50px; background: #764ba2; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold; margin-right: 15px;">
                            M
                        </div>
                        <div>
                            <p style="font-weight: 600; color: #333; margin: 0;">Michael S.</p>
                            <p style="color: #999; font-size: 14px; margin: 0;">Google Bewertung</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section" style="padding: 80px 20px; background: #667eea; text-align: center; color: white;">
        <div class="container" style="max-width: 800px; margin: 0 auto;">
            <h2 style="font-size: 36px; margin-bottom: 20px;">Benötigen Sie professionelle Klimatechnik?</h2>
            <p style="font-size: 18px; margin-bottom: 30px; opacity: 0.9;">
                Kontaktieren Sie uns noch heute für eine kostenlose Beratung!
            </p>
            <a href="<?php echo esc_url( home_url( '/kontakt' ) ); ?>" class="btn-secondary" style="background: white; color: #667eea; padding: 15px 40px; text-decoration: none; border-radius: 30px; display: inline-block; font-weight: 600; font-size: 18px;">
                Jetzt Kontakt aufnehmen
            </a>
        </div>
    </section>

</main><!-- #primary -->

<?php
get_footer();
