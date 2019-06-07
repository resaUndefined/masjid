<div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="/home" class="site_title"><i class="fa fa-paw"></i> <span>Portal Masjid!</span></a>
    </div>

    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    <div class="profile clearfix">
      <div class="profile_pic">
        @if (!is_null($userLogged->profile))
          @if (is_null($userLogged->profile->thumbnail))
            <img src="{{url('assets/production/images/img.jpg')}}" alt="..." class="img-circle profile_img">
          @else
            <img src="" alt="{{ $userLogged->profile->nama }}" class="img-circle profile_img">
          @endif
        @else
          <img src="{{url('assets/production/images/img.jpg')}}" alt="..." class="img-circle profile_img">
        @endif
        
      </div>
      <div class="profile_info">
        <span>Welcome,</span>
        <h2>{{ $user }}</h2>
      </div>
    </div>
    <!-- /menu profile quick info -->
    <br />
    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <ul class="nav side-menu">
          <li class="active">
            <a href="/home"><i class="fa fa-dashboard"></i> Dashboard </a>
          </li>
          @if ($userLogged->role->level <= 3)
            <li>
              <a href="#"><i class="fa fa-users"></i> Manajemen Roles</a>
            </li>
            <li>
            <a href="#"><i class="fa fa-users"></i> Manajemen Users</a>
          </li>
          <li><a><i class="fa fa-tasks"></i> Manajemen Takmir <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="#">Jabatan</a></li>
              <li><a href="#">Struktur Organisasi</a></li>
            </ul>
          </li>
          <li><a><i class="fa fa-newspaper-o"></i> Manajemen Posting <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="#">Kategori</a></li>
              <li><a href="#">Tags</a></li>
              <li><a href="#">Artikel</a></li>
              <li><a href="#">Kegiatan</a></li>
              <li><a href="#">Pengumuman</a></li>
            </ul>
          </li>
          <li><a><i class="fa fa-money"></i> Manajemen Infaq <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="#">Infaq</a></li>
              <li><a href="#">Infaq Detail</a></li>
            </ul>
          </li>
          <li><a><i class="fa fa-recycle"></i>Ramadhan <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a><i class="fa fa-cogs"></i>Jadwal <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                  <li><a href="#">Manajemen Jadwal Ramadhan</a></li>
                  <li><a href="#">Jadwal Bilal</a></li>
                  <li><a href="#">Jadwal MC Shubuh</a></li>
                  <li><a href="#">Jadwal MC Tarawih</a></li>
                  <li><a href="#">Jadwal Imam Tarawih</a></li>
                  <li><a href="#">Jadwal Kultum Shubuh</a></li>
                  <li><a href="#">Jadwal Kultum Tarawih</a></li>
                  <li><a href="#">Jadwal Kultum Takjil</a></li>
                  <li><a href="#">Jadwal Donatur Takjil</a></li>
                  <li><a href="#">Jadwal Piket Takjil</a></li>
                </ul>
              </li>
            </ul>
          </li>
          @endif
          @if ($userLogged->role->level > 3)
            <li><a><i class="fa fa-user"></i> Manajemen Profile <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="#">Update Profile</a></li>
                <li><a href="#">Ubah Password</a></li>
              </ul>
            </li>
            <li><a><i class="fa fa-calendar-o"></i>Agenda Terkait</a>
            </li>
          @endif
        </ul>
      </div>
    </div>
    <!-- /sidebar menu -->
    <!-- /menu footer buttons -->
    <div class="sidebar-footer hidden-small">
      <a data-toggle="tooltip" data-placement="top" title="Settings">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="FullScreen">
        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="Lock">
        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
      </a>
    </div>
    <!-- /menu footer buttons -->
  </div>
</div>