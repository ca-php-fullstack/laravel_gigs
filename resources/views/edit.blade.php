@extends('layoute')
@section('content')

<h1>Edit gig</h1>
<form action="/gigs/update" method="POST">
@csrf
    <input type="hidden" name="id" value="{{$gig['id']}}">
    <input type="text" name="name" value="{{$gig['name']}}"> 
    <input type="text" name="band_name" value="{{$gig['band_name']}}">
    <input type="text" name="genre" value="{{$gig['genre']}}">
    <button type="submit">Update</button>


</form>
@endsection