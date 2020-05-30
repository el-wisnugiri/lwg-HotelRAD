@extends('layouts.app')

@section('title')
    Room Statuses: Update
@endsection

@section('content')
    <div class="container">
        <h2>Room Statuses : Edit</h2>

        <form action="/roomStatuses/{{$roomStatus->id}}" method="post">
            @csrf
            @method('patch')

            <div class="form-group">
                <label for="roomStatusName">Name</label>
                <input type="text" id="roomStatusName" name="roomStatusName"
                       class="form-control" aria-describedby="roomStatusNameHelp"
                       placeholder="Enter Room Status Name here.."
                       value="{{$roomStatus->name}}">
                <small id="roomStatusNameHelp" class="form-text text-muted">
                    Status Name can not be longer than 16 character
                </small>
            </div>

            <div class="form-group">
                <label for="roomStatusDescription">Description</label>
                <input type="text" id="roomStatusDescription" name="roomStatusDescription"
                       class="form-control" aria-describedby="roomStatusDescriptionHelp"
                       placeholder="Enter Room Status Description here.."
                       value="{{$roomStatus->description}}">
                <small id="roomStatusDescriptionHelp" class="form-text text-muted">
                    Description must be at least 10 character long
                </small>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{url('/roomStatuses')}}" class="btn btn-danger">Cancel</a>
        </form>
    </div>
@endsection
