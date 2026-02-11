<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function index()
    {
        $data = [
            "name" => "Manarbek Assylbek",
            "course" => "Backend Framework. Laravel",
            "status" => "Laravel route works yeahhh!!!!!"
        ];

        return view('info', compact('data'));
    }
}
