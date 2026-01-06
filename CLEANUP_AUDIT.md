# HOSTINGER BUILDER CLEANUP AUDIT REPORT

## 📊 AUDIT SUMMARY

**Audit Date:** January 6, 2026
**Project:** TWK Rheinland - Hostinger to WordPress Conversion
**Total Files Before Cleanup:** 101 files

---

## 🔍 CURRENT MESS IDENTIFIED

### File Counts
- **HTML Pages:** 4 files
- **Asset Folders (_files):** 4 directories
- **Total Asset Files:** 96 files
- **Documentation:** 1 file (README.md)

### Asset Distribution
| Folder | File Count | Purpose |
|--------|------------|---------|
| Kontakt zu twk rheinland – Klimaservice _ TWK Rheinland - Tim Wassong_files | 5 | Contact page assets |
| Kältetechnik und Klimalösungen vom Profi _ TWK Rheinland - Tim Wassong_files | 25 | Services page assets |
| twk rheinland - Ihr Partner für Klimatechnik _ TWK Rheinland - Tim Wassong_files | 50 | About/Partner page assets |
| twk rheinland – Kälte- und Klimatechnik Experten _ TWK Rheinland - Tim Wassong_files | 16 | Home/Experts page assets |

---

## 📄 HTML FILES ANALYSIS

### 1. Home Page
**Current Name:** `twk rheinland – Kälte- und Klimatechnik Experten _ TWK Rheinland - Tim Wassong.html`
**New Name:** `index.html` (or `experten-kaelte-klimatechnik.html`)
**Topic:** Climate and Cooling Technology Experts - Main landing page
**URL:** https://slategrey-snail-927231.builder-preview.com/
**Keep:** ✅ YES - Primary home page

### 2. About/Partner Page
**Current Name:** `twk rheinland - Ihr Partner für Klimatechnik _ TWK Rheinland - Tim Wassong.html`
**New Name:** `partner-klimatechnik.html`
**Topic:** Your Partner for Climate Technology - About page
**URL:** https://slategrey-snail-927231.builder-preview.com/uber-uns
**Keep:** ✅ YES - About page

### 3. Services Page
**Current Name:** `Kältetechnik und Klimalösungen vom Profi _ TWK Rheinland - Tim Wassong.html`
**New Name:** `kaelte-klimaloesungen-profi.html`
**Topic:** Cooling Technology and Climate Solutions from Professionals
**URL:** https://slategrey-snail-927231.builder-preview.com/leistungen
**Keep:** ✅ YES - Services page

### 4. Contact Page
**Current Name:** `Kontakt zu twk rheinland – Klimaservice _ TWK Rheinland - Tim Wassong.html`
**New Name:** `kontakt-klimaservice.html`
**Topic:** Contact for Climate Service
**URL:** https://slategrey-snail-927231.builder-preview.com/kontakt
**Keep:** ✅ YES - Contact page

---

## 🗂️ ASSET ANALYSIS

### Asset Types Found
- ✅ **CSS Files:** 1-2 per folder (e.g., `_slug_.CI1WaYZy.css`)
- ✅ **JavaScript Files:** 10+ per folder (`.js.download` extension)
- ✅ **Images:** Photo files (no extensions, need analysis)
- ✅ **Logos:** TWK logo PNG files
- ✅ **Fonts:** Font-face files and vt files
- ✅ **Maps:** Google Maps HTML embeds
- ✅ **Duplicates:** Files with (1), (2), etc. suffixes

### Problems Identified
1. **Long German filenames** with special characters (ä, ö, ü, –)
2. **Redundant naming** - "twk rheinland", "TWK Rheinland", "Tim Wassong" repeated
3. **JavaScript extensions** - `.js.download` instead of `.js`
4. **Image files without extensions** - `photo-*` files
5. **Duplicate files** - Multiple files with (1) suffix
6. **Mixed content** - CSS/JS/images all in same flat directory
7. **No organized structure** - Assets scattered across 4 folders

