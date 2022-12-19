@extends('admin.admin_master')
@section('title')
Manage User
@endsection
@section('content')

<section class="content">
   <div class="container-fluid">

    <div class="row">
        <div class="col-xs-12">
            <a href="{{route('create.user')}}" class="btn btn-success btn-lg " style="float: right;" title="Create User"><i class="fa fa-plus-square"></i></a>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <h2>Manage User</h2>
          <div class="box">
            <div class="box-header">



            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Photo</th>
                        <th>Action</th>
                      </tr>
                </thead>

                <tbody>

                    @foreach ($users as $row)
                    <tr>
                        <td>{{$row->id}}</td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->email}}</td>
                        <td>
                            <img src="{{asset($row->photo)}}" alt="" width="80" height="80">
                        </td>


                        <td>
                            <a href="{{route('edit.user',$row->id)}}" class="btn btn-success" title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="{{route('delete.user',$row->id)}}" class="btn btn-danger" title="Delete" id="delete"><i class="fa fa-trash"></i></a>
                            {{-- <a href="{{route('view.user',$row->id)}}" class="btn btn-info" title="View"><i class="fa fa-eye"></i></a> --}}
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
