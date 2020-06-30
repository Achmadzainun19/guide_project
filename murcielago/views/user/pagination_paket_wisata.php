<div class="postList">
            <?php
              $no=$this->input->post('page');
              if(!empty($posts)): foreach($posts as $p):
              $no++;
              ?>
            <div class="col-md-4">
                <div class="box">
                  <div class="box-header with-border">
                    <h3 class="box-title" style="text-transform: uppercase;font-weight: 600"><?php echo $p->nama_paket ?></h3>

                    <div class="box-tools pull-right">
                      <!-- <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                              title="Collapse">
                        <i class="fa fa-minus"></i></button> -->
                    </div>
                  </div>
                  <div class="box-body">
                    <center>
                      <img src="<?php echo base_url('uploads/wisata/'.$p->gambar_wisata.'') ?>" style="width: 220px;">
                    </center>
                    <hr>

                    <div class="col-sm-8">
                      <p style="font-weight: 500;font-size: 15px;">Mulai Dari</p>
                      <h4 style="font-weight: 600;">IDR <?php echo number_format($p->harga_paket) ?></h4>
                    </div>
                    <div class="col-sm-4">
                      <button class="btn btn-primary btn-sm btn-flat">Lihat</button>
                    </div>
                    <!-- <div class="col-sm-6">
                      <span style="font-size: 10px;color: #666;">19 Desember 2019</span>
                    </div>

                    <div class="col-sm-6">
                      <span style="font-size: 10px;color: #666">19 Desember 2019</span>
                    </div> -->
                  </div>
               <!--    <div class="box-footer">

                  </div> -->
                </div>

          </div>
 <?php endforeach; else: ?>
                <div class="container">
                <div class="row">
                 <p>Tidak Ada Data</p>
                </div>
                </div>
                <?php endif; ?>
                <div class="col-md-12">
<?php echo $this->ajax_pagination->create_links(); ?>

                </div>
