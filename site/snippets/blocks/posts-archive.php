<?php
$posts = $kirby->collection('posts')->sort('date', 'desc');

// create a two dimensional array of $groupedPosts[year][month] = posts
$groupedPosts = [];
foreach ($posts as $post) {
    $year = $post->date()->toDate('Y');
    $month = $post->date()->toDate('F');
    $groupedPosts[$year][$month][] = $post;
}
?>

<aside class="b-posts-archive">
    <ul class="b-posts-archive__list">
        <?php foreach ($groupedPosts as $year => $months): ?>
            <li>
                <ul>
                    <?php
                    $monthKeys = array_keys($months);
                    foreach ($months as $month => $posts):
                        $isFirstMonth = array_search($month, $monthKeys) === 0;
                    ?>
                        <li>
                            <h2><?php if ($isFirstMonth) echo $year ?> <?= $month ?></h2>
                            <ul>
                                <?php foreach ($posts as $post): ?>
                                    <li>
                                        <a class="no-highlight" href="<?= $post->url() ?>">
                                            <?= $post->title() ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </li>
        <?php endforeach; ?>
    </ul>