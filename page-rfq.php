<?php
/* Template Name: RFQ Builder */
get_header();
?>

<div class="rfq-container">

    <h1 class="rfq-title">Build Your Custom Machine</h1>
    <p class="rfq-subtitle">Configure your ideal packaging or mixing machine with our interactive builder</p>

    <div class="rfq-layout">

        <!-- LEFT SIDE: STEPS -->
        <div class="rfq-steps">

            <!-- STEP 1 -->
            <div class="rfq-card">
                <h2>Step 1: Select Machine Type</h2>

                <div class="machine-tabs">
                    <button class="tab-btn active" data-type="packaging">Packaging Machines</button>
                    <button class="tab-btn" data-type="mixing">Mixing Machines</button>
                </div>
            </div>

            <!-- STEP 2 -->
            <div class="rfq-card">
                <h2>Step 2: Choose Model</h2>

                <div class="model-grid" id="modelGrid">
                    <!-- JS inserts models here based on tab selection -->
                </div>
            </div>

            <!-- STEP 3 – FORM -->
            <form class="rfq-form" method="POST">
                <h2>Step 3: Your Details</h2>

                <input type="hidden" name="selected_machine_type" id="selectedMachineType">
                <input type="hidden" name="selected_model" id="selectedModel">

                <label>Your Name</label>
                <input type="text" name="full_name" required>

                <label>Email Address</label>
                <input type="email" name="email" required>

                <label>Phone Number</label>
                <input type="text" name="phone" required>

                <label>Additional Notes</label>
                <textarea name="notes" rows="4"></textarea>

                <button type="submit" name="submit_rfq" class="submit-btn">Submit RFQ</button>
            </form>

        </div>

        <!-- RIGHT SIDE: CONFIG SUMMARY + ILLUSTRATION -->
        <div class="rfq-summary">
            <div class="summary-box">
                <h3>Configuration Summary</h3>

                <p><strong>Machine Type:</strong> <span id="summaryType">Packaging</span></p>
                <p><strong>Model:</strong> <span id="summaryModel">None</span></p>
            </div>

            <div class="machine-illustration">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/machine-illustration.png" alt="Machine">
            </div>
        </div>

    </div>

</div>

<?php
// Handle RFQ submission
if (isset($_POST['submit_rfq'])) {

    $machineType = sanitize_text_field($_POST['selected_machine_type']);
    $model = sanitize_text_field($_POST['selected_model']);
    $name = sanitize_text_field($_POST['full_name']);
    $email = sanitize_email($_POST['email']);
    $phone = sanitize_text_field($_POST['phone']);
    $notes = sanitize_textarea_field($_POST['notes']);

    // Email

    /*
    wp_mail(
        "info@bagandbulk.co.za",
        "New Machine RFQ from $name",
        "Machine Type: $machineType\nModel: $model\n\nName: $name\nEmail: $email\nPhone: $phone\nNotes:\n$notes"
    );
    */

    // Admin Notice
    echo "<script>alert('Your RFQ has been submitted. We will contact you shortly.');</script>";
}

get_footer();
?>
