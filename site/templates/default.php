<!DOCTYPE html>
<html lang="en">

<?php snippet('head') ?>

<body>
    <?php snippet('navbar') ?>

    <?php snippet('header') ?>

    <main class="<?= $page->parent() != 'post' ? 'regular-page' : '' ?>">
        <div class="container">
            <div class="rt">
                <?= $page->pageContent()->toBlocks() ?>
            </div>
        </div>
    </main>
</body>

</html>