<?php
/* Template Name: About Page */
get_header();
?>

<section class="page-hero">
    <div class="container">
        <h1>About Bag & Bulk</h1>
        <p class="subtitle">We engineer high-performance bulk handling solutions built for efficiency, durability, and scale.</p>
    </div>
</section>

<section class="about-intro">
    <div class="container about-grid">
        <div class="about-text">
            <h2>Who We Are</h2>
            <p>
                Bag & Bulk is a specialist manufacturer and engineering partner focused on 
                designing and delivering reliable bulk handling systems for businesses 
                across Africa. We combine industry expertise with precision engineering 
                to create systems that improve productivity, reduce downtime, and scale 
                seamlessly with your operation.
            </p>
            <p>
                Our solutions are built to meet the demands of modern industrial facilities —
                from agricultural packing plants and logistics hubs to large-scale 
                manufacturing environments.
            </p>
        </div>

        <div class="about-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about.jpg" alt="Bag & Bulk Engineering">
        </div>
    </div>
</section>

<section class="about-values">
    <div class="container">
        <h2>What Drives Us</h2>

        <div class="values-grid">
            <div class="value-card">
                <h3>Precision Engineering</h3>
                <p>Every system we design is built for accuracy, consistency, and long-term durability.</p>
            </div>

            <div class="value-card">
                <h3>Operational Efficiency</h3>
                <p>We create solutions that streamline workflows and improve output.</p>
            </div>

            <div class="value-card">
                <h3>Industry Expertise</h3>
                <p>Our team brings deep experience across agriculture, logistics, and manufacturing.</p>
            </div>

            <div class="value-card">
                <h3>Partner-Focused</h3>
                <p>We work closely with clients to design systems tailored to their operational needs.</p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
