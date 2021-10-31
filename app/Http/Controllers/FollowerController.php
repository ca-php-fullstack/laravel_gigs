<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Follower;

class FollowerController extends Controller
{
    public function store(){
        Follower::create(['user_id'=>request('artist_id'), 'follower_id'=>auth()->user()->id]);

        //redirect
        return redirect()->route('followers');
    }
}
