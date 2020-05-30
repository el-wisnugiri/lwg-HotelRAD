@extends('layouts.app')

@section('title')
    Rates: Browse
@endsection

@section('content')
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Rate</th>
                <th scope="col">Description</th>
            </tr>
            </thead>
            <tbody>
            @foreach($rateTable as $rate)
                <tr>
                    <td>{{$rate->id}}</td>
                    <td>{{$rate->rate}}</td>
                    <td>{{$rate->description}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
