<div class="wrapper">

  <header class="main-header">
    <?= $main_header ?>
  </header>

  <aside class="main-sidebar">
    <?= $sidebar ?>
  </aside>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Report
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url('admin')?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <!-- <li>Report</li> -->
        <li class="active"><a href="<?=base_url('admin/report')?>">Report</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><i class="fa fa-table" aria-hidden="true"></i> Report</h3>
            </div>
            
            <div class="box-body">

              <!-- <?php if($this->session->flashdata('msg_berhasil')){ ?>
                <div class="alert alert-success alert-dismissible" style="width:100%">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong><br> <?php echo $this->session->flashdata('msg_berhasil');?>
               </div>
              <?php } ?>

              <?php if($this->session->flashdata('msg_berhasil_keluar')){ ?>
                <div class="alert alert-success alert-dismissible" style="width:100%">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong><br> <?php echo $this->session->flashdata('msg_berhasil_keluar');?>
               </div>
              <?php } ?> -->

              <a href="" style="margin-bottom:10px;" name=""></a>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>ID Report</th>
                  <th>User</th>
                  <th>Jenis</th>
                  <th>Tanggal</th>
                  <th>Note</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <?php if(is_array($list_data)){ ?>
                  <?php $no = 1;?>
                  <?php foreach($list_data as $dd): ?>
                    <td><?=$no?></td>
                    <td><?=$dd->id_report?></td>
                    <td><?=$dd->user_report?></td>
                    <td><?=$dd->jenis_report?></td>
                    <td><?=$dd->tanggal_report?></td>
                    <td><?=$dd->note?></td>
                    <!-- <td><a type="button" class="btn btn-info"  href="<?=base_url('admin/edit_barangmasuk/'.$dd->id_transaksi)?>" name="btn_update" style="margin:auto;"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                    <td><a type="button" class="btn btn-danger btn-delete"  href="<?=base_url('admin/delete_barang/'.$dd->id_transaksi)?>" name="btn_delete" style="margin:auto;"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                    <td><a type="button" class="btn btn-success btn-barangkeluar"  href="<?=base_url('admin/barang_keluar/'.$dd->id_transaksi)?>" name="btn_barangkeluar" style="margin:auto;"><i class="fa fa-sign-out" aria-hidden="true"></i></a></td> -->
                </tr>
              <?php $no++; ?>
              <?php endforeach;?>
              <?php }else { ?>
                    <td colspan="7" align="center"><strong>Data Kosong</strong></td>
              <?php } ?>
                </tbody>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>ID Report</th>
                    <th>User</th>
                    <th>Jenis</th>
                    <th>Tanggal</th>
                    <th>Note</th>
                  </tr>
                </tfoot>
              </table>
            <!-- </div> -->
          </div>
        </div>
      </div>
    </div>
  </section>
</div>