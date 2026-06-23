<!-- Hero Section -->
<section class="hero">
    <div class="hero-bg">
        <img src="assets/images/hero.png" alt="Happy Student">
    </div>
    <div class="container">
        <div class="hero-content reveal">
            <h1>Hotel Managers School is a leading institution</h1>
            <p>dedicated to providing specialized education and training for aspiring and current hotel managers in the
                hospitality industry.</p>
            <a href="?page=our-courses" class="btn-apply">Apply Now</a>
        </div>
    </div>
</section>

<!-- Mission Section -->
<section class="mission reveal" style="text-align: center; background: #fff;">
    <div class="container">
        <div class="section-title">
            <h2 style="color: var(--primary-color); line-height: 1.3;">We provide passionate students in the tourism and
                hospitality industry with the knowledge to drive meaningful change</h2>
            <p style="font-size: 1.2rem; color: #555; margin-top: 20px;">Shaping industry leaders through expertise,
                resources, and access to the world's best change.</p>
            <div style="margin-top: 30px; display: flex; justify-content: center; gap: 20px;">
                <a href="?page=admissions" class="btn-apply">View All</a>
                <a href="https://api.whatsapp.com/send?phone=9112368692&text=I%20want%20to%20enquire%20about%20hotel%20managers%20school.%20My%20name%20is%20_______"
                    class="btn-apply" style="background: var(--primary-color);">Chat Administrator</a>
            </div>
        </div>
    </div>
</section>

<!-- Members Section -->
<section class="members reveal" style="background: var(--light-bg);">
    <div class="container">
        <div class="section-title">
            <span
                style="color: var(--secondary-color); font-weight: bold; text-transform: uppercase; letter-spacing: 2px;">Members
                of the Board</span>
            <h2 style="margin-top: 10px;">Board of Directors</h2>
        </div>

        <div class="faculty-grid">
            <div class="faculty-card reveal reveal-delay-1">
                <img src="assets/images/olugbenga.png" alt="Olugbenga">
                <h3>Olugbenga Sunday</h3>
                <span>Executive Director / Chairman</span>
            </div>
            <div class="faculty-card reveal reveal-delay-2">
                <img src="assets/images/justina.png" alt="Justina">
                <h3>Justina Ovat</h3>
                <span>Director of School</span>
            </div>
            <div class="faculty-card reveal reveal-delay-3">
                <img src="assets/images/uzochukwu.png" alt="Uzochukwu">
                <h3>Uzochukwu Elui</h3>
                <span>Executive Director</span>
            </div>
        </div>

        <div class="section-title" style="margin-top: 60px;">
            <span
                style="color: var(--secondary-color); font-weight: bold; text-transform: uppercase; letter-spacing: 2px;">Members
                of the Board</span>
            <h2 style="margin-top: 10px;">Board of Advisors</h2>
        </div>

        <div class="faculty-grid" style="margin-top: 30px;">
            <div class="faculty-card advisor-card">
                <img src="assets/images/michael.png" alt="Michael">
                <h3>Dr Michael Pinder</h3>
                <span>Chairman, Advisory Board</span>
            </div>
            <div class="faculty-card advisor-card">
                <img src="assets/images/emmanuel.png" alt="Emmanuel">
                <h3>Mr Emmanuel Frimpong</h3>
                <span>Secretary, Advisory Board</span>
            </div>
            <div class="faculty-card advisor-card">
                <img src="assets/images/wasiu.png" alt="Wasiu">
                <h3>Prof. Wasiu Babalola</h3>
                <span>Member, Advisory Board</span>
            </div>
            <div class="faculty-card advisor-card">
                <img src="assets/images/dayo.png" alt="Dayo">
                <h3>Mr. Dayo Adesugba</h3>
                <span>Member, Advisory Board</span>
            </div>
            <div class="faculty-card advisor-card">
                <img src="assets/images/belinda.png" alt="Belinda">
                <h3>Dr. Belinda Nwosu</h3>
                <span>Member, Advisory Board</span>
            </div>
            <div class="faculty-card advisor-card">
                <img src="assets/images/karl.png" alt="Karl">
                <h3>Mr. Karl Hala</h3>
                <span>Member, Advisory Board</span>
            </div>
            <div class="faculty-card advisor-card">
                <img src="assets/images/ahmed.png" alt="Ahmed">
                <h3>Mr. Ahmed Raza</h3>
                <span>Member, Advisory Board</span>
            </div>
            <div class="faculty-card advisor-card">
                <img src="assets/images/koya.png" alt="Koya">
                <h3>Mrs. Koya Ahmiegbe</h3>
                <span>Member, Advisory Board</span>
            </div>
        </div>
    </div>
</section>

<!-- Graduation Section -->
<section class="graduation">
    <div class="container">
        <div class="section-title">
            <span style="color: var(--secondary-color); font-weight: bold; text-transform: uppercase;">Celebrating
                Excellence</span>
            <h2 style="margin-top: 10px;">Cohort 1 & 2 Graduands</h2>
        </div>
        <div class="gallery-grid" style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px;">
            <img src="assets/images/graduation1.jpeg" alt="Graduation" style="width: 100%; border-radius: 10px;">
            <img src="assets/images/graduation2.jpeg" alt="Graduation" style="width: 100%; border-radius: 10px;">
            <img src="assets/images/graduation3.jpeg" alt="Graduation"
                style="width: 100%; border-radius: 10px; filter: brightness(0.8);">
            <img src="assets/images/graduation4.jpeg" alt="Graduation"
                style="width: 100%; border-radius: 10px; filter: contrast(1.2);">
        </div>
    </div>
