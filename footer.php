    </div><!-- #content -->

    <footer id="colophon" class="site-footer" style="background: #2c3e50; color: white; padding: 60px 20px 20px;">
        <div class="footer-content container" style="max-width: 1200px; margin: 0 auto;">
            <div class="footer-widgets" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 40px; margin-bottom: 40px;">
                <!-- Footer Column 1 -->
                <div class="footer-widget">
                    <h3 style="color: #fff; margin-bottom: 20px; font-size: 20px;">TWK Rheinland</h3>
                    <p style="color: #bbb; line-height: 1.8; margin-bottom: 15px;">
                        Ihr zuverlässiger Partner für Kälte- und Klimatechnik in der Region.
                    </p>
                    <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                        <?php dynamic_sidebar( 'footer-1' ); ?>
                    <?php endif; ?>
                </div>

                <!-- Footer Column 2 - Quick Links -->
                <div class="footer-widget">
                    <h3 style="color: #fff; margin-bottom: 20px; font-size: 20px;">Schnellzugriff</h3>
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'footer',
                        'menu_class'     => 'footer-menu',
                        'container'      => false,
                        'depth'          => 1,
                        'fallback_cb'    => function() {
                            echo '<ul style="list-style: none; padding: 0;">';
                            echo '<li style="margin-bottom: 10px;"><a href="' . esc_url( home_url( '/' ) ) . '" style="color: #bbb; text-decoration: none;">Home</a></li>';
                            echo '<li style="margin-bottom: 10px;"><a href="' . esc_url( home_url( '/uber-uns' ) ) . '" style="color: #bbb; text-decoration: none;">Über uns</a></li>';
                            echo '<li style="margin-bottom: 10px;"><a href="' . esc_url( home_url( '/leistungen' ) ) . '" style="color: #bbb; text-decoration: none;">Leistungen</a></li>';
                            echo '<li style="margin-bottom: 10px;"><a href="' . esc_url( home_url( '/kontakt' ) ) . '" style="color: #bbb; text-decoration: none;">Kontakt</a></li>';
                            echo '</ul>';
                        },
                    ) );
                    ?>
                    <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
                        <?php dynamic_sidebar( 'footer-2' ); ?>
                    <?php endif; ?>
                </div>

                <!-- Footer Column 3 - Contact -->
                <div class="footer-widget">
                    <h3 style="color: #fff; margin-bottom: 20px; font-size: 20px;">Kontakt</h3>
                    <p style="color: #bbb; line-height: 1.8; margin-bottom: 10px;">
                        <strong>TWK Rheinland - Tim Wassong</strong>
                    </p>
                    <p style="color: #bbb; line-height: 1.8; margin-bottom: 10px;">
                        📧 Email: <a href="mailto:info@twk-rheinland.com" style="color: #667eea; text-decoration: none;">info@twk-rheinland.com</a>
                    </p>
                    <p style="color: #bbb; line-height: 1.8; margin-bottom: 10px;">
                        📞 Telefon: <a href="tel:+49" style="color: #667eea; text-decoration: none;">Kontaktieren Sie uns</a>
                    </p>
                    <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
                        <?php dynamic_sidebar( 'footer-3' ); ?>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="site-info" style="border-top: 1px solid #34495e; padding-top: 30px; text-align: center;">
                <p style="color: #bbb; margin: 0;">
                    &copy; <?php echo date( 'Y' ); ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="color: #667eea; text-decoration: none;"><?php bloginfo( 'name' ); ?></a>
                    <?php esc_html_e( ' - Alle Rechte vorbehalten.', 'twk-rheinland' ); ?>
                </p>
                <p style="color: #999; font-size: 14px; margin-top: 10px;">
                    Kälte- und Klimatechnik Experten aus Deutschland
                </p>
            </div>
        </div>
    </footer>
</div><!-- #page -->

<style>
    /* Footer Menu Styles */
    .footer-menu { list-style: none; padding: 0; margin: 0; }
    .footer-menu li { margin-bottom: 10px; }
    .footer-menu a { color: #bbb; text-decoration: none; transition: color 0.3s; }
    .footer-menu a:hover { color: #667eea; }
</style>

<?php wp_footer(); ?>

</body>
</html>
