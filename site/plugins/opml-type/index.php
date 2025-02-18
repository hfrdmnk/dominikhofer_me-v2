<?php

Kirby::plugin('hfrdmnk/opml-type', [
    'fileTypes' => [
        'opml' => [
            'mime' => ['application/xml', 'text/x-opml', 'text/xml'],
            'type' => 'document',
        ],
    ],
]);
