<div class="navbar" id="top">
    <div class="container is-md">
        <div class="navbar__wrapper">
            <a href="<?= $site->url() ?>" class="navbar__logo">
                <?php @snippet('blocks/logo'); ?>
            </a>

            <nav>
                <ul class="navbar__menu">
                    <li class="navbar__menu-item">
                        <a href="<?= $site->url() ?>" class="navbar__menu-link <?= $page->isHomePage() ? 'is-active' : '' ?>">
                            /home
                        </a>
                    </li>
                    <?php
                    $navPages = $site->navPages()->toPages();
            foreach ($navPages as $navPage) { ?>
                        <li class="navbar__menu-item">
                            <a href="<?= $navPage->url() ?>" class="navbar__menu-link <?= $page->url() === $navPage->url() ? 'is-active' : '' ?>">
                                /<?= $navPage->slug() ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </nav>
        </div>
    </div>
</div>