<div class="main-content">
        <section class="section">
          <div class="section-header">
            <div class="section-header-back">
              <a href="javascript:void(0)" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Data Wisata</h1>
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
                    <h4>Data Wisata</h4>
                  </div>
                  <div class="card-body">
                    <?php echo validation_errors(); ?>
                    <?php echo $this->session->flashdata('alert'); ?>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Wisata</th>
                          <th>Alamat Wisata</th>
                          <th>Deskripsi Wisata</th>
                          <th>Gambar Wisata</th>
                          <th>Wisata Bagian</th>
                          <th>Opsi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $no=0;
                        foreach($wisata as $w){
                        $no++;
                        ?>
                        <tr>
                          <td><?php echo $no ?></td>
                          <td><?php echo $w->nama_wisata ?></td>
                          <td><?php echo $w->alamat ?></td>
                          <td>
                            <button type="button" class="btn btn-info" name="button" data-toggle="modal" data-target="#myModalx<?php echo $no ?>"><i class="fas fa-eye"></i></button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-success" name="button" data-toggle="modal" data-target="#myModalxx<?php echo $no ?>"><i class="fas fa-eye"></i></button>
                          </td>
                          <td><?php echo $w->wisata_bagian ?></td>
                          <td>
                            <button type="button" class="btn btn-primary" name="button"  data-toggle="modal" data-target="#myModalxxx<?php echo $no ?>"><i class="fas fa-edit"></i></button>
                            <a href="<?php echo base_url('ntfs/hapus_wisata/'.$w->id_wisata.'') ?>" class="btn btn-danger" name="button"><i class="fas fa-trash"></i></a>
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
        foreach($wisata as $w){
        $no++;
        ?>
        <div class="modal fade" tabindex="-2" role="dialog" id="myModalx<?php echo $no ?>">
         <div class="modal-dialog modal-lg">
           <div class="modal-content">
             <!-- Modal Header -->
             <div class="modal-header">
               <h4 class="modal-title">Deskripsi Wisata</h4>
               <button type="button" class="close" data-dismiss="modal">&times;</button>
             </div>
             <!-- Modal body -->
             <div class="modal-body">
              <div class="container">
                <div class="row">
                  <p><?php echo $w->deskripsi ?></p>
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
              <h4 class="modal-title">Gambar Wisata</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
              <div class="row">
                <div class="col-12">
                  <center>
                    <img src="<?php echo base_url('uploads/wisata/'.$w->gambar.'') ?>" class="img-responsive">
                  </center>
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
      <div class="modal fade" tabindex="-2" role="dialog" id="myModalxxx<?php echo $no ?>">
       <div class="modal-dialog modal-lg">
         <div class="modal-content">
           <!-- Modal Header -->
           <div class="modal-header">
             <h4 class="modal-title">Edit Wisata</h4>
             <button type="button" class="close" data-dismiss="modal">&times;</button>
           </div>
           <!-- Modal body -->
           <div class="modal-body">
            <div class="container">
              <div class="col-md-12">

                <form method="post" enctype="multipart/form-data" action="<?php echo base_url('ntfs/update_wisata/') ?>">
                  <input type="hidden" name="id_wisata" value="<?php echo $w->id_wisata ?>">
                  <input type="hidden" name="gambarx" value="<?php echo $w->gambar ?>">
                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right">Nama Wisata</label>
                    <div class="col-sm-12">
                      <input type="text" class="form-control" name="nama_wisata" value="<?php echo $w->nama_wisata ?>">
                  </div>
                 </div>
                 <div class="form-group row mb-4">
                   <label class="col-form-label text-md-right">Alamat Wisata</label>
                   <div class="col-sm-12">
                     <input type="text" class="form-control" name="alamat_wisata" value="<?php echo $w->alamat ?>">
                 </div>
                </div>
                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right">Thumbnail Sekarang</label>
                    <div class="col-sm-12">
                      <img src="<?php echo base_url('uploads/wisata/'.$w->gambar.'') ?>" class="img-responsive" style="width:500px;">
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
                    <label class="col-form-label text-md-right">Deskripsi Wisata</label>
                    <div class="col-sm-12">
                      <textarea class="summernote-simple" name="deskripsi"><?php echo $w->deskripsi ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right">Nama Wisata</label>
                    <div class="col-sm-12">
                      <select class="form-control selectric" name="wisata_bag">
                        <option>Pilih Wisata Bagian</option>
                        <option value="Banyuwangi Selatan" <?php echo ($w->wisata_bagian == 'Banyuwangi Selatan') ? 'selected' : '' ?>>Banyuwangi Selatan</option>
                        <option value="Banyuwangi Utara" <?php echo ($w->wisata_bagian == 'Banyuwangi Utara') ? 'selected' : '' ?>>Banyuwangi Utara</option>
                      </select>
                  </div>
                 </div>
                  <div class="form-group row mb-4">
                    <div class="col-sm-12">
                      <button class="btn btn-primary">Update Wisata</button>
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
