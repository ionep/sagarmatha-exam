@extends('layouts.app')

@section('content')
    <div class="container">
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        <h1 class="float-left">Buildings</h1>
        <a href="{{route('building.create')}}" class="btn btn-success float-right">Add New Building</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">SN</th>
                    <th scope="col">Name</th>
                    <th scope="col">Block</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($buildings as $index=>$building)
                    <tr>
                        <td scope="row">{{$index+1}}</td>
                        <td>{{$building->name}}</td>
                        <td>{{$building->block}}</td>
                        <td class="row">
                            <a href="{{route('building.edit',$building)}}" class="btn btn-warning col-sm-2">Edit</a>
                            <form action="{{route('building.destroy',$building)}}" class="col-sm-6" method="POST">
                                <input type="hidden" name="_method" value="DELETE">
                                {{ csrf_field() }}
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td scope="row"><span class="">No Buildings</span></td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection