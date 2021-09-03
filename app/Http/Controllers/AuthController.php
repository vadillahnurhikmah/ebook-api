<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return
        [
            "NIS" => 3103119189,
            "Name" => "Vadillah Nur Hikmah",
            "Phone" => 6281542733380,
            "Class" => "XII RPL 6"
        ];
    }

}