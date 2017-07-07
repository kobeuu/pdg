<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="dist/img/user-sf.png" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Administrator</p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>
      <!-- Optionally, you can add icons to the links -->
      <li {{{ (Request::is('/') ? 'class=active' : '') }}} ><a href="/"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
      <li {{{ (Request::is('registrants') ? 'class=active' : '') }}} ><a href="/registrants"><i class="fa fa-users"></i> <span>Semua Pendaftar</span></a></li>
      <li class="treeview">
        <a href="/setting"><i class="fa fa-spinner"></i> <span>Proses Seleksi</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-circle-o"></i>Kriteria</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i>Bobot</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i>Survey</a></li>
          <li><a href="#"><i class="fa fa-check"></i>Penerima Manfaat</a></li>
        </ul>
      </li>
      <li {{{ (Request::is('report') ? 'class=active' : '') }}} ><a href="/report"><i class="fa fa-line-chart"></i> <span>Statistik</span></a></li>
      <li {{{ (Request::is('setting') ? 'class=active' : '') }}} ><a href="/setting"><i class="fa fa-gear"></i> <span>Pengaturan</span></a></li>
      <li {{{ (Request::is('documentation') ? 'class=active' : '') }}} ><a href="/documentation"><i class="fa fa-book"></i> <span>Dokumentasi</span></a></li>
      <li class="exit-menu"><a href="{{ route('logout') }}"
              onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">

          <!-- hidden-xs hides the username on small devices so only the image appears. -->
          <i class="fa fa-power-off"></i> <span>Keluar</span>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>
        </a>
      </li>
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>
