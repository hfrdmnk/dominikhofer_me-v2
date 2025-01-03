<main>
    <h1><?= $page->title() ?></h1>

    <?php if ($hasFeeds): ?>
        <?php foreach ($feeds as $category => $categoryFeeds): ?>
            <section>
                <h2><?= $category ?></h2>
                <ul>
                    <?php foreach ($categoryFeeds as $feed): ?>
                        <li>
                            <a href="<?= $feed['htmlUrl'] ?>">
                                <?= $feed['title'] ?>
                            </a>
                            <small>
                                <a href="<?= $feed['xmlUrl'] ?>">RSS</a>
                            </small>
                        </li>
                    <?php endforeach ?>
                </ul>
            </section>
        <?php endforeach ?>
    <?php else: ?>
        <p class="message"><?= $message ?></p>
    <?php endif ?>
</main>