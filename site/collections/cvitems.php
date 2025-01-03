<?php

return function ($site) {
    return $site->find('cv')->children()->listed()->flip();
};
