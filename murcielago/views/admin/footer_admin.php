<footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 - <?php echo date('Y') ?> <div class="bullet"></div> Template By <a href="https://nauval.in/">Muhamad Nauval Azhar</a> . Developed By <a href="https://instagram.com/angger.23">Angger Pangestu Ari</a> 
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="<?php echo  base_url() ?>assets/plugins/dropify/dist/js/dropify.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="<?php echo base_url('assets/admin/') ?>assetx//js/stisla.js"></script>

  <!-- JS Libraies -->
  <!-- <script src="<?php //echo base_url('assets/admin/') ?>node_modules/simpleweather/jquery.simpleWeather.min.js"></script> -->
  <script src="<?php echo base_url('assets/admin/') ?>node_modules/chart.js/dist/Chart.min.js"></script>
  <script src="<?php echo base_url('assets/admin/') ?>node_modules/jqvmap/dist/jquery.vmap.min.js"></script>
  <script src="<?php echo base_url('assets/admin/') ?>node_modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
  <script src="<?php echo base_url('assets/admin/') ?>node_modules/summernote/dist/summernote-bs4.js"></script>
  <script src="<?php echo base_url('assets/admin/') ?>node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

  <!-- Template JS File -->
  <script src="<?php echo base_url('assets/admin/') ?>assetx/js/scripts.js"></script>
  <script src="<?php echo base_url('assets/admin/') ?>assetx/js/custom.js"></script>

  <!-- Page Specific JS File -->
  <!-- <script src="<?php echo base_url('assets/admin/') ?>assetx/js/page/index-0.js"></script> -->
<script src="<?php echo base_url('assets/admin/') ?>assetx/js/page/bootstrap-modal.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable();
} );
    $(function () {
        $('.dropify').dropify();
    
    });
  </script>
</body>
</html>