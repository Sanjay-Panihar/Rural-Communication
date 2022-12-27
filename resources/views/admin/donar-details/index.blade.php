@extends('admin.layouts.app')
@section('content')
@section('title', 'Donar Details')
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-lg-10">
      <h2>Donar Details</h2>
      <ol class="breadcrumb">
          <li>
              <a href="/dashboard">Home</a>
          </li>
          <li class="active">
              <strong>Donar Details</strong>
          </li>
      </ol>
  </div>
  <div class="col-lg-2">
  </div>
</div>
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
                        <th>Amount</th>
                        <th>Mobile No.</th>
                        <th>Payment Status</th>
                        <th class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($donarDetails as $donarDetail)
                    <tr class="gradeX">
                        <td>{{ $donarDetail->id }}</td>
                        <td>{{ $donarDetail->doner_name }}</td>
                        <td> {{ $donarDetail->doner_email }}</td>
                        <td>{{ $donarDetail->donation_amount}}</td>
                        <td class="center">{{ $donarDetail->mobile_number}}</td>
                        <td class="center"><span class="badge badge-warning">{{ $donarDetail->payment_status == 0 ? 'Pending' : 'Paid'}}</span>
                        <td><a href="{{ url('donar_details/'.$donarDetail->id.'/edit')}}" class="btn btn-primary btn-sm">View</a>
                          @if($donarDetail->payment_status == 0)
                        <form action="{{ URL::to('donar_details', $donarDetail->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm" name="button">Delete</button>
                        </form>
                          @endif
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

@push('script')
<script src="{{ asset('assets/admin/js/jquery-3.1.1.min.js')}}"></script>
  <script src="{{ asset('assets/admin/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('assets/admin/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
  <script src="{{ asset('assets/admin/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

  <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js" defer></script>


  <!-- Custom and plugin javascript -->
  <script src="{{ asset('assets/admin/js/inspinia.js')}}"></script>
  <script src="{{ asset('assets/admin/js/plugins/pace/pace.min.js')}}"></script>

  <!-- Page-Level Scripts -->
  <script>
      $(document).ready(function(){
          $('.dataTables-example').DataTable({
              pageLength: 10,
              responsive: true,
              dom: '<"html5buttons"B>lTfgitp',
              buttons: [
                  { extend: 'copy'},
                  {extend: 'csv'},
                  {extend: 'excel', title: 'ExampleFile'},
                  {extend: 'pdf', title: 'ExampleFile'},

                  {extend: 'print',
                   customize: function (win){
                          $(win.document.body).addClass('white-bg');
                          $(win.document.body).css('font-size', '10px');

                          $(win.document.body).find('table')
                                  .addClass('compact')
                                  .css('font-size', 'inherit');
                  }
                  }
              ]
          });
      });
  </script>
@endpush
