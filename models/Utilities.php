<?php

class Utilities
{
    static function goToURL($url) {
        header('Location: ' . $url);
    }
}