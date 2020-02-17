@extends('index')
@section('content')
    <main role="main" class="container">
        <div class="jumbotron">
            <h3 class="text-center">Image Upload System</h3>
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{$error}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endforeach
            @endif
            @if(session()->has('upload'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{session('upload')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <form action="image" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="image">Upload a Image</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
                <button type="submit" class="btn btn-primary">Upload</button>
            </form>
        </div>
    </main>
@endsection
