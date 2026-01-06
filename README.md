# 🔄 Hostinger Builder to WordPress Converter

A migration toolkit for converting Hostinger Website Builder sites to WordPress. This repository contains the exported static HTML files from a Hostinger-built website for **TWK Rheinland - Tim Wassong**, a German climate and cooling technology company, ready for WordPress conversion.

## 📋 Project Overview

This project facilitates the migration of websites built with Hostinger's Website Builder to WordPress CMS. It contains a complete static HTML export from a Hostinger builder site, including all pages, assets, styles, and scripts necessary for conversion.

**Primary Use Case:** Convert static Hostinger builder exports to dynamic WordPress-powered websites while preserving design, functionality, and content.

**Target Audience:** Web developers, migration specialists, and agencies performing Hostinger-to-WordPress migrations.

## 🛠️ Technical Stack

### Current Architecture
- **Platform:** Static HTML export from Hostinger Website Builder
- **Markup:** HTML5
- **Styling:** CSS3 (inline and external stylesheets)
- **Scripting:** Vanilla JavaScript
- **Third-party Integrations:**
  - Google Maps API
  - Twain Extension (browser extension compatibility)
  - Plasmo Framework components

### File Structure
```
.
├── HTML Pages (4 pages, ~800-900KB each)
├── Asset Directories
│   ├── CSS files
│   ├── JavaScript files
│   ├── Image assets (photos)
│   └── Map integration files
└── Total Size: ~14MB
```

### Languages & Technologies
- HTML5
- CSS3
- JavaScript (ES5/ES6)
- Google Maps JavaScript API

## ✨ Features

### Core Functionalities
- ✅ **Multi-page Website Export** - 4 fully functional pages (Home, About, Services, Contact)
- ✅ **Responsive Design** - Mobile-optimized layouts with breakpoint-based styling
- ✅ **Google Maps Integration** - Embedded location maps
- ✅ **Modern UI Components** - Buttons, forms, navigation, and animations
- ✅ **Asset Management** - Organized directory structure for CSS, JS, and images
- ✅ **German Language Content** - Native German content for TWK Rheinland business

### Page Structure
1. **Home Page** (`twk rheinland – Kälte- und Klimatechnik Experten`)
   - Main landing page
   - Source: `https://slategrey-snail-927231.builder-preview.com/`

2. **About Page** (`twk rheinland - Ihr Partner für Klimatechnik`)
   - Company information
   - Source: `https://slategrey-snail-927231.builder-preview.com/uber-uns`

3. **Services Page** (`Kältetechnik und Klimalösungen vom Profi`)
   - Service offerings
   - Source: `https://slategrey-snail-927231.builder-preview.com/leistungen`

4. **Contact Page** (`Kontakt zu twk rheinland – Klimaservice`)
   - Contact form and information
   - Source: `https://slategrey-snail-927231.builder-preview.com/kontakt`

### Key Selling Points
- 🚀 **Complete Export** - All assets, styles, and scripts included
- 🎨 **Design Preservation** - Maintains original Hostinger builder design
- 📱 **Mobile-First** - Fully responsive across all devices
- 🔌 **Ready for Migration** - Structured for WordPress theme development

## 🚀 Installation & Setup

### Prerequisites
- **Web Server** (Apache/Nginx) or local development environment
- **WordPress Installation** (5.0 or higher recommended)
- **Code Editor** (VS Code, Sublime Text, etc.)
- **Basic Knowledge** of HTML, CSS, WordPress theme development
- **Optional:** Node.js and npm (for build tools)

### Step-by-Step Installation

#### 1. Clone the Repository
```bash
git clone https://github.com/arifbillah360/hostinger-builder-to-wordPress-convert.git
cd hostinger-builder-to-wordPress-convert
```

#### 2. Review the Static Files
Open the HTML files in a browser to review the current site structure:

```bash
# Using a simple HTTP server (Python)
python3 -m http.server 8000

# Or using PHP
php -S localhost:8000

# Or using Node.js http-server
npx http-server -p 8000
```

Navigate to `http://localhost:8000` and review each page.

#### 3. WordPress Setup
Ensure you have a fresh WordPress installation ready:

```bash
# Download WordPress
wget https://wordpress.org/latest.zip
unzip latest.zip
mv wordpress /var/www/html/your-site-name

# Configure wp-config.php with your database credentials
```

#### 4. Theme Development Preparation
Create a custom WordPress theme structure:

```bash
cd /var/www/html/your-site-name/wp-content/themes/
mkdir twk-rheinland-theme
cd twk-rheinland-theme

# Create basic theme files
touch style.css functions.php index.php header.php footer.php
```

