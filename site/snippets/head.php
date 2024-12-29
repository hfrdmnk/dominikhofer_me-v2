<head>
    <!-- Global Metadata -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="icon" type="image/svg+xml" href="<?= $page->url() ?>/favicon.svg" />
    <meta name="generator" content="Kirby CMS" />

    <!-- Canonical URL -->
    <link rel="canonical" href="<?= $page->url() ?>" />

    <!-- Primary Meta Tags -->
    <title><?= ($page->h1()->isNotEmpty() ? $page->h1() : $page->title()) . ' | ' . $site->short_title() ?></title>
    <meta name="title" content="<?= ($page->h1()->isNotEmpty() ? $page->h1() : $page->title()) . ' | ' . $site->short_title() ?>" />
    <meta name="description" content="<?= $page->description() ?>" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?= $page->url() ?>" />
    <meta property="og:title" content="<?= ($page->h1()->isNotEmpty() ? $page->h1() : $page->title()) . ' | ' . $site->short_title() ?>" />
    <meta property="og:description" content="<?= $page->description() ?>" />
    <meta property="og:image" content="<?= $page->url() ?>/og-image" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="<?= $page->url() ?>" />
    <meta property="twitter:title" content="<?= ($page->h1()->isNotEmpty() ? $page->h1() : $page->title()) . ' | ' . $site->short_title() ?>" />
    <meta property="twitter:description" content="<?= $page->description() ?>" />
    <meta property="twitter:image" content="<?= $page->url() ?>/og-image" />

    <!-- Mastodon Author Tag -->
    <meta name="fediverse:creator" content="<?= $site->mastodon_user() ?>" />

    <!-- RSS Feeds -->
    <!-- Posts -->
    <link
        rel="alternate"
        type="application/rss+xml"
        title="All Posts | <?= $site->title() ?>"
        href="<?= $site->url() ?>/rss.xml" />

    <!-- Sitemap -->
    <link rel="sitemap" href="<?= $site->url() ?>/sitemap.xml" />

    <!-- Plausible Analytics -->
    <?php if (option('debug') === false): ?>
        <script defer data-domain="dominikhofer.me" src="https://analytics.linea.studio/js/script.js"></script>
    <?php endif ?>

    <!-- CSS -->
    <?= css([
        'assets/css/fonts.css',
        'assets/css/reset.css',
        'assets/css/styles.css',
        '@auto'
    ]) ?>
</head>