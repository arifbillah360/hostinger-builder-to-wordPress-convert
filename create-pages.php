<?php
/**
 * Auto-Create WordPress Pages for TWK Rheinland Theme
 *
 * INSTRUCTIONS:
 * 1. Upload this file to your WordPress root directory
 * 2. Access it via browser: https://yoursite.com/create-pages.php
 * 3. The script will create all required pages
 * 4. DELETE THIS FILE after running for security
 *
 * @package TWK_Rheinland
 */

// Load WordPress
require_once( 'wp-load.php' );

// Check if user is logged in as admin
if ( ! current_user_can( 'administrator' ) ) {
    wp_die( 'You must be logged in as an administrator to run this script.' );
}

// Start output
echo '<html><head><title>Creating Pages...</title></head><body>';
echo '<h1>TWK Rheinland - Creating Pages</h1>';
echo '<div style="font-family: Arial, sans-serif; max-width: 800px; margin: 50px auto; padding: 20px; background: #f5f5f5; border-radius: 10px;">';

// Function to create a page
function create_twk_page( $title, $slug, $template, $content = '' ) {
    // Check if page already exists
    $existing_page = get_page_by_path( $slug );

    if ( $existing_page ) {
        echo "<p style='color: orange;'>⚠️ Page '<strong>$title</strong>' already exists (ID: {$existing_page->ID})</p>";
        return $existing_page->ID;
    }

    // Create the page
    $page_data = array(
        'post_title'    => $title,
        'post_name'     => $slug,
        'post_content'  => $content,
        'post_status'   => 'publish',
        'post_type'     => 'page',
        'post_author'   => 1,
        'comment_status' => 'closed',
        'ping_status'   => 'closed',
    );

    // Insert the page
    $page_id = wp_insert_post( $page_data );

    if ( $page_id ) {
        // Set the page template
        update_post_meta( $page_id, '_wp_page_template', $template );
        echo "<p style='color: green;'>✅ Page '<strong>$title</strong>' created successfully! (ID: $page_id)</p>";
        echo "<p style='margin-left: 30px;'>→ URL: <a href='" . get_permalink( $page_id ) . "' target='_blank'>" . get_permalink( $page_id ) . "</a></p>";
        return $page_id;
    } else {
        echo "<p style='color: red;'>❌ Failed to create page '<strong>$title</strong>'</p>";
        return false;
    }
}

echo '<h2>Creating Pages...</h2>';

// Create About Page
$about_id = create_twk_page(
    'Über uns',
    'uber-uns',
    'page-about.php',
    '<p>Willkommen bei TWK Rheinland - Ihrem zuverlässigen Partner für professionelle Kälte- und Klimatechnik.</p>'
);

// Create Services Page
$services_id = create_twk_page(
    'Leistungen',
    'leistungen',
    'page-services.php',
    '<p>Professionelle Lösungen für Klimaanlagen, Kältetechnik und Gebäudetechnik.</p>'
);

// Create Contact Page
$contact_id = create_twk_page(
    'Kontakt',
    'kontakt',
    'page-contact.php',
    '<p>Kontaktieren Sie uns für ein unverbindliches Beratungsgespräch!</p>'
);

echo '<hr style="margin: 30px 0;">';
echo '<h2>Summary</h2>';
echo '<ul>';
echo '<li><strong>About Page (Über uns):</strong> ' . ( $about_id ? "✅ Created (ID: $about_id)" : "❌ Failed" ) . '</li>';
echo '<li><strong>Services Page (Leistungen):</strong> ' . ( $services_id ? "✅ Created (ID: $services_id)" : "❌ Failed" ) . '</li>';
echo '<li><strong>Contact Page (Kontakt):</strong> ' . ( $contact_id ? "✅ Created (ID: $contact_id)" : "❌ Failed" ) . '</li>';
echo '</ul>';

echo '<hr style="margin: 30px 0;">';
echo '<h2>Next Steps</h2>';
echo '<ol>';
echo '<li><strong>View your pages:</strong> Navigate to each page URL above to verify they display correctly</li>';
echo '<li><strong>Create a menu:</strong> Go to <a href="' . admin_url( 'nav-menus.php' ) . '">Appearance → Menus</a> and add these pages to your navigation</li>';
echo '<li><strong>Set homepage:</strong> Go to <a href="' . admin_url( 'options-reading.php' ) . '">Settings → Reading</a> and configure your homepage</li>';
echo '<li><strong>⚠️ DELETE THIS FILE:</strong> For security, delete <code>create-pages.php</code> from your server immediately!</li>';
echo '</ol>';

echo '<div style="background: #fffbcc; padding: 20px; border-left: 4px solid #ffeb3b; margin: 30px 0;">';
echo '<h3 style="margin-top: 0;">⚠️ Security Warning</h3>';
echo '<p><strong>IMPORTANT:</strong> Delete this file (<code>create-pages.php</code>) from your WordPress root directory immediately after running it!</p>';
echo '<p>This script can create pages and should not be accessible to unauthorized users.</p>';
echo '</div>';

echo '<div style="text-align: center; margin-top: 40px;">';
echo '<a href="' . admin_url() . '" style="background: #667eea; color: white; padding: 15px 30px; text-decoration: none; border-radius: 5px; display: inline-block; font-weight: bold;">Go to WordPress Admin</a>';
echo '</div>';

echo '</div>';
echo '</body></html>';
?>