### Configuration Requirements

#### Environment Setup
No special environment variables required for the static files. However, for WordPress integration:

- **Database:** MySQL 5.6+ or MariaDB 10.1+
- **PHP:** Version 7.4 or higher
- **WordPress:** Version 5.0+

#### WordPress Theme Configuration
Update `style.css` with theme information:

```css
/*
Theme Name: TWK Rheinland
Theme URI: https://your-site.com
Author: Your Name
Author URI: https://your-site.com
Description: Custom WordPress theme converted from Hostinger Builder
Version: 1.0.0
License: GNU General Public License v2 or later
Text Domain: twk-rheinland
*/
```

## 💻 Usage

### Conversion Workflow

#### Phase 1: Analysis
1. **Review HTML Structure** - Examine each HTML file to understand the layout
2. **Identify Components** - List reusable components (header, footer, navigation)
3. **Map Assets** - Document all CSS, JS, and image dependencies
4. **Note Dynamic Elements** - Identify forms, maps, and interactive features

#### Phase 2: WordPress Theme Development
1. **Create Template Files**
   ```bash
   # In your WordPress theme directory
   header.php    # Extract header section from HTML
   footer.php    # Extract footer section from HTML
   index.php     # Main template
   page.php      # Page template
   single.php    # Single post template (if needed)
   ```

2. **Convert HTML to PHP Templates**
   - Extract header: Move `<head>` and opening `<body>` to `header.php`
   - Extract footer: Move closing tags and scripts to `footer.php`
   - Convert static content to WordPress template tags

3. **Migrate CSS**
   ```bash
   # Copy CSS files to theme directory
   mkdir css
   cp /path/to/export/*_files/*.css css/
   ```

   Register in `functions.php`:
   ```php
   function twk_enqueue_styles() {
       wp_enqueue_style('main-style', get_stylesheet_uri());
       wp_enqueue_style('custom-style', get_template_directory_uri() . '/css/main.css');
   }
   add_action('wp_enqueue_scripts', 'twk_enqueue_styles');
   ```

4. **Migrate JavaScript**
   ```bash
   mkdir js
   cp /path/to/export/*_files/*.js js/
   ```

   Register in `functions.php`:
   ```php
   function twk_enqueue_scripts() {
       wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);
   }
   add_action('wp_enqueue_scripts', 'twk_enqueue_scripts');
   ```

5. **Migrate Images**
   ```bash
   mkdir images
   cp -r /path/to/export/*_files/photo-* images/
   ```

#### Phase 3: WordPress Integration
1. **Create Pages**
   - Dashboard → Pages → Add New
   - Create: Home, About (Über uns), Services (Leistungen), Contact (Kontakt)

2. **Add Content**
   - Copy content from HTML files to WordPress pages
   - Upload images to Media Library
   - Update image paths to WordPress media URLs

3. **Configure Menus**
   - Dashboard → Appearance → Menus
   - Create navigation menu matching original structure

4. **Setup Contact Form**
   - Install Contact Form 7 or WPForms plugin
   - Recreate the contact form from the HTML

5. **Configure Google Maps**
   - Install WP Google Maps or similar plugin
   - Add API key and recreate map from original site

### Testing
```bash
# Test responsive design
# Test all internal links
# Verify form submissions
# Check Google Maps functionality
# Validate HTML/CSS
# Test across browsers (Chrome, Firefox, Safari, Edge)
```

## 📁 Project Structure

✅ **CLEANED AND ORGANIZED** - January 6, 2026

```
hostinger-builder-to-wordPress-convert/
│
├── 📄 index.html                          # Home page (Climate & Cooling Experts)
├── 📄 partner-klimatechnik.html           # About/Partner page
├── 📄 kaelte-klimaloesungen-profi.html    # Services page
├── 📄 kontakt-klimaservice.html           # Contact page
│
├── 📁 assets/                             # All website assets organized
│   │
│   ├── 📁 css/                            # Stylesheets (4 files, 1.2MB)
│   │   ├── home-style.css
│   │   ├── partner-style.css
│   │   ├── services-style.css
│   │   └── contact-style.css
│   │
│   ├── 📁 js/                             # JavaScript (12 files, 1.2MB)
│   │   ├── common.js
│   │   ├── controls.js
│   │   ├── main.js
│   │   ├── map.js
│   │   └── [8 more files]
│   │
│   ├── 📁 images/                         # Images organized by page
│   │   ├── 📁 home/                       # 14 images
│   │   ├── 📁 partner/                    # 20 images
│   │   ├── 📁 services/                   # 23 images
│   │   └── 📁 contact/                    # 3 images
│   │
│   ├── 📁 fonts/                          # Font files (11 files)
│   │
│   └── 📁 maps/                           # Google Maps embeds (3 files)
│
├── 📄 README.md                           # This file
├── 📄 CLEANUP_AUDIT.md                    # Cleanup audit report
├── 📄 CLEANUP_SUMMARY.txt                 # Executive cleanup summary
├── 📄 PROJECT_STRUCTURE.txt               # Detailed structure documentation
└── 📄 MIGRATION_REPORT.md                 # Complete migration report
```

