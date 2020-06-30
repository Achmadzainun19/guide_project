  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<div class="content-wrapper">
    <div class="container">
      <!-- Main content -->
      <section class="content">

    <!--     <div class="col-sm-2">
          
        </div> -->

        <div class="col-sm-8">
          <div class="box">
                  <div class="box-header with-border">
                    <h2 style="text-transform: uppercase;font-weight: 600;padding: 0;margin:0;"><?php echo $paket->nama_paket ?></h2>
                    <!-- <h3 class="box-title" style="font-weight: 400;"><i>Rp 350.000</i></h3> -->
                    <div class="box-tools 0pull-right">
                      <!-- <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                              title="Collapse">
                        <i class="fa fa-minus"></i></button> -->
                    </div>
                  </div>
                  <div class="box-body">
                    <img src="<?php echo base_url('uploads/wisata/'.$paket->gambar_wisata.'') ?>" class="img-responsive img-thumbnail">
                    <hr>
                  
                   <div class="box-group" id="accordion">
                    <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                    <div class="panel box box-default">
                      <div class="box-header with-border">
                        <h4 class="box-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" class="collapsed" style="color: #2d3436;font-weight: 600">
                            INFORMASI PAKET & HARGA
                          </a>
                        </h4>
                      </div>
                      <div id="collapseOne" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                        <div class="box-body">
                          <p>
                            Yuk, ikut Mister menjelajahi keindahan Pulau Sangiang! Mister bakal ajak kamu snorkeling melihat keindahan pemandangan laut dan mengunjungi beberapa destinasi unik lainnya, seperti: Goa Kelelawar, Puncak Harapan, dan masih banyak lagi. Pesan sekarang juga!
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="panel box box-default">
                      <div class="box-header with-border">
                        <h4 class="box-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed" aria-expanded="false" style="color: #2d3436;font-weight: 600">
                            JADWAL PERJALANAN
                          </a>
                        </h4>
                      </div>
                      <div id="collapseTwo" class="panel-collapse collapse" aria-expanded="false">
                        <div class="box-body">
                         <p><strong>H 01 | Jakarta - Pelabuhan Paku (Tanpa Makan)</strong></p>

                            <ul>
                              <li><strong>22.00 – 22.30:</strong> Bertemu dengan tim kami di Plaza Festival/Plaza Semanggi menuju Pelabuhan Paku&nbsp;</li>
                              <li><strong>22.30 - 03.00:</strong> Perjalanan menuju Pelabuhan Paku.</li>
                            </ul>

                            <p><strong>H 02&nbsp;| Pelabuhan Paku - Pulau Sangiang (MS, MM)&nbsp;</strong></p>

                            <ul>
                              <li><strong>03.00 – 07.30:</strong>&nbsp;Istirahat sejenak di&nbsp;Pelabuhan Paku dan Persiapan menuju Pulau Sangiang</li>
                              <li><strong>07.30 – 08.30:</strong> Perjalanan menuju Pulau Sangiang untuk <em>snorkeling</em></li>
                              <li><strong>08.00 – 11.30:</strong>&nbsp;<em>Snorkeling</em></li>
                              <li><strong>11.30 – 15.00:</strong>&nbsp;<em>Check-in</em> di <em>homestay</em>, bersih-bersih, makan siang dan persiapan jelajah darat</li>
                              <li><strong>15.00 – 18.30:</strong>&nbsp;Jelajah darat (<strong>Goa Kelelawar, Puncak Harapan, Saung Tungku, Puncak Begal, dan Pantai Pasir Panjang</strong>)</li>
                              <li><strong>18.30 – 19.30:</strong>&nbsp;Menuju penginapan, makan malam, dan acara bebas.</li>
                            </ul>

                            <p><strong>H 03 | &nbsp;Pulau Sangiang - Jakarta&nbsp;(MS, MM)&nbsp;</strong></p>

                            <ul>
                              <li><strong>05.00 – 08.00:</strong>&nbsp;Bangun pagi, menikmati matahari terbit&nbsp;di Bukit Arjuna dan jelajah Pantai Pasir Panjang</li>
                              <li><strong>08.00 – 11.00:</strong>&nbsp;Sarapan, <em>packing,</em> dan persiapan pulang</li>
                              <li><strong>11.00 – 12.00:</strong>&nbsp;Menuju Pelabuhan Paku</li>
                              <li><strong>12.00 – 15.00:</strong>&nbsp;Tiba di Pelabuhan Paku, lanjut&nbsp;menuju Jakarta</li>
                              <li><strong>15.00</strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong>:</strong>&nbsp;Tiba di Jakarta. Tur selesai.</li>
                            </ul>

                        </div>
                      </div>
                    </div>
                    <div class="panel box box-default">
                      <div class="box-header with-border">
                        <h4 class="box-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed" aria-expanded="false" style="color: #2d3436;font-weight: 600">
                            SYARAT DAN KETENTUAN
                          </a>
                        </h4>
                      </div>
                      <div id="collapseThree" class="panel-collapse collapse" aria-expanded="false">
                        <div class="box-body">
                          <ol>
                            <li><em>Tanggal Tour Silahkan konfirmasi dengan kami</em></li>
                            <li><em>Mengingat keterbatasan penginapan di tempat wisata, untuk itu jika telah sepakat dengan harga penawaran</em><em>, </em><em>kami mohon segera mengkonfirmasi tanggal keberangkatan.</em></li>
                            <li><em>Pembayaran DP minimal 25% dari total biaya, dan dibayarkan pada saat konfirmasi tanggal keberangkatan. <strong>Jika terjadi pembatalan dari pihak tamu (wisatawan) DP hangus 100% atau tidak dapat diminta kembali. Jika pembatalan dilakukan oleh pihak kami, DP akan Kami kembalikan 100%</strong>.</em></li>
                            <li><em>Pelunasan biaya dibayar H-1 atau saat meeting point (tour akan dimulai). Jika pada saat hari H ternyata belum ada pelunasan maka tour tidak dapat dimulai sebelum pembayaran dilunasi.</em></li>
                            <li><em>Harga Tersebut belum/tidak termasuk biaya kebutuhan pribadi</em></li>
                            <li><em>Jika terdapat penambahan peserta atau pengurangan peserta mohon segera menginformasikan kepada kami untuk update harga.</em></li>
                            <li><em>Harga tersebut berlaku sejak penawaran ini diterbitkan</em> <em>dan sewaktu-waktu dapat berubah sesuai situasi dan kondisi</em></li>
                            </ol>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
             
                </div> 
        </div>

        <div class="col-sm-4">
          <!-- <h4>Booking</h4> -->
          <form method="post" action="<?php echo base_url('p/checkout_sys') ?>">
            <input type="hidden" name="id_paket" value="<?php echo $paket->id_paket ?>">
            <div class="box box-default" style="border:none;box-shadow:2px 2px 10px -3px #b1b1b1; ">
               
                <div class="box-body" style="padding: 0.5vw;">
                  <!-- <div class="form-horizontal"> -->
                    <div class="col-md-12">
                    <h3 style="font-weight: 600">Pilih Tanggal</h3>
                      <div class="form-group">
                         <input name="tgl_mulai" type="text" class="form-control" id="datepicker" placeholder="Pilih Tanggal" required data-date-format="yyyy-mm-dd">
                      </div>
                    </div>
                 <!--    <div class="col-md-6">
                      <div class="form-group">
                        <label>Tanggal Berakhir</label>
                         <input name="tgl_akhir" type="text" class="form-control" id="datepicker" placeholder="Tanggal Berakhir" required data-date-format="yyyy-mm-dd">
                      </div>
                    </div> -->
                  <!-- </div> -->
                </div>
              </div>
              <div class="box box-default" style="border:none;box-shadow:2px 2px 10px -3px #b1b1b1; ">
            
                <div class="box-body" style="padding: 1.5vw;">
                  <!-- <div class="form-horizontal"> -->
                    <div class="col-md-6">
                      <h4>Dewasa / Anak - Anak</h4>
                      <small><b>Rp <?php echo number_format($paket->harga_paket) ?> per pax</b></small>
                      <input type="hidden" name="harga_dewasa" value="<?php echo $paket->harga_paket ?>"> 
                    </div>
                    <div class="col-md-6">
                      <label style="visibility: hidden;">sdfsd</label>
                      <div class="input-group">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-danger btn-flat btn-number" disabled="disabled" data-type="minus" data-field="quant">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                        </span>
                        <input type="text" name="quant" class="form-control input-number" value="1" min="1" max="10">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-primary btn-flat btn-number" data-type="plus" data-field="quant">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>
                        </span>
                    </div>
                    </div>
                  <!-- </div> -->
                </div>
              </div>
             <!--  <div class="box box-default" style="border:none;box-shadow:2px 2px 10px -3px #b1b1b1; ">
            
                <div class="box-body" style="padding: 1.5vw;">
                    <div class="col-md-6">
                      <h4>Anak - Anak</h4>
                      <small><b>Rp <?php //echo number_format($paket->harga_anak) ?> per pax</b></small>
                      <input type="hidden" name="harga_anak" value="<?php //echo $paket->harga_anak ?>"> 
                    </div>
                    <div class="col-md-6">
                      <label style="visibility: hidden;">sdfsd</label>
                      <div class="input-group">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-danger btn-flat btn-number" disabled="disabled" data-type="minus" data-field="hitunganak">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                        </span>
                        <input type="text" name="hitunganak" class="form-control input-number" value="0" min="0" max="10">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-primary btn-flat btn-number" data-type="plus" data-field="hitunganak">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>
                        </span>
                    </div>
                    </div>
                </div>
              </div> -->
              <div class="box box-default" style="border:none;box-shadow:2px 2px 10px -3px #b1b1b1; ">
            
                <div class="box-body" style="padding: 1.5vw;">
                  <button class="btn btn-primary btn-flat btn-block"><b>PESAN SEKARANG</b></button>                
                </div>
              </div>
          </form>
          <div class="box box-default" style="border:none;box-shadow:2px 2px 10px -3px #b1b1b1; ">
                <div class="box-header with-border">
                  <center>
                  <h3 class="box-title" style="font-weight: 600;">Guide</h3>
                    
                  </center>
                <!--   <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                                    title="Collapse">
                              <i class="fa fa-minus"></i></button>
                          </div> -->
                </div>
                <div class="box-body" style="padding: 1.5vw;">
                  <!-- <div class="form-horizontal"> -->
                    <img src="<?php echo $guide->foto_profil ?>" class="img-responsive border-radius: 50%" style="width: 150px;margin: 0 auto">
                    <hr>
                    <center>
                      <?php 
                      $cari_user = $this->m_data->where('users',array('id' => $guide->id_user))->row();
                       ?>
                      <h4 style="font-weight: 600;margin: 0"><?php echo $cari_user->first_name ?></h4>
                      <small><i><?php echo $guide->alamat ?></i></small>
                      <br>
                      <small><i><?php echo $guide->bahasa_dikuasai ?></i></small>
                    </center>
                  <!-- </div> -->
                </div>
              </div>
        </div>

      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
<script type="text/javascript">
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