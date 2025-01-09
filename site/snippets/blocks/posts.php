<?php
$selection = $block->selection()->value();
$featuredPosts = $kirby->collection('posts')->filterBy('featured', 'true')->shuffle()->limit(3);
$latestPosts = $kirby->collection('posts')->sort('date', 'desc')->limit(3);

$posts = $selection == 'favorites' ? $featuredPosts : $latestPosts;
?>

<aside class="b-posts">
    <h3><?= $selection == 'favorites' ? "Handpicked favorites" : "Latest posts" ?></h3>
    <?php foreach ($posts as $post): ?>
        <article>
            <a class="no-highlight" href="<?= $post->url() ?>">
                <h4 class="fake-link"><?= $post->title() ?></h4>
                <div class="b-posts__meta">
                    <? if ($post->featured()->isTrue()): ?>
                        <i class="ti ti-sparkles"></i>
                    <? endif; ?>
                    <time datetime="<?= $post->date()->toDate('c') ?>"> <?= $post->date()->toDate('d.m.Y') ?></time>
                </div>
            </a>
        </article>
    <?php endforeach; ?>
</aside>