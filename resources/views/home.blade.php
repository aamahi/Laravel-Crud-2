@extends('index')
@section('content')
    <main role="main" class="container">
        <div class="jumbotron">
            <h2 class="text-center">All Madmaxian</h2>
            @if(session()->has('success'))
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        {{session('success')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
            @endif
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
                @foreach($allMember as $member)
                <tr>
                    <th>{{$member->name}}</th>
                    <td>{{$member->roll}}</td>
                    <td>{{$member->department}}</td>
                    <td>{{$member->home_dist}}</td>
                    <td>{{$member->email}}</td>
                    <td>
                        <a class="btn btn-success" href="{{route('show',$member->id)}}"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-info" href="{{route('update',$member->id)}}"><i class="fa fa-pencil-square-o"></i></a>
                        <a class="btn btn-danger" href="{{route('delete',$member->id)}}"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            {{$allMember->links()}}
        </div>
    </main>
@endsection
