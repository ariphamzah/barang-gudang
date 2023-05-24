<section class="sidebar">
  <!-- Sidebar user panel -->
  <div class="user-panel">
    <div class="pull-left image">
      <?php foreach ($avatar as $a) { ?>
        <img src="<?php echo base_url('assets/upload/user/img/' . $a->nama_file) ?>" class="img-circle" alt="User Image">
      <?php } ?>
    </div>
    <div class="pull-left info">
      <p><?= $this->session->userdata('name') ?></p>
      <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
  </div>
  <!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <li>
      <a href="<?= base_url('admin') ?>">
        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        <span class="pull-right-container">
        </span>
      </a>
    </li>

    <li class="treeview active">
      <a href="#">
        <i class="fa fa-edit"></i> <span>Forms</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li class="active"><a href="<?= base_url('admin/form_barangmasuk') ?>"><i class="fa fa-circle-o"></i> Tambah Data Barang Masuk</a></li>
        <li><a href="<?= base_url('admin/form_satuan') ?>"><i class="fa fa-circle-o"></i> Tambah Satuan Barang</a></li>
      </ul>
    </li>
    <li class="treeview ">
      <a href="#">
        <i class="fa fa-table"></i> <span>Tables</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="<?= base_url('admin/tabel_barangmasuk') ?>"><i class="fa fa-circle-o"></i> Tabel Barang Masuk</a></li>
        <li><a href="<?= base_url('admin/tabel_barangkeluar') ?>"><i class="fa fa-circle-o"></i> Tabel Barang Keluar</a></li>
        <li><a href="<?= base_url('admin/tabel_satuan') ?>"><i class="fa fa-circle-o"></i> Tabel Satuan</a></li>
      </ul>
    </li>
    <li>
    <li class="header">LABELS</li>
    <li>
      <a href="<?php echo base_url('admin/profile') ?>">
        <i class="fa fa-cogs" aria-hidden="true"></i> <span>Profile</span></a>
    </li>
    <li>
      <a href="<?php echo base_url('admin/users') ?>">
        <i class="fa fa-fw fa-users" aria-hidden="true"></i> <span>Users</span></a>
    </li>
  </ul>
</section>