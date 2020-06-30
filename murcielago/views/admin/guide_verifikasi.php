<div class="main-content">
        <section class="section">
          <div class="section-header">
            <div class="section-header-back">
              <a href="javascript:void(0)" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Verifikasi Guide</h1>
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
                    <h4>Verifikasi Guide</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $this->session->flashdata('alert') ?>
                      <div class="table-responsive">
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Nama Guide</th>
                              <th>Jenis Kelamin</th>
                              <th>Alamat</th>
                              <th>Bahasa Yang Dikuasai</th>
                              <th>Foto</th>
                              <th>Foto KTP</th>
                              <th>Foto Licensi Guide</th>
                              <th>Verifikasi</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            $no=0;
                            foreach($guide as $g){
                            $no++;
                             ?>
                             <tr>
                               <td><?php echo $no ?></td>
                               <td><?php echo $g->first_name ?></td>
                               <td><?php echo ($g->jenis_kelamin == 1) ? 'Laki - Laki' : 'Perempuan' ?></td>
                               <td><?php echo $g->alamat ?></td>
                               <td><?php echo $g->bahasa_dikuasai ?></td>
                               <td>
                                 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalx<?php echo $no ?>"><i class="fas fa-eye"></i></button>
                               </td>
                               <td>
                                 <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModalxx<?php echo $no ?>"><i class="fas fa-eye"></i></button>
                               </td>
                               <td>
                                 <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModalxxx<?php echo $no ?>"><i class="fas fa-eye"></i></button>
                               </td>
                               <td>
                                 <a href="<?php echo base_url('ntfs/acc_guide/'.$g->id_guide.'/ok') ?>" class="btn btn-success" name="button"><i class="fa fa-check"></i></a>
                                 <a href="<?php echo base_url('ntfs/acc_guide/'.$g->id_guide.'/no') ?>" class="btn btn-danger" name="button"><i class="fa fa-ban"></i></a>
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
          </div>
        </section>
        <?php
        $no=0;
        foreach($guide as $g){
        $no++;
         ?>
         <div class="modal fade" tabindex="-2" role="dialog" id="myModalx<?php echo $no ?>">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Foto Guide</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <!-- Modal body -->
              <div class="modal-body">
               <div class="container">
                 <div class="row">
                   <img src="<?php echo $g->foto_profil ?>" class="img-responsive">
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
               <h4 class="modal-title">Foto KTP Guide</h4>
               <button type="button" class="close" data-dismiss="modal">&times;</button>
             </div>
             <!-- Modal body -->
             <div class="modal-body">
              <div class="container">
                <div class="row">
                  <img src="<?php echo $g->foto_ktp ?>" class="img-responsive">
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
              <h4 class="modal-title">Foto Licensi Guide</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
             <div class="container">
               <div class="row">
                 <img src="<?php echo $g->licensi_guide ?>" class="img-responsive">
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
