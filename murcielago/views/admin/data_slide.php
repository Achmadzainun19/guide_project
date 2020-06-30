<div class="main-content">
        <section class="section">
          <div class="section-header">
            <div class="section-header-back">
              <!-- <a href="javascript:void(0)" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a> -->
            </div>
            <h1>Data Slide</h1>
            <div class="section-header-breadcrumb">
              <a href="<?php echo base_url('ntfs/tambah_slide') ?>" class="btn btn-primary" name="button">Tambah Slide</a>
              <!-- <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Posts</a></div>
              <div class="breadcrumb-item">Create New Post</div> -->
            </div>
          </div>
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Slide</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $this->session->flashdata('alert'); ?>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Gambar Slide</th>
                          <th>Opsi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $no=0;
                        foreach($slide as $s){
                        $no++;
                        ?>
                        <tr>
                          <td><?php echo $no ?></td>
                          <td style="padding:8px">
                            <img src="<?php echo base_url('uploads/slide/'.$s->gambar_slide.'') ?>" class="img-responsive" style="width:200px;">
                          </td>
                          <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalxx<?php echo $no ?>"><i class="fas fa-edit"></i></button>
                            <a href="<?php echo base_url('ntfs/hapus_slide/'.$s->id_slide.'') ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                          </td>
                        </tr>
                      <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <?php
        $no=0;
        foreach($slide as $s){
        $no++;
        ?>
        <div class="modal fade" tabindex="-2" role="dialog" id="myModalxx<?php echo $no ?>">
         <div class="modal-dialog modal-lg">
           <div class="modal-content">
             <!-- Modal Header -->
             <div class="modal-header">
               <h4 class="modal-title">Edit Artikel</h4>
               <button type="button" class="close" data-dismiss="modal">&times;</button>
             </div>
             <!-- Modal body -->
             <div class="modal-body">
              <div class="container">
                <div class="col-md-12">

                  <form method="post" enctype="multipart/form-data" action="<?php echo base_url('ntfs/update_slide/') ?>">
                    <input type="hidden" name="id_slide" value="<?php echo $s->id_slide ?>">
                    <input type="hidden" name="gambarx" value="<?php echo $s->gambar_slide ?>">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right">Gambar Slide</label>
                      <div class="col-sm-12">
                          <input type="file" name="gambar" id="files" class="dropify" data-max-file-size="3M"  data-allowed-file-extensions="png jpg" />
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <div class="col-sm-12">
                        <button class="btn btn-primary">Update Slide</button>
                      </div>
                    </div>
                 </form>
                </div>
              </div>
             </div>
             <!-- Modal footer -->
             <div class="modal-footer">
               <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
             </div>
           </div>
         </div>
       </div>
      <?php } ?>

      </div>
