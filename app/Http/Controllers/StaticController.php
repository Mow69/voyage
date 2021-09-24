<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function home($id = 1) {
        return view('home.home', ['id' => $id]);
    }

    public function trips($id = 1) {
        return view('trip.trips', ['id' => $id]);
    }

    public function trip($id = 1) {
        return view('trip.trip', ['id' => $id]);
    }

}
