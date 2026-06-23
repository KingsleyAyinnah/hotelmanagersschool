<section class="page-header" style="background: var(--primary-color); color: #fff; padding: 60px 0; text-align: center;">
    <div class="container">
        <h1>Newsletter</h1>
        <p>Stay connected with Hotel Managers School.</p>
    </div>
</section>

<section class="content">
    <div class="container" style="text-align: center; max-width: 600px;">
        <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'])): ?>
            <div style="background: #e8f5e9; color: #2e7d32; padding: 30px; border-radius: 10px; margin-top: 40px;">
                <h2 style="margin-bottom: 10px;">Thank You for Subscribing!</h2>
                <p>You have successfully signed up for our newsletter with <strong><?php echo htmlspecialchars($_POST['email']); ?></strong>. You will start receiving updates soon.</p>
                <a href="?page=home" class="btn-apply" style="display: inline-block; margin-top: 20px;">Back to Home</a>
            </div>
        <?php else: ?>
            <div class="section-title">
                <h2>Join Our Mailing List</h2>
                <p>Get the latest news, admission updates, and event invitations directly in your inbox.</p>
            </div>
            <form action="?page=newsletter" method="POST" class="newsletter-form" style="display: flex; flex-direction: column; gap: 15px; margin-top: 30px;">
                <input type="email" name="email" placeholder="Enter your email address" required style="padding: 15px; border: 1px solid #ddd; border-radius: 5px;">
                <button type="submit" class="btn-apply" style="border: none; padding: 15px;">Subscribe Now</button>
            </form>
        <?php endif; ?>
    </div>
</section>
