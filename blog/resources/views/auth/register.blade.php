@extends('layouts.main')

@section('content')

<div class="row">

    <div class="col-lg-3">
      @include('includes.sidebar')
    </div>
    <!-- /.col-lg-3 -->

    <div class="col-lg-9">
      @if(session('success'))
        <div class="alert alert-success">{{session('success')}}</div>
      @endif
      <!-- /.card -->

      <div class="card card-outline-secondary my-4">
        <div class="card-header">
          Register
        </div>
        <form action="{{route('post.register')}}" method="POST">
          @csrf

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nom</label>
            <input type="text" class="form-control" name="name" value="{{old('name')}}">
            @error('name')
              <div class="error">{{$message}}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" value="{{old('email')}}">
            @error('email')
              <div class="error">{{$message}}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
            @error('password')
              <div class="error">{{$message}}</div>
            @enderror
          </div>
         {{--  <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div> --}}
          <button type="submit" class="btn btn-primary">Inscription</button>
        </form>
        </div>
      </div>
      <!-- /.card -->

    </div>
    <!-- /.col-lg-9 -->

  </div>
  
@endsection