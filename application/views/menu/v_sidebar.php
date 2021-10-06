<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->
    <li class="nav-item has-treeview">
      <a href="<?php echo base_url() . 'admin/dashboard'; ?>" class="nav-link">
        <i class="nav-icon fas fa-home"></i>
        <p>
          Dashboard
          <i class="right fas fa-angle-right"></i>
        </p>
      </a>
    </li>
    <li class="nav-item has-treeview">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-server"></i>
        <p>
          Wisata
          <i class="fas fa-plus right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="<?php echo base_url() . 'admin/wisata'; ?>" class="nav-link">
            <i class="fas fa-angle-right nav-icon"></i>
            <p>Data Wisata</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url() . 'admin/kategori'; ?>" class="nav-link">
            <i class="fas fa-angle-right nav-icon"></i>
            <p>Kategori Wisata</p>
          </a>
        </li>
      </ul>
    </li>
    <!-- <li class="nav-item has-treeview">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-route"></i>
        <p>
          Lokasi
          <i class="fas fa-plus right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="" class="nav-link">
            <i class="fas fa-angle-right nav-icon"></i>
            <p>Data Kabupaten</p>
          </a>
        </li>
      </ul>
    </li> -->
    <li class="nav-item has-treeview">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-users"></i>
        <p>
          Pengguna
          <i class="fas fa-plus right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="<?php echo base_url() . 'admin/user'; ?>" class="nav-link">
            <i class="nav-icon fas fa-angle-right"></i>
            <p> Data Admin</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url() . 'admin/member'; ?>" class="nav-link">
            <i class="nav-icon fas fa-angle-right"></i>
            <p> Data Member</p>
          </a>
        </li>
        <!-- <li class="nav-item">
          <a href="<?php echo base_url() . 'Admin/Tamu'; ?>" class="nav-link">
            <i class="nav-icon fas fa-angle-right"></i>
            <p> Data Tamu</p>
          </a>
        </li> -->
      </ul>
    </li>
    <li class="nav-item">
      <a href="<?php echo base_url() . 'admin/penginapan'; ?>" class="nav-link">
        <i class="nav-icon fas fa-hotel"></i>
        <p>
          Penginapan
          <i class="right fas fa-angle-right"></i>
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="<?php echo base_url() . 'Admin/Event'; ?>" class="nav-link">
        <i class="nav-icon fas fa-calendar-week"></i>
        <p>
          Event
          <i class="right fas fa-angle-right"></i>
        </p>
      </a>
    </li>
    </li>
  </ul>
</nav>