@extends('layouts.app0')
@section('title', 'Forgot Password')
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
              <h2 class="text-center">Forgot Password</h2>
              <form class="m-t" role="form" action="{{ route('password.email') }}" method="post">
                @csrf
                  <div class="form-group">
                      <input type="email" class="form-control" name="email" placeholder="Email" value="{{old('email')}}">
                  </div>
                  @error('email')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <div class="form-group">
                    <p>Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.
                    </p>
                  </div>
                  <button type="submit" class="btn btn-primary block full-width m-b">Email password reset link</button>

                  <a class="btn btn-sm btn-white btn-block" href="{{ route('login') }}">Login</a>
              </form>
          </div>
                </div>
            </div>
        </div>
    </div>

@endsection
