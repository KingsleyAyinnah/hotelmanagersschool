<?php
// Define available pages
$available_pages = [
    'home' => 'pages/home.php',
    'about-us' => 'pages/about_us.php',
    'faculties' => 'pages/faculties.php',
    'admissions' => 'pages/admissions.php',
    'contact-us' => 'pages/contact_us.php',
    'our-courses' => 'pages/our_courses.php',
    'newsletter' => 'pages/newsletter.php',
];

// Get the requested page from the URL, default to 'home'
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Check if the requested page is available
if (!array_key_exists($page, $available_pages)) {
    $page = 'home'; // Fallback to home if page doesn't exist
}

// Include Header
include 'includes/header.php';

// Include the requested page content
include $available_pages[$page];

// Include Footer
include 'includes/footer.php';
?>
