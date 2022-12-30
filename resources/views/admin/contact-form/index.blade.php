@extends('admin.layouts.app')
@section('content')
@section('title', 'Contact Form')
<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-lg-10">
      <h2>Contact Us</h2>
      <ol class="breadcrumb">
          <li>
              <a href="/dashboard">Home</a>
          </li>
          <li class="active">
              <strong>Contact us</strong>
          </li>
      </ol>
  </div>
  <div class="col-lg-2">
  </div>
</div>
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@elseif(session()->has('error'))
<div class="alert alert-danger">
    {{ session()->get('error') }}
</div>
@endif
<div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile No.</th>
                        <th>Message</th>
                        <th class="text-center" colspan="2">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($contactForms as $contactForm)
                    <tr class="gradeX">
                      <td>{{ $contactForm->id }}</td>
                      <td>{{ $contactForm->name }}</td>
                      <td>{{ $contactForm->email }}</td>
                      <td>{{ $contactForm->mobile_number }}</td>
                      <td>{{ $contactForm->message }}</td>
                      <td> <a class="btn btn-primary btn-sm" href="{{ URL::to('contact-form', $contactForm->id)}}">View</a></td>
                      <td>
                      <form action="{{ URL::to('contact-form', $contactForm->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm" name="button">Delete</button>
                      </form>
                      </td>
                    </tr>
                    @endforeach
                    </tbody>
                    </table>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
@endsection
