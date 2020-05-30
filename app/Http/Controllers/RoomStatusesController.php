<?php

namespace App\Http\Controllers;

use App\RoomStatuses;
use Illuminate\Http\Request;

class RoomStatusesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // show all data from room statuses
        $allRoomStatuses = RoomStatuses::all();
        Return view('roomStatuses.index', [
            'roomStatuses'=>$allRoomStatuses
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // show the create view tabs
        Return view('roomStatuses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate the input for name and description
        request()->validate(
            [
                'roomStatusName' => ['required', 'max:16'],
                'roomStatusDescription' => ['required', 'min:4', 'max:255'],
            ]
        );

        $roomStatuses = new RoomStatuses();
        $roomStatuses->name = $request->roomStatusName;
        $roomStatuses->description = $request->roomStatusDescription;
        $roomStatuses->save();

        return redirect('/roomStatuses')->with('success','Room Statuses created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // find the id of room Statuses if its matches with the id that the user wants to show
        $roomStatuses = RoomStatuses::find($id);
        Return view('roomStatuses.show', [
            'roomStatus'=>$roomStatuses
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
        // find the id of room Statuses if its matches with the id that the user wants to update
        $roomStatuses = RoomStatuses::find($id);
        Return view('roomStatuses.update', [
            'roomStatus'=>$roomStatuses
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
        // validate the input for name and description
        request()->validate(
            [
                'roomStatusName' => ['required', 'max:16'],
                'roomStatusDescription' => ['required', 'min:4', 'max:255'],
            ]
        );
        $roomStatuses = RoomStatuses::find($id);

        $roomStatuses->name = request('roomStatusName');
        $roomStatuses->description = request('roomStatusDescription');
        $roomStatuses->save();

        return redirect('/roomStatuses/'.$id)->with('success','roomStatuses updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete
        $roomStatuses = RoomStatuses::findOrFail($id);
        $roomStatuses->delete();
        Return redirect('/roomStatuses');
    }
}
