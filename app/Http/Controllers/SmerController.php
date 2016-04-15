<?php

namespace App\Http\Controllers;

use App\Smer;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class SmerController extends Controller
{
    public function show()
    {
        $smerNiz = Smer::all();
        return view('smer.show')->with("smerNiz", $smerNiz);
    }

    public function create()
    {
        return view('smer.create');
    }

    public function store(Request $request)
    {
        $smer = new Smer();
        $smer->naziv = $request->naziv;
        $smer->save();

        return redirect("/smer");
    }

    public function delete(Smer $smer)
    {
        return view('smer.delete')->with("smer",$smer);
    }

    public function remove(Smer $smer)
    {
        $smer->delete();

        return redirect("/smer");
    }

    public function edit($id)
    {
        $smer = Smer::find($id);
        return view('smer.edit')->with("smer", $smer);
    }

    public function update(Smer $smer)
    {
        $smer->update(request()->all());
        return redirect("/smer");
    }
}
