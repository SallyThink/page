<?php

namespace App\Classes;

class Menu
{
    private static $items = ['page', 'content', 'general settings'];

    public static function getItems()
    {
            return self::$items;
    }
}