</section>

<!-- Trust Section -->
<section class="brands-section reveal">
    <div class="container">
        <div class="section-title">
            <span style="color: var(--secondary-color); font-weight: bold; text-transform: uppercase;">Trusted
                Globally</span>
            <h2 style="margin-top: 10px;">Over 50 Hospitality brands across the globe trust Hotel Managers School to
                grow their businesses</h2>
        </div>
        <div class="brands-grid">
            <?php for ($i = 1; $i <= 15; $i++): ?>
                <div class="brand-item reveal reveal-delay-<?php echo ($i % 4) + 1; ?>"
                    onclick="openLightbox('assets/images/brand<?php echo $i; ?>.png')">
                    <img src="assets/images/brand<?php echo $i; ?>.png" alt="Brand <?php echo $i; ?>">
                </div>
            <?php endfor; ?>
        </div>
    </div>
</section>

<!-- Lightbox Modal -->
<div class="lightbox" id="lightbox" onclick="closeLightbox(event)">
    <span class="close-lightbox" onclick="closeLightbox(event)">&times;</span>
    <img id="lightbox-img" src="" alt="Full Brand Logo">
</div>

<!-- Partners Section -->
<section class="partners">
    <div class="container">
        <div class="section-title">
            <h2 style="color: #fff;">Accreditation & Partnership</h2>
        </div>
        <div class="partners-grid">
            <img src="assets/images/partner1.png" alt="Partner 1">
            <img src="assets/images/partner2.png" alt="Partner 2">
            <img src="assets/images/partner3.png" alt="Partner 3">
            <img src="assets/images/partner4.png" alt="Partner 4">
            <img src="assets/images/partner5.png" alt="Partner 5">
            <img src="assets/images/partner7.png" alt="Partner 7">
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq">
    <div class="container">
        <div class="section-title">
            <h2>Frequently Asked Questions</h2>
        </div>
        <div class="faq-grid">
            <div class="faq-image">
                <img src="assets/images/advisors.png" alt="Advisors">
            </div>
            <div class="faq-content">
                <div class="faq-list">
                    <div class="faq-item">
                        <button type="button" aria-expanded="false">
                            How do I apply for this Hotel Management course?
                            <i class="fas fa-chevron-down faq-icon"></i>
                        </button>
                        <div class="faq-answer">
                            <p>Enrollment to any of our hotel management courses only takes a few minutes. You can
                                enroll on HMS website; www.hotelmanagersschool.com</p>
                            <p>You can also send an email to hotelmanagersschool2024@gmail.com and a registration link
                                will be provided to you.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button type="button" aria-expanded="false">
                            How long is an online hotel management course?
                            <i class="fas fa-chevron-down faq-icon"></i>
                        </button>
                        <div class="faq-answer">
                            <p>Courses on HMS are within the duration of three to four (3-4) months depending on the
                                choice of course and an additional two weeks of internship with a branded hotel in
                                Africa.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button type="button" aria-expanded="false">
                            Will I have to go to an interview?
                            <i class="fas fa-chevron-down faq-icon"></i>
                        </button>
                        <div class="faq-answer">
                            <p>No interview is required to get an admission into HMS.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button type="button" aria-expanded="false">
                            Do I need any previous experience or qualifications?
                            <i class="fas fa-chevron-down faq-icon"></i>
                        </button>
                        <div class="faq-answer">
                            <p>Minimum of SSCE is required to take a course in HMS and some years of work experience
                                will be required for certain courses.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button type="button" aria-expanded="false">
                            Do you place students for their practicals/work integrated learning?
                            <i class="fas fa-chevron-down faq-icon"></i>
                        </button>
                        <div class="faq-answer">
                            <p>Students will be placed on two weeks of internship to help them apply the theoretical
                                knowledge in real world and boost their resume.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button type="button" aria-expanded="false">
                            I am concerned about the fees. What payment options are available?
                            <i class="fas fa-chevron-down faq-icon"></i>
                        </button>
                        <div class="faq-answer">
                            <p>Tuition fees for courses in HMS can be paid in full before commencement of classes or by
                                installment (50% before admission and 50% before graduation).</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button type="button" aria-expanded="false">
                            Do we have certification in levels like Certificate Program, Diploma Program & Advanced
                            Diploma program? Or is it just a single level certification for every course?
                            <i class="fas fa-chevron-down faq-icon"></i>
                        </button>
                        <div class="faq-answer">
                            <p>HMS offers single level certification for every course.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    document.querySelectorAll('.faq-item button').forEach(function (button) {
        button.addEventListener('click', function () {
            var item = button.closest('.faq-item');
            var expanded = button.getAttribute('aria-expanded') === 'true';
            item.classList.toggle('active');
            button.setAttribute('aria-expanded', !expanded);
        });
    });
</script>