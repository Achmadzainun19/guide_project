  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<div class="content-wrapper">
    <div class="container">
      <!-- Main content -->
      <section class="content">

    <!--     <div class="col-sm-2">
          
        </div> -->
        <?php 
        $cari_di_peserta = $this->m_data->where('peserta_transaksi',array('id_transaksi' => $transaksi->id_transaksi))->num_rows();
       ?>
       <?php 
       if($cari_di_peserta == $transaksi->jumlah_peserta){
        ?>
        <form method="post" action="<?php echo base_url('p/sys_paynext_u') ?>">
      <?php }else{ ?>
        <form method="post" action="<?php echo base_url('p/sys_paynext') ?>">
      <?php } ?>
          <div class="col-sm-8">
            
              <div class="box box-default" style="border:none;box-shadow:2px 2px 10px -3px #b1b1b1; ">
                <div class="box-header with-border">
                  <h3 class="" style="font-weight: 300;padding:0.2vw">Data Peserta</h3>
                </div>
                <div class="box-body" style="padding: 1.5vw;">
                  <!-- <div class="form-horizontal"> -->
                    <?php 
                    
                    if($cari_di_peserta == $transaksi->jumlah_peserta){
                    $cari_di_pesertax = $this->m_data->where('peserta_transaksi',array('id_transaksi' => $transaksi->id_transaksi))->result();
                    $no=0;
                    foreach($cari_di_pesertax as $c){ $no++;
                     ?>
                    <div class="col-md-12">
                      <h3 style="font-weight: 600">PESERTA <?php echo $no ?></h3>
                       <div class="col-md-4">
                        <input type="hidden" name="id_transaksi" value="<?php echo $transaksi->id_transaksi ?>">
                        <input type="hidden" name="slug_transaksi" value="<?php echo $transaksi->slug_transaksi ?>">
                        <input type="hidden" name="id_peserta[]" value="<?php echo $c->id_peserta ?>">
                          <div class="form-group">
                            <label>Panggilan</label>
                            <select class="form-control select2" name="panggilan[]" required>
                              <option value="">Pilih Panggilan</option>
                              <option value="Nyonya" <?php echo ($c->panggilan == 'Nyonya') ? 'selected' : '' ?>>Nyonya</option>
                              <option value="Tuan" <?php echo ($c->panggilan == 'Tuan') ? 'selected' : '' ?>>Tuan</option>
                              <option value="Nona" <?php echo ($c->panggilan == 'Nona') ? 'selected' : '' ?>>Nona</option>
                            </select>
                          </div>
                      </div>
                      <div class="col-md-8">
                        <div class="form-group">
                          <label>Nama Lengkap</label>
                           <input name="nama_lengkapx[]" type="text" class="form-control" required value="<?php echo $c->nama_lengkap ?>">
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Indentitas</label>
                           <select class="form-control select2" name="identitas[]" required>
                                <option value="">Pilih Identitas</option>
                                <option value="Paspor" <?php echo ($c->identitas == 'Paspor') ? 'selected' : '' ?>>Paspor</option>
                                <option value="KTP" <?php echo ($c->identitas == 'KTP') ? 'selected' : '' ?>>KTP</option>
                              </select>
                        </div>
                      </div>
                      <div class="col-md-8">
                        <div class="form-group">
                          <label>Nomor Identitas</label>
                           <input name="nomor_identitas[]" type="number" class="form-control" required value="<?php echo $c->no_identitas ?>">
                        </div>
                      </div>
                  <!-- </div> -->
                </div>
                    <?php } ?>
                    
                    <?php }else{ ?>
  <?php 
                    for ($i=1; $i <= $transaksi->jumlah_peserta ; $i++) { 
                     ?>
                    <div class="col-md-12">
                      <h3 style="font-weight: 600">PESERTA <?php echo $i ?></h3>
                       <div class="col-md-4">
                        <input type="hidden" name="id_transaksi" value="<?php echo $transaksi->id_transaksi ?>">
                        <input type="hidden" name="slug_transaksi" value="<?php echo $transaksi->slug_transaksi ?>">
                          <div class="form-group">
                            <label>Panggilan</label>
                            <select class="form-control select2" name="panggilan[]" required>
                              <option value="">Pilih Panggilan</option>
                              <option value="Nyonya">Nyonya</option>
                              <option value="Tuan">Tuan</option>
                              <option value="Nona">Nona</option>
                            </select>
                          </div>
                      </div>
                      <div class="col-md-8">
                        <div class="form-group">
                          <label>Nama Lengkap</label>
                           <input name="nama_lengkapx[]" type="text" class="form-control" required>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Indentitas</label>
                           <select class="form-control select2" name="identitas[]" required>
                                <option value="">Pilih Identitas</option>
                                <option value="Paspor">Paspor</option>
                                <option value="KTP">KTP</option>
                              </select>
                        </div>
                      </div>
                      <div class="col-md-8">
                        <div class="form-group">
                          <label>Nomor Identitas</label>
                           <input name="nomor_identitas[]" type="number" class="form-control" required>
                        </div>
                      </div>
                  <!-- </div> -->
                </div>
                    <?php } ?>
                    <?php } ?>
                  

                <div class="col-md-12">
                  <hr>
                </div>
                
              </div>
            </div>
          
            <div class="box box-default" style="border:none;box-shadow:2px 2px 10px -3px #b1b1b1; ">
                  <div class="box-header with-border">
                    <h3 class="" style="font-weight: 300;padding:0.2vw">Detail Pemesanan</h3>
                  </div>
                  <div class="box-body" style="padding: 1.5vw;">
                    <!-- <div class="form-horizontal"> -->
                      <p>NB: Data di bawah ini diambil dari data akun anda.</p>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Nama Lengkap</label>
                           <input name="nama_lengkap" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Email</label>
                           <input name="emailx" type="email" class="form-control" >
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Tanggal Lahir</label>
                           <input name="tanggal_lahir" type="text" class="form-control" id="datepicker" placeholder="Tanggal Lahir" data-date-format="yyyy-mm-dd">
                        </div>
                      </div>
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
              
                  <div class="box-body" style="padding: 1.5vw;">
                    <button class="btn btn-primary btn-flat btn-block"><b>PEMBAYARAN</b></button>                
                  </div>
                </div>
          </div>          

        </form>


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