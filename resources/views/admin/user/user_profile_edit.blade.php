@extends('admin.admin_master')
@section('title')
Create User
@endsection
@section('content')



<section class="content">
   <div class="container-fluid">


    <div class="row">
        <div class="col-xs-12">
            <h2>Update User Profile</h2>
            <div class="box box-primary">
                <div class="box-header with-border">



                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="{{route('update.user.profile')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$user->id}}" >
                  <div class="box-body">

                    <div class="form-group">
                        <label for="exampleInputEmail1">User Name</label>
                        <input type="text" name="name" value="{{$user->name}}" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
                      </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" name="email"  value="{{$user->email}}"  class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" name="password"  value="{{$user->password}}"  class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Photo</label>
                      <input type="file" name="photo">
                      <img src="{{asset($user->photo)}}" alt="" width="80">


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
