<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tripList = Trip::all();
        return view("admin.index", ['tripList' => $tripList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Trip::create([
            'status' => $request->status,
            'destination' => $request->destination,
            'description' => $request->description,
            'date' => $request->date,
            'cost' => $request->cost,
            'organizer' => $request->organizer,
            'rating' => $request->rating,
            'picture' => $request->picture,
        ]);

        return redirect('admin/trips');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $trip = Trip::find($id);
        return view("admin.show", ['trip' => $trip]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $trip = Trip::find($id);
        return view("admin.edit", ['trip' => $trip]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $trip = Trip::find($id);
        $trip->status = $request->status;
        $trip->destination = $request->destination;
        $trip->description = $request->description;
        $trip->date = $request->date;
        $trip->cost = $request->cost;
        $trip->organizer = $request->organizer;
        $trip->rating = $request->rating;
        $trip->picture = $request->picture;

        $trip->save();

        return redirect('admin/trips');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trip = Trip::find($id);
        $trip->delete();

        return redirect('admin/trips');
    }
}
