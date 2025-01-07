<head>
    <!-- Global Metadata -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="icon" type="image/svg+xml" href="<?= $page->url() ?>/favicon.svg" />
    <meta name="generator" content="Kirby CMS" />

    <!-- Canonical URL -->
    <link rel="canonical" href="<?= $page->url() ?>" />

    <!-- Primary Meta Tags -->
    <title><?= ($page->seoTitle()->isNotEmpty() ? $page->seoTitle() : ($page->h1()->isNotEmpty() ? $page->h1() : $page->title())) . ' | ' . $site->shortTitle() ?></title>
    <meta name="title"
        content="<?= ($page->seoTitle()->isNotEmpty() ? $page->seoTitle() : ($page->h1()->isNotEmpty() ? $page->h1() : $page->title())) . ' | ' . $site->shortTitle() ?>" />
    <meta name="description" content="<?= $page->description() ?>" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?= $page->url() ?>" />
    <meta property="og:title"
        content="<?= ($page->seoTitle()->isNotEmpty() ? $page->seoTitle() : ($page->h1()->isNotEmpty() ? $page->h1() : $page->title())) . ' | ' . $site->shortTitle() ?>" />
    <meta property="og:description" content="<?= $page->description() ?>" />
    <meta property="og:image" content="<?= $page->url() ?>/og-image" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="<?= $page->url() ?>" />
    <meta property="twitter:title"
        content="<?= ($page->seoTitle()->isNotEmpty() ? $page->seoTitle() : ($page->h1()->isNotEmpty() ? $page->h1() : $page->title())) . ' | ' . $site->shortTitle() ?>" />
    <meta property="twitter:description" content="<?= $page->description() ?>" />
    <meta property="twitter:image" content="<?= $page->url() ?>/og-image" />

    <!-- Mastodon Author Tag -->
    <meta name="fediverse:creator" content="<?= $site->mastodonUser() ?>" />

    <!-- RSS Feeds -->
    <!-- Posts -->
    <link
        rel="alternate"
        type="application/rss+xml"
        title="<?= $site->title() ?> | All Posts"
        href="<?= $site->url() ?>/rss.xml" />

    <!-- Sitemap -->
    <link rel="sitemap" href="<?= $site->url() ?>/sitemap.xml" />

    <!-- Plausible Analytics -->
    <?php if (option('debug') === false): ?>
        <script defer data-domain="dominikhofer.me" src="https://analytics.linea.studio/js/script.js"></script>
    <?php endif ?>

    <!-- Loading fonts inline -->
    <?php snippet('fonts') ?>

    <!-- CSS -->
    <?= css([
        'assets/css/reset.css',
        'assets/css/base.css',
        'assets/css/components.css',
        '@auto'
    ]) ?>
</head>