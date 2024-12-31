<?php

return [
    'debug' => str_ends_with($_SERVER['SERVER_NAME'] ?? '', '.test') || @$_SERVER['SERVER_NAME'] === 'localhost', // enable debug for domains that end on ".test"
    'analytics' => [
        'domain' => 'dominikhofer.me',
        'script' => 'https://analytics.linea.studio/js/script.js'
    ],
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
                return $this->next();
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
            'action'  => fn() => go('sitemap.xml', 301)
        ]
    ],
    'sitemap.ignore' => ['error'],
];
