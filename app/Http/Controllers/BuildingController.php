<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuildingController extends Controller
{
    public function index()
    {
        return "建物です";
    }
     public function post($room)
    {
         return '部屋番号は'.$room.'です';
    }
    }
  

