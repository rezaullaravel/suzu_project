@extends('admin.admin_master')

@section('title')
Admin Profile
@endsection
@section('content')

<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="container_fluid">
        <div class="row" style="margin-top: 15px;">
            <div class="col-xl-2"></div>
            <div class="col-xl-8">

                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{route('user.profile.edit',$user->id)}}" class="btn btn-info" style="margin-bottom:5px; float: right;">Profile Update</a>
                        </div>
                    </div>

                <div class="box box-widget widget-user">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="widget-user-header bg-aqua-active">
                      <h3 class="widget-user-username">{{$user->name}}</h3>
                      <h5 class="widget-user-desc">Founder &amp; CEO</h5>
                    </div>
                    <div class="widget-user-image">
                      <img class="img-circle" src="{{asset($user->photo)}}" alt="User Avatar">
                    </div>
                    <div class="box-footer">
                      <div class="row">
                        <div class="col-sm-4 border-right">
                          <div class="description-block">
                            <h5 class="description-header">3,200</h5>
                            <span class="description-text">SALES</span>
                          </div>
                          <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 border-right">
                          <div class="description-block">
                            <h5 class="description-header">13,000</h5>
                            <span class="description-text">FOLLOWERS</span>
                          </div>
                          <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4">
                          <div class="description-block">
                            <h5 class="description-header">35</h5>
                            <span class="description-text">PRODUCTS</span>
                          </div>
                          <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                  </div>
            </div>

            <div class="col-xl-2"></div>
        </div>
    </div>
    <!-- /.row -->
    <!-- Main row -->

    <!-- /.row (main row) -->

  </section>

@endsection
