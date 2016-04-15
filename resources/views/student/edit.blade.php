@extends('layout')

@section('content')
    <h2>Smer - edit</h2>
    <form role="form" method="post" action="/smer/update/{{ $smer->id }}">
        <div class="form-group">
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
            <label for="naziv">Naziv:</label>
            <input type="hidden" id="id" name="id" value="{{ $smer->id }}">
            <input class="form-control" id="naziv" name="naziv" value="{{ $smer->naziv }}">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
@stop