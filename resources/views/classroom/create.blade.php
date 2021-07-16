@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add New Class</h1>
        <form class="form" action="{{route('classroom.store')}}" method="POST">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="room" class="col-sm-1 col-form-label">Room:</label>
                <input type="text" class="form-control col-sm-6" name="room" id="room" required>
            </div>
            @error('room')
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-6 alert alert-danger">{{ $message }}</div>
                </div>
            @enderror
            <div class="form-group row">
                <label for="building" class="col-sm-1 col-form-label">Building:</label>
                <select class="form-control col-sm-6" name="building" id="building" required {{count($buildings)==0?"disabled":null}}>
                    @forelse ($buildings as $building)
                        <option value="{{$building->id}}">{{$building->name}}</option>
                    @empty
                        <option>No Building Added</option>
                    @endforelse
                </select>
            </div>
            @error('building')
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-6 alert alert-danger">{{ $message }}</div>
                </div>
            @enderror
            <div class="form-group row">
                <button class="btn btn-primary">Add Class</button>
            </div>
        </form>
    </div>
@endsection