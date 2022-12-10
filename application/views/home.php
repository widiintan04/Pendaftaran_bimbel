<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="">Pendaftaran.</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="#">Beranda</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#contact">Komentar</a></li>
          <span class="nav-item">
				<a class="btn-solid-reg page-scroll" href="<?= base_url('login') ?>">Daftar</a>
            </span>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-2 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>Website bimbingan belajar </h1>
          <ul>
            <li><i class="p-large"></i> Selamat Datang di Pendaftaran Siswa Baru Online Bimbel  
            Perhatikan semua informasi mengenai pendaftaran sebelum anda mulai mendaftar. Apabila Anda belum mempunyai akun, 
            silahkan melakukan proses Daftar.</li>
          </ul>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="assets/img/hero-img.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <section id="about" class="about">
        <div class="container">
          <div class="row justify-content-between align-items-center">
           <center> <div class="col-lg-12">
              <div class="section_tittle">
                <!-- <p>our project</p> -->
                <h2>Binefit</h2>
              </div>
            </div>
            </center>
            
            
          </div>

                    <br><br>  <div class="row">
                  <?php foreach ($about as $km) { ?>
                <div class="col-md-4 col-sm-4 col-xs-6 mb-4">           
               <div class="card mr-4" style="width: 18rem;">
               <center> 
                  <img src="<?= base_url() ?>./assets/about/<?= $km->gambar ?>"
                   class="card-img-top mt-4 ml-2" 
                   style="width: 200px" alt="...">
                   </center>
                  <div class="card-body">
                    <h4 ><?= $km->judul ?></h4>
                    <p><?= $km->isi ?></p>
                    
                  </div>
                </div>
                </div>
            
                <!-- </center> -->
                <br> <br>
                  <?php } ?>
                


              </section>
        <!-- ======= Contact Section ======= --><br><br>
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          </div>
<center>
<?php if ($this->session->flashdata('success')) { ?>
                <div class="alert alert-success"><?= $this->session->flashdata(
                    'success'
                ) ?></div>
            <?php } elseif ($this->session->flashdata('error')) { ?>
                <div class="alert alert-danger"><?= $this->session->flashdata(
                    'error'
                ) ?></div>
            <?php } ?>

            <form action="<?= site_url('#contact/message') ?>" method="post">
              <div class="form-group">
                <input type="nama" name="nama" class="form-control" placeholder="Nama"  />
              </div><br>
              <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email"  />
              </div><br>
              <div class="form-group">
                <input type="subject" class="form-control" name="subject" placeholder="Subject"  />
              </div><br>
              <div class="form-group">
                <textarea class="form-control" name="isi" rows="5" placeholder="Isi Pesan" ></textarea>
              </div><br>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div><!-- End Contact Section -->