@extends('layouts.app')

@section('content')
    <div class="container">
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        <h1 class="float-left">College</h1>
        <a href="{{route('college.create')}}" class="btn btn-success float-right">Add New College</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">SN</th>
                    <th scope="col">Name</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($college as $index=>$col)
                    <tr>
                        <td scope="row">{{$index+1}}</td>
                        <td>{{$col->name}}</td>
                        <td class="row">
                            <a href="{{route('college.edit',$col)}}" class="btn btn-warning col-sm-2">Edit</a>
                            <form action="{{route('college.destroy',$col)}}" class="col-sm-6" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td scope="row"><span class="">No College</span></td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection