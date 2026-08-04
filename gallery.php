<?php include 'includes/header.php'; ?>

<section class="page-banner">
    <div class="container text-center">
        <h1 class="banner-title">STUDIO <span class="gold-text">GALLERY</span></h1>
        <p class="banner-subtitle">Official Teaser Art, Branding & Posters</p>
    </div>
</section>

<section class="section-padding dark-bg">
    <div class="container">
        <div class="gallery-grid">
            <?php
            $gallery_items = [
                ["title" => "PandaNova Crest", "bg" => "art-bg-1", "tag" => "Branding"],
                ["title" => "The Third Era Teaser", "bg" => "art-bg-2", "tag" => "Comic Poster"],
                ["title" => "Official Studio Emblem", "bg" => "art-bg-3", "tag" => "Logo"],
                ["title" => "Temple Silhouettes Teaser", "bg" => "art-bg-4", "tag" => "Concept"],
                ["title" => "Golden Horizon Teaser", "bg" => "art-bg-5", "tag" => "Environment"],
                ["title" => "The Third Era Key Art", "bg" => "art-bg-6", "tag" => "Promotional"]
            ];

            foreach($gallery_items as $index => $item):
            ?>
            <div class="gallery-item glass-card lightbox-trigger" data-title="<?php echo $item['title']; ?>">
                <div class="placeholder-art <?php echo $item['bg']; ?>">
                    <div class="art-overlay">
                        <span class="art-tag"><?php echo $item['tag']; ?></span>
                        <span class="art-title"><?php echo $item['title']; ?></span>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
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
