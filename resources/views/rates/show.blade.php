@extends('layouts.app')

@section('title')
    Rates: Show
@endsection

@section('content')
    <div class="container">
        <h2>Room Rates : Show</h2>
        <table class="table">
            <tbody>
                <tr>
                    <th scope="col" class="text-primary">Id</th>
                    <td>{{$rates->id}}</td>
                <tr>
                <tr>
                    <th scope="col" class="text-primary">Rate</th>
                    <td>{{$rates->rate}}</td>
                <tr>
                <tr>
                    <th scope="col" class="text-primary">Description</th>
                    <td>{{$rates->description}}</td>
                </tr>
                <tr>
                    <th scope="col" class="text-primary">Created</th>
                    <td>{{$rates->created_at}}</td>
                </tr>
                <tr>
                    <th scope="col" class="text-primary">Updated</th>
                    <td>{{$rates->updated_at}}</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
