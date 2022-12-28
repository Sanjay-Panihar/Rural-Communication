@extends('admin.layouts.app')
@section('content')
@section('title', 'Edit')
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
  <div class="col-md-6">
    <form class="" action="{{ URL::to('donar_details', $donarDetail->id) }}" method="post">
      @csrf
      @method('patch')
      <div class="form-group">
        <label for="name"> Name</label>
        <input type="text" name="donar_name" class="form-control @error('donar_name') is-invalid @enderror" value="{{$donarDetail->doner_name}}" readonly>
        @error('donar_name')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label for="name"> Amount</label>
        <input type="text" name="donation_amount" class="form-control @error('donation_amount') is-invalid @enderror" value="{{$donarDetail->donation_amount}}" readonly>
        @error('donation_amount')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label for="name"> Mobile No.</label>
        <input type="text" name="mobile_number" class="form-control @error('mobile_number') is-invalid @enderror" value="{{$donarDetail->mobile_number}}"  maxlength="10">
        @error('mobile_number')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label for="name"> State </label>
        <input type="text" name="doner_state" class="form-control @error('doner_state') is-invalid @enderror" value="{{$donarDetail->doner_state}}">
        @error('doner_state')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label for="pan_aadhar"> Pan / Adhar Card</label>
        <input type="text" name="pan_aadhar" class="form-control @error('pan_aadhar') is-invalid @enderror" value="{{$donarDetail->pan_aadhar}}" maxlength="12">
        @error('pan_aadhar')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-sm"> Update </button>
        <a href="{{ URL::to('/donar_details') }}" class="btn btn-primary btn-sm"> Back </a>
      </div>

  </div>
  <div class="col-md-6">
    <div class="form-group">
      <label for="name"> Email</label>
      <input type="text" name="donar_email" class="form-control @error('doner_email') is-invalid @enderror" value="{{$donarDetail->doner_email}}">
      @error('donar_email')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="name"> Country</label>
      <input type="text" name="doner_country" class="form-control @error('doner_country') is-invalid @enderror" value="{{$donarDetail->doner_country}}">
      @error('doner_country')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="name"> City</label>
      <input type="text" name="doner_city" class="form-control @error('doner_city') is-invalid @enderror" value="{{$donarDetail->doner_city}}">
      @error('doner_city')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="name"> Pincode</label>
      <input type="text" name="doner_pincode" class="form-control @error('doner_pincode') is-invalid @enderror" value="{{$donarDetail->doner_pincode}}" maxlength="6">
      @error('doner_pincode')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    </form>
    </div>
  </div>
</div>
@endsection
