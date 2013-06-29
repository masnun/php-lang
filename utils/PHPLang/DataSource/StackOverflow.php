<?php
/**
 * Author: Abu Ashraf Masnun
 * URL: http://masnun.me
 */

namespace PHPLang\DataSource;

class StackOverflow
{
    const FEED_URL = "http://stackoverflow.com/feeds/tag/php";
    const SOURCE = "StackOverflow";

    public function getItems()
    {
        $xml = new \SimpleXMLElement(self::FEED_URL, NULL, TRUE);
        foreach ($xml->entry as $item) {
            var_dump($item->title);
            var_dump($item->link);
        }
    }
}