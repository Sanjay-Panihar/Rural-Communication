@extends('layouts.main')

@section('title', 'Contact Us')
@section('content')

<div class="page-nav no-margin row">
  @if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif
       <div class="container">
           <div class="row">
               <h2>Contact Us</h2>
               <ul>
                   <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                   <li><i class="fas fa-angle-double-right"></i> Contact US</li>
               </ul>
           </div>
       </div>
   </div>



 <!--  ************************* Contact Us Starts Here ************************** -->


   <div style="margin-top:0px;" class="row no-margin">

       <iframe style="width:100%" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Alampur, tosham&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"  height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

   </div>

   <div class="row contact-rooo no-margin">
       <div class="container">
           <div class="row">
               <div style="padding:20px" class="col-sm-7">
                   <h2 >Contact Form</h2> <br>
                   <form class="" action="{{ url('contact-form-store') }}" method="post">
                     @csrf
                   <div class="row cont-row">
                       <div  class="col-sm-3">
                         <label>Name </label>
                       </div>
                       <div class="col-sm-8">
                         <input type="text" placeholder="Enter Name" name="name" class="form-control input-sm @error('name') is-invalid @enderror"  >
                         @error('name')
                          <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                       </div>
                   </div>
                   <div  class="row cont-row">
                       <div  class="col-sm-3">
                         <label>Email Address </label>
                         </div>
                       <div class="col-sm-8">
                         <input type="text" name="email" placeholder="Enter Email Address" class="form-control input-sm @error('email') is-invalid @enderror"  >
                         @error('email')
                          <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                       </div>
                   </div>
                   <div  class="row cont-row">
                       <div  class="col-sm-3">
                         <label>Mobile Number</label>
                        </div>
                       <div class="col-sm-8"><input type="text" name="mobile_number" placeholder="Enter Mobile Number" class="form-control input-sm @error('mobile_number') is-invalid @enderror"  >
                         @error('mobile_number')
                          <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                       </div>
                   </div>
                   <div  class="row cont-row">
                       <div  class="col-sm-3">
                         <label>Message</label>
                         </div>
                       <div class="col-sm-8">
                           <textarea rows="5" placeholder="Enter Your Message" name="message" class="form-control input-sm @error('message') is-invalid @enderror"></textarea>
                           @error('message')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                       </div>
                   </div>
                   <div style="margin-top:10px;" class="row">
                       <div style="padding-top:10px;" class="col-sm-3"><label></label></div>
                       <div class="col-sm-8">
                           <button type="submit" class="btn btn-primary btn-sm">Send Message</button>
                       </div>
                   </div>
                      </form>
               </div>
               <div class="col-sm-5">


                   </div>


               </div>

           </div>
       </div>

   </div>

@endsection
