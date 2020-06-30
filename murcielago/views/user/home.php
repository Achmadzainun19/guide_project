<section id="services">
    <div class="container">
      <div class="heading wow fadeInUp">
        <div class="row">
          <div class="text-center col-sm-8 col-sm-offset-2">
            <h1>Kenapa Memilih Kami ?</h1>
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p> -->
          </div>
        </div>
      </div>
      <div class="text-center our-services">
        <div class="row">
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="service-icon">
              <i class="fa fa-laptop"></i>
            </div>
            <div class="service-info">
              <h3>Guide Profesional & Berpengalaman</h3>
              <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p> -->
            </div>
          </div>
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
            <div class="service-icon">
              <i class="fa fa-building-o"></i>
            </div>
            <div class="service-info">
              <h3>Pengalaman Seru</h3>
              <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p> -->
            </div>
          </div>
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms">
            <div class="service-icon">
              <i class="fa fa-bookmark"></i>
            </div>
            <div class="service-info">
              <h3>Memberikan Fasilitas Yang Terbaik</h3>
             <!--  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p> -->
            </div>
          </div>
          </div>
        </div>
      </div>
  </section>
  <section id="wisata" style="">
    <div class="container">
       <div class="heading wow fadeInUp">
        <div class="row">
          <div class="text-center col-sm-8 col-sm-offset-2">
            <h1>Paket Wisata</h1>
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p> -->
          </div>
        </div>
      </div>
      <div class="ct-section--products">
            <div class="row">
                <div class="col-md-8 col-lg-12">
                <div class="row">
                <?php
                    $paket_wisata = $this->m_data->semua('paket_wisata')->result();
                    $no=0;
                    foreach($paket_wisata as $p){
                    $no++;
                 ?>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="ct-itemProducts ct-u-marginBottom30 ct-hover">
                        <a href="<?php echo base_url('p/detail_paket/'.$p->slug.'') ?>">
                            <div class="ct-main-content">
                                <div class="ct-imageBox">
                                    <img src="<?php echo base_url('uploads/wisata/'.$p->gambar_wisata.'') ?>" alt=""><i class="fa fa-eye"></i>
                                </div>
                                <div class="ct-main-text">
                                    <div class="ct-product--tilte">
                                        <?php echo $p->nama_paket ?>
                                    </div>
                                    <div class="ct-product--price">
                                        <span>Rp <?php echo number_format($p->harga_paket) ?></span>
                                    </div>
                                    <div class="ct-product--description">
                                        <?php echo $p->detail_wisata ?>
                                    </div>
                                </div>
                            </div>
                            <div class="ct-product--meta">
                               <!--  <div class="ct-icons">
                                                    <span>
                                                        <i class="fa fa-bed"></i> 3
                                                    </span>
                                                    <span>
                                                        <i class="fa fa-cutlery"></i> 2
                                                    </span>
                                </div> -->
                                <div class="ct-text">
                                    <span> Durasi: <span><?php echo $p->durasi_wisata ?></span></span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <?php } ?>
                </div>

                </div>

            </div>
            <br>
            <div class="load-more wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
          <a href="#" class="btn-loadmore"><i class="fa fa-repeat"></i> Load More</a>
        </div>
        </div>
    </div>
  </section>
  <section id="team">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>Our Guides</h2>
          <p>Guide yang telah bermitra dengan kami</p>
        </div>
      </div>
      <div class="team-members">
        <div class="row">
            <?php
                $list_guide = $this->m_data->semua('guide')->result();
                $no=0;
                foreach($list_guide as $l){
                $no++;
                $cari_di_user = $this->m_data->where('users',array('id' => $l->id_user))->row();
             ?>
          <div class="col-sm-3">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
              <div class="member-image">
                <img class="img-responsive" src="<?php echo $l->foto_profil ?>" alt="">
              </div>
              <div class="member-info">
                <h3><?php echo $cari_di_user->first_name ?></h3>
                <h4>Bahasa di kuasai : <?php echo $l->bahasa_dikuasai ?></h4>
                <p></p>
              </div>
              <div class="social-icons">
                <ul>
                  <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                  <li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        <?php } ?>
        </div>
      </div>
      <br>
           <div class="load-more wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
          <a href="#" class="btn-loadmore"><i class="fa fa-repeat"></i> Load More</a>
        </div>
    </div>
  </section>
    <section id="alur" style="margin-top:-100px;">
    <div class="container">
       <div class="heading wow fadeInUp" style="margin-bottom:-45px;">
        <div class="row">
          <div class="text-center col-sm-8 col-sm-offset-2">
            <h1>Blog Post</h1>
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p> -->
          </div>
        </div>
      </div>
      <div class="blog-posts">
        <div class="row">
          <?php
          $no=0;
          foreach($post as $p){
          $no++;
          ?>
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">
            <div class="post-thumb">
              <a href="<?php echo base_url('blog/view_post/'.$p->slug.'') ?>"><img class="img-responsive img-responsive-guide" src="<?php echo base_url('uploads/artikel/'.$p->gambar_blog.'') ?>" alt="<?php echo $p->judul_blog ?>"></a>
              <!-- <div class="post-meta">
                <span><i class="fa fa-comments-o"></i> 3 Comments</span>
                <span><i class="fa fa-heart"></i> 0 Likes</span>
              </div> -->
              <!-- <div class="post-icon">
                <i class="fa fa-pencil"></i>
              </div> -->
            </div>
            <div class="entry-header">
              <h3><a href="<?php echo base_url('blog/view_post/'.$p->slug.'') ?>"><?php echo $p->judul_blog ?></a></h3>
              <span class="date"><?php echo date('F',strtotime($p->created)) ?>, <?php echo date('d Y',strtotime($p->created)) ?></span>
              <!-- <span class="cetagory">in <strong>Photography</strong></span> -->
            </div>
            <div class="entry-content">
              <p><?php echo substr(ucfirst(strip_tags($p->deskripsi_blog)),0,100) ?> ...</p>
            </div>
          </div>
        <?php } ?>
        </div>
        <div class="load-more wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
          <a href="<?php echo base_url('blog/post') ?>" class="btn-loadmore"><i class="fa fa-repeat"></i> Load More</a>
        </div>
      </div>
    </div>
  </section>
