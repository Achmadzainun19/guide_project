<div class="main-content">
        <section class="section">
          <div class="section-header">
            <div class="section-header-back">
              <a href="javascript:void(0)" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Data Artikel</h1>
          <!--   <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Posts</a></div>
              <div class="breadcrumb-item">Create New Post</div>
            </div> -->
          </div>
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Artikel</h4>
                  </div>
                  <div class="card-body">
                    <?php echo validation_errors(); ?>
                    <?php echo $this->session->flashdata('alert'); ?>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Judul Artikel</th>
                          <th>Gambar Thumbnail</th>
                          <th>Deskripsi Artikel</th>
                          <th>Opsi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $no=0;
                        foreach($artikel as $a){
                        $no++;
                        ?>
                        <tr>
                          <td><?php echo $no ?></td>
                          <td><?php echo $a->judul_blog ?></td>
                          <td style="padding:8px;">
                            <img src="<?php echo base_url('uploads/artikel/'.$a->gambar_blog.'') ?>" class="img-responsive" style="width:200px;">
                          </td>
                          <td>
                            <button type="button" class="btn btn-info" name="button" data-toggle="modal" data-target="#myModalx<?php echo $no ?>"><i class="fas fa-eye"></i></button>
                          </td>
                          <td>
                            <button type="button" name="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalxx<?php echo $no ?>">Edit</button>
                            <a href="<?php echo base_url('ntfs/delete_artikel/'.$a->id_blog.'') ?>" name="button" class="btn btn-danger">Delete</a>
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
        foreach($artikel as $a){
        $no++;
        ?>
        <div class="modal fade" tabindex="-2" role="dialog" id="myModalx<?php echo $no ?>">
         <div class="modal-dialog modal-lg">
           <div class="modal-content">
             <!-- Modal Header -->
             <div class="modal-header">
               <h4 class="modal-title">Deskripsi Artikel</h4>
               <button type="button" class="close" data-dismiss="modal">&times;</button>
             </div>
             <!-- Modal body -->
             <div class="modal-body">
              <div class="container">
                <div class="row">
                  <p><?php echo $a->deskripsi_blog ?></p>
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

                 <form method="post" enctype="multipart/form-data" action="<?php echo base_url('ntfs/update_artikel/') ?>">
                   <input type="hidden" name="id_blog" value="<?php echo $a->id_blog ?>">
                   <div class="form-group row mb-4">
                     <label class="col-form-label text-md-right">Judul Artikel</label>
                     <div class="col-sm-12">
                       <input type="text" class="form-control" name="judul_blog" value="<?php echo $a->judul_blog ?>">
                   </div>
                  </div>
                   <div class="form-group row mb-4">
                     <label class="col-form-label text-md-right">Thumbnail Sekarang</label>
                     <div class="col-sm-12">
                       <img src="<?php echo base_url('uploads/artikel/'.$a->gambar_blog.'') ?>" class="img-responsive" style="width:500px;">
                     </div>
                   </div>
                   <div class="form-group row mb-4">
                     <label class="col-form-label text-md-right">Thumbnail</label>
                     <div class="col-sm-12">
                         <input type="file" name="gambar" id="files" class="dropify" data-max-file-size="3M"  data-allowed-file-extensions="png jpg" />
                     </div>
                     <small>NB: kosongi jika tidak ingin update gambar thumbnails</small>
                   </div>
                   <div class="form-group row mb-4">
                     <label class="col-form-label text-md-right">Deskripsi Artikel</label>
                     <div class="col-sm-12">
                       <textarea class="summernote-simple" name="deskripsi"><?php echo $a->deskripsi_blog ?></textarea>
                     </div>
                   </div>
                   <div class="form-group row mb-4">
                     <div class="col-sm-12">
                       <button class="btn btn-primary">Update Artikel</button>
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
