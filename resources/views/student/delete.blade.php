@extends('layout')

@section('content')
    <h2>Smer - delete</h2>
    <h3>Jeste li sigurni da zelite da obrisete {{ $smer->naziv }} ?</h3>

    <ul class="list-group">
        <li class="list-group-item">{{$smer->id}}</li>
        <li class="list-group-item list-group-item-info">{{$smer->naziv}}</li>
        <li class="list-group-item">{{$smer->created_at}}</li>
    </ul>

    <a class="btn btn-danger" href="/smer/remove/{{$smer->id}}">Brisi</a>
    <a class="btn btn-primary" href="/smer">Odustani</a>
@stop