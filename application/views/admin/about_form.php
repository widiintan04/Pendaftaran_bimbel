
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="http://localhost/pendaftaran_bimbel/assets/template/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="http://localhost/pendaftaran_bimbel/assets/template/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Dashboard</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    
    <!-- Bootstrap core CSS     -->
    <link href="http://localhost/pendaftaran_bimbel/assets/template/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="http://localhost/pendaftaran_bimbel/assets/template/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="http://localhost/pendaftaran_bimbel/assets/template/css/paper-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="http://localhost/pendaftaran_bimbel/assets/template/css/demo.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="http://localhost/pendaftaran_bimbel/assets/http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="http://localhost/pendaftaran_bimbel/assets/template/css/themify-icons.css" rel="stylesheet">

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

<div class="sidebar-wrapper">

            <div class="logo">
                <a href="" class="simple-text">
                    Dashboard
                </a>
                
            </div>

            <ul class="nav">
                <li><br>
                    <a class='active-menu'                             href="http://localhost/pendaftaran_bimbel/admin/dashboard">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p><br>
                    </a>
                    
                </li>
                <li>
                <a                               href="http://localhost/pendaftaran_bimbel/admin/about">
                        <i class="ti-view-list-alt"></i>
                        <p>About</p><br>
                    </a>
                </li>
                <li>
                    <a                               href="http://localhost/pendaftaran_bimbel/admin/pendaftar">
                        <i class="ti-view-list-alt"></i>
                        <p>pendaftar</p><br>
                    </a>
                </li>
                <li>
                    <a                               href="http://localhost/pendaftaran_bimbel/admin/message">
                        <i class="ti-view-list-alt"></i>
                        <p>komentar</p><br>
                    </a>
                </li>
                </li>
            </ul>
    	</div>
    </div>
    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                            <div style="color: white;
                padding 20px 2px 10px 30px;
                float: right;
                font-size: 16px;">  &nbsp;
                <a href="http://localhost/pendaftaran_bimbel/admin/login" 
                class="btn btn-danger square-btn-adjust"
                onclick="return confirm('Apakah anda ingin logout ?')">Logout</a> </div>
            </div>
        </nav>   


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
        
        <?php if ($this->session->flashdata('success')) { ?>
            <div class="alert alert-success"><?= $this->session->flashdata(
                'success'
            ) ?></div>
        <?php } elseif ($this->session->flashdata('error')) { ?>
            <div class="alert alert-danger"><?= $this->session->flashdata(
                'error'
            ) ?></div>
        <?php } ?>

        <table class="table table-striped table-bordered table-hover" id="example1">
        <a href="<?= site_url(
            'admin/about'
        ) ?>" class="btn btn-default">&laquo;&nbsp;Kembali</a> <br><br>
        
        <?php if ($this->uri->segment(3) == 'add') { ?>

            <form action="<?= site_url(
                'admin/about/insert'
            ) ?>" method="post" enctype="multipart/form-data">
                
                <div class="col-md-12">
                    <!--  -->
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Masukan Nama" required>
                    </div>
                    <div class="form-group">
                        <label>Gambar</label> <br>
                        <input type="file" class="form-control" name="gambar" required accept="image/*">
                    </div>
                    <div class="form-group">
                        <label>Isi</label> <br>
                        <input type="text" class="form-control" name="isi" placeholder="Masukan Nama">
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <input type="submit" class="btn btn-primary" value="Simpan"> <br><br>
                </div>

            </form>
            

        <?php } elseif ($this->uri->segment(3) == 'edit') { ?>
        <?php foreach ($about as $ab); ?>    

            <form action="<?= site_url(
                'admin/about/update'
            ) ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id_about" value="<?= $ab->id_about ?>" required>

                <div class="col-md-12">
                   
                <div class="form-group">
                        <label>Judul</label>
                        <input type="hidden" class="form-control" name="id" value="<?= $ab->id_about ?>" required>
                        <input type="text" class="form-control" name="judul" value="<?= $ab->judul ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Gambar</label> <br>
                        <img src="<?= base_url(
                            './assets/about/' . $ab->gambar
                        ) ?>" width="120" style="border-radius:10px"><br><br>    
                        <input type="file" class="form-control" name="gambar" required accept="image/*">
                    </div>
                    <div class="form-group">
                        <label>Isi</label> <br>
                        <input type="text" class="form-control" name="isi" value="<?= $ab->isi ?>" required>
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <input type="submit" class="btn btn-primary" value="update"> <br><br>
                </div>
            </form>
          

        <?php } ?>

    </div>
</div>

<!--   Core JS Files   -->
<script src="http://localhost/pendaftaran_bimbel/assets/template/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="http://localhost/pendaftaran_bimbel/assets/template/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="http://localhost/pendaftaran_bimbel/assets/template/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="http://localhost/pendaftaran_bimbel/assets/template/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="http://localhost/pendaftaran_bimbel/assets/template/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="http://localhost/pendaftaran_bimbel/https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="http://localhost/pendaftaran_bimbel/assets/template/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="http://localhost/pendaftaran_bimbel/assets/template/js/demo.js"></script>

    <script type="text/javascript">
    	</script>

</html>


                            