@extends('layout')

@section('content')
    <h2>Studenti</h2>
    <a class="btn btn-primary" href="/student/create">Napravi novi</a>
    <hr>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Ime</th>
            <th>Prezime</th>
            <th>Smer</th>
            <th>Izmeni</th>
        </tr>
        </thead>
        <tbody>

        @foreach($studentNiz as $item)
            <tr>
                <td>{{ $item->ime }}</td>
                <td>{{ $item->prezime }}</td>
                <td>{{ $item->smer->naziv }}</td>
                <td>
                    <a class="btn btn-warning" href="{{ url("/smer/edit/{$item->id}") }}">Izmeni</a>
                    <a class="btn btn-danger" href="{{ url("/smer/delete/{$item->id}") }}">Brisi</a>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
@stop