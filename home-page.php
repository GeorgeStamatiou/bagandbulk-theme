<?php 
/**
 * Template Name: Front Page
 */
get_header(); 
?>

<!-- ================================
     HERO SECTION
================================ -->

<section id="hero" class="hero">
  <div class="hero-container">
    
    <div class="hero-left">
      <h1>Industrial Bag Solutions, Built for Your Business</h1>
      <p class="hero-subtext">
        We manufacture and supply Bulk Bags, Packaging and Custom Industrial Solutions — 
        built for durability, safety and reliability across every industry.
      </p>

      <div class="hero-ctas">
        <a href="#rfq" class="btn-primary">Build Your Machine</a>
        <a href="#why-choose-us" class="btn-secondary">Why Choose Us</a>
      </div>
    </div>

    <div class="hero-right">
      <img src="/wp-content/uploads/hero-bulkbag.png" 
           alt="Industrial Bulk Bag" 
           class="hero-image" />
    </div>

  </div>
</section>


<!-- ================================
     WHY CHOOSE US (with Demo)
================================ -->
<section class="why-choose-us-section">
  <div class="container">

    <!-- LEFT TEXT CONTENT -->
    <div class="why-text">
      <h2>Why Choose Bag & Bulk?</h2>
      <p class="subhead">
        Engineered solutions built for reliability, efficiency, and industry-leading performance.
      </p>

      <div class="feature">
        <h3>Precision-Engineered Systems</h3>
        <p>High-accuracy designs built to maximise uptime and throughput.</p>
      </div>

      <div class="feature">
        <h3>Custom-Built for Your Operation</h3>
        <p>Configurations tailored to your specific material-handling needs.</p>
      </div>

      <div class="feature">
        <h3>Fast Deployment & Easy Maintenance</h3>
        <p>Modular components for quick installation and reduced downtime.</p>
      </div>

      <div class="feature">
        <h3>Trusted by Leading Industrial Brands</h3>
        <p>Our systems power production lines across Southern Africa.</p>
      </div>
    </div>

    <!-- RIGHT DEMO IMAGE -->
    <div class="why-demo">
      <div class="demo-box">
        <img src="/wp-content/uploads/2025/01/demo-placeholder.jpg" alt="Product Demo">
      </div>
    </div>

  </div>
</section>


<!-- ================================
     VALUE PROPOSITION
================================ -->
<section class="value-usecases">
  <div class="container">

    <!-- LEFT: VALUE PROPOSITION -->
    <div class="value-left">
      <h2>Value Proposition</h2>

      <div class="value-grid">

        <!-- Card 1 -->
        <div class="value-card">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/value-placeholder.jpg" alt="Value 1">
          <h3>High Efficiency</h3>
          <p>Reduce downtime and maximise throughput with our advanced handling systems.</p>
        </div>

        <div class="value-card">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/value-placeholder.jpg" alt="Value 2">
          <h3>Cost Effective</h3>
          <p>Lower operational costs by using best-in-class machinery and modular builds.</p>
        </div>

        <div class="value-card">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/value-placeholder.jpg" alt="Value 3">
          <h3>Scalable</h3>
          <p>Start small and expand your system as production demand grows.</p>
        </div>

        <div class="value-card">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/value-placeholder.jpg" alt="Value 4">
          <h3>Reliable Support</h3>
          <p>Full after-sales support with maintenance plans and technical assistance.</p>
        </div>


      </div>
    </div>

    <!-- RIGHT: USE CASES -->
    <div class="usecases-right">
      <h2>Use Cases</h2>

      <div id="usecase-card" class="usecase-card">
        <!-- JS populates this -->
      </div>
    </div>

  </div>
</section>


<!-- ================================
     MACHINES (1 Row + Button)
================================ -->
<section class="mixing-machines section">
  <div class="container">

    <h2>Machines</h2>

    <div class="machine-grid" style="margin-top:2rem;">
      <div class="machine-card">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/drum-mixer.png" alt="">
        <h3>Rotating Drum Mixer</h3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
      </div>
      <div class="machine-card">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ribbon-blender.png" alt="">
        <h3>Ribbon Blender</h3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
      </div>
      <div class="machine-card">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/paddle-mixer.png" alt="">
        <h3>Paddle Mixer</h3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
      </div>
    </div>

    <div style="margin-top:2rem; text-align:center;">
      <a href="#" class="btn btn-primary">Build Your Machine</a>
    </div>

  </div>
</section>


<!-- ================================
     PRICING / RESOURCES / INTERACTION
================================ -->
<section class="info-grid section">
  <div class="container grid-3">

    <!-- Pricing -->
    <div class="grid-column">
      <h2>Pricing</h2>

      <div class="info-item">
        <h3>Basic</h3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
      </div>

      <div class="info-item">
        <h3>Pro</h3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
      </div>

      <div class="info-item">
        <h3>Enterprise</h3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
      </div>
    </div>

    <!-- Resources -->
    <div class="grid-column">
      <h2>Resources</h2>

      <div class="info-item">
        <h3>Top Trends in 2025</h3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
      </div>

      <div class="info-item">
        <h3>5 Ways Save Time</hh3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
      </div>

      <div class="info-item">
        <h3>Our Value Tools</h3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
      </div>
    </div>

    <!-- Interaction -->
    <div class="grid-column">
      <h2>Interaction</h2>

      <div class="info-item">
        <h3>Title Here</h3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
      </div>

      <div class="info-item">
        <h3>Title Here</h3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
      </div>

      <div class="info-item">
        <h3>Title Here</h3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
      </div>
    </div>

  </div>
</section>

<?php get_footer(); ?>
