# TWK Rheinland WordPress Theme

A custom WordPress theme converted from Hostinger Website Builder for TWK Rheinland - Tim Wassong, a German climate and cooling technology company.

## Theme Information

- **Theme Name:** TWK Rheinland
- **Version:** 1.0.0
- **Author:** Arif Billah
- **License:** GPL v2 or later
- **Text Domain:** twk-rheinland

## Description

This theme has been specifically developed for TWK Rheinland, featuring:

- Responsive design optimized for all devices
- German language support (native German content)
- Custom page templates for About, Services, and Contact pages
- Google Maps integration for location display
- Optimized asset loading (page-specific CSS)
- SEO-friendly structure
- WordPress customizer support

## Features

### Core Features

- ✅ Fully responsive design
- ✅ Custom logo support
- ✅ Custom background support
- ✅ Navigation menus (Primary & Footer)
- ✅ Widget areas (Sidebar + 3 Footer areas)
- ✅ Featured images support
- ✅ HTML5 markup
- ✅ Translation ready

### Page Templates

1. **Default Template** - For standard pages and posts
2. **About Page Template** (`page-about.php`) - For company information
3. **Services Page Template** (`page-services.php`) - For service listings
4. **Contact Page Template** (`page-contact.php`) - With contact form and map integration

### Asset Management

The theme intelligently loads page-specific stylesheets:

- `home-style.css` - Home page styles
- `partner-style.css` - About/Partner page styles
- `services-style.css` - Services page styles
- `contact-style.css` - Contact page styles

All JavaScript files are properly enqueued and loaded in the footer for optimal performance.

## Installation

### Method 1: Manual Installation

1. Download the theme folder
2. Upload the `twk-rheinland` folder to `/wp-content/themes/` directory
3. Activate the theme through the 'Appearance > Themes' menu in WordPress

### Method 2: ZIP Installation

1. Compress the `twk-rheinland` folder into a `.zip` file
2. Go to 'Appearance > Themes > Add New > Upload Theme'
3. Choose the ZIP file and click 'Install Now'
4. Activate the theme

## Theme Setup

### 1. Configure Menus

1. Go to `Appearance > Menus`
2. Create a new menu
3. Assign it to "Primary Menu" location
4. Optionally create a footer menu and assign to "Footer Menu" location

### 2. Set Up Pages

Create the following pages and assign the respective page templates:

- **Home** - Use as front page
- **Über uns** (About) - Assign "About Page" template
- **Leistungen** (Services) - Assign "Services Page" template
- **Kontakt** (Contact) - Assign "Contact Page" template

### 3. Configure Widgets

Go to `Appearance > Widgets` and add widgets to:

- Sidebar
- Footer 1, 2, and 3 areas

### 4. Set Up Logo

1. Go to `Appearance > Customize > Site Identity`
2. Upload your logo
3. Adjust logo dimensions as needed

### 5. Contact Form (Optional)

For the contact page to function properly:

1. Install "Contact Form 7" plugin
2. Create a contact form
3. The form will automatically appear on the contact page template

### 6. Google Maps Integration

To add Google Maps to the contact page:

1. Edit the `page-contact.php` template
2. Add your Google Maps embed code in the designated section
3. Or use a Google Maps plugin like "WP Google Maps"

## Required Plugins

### Recommended Plugins

- **Contact Form 7** - For contact forms
- **WP Google Maps** - For maps integration
- **Yoast SEO** - For SEO optimization
- **Wordfence Security** - For security

### Optional Plugins

- **WPForms** - Alternative to Contact Form 7
- **All in One SEO** - Alternative to Yoast SEO
- **W3 Total Cache** - For performance optimization

## Theme Customization

### Customizer Options

Access via `Appearance > Customize`:

- Site Identity (Logo, Title, Tagline)
- Colors (Background color)
- Menus
- Widgets
- Homepage Settings

### Adding Custom CSS

