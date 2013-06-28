<?php
/**
 * Author: Abu Ashraf Masnun
 * URL: http://masnun.me
 */


class IndexController extends BaseController
{
    public function getIndex()
    {
       return View::make('index.index');
    }
}