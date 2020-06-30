  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<div class="content-wrapper">
    <div class="container">
      <!-- Main content -->
      <section class="content">

    <!--     <div class="col-sm-2">
          
        </div> -->
        <!-- <form method="post" action=""> -->

          <div class="col-sm-8">
            <div class="box box-default" style="border:none;box-shadow:2px 2px 10px -3px #b1b1b1; ">
                  <div class="box-header with-border">
                    <h3 class="" style="font-weight: 300;padding:0.2vw">Konfirmasi Pemesanan</h3>
                  </div>
                  <div class="box-body" style="padding: 1.5vw;">
                    <!-- <div class="form-horizontal"> -->
                      <div class="callout callout-success" style="background-color: #f8f8f8 !important;color: #2d3436 !important;">
                        <h4>Angger Pangestu Ari</h4>

                       <div class="row">
                          <div class="col-md-6">
                            <small style="font-weight: 600;color:#636e72">Email</small>
                            <p>angger.pangestu.ari@gmail.com</p>
                          </div>
                          <div class="col-md-6">
                            <small style="font-weight: 600;color:#636e72">Nomor Telepon</small>
                            <p>08113711998</p>
                          </div>
                       </div>
                      </div>

                      <div class="col-md-12">
                        <h4>Data Peserta</h4>
                      </div>
                      <?php 
                      $no=0;
                      foreach($peserta_transaksi as $p){ $no++;
                       ?>
                      <div class="col-md-6">
                        <div class="box box-default" style="border:none;background-color: #f8f8f8 !important; ">
                          <div class="box-body" style="padding: 1.5vw;">
                            <!-- <div class="form-horizontal"> -->
                              <span class="label label-primary">Peserta <?php echo $no ?></span>
                              <h4 style="font-weight: 600;"><?php echo $p->panggilan ?> <?php echo $p->nama_lengkap ?></h4>
                              <div class="row">
                                <div class="col-md-6">
                                  <small style="font-weight: 600;color:#636e72">TIPE</small>
                                  <p><?php echo $p->identitas ?></p>
                                </div>
                                <div class="col-md-6">
                                  <small style="font-weight: 600;color:#636e72">Nomor Identitas</small>
                                  <p><?php echo $p->no_identitas ?></p>
                                </div>
                             </div>
                            <!-- </div> -->
                          </div>
                        </div>
                      </div>
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
                <div class="box box-default" style="border:none;box-shadow:2px 2px 10px -3px #b1b1b1; ">
              
                  <div class="box-body" style="padding: 1.5vw;">
                      <a href="<?php echo base_url('p/upload_pembayaran/'.$transaksi->slug_transaksi.'') ?>" class="btn btn-primary btn-flat btn-block"><b>BAYAR SEKARANG</b></a>
                  </div>
                </div>
          </div>          

        <!-- </form> -->


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