1. Go to `Appearance > Customize > Additional CSS`
2. Add your custom CSS code
3. Or edit the `style.css` file directly

### Modifying Templates

All template files are located in:

```
/wp-content/themes/twk-rheinland/
├── header.php
├── footer.php
├── index.php
├── page.php
├── page-about.php
├── page-services.php
├── page-contact.php
└── template-parts/
    ├── content.php
    ├── content-page.php
    └── content-none.php
```

## File Structure

```
twk-rheinland/
├── assets/
│   ├── css/           # Page-specific stylesheets
│   ├── js/            # JavaScript files
│   ├── images/        # Image assets
│   ├── fonts/         # Font files
│   └── maps/          # Map-related files
├── inc/
│   ├── template-tags.php      # Custom template tags
│   ├── template-functions.php # Theme functions
│   └── customizer.php         # Customizer settings
├── template-parts/    # Reusable template parts
├── functions.php      # Theme functions and features
├── style.css          # Main stylesheet with theme metadata
├── header.php         # Header template
├── footer.php         # Footer template
├── index.php          # Main template
├── page.php           # Page template
├── sidebar.php        # Sidebar template
├── page-about.php     # About page template
├── page-services.php  # Services page template
├── page-contact.php   # Contact page template
└── README.md          # This file
```

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Opera (latest)

## Performance Optimization

The theme includes:

- Conditional asset loading (page-specific CSS)
- Scripts loaded in footer
- Optimized image loading
- Clean, semantic HTML5 markup

### Additional Optimization Tips

1. Use a caching plugin (W3 Total Cache, WP Super Cache)
2. Optimize images before uploading
3. Use a CDN for assets
4. Enable Gzip compression
5. Minify CSS and JavaScript files

## Multilingual Support

The theme is translation-ready with text domain `twk-rheinland`.

To translate:

1. Use a plugin like "Loco Translate" or "WPML"
2. Or create `.po` and `.mo` files for your language
3. Place them in `/wp-content/languages/themes/`

## Accessibility

The theme follows WordPress accessibility standards:

- Semantic HTML5 markup
- Proper heading hierarchy
- Skip-to-content link
- Screen reader text for icons
- Keyboard navigation support
- ARIA labels where appropriate

## Support

For theme support and questions:

- GitHub: [https://github.com/arifbillah360/hostinger-builder-to-wordPress-convert](https://github.com/arifbillah360/hostinger-builder-to-wordPress-convert)
- Issues: Open an issue on GitHub

## Changelog

### Version 1.0.0 - January 2026

- Initial release
- Converted from Hostinger Builder export
- Full WordPress theme structure
- Custom page templates
- Responsive design
- Asset optimization
- Widget areas
- Menu locations
- German language support

## Credits

- Theme Developer: Arif Billah
- Original Website: TWK Rheinland - Tim Wassong
- Built with: WordPress, HTML5, CSS3, JavaScript

## License

This theme is licensed under the GPL v2 or later.

```
This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
```

## Migration Notes

This theme was converted from a Hostinger Website Builder export. Key conversion steps included:

1. Extracting HTML structure from static pages
2. Converting to WordPress template hierarchy
3. Implementing WordPress functions and hooks
4. Organizing assets into theme structure
5. Creating custom page templates
6. Adding WordPress-specific features (menus, widgets, customizer)

## Future Enhancements

Potential improvements for future versions:

- [ ] Add Gutenberg block patterns
- [ ] Implement custom blocks
- [ ] Add more customizer options
- [ ] Create additional page templates
- [ ] Add theme options panel
- [ ] Implement schema markup
- [ ] Add breadcrumb navigation
- [ ] Create custom widgets

## Notes

- This theme requires WordPress 5.0 or higher
- PHP 7.4 or higher is required
- Ensure all assets are properly uploaded
- Test thoroughly before deploying to production
- Keep backups before making modifications

---

**Last Updated:** January 2026
**Theme Version:** 1.0.0
