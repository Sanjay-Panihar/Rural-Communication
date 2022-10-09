@extends('layouts.app0')
@section('title', 'Login')
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
                  <h2 class="text-center">Login</h2>
                    <form class="m-t" role="form" action="{{ route('login') }}" method="post">
                      @csrf
                        <div class="form-group">
                            <input type="email" class="form-control @error('title') is-invalid @enderror" name ="email" placeholder="Username" autocomplete="off" >
                        </div>
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <input type="password" class="form-control @error('title') is-invalid @enderror" name="password" placeholder="Password" autocomplete="off" >
                        </div>
                        @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
                        <div class="block mt-4">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </label>
                        </div>
                          @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">
                            <small>Forgot password?</small>
                        </a>
                          @endif
                        <p class="text-muted text-center">
                            <small>Do not have an account?</small>
                        </p>
                        <a class="btn btn-sm btn-white btn-block" href="{{ route('register' )}}">Create an account</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
