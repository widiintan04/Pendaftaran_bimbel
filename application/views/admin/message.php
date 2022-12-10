
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
        
     
                            <table class="table table-striped table-bordered table-hover" id="example1">
            <thead>
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
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Isi</th>
                    <th>Aksi</th>
                </tr>
                </thead>

            <?php
            $no = 1;
            foreach ($komentar as $bd) { ?>

            <tbody>
                <tr class="odd gradeX">
                    <td><?= $no ?></td>
                    <td><?= $bd->nama ?></td>
                    <td><?= $bd->email ?></td>
                    <td><?= $bd->subject ?></td>
                    <td><?= $bd->isi ?></td>

                    <td align="center">
                        <a href="<?= site_url(
                            'admin/message/delete/' . $bd->id_komentar
                        ) ?>"
                         class="btn btn-danger" title="Hapus"
                          onclick="return confirm('Apakah anda ingin hapus ?')">
                          <i class="ti-trash"></i></a>
                        &nbsp
                        <!-- <a href="<?= site_url(
                            'admin/komentar/edit/' . $bd->id_komentar
                        ) ?>"
                         class="btn btn-warning" title="Edit">
                         <i class="ti-pencil"></i></a> -->
                    </td>
                </tr>
            </tbody>
                
            <?php $no++;}
            ?>

        </table>
    </div>
</div>