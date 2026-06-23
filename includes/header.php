<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Managers School | Shaping Future Leaders</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>
    <?php $current_page = $_GET['page'] ?? 'home'; ?>
    <div class="sidebar-overlay" id="sidebar-overlay"></div>
    <div class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <a href="?page=home" class="sidebar-logo">
                <img src="assets/images/logo.png" alt="HMS Logo">
            </a>
            <button class="close-sidebar" id="close-sidebar" aria-label="Close Menu">&times;</button>
        </div>
        <div class="sidebar-links">
            <a href="?page=home" class="<?php echo $current_page == 'home' ? 'active' : ''; ?>">Home</a>
            <a href="?page=about-us" class="<?php echo $current_page == 'about-us' ? 'active' : ''; ?>">About Us</a>
            <a href="?page=faculties" class="<?php echo $current_page == 'faculties' ? 'active' : ''; ?>">Faculties</a>
            <a href="?page=admissions" class="<?php echo $current_page == 'admissions' ? 'active' : ''; ?>">Admissions</a>
            <a href="?page=our-courses" class="<?php echo $current_page == 'our-courses' ? 'active' : ''; ?>">Our Courses</a>
            <a href="?page=contact-us" class="<?php echo $current_page == 'contact-us' ? 'active' : ''; ?>">Contact Us</a>
            <div class="sidebar-footer">
                <a href="?page=our-courses" class="btn-apply-sidebar">Apply Now</a>
            </div>
        </div>
    </div>

    <header>
        <div class="container">
            <a href="?page=home" class="logo">
                <img src="assets/images/logo.png" alt="HMS Logo" style="filter: brightness(0) invert(1);">
            </a>
            <nav>
                <div class="nav-links" id="nav-links">
                    <a href="?page=home" class="<?php echo $current_page == 'home' ? 'active' : ''; ?>">Home</a>
                    <a href="?page=about-us" class="<?php echo $current_page == 'about-us' ? 'active' : ''; ?>">About Us</a>
                    <a href="?page=faculties" class="<?php echo $current_page == 'faculties' ? 'active' : ''; ?>">Faculties</a>
                    <a href="?page=admissions" class="<?php echo $current_page == 'admissions' ? 'active' : ''; ?>">Admissions</a>
                    <a href="?page=our-courses" class="<?php echo $current_page == 'our-courses' ? 'active' : ''; ?>">Our Courses</a>
                    <a href="?page=contact-us" class="<?php echo $current_page == 'contact-us' ? 'active' : ''; ?>">Contact Us</a>
                </div>
                <button class="hamburger" aria-label="Toggle Menu">☰</button>
            </nav>
            <div class="header-actions">
                <a href="?page=our-courses" class="btn-apply">Apply Now</a>
            </div>
        </div>
    </header>
    <main>