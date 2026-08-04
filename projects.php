
<?php include 'includes/header.php'; ?>

<section class="page-banner">
    <div class="container text-center">
        <h1 class="banner-title">OUR <span class="gold-text">PROJECTS</span></h1>
        <p class="banner-subtitle">Official Lineup & Teasers</p>
    </div>
</section>

<!-- Featured Project -->
<section class="section-padding dark-bg">
    <div class="container">
        <div class="glass-card spotlight-project-card grid-2 align-center">
            <div class="project-info">
                <span class="badge-gold">FLAGSHIP IP</span>
                <h2 class="gold-text glow-text mt-10">THE THIRD ERA</h2>
                <p class="p-lead">A New Original Comic Universe.</p>
                <p>A vast mystery lies dormant. An ancient world where temple silhouettes, golden lighting, and forgotten atmospheres collide. No character details or plot spoilers are revealed prior to August 20.</p>
                <div class="project-meta">
                    <p><strong>First Look & Cover Art:</strong> August 20</p>
                    <p><strong>Status:</strong> Teaser Phase</p>
                </div>
                <div class="mt-20">
                    <a href="contact.php" class="btn btn-gold">Subscribe For Alerts</a>
                </div>
            </div>
            <div class="project-visual-teaser">
                <div class="teaser-placeholder-box">
                    <div class="lock-icon">🔒</div>
                    <p class="gold-text">COVER ART LOCKED</p>
                    <span class="sub-lock">Unlocks August 20</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Classified Projects -->
<section class="section-padding black-bg">
    <div class="container">
        <div class="section-header text-center">
            <h2 class="section-title">UNANNOUNCED <span class="gold-text">WORKS</span></h2>
            <p class="section-desc">Projects currently in early pre-production.</p>
        </div>
        <div class="mystery-grid">
            <?php 
            $classified_titles = ["Project Aether", "Project Kage", "Project Sol", "Project Chrono", "Project Nexus"];
            foreach($classified_titles as $title): 
            ?>
            <div class="glass-card mystery-card">
                <div class="mystery-mark">?</div>
                <div class="mystery-status">CLASSIFIED</div>
                <h4 class="mystery-title"><?php echo $title; ?></h4>
                <p class="mystery-sub">Identity Unknown</p>
                <span class="badge-dark">Awaiting Reveal</span>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>