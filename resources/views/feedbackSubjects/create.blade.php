@extends('layouts.app')

@section('title')
    Feedback Subjects: Create
@endsection

@section('content')
    <div class="container">
        <h2>Feedback Subjects : Create</h2>

        <form action="/feedbackSubjects" method="post">
            @csrf
            @method('post')

            <div class="form-group">
                <label for="feedbackSubject">Subject</label>
                <input type="text" id="feedbackSubject" name="feedbackSubject"
                       class="form-control" aria-describedby="feedbackSubjectHelp"
                       placeholder="Enter Feedback Subject here.."
                       value="">
                <small id="feedbackSubjectHelp" class="form-text text-muted">
                    Subject can not be longer than 25 character
                </small>
            </div>

            <div class="form-group">
                <label for="feedbackDescription">Description</label>
                <input type="text" id="feedbackDescription" name="feedbackDescription"
                       class="form-control" aria-describedby="feedbackDescriptionHelp"
                       placeholder="Enter Feedback Description here.."
                       value="">
                <small id="feedbackDescriptionHelp" class="form-text text-muted">
                    Description must be at least 10 character long
                </small>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{url('/feedbackSubjects')}}" class="btn btn-danger">Cancel</a>
        </form>
    </div>
@endsection
