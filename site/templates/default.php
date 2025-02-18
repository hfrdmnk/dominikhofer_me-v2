<!DOCTYPE html>
<html lang="en">

<?php snippet('meta/head'); ?>

<body>
  <?php snippet('layout/navbar'); ?>

  <?php snippet('layout/header'); ?>

  <main class="<?= $page->parent() != 'post' ? 'regular-page' : '' ?>">
    <div class="container">
      <div class="rt">
        <?= $page->pageContent()->toBlocks() ?>
      </div>
    </div>
  </main>

  <?php snippet('layout/footer'); ?>
</body>

</html>