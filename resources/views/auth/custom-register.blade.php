@extends('layouts.app0')
@section('title', 'Register')
@section('content')

<div class="loginColumns animated fadeInDown">
        <div class="row">

            <div class="col-md-6">
                <h3 class="font-bold">Welcome to Rural Communication</h3>

                <p>
                    Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
                </p>

                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                </p>

                <p>
                    When an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>

                <p>
                    <small>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</small>
                </p>

            </div>
            <div class="col-md-6">
                <div class="ibox-content">
                  <div>
              <h2 class="text-center">Register</h2>
              <form class="m-t" role="form" action="{{ route('register') }}" method="post">
                @csrf
                  <div class="form-group">
                      <input type="text" class="form-control" name="name" placeholder="Name" autocomplete="off" value="{{ old('name') }}">
                  </div>
                  @error('name')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <div class="form-group">
                      <input type="email" class="form-control" name="email" placeholder="Email" autocomplete="off" value="{{ old('email') }}">
                  </div>
                  @error('email')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <div class="form-group">
                      <input type="password" class="form-control" name="password" placeholder="Password" autocomplete="off">
                  </div>
                  @error('password')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <div class="form-group">
                      <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" autocomplete="off">
                  </div>
                  @error('password_confirmation')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <button type="submit" class="btn btn-primary block full-width m-b">Register</button>

                  <p class="text-muted text-center"><small>Already have an account?</small></p>
                  <a class="btn btn-sm btn-white btn-block" href="{{ route('login') }}">Login</a>
              </form>
          </div>
                </div>
            </div>
        </div>
    </div>

@endsection
