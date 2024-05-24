<?php

use App\Models\RtData;

    function sName($page){
        $Store = RtData::find($page);
        return $Store;
    }

    function sNav($page){
        $Store = RtData::find($page);
        return $Store;
    }
