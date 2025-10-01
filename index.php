<?php
// index.php
// PCP Certificate Homepage (Main Entry Point)

$siteTitle = 'PCP Certificate';
$subtitle  = 'Philippine College of Physicians - Certificates & Attendance';

// Certificates (replace Imgur URLs with your own hosted links)
$certificates = [
    ['file' => 'https://i.imgur.com/6LnjG1A.jpg', 'title' => 'Certificate of Attendance', 'meta' => 'Symposium 2025'],
    ['file' => 'https://i.imgur.com/LVSJ0dY.jpg', 'title' => 'Certificate of Attendance', 'meta' => 'Workshop 2025'],
    ['file' => 'https://i.imgur.com/Pf6EihC.jpg', 'title' => 'Certificate of Completion', 'meta' => 'Webinar Series'],
    ['file' => 'https://i.imgur.com/QnhwWZr.png', 'title' => 'Certificate of Attendance', 'meta' => 'Seminar'],
    ['file' => 'https://i.imgur.com/rbhq4qV.png', 'title' => 'Certificate of Merit', 'meta' => 'Research Forum'],
    ['file' => 'https://i.imgur.com/FpbfMMM.jpg', 'title' => 'Certificate of Attendance', 'meta' => 'Clinical Update'],
];

// Banner (from Imgur)
$banner = 'https://i.imgur.com/DNNdByp.png';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?= htmlspecialchars($siteTitle) ?></title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <div class="container">
        <!-- Hero Banner -->
        <div class="hero" style="background-image:linear-gradient(rgba(0,0,0,0.25), rgba(0,0,0,0.25)), url('<?= $banner ?>')">
            <div>
                <h1>Philippine College of Physicians</h1>
                <div class="hero-sub">I.M. Inspiring Dynamic Leadership</div>
            </div>
        </div>

        <!-- Title Section -->
        <div class="title-wrap">
            <div class="top-meta">
                <div class="badge">70</div>
                <div class="years">Years of excellence</div>
            </div>
            <div style="flex:1">
                <h2 class="title"><?= htmlspecialchars($siteTitle) ?></h2>
                <div class="desc"><?= htmlspecialchars($subtitle) ?></div>
            </div>
        </div>

        <div class="divider"></div>

        <!-- Certificates Grid -->
        <div class="grid">
            <?php foreach ($certificates as $c): ?>
                <article class="card">
                    <img src="<?= $c['file'] ?>" alt="<?= htmlspecialchars($c['title']) ?>">
                    <h3><?= htmlspecialchars($c['title']) ?></h3>
                    <p><?= htmlspecialchars($c['meta']) ?></p>
                </article>
            <?php endforeach; ?>
        </div>

        <!-- Footer -->
        <footer>
            © <?= date('Y') ?> Philippine College of Physicians — All Rights Reserved.
        </footer>
    </div>

    <script src="assets/script.js"></script>

</body>
</html>
