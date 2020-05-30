@extends('layouts.app')

@section('title')
    Rates: Update
@endsection

@section('content')
    <div class="container">
        <h2>Feedback Subjects : Edit</h2>

        <form action="/feedbackSubjects/{{$feedbackSubjects->id}}" method="post">
            @csrf
            @method('patch')

            <div class="form-group">
                <label for="feedbackName">Name</label>
                <input type="text" id="feedbackName" name="feedbackName"
                       class="form-control" aria-describedby="feedbackNameHelp"
                       placeholder="Enter Feedback Name here.."
                       value="{{$feedbackSubjects->name}}">
                <small id="feedbackNameHelp" class="form-text text-muted">
                    Name can not be longer than 25 character
                </small>
            </div>

            <div class="form-group">
                <label for="feedbackDescription">Description</label>
                <input type="text" id="feedbackDescription" name="feedbackDescription"
                       class="form-control" aria-describedby="feedbackDescriptionHelp"
                       placeholder="Enter Feedback Description here.."
                       value="{{$feedbackSubjects->description}}">
                <small id="feedbackDescriptionHelp" class="form-text text-muted">
                    Description must be at least 10 character long
                </small>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{url('/feedbackSubjects')}}" class="btn btn-danger">Cancel</a>
        </form>
    </div>
@endsection
