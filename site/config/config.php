<?php

return [
    'routes' => [
        [
            // this enables top level blog posts
            'pattern'  => '(:any)',
            'language' => '*',
            'action'   => function ($slug) {
                // try and find a first level page with the given slug
                if ($page = page($slug)) {
                    return $page;
                    // otherwise, try to find the page in the posts folder and redirect
                } elseif ($page = page('posts/' . $slug)) {
                    go($page);
                }
                // fall back to next route (alternatively, go directly to error page)
                $this->next();
            }
        ],
        [
            'pattern' => 'sitemap.xml',
            'action'  => function () {
                $pages = site()->pages()->index();

                // fetch the pages to ignore from the config settings,
                // if nothing is set, we ignore the error page
                $ignore = kirby()->option('sitemap.ignore', ['error']);

                $content = snippet('sitemap', compact('pages', 'ignore'), true);

                // return response with correct header type
                return new Kirby\Cms\Response($content, 'application/xml');
            }
        ],
        [
            'pattern' => 'sitemap',
            'action'  => function () {
                return go('sitemap.xml', 301);
            }
        ]
    ],
    'sitemap.ignore' => ['error']
];