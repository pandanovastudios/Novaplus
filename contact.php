<?php 
include 'includes/header.php'; 

$form_submitted = false;
$error_msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = filter_var($_POST['name'] ?? '', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
    $message = filter_var($_POST['message'] ?? '', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if ($name && $email && $message) {
        // PHP Mail Logic Header Placeholder
        $to = "contact@pandanovastudios.com";
        $subject = "New Inquiry from " . $name;
        $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
        $headers = "From: webmaster@pandanovastudios.com";

        // Attempt sending email (suppressed with @ for servers without configured sendmail)
        @mail($to, $subject, $body, $headers);
        $form_submitted = true;
    } else {
        $error_msg = "Please fill in all fields correctly.";
    }
}
?>

<section class="page-banner">
    <div class="container text-center">
        <h1 class="banner-title">CONTACT <span class="gold-text">STUDIO</span></h1>
        <p class="banner-subtitle">Get in Touch with PandaNova</p>
    </div>
</section>

<section class="section-padding dark-bg">
    <div class="container">
        <div class="grid-2 gap-40">
            <!-- Contact Form Card -->
            <div class="glass-card contact-card">
                <h2 class="gold-text mb-20">Send A Dispatch</h2>
                
                <?php if ($form_submitted): ?>
                    <div class="alert alert-success">
                        Thank you, <?php echo htmlspecialchars($name); ?>. Your dispatch has been received. We will respond shortly.
                    </div>
                <?php else: ?>
                    <?php if ($error_msg): ?>
                        <div class="alert alert-error"><?php echo $error_msg; ?></div>
                    <?php endif; ?>

                    <form action="contact.php" method="POST" class="form-wrapper">
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" id="name" name="name" required placeholder="Enter full name">
                        </div>
                        <div class="form-group">
                            <label for="email">Your Email</label>
                            <input type="email" id="email" name="email" required placeholder="name@domain.com">
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" rows="5" required placeholder="State your inquiry or business proposal..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-gold btn-full">Send Message</button>
                    </form>
                <?php endif; ?>
            </div>

            <!-- Studio Info & Placeholder Map -->
            <div class="contact-info-col">
                <div class="glass-card mb-20">
                    <h3 class="gold-text">HQ LOCATION</h3>
                    <p>PandaNova Studios Headquarters</p>
                    <p class="text-dim">Creative Operations & Art Direction</p>
                    <p class="mt-10"><strong>Inquiries:</strong> info@pandanovastudios.com</p>
                </div>

                <!-- Google Maps Placeholder -->
                <div class="glass-card map-container">
                    <div class="map-placeholder">
                        <span class="map-pin">📍</span>
                        <p class="gold-text">PANDANOVA HEADQUARTERS</p>
                        <p class="text-dim">[ Google Map Interface Loaded Here ]</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
