<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function home() {
        return view('home.home');
    }

    public function trips() {
        return view('trip.trips');
    }

    public function trip($id = null) {
        return view('trip.trip', ['id' => $id]);
    }

}
