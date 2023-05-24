<footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>Stock Op Name</b>
  </div>
  <strong>Copyright &copy; <?= date('Y') ?></strong>
</footer>

<script src="<?php echo base_url() ?>assets/web_admin/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/web_admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/web_admin/bower_components/fastclick/lib/fastclick.js"></script>
<script src="<?php echo base_url() ?>assets/web_admin/dist/js/adminlte.min.js"></script>
<script src="<?php echo base_url() ?>assets/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
<script src="<?php echo base_url() ?>assets/web_admin/dist/js/demo.js"></script>

  <script type="text/javascript">
    $(".form_datetime").datetimepicker({
      format: 'dd/mm/yyyy',
      autoclose: true,
      todayBtn: true,
      pickTime: false,
      minView: 2,
      maxView: 4,
    });
  </script>
</body>

</html>