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

class Cars
{
    public static function Motor(): array{
        return [
            [
                "id" => 1,
                "Name" => "Lambogini",
                "Type" => "Smart Car",
                "Color" => "Red",
                "Model" => "Rvx",
                "Year" => "3030",
                "Status" => "Available"
            ],

            [
                "id" => 2,
                "Name" => "Hyunder",
                "Type" => "Smart Car",
                "Color" => "Blue",
                "Model" => "Rvx",
                "Year" => "3232",
                "Status" => "Available"
            ],

            [
                "id" => 3,
                "Name" => "Volkswagen",
                "Type" => "Smart Car",
                "Color" => "Green",
                "Model" => "Rvx",
                "Year" => "3012",
                "Status" => "Available"
            ],

            [
                "id" => 4,
                "Name" => "Cambry",
                "Type" => "Big daddy",
                "Color" => "White",
                "Model" => "Rvx",
                "Year" => "2099",
                "Status" => "Unavailable"
            ]
        ];
    }

    public static function AllCars(): array
    {
        $Cars = static::Motor();

        return $Cars;
    }

    public static function Car(int $id): array
    {
        $Car = Arr::first(static::AllCars(), fn($Cars) => $Cars['id'] == $id);

        return $Car;
    }
}
