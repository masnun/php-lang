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

        $items = array();

        foreach ($xml->channel->item as $item) {
            $items[] = array(
                'title' => (string) $item->title,
                'link' => (string) $item->link,
            );
        }

        return $items;
    }
}