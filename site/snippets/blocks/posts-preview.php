<?php
$selection = $block->selection()->value();
$featuredPosts = $kirby->collection('posts')->filterBy('featured', 'true')->shuffle()->limit(3)->sort('date', 'desc');
$latestPosts = $kirby->collection('posts')->sort('date', 'desc')->limit(3);

$posts = $selection == 'featured' ? $featuredPosts : $latestPosts;
?>

<section class="posts-preview">
    <?php foreach ($posts as $post): ?>
        <article class="post-item">
            <a class="no-highlight" href="<?= $post->url() ?>">
                <time><?= $post->date()->toDate("d.m.Y") ?></time>
                <div class="post-item__content">
                    <h3><?= $post->title() ?></h3>
                </div>
            </a>
        </article>
    <?php endforeach; ?>
</section>