### Directory Organization Rationale

**Clean Structure Benefits:**
- ✅ **Short, descriptive filenames** - Easy to read and understand
- ✅ **All pages in root** - Simple, flat structure for easy access
- ✅ **Organized by asset type** - CSS, JS, images, fonts, maps separated
- ✅ **Images organized by page** - Easy to identify which images belong where
- ✅ **WordPress-ready** - Structure designed for easy WordPress migration
- ✅ **No duplicates** - Clean, single source of truth for all assets
- ✅ **Proper file extensions** - All .js files (not .js.download)

**What Changed:**
- 🔄 HTML files renamed from long German names to short English names
- 🔄 All "_files" folders extracted into organized "assets/" structure
- 🔄 All file paths updated in HTML to point to new locations
- 🔄 All pages in root directory for simplified structure
- ✂️ Removed redundant "twk rheinland" and "Tim Wassong" from filenames

**File Count:**
- Total Files: 96 (reduced from 101)
- HTML Pages: 4 (all in root directory)
- Total Assets: 90 files in organized structure

## 🔧 Migration Best Practices

### Before You Start
- ✅ **Backup Everything** - Create backups of both static files and WordPress installation
- ✅ **Test Locally First** - Perform conversion in local development environment
- ✅ **Document Changes** - Keep notes on customizations and modifications
- ✅ **Version Control** - Use Git to track all changes

### During Conversion
- 🎯 **Mobile-First Approach** - Test responsive design at every step
- 🎯 **Preserve SEO** - Maintain URL structure and meta tags
- 🎯 **Performance** - Optimize images and minify CSS/JS
- 🎯 **Accessibility** - Ensure WCAG compliance

### After Conversion
- ✅ **Cross-Browser Testing** - Test on Chrome, Firefox, Safari, Edge
- ✅ **Performance Audit** - Use Google PageSpeed Insights
- ✅ **SEO Audit** - Use Google Search Console
- ✅ **Security Scan** - Use security plugins like Wordfence

## 📚 Additional Resources

### WordPress Development
- [WordPress Theme Development Handbook](https://developer.wordpress.org/themes/)
- [WordPress Template Hierarchy](https://developer.wordpress.org/themes/basics/template-hierarchy/)
- [WordPress Codex](https://codex.wordpress.org/)

### Migration Tools
- [All-in-One WP Migration](https://wordpress.org/plugins/all-in-one-wp-migration/)
- [Duplicator](https://wordpress.org/plugins/duplicator/)
- [WP Migrate DB](https://wordpress.org/plugins/wp-migrate-db/)

### Hostinger Resources
- [Hostinger Website Builder Documentation](https://support.hostinger.com/en/collections/3169197-website-builder)
- [Hostinger to WordPress Migration Guide](https://support.hostinger.com/)

### Development Tools
- [Local by Flywheel](https://localwp.com/) - Local WordPress development
- [XAMPP](https://www.apachefriends.org/) - Local server environment
- [Visual Studio Code](https://code.visualstudio.com/) - Code editor

## 🤝 Contributing

Contributions are welcome! If you have improvements or additional conversion scripts:

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/improvement`)
3. Commit your changes (`git commit -m 'Add conversion script'`)
4. Push to the branch (`git push origin feature/improvement`)
5. Open a Pull Request

## 📝 License

This project is licensed under the MIT License - see the LICENSE file for details.

## 👤 Author

**Arif Billah**
- GitHub: [@arifbillah360](https://github.com/arifbillah360)

## 🙏 Acknowledgments

- TWK Rheinland - Tim Wassong for the original website content
- Hostinger for the Website Builder platform
- WordPress community for excellent documentation

## ⚠️ Disclaimer

This repository contains an export from a Hostinger Website Builder site for migration purposes. All content belongs to TWK Rheinland - Tim Wassong. This toolkit is for educational and migration purposes only.

---

**Need Help?** Open an issue in the GitHub repository or consult the WordPress community forums.

**Last Updated:** January 2026
