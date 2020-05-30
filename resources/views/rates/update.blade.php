@extends('layouts.app')

@section('title')
    Rates: Update
@endsection

@section('content')
    <div class="container">
        <h2>Room Rates : Edit</h2>

        <form action="/rates/{{$rates->id}}" method="post">
            @csrf
            @method('patch')

            <div class="form-group">
                <label for="roomRate">Rate</label>
                <input type="number" id="roomRate" name="roomRate"
                       class="form-control" aria-describedby="roomRateHelp"
                       placeholder="Enter Rates here.."
                       value="{{$rates->rate}}">
                <small id="roomRateHelp" class="form-text text-muted">
                    This field must be a number
                </small>
            </div>

            <div class="form-group">
                <label for="roomRate">Description</label>
                <input type="text" id="roomRateDescription" name="roomRateDescription"
                       class="form-control" aria-describedby="roomRateDescriptionHelp"
                       placeholder="Enter Description here.."
                       value="{{$rates->description}}">
                <small id="roomRateHelp" class="form-text text-muted">
                    Description must be at least 10 character long
                </small>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{url('/rates')}}" class="btn btn-danger">Cancel</a>
        </form>
    </div>
@endsection
