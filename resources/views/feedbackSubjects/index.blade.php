@extends('layouts.app')

@section('title')
    Feedback Subjects: Browse
@endsection

@section('content')
    <div class="container">
        <h1 class="text-center">Browse Feedback Subjects</h1>
        <div class="mt-3 mb-3">
            <a href="{{url("/feedbackSubjects/create")}}" class="btn btn-success">
                Create
            </a>
        </div>

        <table class="table">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Subject</th>
                <th scope="col">Description</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($feedbackSubjects as $feedback)
                <tr>
                    <td>{{$feedback->id}}</td>
                    <td>{{$feedback->subject}}</td>
                    <td>{{$feedback->description}}</td>
                    <td>
                        <form action="/feedbackSubjects/{{$feedback->id}}" method="post">
                            @csrf
                            @method('delete')

                            <a href="{{url("/feedbackSubjects/$feedback->id}")}}" class="btn btn-info">
                                Show
                            </a>

                            <a href="{{url("/feedbackSubjects/{$feedback->id}/edit")}}" class="btn btn-warning">
                                Edit
                            </a>

                            <button type="submit" class="btn btn-danger">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

