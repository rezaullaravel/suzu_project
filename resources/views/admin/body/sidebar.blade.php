<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset(Auth::User()->photo)}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{Auth::User()->name}}</p>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">



        <li>
            <a href="{{route('manage.user')}}">
              <i class="fa fa-th"></i> <span>Manage User</span>
            </a>
          </li>

          <li>
            <a href="{{route('manage.employee')}}">
              <i class="fa fa-eyedropper"></i> <span>Manage Employee</span>
            </a>
          </li>





      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
