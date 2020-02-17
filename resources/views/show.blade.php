@extends('index')
@section('content')
    <main role="main" class="container">
        <div class="jumbotron">
            <h2 class="text-center">{{$show->name}}</h2>
            <hr>
            <table class="table table-dark table-bordered table-hover">
                <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Roll</th>
                    <th scope="col">Department</th>
                    <th scope="col">Home District</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th>{{$show->name}}</th>
                    <td>{{$show->roll}}</td>
                    <td>{{$show->department}}</td>
                    <td>{{$show->home_dist}}</td>
                    <td>{{$show->email}}</td>
                    <td>
                        <a class="btn btn-info" href="{{route('home')}}"><i class="fa fa-arrow-left"> </i> Back</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </main>
@endsection
