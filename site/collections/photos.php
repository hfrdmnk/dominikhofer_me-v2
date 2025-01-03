<?php

return function ($site) {
    return $site->find('photos')->children()->listed()->flip();
};
