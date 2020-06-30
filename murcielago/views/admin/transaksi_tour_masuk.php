<div class="main-content">
        <section class="section">
          <div class="section-header">
            <div class="section-header-back">
              <a href="features-posts.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Data Transaksi Masuk</h1>
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
                    <h4>Data Transaksi Masuk</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $this->session->flashdata('alert'); ?>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Pemesan</th>
                          <th>Paket Pilihan</th>
                          <th>Tanggal Di Mulai</th>
                          <th>Jumlah Peserta</th>
                          <th>Total Harga</th>
                          <th>Status Transaksi</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $no = 0;
                        $cari_guide = $this->m_data->where('guide',array('id_user' => $user->id))->row();
                        $transaksi_masuk = $this->m_data->transaksi_masuk($cari_guide->id_guide)->result();
                        foreach($transaksi_masuk as $t){
                        $no++;
                        $user_pesan = $this->m_data->where('users',array('id' => $t->id_user))->row();
                         ?>
                        <tr>
                          <td><?php echo $no ?></td>
                          <td><?php echo $user_pesan->first_name ?></td>
                          <td>
                            <?php echo $t->nama_paket ?>
                          </td>
                          <td><?php echo date('d-m-Y',strtotime($t->tanggal_dimulai)) ?></td>
                          <td>
                            <b style="font-size:15px;"><?php echo $t->jumlah_peserta ?></b>
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal<?php echo $no ?>"><i class="fa fa-eye"></i></button>
                          </td>
                          <td>
                            <b>Rp <?php echo number_format($t->total_harga) ?></b>
                          </td>
                          <th>Menunggu Konfirmasi Anda</th>
                          <td>
                            <button type="button" class="btn btn-success btn-sm" name="button"><i class="fa fa-check"></i></button>
                            <button type="button" class="btn btn-danger btn-sm" name="button"><i class="fa fa-times"></i></button>
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
      $no = 0;
      $cari_guide = $this->m_data->where('guide',array('id_user' => $user->id))->row();
      $transaksi_masuk = $this->m_data->transaksi_masuk($cari_guide->id_guide)->result();
      foreach($transaksi_masuk as $t){
      $no++;
      $user_pesan = $this->m_data->where('users',array('id' => $t->id_user))->row();
       ?>
       <div class="modal fade" tabindex="-1" role="dialog" id="myModal<?php echo $no ?>">
 		  <div class="modal-dialog modal-lg">
 		    <div class="modal-content">

 		      <!-- Modal Header -->
 		      <div class="modal-header">
 		        <h4 class="modal-title">Data Peserta</h4>
 		        <button type="button" class="close" data-dismiss="modal">&times;</button>
 		      </div>

 		      <!-- Modal body -->
 		      <div class="modal-body">
 		        <div class="row">
 		        	 <?php
 		         $peserta_transaksi =  $this->m_data->where('peserta_transaksi',array('id_transaksi' => $t->id_transaksi))->result();
                       $no=0;
                       foreach($peserta_transaksi as $p){ $no++;
                        ?>
                       <div class="col-6">
                       	<div class="alert alert-secondary" style="color: #000 !important;">
                       		<span class="badge badge-info">Peserta <?php echo $no ?></span>
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
 	                    </div>

                       </div>
                     <?php } ?>
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
     <?php
     $no = 0;
     $cari_guide = $this->m_data->where('guide',array('id_user' => $user->id))->row();
     $transaksi_masuk = $this->m_data->transaksi_masuk($cari_guide->id_guide)->result();
     foreach($transaksi_masuk as $t){
     $no++;
     $user_pesan = $this->m_data->where('users',array('id' => $t->id_user))->row();
      ?>
      <div class="modal fade" tabindex="-1" role="dialog" id="myModalxzx<?php echo $no ?>">
     <div class="modal-dialog modal-lg">
       <div class="modal-content">

         <!-- Modal Header -->
         <div class="modal-header">
           <h4 class="modal-title">Verifikasi Transaksi</h4>
           <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>

         <!-- Modal body -->
         <div class="modal-body">

         </div>

         <!-- Modal footer -->
         <div class="modal-footer">
           <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
         </div>
       </div>
     </div>
   </div>
    <?php } ?>
