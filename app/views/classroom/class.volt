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
      <div style="height: 190px;width: 95%; background-repeat: no-repeat;
                background-size: cover;
                border-radius: 10px; position: relative;
                background-image: url('https://gstatic.com/classroom/themes/img_backtoschool.jpg');">
          <span style="text-align: left; color:white;position: absolute;bottom: 0;left: 0; margin-left: 20px;">
            <h3>Kelas CSS Dasar</h3>
            <h5>This page is just an example for you to create your own page.</h5>
          </span>
      </div>
    </center>


  <section class="section">
    
    <?php 
        // $this->flashSession->output(); 
        // echo '<pre>';
        // print_r($Classroom);
        // echo '</pre>';
    ?>

    <div class="section-body">
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
    </div>
  </section>
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
  