# Susan Aben Portfolio

Custom WordPress portfolio theme designed and developed by Susan Aben. The site presents selected web projects, services and background information in a dark editorial interface with responsive navigation and subtle motion.

## Stack

- WordPress
- PHP
- CSS
- Vanilla JavaScript
- TranslatePress-compatible language switcher
- Web3Forms contact form

## Highlights

- Multi-page portfolio with individual case studies
- Responsive sidebar navigation and mobile menu
- Reusable Intersection Observer reveal system
- Reduced-motion support
- Interactive project previews and embedded demos
- Custom contact experience with AJAX feedback
- Open Graph metadata, structured data and basic SEO output
- Custom 404 and privacy pages
- Lightweight WordPress performance and security cleanup

## Project structure

```text
assets/
├── css/
│   └── main.css
├── images/
└── js/
    └── main.js

front-page.php
header.php
footer.php
functions.php
page-*.php
style.css
```

The theme intentionally uses plain CSS and vanilla JavaScript, so there is no required front-end build step.

## Local setup

1. Copy the theme folder into `wp-content/themes/`.
2. Activate **Susan Aben Portfolio** in WordPress.
3. Create the pages used by the templates and assign the matching slugs/parent structure.
4. Install TranslatePress if bilingual switching is required.
5. Replace the Web3Forms access key if the contact form is used in another installation.

## Selected case studies

- EHBO Petrus Donders - website redesign
- Cartnip - WooCommerce storefront concept
- NoordgroeiT - community WordPress platform
- Meta Vision - creative portfolio case study
- Initiatief EAA - coming soon

## Notes

Some case-study previews embed separately hosted demo sites. Their availability therefore depends on those external demo deployments.

---

Designed and developed by **Susan Aben**.

## Launch assets

The theme includes a Meta Vision favicon set and a 1200x630 social sharing preview. When a WordPress Site Icon is configured in the admin, WordPress can take precedence over the theme fallback favicon.
