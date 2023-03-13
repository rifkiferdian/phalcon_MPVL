<div id="app">
    <div class="main-wrapper container">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <a href="dashboard" class="navbar-brand sidebar-gone-hide">ViLab</a>
        <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
        <div class="nav-collapse">
          <a class="sidebar-gone-show nav-collapse-toggle nav-link" href="#">
            <i class="fas fa-ellipsis-v"></i>
          </a>
          <ul class="navbar-nav">
            <li class="nav-item"><a href="#" class="nav-link"><i class="far fa-clone"></i> Dashboard</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Calender</a></li>
            <!-- <li class="nav-item"><a href="#" class="nav-link">Server Status</a></li> -->
          </ul>
        </div>
        <form class="form-inline ml-auto">
          <ul class="navbar-nav">
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>          
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Messages
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-message">
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="<?php echo BASE_URL; ?>public/assets/img/avatar/avatar-1.png" class="rounded-circle">
                    <div class="is-online"></div>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Kusnaedi</b>
                    <p>Hello, Bro!</p>
                    <div class="time">10 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="<?php echo BASE_URL; ?>public/assets/img/avatar/avatar-2.png" class="rounded-circle">
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Dedik Sugiharto</b>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="<?php echo BASE_URL; ?>public/assets/img/avatar/avatar-3.png" class="rounded-circle">
                    <div class="is-online"></div>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Agung Ardiansyah</b>
                    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="<?php echo BASE_URL; ?>public/assets/img/avatar/avatar-4.png" class="rounded-circle">
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Ardian Rahardiansyah</b>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit ess</p>
                    <div class="time">16 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="<?php echo BASE_URL; ?>public/assets/img/avatar/avatar-5.png" class="rounded-circle">
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Alfa Zulkarnain</b>
                    <p>Exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                    <div class="time">Yesterday</div>
                  </div>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Notifications
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-icons">
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-icon bg-primary text-white">
                    <i class="fas fa-code"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Template update is available now!
                    <div class="time text-primary">2 Min Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-info text-white">
                    <i class="far fa-user"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>You</b> and <b>Dedik Sugiharto</b> are now friends
                    <div class="time">10 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-success text-white">
                    <i class="fas fa-check"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-danger text-white">
                    <i class="fas fa-exclamation-triangle"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Low disk space. Let's clean it!
                    <div class="time">17 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-info text-white">
                    <i class="fas fa-bell"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Welcome to Stisla template!
                    <div class="time">Yesterday</div>
                  </div>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="<?php echo BASE_URL; ?>public/assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block"><?= $this->session->first_name ?></div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Logged in 5 min ago</div>
              <a href="features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="features-activities.html" class="dropdown-item has-icon">
                <i class="fas fa-bolt"></i> Activities
              </a>
              <a href="features-settings.html" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="logout" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>

      <!-- <nav class="navbar navbar-secondary navbar-expand-lg">
        <div class="container">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a href="#" data-toggle="dropdown" class="nav-link"><i class="fas fa-fire"></i><span>Forum</span></a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link"><i class="far fa-heart"></i><span>Tugas Kelas</span></a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link"><i class="far fa-clone"></i><span>List Mahasiswa</span></a>
            </li>
          </ul>
        </div>
      </nav> -->
    
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
          <h5 class="modal-title">Modal title</h5>
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


      <footer class="main-footer">
        <div class="footer-left">
            Copyright &copy; VILAB <div class="bullet"></div> Created By <a href="https://github.com/rifkiferdian">Rifki Ahmad Perdian</a>
        </div>
        <div class="footer-right">
            
        </div>
        </footer>
    </div>
</div>