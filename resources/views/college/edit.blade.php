@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Class</h1>
        <form class="form" action="{{route('college.update',$college)}}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT">
            <div class="form-group row">
                <label for="name" class="col-sm-1 col-form-label">Room:</label>
                <input type="text" class="form-control col-sm-6" name="name" id="name" required value="{{$college->name}}">
            </div>
            @error('name')
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-6 alert alert-danger">{{ $message }}</div>
                </div>
            @enderror
            <div class="form-group row">
                <button class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
@endsection