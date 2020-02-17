@extends('index')
@section('content')
    <main role="main" class="container">
        <div class="jumbotron">
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
            <form action="addmember" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Enter Your Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" placeholder="Enter Your Name">
                </div>
                <div class="form-group">
                    <label for="email">Enter Your Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" placeholder="Enter Your Email">
                </div>
                <div class="form-group">
                    <label for="department">Select Your Department</label>
                    <select class="form-control" name="department" value="{{old('department')}}" id="department">
                        <option selected disabled>Select Department</option>
                        <option value="Computer">Computer</option>
                        <option value="Electronics">Electronics</option>
                        <option value="Civil">Civil</option>
                        <option value="Architecture and interior design ">Architecture and interior design </option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="home_dist">Enter Your Home District</label>
                    <input type="text" class="form-control" id="home_dist" name="home_dist" value="{{old('home_dist')}}" placeholder="Enter Your Home Dist">
                </div>
                <div class="form-group">
                    <label for="home_dist">Enter Your Roll</label>
                    <input type="number" class="form-control" id="home_dist" name="roll" value="{{old('roll')}}" placeholder="Enter Your Roll">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </main>
@endsection
