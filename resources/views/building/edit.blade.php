@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Building</h1>
        <form class="form" action="{{route('building.update',$building)}}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT">
            <div class="form-group row">
                <label for="name" class="col-sm-1 col-form-label">Name:</label>
                <input type="text" class="form-control col-sm-6" name="name" id="name" required value="{{$building->name}}">
            </div>
            @error('name')
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-6 alert alert-danger">{{ $message }}</div>
                </div>
            @enderror
            <div class="form-group row">
                <label for="block" class="col-sm-1 col-form-label">Block:</label>
                <input type="text" class="form-control col-sm-6" name="block" id="block" required value="{{$building->block}}">
            </div>
            @error('block')
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