<?php
$posts = $kirby->collection('posts')->sort('date', 'desc');

$groupedPosts = [];
foreach ($posts as $post) {
    $year = $post->date()->toDate('Y');
    $month = $post->date()->toDate('F');
    $groupedPosts[$year][$month][] = $post;
}
?>

<aside class="posts-archive">
    <?php foreach ($groupedPosts as $year => $months): ?>
        <?php
        $monthKeys = array_keys($months);
        foreach ($months as $month => $posts):
            $isFirstMonth = array_search($month, $monthKeys) === 0;
        ?>
            <section class="posts-archive__section">
                <h2><span><?php if ($isFirstMonth) echo $year ?></span> <span><?= $month ?></span></h2>
                <?php foreach ($posts as $post): ?>
                    <article class="post-item">
                        <a class="no-highlight" href="<?= $post->url() ?>">
                            <time><?= $post->date()->toDate("d.m.Y") ?></time>
                            <div class="post-item__content">
                                <h3><?= $post->title() ?></h3>
                                <?php if ($post->featured()->isTrue()): ?>
                                    <div class="post-item__featured"><i class="ti ti-sparkles"></i> Favorite</div>
                                <?php endif; ?>
                            </div>
                        </a>
                    </article>
                <?php endforeach; ?>
            </section>
        <?php endforeach; ?>
    <?php endforeach; ?>
    </ul>