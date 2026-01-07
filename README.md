# TWK Rheinland - WordPress Theme

A professional WordPress theme for TWK Rheinland - Tim Wassong, a German climate and cooling technology company. This theme was converted from a Hostinger Website Builder export into a fully functional, production-ready WordPress theme.

## 📋 About

This repository contains a complete WordPress theme ready for installation and use. The theme features responsive design, German language support, custom page templates, and optimized asset loading specifically designed for a climate and cooling technology business.

## 🚀 Quick Start

### Requirements

- **WordPress:** 5.0 or higher
- **PHP:** 7.4 or higher
- **MySQL:** 5.6+ or MariaDB 10.1+

### Installation

1. **Download the Theme**
   ```bash
   git clone https://github.com/arifbillah360/hostinger-builder-to-wordPress-convert.git
   ```

2. **Copy to WordPress**
   ```bash
   cp -r wp-content/themes/twk-rheinland /path/to/your/wordpress/wp-content/themes/
   ```

3. **Activate**
   - Go to WordPress Dashboard → Appearance → Themes
   - Find "TWK Rheinland" and click "Activate"

## ✨ Theme Features

### Core Features

- ✅ **Fully Responsive Design** - Optimized for all devices
- ✅ **Custom Logo Support** - Easy branding customization
- ✅ **Navigation Menus** - Primary and Footer menu locations
- ✅ **Widget Areas** - Sidebar + 3 Footer widget areas
- ✅ **Featured Images** - Post thumbnail support
- ✅ **HTML5 Markup** - Modern semantic structure
- ✅ **Translation Ready** - German language support (text domain: twk-rheinland)
- ✅ **SEO Friendly** - Optimized structure for search engines

### Custom Page Templates

1. **Default Template** - For standard pages and posts
2. **About Page** (`page-about.php`) - Company information template
3. **Services Page** (`page-services.php`) - Service listings template
4. **Contact Page** (`page-contact.php`) - Contact form and map template

### Smart Asset Loading

The theme intelligently loads page-specific stylesheets for optimal performance:

- `home-style.css` - Home page styles (296KB)
- `partner-style.css` - About/Partner page styles (296KB)
- `services-style.css` - Services page styles (296KB)
- `contact-style.css` - Contact page styles (296KB)

JavaScript files are properly enqueued and loaded in the footer.

## 🛠️ Setup Guide

### 1. Configure Menus

1. Go to `Appearance → Menus`
2. Create a new menu
3. Add pages: Home, Über uns, Leistungen, Kontakt
4. Assign to "Primary Menu" location
5. Optionally create a footer menu

### 2. Create Pages

Create the following pages with respective templates:

| Page Name | Template | Slug |
|-----------|----------|------|
| Home | Default | home |
| Über uns | About Page | uber-uns |
| Leistungen | Services Page | leistungen |
| Kontakt | Contact Page | kontakt |

**To assign templates:**
- Edit page → Page Attributes → Template → Select template

### 3. Set Front Page

1. Go to `Settings → Reading`
2. Select "A static page"
3. Choose your Home page as "Front page"

### 4. Configure Logo

1. Go to `Appearance → Customize → Site Identity`
2. Click "Select logo"
3. Upload your company logo
4. Adjust dimensions as needed

### 5. Setup Widgets (Optional)

1. Go to `Appearance → Widgets`
2. Add widgets to:
   - Sidebar
   - Footer 1, 2, 3

## 📁 Theme Structure

```
wp-content/themes/twk-rheinland/
├── assets/
│   ├── css/           # Page-specific stylesheets (4 files)
│   ├── js/            # JavaScript files (12 files)
│   ├── images/        # Image assets (60 files)
│   ├── fonts/         # Font files (11 files)
│   └── maps/          # Map integration files (3 files)
├── inc/
│   ├── template-tags.php      # Custom template tags
│   ├── template-functions.php # Theme enhancement functions
│   └── customizer.php         # WordPress Customizer integration
├── template-parts/
│   ├── content.php            # Post content template
│   ├── content-page.php       # Page content template
│   └── content-none.php       # No results template
├── functions.php      # Theme functions and features
├── style.css          # Main stylesheet with theme metadata
├── header.php         # Header template
├── footer.php         # Footer template
├── index.php          # Main template
├── page.php           # Default page template
├── sidebar.php        # Sidebar template
├── page-about.php     # About page template
├── page-services.php  # Services page template
├── page-contact.php   # Contact page template
└── README.md          # Theme documentation
```

## 🔌 Recommended Plugins

### Essential

