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
            <h2>Update Employee</h2>
            <div class="box box-primary">
                <div class="box-header with-border">



                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="{{route('update.employee')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$employee->id}}">
                  <div class="box-body">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Employee Name</label>
                        <input type="text" name="employee_name" value="{{$employee->employee_name}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Job title</label>
                        <input type="text" name="job_title" value="{{$employee->job_title}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Job Title">
                      </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" name="email" value="{{$employee->email}}"  class="form-control" id="exampleInputEmail1" placeholder="Enter Email">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Social Link</label>
                        <input type="text" name="social_link"  value="{{$employee->social_link}}"  class="form-control" id="exampleInputEmail1" placeholder="Enter Social Media Link">
                      </div>


                    <div class="form-group">
                        <label for="exampleInputPassword1">Qr Code</label>
                        <input type="text" name="qr_code"  value="{{$employee->qr_code}}" class="form-control" id="exampleInputPassword1" placeholder="Qr code">
                      </div>


                  </div>
                  <!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                  </div>
                </form>
              </div>

          <!-- /.box -->
        </div>
      </div>
   </div>
</section>

@endsection
