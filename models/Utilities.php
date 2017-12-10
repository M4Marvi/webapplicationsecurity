<?php

class Utilities {

    /*
     * Navigates to provided URL
     */
    static function goToURL($url) {
        header('Location: ' . $url);
    }

    static function goToError($errorString) {
        Utilities::goToURL(Page::$Error . '?error=' . urlencode($errorString));
    }

    /*
     * Reads any json file and returns PHP Array
     */
    static function readJSON($json_file_url) {
        return json_decode(file_get_contents($json_file_url), true);
    }

    /*
     * Checks and Cleans the user's input
     */
    static function clean($array) {

        $cleanedVersion = $array;//TODO

        return $cleanedVersion;
    }
}