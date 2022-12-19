@extends('admin.admin_master')
@section('title')
Manage Employee
@endsection
@section('content')

<section class="content">
   <div class="container-fluid">

    <div class="row">
        <div class="col-xs-12">
            <a href="{{url('/manage/employee')}}" class="btn btn-success btn-lg " style="float: right;" title="Add Employee">Back To Manage</a>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <h2>View Employee Details</h2>
          <div class="box">
            <div class="box-header">



            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">

                     <tr>
                        <th width="20%">ID</th>
                         <td>{{$employee->id}}</td>
                      </tr>

                      <tr>
                        <th>Employee Name</th>
                         <td>{{$employee->employee_name}}</td>
                      </tr>

                      <tr>
                        <th>Job title</th>
                        <td>{{$employee->job_title}}</td>
                      </tr>

                      <tr>
                        <th>Email</th>
                        <td>{{$employee->email}}</td>
                      </tr>

                      <tr>
                        <th>Employee Url</th>
                        <td>{{$employee->employ_url}}</td>
                      </tr>



                <tbody>



                </tbody>



              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
   </div>
</section>

@endsection
