<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
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
        </ul>
      </li>
      <li><a href="/calculate"><i class="fa fa-check"></i> <span>Penerima Manfaat</span></a></li>
      <li {{{ (Request::is('report') ? 'class=active' : '') }}} ><a href="/report"><i class="fa fa-line-chart"></i> <span>Statistik</span></a></li>
      <li {{{ (Request::is('settings') ? 'class=active' : '') }}} ><a href="/settings"><i class="fa fa-gear"></i> <span>Pengaturan</span></a></li>
      <li {{{ (Request::is('documentations') ? 'class=active' : '') }}} ><a href="/documentations"><i class="fa fa-book"></i> <span>Dokumentasi</span></a></li>
      <li><a href="{{ route('logout') }}"
              onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">

          <!-- hidden-xs hides the username on small devices so only the image appears. -->
          <i class="fa fa-power-off"></i> <span>Keluar Aplikasi</span>
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
