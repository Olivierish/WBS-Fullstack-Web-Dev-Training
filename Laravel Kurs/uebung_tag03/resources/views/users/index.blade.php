@extends('layouts.app')
@section('title','All Users - OI Design')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="row">
            <h1 class="h1 display-1"> <span class="text-warning">Users</span></h1>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card bg-dark text-warning my-2 border-secondary border-opacity-25">
                    <div class="card-header  fs-5">Check out some of my Users: </div>
                    <div class="card-body">
                    <ul class="list-group ">
                            @foreach($daten as $user)
                            <li class="list-group-item bg-dark text-light border-secondary border-opacity-25">
                                {{$user['name']}}
                                <a href="/users/{{$user->id}}" class="ms-2 btn btn-secondary btn-sm">Detailansicht</a>
                            </li>
                            @endforeach
                    </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a class="btn btn-warning mt-2" href="users/create" >Add a new user</a>
            </div>
        </div>
    </div>
</div>
@endsection
