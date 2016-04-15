@extends('layout')

@section('content')
    <h2>Smerovi</h2>
    <a class="btn btn-primary" href="/smer/create">Napravi novi</a>
    <hr>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Naziv</th>
            <th>Datum</th>
            <th>Izmeni</th>
        </tr>
        </thead>
        <tbody>

        @foreach($smerNiz as $item)
            <tr>
                <td>{{ $item->naziv }}</td>
                <td>{{ $item->created_at }}</td>
                <td>
                    <a class="btn btn-warning" href="{{ url("/smer/edit/{$item->id}") }}">Izmeni</a>
                    <a class="btn btn-danger" href="{{ url("/smer/delete/{$item->id}") }}">Brisi</a>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
@stop