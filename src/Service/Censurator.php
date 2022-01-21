<?php

namespace App\Service;

class Censurator
{
    protected $wordsToCensure = array();

    public function __construct() {
        $this->wordsToCensure = array(
            'veryBadWord',
            'anotherBadWord'
        );
    }

    public function purify(string $message): string {
        return str_ireplace($this->wordsToCensure, '****', $message);
    }
}