<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
            <a href="index.php?page=dahsboard" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
                <i class="right badge badge-danger">New</i>
              </p>
            </a>
</li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Toko Buaha
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?page=penjualan" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Penjualan Buah</p>
                </a>
              </li>
              <li class="nav-item ">
                <a href="index.php?page=not_found" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pasokan Buah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=stok" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Stok Buah di Gudang</p>
                </a>
              </li>           
          <li class="nav-item">
                <a href="index.php?page=grafik" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Grafik Penjualan Buah</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="logout.php" class="nav-link text-red">
              <i class="nav-icon fas fa-power-off"></i>
              <p>
                Logout

              </p>
            </a>
          </li>
        </ul>
      </nav>