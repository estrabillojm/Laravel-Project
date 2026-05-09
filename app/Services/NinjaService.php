<?php

namespace App\Services;

class NinjaService {
    public function getStrongestNinja(array $ninjas) {
        return array_reduce($ninjas, function($carry, $item) {
            return ($carry === null || $item['strength'] > $carry['strength']) ? $item : $carry;
        });
    }
}