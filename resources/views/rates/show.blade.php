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
        <div>
            <form action="/rates/{{$rates->id}}" method="post">
                @csrf
                @method('delete')

                <a href="{{url("/rates")}}" class="btn btn-info">
                    Back
                </a>

                <a href="{{url("/rates/{$rates->id}/edit")}}" class="btn btn-warning">
                    Edit
                </a>

                <button type="submit" class="btn btn-danger">
                    Delete
                </button>
            </form>
        </div>
    </div>
@endsection
