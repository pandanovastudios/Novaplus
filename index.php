<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="hero-section">
    <canvas id="heroParticles"></canvas>
    
    <!-- Atmospheric Visual Layers -->
    <div class="hero-bg-layer zoom-bg"></div>
    <div class="temple-silhouettes"></div>
    <div class="gold-fog-overlay"></div>

    <div class="hero-content">
        <span class="badge-gold glow-element">PREMIUM ENTERTAINMENT STUDIO</span>
        <h1 class="hero-title">Creating Original Worlds <br><span class="gold-gradient-text">That Inspire</span></h1>
        <p class="hero-subtitle">Original Comics • Animation • Concept Art • Visual Storytelling</p>
        <div class="hero-cta-group">
            <a href="#third-era" class="btn btn-gold">Explore PandaNova</a>
            <a href="about.php" class="btn btn-glass">Learn More</a>
        </div>
    </div>
</section>

<!-- Countdown Section: The Third Era -->
<section id="third-era" class="section-padding dark-bg relative-wrap">
    <div class="atmospheric-glow"></div>
    <div class="container text-center">
        <span class="badge-gold">COUNTDOWN TO REVEAL</span>
        <h2 class="section-title gold-text glow-text mt-10">THE THIRD ERA</h2>
        <p class="section-desc">Official First Look & Cover Art Launching Worldwide</p>
        
        <div class="target-date-badge">
            <span class="calendar-icon">📅</span> AUGUST 20
        </div>

        <!-- JS Live Countdown Container -->
        <div id="countdown-container" class="countdown-wrapper">
            <div class="time-box">
                <span id="days" class="time-num">00</span>
                <span class="time-label">Days</span>
            </div>
            <div class="time-separator">:</div>
            <div class="time-box">
                <span id="hours" class="time-num">00</span>
                <span class="time-label">Hours</span>
            </div>
            <div class="time-separator">:</div>
            <div class="time-box">
                <span id="minutes" class="time-num">00</span>
                <span class="time-label">Minutes</span>
            </div>
            <div class="time-separator">:</div>
            <div class="time-box">
                <span id="seconds" class="time-num">00</span>
                <span class="time-label">Seconds</span>
            </div>
        </div>

        <div id="countdown-finished" class="now-live-card hidden">
            <h3 class="gold-text">NOW LIVE</h3>
            <p>The Third Era First Look & Cover Art is ready for discovery.</p>
        </div>

        <div class="mt-30">
            <a href="projects.php" class="btn btn-gold pulse-btn">View First Look</a>
        </div>
    </div>
</section>

<!-- About Teaser Section -->
<section class="section-padding black-bg">
    <div class="container">
        <div class="section-header text-center">
            <h2 class="section-title">WHAT WE <span class="gold-text">BUILD</span></h2>
            <p class="section-desc">PandaNova Studios is dedicated to pushing the boundaries of visual media.</p>
        </div>

        <div class="grid-3">
            <div class="glass-card feature-card scroll-reveal">
                <div class="card-icon">🎨</div>
                <h3>Original Comics</h3>
                <p>Captivating high-concept sagas with stunning custom visual design and rich world-building.</p>
            </div>
            <div class="glass-card feature-card scroll-reveal">
                <div class="card-icon">🎬</div>
                <h3>Animation</h3>
                <p>Fluid, cinematic sequences engineered to transport audiences into unseen realms.</p>
            </div>
            <div class="glass-card feature-card scroll-reveal">
                <div class="card-icon">⚔️</div>
                <h3>Concept Art</h3>
                <p>Expressive environments, iconic artifacts, and character archetypes crafted by masters.</p>
            </div>
            <div class="glass-card feature-card scroll-reveal">
                <div class="card-icon">📖</div>
                <h3>Storytelling</h3>
                <p>Deep narrative architecture designed for emotional depth and multi-media universes.</p>
            </div>
            <div class="glass-card feature-card scroll-reveal">
                <div class="card-icon">🎮</div>
                <h3>Interactive Games</h3>
                <p>Expanding comic IPs into playable visual experiences and interactive media.</p>
            </div>
            <div class="glass-card feature-card scroll-reveal">
                <div class="card-icon">🚀</div>
                <h3>Future Creative</h3>
                <p>Unannounced cross-platform media ventures currently operating under strict NDA.</p>
            </div>
        </div>
    </div>
</section>

