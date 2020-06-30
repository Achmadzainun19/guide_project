<div class="main-content">
        <section class="section">
          <div class="section-header">
            <div class="section-header-back">
              <a href="features-posts.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Tambah Paket Wisata</h1>
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
                    <h4>Form Tambah Paket Wisata</h4>
                  </div>
                  <div class="card-body">
                  	<?php echo validation_errors(); ?>
                  	<?php echo $this->session->flashdata('alert'); ?>
                  	<form method="post" enctype="multipart/form-data" action="<?php echo base_url('guide/add_paket_wisata') ?>">
                  		<?php
                  		$guide = $this->m_data->where('guide',array('id_user' => $user->id))->row();
                  		 ?>
                  		<input type="hidden" name="id_guide" value="<?php echo $guide->id_guide ?>">
	                    <div class="form-group row mb-4">
	                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Paket Wisata</label>
	                      <div class="col-sm-12 col-md-7">
	                        <input type="text" class="form-control" name="nama_wisata">
	                      </div>
	                    </div>
	                    <div class="form-group row mb-4">
	                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Durasi Wisata</label>
	                      <div class="col-sm-12 col-md-7">
                            <div class="input-group mb-3">
                              <input type="number" name="durasi_wisata" class="form-control">
                              <div class="input-group-append">
                                <span class="input-group-text">Hari</span>
                              </div>
                            </div>
	                      </div>
	                    </div>
	                    <div class="form-group row mb-4">
	                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Informasi Paket Wisata</label>
	                      <div class="col-sm-12 col-md-7">
	                        <textarea id="summernoteinfo" name="deskripsi"></textarea>
	                      </div>
	                    </div>
                      <div class="form-group row mb-4">
	                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jadwal Perjalanan Paket Wisata</label>
	                      <div class="col-sm-12 col-md-7">
	                        <textarea id="summernotejadwal" name="jadwal"></textarea>
                          <a href="<?php echo base_url('guide/download_file_contoh') ?>" target="_blank" class="btn btn-primary btn-sm" name="button">Download Contoh Jadwal</a>
	                      </div>
	                    </div>
                      <div class="form-group row mb-4">
	                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Syarat & Ketentuan Paket Wisata</label>
	                      <div class="col-sm-12 col-md-7">
	                        <textarea class="summernotex" name="syarat"></textarea>
	                      </div>
	                    </div>
	                    <div class="form-group row mb-4">
	                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Harga Paket Wisata / Pax</label>
	                      <div class="col-sm-12 col-md-7">
	                        <input type="number" class="form-control" name="harga_wisata">
	                      </div>
	                    </div>
	                    <div class="form-group row mb-4">
	                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Thumbnail</label>
	                      <div class="col-sm-12 col-md-7">
	                          <input type="file" name="gambar" id="files" required class="dropify" data-max-file-size="3M"  data-allowed-file-extensions="png jpg" />
	                      </div>
	                    </div>
	                    <div class="form-group row mb-4">
	                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
	                      <div class="col-sm-12 col-md-7">
	                        <button class="btn btn-primary">Tambah Wisata</button>
	                      </div>
	                    </div>
					</form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
