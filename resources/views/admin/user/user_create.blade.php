@extends('admin.admin_master')
@section('title')
Create User
@endsection
@section('content')



<section class="content">
   <div class="container-fluid">

    <div class="row">
        <div class="col-xs-12">
            <a href="{{url('/manage/user')}}" class="btn btn-success btn-lg " style="float: right;" title="Create User">Back To Manage</a>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <h2>Create User</h2>
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
                <form role="form" action="{{route('store.user')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                  <div class="box-body">

                    <div class="form-group">
                        <label for="exampleInputEmail1">User Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
                      </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Photo</label>
                      <input type="file" name="photo">


                    </div>

                  </div>
                  <!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Create</button>
                  </div>
                </form>
              </div>

          <!-- /.box -->
        </div>
      </div>
   </div>
</section>

@endsection
