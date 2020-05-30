<?php

namespace App\Http\Controllers;

use App\Rate;
use Illuminate\Http\Request;

class RatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //variable to store all existing the rates
        $allRates = Rate::all();
        Return view('rates.index', [
            'rateTable' => $allRates
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Return view('rates.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(
            [
                'roomRate' => 'required',
                'roomRateDescription' => ['required', 'min:4', 'max:128'],
            ]
        );

        $roomRates = new Rate();
        $roomRates->rate = $request->roomRate;
        $roomRates->description = $request->roomRateDescription;
        $roomRates->save();

        return redirect('/rates')->with('success','Rates created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // find the id of rates if its matches with the id that the user wants to show
        $roomRates = Rate::find($id);
        Return view('rates.show', [
            'rates'=>$roomRates
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // find the id of rates if its matches with the id that the user wants to edit
        $roomRates = Rate::find($id);
        Return view('rates.update',[
            'rates'=>$roomRates
        ]);
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
        request()->validate(
            [
                'roomRate' => ['required'],
                'roomRateDescription' => ['required', 'min:4', 'max:128'],
            ]
        );
        $roomRates = Rate::find($id);

        $roomRates->rate = request('roomRate');
        $roomRates->description = request('roomRateDescription');
        $roomRates->save();

        return redirect('/rates/'.$id)->with('success','Rates updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Return view('rates.destroy');
    }
}
