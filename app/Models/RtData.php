<?php

namespace App\Models;
use Illuminate\Support\Arr;

class RtData
{
    public static function Dir(): array{
        return [
                    [
                        'Name' => 'type',
                        'Title' => 'CarShop',
                        'Msg' => 'Coming Soon'
                    ],

                    [
                        'Name' => 'Nav',
                        '1' => 'Home',
                        '2' => 'About',
                        '3' => 'Cars',
                        '4' => 'Car',
                        '5' => 'Contact'
                    ]
                ];
    }

    public static function find(string $page): array{
        $data = Arr::first(static::Dir(), fn($datas) => $datas["Name"] == $page);
        return $data;
    }
    public static function findShop($shop): array{
        $data = Arr::first(static::Dir(), fn($datas) => $datas["Name"] == $shop);
        return $data;
    }

}
