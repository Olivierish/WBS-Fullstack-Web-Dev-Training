@extends('layouts.app')
@section('title','User - OI Design')
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
                    <div class="card-header  fs-5">User</div>
                    <div class="card-body">
                    <ul class="list-group ">
                            <li class="list-group-item bg-dark text-light border-secondary border-opacity-25">
                                {{$dataUser->name}}
                            </li>
                            <li class="list-group-item bg-dark text-light border-secondary border-opacity-25">
                                My Motto: {{$dataUser->motto}}
                            </li>
                            <li class="list-group-item bg-dark text-light border-secondary border-opacity-25">
                                About me: {{$dataUser->ueber_mich}}
                            </li>
                            <li class="list-group-item bg-dark text-light border-secondary border-opacity-25">
                                Email: {{$dataUser->email}}
                            </li>
                    </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
        <div class="col-md-8">
            <a class="btn btn-warning mt-5" href="/users" >Zurück</a>
        </div>
    </div>
    </div>
</div>
@endsection
