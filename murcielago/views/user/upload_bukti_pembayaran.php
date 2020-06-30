  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<div class="content-wrapper">
    <div class="container">
      <!-- Main content -->
      <section class="content">

    <!--     <div class="col-sm-2">
          
        </div> -->

          <div class="col-sm-8">
            <div class="box box-default" style="border:none;box-shadow:2px 2px 10px -3px #b1b1b1; ">
                  <div class="box-header with-border">
                    <h3 class="" style="font-weight: 300;padding:0.2vw">Upload Bukti Pembayaran</h3>
                  </div>
                  <div class="box-body" style="padding: 1.5vw;">
                    <!-- <div class="form-horizontal"> -->
                      <?php 
                      $cari_bukti = $this->m_data->where('bukti_pembayaran',array('id_transaksi' => $transaksi->id_transaksi))->row();
                      if($cari_bukti){
                       ?>
                       <div class="callout callout-success">
                         <h4>Berhasil Upload Bukti Pembayaran ! . Mohon Tunggu 1x24 jam , anda akan mendapatkan notifikasi pembayaran lewat email pemesan tour. Mohon cek di Inbox / Spam anda.</h4>
                       </div>
                    <!-- <form enctype="multipart/form-data" id="upload_form1" method="post"> -->
                          <input type="hidden" name="id_transaksi" value="<?php echo $transaksi->id_transaksi ?>">
                            <div class="form-group">
                              <label>Bank Anda</label>
                              <input type="text" class="form-control" name="nama_bank" id="nama_bank" disabled value="<?php echo $cari_bukti->nama_bank ?>">
                              <small>contoh: BANK BNI</small>
                            </div>
                            <div class="form-group">
                              <label>Atas Nama</label>
                              <input type="text" class="form-control" name="atas_nama" id="atas_nama" disabled value="<?php echo $cari_bukti->atas_nama ?>">
                            </div>
                            <div class="form-group">
                              <label>Nomor Rekening</label>
                              <input type="number" class="form-control" name="no_rek" id="no_rek" disabled value="<?php echo $cari_bukti->no_rek ?>">
                            </div>
                            <div class="form-group">
                              <label class="control-label text-left" for="pas-foto">Foto</label>
                              <div class="input-group">
                                <span class="input-group-btn">
                                  <span class="btn btn-default btn-file">
                                      <i class="fa fa-camera"></i> <input type="file" name="file" id="imgInp" disabled> Pilih Gambar
                                  </span>
                                </span>
                                <input type="text" class="form-control" readonly>
                              </div>
                              <small>Extensi yang diperbolehkan : jpg,png</small>
                              <hr style="margin-top: 10px;margin-bottom: 0px;">
                              <img style="width: 31%; margin: 10px 0px;" id='img-upload' src="<?php echo base_url('uploads/bukti/'.$cari_bukti->bukti.'') ?>" />
                              <script type="text/javascript">
                              $(document).ready( function() {
                                $(document).on('change', '.btn-file :file', function() {
                                  var input = $(this),
                                  label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
                                  input.trigger('fileselect', [label]);
                                });
                                $('.btn-file :file').on('fileselect', function(event, label) {
                                  var input = $(this).parents('.input-group').find(':text'),
                                  log = label;
                                  if( input.length ) {
                                    input.val(log);
                                  } else {
                                    if( log ) alert(log);
                                  }
                                });
                                function readURL(input) {
                                  if (input.files && input.files[0]) {
                                    var reader = new FileReader();
                                    reader.onload = function (e) {
                                      $('#img-upload').attr('src', e.target.result);
                                    }
                                    reader.readAsDataURL(input.files[0]);
                                  }
                                }
                                $("#imgInp").change(function(){
                                  readURL(this);
                                });
                              });
                              </script>
                        </div>
                        <button id="galoading" type="button" class="btn btn-primary btn-flat btn-block disabled"><b>UPLOAD BUKTI</b></button>            
                       <!--  <button id="loading" class="btn btn-success btn-flat btn-block" disabled type="button"><b>LOADING</b>    <i class="fa fa-refresh fa-spin"></i> ... </button> -->
                      <!-- </form> -->
                     <?php }else{ ?>
                    <form enctype="multipart/form-data" id="upload_form1" method="post">
                      <input type="hidden" name="id_transaksi" value="<?php echo $transaksi->id_transaksi ?>">
                        <div class="form-group">
                          <label>Bank Anda</label>
                          <input type="text" class="form-control" name="nama_bank" id="nama_bank">
                          <small>contoh: BANK BNI</small>
                        </div>
                        <div class="form-group">
                          <label>Atas Nama</label>
                          <input type="text" class="form-control" name="atas_nama" id="atas_nama">
                        </div>
                        <div class="form-group">
                          <label>Nomor Rekening</label>
                          <input type="number" class="form-control" name="no_rek" id="no_rek">
                        </div>
                        <div class="form-group">
                          <label class="control-label text-left" for="pas-foto">Foto</label>
                          <div class="input-group">
                            <span class="input-group-btn">
                              <span class="btn btn-default btn-file">
                                  <i class="fa fa-camera"></i> <input type="file" name="file" id="imgInp"> Pilih Gambar
                              </span>
                            </span>
                            <input type="text" class="form-control" readonly>
                          </div>
                          <small>Extensi yang diperbolehkan : jpg,png</small>
                          <hr style="margin-top: 10px;margin-bottom: 0px;">
                          <img style="width: 31%; margin: 10px 0px;" id='img-upload'/>
                          <script type="text/javascript">
                          $(document).ready( function() {
                            $(document).on('change', '.btn-file :file', function() {
                              var input = $(this),
                              label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
                              input.trigger('fileselect', [label]);
                            });
                            $('.btn-file :file').on('fileselect', function(event, label) {
                              var input = $(this).parents('.input-group').find(':text'),
                              log = label;
                              if( input.length ) {
                                input.val(log);
                              } else {
                                if( log ) alert(log);
                              }
                            });
                            function readURL(input) {
                              if (input.files && input.files[0]) {
                                var reader = new FileReader();
                                reader.onload = function (e) {
                                  $('#img-upload').attr('src', e.target.result);
                                }
                                reader.readAsDataURL(input.files[0]);
                              }
                            }
                            $("#imgInp").change(function(){
                              readURL(this);
                            });
                          });
                          </script>
                    </div>
                    <button id="galoading" type="button" class="btn btn-primary btn-flat btn-block" onclick="aksiku()"><b>UPLOAD BUKTI</b></button>            
                    <button id="loading" class="btn btn-success btn-flat btn-block" disabled type="button"><b>LOADING</b>    <i class="fa fa-refresh fa-spin"></i> ... </button>
                      </form>
                     <?php } ?>
                    
                     
                    <!-- </div> -->
                  </div>
                </div>
          </div>
          <div class="col-sm-4">
            <!-- <h4>Booking</h4> -->
               <div class="panel panel-primary" style="border-radius: 2px;border:none;box-shadow:2px 2px 10px -3px #b1b1b1;">
                <div class="panel-heading" style="border-radius: 0;">
                  <h3 style="font-weight: 600;margin: 0"><?php echo $paket->nama_paket ?></h3>
                    <small><?php echo nama_hari($transaksi->tanggal_transaksi) ?> , <?php echo tgl_indo($transaksi->tanggal_transaksi) ?></small>
                  </div>
                <div class="panel-body">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td><b><?php echo $transaksi->jumlah_peserta ?> Pax</b> Dewasa / Anak - Anak</td>
                        <td><b>Rp <?php echo number_format($paket->harga_paket * $transaksi->jumlah_peserta) ?></b></td>
                      </tr>
                      
                      <?php 
                      $dewasa_c = $paket->harga_paket * $transaksi->jumlah_peserta;
                      $total_c = $dewasa_c;
                       ?>
                       <tr>
                        <td>SUBTOTAL</td>
                        <td><b>Rp <?php echo number_format($total_c) ?></b></td>
                      </tr>
                      <tr>
                        <td><b>TOTAL</b></td>
                        <td style="background-color: #b2bec3"><b>Rp <?php echo number_format($total_c) ?></b></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="box box-default" style="border:none;box-shadow:2px 2px 10px -3px #b1b1b1; ">
              <div class="box-header with-border">
                  <h3 class="box-title" style="font-weight: 600">Pembayaran</h3>
                  <div class="box-tools pull-right">
                            <!-- <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                                    title="Collapse">
                              <i class="fa fa-minus"></i></button> -->
                          </div>
                </div>
                  <div class="box-body" style="padding: 1.5vw;">
                    <h4>Transfer Via Bank BCA A/n PT. Sentosa Minyak Telon 333043563</h4>
                    <!--  <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                                <label for='r11' style='width: 350px;'>
                                  <input type='radio' id='r11' name='occupation' value='Working' required /> Working
                                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"></a>
                                </label>
                            </h4>
                          </div>
                          <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                              <p>HTML stands for HyperText Markup Language. HTML is the main markup language for describing the structure of Web pages. <a href="http://www.tutorialrepublic.com/html-tutorial/" target="_blank">Learn more.</a></p>
                            </div>
                          </div>
                        </div>
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class=panel-title>
                                <label for='r12' style='width: 350px;'>
                                  <input type='radio' id='r12' name='occupation' value='Not-Working' required /> Not Working
                                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"></a>
                                </label>
                            </h4>
                          </div>
                          <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                              <p>Bootstrap is a powerful front-end framework for faster and easier web development. It is a collection of CSS and HTML conventions. <a href="http://www.tutorialrepublic.com/twitter-bootstrap-tutorial/" target="_blank">Learn more.</a></p>
                            </div>
                          </div>
                        </div>
                      </div>  -->              
                  </div>
                </div>
          </div>          

        <!-- </form> -->
        <script type="text/javascript">
          $("#loading").hide();
        function aksiku(){
            var data = new FormData(document.getElementById('upload_form1'));
              if($("#nama_bank").val() == ""){
                pesanGagal('Nama Bank Kosong !');
              }else if($("#atas_nama").val() == ""){
                pesanGagal('Atas Nama Kosong !');
              }else if($("#no_rek").val() == ""){
                pesanGagal('Nomor Rekening Kosong !');
              }else{
                $.ajax({
                type: 'POST',
                url: '<?php echo base_url('p/upload_bukti_sys') ?>?',
               dataType: 'json',
                data:data,
                mimeType: "multipart/form-data",
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function(){
                  $("#loading").show();
                  $("#galoading").hide();
                },
                // success: function(msg){
                //     $('.statusMsg').html('');
                //     if(msg == 'sukses'){
                //         $('#upload_form')[0].reset();
                //         showSuccessMessage2('Sukses Mendaftar !');
                //         //   setTimeout(function(){
                //         //    window.location.reload(1);
                //         // }, 2000);
                //     }else{
                //         pesanGagal(msg);
                //     }
                    
                // }
                success:function(data,status){
                      if (data.status!='error') {
                      showSuccessMessage2('Berhasil Upload Bukti Pembayaran ! . Mohon Tunggu 1x24 jam , anda akan mendapatkan notifikasi pembayaran lewat email pemesan tour. Mohon cek di Inbox / Spam anda.');
                              }else{
                                pesanGagal(data.msg);
                              }
                              $("#loading").hide();
                  $("#galoading").show();
                    },
            });
              }
          }
        </script>

      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
<script type="text/javascript">
  $('#r11').on('click', function(){
  $(this).parent().find('a').trigger('click')
})

$('#r12').on('click', function(){
  $(this).parent().find('a').trigger('click')
})
  //plugin bootstrap minus and plus
//http://jsfiddle.net/laelitenetwork/puJ6G/
$('.btn-number').click(function(e){
    e.preventDefault();
    
    fieldName = $(this).attr('data-field');
    type      = $(this).attr('data-type');
    var input = $("input[name='"+fieldName+"']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if(type == 'minus') {
            
            if(currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            } 
            if(parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }

        } else if(type == 'plus') {

            if(currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
            }
            if(parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(0);
    }
});
$('.input-number').focusin(function(){
   $(this).data('oldValue', $(this).val());
});
$('.input-number').change(function() {
    
    minValue =  parseInt($(this).attr('min'));
    maxValue =  parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());
    
    name = $(this).attr('name');
    if(valueCurrent >= minValue) {
        $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    if(valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the maximum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    
    
});
$(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
</script>