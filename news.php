<?php include 'includes/header.php'; ?>

<section class="page-banner">
    <div class="container text-center">
        <h1 class="banner-title">STUDIO <span class="gold-text">NEWS</span></h1>
        <p class="banner-subtitle">Official Announcements & Updates</p>
    </div>
</section>

<section class="section-padding dark-bg">
    <div class="container">
        <div class="news-list-container">
            <?php 
            $all_news = [
                [
                    "title" => "Welcome to PandaNova Studios",
                    "category" => "Studio Announcement",
                    "date" => "August 1, 2026",
                    "content" => "We are thrilled to officially unveil PandaNova Studios. Our goal is to craft original worlds through comic storytelling, concept art, and high-quality animation. Stay tuned as we embark on this creative journey."
                ],
                [
                    "title" => "The Third Era First Look Coming August 20",
                    "category" => "Comic Reveal",
                    "date" => "August 3, 2026",
                    "content" => "The wait will soon be over. On August 20, we will release the official First Look and Cover Art for 'The Third Era', our flagship comic universe. No story details or spoilers will be shared prior to launch."
                ],
                [
                    "title" => "More Projects Coming Soon",
                    "category" => "Development",
                    "date" => "August 4, 2026",
                    "content" => "In addition to The Third Era, PandaNova Studios is actively developing five additional mystery projects. Each project represents a unique genre and medium."
                ]
            ];

            foreach($all_news as $news): 
            ?>
            <article class="glass-card news-full-item mb-30">
                <div class="news-header">
                    <span class="news-category"><?php echo $news['category']; ?></span>
                    <span class="news-date"><?php echo $news['date']; ?></span>
                </div>
                <h2 class="news-title gold-text mt-10"><?php echo $news['title']; ?></h2>
                <p class="news-body mt-10"><?php echo $news['content']; ?></p>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>


