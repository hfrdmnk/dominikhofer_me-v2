<?php

return function ($site) {
    return $site->find('links')->children()->listed()->flip();
};
