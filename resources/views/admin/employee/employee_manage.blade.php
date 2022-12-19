@extends('admin.admin_master')
@section('title')
Manage Employee
@endsection
@section('content')

<section class="content">
   <div class="container-fluid">

    <div class="row">
        <div class="col-xs-12">
            <a href="{{route('add.employee')}}" class="btn btn-success btn-lg " style="float: right;" title="Add Employee"><i class="fa fa-plus-square"></i></a>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <h2>Manage Employee</h2>
          <div class="box">
            <div class="box-header">



            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Employee Name</th>
                        <th>Email</th>
                        <th>Employee Url</th>

                        <th>Action</th>
                      </tr>
                </thead>

                <tbody>

                     @foreach ($employees as $row)
                    <tr>
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->employee_name }}</td>
                        <td>{{ $row->email }}</td>
                        <td>{{ $row->employ_url }}</td>

                        <td>
                            {{-- <img src="{{asset($row->photo)}}" alt="" width="80" height="80"> --}}
                        </td>


                        <td>
                            <a href="{{route('edit.employee',$row->id)}}" class="btn btn-success" title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="{{route('delete.employee',$row->id)}}" class="btn btn-danger" title="Delete" id="delete"><i class="fa fa-trash"></i></a>
                             <a href="{{route('view.employee',$row->id)}}" class="btn btn-info" title="View"><i class="fa fa-eye"></i></a>
                        </td>


                      </tr>
                       @endforeach
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
