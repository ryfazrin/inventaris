      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://stisla.com/">stisla.com</a>
        </div>
        <div class="footer-right">
          
        </div>
      </footer>
    </div>
  </div>
    <!-- modal konfirmasi-->
    <div id="modal-konfirmasi" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
         
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Konfirmasi</h4>
        </div>
        <div class="modal-body btn-info">
          Apakah Anda yakin ingin menghapus data ini ?
        </div>
        <div class="modal-footer">
          <a href="javascript:;" class="btn btn-danger" id="hapus-true-data">Hapus</a>
          <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
        </div>
         
        </div>
      </div>
    </div>
  <!-- General JS Scripts -->
  <script src="<?php echo base_url('assets/modules/jquery.min.js')?>"></script>
    <script type="text/javascript">
      $(document).ready(function(){
 
      $('#modal-konfirmasi').on('show.bs.modal', function (event) {
      var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
       
      // Untuk mengambil nilai dari data-id="" yang telah kita tempatkan pada link hapus
      var id = div.data('id')
       
      var modal = $(this)
       
      // Mengisi atribut href pada tombol ya yang kita berikan id hapus-true pada modal .
      modal.find('#hapus-true-data').attr("href","<?php echo site_url('user/hapus/'); ?>"+id);
      })
       
      });
    </script>
  <script src="<?php echo base_url('assets/modules/popper.js')?>"></script>
  <script src="<?php echo base_url('assets/modules/tooltip.js')?>"></script>
  <script src="<?php echo base_url('assets/modules/bootstrap/js/bootstrap.min.js')?>"></script>
  <script src="<?php echo base_url('assets/modules/nicescroll/jquery.nicescroll.min.js')?>"></script>
  <script src="<?php echo base_url('assets/modules/moment.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/stisla.js')?>"></script>

  <!-- JS Libraies -->
  <script src="<?php echo base_url('assets/modules/datatables/datatables.min.js')?>"></script>
  <script src="<?php echo base_url('assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')?>"></script>
  <script src="<?php echo base_url('assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js')?>"></script>
  <script src="<?php echo base_url('assets/modules/select2/dist/js/select2.full.min.js')?>"></script>
  <script src="<?php echo base_url('assets/modules/jquery-ui/jquery-ui.min.js')?>"></script>
   <script src="<?php echo base_url('assets/modules/bootstrap-daterangepicker/daterangepicker.js')?>"></script>

  <!-- Page Specific JS File -->
  <script src="<?php echo base_url('assets/js/page/modules-datatables.js')?>"></script>
  
  <!-- Template JS File -->
  <script src="<?php echo base_url('assets/js/scripts.js')?>"></script>
  <script src="<?php echo base_url('assets/js/custom.js')?>"></script>
</body>
</html>