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

    public function scrape()
    {
        $xml = new \SimpleXMLElement(self::FEED_URL, NULL, TRUE);

        $items = array();

        foreach ($xml->channel->item as $item) {
            $title = (string)$item->title;
            $url = (string)$item->link;

            if (!\Article::exists($url)) {
                $article = new \Article();
                $article->title = $title;
                $article->url = $url;
                $article->save();
            }

        }

        return $items;
    }

}