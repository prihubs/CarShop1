<?php

use App\Models\RtData;
use App\Models\Cars;

    function sName($page){
        $Store = RtData::find($page);
        return $Store;
    }

    function sNav($shop){
        $Store = RtData::findShop($shop);
        return $Store;
    }

    function AllCars(){
        $Cars = Cars::All();
        return $Cars;
    }

    function singleCar($id){
        $Car = Cars::Car($id);

        // foreach ($Car as $Cars){
        //     return [ $Cars ];
        // }
        return $Car;
    }
