@extends('layouts.app')

@section('content')
    <div class="container">
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        <h1 class="float-left">Classes</h1>
        <a href="{{route('classroom.create')}}" class="btn btn-success float-right">Add New Class</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">SN</th>
                    <th scope="col">Room</th>
                    <th scope="col">Building</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($classroom as $index=>$class)
                    <tr>
                        <td scope="row">{{$index+1}}</td>
                        <td>{{$class->room}}</td>
                        <td>{{$class->building->name}}</td>
                        <td class="row">
                            <a href="{{route('classroom.edit',$class)}}" class="btn btn-warning col-sm-2">Edit</a>
                            <form action="{{route('classroom.destroy',$class)}}" class="col-sm-6" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td scope="row"><span class="">No Classes</span></td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection