# Hotel Managers School UI Design Structure

## 1. Project UI Architecture

The project is a PHP-based multi-page website that uses a single entry point, `index.php`, to route page requests by query string. Every page shares the same global header, newsletter section, footer, stylesheet, and JavaScript behavior.

### Routing model

- `index.php` defines the allowed pages in `$available_pages`.
- The active page is read from `$_GET['page']`.
- Invalid or missing pages fall back to `home`.
- Shared layout files are loaded around each page:
  - `includes/header.php`
  - `pages/{page}.php`
  - `includes/footer.php`

### Main pages

- `home`
- `about-us`
- `faculties`
- `admissions`
- `our-courses`
- `contact-us`
- `newsletter`

## 2. Global Layout

### Document shell

The document shell is created in `includes/header.php` and `includes/footer.php`.

The structure is:

1. HTML document head
2. Global mobile sidebar and overlay
3. Sticky header/navigation
4. `<main>` page content
5. Shared newsletter signup section
6. Footer
7. Global JavaScript for sidebar, scroll reveal, and lightbox behavior

### Header

The header is a sticky top navigation bar with a dark navy background.

Key elements:

- Left: HMS logo
- Center: desktop navigation links
- Right: "Apply Now" call-to-action button
- Mobile: hamburger button opens a slide-in sidebar

Active navigation states are applied server-side by comparing the current `page` query value.

### Mobile sidebar

The mobile navigation uses:

- `.sidebar-overlay` for the dimmed backdrop
- `.sidebar` for the slide-in menu
- `.sidebar-header` with logo and close button
- `.sidebar-links` for navigation
- `.btn-apply-sidebar` as the mobile CTA

The sidebar opens by toggling the `active` class and locks body scrolling while open.

### Footer

The footer uses a four-column grid on desktop:

1. Brand/logo, short positioning text, social links
2. Quick Links
3. Resources
4. Contact Us

It collapses to two columns on tablet and one column on mobile.

### Shared newsletter section

The newsletter block appears before the footer on every page. It includes:

- Centered section title
- Supporting paragraph
- Email input
- Subscribe button

The form submits to `?page=newsletter`.

## 3. Visual Design System

### Color tokens

The main CSS variables are defined in `assets/css/style.css`.

| Token | Value | Usage |
| --- | --- | --- |
| `--primary-color` | `#021165` | Header, footer, page headers, primary headings, some CTAs |
| `--secondary-color` | `#f05a28` | CTA buttons, highlights, active states, icons, accent borders |
| `--text-color` | `#333` | Default body copy |
| `--light-bg` | `#f8f9fa` | Alternating section backgrounds |
| `--white` | `#ffffff` | Cards, text on dark backgrounds |
| `--transition` | `all 0.3s ease` | Shared hover and state transitions |

The design is built around a navy/orange hospitality education brand palette.

### Typography

External fonts are imported from Google Fonts:

- `Inter` for body text
- `Outfit` for headings and logo-style text

Typography hierarchy:

- Body: `Inter`, normal weight, `line-height: 1.6`
- Headings: `Outfit`
- Section headings: commonly `2.5rem` on desktop
- Hero heading: `3.5rem` desktop, reduced at mobile breakpoints

### Spacing

Common spacing rules:

- `.container`: max width `1200px`, centered, with horizontal padding
- Standard sections: `80px 0`
- Mobile sections: `50px 0` below `480px`
- Section titles: centered with `50px` bottom margin
- Grid gaps: usually `20px`, `30px`, or `40px`

### Radius and shadows

The UI uses rounded cards and soft shadows:

- Buttons: `5px` to `8px`
- Cards: generally `12px` to `20px`
- Images: usually `10px`, `15px`, or `20px`
- Shadows are soft, low-opacity black shadows for elevated content.

## 4. Reusable Layout Utilities

The stylesheet defines reusable grid helpers:

- `.grid-2`: two columns
- `.grid-3`: three columns
- `.grid-4`: four columns
- `.grid-5`: currently three columns by default, two on medium screens, one on mobile

Responsive behavior:

- `max-width: 1200px`: `.grid-5` becomes two columns
- `max-width: 992px`: `.grid-3` and `.grid-4` become two columns
- `max-width: 768px`: most grids become one column
- `max-width: 480px`: tighter spacing and smaller headings

## 5. Core Components

### Buttons

Primary CTA:

- Class: `.btn-apply`
- Background: orange
- Text: white
- Rounded corners
- Hover: darker orange and slight upward movement

Other button-like links:

- `.btn-register`: navy button used on faculty profiles
- `.btn-join`: full-width orange course enrollment button
- `.btn-apply-sidebar`: full-width sidebar CTA

### Section title

Class: `.section-title`

Used throughout the site for centered section introductions:

- Optional orange uppercase eyebrow text
- Main `h2`
- Optional paragraph with constrained width

### Cards

Primary card types:

- `.faculty-card`
- `.value-card`
- `.admission-card`
- `.course-card`
- `.brand-item`
- `.option-item`

Card styling usually includes white background, rounded corners, subtle borders, and hover transitions.

### Faculty card

Used on the home page board/advisory sections.

Structure:

- Circular portrait image by default
- Name heading
- Role/title text

Advisor cards use `.advisor-card` to make the image rectangular instead of circular.

### Faculty profile

Used on the Faculties page.

Desktop structure:

- Left fixed image column, `350px`
- Right flexible content column
- Large white card container with border and shadow

Mobile structure:

- Single-column layout
- Image height reduced

### Admission card

Used for program summaries on the Admissions page.

Structure:

- Course title
- `.info-row` with Font Awesome icons for duration, internship, and certificate status

Visual treatment:

- White card
- Orange left border
- Hover shifts card horizontally and changes border to navy

### Course card

Used on the Our Courses page.

Structure:

- Course image
- Full-width "Join Now" button

Cards lift vertically on hover.

### Brand item and lightbox

The home page brand grid uses `.brand-item` cards. Clicking a brand calls `openLightbox()` and displays the clicked image in a full-screen `.lightbox`.

Lightbox behavior:

- Full-screen dark overlay
- Centered image
- Close button in the top-right
- Body scroll disabled while open

### FAQ accordion

The home page FAQ section uses `.faq-item` elements with a button and hidden answer.

Behavior:

- Clicking a button toggles `.active`
- `aria-expanded` is updated
- Answer expands using `max-height` and opacity transition
- Chevron icon rotates when active

### Scroll reveal

Elements with `.reveal` start hidden and translate down. An `IntersectionObserver` adds `.active` when they enter the viewport.

Delay helpers:

- `.reveal-delay-1`
- `.reveal-delay-2`
- `.reveal-delay-3`
- `.reveal-delay-4`

## 6. Page-by-Page Structure

### Home page

File: `pages/home.php`

Sections:

1. Hero
   - Full-width image background
   - Gradient navy overlay
   - Large headline, paragraph, and Apply Now CTA
2. Mission
   - Centered statement
   - Two CTAs: View All and Chat Administrator
3. Members
   - Board of Directors faculty cards
   - Board of Advisors faculty cards
4. Graduation
   - Two-column image gallery
5. Brands
   - Brand logo grid with clickable lightbox
6. Partners
   - Navy background with partner/accreditation logos
7. FAQ
   - Image plus right-aligned accordion on desktop

### About Us page

File: `pages/about_us.php`

Sections:

1. Page header
2. About intro
   - Two-column content and quote card
3. Vision and mission
   - Two large colored panels
4. Core values
   - Four icon cards
5. Target audience and key benefits
   - Two-column list and option cards
6. Learning options
   - Image plus stacked option cards

### Faculties page

File: `pages/faculties.php`

Sections:

1. Page header
2. Faculty profiles
   - Large profile cards for each faculty member
   - Some profiles include registration buttons

### Admissions page

File: `pages/admissions.php`

Sections:

1. Page header
2. Intro split section
   - Copy, CTA buttons, admissions image
3. Programs offered
   - Admission cards in a two-column layout
4. Admission and application
   - Centered process card with numbered steps and CTA

### Our Courses page

File: `pages/our_courses.php`

Sections:

1. Page header
2. Course grid
   - Six image-based course cards
   - Each course links to an external registration form

### Contact Us page

File: `pages/contact_us.php`

Sections:

1. Page header
2. Contact content
   - Message form
   - Contact information

Note: this page uses `.contact-grid`, but the main CSS only references it in responsive rules. Its desktop grid styling is currently provided implicitly only if added elsewhere or by browser defaults.

### Newsletter page

File: `pages/newsletter.php`

Sections:

1. Page header
2. Newsletter content
   - If submitted by POST: success message card
   - Otherwise: standalone signup form

## 7. Responsive Design

### Desktop

- Full sticky navigation visible
- Header CTA visible
- Multi-column grids
- Hero height `600px`
- Faculty profiles use side-by-side image and content

### Tablet

- Navigation spacing tightens
- Footer becomes two columns
- Some grids become two columns
- Faculty profiles collapse below `992px`

### Mobile

- Desktop navigation hidden
- Hamburger/sidebar navigation enabled
- Header CTA hidden
- Grids collapse to single column at `768px`
- Hero heading and section heading sizes reduce
- Newsletter form stacks vertically
- Brand and partner grids use smaller columns

### Narrow mobile

Below `480px`:

- Section padding reduces to `50px 0`
- Hero height reduces to `500px`
- Hero heading reduces to `1.8rem`
- Brand and partner grids become two columns
- Faculty profile image height reduces to `250px`

## 8. Assets and Media Usage

Image assets live in `assets/images`.

Important asset groups:

- Logos: `logo.png`, `logo_white.png`
- Hero: `hero.png`
- People/faculty/advisors: named PNG portraits
- Courses: `course1.png` through `course6.png`
- Brands: `brand1.png` through `brand15.png`
- Partners: `partner1.png` through `partner7.png`
- Graduation gallery: `graduation1.jpeg` through `graduation4.jpeg`

The UI relies heavily on real imagery and brand logos to communicate trust, faculty credibility, and course offerings.

## 9. External Dependencies

### CSS and fonts

- Google Fonts: `Inter`, `Outfit`
- Font Awesome 6.5.1 from CDN

### JavaScript

The project uses inline vanilla JavaScript only:

- Mobile sidebar toggle
- Sidebar overlay close behavior
- Scroll reveal observer
- Brand lightbox
- FAQ accordion on the home page

## 10. Current Styling Pattern

The project uses a mixed styling approach:

- Shared reusable styles are in `assets/css/style.css`.
- Many page-specific styles are written inline inside PHP templates.
- The inline styles handle layout details such as page headers, section background colors, spacing, card padding, and some image treatments.

This means the visual design is consistent, but future maintenance would be easier if repeated inline patterns were moved into reusable CSS classes.

## 11. Design Maintenance Notes

Recommended conventions for future UI work:

- Reuse the existing navy/orange color tokens.
- Keep sections inside `.container` unless intentionally full-width.
- Use `.section-title` for section intros.
- Use existing grid helpers before adding custom grids.
- Use `.btn-apply`, `.btn-register`, or `.btn-join` for CTA consistency.
- Add `.reveal` and delay classes for scroll-in animations when matching existing page motion.
- Move repeated inline page-header and card styles into named CSS classes over time.
- Define a desktop `.contact-grid` rule if the Contact page is expected to be two-column.
- Avoid adding new visual systems unless they reinforce the current hospitality education brand.
