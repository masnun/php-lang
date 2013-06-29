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

        $items = array();

        foreach ($xml->entry as $item) {
            $items[] = array(
                'title' => (string) $item->title,
                'url' => (string) $item->link->attributes()['href'],
            );
        }

        return $items;
    }
}