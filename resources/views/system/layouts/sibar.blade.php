<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
      <div class="clearfix"></div>
      <!-- menu profile quick info -->
      <div class="profile clearfix">
        <div class="profile_pic">
          <img src="{{asset('public/images/img.jpg')}}" alt="..." class="img-circle profile_img">
        </div>
        <div class="profile_info">
          <span>Hi</span>
          <h2>John Doe</h2>
        </div>
      </div>
      <!-- /menu profile quick info -->
      <br>
      <!-- sidebar menu -->
      <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section">
          <h3>General</h3>
          <ul class="nav side-menu" style="">
            <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="{{asset('admin')}}">Dashboard</a></li>
                <li><a href="{{asset('admin')}}">Dashboard2</a></li>
                <li><a href="{{asset('admin')}}">Dashboard3</a></li>
              </ul>
            </li>
            {{-- setting --}}
            <li><a><i class="fa fa-cog"></i> Cài đặt <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="{{asset('admin/setting')}}">Tùy chọn tổng quan</a></li>
                <li><a href="{{asset('admin/setting/smtp')}}">Cài đặt SMTP</a></li>
                <li><a href="{{asset('admin/setting/ecommerce')}}">E-commerce</a></li>
                <li><a href="{{asset('admin/setting/sysmenu')}}">Danh mục hệ thống</a></li>
              </ul>
            </li>
            {{-- setting --}}
          </ul>
        </div>
      </div>
      <!-- /sidebar menu -->
      <!-- /menu footer buttons -->
      <div class="sidebar-footer hidden-small">
        <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Settings">
          <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="" data-original-title="FullScreen">
          <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Lock">
          <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="" href="login.html" data-original-title="Logout">
          <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
        </a>
      </div>
      <!-- /menu footer buttons -->
    </div>
  </div>