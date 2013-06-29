<?php
/**
 * Author: Abu Ashraf Masnun
 * URL: http://masnun.me
 */


class Article extends Eloquent
{
    protected $table = 'articles';

    public static function exists($url)
    {
        $data = static::where('url', '=', $url)->get();
        return (bool)count($data);
    }
}