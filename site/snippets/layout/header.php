<header>
    <div class="container">
        <div class="header__wrapper" data-hover-group>
            <div class="header__title-bar">
                <div class="header__slug">/<?= $page == $site->homePage() ? '' : $page->slug() ?></div>

                <?php if ($page == $site->homepage()): ?>
                    <h1 class="home-title"><span data-hover-word="curious">Curious. </span><span data-hover-word="creative">Creative.
                        </span><span data-hover-word="coder">Coder.</span></h1>
                <?php else: ?>
                    <h1><?= $page->h1()->isNotEmpty() ? $page->h1() : $page->title() ?></h1>
                <?php endif ?>

                <div class="tag__bar">
                    <?php if ($page->template() == 'post'): ?>
                        <div><?= $page->date()->toDate('F j, Y') ?></div>
                    <?php endif ?>
                    <?php if ($page->showUpdated()->toBool() == true): ?>
                        <div class="tag">Last updated: <?= $page->modified('d/m/Y') ?></div>
                    <?php endif ?>
                </div>
            </div>

            <div class="header__lead rt">
                <?php if ($page == $site->homePage()): ?>
                    <p>That’s me, Dominik :)</p>
                    <p><span data-hover-word="curious">I like to learn <span class="ampersand">&</span> understand more about the world we live in. </span><span data-hover-word="creative">While coming up with cool ideas <span class="ampersand">&</span> designing beautiful things. </span><span data-hover-word="coder">And bringing them to life with fancy symbols.</span></p>
                <?php endif ?>
                <?= $page->lead()->kt() ?>
            </div>

            <?php if ($page->visual()->isNotEmpty()): ?>
                <figure class="header__image">
                    <div><img src="<?= $page->visual()->toFile()->url() ?>" alt="<?= $page->visual()->toFile()->alt() ?>"></div>
                    <?php if ($page->visual()->toFile()->caption()->isNotEmpty()): ?>
                        <figcaption><?= $page->visual()->toFile()->caption() ?></figcaption>
                    <?php endif ?>
                </figure>
            <?php endif ?>
        </div>
    </div>
</header>