@extends('admin.admin_master')
@section('title')
Add Employee
@endsection
@section('content')



<section class="content">
   <div class="container-fluid">

    <div class="row">
        <div class="col-xs-12">
            <a href="{{url('/manage/employee')}}" class="btn btn-success btn-lg " style="float: right;" title="Create User">Back To Manage</a>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <h2>Add Employee</h2>
            <div class="box box-primary">
                <div class="box-header with-border">

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="{{route('store.employee')}}" method="POST">
                    @csrf
                  <div class="box-body">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Employee Name</label>
                        <input type="text" name="employee_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Job title</label>
                        <input type="text" name="job_title" class="form-control" id="exampleInputEmail1" placeholder="Enter Job Title">
                      </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Social Link</label>
                        <input type="text" name="social_link" class="form-control" id="exampleInputEmail1" placeholder="Enter Social Media Link">
                      </div>


                    <div class="form-group">
                        <label for="exampleInputPassword1">Qr Code</label>
                        <input type="text" name="qr_code" class="form-control" id="exampleInputPassword1" placeholder="Qr code">
                      </div>


                  </div>
                  <!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Add</button>
                  </div>
                </form>
              </div>

          <!-- /.box -->
        </div>
      </div>
   </div>
</section>

@endsection
