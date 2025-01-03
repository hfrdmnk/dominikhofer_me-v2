<?php

Kirby::plugin('dominik/opml-type', [
    'fileTypes' => [
        'opml' => [
            'mime' => ['application/xml', 'text/x-opml', 'text/xml'],
            'type' => 'document',
        ]
    ]
]);
