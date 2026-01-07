-- SQL Script to Create Missing WordPress Pages for TWK Rheinland Theme
-- Run this in phpMyAdmin or MySQL command line
-- Replace 'wp_' with your actual WordPress table prefix if different

-- Note: You'll need to replace these placeholders:
-- [SITE_URL] = Your WordPress site URL (e.g., https://twk-rheinland.com)
-- [CURRENT_DATE] = Current date in format: 2026-01-07 12:00:00

-- Page 1: About Page (Über uns)
INSERT INTO wp_posts (
    post_author, post_date, post_date_gmt, post_content, post_title,
    post_excerpt, post_status, comment_status, ping_status, post_password,
    post_name, to_ping, pinged, post_modified, post_modified_gmt,
    post_content_filtered, post_parent, guid, menu_order, post_type,
    post_mime_type, comment_count
) VALUES (
    1, NOW(), UTC_TIMESTAMP(),
    '<p>Willkommen bei TWK Rheinland - Ihrem zuverlässigen Partner für professionelle Kälte- und Klimatechnik.</p>',
    'Über uns',
    '',
    'publish',
    'closed',
    'closed',
    '',
    'uber-uns',
    '',
    '',
    NOW(),
    UTC_TIMESTAMP(),
    '',
    0,
    '[SITE_URL]/?page_id=2',
    0,
    'page',
    '',
    0
);

-- Get the ID of the About page we just created
SET @about_page_id = LAST_INSERT_ID();

-- Set the About page template
INSERT INTO wp_postmeta (post_id, meta_key, meta_value)
VALUES (@about_page_id, '_wp_page_template', 'page-about.php');

-- Page 2: Services Page (Leistungen)
INSERT INTO wp_posts (
    post_author, post_date, post_date_gmt, post_content, post_title,
    post_excerpt, post_status, comment_status, ping_status, post_password,
    post_name, to_ping, pinged, post_modified, post_modified_gmt,
    post_content_filtered, post_parent, guid, menu_order, post_type,
    post_mime_type, comment_count
) VALUES (
    1, NOW(), UTC_TIMESTAMP(),
    '<p>Professionelle Lösungen für Klimaanlagen, Kältetechnik und Gebäudetechnik.</p>',
    'Leistungen',
    '',
    'publish',
    'closed',
    'closed',
    '',
    'leistungen',
    '',
    '',
    NOW(),
    UTC_TIMESTAMP(),
    '',
    0,
    '[SITE_URL]/?page_id=3',
    0,
    'page',
    '',
    0
);

-- Get the ID of the Services page
SET @services_page_id = LAST_INSERT_ID();

-- Set the Services page template
INSERT INTO wp_postmeta (post_id, meta_key, meta_value)
VALUES (@services_page_id, '_wp_page_template', 'page-services.php');

-- Page 3: Contact Page (Kontakt)
INSERT INTO wp_posts (
    post_author, post_date, post_date_gmt, post_content, post_title,
    post_excerpt, post_status, comment_status, ping_status, post_password,
    post_name, to_ping, pinged, post_modified, post_modified_gmt,
    post_content_filtered, post_parent, guid, menu_order, post_type,
    post_mime_type, comment_count
) VALUES (
    1, NOW(), UTC_TIMESTAMP(),
    '<p>Kontaktieren Sie uns für ein unverbindliches Beratungsgespräch!</p>',
    'Kontakt',
    '',
    'publish',
    'closed',
    'closed',
    '',
    'kontakt',
    '',
    '',
    NOW(),
    UTC_TIMESTAMP(),
    '',
    0,
    '[SITE_URL]/?page_id=4',
    0,
    'page',
    '',
    0
);

-- Get the ID of the Contact page
SET @contact_page_id = LAST_INSERT_ID();

-- Set the Contact page template
INSERT INTO wp_postmeta (post_id, meta_key, meta_value)
VALUES (@contact_page_id, '_wp_page_template', 'page-contact.php');

-- Optional: Create a navigation menu with these pages
-- (You can also do this manually in WordPress admin under Appearance → Menus)

SELECT 'Pages created successfully!' as Status,
       @about_page_id as About_Page_ID,
       @services_page_id as Services_Page_ID,
       @contact_page_id as Contact_Page_ID;