<!-- Spotlight: The Third Era Universe -->
<section class="third-era-spotlight section-padding">
    <div class="spotlight-bg-mist"></div>
    <div class="container text-center relative-wrap">
        <h2 class="spotlight-headline gold-text glow-text">THE THIRD ERA</h2>
        <h3 class="spotlight-subheadline">A New Original Comic Universe</h3>
        
        <p class="spotlight-quote">"A new world is waiting to be discovered."</p>
        
        <div class="spotlight-info-card glass-card">
            <p class="text-gold bold">Official First Look & Cover Art</p>
            <p class="release-date">August 20</p>
            <div class="spotlight-actions">
                <a href="contact.php" class="btn btn-gold">Notify Me</a>
                <a href="projects.php" class="btn btn-glass">Learn More</a>
            </div>
        </div>
    </div>
</section>

<!-- Coming Soon Mystery Section -->
<section class="section-padding black-bg">
    <div class="container">
        <div class="section-header text-center">
            <h2 class="section-title">CLASSIFIED <span class="gold-text">PROJECTS</span></h2>
            <p class="section-desc">Unannounced universes currently in active pipeline development.</p>
        </div>

        <div class="mystery-grid">
            <?php for ($i = 1; $i <= 5; $i++): ?>
            <div class="glass-card mystery-card scroll-reveal">
                <div class="mystery-mark">?</div>
                <div class="mystery-status">CLASSIFIED</div>
                <h4 class="mystery-title">Coming Soon</h4>
                <p class="mystery-sub">Identity Unknown</p>
                <span class="badge-dark">Awaiting Reveal</span>
            </div>
            <?php endfor; ?>
        </div>
    </div>
</section>

<!-- Dynamic News Section -->
<section class="section-padding dark-bg">
    <div class="container">
        <div class="section-header flex-between">
            <div>
                <h2 class="section-title">LATEST <span class="gold-text">NEWS</span></h2>
                <p class="section-desc">Announcements and official studio dispatches.</p>
            </div>
            <a href="news.php" class="btn btn-glass desktop-only">View All News</a>
        </div>

        <div class="grid-3">
            <?php 
            $news_items = [
                [
                    "title" => "Welcome to PandaNova Studios",
                    "category" => "Studio Announcement",
                    "date" => "August 1, 2026",
                    "excerpt" => "PandaNova Studios officially unveils its portal. Discover our vision for original storytelling, art, and world-building."
                ],
                [
                    "title" => "The Third Era First Look Coming August 20",
                    "category" => "Comic Reveal",
                    "date" => "August 3, 2026",
                    "excerpt" => "Mark your calendars. The official teaser cover art and world backstory for our premier universe will be unlocked."
                ],
                [
                    "title" => "More Projects Coming Soon",
                    "category" => "Development",
                    "date" => "August 4, 2026",
                    "excerpt" => "Our creative teams are hard at work engineering five undisclosed IPs spanning animation, visual novels, and media."
                ]
            ];

            foreach($news_items as $item): 
            ?>
            <article class="glass-card news-card scroll-reveal">
                <div class="news-category"><?php echo $item['category']; ?></div>
                <span class="news-date"><?php echo $item['date']; ?></span>
                <h3 class="news-title"><?php echo $item['title']; ?></h3>
                <p class="news-excerpt"><?php echo $item['excerpt']; ?></p>
                <a href="news.php" class="read-more-link">Read Full Announcement &rarr;</a>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Teaser Gallery Section -->
<section class="section-padding black-bg">
    <div class="container text-center">
        <h2 class="section-title">STUDIO <span class="gold-text">GALLERY</span></h2>
        <p class="section-desc mb-30">Promotional teasers, key art, and official branding.</p>

        <div class="gallery-grid">
            <div class="gallery-item glass-card lightbox-trigger" data-full="assets/images/teaser1.jpg">
                <div class="placeholder-art art-bg-1">
                    <div class="art-overlay"><span>PANDANOVA BRANDING</span></div>
                </div>
            </div>
            <div class="gallery-item glass-card lightbox-trigger" data-full="assets/images/teaser2.jpg">
                <div class="placeholder-art art-bg-2">
                    <div class="art-overlay"><span>THE THIRD ERA TEASER</span></div>
                </div>
            </div>
            <div class="gallery-item glass-card lightbox-trigger" data-full="assets/images/teaser3.jpg">
                <div class="placeholder-art art-bg-3">
                    <div class="art-overlay"><span>OFFICIAL STUDIO LOGO</span></div>
                </div>
            </div>
        </div>

        <div class="mt-30">
            <a href="gallery.php" class="btn btn-gold">Explore Full Gallery</a>
        </div>
    </div>
</section>

<!-- Lightbox Modal -->
<div id="lightbox" class="lightbox-modal">
    <span class="lightbox-close">&times;</span>
    <div class="lightbox-content-wrap">
        <div id="lightbox-display" class="lightbox-placeholder"></div>
        <p id="lightbox-caption" class="lightbox-caption"></p>
    </div>
</div>

<?php include 'includes/footer.php'; ?>


