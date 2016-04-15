@extends('layout')

@section('content')
    <h2>Smer - create</h2>
    <form role="form" method="post" action="/smer/store">
        <div class="form-group">
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
            <label for="naziv">Naziv:</label>
            <input class="form-control" id="naziv" name="naziv" value="">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
@stop