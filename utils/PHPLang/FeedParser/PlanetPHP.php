<?php
/**
 * Author: Abu Ashraf Masnun
 * URL: http://masnun.me
 */

namespace PHPLang\FeedParser;

class PlanetPHP
{
    const FEED_URL = "http://www.planet-php.net/rss/";
    const SOURCE = "PlanetPHP";

    public function parseFeed()
    {
        $xml = new \SimpleXMLElement(self::FEED_URL, NULL, TRUE);
        foreach ($xml->channel->item as $item) {
            var_dump($item->title);
            var_dump($item->link);
        }
    }
}