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

    <!-- Hero Section with Background Image -->
    <section class="hero-section" style="background: linear-gradient(rgba(102, 126, 234, 0.9), rgba(118, 75, 162, 0.9)), url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/home/photo-1684674452842-5f5bb4004bd8') center/cover; padding: 120px 20px; text-align: center; color: white;">
        <div class="container" style="max-width: 1200px; margin: 0 auto;">
            <h1 style="font-size: 56px; margin-bottom: 20px; font-weight: 700; text-shadow: 2px 2px 4px rgba(0,0,0,0.2);">TWK Rheinland</h1>
            <h2 style="font-size: 36px; margin-bottom: 30px; font-weight: 400;">Kälte- und Klimatechnik Experten</h2>
            <p style="font-size: 22px; margin-bottom: 40px; max-width: 800px; margin-left: auto; margin-right: auto;">
                Professionelle Lösungen für Klimaanlagen, Kältetechnik und Gebäudetechnik
            </p>
            <a href="<?php echo esc_url( home_url( '/kontakt' ) ); ?>" class="btn-primary" style="background: white; color: #667eea; padding: 18px 45px; text-decoration: none; border-radius: 30px; display: inline-block; font-weight: 600; font-size: 18px; box-shadow: 0 4px 15px rgba(0,0,0,0.2);">
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
                <div class="service-card" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 6px 20px rgba(0,0,0,0.1); transition: transform 0.3s;">
                    <div style="height: 200px; overflow: hidden;">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/home/photo-1574334292321-4844f63aefef" alt="Klimareparatur" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div style="padding: 30px; text-align: center;">
                        <div class="service-icon" style="width: 70px; height: 70px; background: #e6f4ff; border-radius: 50%; margin: -50px auto 20px; display: flex; align-items: center; justify-content: center; font-size: 35px; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">
                            ❄️
                        </div>
                        <h3 style="font-size: 24px; margin-bottom: 15px; color: #333;">Klimareparatur</h3>
                        <p style="color: #666; font-size: 16px; line-height: 1.6;">
                            Schnelle und fachgerechte Reparaturen für Ihre Klimaanlagen.
                        </p>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="service-card" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 6px 20px rgba(0,0,0,0.1); transition: transform 0.3s;">
                    <div style="height: 200px; overflow: hidden;">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/home/photo-1700124113583-81aa99ea2aa2" alt="Gebäudetechnik" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div style="padding: 30px; text-align: center;">
                        <div class="service-icon" style="width: 70px; height: 70px; background: #e6f4ff; border-radius: 50%; margin: -50px auto 20px; display: flex; align-items: center; justify-content: center; font-size: 35px; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">
                            🏢
                        </div>
                        <h3 style="font-size: 24px; margin-bottom: 15px; color: #333;">Gebäudetechnik</h3>
                        <p style="color: #666; font-size: 16px; line-height: 1.6;">
                            Effiziente Lösungen für Lüftung, Heizung und Kälteanlagenbau.
                        </p>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="service-card" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 6px 20px rgba(0,0,0,0.1); transition: transform 0.3s;">
                    <div style="height: 200px; overflow: hidden;">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/home/photo-1700124084147-995973b6a970" alt="Wartung & Service" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div style="padding: 30px; text-align: center;">
                        <div class="service-icon" style="width: 70px; height: 70px; background: #e6f4ff; border-radius: 50%; margin: -50px auto 20px; display: flex; align-items: center; justify-content: center; font-size: 35px; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">
                            🔧
                        </div>
                        <h3 style="font-size: 24px; margin-bottom: 15px; color: #333;">Wartung & Service</h3>
                        <p style="color: #666; font-size: 16px; line-height: 1.6;">
                            Regelmäßige Wartung und schneller Service für Ihre Anlagen.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section" style="padding: 80px 20px; background: white;">
        <div class="container" style="max-width: 1200px; margin: 0 auto;">
            <h2 style="text-align: center; font-size: 36px; margin-bottom: 20px; color: #333;">Kundenstimmen</h2>
            <p style="text-align: center; font-size: 18px; color: #666; margin-bottom: 50px;">
                Echte Google-Bewertungen von zufriedenen Kunden
            </p>

            <div class="testimonials-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 30px; max-width: 900px; margin: 0 auto;">
                <!-- Testimonial 1 - Google Review Image -->
                <div class="testimonial-card" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 6px 20px rgba(0,0,0,0.1);">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/home/google-bewertung1-3DeKsyZ3oXTJOp59.png" alt="Google Bewertung von Nadine F." style="width: 100%; height: auto; display: block;">
                </div>

                <!-- Testimonial 2 - Google Review Image -->
                <div class="testimonial-card" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 6px 20px rgba(0,0,0,0.1);">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/home/googlebewertung2-Dv2Vsr4gOsqjpyFT.png" alt="Google Bewertung" style="width: 100%; height: auto; display: block;">
                </div>
            </div>

            <!-- Additional Text Testimonial -->
            <div style="max-width: 800px; margin: 50px auto 0; background: #f8f9fa; padding: 40px; border-radius: 15px; border-left: 5px solid #667eea;">
                <p style="font-size: 20px; line-height: 1.8; color: #555; margin-bottom: 20px; font-style: italic; text-align: center;">
                    "Herr Wassong hat mich sehr gut beraten in Sachen Klimaanlagen und kam noch am selben Tag vorbei. Wir haben jetzt eine neue Klimaanlage und nutzen sie aktuell als Heizung. Vielen Dank nochmal!"
                </p>
                <div style="display: flex; align-items: center; justify-content: center;">
                    <div style="width: 60px; height: 60px; background: #667eea; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold; margin-right: 20px; font-size: 24px;">
                        N
                    </div>
                    <div>
                        <p style="font-weight: 600; color: #333; margin: 0; font-size: 18px;">Nadine F.</p>
                        <p style="color: #999; font-size: 16px; margin: 5px 0 0 0;">⭐⭐⭐⭐⭐ Google Bewertung</p>
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
