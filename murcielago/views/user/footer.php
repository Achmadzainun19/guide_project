<footer id="footer">
    <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
      <div class="container text-center">
        <div class="col-sm-8">
        <h3 style="color:#fff;font-weight: 300" class="text-left">Ayo Segera Mendaftar dan Pesan Paket Wisata di <b style="font-weight: 600">Banyuwangi Tour & Vocation</b> !</h3>
        <h4 style="color:#fff;font-weight: 300" class="text-left">Nikmati <b>Liburan</b> Yang Menyenangkan Bersama Kami !</h4>
      </div>
      <div class="col-md-4" style="padding: 3.5vh">
        <a href="<?php echo base_url('p/choose') ?>" class="btn btn-danger btn-flat "><b style="font-weight: 600;">DAFTAR</b></a>
      </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-6" style="color:#000">
            <strong>Copyright &copy; <?php echo date('Y') ?> </strong> All rights
      reserved | <a href="javascript:void(0)">Banyuwangi Tour & Vocation</a>
          </div>
          <!-- <div class="col-sm-6">
            <p class="pull-right">Crafted by <a href="http://designscrazed.org/">Allie</a></p>
          </div> -->
        </div>
      </div>
    </div>
  </footer>
<!-- <script src="<?php echo base_url() ?>assets/dist/js/jquery.js"></script> -->
<script src="<?php echo base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>

<script src="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/vegas/vegas.min.js"></script>

  <script type="text/javascript" src="<?php echo base_url() ?>assets/dist/js/wow.min.js"></script>
<script type="text/javascript">
  new WOW().init();
  $('#con').vegas({
  // overlay: true,
  transition: 'fade', 
  transitionDuration: 4000,
  delay: 10000,
  // color: 'red',
  align:'center',
  valign:'center',
  animation: 'random',
  animationDuration: 20000,
  overlay: '<?php echo base_url() ?>assets/img/overlays/06.png',
  slides: [
    { src: '<?php echo base_url() ?>assets/img/slide/1.png' },
    { src: '<?php echo base_url() ?>assets/img/slide/2.jpg' },
    { src: '<?php echo base_url() ?>assets/img/slide/3.JPG' },
    { src: '<?php echo base_url() ?>assets/img/slide/4.JPG' },
    { src: '<?php echo base_url() ?>assets/img/slide/5.JPG' },
    
  ]
});

</script>
</body>
</html>