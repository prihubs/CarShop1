<?php

use App\Models\RtData;
use App\Models\Cars;

    function sName($page){
        $Store = RtData::find($page);
        return $Store;
    }

    function sNav($page){
        $Store = RtData::find($page);
        return $Store;
    }

    function AllCars(){
        $Cars = Cars::AllCars();
        return $Cars;
    }

    function singleCar($id){
        $Cars = Cars::Car($id);

        return $Cars;
    }
