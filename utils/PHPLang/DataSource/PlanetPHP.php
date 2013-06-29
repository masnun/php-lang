<?php
/**
 * Author: Abu Ashraf Masnun
 * URL: http://masnun.me
 */

namespace PHPLang\DataSource;

class PlanetPHP
{
    const FEED_URL = "http://www.planet-php.net/rss/";
    const SOURCE = "PlanetPHP";

    public function getItems()
    {
        $xml = new \SimpleXMLElement(self::FEED_URL, NULL, TRUE);
        foreach ($xml->channel->item as $item) {
            var_dump($item->title);
            var_dump($item->link);
        }
    }
}