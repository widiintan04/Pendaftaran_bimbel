
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
                    <a class='active-menu'href="<?= site_url(
                        'dashboarduser'
                    ) ?>">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p><br>
                    </a>
                    
                </li>
                </li>
                <li>
                    <a href="<?= site_url('daftar') ?>">
                        <i class="ti-view-list-alt"></i>
                        <p>Form Daftar</p><br>
                    </a>
                </li>
                <li>
                    <a href="<?= site_url('Pendaftar') ?>">
                        <i class="ti-view-list-alt"></i>
                        <p>Pendaftar</p><br>
                    </a>
                </li>
                </li>
            </ul>s
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
                <a href="<?= base_url('login/logout') ?>" 
                class="btn btn-danger square-btn-adjust"
                onclick="return confirm('Apakah anda ingin logout ?')">Logout</a> </div>
            </div>
        </nav>   



<div class="content">
            <div class="container-fluid">
                <div class="row">
                <?php if ($this->session->flashdata('success')) { ?>
                  <div class="alert alert-success"><?= $this->session->flashdata(
                      'success'
                  ) ?></div>
              <?php } elseif ($this->session->flashdata('error')) { ?>
                  <div class="alert alert-danger"><?= $this->session->flashdata(
                      'error'
                  ) ?></div>
              <?php } ?>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
        
     
                            <table class="table table-striped table-bordered table-hover" id="example1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Paket</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
                </thead>

            <?php
            $no = 1;
            foreach ($pendaftar as $bd) { ?>

            <tbody>
                <tr class="odd gradeX">
                    <td><?= $no ?></td>
                    <td><?= $bd->nama ?></td>
                    <td><?= $bd->alamat ?></td>
                    <td><?= $bd->paket ?></td>
                    <td><?= $bd->keterangan ?></td> 

                    <td align="center">
                        <!-- <a href="<?= site_url(
                            'admin/pendaftar/delete/' . $bd->id_siswa
                        ) ?>"   
                         class="btn btn-danger" title="Hapus"
                          onclick="return confirm('Apakah anda ingin hapus ?')">
                          <i class="ti-trash"></i></a>
                        &nbsp -->
                        <a href="<?= site_url(
                            'daftar/edit/' . $bd->id_siswa
                        ) ?>"
                            class="btn btn-sm btn-success"><i class="fa fa-pen"></i>&nbsp Edit</a>
                    </td>
                </tr>
            </tbody>
                
            <?php $no++;}
            ?>

        </table>
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


