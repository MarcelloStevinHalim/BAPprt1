    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('AdminLTE/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('AdminLTE/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="/" class="nav-link">
                    <i class="nav-icon fas fa-house-user"></i>
                    <p>Home</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/Welcome" class="nav-link">
                    <i class="nav-icon fas fa-paperclip"></i>
                    <p>Welcome</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/profile" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                    <p>Profil</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/mahasiswa" class="nav-link">
                    <i class="nav-icon fas fa-graduation-cap"></i>
                    <p>Mahasiswa</p>
                </a>
            </li>
            <li class="nav-item">
              <a href="/matakuliah" class="nav-link">
                  <i class="nav-icon fas fa-bell"></i>
                  <p>Mata Kuliah</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/programstudi" class="nav-link">
                  <i class="nav-icon fas fa-folder-open"></i>
                  <p>Program Studi</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/pembayaran" class="nav-link">
                  <i class="nav-icon fas fa-credit-card"></i>
                  <p>Pembayaran</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/jadwalkuliah" class="nav-link">
                  <i class="nav-icon fas fa-calendar"></i>
                  <p>Jadwal Perkuliahan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/admin/item" class="nav-link">
                  <i class="nav-icon fas fa-file"></i>
                  <p>Item</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/mahasiswa/mahasiswa2" class="nav-link">
                  <i class="nav-icon fas fa-graduation-cap"></i>
                  <p>Mahasiswa 2</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/matakuliah/matakuliah-marcello" class="nav-link">
                  <i class="nav-icon fas fa-graduation-cap"></i>
                  <p>Matakuliah Marcello</p>
              </a>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->