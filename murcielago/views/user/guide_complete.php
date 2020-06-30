  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<div class="content-wrapper">
    <div class="container">
      <!-- Main content -->
      <section class="content">

          <div class="box box-default" style="border:none;box-shadow:2px 2px 10px -3px #b1b1b1; ">
            <div class="box-body" style="padding: 0.8vw 1.5vw 1.25vw 1.5vw;">
              <h3 style="font-weight: 500; text-align: center;">Lengkapi Akun Guide Anda</h3>
              <hr>

              <form enctype="multipart/form-data" id="upload_form" method="post">
                <?php 
                $user_login = $this->ion_auth->user()->row();
                 ?>
                <input type="hidden" name="id_user" value="<?php echo $user_login->id ?>">
                  <div class="col-sm-4">
                  <div class="form-group" id="foto">
                    <label>Foto Profil</label>
                    <input type="file" name="files[]" id="files" required class="dropify" data-max-file-size="3M"  data-allowed-file-extensions="pdf png jpg" />
                    <!-- <p class="notiffoto"></p> -->
                  </div>
                </div>

                <div class="col-sm-4">
                  <div class="form-group" id="foto">
                    <label>Foto KTP</label>
                    <input type="file" name="files[]" id="files" required class="dropify" data-max-file-size="3M"  data-allowed-file-extensions="pdf png jpg" />
                    <!-- <p class="notiffoto"></p> -->
                  </div>
                </div>

                <div class="col-sm-4">
                  <div class="form-group" id="foto">
                    <label>Licensi Guide</label>
                    <input type="file" name="files[]" id="files" required class="dropify" data-max-file-size="3M"  data-allowed-file-extensions="pdf png jpg" />
                    <!-- <p class="notiffoto"></p> -->
                  </div>
                </div>
                <?php 
                $cek_stat = $this->m_data->where('guide',array('id_user' => $user_login->id))->row();
                if($cek_stat->stat_prof == 1){
                 ?>
<button disabled class="btn btn-success btn-flat btn-sm btn-block" type="button" onclick="aksiku()"><b>UPLOAD</b></button>
<small>Akun anda sedang di verifikasi tunggu dalam 1x24 jam .</small>

               <?php }else{ ?>
<button id="galoading" class="btn btn-success btn-flat btn-sm btn-block" type="button" onclick="aksiku()"><b>UPLOAD</b></button>
                 <button id="loading" class="btn btn-success btn-flat col-sm-3" disabled type="button"><b>LOADING</b>    <i class="fa fa-refresh fa-spin"></i> ... </button>
               <?php } ?>
                
              </form>
            </div>
          </div>
<script type="text/javascript">
          $("#loading").hide();

          function aksiku(){
          // alert('sdfsdf');
            var data = new FormData(document.getElementById('upload_form'));
            // e.preventDefault();
             var totalfiles = document.getElementById('files').files.length;
   for (var index = 0; index < totalfiles; index++) {
      data.append("files[]", document.getElementById('files').files[index]);
   }
               $.ajax({
                  type: 'POST',
                  url: '<?php echo base_url('guide/sys_complete') ?>?',
dataType: 'json',
                 data:data,
                    // mimeType: "multipart/form-data",
                    contentType: false,
                    cache: false,
                    processData: false,
                  beforeSend: function(){
                    $("#loading").show();
                    $("#galoading").hide();
                  },
                  success: function(msg){
                    // alert(msg);
                    // alert('1. ('+msg.gmbr1+') 2. ('+msg.gmbr2+') 3. ('+msg.gmbr3+')');
                    // showSuccessMessage2(msg);
                      // $('.statusMsg').html('');
                      // if(msg == 'sukses'){
                      //     $('#upload_form')[0].reset();
                          showSuccessMessage2(msg);
                            setTimeout(function(){
                             window.location.reload(1);
                          }, 2000);
                      // }else{
                          // pesanGagal(msg);
                      // }
                      $("#loading").hide();
                    $("#galoading").show();
                  }
              });
          }
</script>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
