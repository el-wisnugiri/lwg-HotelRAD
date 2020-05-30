@extends('layouts.app')

@section('title')
    Room Statuses: Show
@endsection

@section('content')
    <div class="container">
        <h2>Room Statuses : Show</h2>
        <table class="table">
            <tbody>
            <tr>
                <th scope="col" class="text-primary">Id</th>
                <td>{{$roomStatus->id}}</td>
            <tr>
            <tr>
                <th scope="col" class="text-primary">Subject</th>
                <td>{{$roomStatus->name}}</td>
            <tr>
            <tr>
                <th scope="col" class="text-primary">Description</th>
                <td>{{$roomStatus->description}}</td>
            </tr>
            <tr>
                <th scope="col" class="text-primary">Created</th>
                <td>{{$roomStatus->created_at}}</td>
            </tr>
            <tr>
                <th scope="col" class="text-primary">Updated</th>
                <td>{{$roomStatus->updated_at}}</td>
            </tr>
            </tbody>
        </table>
        <div>
            <form action="/roomStatuses/{{$roomStatus->id}}" method="post">
                @csrf
                @method('delete')

                <a href="{{url("/roomStatuses")}}" class="btn btn-info">
                    Back
                </a>

                <a href="{{url("/roomStatuses/{$roomStatus->id}/edit")}}" class="btn btn-warning">
                    Edit
                </a>

                <button type="submit" class="btn btn-danger">
                    Delete
                </button>
            </form>
        </div>
    </div>
@endsection
