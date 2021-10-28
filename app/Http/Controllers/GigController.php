<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gig;

class GigController extends Controller
{
    public function create( ){
        return view('create');
    }

    public function store(){
        // validation
        // save to database
        // redirect

        // validation
        $validate = request()->validate([
            'name' => 'required',
            'band_name' => 'max:50',
            'genre' => 'required'
        ]);

        // save to db
        Gig::create([
            'name' => request('name'),
            'band_name' => request('band_name'),
            'artist_id' => auth()->user()->id,
            'genre' => request('genre')
        ]);

        // redirect
        return redirect(route('gigs'));

    }
}
