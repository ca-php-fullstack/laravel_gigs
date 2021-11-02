<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gig;
use App\Models\User;



class GigController extends Controller
{
    public function index() {
        
        $gigs = Gig::all();

        return view('index', ['gigs'=>$gigs]);
    }

    public function create(){
        return view('create');
    }

    public function store(){

        //validation

        $validate = request()->validate([
            'name' => 'required',
            'band_name' => 'max:50',
            'genre' => 'required'
        ]);
         
        // save to database

        Gig::create(['name'=>request('name'), 'band_name'=>request('band_name'), 'artist_id'=>auth()->user()->id, 'genre'=>request('genre')]);

        //redirect
        return redirect()->route('gigs');
    }

    public function edit($id){
        
        $gig = User::findOrFail($id);
        return view('/gigs/edit', ['gig'=>$gig]);
    }

    public function update(Request $request){
        
        $gig = User::find($request->id);
        $gig->name=$request->name;
        $gig->band_name=$request->band_name;
        $gig->genre=$request->genre;
        $gig->save();

        return redirect('/gigs');
    }
}
