@extends('layouts.app')

@section('title','Alle Beiträge')

@section('content')
<div class="container">
    <!-- <div class="row justify-content-center"> -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Alle Beiträge</div>
                <div class="card-body">
                   <ul class="list-group">
                        @foreach($beitraege as $beitrag)
                        <li class="list-group-item">
                            {{$beitrag['name']}}
                            <a href="/post/{{$beitrag->id}}" class="ms-2 btn btn-info btn-sm">Detailansicht</a>
                            <a href="/post/{{$beitrag->id}}/edit" class="ms-2 btn btn-success btn-sm">Bearbeiten</a>
                            <form action="/post/{{$beitrag->id}}" method="post" class="d-inline-block ml-2" onclick="return confirm('Wollen Sie wirklich den Datensatz löschen?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" value="löschen" class="btn btn-outline-danger btn-sm">
                                <i class="fa fa-trash"></i> löschen
                                </button>
                            </form>
                            <div class="float-end">
                                @if( isset($beitrag->created_at)) 
                                    {{$beitrag->created_at->diffForHumans() }}
                                @else
                                    kein Datum
                                @endif  
                            </div>
                        </li>
                        @endforeach
                   </ul>
                   <a href="post/create" class="btn btn-success mt-2">
                        Neuen Beitrag anlegen
                   </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
