@extends('layout')

@section('content')
    <h2>Smer - create</h2>
    <form role="form" method="post" action="/student/store">
        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
        <div class="form-group">
            <label for="ime">Ime:</label>
            <input class="form-control" id="ime" name="ime" value="">
        </div>
        <div class="form-group">
            <label for="prezime">Prezime:</label>
            <input class="form-control" id="prezime" name="prezime" value="">
        </div>
        <div class="form-group">
            <label for="brindeksa">Broj Indeksa:</label>
            <input class="form-control" id="brindeksa" name="brindeksa" value="">
        </div>
        <div class="form-group">
            <label for="jmbg">JMBG:</label>
            <input class="form-control" id="jmbg" name="jmbg" value="">
        </div>
        <div class="form-group">
            <label for="smers_id">Smer:</label>
            <select class="form-control" id="smers_id" name="smers_id">
                @foreach($smerovi as $item)
                <option value="{{$item->id}}">{{$item->naziv}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
@stop