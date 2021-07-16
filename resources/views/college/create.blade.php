@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add New College</h1>
        <form class="form" action="{{route('college.store')}}" method="POST">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="name" class="col-sm-1 col-form-label">Name:</label>
                <input type="text" class="form-control col-sm-6" name="name" id="name" required>
            </div>
            @error('name')
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-6 alert alert-danger">{{ $message }}</div>
                </div>
            @enderror
            <div class="form-group row">
                <button class="btn btn-primary">Add College</button>
            </div>
        </form>
    </div>
@endsection