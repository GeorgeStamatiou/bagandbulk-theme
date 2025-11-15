<?php
/* Template Name: Contact Page */
get_header();
?>

<section class="page-hero">
    <div class="container">
        <h1>Contact Us</h1>
        <p class="subtitle">Get in touch with our team — we’re ready to help you build your next system.</p>
    </div>
</section>

<section class="contact-section">
    <div class="container contact-grid">

        <div class="contact-info">
            <h2>Get in Touch</h2>
            <p><strong>Email:</strong> info@bagandbulk.co.za</p>
            <p><strong>Phone:</strong> +27 00 000 0000</p>
            <p><strong>Address:</strong> Johannesburg, South Africa</p>
        </div>

        <div class="contact-form">
            <h2>Send a Message</h2>

            <!-- WPForm or Contact Form 7 -->
            <?php echo do_shortcode('[contact-form-7 id="123" title="Contact form"]'); ?>
        </div>

    </div>
</section>

<?php get_footer(); ?>
