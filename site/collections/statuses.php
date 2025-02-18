<?php

return function ($site) {
    $url = 'https://api.omg.lol/address/dominikhofer/statuses/';

    try {
        $response = @file_get_contents($url);
        if ($response === false) {
            return [];
        }

        $data = json_decode($response, true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            return [];
        }

        $statuses = [];
        if (
            $data['request']['success'] &&
            ! empty($data['response']['statuses'])
        ) {
            foreach ($data['response']['statuses'] as $status) {
                $statuses[] = [
                    'date' => date('Y-m-d H:i', $status['created']),
                    'status' => $status['emoji'].' '.$status['content'],
                ];
            }
        }

        return $statuses;
    } catch (Exception $e) {
        return [];
    }
};
