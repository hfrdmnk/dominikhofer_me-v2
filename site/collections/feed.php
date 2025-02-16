<?php

return function ($site) {
    // Get individual collections
    $posts = $site->find("posts")->children()->listed();
    $links = $site->find("links")->children()->listed();
    $notes = $site->find("notes")->children()->listed();
    $photos = $site->find("photos")->children()->listed();

    // Merge all collections into one feed
    $feed = $posts->merge($links)->merge($notes)->merge($photos);

    // Sort the feed collection by the 'date' field in descending order
    return $feed->sortBy("date", "desc");
};
