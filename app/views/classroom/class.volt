{% extends 'layouts/template_dashboard.volt' %}

{% block content %}
<!-- Main Content -->
<div class="main-content" >
    <nav class="navbar navbar-secondary navbar-expand-lg">
        <div class="container">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a href="#" data-toggle="dropdown" class="nav-link"><i class="fas fa-fire"></i><span>Forum</span></a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link"><i class="far fa-file-alt"></i><span>Tugas Kelas</span></a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link"><i class="far fa-clone"></i><span>List Mahasiswa</span></a>
            </li>
            </ul>
        </div>
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin-right: 20px;">
          <i class="fas fa-pen"></i> Sesuaikan
        </button>
    </nav>

    <center>
      <div style="height: 190px;width: 100%; background-repeat: no-repeat;
                background-size: cover;
                border-radius: 10px; position: relative;
                background-image: url('https://gstatic.com/classroom/themes/img_backtoschool.jpg');">
          <span style="text-align: left; color:white;position: absolute;bottom: 0;left: 0; margin-left: 20px;">
            <h3>Kelas Html Dasar</h3>
            <h5>This page is just an example for you to create your own page.</h5>
          </span>
      </div>
    </center><br>


    
    <?php 
        // $this->flashSession->output(); 
        // echo '<pre>';
        // print_r($Classroom);
        // echo '</pre>';
    ?>

      <div class="row">
        <div class="col-12 col-sm-3 col-md-3 col-lg-3">

          <div class="card">
            <div class="card-body">
              <p>Kode kelas</p>
              <h4>asd34as</h4>
            </div>
          </div>

          <div class="card">
            <div class="card-header">
              <h4>Tugas </h4>
            </div>
            <div class="card-body">
              <p>Tidak ada tugas yang perlu segera diselesaikan</p>
            </div>
            <div class="card-footer bg-white">
                <div class="article-cta" style="text-align: right;">
                  <a href="classroom/classForum/1c3961">Masuk Kelas <i class="fas fa-chevron-right"></i></a>
                </div>
              </div>
          </div>

        </div>
        <div class="col-12 col-sm-9 col-md-9 col-lg-9">

          <div class="card">
            <div class="card-body">
              <p>
                <img alt="image" class="mr-3 rounded-circle" width="40" src="<?php echo BASE_URL; ?>public/assets/img/avatar/avatar-1.png">
                <a class="btn btn-primary collapsed" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                  Umumkan sesuatu ke kelas Anda
                </a>
              </p>
              <hr>
              <div class="collapse" id="collapseExample" style="">
                          <div class="row">
                            <div class="col-12">
                              <div class="card">
                                <div class="card-body">
                                  <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Materi</label>
                                    <div class="col-sm-12 col-md-7">
                                      <input type="text" class="form-control">
                                    </div>
                                  </div>
                                  <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi Materi</label>
                                    <div class="col-sm-12 col-md-7">
                                      <textarea class="summernote-simple"></textarea>
                                    </div>
                                  </div>
                                  <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                      <button class="btn btn-primary">Posting</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
              </div>
            </div>
          </div>

          <div class="card">
              <div class="card-header">
                <h4>Daftar Materi</h4>
              </div>
              <div class="card-body">
                <ul class="list-unstyled user-progress list-unstyled-border list-unstyled-noborder">
                  <li class="media">
                    <img alt="image" class="mr-3 rounded-circle" width="50" src="<?php echo BASE_URL; ?>public/assets/img/avatar/avatar-1.png">
                    <div class="media-body">
                      <div class="media-title">Belajar Header Html</div>
                      <div class="text-job text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, </div>
                    </div>
                    <!-- <div class="media-progressbar">
                      <div class="progress-text"> Progres 30%</div>
                      <div class="progress" data-height="6" style="height: 6px;">
                        <div class="progress-bar bg-primary" data-width="30%" style="width: 30%;"></div>
                      </div>
                    </div> -->
                    <div class="media-cta">
                      <a href="#" class="btn btn-outline-primary">Detail</a>
                    </div>
                  </li>
                  <li class="media">
                    <img alt="image" class="mr-3 rounded-circle" width="50" src="<?php echo BASE_URL; ?>public/assets/img/avatar/avatar-5.png">
                    <div class="media-body">
                      <div class="media-title">Irwansyah Saputra</div>
                      <div class="text-job text-muted">Web Developer</div>
                    </div>
                    <div class="media-progressbar">
                      <div class="progress-text"> Progres 67%</div>
                      <div class="progress" data-height="6" style="height: 6px;">
                        <div class="progress-bar bg-primary" data-width="67%" style="width: 67%;"></div>
                      </div>
                    </div>
                    <div class="media-cta">
                      <a href="#" class="btn btn-outline-primary">Detail</a>
                    </div>
                  </li>
                  <li class="media">
                    <img alt="image" class="mr-3 rounded-circle" width="50" src="<?php echo BASE_URL; ?>public/assets/img/avatar/avatar-4.png">
                    <div class="media-body">
                      <div class="media-title">Hasan Basri</div>
                      <div class="text-job text-muted">Web Developer</div>
                    </div>
                    <div class="media-progressbar">
                      <div class="progress-text"> Progres 45%</div>
                      <div class="progress" data-height="6" style="height: 6px;">
                        <div class="progress-bar bg-primary" data-width="45%" style="width: 45%;"></div>
                      </div>
                    </div>
                    <div class="media-cta">
                      <a href="#" class="btn btn-outline-primary">Detail</a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>

        </div>

        
      </div>


</div>

<div class="modal fade" id="exampleModal">
  <div class="modal-dialog" role="document">
    <form action="classroom/addClass" method="POST">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Sesuaikan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <div class="form-group">
            <label>Nama Kelas</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fas fa-plus"></i>
                </div>
              </div>
              <input type="text" class="form-control" placeholder="Nama Kelas" name="class_name">
            </div>
          </div>
          <div class="form-group">
            <label>Diskripsi Kelas</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fas fa-book"></i>
                </div>
              </div>
              <textarea class="form-control" name="class_description" style="height: 112px;" placeholder="Diskripsi Kelas"></textarea>
            </div>
          </div>

        </div>
        <div class="modal-footer bg-whitesmoke br">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </form>
  </div>
</div>

{% endblock %}
  