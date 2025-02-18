<main>
    <h1><?= $page->title() ?></h1>

    <?php if ($hasFeeds) { ?>
        <?php foreach ($feeds as $category => $categoryFeeds) { ?>
            <section>
                <h2><?= $category ?></h2>
                <ul>
                    <?php foreach ($categoryFeeds as $feed) { ?>
                        <li>
                            <a href="<?= $feed['htmlUrl'] ?>">
                                <?= $feed['title'] ?>
                            </a>
                            <small>
                                <a href="<?= $feed['xmlUrl'] ?>">RSS</a>
                            </small>
                        </li>
                    <?php } ?>
                </ul>
            </section>
        <?php } ?>
    <?php } else { ?>
        <p class="message"><?= $message ?></p>
    <?php } ?>
</main>