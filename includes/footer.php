    </main>

    <section class="newsletter">
        <div class="container">
            <div class="section-title">
                <h2>Subscribe to our Newsletter</h2>
                <p>Stay updated with the latest news, events, and academic programs from Hotel Managers School.</p>
            </div>
            <form action="?page=newsletter" method="POST" class="newsletter-form">
                <input type="email" name="email" placeholder="Enter your email address" required>
                <button type="submit">Subscribe Now</button>
            </form>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <div class="logo" style="margin-bottom: 20px;">
                        <img src="assets/images/logo.png" alt="HMS Logo" style="filter: brightness(0) invert(1);">
                    </div>
                    <p style="opacity: 0.7; margin-bottom: 20px;">Shaping the next generation of hospitality leaders through excellence in education and practical training.</p>
                    <div class="social-links" style="display: flex; gap: 15px;">
                        <a href="https://www.facebook.com/profile.php?id=61565234189322&mibextid=LQQJ4d" target="_blank" style="font-size: 1.5rem;"><i class="fab fa-facebook"></i></a>
                        <a href="http://www.linkedin.com/in/hotel-managers-school-924377327" target="_blank" style="font-size: 1.5rem;"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h4>Quick Links</h4>
                    <?php $current_page = $_GET['page'] ?? 'home'; ?>
                    <ul>
                        <li><a href="?page=home" class="<?php echo $current_page == 'home' ? 'active' : ''; ?>">Home</a></li>
                        <li><a href="?page=about-us" class="<?php echo $current_page == 'about-us' ? 'active' : ''; ?>">About Us</a></li>
                        <li><a href="?page=admissions" class="<?php echo $current_page == 'admissions' ? 'active' : ''; ?>">Admissions</a></li>
                        <li><a href="?page=faculties" class="<?php echo $current_page == 'faculties' ? 'active' : ''; ?>">Faculties</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Resources</h4>
                    <ul>
                        <li><a href="?page=our-courses" class="<?php echo $current_page == 'our-courses' ? 'active' : ''; ?>">Our Courses</a></li>
                        <li><a href="?page=contact-us" class="<?php echo $current_page == 'contact-us' ? 'active' : ''; ?>">Contact Us</a></li>
                        <li><a href="#" class="">Privacy Policy</a></li>
                        <li><a href="#" class="">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Contact Us</h4>
                    <p style="opacity: 0.7; margin-bottom: 10px;">Email: <a href="mailto:info@hotelmanagersschool.com">info@hotelmanagersschool.com</a></p>
                    <p style="opacity: 0.7; margin-bottom: 10px;"><a href="mailto:Hotelmanagersschool2024@gmail.com">Hotelmanagersschool2024@gmail.com</a></p>
                    <p style="opacity: 0.7;">Phone: <a href="tel:+2348035367918">+234 8035367918</a></p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> Hotel Managers School. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
    <script>
        // Mobile Sidebar Logic
        document.addEventListener('DOMContentLoaded', function() {
            const hamburger = document.querySelector('.hamburger');
            const sidebar = document.getElementById('sidebar');
            const sidebarOverlay = document.getElementById('sidebar-overlay');
            const closeSidebar = document.getElementById('close-sidebar');

            function toggleSidebar() {
                sidebar.classList.toggle('active');
                sidebarOverlay.classList.toggle('active');
                document.body.style.overflow = sidebar.classList.contains('active') ? 'hidden' : '';
            }

            if (hamburger) {
                hamburger.addEventListener('click', toggleSidebar);
            }

            if (closeSidebar) {
                closeSidebar.addEventListener('click', toggleSidebar);
            }

            if (sidebarOverlay) {
                sidebarOverlay.addEventListener('click', toggleSidebar);
            }

            // Close sidebar when clicking on a link
            const sidebarLinks = document.querySelectorAll('.sidebar-links a');
            sidebarLinks.forEach(link => {
                link.addEventListener('click', () => {
                    if (sidebar.classList.contains('active')) {
                        toggleSidebar();
                    }
                });
            });

            // Auto-close sidebar on window resize (switching to desktop view)
            window.addEventListener('resize', function() {
                if (window.innerWidth > 768 && sidebar.classList.contains('active')) {
                    toggleSidebar();
                }
            });

            // Scroll Reveal Observer
            const revealElements = document.querySelectorAll('.reveal');
            const revealObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                        // revealObserver.unobserve(entry.target); // Optional: stop observing once revealed
                    }
                });
            }, {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            });

            revealElements.forEach(el => revealObserver.observe(el));
        });

        function openLightbox(src) {
            const lightbox = document.getElementById('lightbox');
            const lightboxImg = document.getElementById('lightbox-img');
            lightboxImg.src = src;
            lightbox.classList.add('active');
            document.body.style.overflow = 'hidden'; // Prevent scrolling
        }

        function closeLightbox(event) {
            if (event.target.id === 'lightbox' || event.target.className === 'close-lightbox') {
                const lightbox = document.getElementById('lightbox');
                lightbox.classList.remove('active');
                document.body.style.overflow = 'auto'; // Restore scrolling
            }
        }
    </script>
</body>
</html>
