<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
    <style>
        /* Basic Reset and Layout */
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 1200px; margin: 0 auto; padding: 0 20px; }

        /* Header Styles */
        .site-header { background: white; box-shadow: 0 2px 10px rgba(0,0,0,0.1); position: sticky; top: 0; z-index: 1000; }
        .header-container { display: flex; justify-content: space-between; align-items: center; padding: 20px; }
        .site-branding h1 { font-size: 24px; margin: 0; }
        .site-branding a { color: #667eea; text-decoration: none; font-weight: 700; }
        .site-branding a:hover { color: #764ba2; }
        .site-description { font-size: 14px; color: #666; margin-top: 5px; }

        /* Navigation */
        .main-navigation { display: flex; align-items: center; }
        .menu-toggle { display: none; background: #667eea; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; font-size: 16px; }
        .nav-menu { display: flex; list-style: none; gap: 30px; margin: 0; }
        .nav-menu li { margin: 0; }
        .nav-menu a { color: #333; text-decoration: none; font-weight: 500; padding: 10px 0; display: block; transition: color 0.3s; }
        .nav-menu a:hover { color: #667eea; }

        /* Mobile Menu */
        @media (max-width: 768px) {
            .menu-toggle { display: block; }
            .menu-container { display: none; position: absolute; top: 100%; left: 0; right: 0; background: white; box-shadow: 0 4px 6px rgba(0,0,0,0.1); padding: 20px; }
            .menu-container.active { display: block; }
            .nav-menu { flex-direction: column; gap: 0; }
            .nav-menu li { width: 100%; border-bottom: 1px solid #eee; }
            .nav-menu a { padding: 15px 0; }
            .header-container { flex-wrap: wrap; }
        }

        /* Content Area */
        .site-content { min-height: 60vh; }
    </style>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary" style="position: absolute; left: -9999px;"><?php esc_html_e( 'Skip to content', 'twk-rheinland' ); ?></a>

    <header id="masthead" class="site-header">
        <div class="header-container container">
            <div class="site-branding">
                <?php
                if ( has_custom_logo() ) {
                    the_custom_logo();
                } else {
                    ?>
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                    <?php
                    $description = get_bloginfo( 'description', 'display' );
                    if ( $description || is_customize_preview() ) {
                        ?>
                        <p class="site-description"><?php echo esc_html( $description ); ?></p>
                        <?php
                    }
                }
                ?>
            </div>

            <nav id="site-navigation" class="main-navigation">
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false" onclick="this.nextElementSibling.classList.toggle('active')">
                    ☰ <?php esc_html_e( 'Menu', 'twk-rheinland' ); ?>
                </button>
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'menu_id'        => 'primary-menu',
                    'menu_class'     => 'nav-menu',
                    'container'      => 'div',
                    'container_class'=> 'menu-container',
                    'fallback_cb'    => function() {
                        echo '<div class="menu-container"><ul class="nav-menu">';
                        echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">Home</a></li>';
                        echo '<li><a href="' . esc_url( home_url( '/uber-uns' ) ) . '">Über uns</a></li>';
                        echo '<li><a href="' . esc_url( home_url( '/leistungen' ) ) . '">Leistungen</a></li>';
                        echo '<li><a href="' . esc_url( home_url( '/kontakt' ) ) . '">Kontakt</a></li>';
                        echo '</ul></div>';
                    },
                ) );
                ?>
            </nav>
        </div>
    </header>

    <div id="content" class="site-content">