---

## 📋 CLEANUP PLAN

### Renaming Mapping

| OLD NAME | NEW NAME | TYPE |
|----------|----------|------|
| `twk rheinland – Kälte- und Klimatechnik Experten _ TWK Rheinland - Tim Wassong.html` | `index.html` | HTML |
| `twk rheinland - Ihr Partner für Klimatechnik _ TWK Rheinland - Tim Wassong.html` | `partner-klimatechnik.html` | HTML |
| `Kältetechnik und Klimalösungen vom Profi _ TWK Rheinland - Tim Wassong.html` | `kaelte-klimaloesungen-profi.html` | HTML |
| `Kontakt zu twk rheinland – Klimaservice _ TWK Rheinland - Tim Wassong.html` | `kontakt-klimaservice.html` | HTML |
| `*_files/` directories | Extracted to `assets/` | Folders |

### New Directory Structure
```
hostinger-builder-to-wordPress-convert/
├── assets/
│   ├── css/
│   │   ├── main-style.css
│   │   ├── partner-klimatechnik.css
│   │   ├── kaelte-klimaloesungen.css
│   │   └── kontakt.css
│   ├── js/
│   │   ├── common.js
│   │   ├── controls.js
│   │   ├── main.js
│   │   ├── map.js
│   │   └── [other .js files]
│   ├── images/
│   │   ├── home/
│   │   ├── partner/
│   │   ├── services/
│   │   └── contact/
│   ├── fonts/
│   │   └── [font files]
│   └── maps/
│       └── [map HTML embeds]
├── pages/
│   ├── partner-klimatechnik.html
│   ├── kaelte-klimaloesungen-profi.html
│   └── kontakt-klimaservice.html
├── index.html (home page in root)
├── README.md
├── CLEANUP_AUDIT.md
└── PROJECT_STRUCTURE.txt
```

---

## ✅ CLEANUP CHECKLIST

### Phase 1: Setup
- [ ] Create `assets/` directory
- [ ] Create `assets/css/` directory
- [ ] Create `assets/js/` directory
- [ ] Create `assets/images/` directory
- [ ] Create `assets/fonts/` directory
- [ ] Create `assets/maps/` directory
- [ ] Create `pages/` directory

### Phase 2: Extract Assets
- [ ] Extract CSS files from all _files folders
- [ ] Extract JS files (rename .js.download to .js)
- [ ] Extract and organize image files
- [ ] Extract font files
- [ ] Extract map files
- [ ] Remove duplicate files (keep originals, delete (1) versions)

### Phase 3: Rename & Move HTML
- [ ] Rename home page to `index.html`
- [ ] Rename partner page to `partner-klimatechnik.html`
- [ ] Rename services page to `kaelte-klimaloesungen-profi.html`
- [ ] Rename contact page to `kontakt-klimaservice.html`
- [ ] Move non-home pages to `pages/` directory

### Phase 4: Update Paths
- [ ] Update CSS paths in all HTML files
- [ ] Update JS paths in all HTML files
- [ ] Update image paths in all HTML files
- [ ] Update internal navigation links
- [ ] Test all links

### Phase 5: Cleanup
- [ ] Delete all `*_files` directories
- [ ] Verify no broken links
- [ ] Create PROJECT_STRUCTURE.txt
- [ ] Update README.md with new structure
- [ ] Commit changes

---

## 🎯 EXPECTED OUTCOMES

### Before Cleanup
- 101 files
- 4 HTML files with long German names
- 4 messy `_files` folders
- Unorganized assets
- Duplicate files

### After Cleanup
- ~90-95 files (duplicates removed)
- 4 HTML files with clean names
- Organized `assets/` structure
- Organized `pages/` structure
- Clean, searchable filenames
- All paths updated and working

---

**Status:** Audit Complete ✅
**Next Step:** Execute cleanup plan
