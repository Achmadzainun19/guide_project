<div class="main-content">
        <section class="section">
          <div class="section-header">
            <div class="section-header-back">
              <a href="features-posts.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Data Paket Wisata</h1>
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
                    <h4>Data Paket Wisata</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $this->session->flashdata('alert'); ?>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Paket wisata</th>
                          <th>Durasi Paket Wisata</th>
                          <th>Harga Paket Wisata</th>
                          <th>Gambar Paket Wisata</th>
                          <th>Jadwal Perjalanan</th>
                          <th>Syarat & Ketentuan</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <?php
                          $no=0;
                          $cari_guide = $this->m_data->where('guide',array('id_user' => $user->id))->row();
                          $cari_paket = $this->m_data->where('paket_wisata',array('id_guide' => $cari_guide->id_guide))->result();
                          foreach($cari_paket as $c){
                          $no++;
                           ?>
                          <td><?php echo $no ?></td>
                          <td><?php echo $c->nama_paket ?></td>
                          <td><?php echo $c->durasi_wisata ?> Hari</td>
                          <td>Rp <?php echo number_format($c->harga_paket) ?> / Pax</td>
                          <td>
                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModalxz<?php echo $no ?>"><i class="fa fa-eye"></i> Lihat Gambar</button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModalxzx<?php echo $no ?>"><i class="fa fa-eye"></i> Lihat Jadwal</button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModalxzxx<?php echo $no ?>"><i class="fa fa-eye"></i> Cek Syarat & Ketentuan</button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModalxzxxx<?php echo $no ?>"><i class="fa fa-edit"></i></button>
                            <a href="<?php echo base_url('guide/hapus_paket/'.$c->id_paket.'') ?>" class="btn btn-danger btn-sm" name="button"><i class="fa fa-trash"></i></a>
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
      </div>
      <?php
      $no=0;
      $cari_guide = $this->m_data->where('guide',array('id_user' => $user->id))->row();
      $cari_paket = $this->m_data->where('paket_wisata',array('id_guide' => $cari_guide->id_guide))->result();
      foreach($cari_paket as $c){
      $no++;
       ?>
       <div class="modal fade" tabindex="-2" role="dialog" id="myModalxz<?php echo $no ?>">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Gambar Paket Wisata</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <form action="<?php echo base_url('guide/update_gambar/') ?>" enctype="multipart/form-data" method="post">
                <input type="hidden" name="id_paket" value="<?php echo $c->id_paket ?>">
                <div class="row">
                  <div class="col-12">
                    <center>
                      <img src="<?php echo base_url('uploads/wisata/'.$c->gambar_wisata.'') ?>" alt="" style="width:500px;">
                    </center>
                  </div>
                </div>
                <hr>
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Gambar Paket Wisata</label>
                  <div class="col-sm-12 col-md-7">
                      <input type="file" name="gambar" id="files" required class="dropify" data-max-file-size="3M"  data-allowed-file-extensions="png jpg" />
                      <small>Jika anda ingin mengganti gambar langsung saja cari gambar yang anda inginkan lalu klik update gambar . Jika tidak biarkan saja.</small>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-sm" name="button">Update Gambar</button>
                  </div>
                </div>
              </form>

            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

          </div>
        </div>
      </div>
     <?php } ?>
     <?php
     $no=0;
     $cari_guide = $this->m_data->where('guide',array('id_user' => $user->id))->row();
     $cari_paket = $this->m_data->where('paket_wisata',array('id_guide' => $cari_guide->id_guide))->result();
     foreach($cari_paket as $c){
     $no++;
      ?>
      <div class="modal fade" tabindex="-2" role="dialog" id="myModalxzx<?php echo $no ?>">
       <div class="modal-dialog modal-lg">
         <div class="modal-content">

           <!-- Modal Header -->
           <div class="modal-header">
             <h4 class="modal-title">Jadwal Paket Wisata</h4>
             <button type="button" class="close" data-dismiss="modal">&times;</button>
           </div>

           <!-- Modal body -->
           <div class="modal-body">
             <form action="<?php echo base_url('guide/update_jadwal/') ?>" method="post">
               <input type="hidden" name="id_paket" value="<?php echo $c->id_paket ?>">
               <div class="row">
                 <div class="col-12">
                   <?php echo $c->jadwal_paket ?>
                 </div>
               </div>
               <hr>
               <div class="form-group row mb-4">
                 <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jadwal Perjalanan Paket Wisata</label>
                 <div class="col-sm-12 col-md-9">
                   <textarea class="summernotejadwalx" name="jadwal">
                     <?php echo $c->jadwal_paket ?>
                   </textarea>
                   <a href="<?php echo base_url('guide/download_file_contoh') ?>" target="_blank" class="btn btn-info btn-sm" name="button">Download Contoh Jadwal</a>
                 </div>
               </div>
               <div class="row">
                 <div class="col-12">
                   <button type="submit" class="btn btn-primary btn-sm" name="button">Update Jadwal</button>
                 </div>
               </div>
             </form>

           </div>
           <!-- Modal footer -->
           <div class="modal-footer">
             <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
           </div>

         </div>
       </div>
     </div>
    <?php } ?>
    <?php
    $no=0;
    $cari_guide = $this->m_data->where('guide',array('id_user' => $user->id))->row();
    $cari_paket = $this->m_data->where('paket_wisata',array('id_guide' => $cari_guide->id_guide))->result();
    foreach($cari_paket as $c){
    $no++;
     ?>
     <div class="modal fade" tabindex="-2" role="dialog" id="myModalxzxx<?php echo $no ?>">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Syarat & Ketentuan</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <form action="<?php echo base_url('guide/update_syarat/') ?>" method="post">
              <input type="hidden" name="id_paket" value="<?php echo $c->id_paket ?>">
              <div class="row">
                <div class="col-12">
                  <?php echo $c->syarat_ketentuan ?>
                </div>
              </div>
              <hr>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Syarat & Ketentuan</label>
                <div class="col-sm-12 col-md-9">
                  <textarea class="summernotex" name="syarat">
                    <?php echo $c->syarat_ketentuan ?>
                  </textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <button type="submit" class="btn btn-primary btn-sm" name="button">Update Syarat</button>
                </div>
              </div>
            </form>

          </div>
          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>

        </div>
      </div>
    </div>
   <?php } ?>
   <?php
   $no=0;
   $cari_guide = $this->m_data->where('guide',array('id_user' => $user->id))->row();
   $cari_paket = $this->m_data->where('paket_wisata',array('id_guide' => $cari_guide->id_guide))->result();
   foreach($cari_paket as $c){
   $no++;
    ?>
    <div class="modal fade" tabindex="-2" role="dialog" id="myModalxzxxx<?php echo $no ?>">
     <div class="modal-dialog modal-lg">
       <div class="modal-content">

         <!-- Modal Header -->
         <div class="modal-header">
           <h4 class="modal-title">Edit Paket Wisata</h4>
           <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>

         <!-- Modal body -->
         <div class="modal-body">
           <form action="<?php echo base_url('guide/update_data_paket') ?>" method="post">
             <input type="hidden" name="id_paket" value="<?php echo $c->id_paket ?>">
             <div class="form-group row mb-4">
               <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Paket Wisata</label>
               <div class="col-sm-12 col-md-7">
                 <input type="text" class="form-control" name="nama_wisata" value="<?php echo $c->nama_paket ?>">
               </div>
             </div>
             <div class="form-group row mb-4">
               <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Durasi Wisata</label>
               <div class="col-sm-12 col-md-7">
                   <div class="input-group mb-3">
                     <input type="number" name="durasi_wisata" class="form-control" value="<?php echo $c->durasi_wisata ?>">
                     <div class="input-group-append">
                       <span class="input-group-text">Hari</span>
                     </div>
                   </div>
               </div>
             </div>
             <div class="form-group row mb-4">
               <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Harga Paket Wisata / Pax</label>
               <div class="col-sm-12 col-md-7">
                 <input type="number" class="form-control" name="harga_wisata" value="<?php echo $c->harga_paket ?>">
               </div>
             </div>
             <div class="form-group row mb-4">
               <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
               <div class="col-sm-12 col-md-7">
                 <button class="btn btn-primary">Update Wisata</button>
               </div>
             </div>
           </form>
         </div>
         <!-- Modal footer -->
         <div class="modal-footer">
           <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
         </div>

       </div>
     </div>
   </div>
  <?php } ?>
