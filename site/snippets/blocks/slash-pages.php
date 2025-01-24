<?php
$pages = $page->related()->toPages();
?>

<aside class="slash-pages">
    <h3>Related slash pages</h3>
    <?php foreach ($pages as $page): ?>
        <article>
            <a class="no-highlight" href="<?= $page->url() ?>">
                <h4>/<?= $page->slug() ?></h4>
                <?php if ($page->description()->isNotEmpty()): ?>
                    <p><?= $page->description() ?></p>
                <?php endif; ?>
            </a>
        </article>
    <?php endforeach; ?>
</aside>