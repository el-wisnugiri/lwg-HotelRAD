<?php

namespace App\Http\Controllers;

use App\FeedbackSubject;
use Illuminate\Http\Request;

class FeedbackSubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // show all items inside Feedback Subject Database
        $allFeedbackSubjects = FeedbackSubject::all();
        Return view('feedbackSubjects.index', [
            'feedbackSubjects' => $allFeedbackSubjects
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // show the create view
        Return view('feedbackSubjects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate the input for subject and description
        request()->validate(
            [
                'feedbackSubject' => ['required', 'max:25'],
                'feedbackDescription' => ['required', 'min:4', 'max:255'],
            ]
        );

        $feedbackSubjects = new FeedbackSubject();
        $feedbackSubjects->subject = $request->feedbackSubject;
        $feedbackSubjects->description = $request->feedbackDescription;
        $feedbackSubjects->save();

        return redirect('/feedbackSubjects')->with('success','Feedback Subjects created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // find the id of feedback subjects if its matches with the id that the user wants to show
        $feedbackSubjects = FeedbackSubject::find($id);
        Return view('feedbackSubjects.show', [
            'feedbackSubjects'=>$feedbackSubjects
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
        // find the id of feedback subjects if its matches with the id that the user wants to show
        $feedbackSubjects = FeedbackSubject::find($id);
        Return view('feedbackSubjects.update', [
            'feedbackSubjects'=>$feedbackSubjects
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
        // validate the input for subject and description
        request()->validate(
            [
                'feedbackSubject' => ['required', 'max:25'],
                'feedbackDescription' => ['required', 'min:4', 'max:255'],
            ]
        );
        $feedbackSubjects = FeedbackSubject::find($id);

        $feedbackSubjects->subject = request('feedbackName');
        $feedbackSubjects->description = request('feedbackDescription');
        $feedbackSubjects->save();

        return redirect('/feedbackSubjects/'.$id)->with('success','Feedback Subjects updated successfully.');
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
        $feedbackSubjects = FeedbackSubject::findOrFail($id);
        $feedbackSubjects->delete();
        Return redirect('/feedbackSubjects');
    }
}
