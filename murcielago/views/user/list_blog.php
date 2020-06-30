<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
function searchFilter(page_num) {
page_num = page_num?page_num:0;
var keywords = $('#keywords').val();
var sortBy = $('#sortBy').val();
$.ajax({
type: 'POST',
url: '<?php echo base_url(); ?>blog/ajaxPaginationData/'+page_num,
data:'page='+page_num+'&keywords='+keywords+'&sortBy='+sortBy,
beforeSend: function () {
$('.loading').show();
},
success: function (html) {
$('.postList').html(html);
$('.loading').fadeOut("slow");
}
});
}
</script>
<div class="content-wrapper">
    <div class="container">
      <!-- Main content -->
      <section class="content">

        <div class="row">
        <div class="col-md-3">
          <!-- Profile Image -->
          <!-- <h4></h4> -->
            <div class="box box-default" style="border:none;box-shadow:2px 2px 10px -3px #b1b1b1; ">
              <div class="box-header with-border">
                <h3 class="box-title" style="font-weight: 600">Pencarian</h3>
                <div class="box-tools pull-right">
                          <!-- <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                                  title="Collapse">
                            <i class="fa fa-minus"></i></button> -->
                        </div>
              </div>
              <div class="box-body" style="padding: 1.5vw;">
                <div class="form-horizontal">

                    <div class="form-group">
                      <div class="col-md-12">
                        <div class="form-group">
                          <input type="text" class="form-control" name="pencarian" id="keywords" placeholder="Pencarian .. " onkeyup="searchFilter()">
                        </div>
                      </div>
                    </div>


                </div>
              </div>
            </div>
            <div class="box box-default" style="border:none;box-shadow:2px 2px 10px -3px #b1b1b1; ">
              <div class="box-header with-border">
                <h3 class="box-title" style="font-weight: 600">Kategori</h3>
                <div class="box-tools pull-right">
                          <!-- <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                                  title="Collapse">
                            <i class="fa fa-minus"></i></button> -->
                        </div>
              </div>
              <div class="box-body" style="padding: 1.5vw;">
                <div class="form-horizontal">

                    <div class="form-group">
                      <div class="col-md-12">
                        <p>
                          <span class="label label-primary">UI Design</span>
                          <span class="label label-primary">UI Design</span>
                          <span class="label label-primary">UI Design</span>
                          <span class="label label-primary">UI Design</span>
                        </p>
                      </div>
                    </div>


                </div>
              </div>
            </div>
             <div class="box box-default" style="border:none;box-shadow:2px 2px 10px -3px #b1b1b1; ">
              <div class="box-header with-border">
                <h3 class="box-title" style="font-weight: 600">Urutkan Sesuai</h3>
                <div class="box-tools pull-right">
                          <!-- <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                                  title="Collapse">
                            <i class="fa fa-minus"></i></button> -->
                        </div>
              </div>
              <div class="box-body" style="padding: 1.5vw;">
                <div class="form-horizontal">

                    <select id="sortBy" class="form-control select2" onchange="searchFilter()">
                      <option value="">Terbaru</option>
                      <option value="asc">A-Z</option>
                      <option value="desc">Z-A</option>
                    </select>

                </div>
              </div>
            </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">

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







        </div>
        <!-- /.col -->
      </div>

      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
