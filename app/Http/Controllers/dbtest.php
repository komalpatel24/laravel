<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as FacadesDB;

class dbtest extends Controller
{
    function dbCheck()
    {
        return FacadesDB::select("select * from user");
    }
    // function tbl(){
    //     // $detail=facadeDB::select("select * from emp");;
    //     $detail=employee::all();
    //     return view("dashboard",["dis"=>$detail]);
    //     // return admin::all();
    // }
}
