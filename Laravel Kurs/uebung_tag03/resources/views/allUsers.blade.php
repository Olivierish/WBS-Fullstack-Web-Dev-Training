@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="row">
            <h1 class="h1 display-1"> <span class="text-warning">All Users</span></h1>
        </div>
        <div class="row">
            <p>Check out some of my Users: </p>
            @foreach($daten AS $user)
                   <ul class ="list-group m-2 ">
                    <li class="list-group-item  bg-dark text-warning border-secondary border-opacity-25 fs-5">{{$user['name']}}</li>
                    <li class="list-group-item  bg-dark text-light border-secondary border-opacity-25"><span class="text-secondary"> </span>{{$user['vorname']}}</li>
                    <li class="list-group-item  bg-dark text-light border-secondary border-opacity-25"><span class="text-secondary"></span>{{$user['ort']}}</li>
                    </ul>

            @endforeach

        </div>
    </div>
</div>
@endsection
