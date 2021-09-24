<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StaticController extends Controller
{
    public function home() {
        $topPlaceTripList = Trip::orderBy('topPlace', 'desc')->get();

        $topPlaceFourthList = [];
        $i = 0;
            foreach ($topPlaceTripList as $topPlaceTrip) {
                if($i < 4) {
                    $topPlaceFourthList[] = $topPlaceTrip;
                    $i++;
                } 
            }
        
        return view('home.home', ['tripList' => $topPlaceFourthList]);
    }

    public function trips() {
        $topPlaceTripList = Trip::orderBy('topPlace', 'desc')->get();

        $topPlaceTenList = [];
        $i = 0;
            foreach ($topPlaceTripList as $topPlaceTrip) {
                if($i < 10) {
                    $topPlaceTenList[] = $topPlaceTrip;
                    $i++;
                } 
            }
        
        return view('trip.trips', ['tripList' => $topPlaceTenList]);
    }

    public function trip($id) {
        $trip = Trip::find($id);
        $dtFormat = new \Datetime($trip->date);
        $formatedDate = $dtFormat->format('d M Y');
        $trip->date = $formatedDate;
        return view('trip.trip', ['trip' => $trip]);
    }

}
