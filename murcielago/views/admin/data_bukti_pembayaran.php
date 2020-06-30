<div class="main-content">
        <section class="section">
          <div class="section-header">
            <div class="section-header-back">
              <a href="features-posts.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Data Bukti Pembayaran</h1>
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
                    <h4>Data Bukti Pembayaran</h4>
                  </div>
                  <div class="card-body">
                  	 <table class="table table-bordered">
					    <thead>
					      <tr>
					        <th>No</th>
					        <th>Nama Pemesan</th>
					        <th>Tanggal Tour Dimulai</th>
					        <th>Total Harga</th>
					        <th>Peserta</th>
					        <th>Bukti Pembayaran</th>
					      </tr>
					    </thead>
					    <tbody>
					    	<?php
					    	$list_bukti = $this->m_data->list_bukti()->result();
					    	$no=0;
					    	foreach($list_bukti as $l){
					    	$no++;
					    	$cari_user = $this->m_data->where('users',array('id' => $l->id_user))->row();
					    	?>
					      <tr>
					        <td><?php echo $no ?></td>
					        <td><?php echo $cari_user->first_name ?></td>
					        <td><?php echo date('d-m-Y',strtotime($l->tanggal_transaksi)) ?></td>
					        <td>Rp <?php echo number_format($l->total_harga) ?></td>
					        <td><button class="btn btn-icon btn-success" data-toggle="modal" data-target="#myModal<?php echo $no ?>"><i class="fas fa-eye"></i></button></td>
					        <td><button class="btn btn-icon btn-primary" data-toggle="modal" data-target="#myModalxz<?php echo $no ?>"><i class="fas fa-eye"></i></button></td>
					      </tr>
					      <!-- The Modal -->

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
		$list_bukti = $this->m_data->list_bukti()->result();
		$no=0;
		foreach($list_bukti as $l){
		$no++;
		$cari_user = $this->m_data->where('users',array('id' => $l->id_user))->row();
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
		         $peserta_transaksi =  $this->m_data->where('peserta_transaksi',array('id_transaksi' => $l->id_transaksi))->result();
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
		<!-- //// -->

		<?php } ?>
		<?php
		$list_bukti = $this->m_data->list_bukti()->result();
		$no=0;
		foreach($list_bukti as $l){
		$no++;
		$cari_user = $this->m_data->where('users',array('id' => $l->id_user))->row();
		?>
		 <div class="modal fade" tabindex="-2" role="dialog" id="myModalxz<?php echo $no ?>">
		  <div class="modal-dialog modal-lg">
		    <div class="modal-content">

		      <!-- Modal Header -->
		      <div class="modal-header">
		        <h4 class="modal-title">Bukti Pembayaran</h4>
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		      </div>

		      <!-- Modal body -->
		      <div class="modal-body">
		      	 <table class="table">
				    <tbody>
				      <tr>
				        <td>Nama Bank </td>
				        <td><?php echo $l->nama_bank ?></td>
				      </tr>
				      <tr>
				        <td>Atas Nama</td>
				        <td><?php echo $l->atas_nama ?></td>
				      </tr>
				      <tr>
				        <td>Nomor Rekening</td>
				        <td><?php echo $l->no_rek ?></td>
				      </tr>
				    </tbody>
				  </table>
				  <img src="<?php echo base_url('uploads/bukti/'.$l->bukti.'') ?>" class="img-fluid">
				  <hr>
				  <div class="row">
				  	<div class="col-6">
              <form action="<?php echo base_url('ntfs/terima_bayar') ?>" method="post">
                <input type="hidden" name="email" value="<?php echo $cari_user->email ?>">
                <input type="hidden" name="nama_user" value="<?php echo $cari_user->first_name ?>">
                <input type="hidden" name="id_bukti" value="<?php echo $l->id_bukti ?>">
                <input type="hidden" name="nama_paket" value="<?php echo $l->nama_paket ?>">
                <!-- <input type="hidden" name="nomer_guide" value="<?php echo $l->phone ?>"> -->
                <input type="hidden" name="chat_id_guide" value="<?php echo $l->chat_id ?>">
                <button class="btn btn-primary btn-sm">Terima Pembayaran</button>
              </form>
				  	</div>
				  	<div class="col-6">
				  		<button class="btn btn-danger btn-sm">Tolak Pembayaran</button>
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
