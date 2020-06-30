<div class="postList">
  <?php
    $no=$this->input->post('page');
    if(!empty($posts)): foreach($posts as $p):
    $no++;
    ?>
  <div class="col-md-4">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title" style="text-transform: uppercase;font-weight: 600"><?php echo $p->judul_blog ?></h3>

          <div class="box-tools pull-right">
            <!-- <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button> -->
          </div>
        </div>
        <div class="box-body">
          <center>
            <img src="<?php echo base_url('uploads/artikel/'.$p->gambar_blog.'') ?>" style="width: 220px;">
          </center>
          <hr>

          <div class="col-sm-12">
            <p><?php echo substr(ucfirst(strip_tags($p->deskripsi_blog)),0,100) ?> ...</p>
          </div>
          <div class="col-sm-12">
            <button class="btn btn-primary btn-sm btn-flat btn-block">Lihat Selengkapnya</button>
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

</div>
