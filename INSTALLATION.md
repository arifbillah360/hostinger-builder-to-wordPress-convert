# TWK Rheinland WordPress Theme - Installation Guide

## ⚠️ IMPORTANT SETUP INSTRUCTIONS

This theme has been converted from Hostinger Website Builder. Follow these steps carefully to make it work properly in WordPress.

## 📦 What's Included

- ✅ WordPress theme structure (header.php, footer.php, etc.)
- ✅ All CSS stylesheets from Hostinger (assets/css/)
- ✅ All JavaScript files (assets/js/)
- ✅ All images (assets/images/)
- ✅ All fonts (assets/fonts/)

## 🚀 Installation Steps

### Step 1: Install the Theme

1. **Copy to WordPress**:
   ```bash
   cp -r /path/to/this/folder /path/to/wordpress/wp-content/themes/twk-rheinland
   ```

2. **Activate the Theme**:
   - Log into WordPress Admin
   - Go to `Appearance → Themes`
   - Find "TWK Rheinland"
   - Click "Activate"

### Step 2: Create Pages

The theme needs these pages to function properly:

1. **Create Home Page**:
   - Go to `Pages → Add New`
   - Title: "Home" or "Startseite"
   - Content: Add your home page content
   - Template: Default Template
   - Publish

2. **Create About Page (Über uns)**:
   - Go to `Pages → Add New`
   - Title: "Über uns"
   - Page Attributes → Template: "About Page"
   - Add your content about TWK Rheinland
   - Publish

3. **Create Services Page (Leistungen)**:
   - Go to `Pages → Add New`
   - Title: "Leistungen"
   - Page Attributes → Template: "Services Page"
   - Add your services content
   - Publish

4. **Create Contact Page (Kontakt)**:
   - Go to `Pages → Add New`
   - Title: "Kontakt"
   - Page Attributes → Template: "Contact Page"
   - Add contact information
   - Publish

### Step 3: Set Front Page

1. Go to `Settings → Reading`
2. Select "A static page" for "Your homepage displays"
3. Choose your "Home" page as the front page
4. Save Changes

### Step 4: Create Navigation Menu

1. Go to `Appearance → Menus`
2. Click "Create a new menu"
3. Name it "Primary Menu"
4. Add pages:
   - Home (Startseite)
   - Über uns
   - Leistungen
   - Kontakt
5. Check "Primary Menu" under "Display location"
6. Save Menu

### Step 5: Configure Site Identity

1. Go to `Appearance → Customize → Site Identity`
2. Set Site Title: "TWK Rheinland - Tim Wassong"
3. Set Tagline: "Kälte- und Klimatechnik Experten"
4. Upload logo (if you have one)
5. Click "Publish"

## 🎨 Adding Content

Since this was converted from Hostinger, you'll need to add content manually:

### For Home Page Content:

Add blocks for:
- Hero section with main heading
- Services overview
- Customer testimonials
- Contact CTA

### For About Page:

Add content about:
- Company history
- Team members
- Values and mission

### For Services Page:

List your services:
- Klimareparatur (Climate Repair)
- Gebäudetechnik (Building Technology)
- Wartung & Service (Maintenance & Service)
- Kälteanlagenbau (Refrigeration Systems)

### For Contact Page:

Add:
- Contact form (use Contact Form 7 plugin)
- Address
- Phone number
- Email
- Business hours

## 🔌 Recommended Plugins

Install these plugins for full functionality:

### Essential:

1. **Contact Form 7** - For contact forms
   ```
   Plugins → Add New → Search "Contact Form 7" → Install → Activate
   ```

2. **Yoast SEO** - For SEO optimization
   ```
   Plugins → Add New → Search "Yoast SEO" → Install → Activate
   ```

### Optional but Useful:

3. **WP Google Maps** - For location maps
4. **Classic Editor** - If you prefer the classic WordPress editor
5. **W3 Total Cache** - For performance optimization

## 🎯 Troubleshooting

### Problem: Theme looks broken or unstyled

**Solution**:
1. Make sure you activated the theme
2. Check that files are in: `/wp-content/themes/twk-rheinland/`
3. Try clearing browser cache (Ctrl+F5 or Cmd+Shift+R)
4. Check WordPress → Settings → Permalinks → Click "Save Changes"

### Problem: Navigation menu not showing

**Solution**:
1. Go to `Appearance → Menus`
2. Make sure menu is assigned to "Primary Menu" location
3. Save the menu

### Problem: Pages showing default WordPress layout

**Solution**:
1. Edit each page
2. Check "Page Attributes" box on the right
3. Select the appropriate template
4. Update the page

### Problem: CSS not loading

**Solution**:
1. Check file permissions: `chmod 755 assets/css/`
2. Clear WordPress cache (if using caching plugin)
3. Check browser console for errors (F12)

### Problem: Images not displaying

**Solution**:
1. Upload images to WordPress Media Library
2. Insert them into pages/posts from Media Library
3. Don't reference images directly from assets folder

## 📝 Important Notes

### About This Theme:

- This theme was converted from Hostinger Website Builder static HTML
- The structure is in place, but **content must be added via WordPress admin**
- CSS and assets are included and will load automatically
- The theme follows WordPress coding standards

### Content Structure:

The original Hostinger site had:
- Home page with services overview
- About page (Partner für Klimatechnik)
- Services page (Kältetechnik und Klimalösungen)
- Contact page with form

You should recreate this structure in WordPress using the page templates provided.

### Assets Included:

- 4 CSS files (home, partner, services, contact)
- 12 JavaScript files
- 60 images organized by page
- 11 font files
- 3 Google Maps integration files

## 🔧 Customization

### Change Colors:

Go to `Appearance → Customize → Additional CSS` and add:

```css
/* Change primary color */
:root {
    --primary-color: #your-color-here;
}
```

### Change Fonts:

Edit `functions.php` and modify the font enqueuing.

### Add Custom Styles:

Go to `Appearance → Customize → Additional CSS`

## 📞 Need Help?

1. Check WordPress.org documentation: https://wordpress.org/documentation/
2. WordPress Support Forums: https://wordpress.org/support/
3. Theme Issues: Open an issue on GitHub

## ✅ Checklist

After installation, verify:

- [ ] Theme is activated
- [ ] Home page is set as front page
- [ ] All 4 pages are created (Home, About, Services, Contact)
- [ ] Navigation menu is created and assigned
- [ ] Contact Form 7 is installed (for contact page)
- [ ] Site title and tagline are set
- [ ] Pages are using correct templates
- [ ] Content is added to all pages

## 🎉 You're Done!

Your TWK Rheinland WordPress site should now be live and functional!

---

**Theme Version**: 1.0.0
**WordPress Required**: 5.0+
**PHP Required**: 7.4+
**License**: GPL v2 or later
