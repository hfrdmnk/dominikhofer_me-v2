<?php

return function ($page) {
    $opmlFile = $page->opml()->toFile();

    // Return early if no OPML file exists
    if (!$opmlFile) {
        return [
            'feeds' => [],
            'message' => 'No OPML file uploaded yet.',
            'hasFeeds' => false
        ];
    }

    try {
        $xml = simplexml_load_file($opmlFile->root());

        // Check if XML loading failed
        if ($xml === false) {
            return [
                'feeds' => [],
                'message' => 'Could not parse OPML file.',
                'hasFeeds' => false
            ];
        }

        $feeds = [];

        // Parse the OPML file
        foreach ($xml->body->outline as $category) {
            $categoryName = (string)$category['text'];
            $feeds[$categoryName] = [];

            foreach ($category->outline as $feed) {
                $feeds[$categoryName][] = [
                    'title' => (string)$feed['title'],
                    'xmlUrl' => (string)$feed['xmlUrl'],
                    'htmlUrl' => (string)$feed['htmlUrl'],
                    'text' => (string)$feed['text'],
                    'type' => (string)$feed['type']
                ];
            }

            // Sort feeds alphabetically by title within category
            usort($feeds[$categoryName], function ($a, $b) {
                return strcasecmp($a['title'], $b['title']);
            });
        }

        return [
            'feeds' => $feeds,
            'message' => '',
            'hasFeeds' => true
        ];
    } catch (Exception $e) {
        return [
            'feeds' => [],
            'message' => 'Error processing OPML file: ' . $e->getMessage(),
            'hasFeeds' => false
        ];
    }
};
