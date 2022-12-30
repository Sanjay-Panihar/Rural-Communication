@extends('admin.layouts.app')
@section('content')
@section('title', 'Contact Form')
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@elseif(session()->has('error'))
<div class="alert alert-danger">
    {{ session()->get('error') }}
</div>
@endif
<div class="row">
  <div class="col-md-2">

  </div>
  <div class="col-md-8">
    <h2 class="mt-5">Contact Us</h2>
    <div class="wrapper wrapper-content animated fadeInRight ibox-content">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" value="{{ $contactForm->name }}" readonly>
      </div>
      <div class="form-group">
        <label for="name">Email</label>
        <input type="text" name="email" class="form-control" value="{{ $contactForm->email }}" readonly>
      </div>
      <div class="form-group">
        <label for="name">Mobile No.</label>
        <input type="text" name="mobile_number" class="form-control" value="{{ $contactForm->mobile_number }}" readonly>
      </div>
      <div class="form-group">
        <label for="name">Message</label>
        <textarea name="message" class="form-control" col= "10" rows="6" readonly>{{ $contactForm->message }}</textarea>
      </div>
      <a href="{{ URL::to('contact-form') }}" class="btn btn-success btn-sm">Back</a>
    </div>
  </div>
  <div class="col-md-2">

  </div>
</div>


@endsection
