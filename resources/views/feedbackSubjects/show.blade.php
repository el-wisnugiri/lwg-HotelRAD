@extends('layouts.app')

@section('title')
    Feedback Subjects: Show
@endsection

@section('content')
    <div class="container">
        <h2>Feedback Subjects : Show</h2>
        <table class="table">
            <tbody>
            <tr>
                <th scope="col" class="text-primary">Id</th>
                <td>{{$feedbackSubjects->id}}</td>
            <tr>
            <tr>
                <th scope="col" class="text-primary">Subject</th>
                <td>{{$feedbackSubjects->subject}}</td>
            <tr>
            <tr>
                <th scope="col" class="text-primary">Description</th>
                <td>{{$feedbackSubjects->description}}</td>
            </tr>
            <tr>
                <th scope="col" class="text-primary">Created</th>
                <td>{{$feedbackSubjects->created_at}}</td>
            </tr>
            <tr>
                <th scope="col" class="text-primary">Updated</th>
                <td>{{$feedbackSubjects->updated_at}}</td>
            </tr>
            </tbody>
        </table>
        <div>
            <form action="/feedbackSubjects/{{$feedbackSubjects->id}}" method="post">
                @csrf
                @method('delete')

                <a href="{{url("/feedbackSubjects")}}" class="btn btn-info">
                    Back
                </a>

                <a href="{{url("/feedbackSubjects/{$feedbackSubjects->id}/edit")}}" class="btn btn-warning">
                    Edit
                </a>

                <button type="submit" class="btn btn-danger">
                    Delete
                </button>
            </form>
        </div>
    </div>
@endsection
