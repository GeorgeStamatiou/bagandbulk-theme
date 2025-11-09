<?php
/* Template Name: Home Page */
get_header();
?>

<section class="hero">
  <div class="hero-content">
    <div class="text">
      <h1>Transform Ideas Into Reality</h1>
      <p>We design and manufacture high-quality packaging and mixing machinery for your production line needs.</p>
      <div class="buttons">
        <a href="/services" class="btn primary">Explore Machines</a>
        <a href="/contact" class="btn secondary">Contact Us</a>
      </div>
    </div>
    <div class="image">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-machine.png" alt="Packaging machine">
    </div>
  </div>
</section>

<!-- WHY CHOOSE US SECTION -->
<section class="why-choose-us">
  <div class="container">
    <div class="content">
      <div class="text">
        <h2>Why Choose Us</h2>
        <p>With over a decade of experience in designing industrial machinery, Bag & Bulk is committed to delivering excellence in packaging and mixing solutions. Our machines are built to last, easy to maintain, and tailored to your production needs.</p>
        <ul>
          <li>✔️ High-quality manufacturing standards</li>
          <li>✔️ Custom-built machines for unique requirements</li>
          <li>✔️ Reliable after-sales support</li>
        </ul>
      </div>

      <div class="media">
        <!-- Replace with video or static image -->
        <video src="<?php echo get_template_directory_uri(); ?>/assets/videos/why-us.mp4" autoplay loop muted playsinline></video>
        <!-- or -->
        <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/why-us.jpg" alt="Bag & Bulk factory"> -->
      </div>
    </div>
  </div>
</section>

<!-- VALUE PROPOSITION SECTION -->
<section class="value-proposition">
  <div class="container">
    <h2>Value Proposition</h2>

    <div class="cards">
      <div class="card">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/innovation.svg" alt="Innovation Icon">
        <h3>Innovation</h3>
        <p>Unique ipsum dolor sit amet, consectetur adipiscing elit. Sed diam volutpat.</p>
      </div>

      <div class="card">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/speed.svg" alt="Speed Icon">
        <h3>Speed</h3>
        <p>Unique ipsum dolor sit amet, consectetur adipiscing elit. Sed diam volutpat.</p>
      </div>

      <div class="card">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/support.svg" alt="Support Icon">
        <h3>Support</h3>
        <p>Unique ipsum dolor sit amet, consectetur adipiscing elit. Sed diam volutpat.</p>
      </div>
    </div>
  </div>
</section>

<!-- USE CASES SECTION -->
<section class="use-cases">
  <div class="container">
    <div class="content">
      <div class="text">
        <h2>Use Cases</h2>
        <p>Explore how our machinery helps businesses across different industries improve their production speed, precision, and profitability.</p>
        <div class="buttons">
          <a href="/services" class="btn primary">Get Started</a>
          <a href="/about" class="btn secondary">Read More</a>
        </div>
      </div>

      <div class="media">
        <div class="video-box">
          <span class="play-icon">▶</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- OUR MIXING MACHINES SECTION -->
<section class="mixing-machines">
  <div class="container">
    <h2>Our Mixing Machines</h2>
    <p class="intro">
      Professional-grade soil and fertilizer mixing equipment designed for efficiency and durability.
    </p>

    <div class="machine-grid">
      <div class="machine-card">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mixer1.png" alt="Rotating Drum Mixer">
        <h3>Rotating Drum Mixer</h3>
        <p>Efficient rotary mixing technology for granular materials and fertilizers.</p>
      </div>

      <div class="machine-card">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mixer2.png" alt="Ribbon Blender">
        <h3>Ribbon Blender</h3>
        <p>Ideal for powders and lightweight blends with uniform consistency.</p>
      </div>

      <div class="machine-card">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mixer3.png" alt="Paddle Mixer">
        <h3>Paddle Mixer</h3>
        <p>Heavy-duty paddles ensure thorough blending of complex material mixes.</p>
      </div>
    </div>
  </div>
</section>

<!-- PRICING / RESOURCE / INTERACTION SECTION -->
<section class="info-grid">
  <div class="container">
    <div class="grid-column">
      <h2>Pricing</h2>
      <div class="info-item">
        <h3>Basic</h3>
        <p>Lorem quis ne dolor sit amet, ut proin facilisis, in nisl tempus dui nec morbi.</p>
      </div>
      <div class="info-item">
        <h3>Pro</h3>
        <p>Lorem quis ne dolor sit amet, ut proin facilisis, in nisl tempus dui nec morbi.</p>
      </div>
      <div class="info-item">
        <h3>Enterprise</h3>
        <p>Lorem quis ne dolor sit amet, ut proin facilisis, in nisl tempus dui nec morbi.</p>
      </div>
    </div>

    <div class="grid-column">
      <h2>Resource</h2>
      <div class="info-item">
        <h3>Top Trends in 2025</h3>
        <p>Lorem quis ne dolor sit amet, ut proin facilisis, in nisl tempus dui nec morbi.</p>
      </div>
      <div class="info-item">
        <h3>5 Ways Save Time</h3>
        <p>Lorem quis ne dolor sit amet, ut proin facilisis, in nisl tempus dui nec morbi.</p>
      </div>
      <div class="info-item">
        <h3>Our Value Tools</h3>
        <p>Lorem quis ne dolor sit amet, ut proin facilisis, in nisl tempus dui nec morbi.</p>
      </div>
    </div>

    <div class="grid-column">
      <h2>Interaction</h2>
      <div class="info-item">
        <h3>Title Here</h3>
        <p>Lorem quis ne dolor sit amet, ut proin facilisis, in nisl tempus dui nec morbi.</p>
      </div>
      <div class="info-item">
        <h3>Title Here</h3>
        <p>Lorem quis ne dolor sit amet, ut proin facilisis, in nisl tempus dui nec morbi.</p>
      </div>
      <div class="info-item">
        <h3>Title Here</h3>
        <p>Lorem quis ne dolor sit amet, ut proin facilisis, in nisl tempus dui nec morbi.</p>
      </div>
    </div>
  </div>
</section>




<?php get_footer(); ?>