- **Contact Form 7** - For contact forms on the contact page
- **Yoast SEO** - For SEO optimization
- **Wordfence Security** - For security protection

### Optional

- **WP Google Maps** - For maps integration on contact page
- **W3 Total Cache** - For performance optimization
- **WPForms** - Alternative to Contact Form 7
- **All in One SEO** - Alternative to Yoast SEO

## 🎨 Customization

### Using WordPress Customizer

Access via `Appearance → Customize`:

- **Site Identity** - Logo, title, tagline, favicon
- **Colors** - Background color
- **Menus** - Navigation menus
- **Widgets** - Widget areas
- **Homepage Settings** - Front page display

### Adding Custom CSS

Two methods:

1. **Customizer:**
   - `Appearance → Customize → Additional CSS`
   - Add your custom CSS code

2. **Direct Edit:**
   - Edit `style.css` file in theme directory
   - Add custom styles at the bottom

**Important:** Create a child theme for major customizations to preserve changes during updates.

## 🌐 Language Support

The theme is translation-ready with text domain `twk-rheinland`.

### To Translate:

1. **Using Plugin:**
   - Install "Loco Translate" or "WPML"
   - Create translation for your language

2. **Manual:**
   - Create `.po` and `.mo` files
   - Place in `/wp-content/languages/themes/`

### Native Content

The theme includes German language labels and content structure for:
- Klimaanlagen (Air conditioning)
- Kältetechnik (Cooling technology)
- Heiztechnik (Heating technology)

## 📊 Theme Information

- **Theme Name:** TWK Rheinland
- **Version:** 1.0.0
- **Author:** Arif Billah
- **Author URI:** https://github.com/arifbillah360
- **License:** GPL v2 or later
- **Text Domain:** twk-rheinland
- **Tags:** business, responsive, custom-menu, featured-images, threaded-comments, translation-ready

## 🌐 Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Opera (latest)

## ⚡ Performance

### Built-in Optimizations

- ✅ Conditional asset loading (page-specific CSS)
- ✅ Scripts loaded in footer
- ✅ Clean, semantic HTML5 markup
- ✅ Optimized image loading

### Additional Tips

1. Use a caching plugin (W3 Total Cache, WP Super Cache)
2. Optimize images before uploading
3. Use a CDN for static assets
4. Enable Gzip compression
5. Minify CSS and JavaScript files

## ♿ Accessibility

The theme follows WordPress accessibility standards:

- Semantic HTML5 markup
- Proper heading hierarchy
- Skip-to-content link
- Screen reader text for icons
- Keyboard navigation support
- ARIA labels where appropriate

## 🤝 Support

For theme support and issues:

- **GitHub Issues:** [Open an issue](https://github.com/arifbillah360/hostinger-builder-to-wordPress-convert/issues)
- **Documentation:** See theme README.md in `/wp-content/themes/twk-rheinland/`

## 📝 Changelog

### Version 1.0.0 - January 2026

- ✨ Initial release
- ✨ Converted from Hostinger Builder export
- ✨ Full WordPress theme structure
- ✨ Custom page templates (About, Services, Contact)
- ✨ Responsive design
- ✨ Asset optimization
- ✨ Widget areas
- ✨ Menu locations
- ✨ German language support
- ✨ 107 files with complete theme functionality

## 👨‍💻 Development

### Project History

This theme was professionally converted from a Hostinger Website Builder static export to a fully functional WordPress theme. The conversion process included:

1. ✅ Extracting HTML structure from static pages
2. ✅ Converting to WordPress template hierarchy
3. ✅ Implementing WordPress functions and hooks
4. ✅ Organizing assets into theme structure
5. ✅ Creating custom page templates
6. ✅ Adding WordPress-specific features (menus, widgets, customizer)
7. ✅ Optimizing performance and asset loading

### Contributing

Contributions are welcome! Please:

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/improvement`)
3. Commit your changes (`git commit -m 'Add improvement'`)
4. Push to the branch (`git push origin feature/improvement`)
5. Open a Pull Request

## 📄 License

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

## 🙏 Credits

- **Theme Developer:** Arif Billah
- **Original Website:** TWK Rheinland - Tim Wassong
- **Platform:** Converted from Hostinger Website Builder
- **Built with:** WordPress, HTML5, CSS3, JavaScript

## 📧 Contact

- **GitHub:** [@arifbillah360](https://github.com/arifbillah360)
- **Repository:** [hostinger-builder-to-wordPress-convert](https://github.com/arifbillah360/hostinger-builder-to-wordPress-convert)

---

**Made with ❤️ for the WordPress community**

**Last Updated:** January 2026 | **Version:** 1.0.0
