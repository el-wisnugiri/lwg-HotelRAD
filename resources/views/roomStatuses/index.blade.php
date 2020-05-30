@extends('layouts.app')

@section('title')
    Room Statuses: Browse
@endsection

@section('content')
    <div class="container">
        <div class="container">
            <h1 class="text-center">Browse Room Statuses </h1>
            <div class="mt-3 mb-3">
                <a href="{{url("/roomStatuses/create")}}" class="btn btn-success">
                    Create
                </a>
            </div>

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($roomStatuses as $roomStatus)
                    <tr>
                        <td>{{$roomStatus->id}}</td>
                        <td>{{$roomStatus->name}}</td>
                        <td>{{$roomStatus->description}}</td>
                        <td>
                            <form action="/roomStatuses/{{$roomStatus->id}}" method="post">
                                @csrf
                                @method('delete')

                                <a href="{{url("/roomStatuses/{{$roomStatus->id}")}}" class="btn btn-info">
                                    Show
                                </a>

                                <a href="{{url("/roomStatuses/{{$roomStatus->id}/edit")}}" class="btn btn-warning">
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
