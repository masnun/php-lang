<?php
/**
 * Author: Abu Ashraf Masnun
 * URL: http://masnun.me
 */

namespace PHPLang\DataSource;

class Github
{
    const API_URL = "https://api.github.com/legacy/repos/search/php";
    const SOURCE = "Github";

    public function getItems()
    {

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_URL, self::API_URL);
        curl_setopt($ch, CURLOPT_REFERER, self::API_URL);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $result = curl_exec($ch);
        curl_close($ch);

        $data = json_decode($result, TRUE);

        var_dump($data);
    }
}