  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<div class="content-wrapper">
    <div class="container">
      <!-- Main content -->
      <section class="content">
<form enctype="multipart/form-data" id="upload_form">
          <div class="box box-default" style="border:none;box-shadow:2px 2px 10px -3px #b1b1b1; ">
             <div class="box-header with-border">
            <h3 class="" style="font-weight: 300;padding:1.5vw">Form Pendaftaran</h3>
          </div>
            <div class="box-body" style="padding: 1.5vw;">
              <?php //echo tokenField(); ?>
               <div class="form-horizontal">

                 <div class="form-group">
                     <div class="col-sm-2">
                          <label class="control-label text-left" for="nama-siswa" style="text-align:left;">Nama Lengkap <b style="color:red;">*</b></label>
                      </div>
                    <div class="col-sm-10">
                      <input class="form-control" type="text" name="nama_lengkap" value="" id="nama_lengkap" required>
                    </div>
                 </div>
                  <div class="form-group">
                     <div class="col-sm-2">
                          <label class="control-label text-left" for="nama-siswa" style="text-align:left;">Username <b style="color:red;">*</b></label>
                      </div>
                    <div class="col-sm-10">
                      <input class="form-control" type="text" name="username" id="username" value="" required onkeyup="cekusername()">
                      <small style="color:red" id="showus">Username Sudah Digunakan</small>
                      <small style="color:red" id="showus1">Username minimal 5 karakter</small>

                    </div>
                 </div>
                 <div class="form-group">
                    <div class="col-sm-2">
                      <label>Email</label>
                    </div>
                    <div class="col-sm-10">
                      <input type="email" name="email" id="email" class="form-control" onkeyup="cekemail()">
                      <small style="color:red" id="showxem">Email Sudah Digunakan</small>
                      <small style="color:red" id="showxem1">Email tidak benar</small>
                    </div>
                  </div>

                 <div class="form-group">
                     <div class="col-sm-2">
                          <label class="control-label text-left" for="nama-siswa" style="text-align:left;">Password <b style="color:red;">*</b></label>
                      </div>
                    <div class="col-sm-10">
                      <input class="form-control" type="password" name="password" id="password" value=""required onkeyup="cekpass1()">
                      <small style="color:red" id="showpass">Password Minimal 5 karakter</small>
                    </div>
                 </div>
                 <div class="form-group">
                     <div class="col-sm-2">
                          <label class="control-label text-left" for="nama-siswa" style="text-align:left;">Retype Password <b style="color:red;">*</b></label>
                      </div>
                    <div class="col-sm-10">
                      <input class="form-control" type="password" name="repass" id="repass" value="" required onkeyup="cekpass2()">
                      <small style="color:red" id="showpass1">Password Tidak Sama</small>
                    </div>
                 </div>
                  <div class="form-group">
                    <div class="col-sm-2">
                      <label class="control-label text-left" for="jenis_kelamin">Jenis Kelamin <b style="color:red;">*</b></label>
                    </div>
                    <div class="col-sm-10">
                      <select class="form-control select2" name="jenis_kelamin" id="jenis_kelamin" required style="width: 100%;">
                        <option value="">Pilih</option>
                        <option value="1">Laki - Laki</option>
                        <option value="2">Perempuan</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-2">
                      <label id="pekerjaan">Pekerjaan Anda </label>
                    </div>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="pekerjaan_anda" id="pekerjaan">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-2">
                      <label>Alamat Rumah Anda </label>
                    </div>
                    <div class="col-sm-10">
                      <textarea class="form-control" name="alamat_rumah" id="alamat" rows="4"></textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-2">
                      <label>Nomor Telp / Hp Anda <b style="color:red;">*</b></label>
                    </div>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" name="no_hp" id="nomer">
                    </div>
                  </div>


                <div class="statusMsg"></div>
                  <div class="form-group">
                    <div class="col-sm-12">
                      <button id="galoading" class="btn btn-success btn-flat col-sm-3" onclick="aksiku()" type="button"><b>DAFTAR</b></button>
                      <button id="loading" class="btn btn-success btn-flat col-sm-3" disabled type="button"><b>LOADING</b>    <i class="fa fa-refresh fa-spin"></i> ... </button>
                    </div>
                  </div>
               </div>
            </div>
          </div>
</form>
<script type="text/javascript">

          $("#showxem").hide();
          $("#showxem1").hide();
          $("#showus").hide();
          $("#showus1").hide();
          $("#showpass").hide();
          $("#showpass1").hide();

          function cekemail(){
             var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
             var email= $('#email').val();
              if(!regex.test(email)) {
                $("#showxem1").show();
                $("#galoading").hide();
              }else if(regex.test(email)){
                $("#showxem1").hide();
                $("#galoading").show();
              }
          }

          function cekusername(){
              if ($("#username").val().length  < 5) {
                $("#showus1").show();
                $("#galoading").hide();
              }else if($("#username").val().length  >= 5){
                $("#showus1").hide();
                $("#galoading").show();
              }
          }

          function cekemail1(){
            $.ajax({
               url : "<?php echo base_url('register/cek_email'); ?>",
               method : "POST",
               data: { email: $('#email').val(), },
               success:  function (msg) {
                 if(msg == 'sukses'){
                  $("#showxem").hide();
                  $("#galoading").show();
                }else{
                  $("#showxem").show();
                  $("#galoading").hide();
                }
               }
            });
          }

          function cekuserl(){
            $.ajax({
             url : "<?php echo base_url('register/cek_username'); ?>",
             method : "POST",
             data: { username: $('#username').val(), },
             success:  function (msg) {
               if(msg == 'sukses'){
                $("#showus").hide();
                $("#galoading").show();
              }else{
                $("#showus").show();
                $("#galoading").hide();
              }
             }
          });
          }
          $(document).ready(function(){
            $("#username").focusout(function(){
              cekuserl();
            });
            $("#email").focusout(function(){
              cekemail1();
            });

          });

          function cekpass1(){
            if($("#password").val().length < 5){
              $("#showpass").show();
              $("#galoading").hide();
            }else{
              $("#showpass").hide();
              $("#galoading").show();
            }
          }

          function cekpass2(){
            if($("#password").val() != $("#repass").val()){
              $("#showpass1").show();
              $("#galoading").hide();
            }else{
              $("#showpass1").hide();
              $("#galoading").show();
            }
          }

          $("#loading").hide();
        function aksiku(){
          // alert('sdfsdf');
            var data = new FormData(document.getElementById('upload_form'));
            // e.preventDefault();
              if($("#nama_lengkap").val() == ""){
                pesanGagal('Nama Lengkap Kosong !');
              }else if($("#jenis_kelamin").val() == ""){
                pesanGagal('Pilih Jenis Kelamin');
              }else if($("#nomer").val() == ""){
                pesanGagal('Masukkan Nomer Anda');
              }else{
                $.ajax({
                  type: 'POST',
                  url: '<?php echo base_url('register/auth_wisatawan') ?>?',
                  data: data,
                  contentType: false,
                  cache: false,
                  processData:false,
                  beforeSend: function(){
                    $("#loading").show();
                    $("#galoading").hide();
                  },
                  success: function(msg){
                      $('.statusMsg').html('');
                      if(msg == 'sukses'){
                          $('#upload_form')[0].reset();
                          showSuccessMessage2('Sukses Mendaftar !');
                          //   setTimeout(function(){
                          //    window.location.reload(1);
                          // }, 2000);
                      }else{
                          pesanGagal(msg);
                      }
                      $("#loading").hide();
                    $("#galoading").show();
                  }
              });
              }
          }
        </script>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
