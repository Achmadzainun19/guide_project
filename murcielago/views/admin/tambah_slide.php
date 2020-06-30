<div class="main-content">
        <section class="section">
          <div class="section-header">
            <div class="section-header-back">
              <a href="javascript:void(0)" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Tambah Slide</h1>
            <!-- <div class="section-header-breadcrumb">
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
                    <h4>Form Tambah Wisata</h4>
                  </div>
                  <div class="card-body">
                  	<?php echo $this->session->flashdata('alert'); ?>
                  	<form method="post" enctype="multipart/form-data" action="<?php echo base_url('ntfs/add_slide') ?>">
	                    <div class="form-group row mb-4">
	                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Gambar Slide</label>
	                      <div class="col-sm-12 col-md-7">
	                          <input type="file" name="gambar" id="files" required class="dropify" data-max-file-size="3M"  data-allowed-file-extensions="png jpg" />
	                      </div>
	                    </div>
	                    <div class="form-group row mb-4">
	                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
	                      <div class="col-sm-12 col-md-7">
	                        <button class="btn btn-primary">Tambah Slide</button>
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
