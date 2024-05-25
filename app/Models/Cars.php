<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Cars extends Model
{
    protected $table = "carshop";
    protected $fillable = ['Name', 'Type', 'Color', 'Model', 'Cost', 'Year', 'Status'];


    public static function Car(int $id)
    {
        $Car = Arr::first(static::All(), fn($Cars) => $Cars['id'] == $id);

        return $Car;
    }
}
