@extends('layout')

@section('content')
<div class="d-flex justify-content-center">
    <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Create a gig</h4>

        <form class="needs-validation" action="/gigs" method="POST" novalidate >
            @csrf
            <div class="row g-3">
                <div class="col-sm-6">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="" value="" required>
                <div class="invalid-feedback">
                    Valid first name is required.
                </div>
                </div>

                <div class="col-sm-6">
                <label for="band_name" class="form-label">Band name</label>
                <input type="text" class="form-control" id="band_name" name="band_name" placeholder="" value="" required>
                <div class="invalid-feedback">
                    Valid last name is required.
                </div>
                </div>

                <div class="col-sm-12">
                <label for="genre" class="form-label">Genre</label>
                <select class="form-select" id="genre" name="genre" required>
                    <option value="">Choose...</option>
                    <option value="1">Genre 1</option>
                    <option value="2">Genre 2</option>
                    <option value="3">Genre 3</option>
                </select>
                <div class="invalid-feedback">
                    Please select a valid genere.
                </div>
                </div>

                <hr class="my-4">
                <button class="w-100 btn btn-primary btn-lg" type="submit">Add a gig</button>
            </div>
            </div>
        </form>
    </div>
</div>

@endsection