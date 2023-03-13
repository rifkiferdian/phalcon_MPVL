{% extends 'layouts/template_dashboard.volt' %}

{% block content %}
<!-- Main Content -->
<div class="main-content" style="padding-top: 80px;">
  <section class="section">
    
    <div class="section-header">
      <h1>Kelas Saya</h1> 
      <div class="section-header-breadcrumb">
        <!-- <div class="breadcrumb-item active"><a href="#">Dashboard</a></div> -->
        <!-- <div class="breadcrumb-item">Daftar Kelas</div> -->
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
          <i class="far fa-file-alt"></i> Buat Kelas
        </button>
      </div>
    </div>

    <?php 
        $this->flashSession->output(); 
        // echo '<pre>';
        // print_r($Classroom);
        // echo '</pre>';
    ?>

    <!-- <div class="section-body">
      <h2 class="section-title">This is Example Page</h2>
      <p class="section-lead">This page is just an example for you to create your own page.</p>
      <div class="card">
        <div class="card-header">
          <h4>Example Card</h4>
        </div>
        <div class="card-body">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="card-footer bg-whitesmoke">
          This is card footer
        </div>
      </div>
    </div> -->

    <!-- <div class="col-12 col-sm-6 col-md-6 col-lg-3">
      <article class="article article-style-b">
        <div class="article-header">
          <div class="article-image" data-background="assets/img/news/img13.jpg" style="background-image: url(&quot;assets/img/news/img13.jpg&quot;);">
          </div>
          <div class="article-badge">
            <div class="article-badge-item bg-danger"><i class="fas fa-fire"></i> 2 Tugas belum dikerjakan</div>
          </div>
        </div>

        <div class="article-details">
          <div class="article-user">
            <img alt="image" style="border-radius: 50%;float: left;width: 45px; margin-right: 15px;" src="assets/img/avatar/avatar-1.png">
            <div class="article-user-details">
              <div class="user-detail-name">
                <a href="#">Rifki Ahmad,   M.Kom</a>
              </div>
              <div class="text-job">Dosen Amikom</div>
            </div>
          </div>   
          <br>         
          <div class="article-title">
            <h2><a href="#">Kelas CSS Dasar</a></h2>
          </div>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
          <div class="article-cta">
            <a href="#">Masuk Kelas <i class="fas fa-chevron-right"></i></a>
          </div>
          
        </div>
      </article>
    </div> -->

    <?php foreach ($Classroom as $k): ?>
  
    <div class="row">

      <?php foreach ($k as $key => $v): ?>
      
        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
          <article class="article article-style-b">
            <div class="article-header">
              <div class="article-image" data-background="assets/img/news/<?= $v['class_thumbnail_picture'] ?>" style="background-image: url(&quot;assets/img/news/<?= $v['class_thumbnail_picture'] ?>&quot;);">
              </div>
            </div>

            <div class="article-details">
              <div class="article-user">
                <img alt="image" style="border-radius: 50%;float: left;width: 45px; margin-right: 15px;" src="assets/img/avatar/avatar-1.png">
                <div class="article-user-details">
                  <div class="user-detail-name">
                    <a href="#"><?= $v['first_name'] ?> <?= $v['last_name'] ?></a>
                  </div>
                  <div class="text-job">Dosen Amikom</div>
                </div>
              </div>   
              <br>         
              <div class="article-title">
                <h2><a href="classroom/classForum/<?= $v['class_code'] ?>"><?= $v['class_name'] ?></a></h2>
              </div>
              <p><?= $v['class_description'] ?></p>
              <div class="article-cta">
                <a href="classroom/classForum/<?= $v['class_code'] ?>">Masuk Kelas <i class="fas fa-chevron-right"></i></a>
              </div>
              
            </div>
          </article>
        </div>

      <?php endforeach ?>
      
    </div>

    <?php endforeach ?> 


    

  </section>
</div>

<div class="modal fade" id="exampleModal">
  <div class="modal-dialog" role="document">
    <form action="classroom/addClass" method="POST">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Tambah Kelas</h5>
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
  