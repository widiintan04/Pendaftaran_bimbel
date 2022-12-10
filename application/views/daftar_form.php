
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
                            <div style="color: black;
                padding 20px 2px 10px 30px;
                float: right;
                font-size: 16px;">  &nbsp;
        </nav>   
        <a href="<?= site_url(
            'pendaftar'
        ) ?>" class="btn btn-primary ml-4">&laquo;&nbsp;Kembali</a> <br>



<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">

        
            <?php foreach ($daftar as $df); ?>
                </tr>
            </tbody>
            <form action="<?= site_url(
                'daftar/update'
            ) ?>" method="post" enctype="multipart/form-data">
                
            <div class='col-md-6'>
                <input type="hidden" name="id_siswa" id="" value="<?= $df->id_siswa ?>">
                                        <label class='control-label'>nama*</label>
                                        <input type='text' name="nama" placeholder='' class='form-control' value="<?= $df->nama ?>"required>
                                    </div>
                                    <div class='col-md-6'>
                                        <label class='control-label'>tempat lahir*</label>
                                        <input type='text' name="tempat_lahir" placeholder='' class='form-control' value="<?= $df->tempat_lahir ?>" required>
                                    </div>
                                    <div class='col-md-6'>
                                      <br><label class='control-label'>tanggal lahir*</label>
                                        <div class='datepicker-center'>
                                            <div class='input-group date' data-date-format='yyyy-mm-dd'>
                                                <span class='input-group-addon'><i class='glyphicon glyphicon-calendar'></i></span>
                                                <input class='form-control' type='date' name="tanggal_lahir" value="<?= $df->tanggal_lahir ?>">
                                            </div>                              
                                        </div>
                                    </div>
                                        <div class='col-md-6'>
                                        <br><label class='control-label'>jenis kelamin*</label>
                                        <select class='form-control' name="jenis_kelamin" value="<?= $df->jenis_kelamin ?>" required>
                                            <option value='Laki-Laki'>Laki-Laki</option>
                                            <option value='Perempuan'>Perempuan</option>
                                        </select>
                                    </div>
                                    <div class='col-md-6'>
                                        <br><label class='control-label'>Asal Sekolah*</label>
                                        <input type='text' name='asal_sekolah' placeholder='' class='form-control'value="<?= $df->asal_sekolah ?>" required>
                                    </div>
                                    <div class='col-md-6'>
                                        <br><label class='control-label'>No. HP Siswa*</label>
                                        <input type='text' name='no_telp' placeholder='' class='form-control'value="<?= $df->no_telp ?>" required>
                                    </div>
                                    <div class='col-md-6'>
                                        <br><label class='control-label'>Alamat Siswa*</label>
                                        <input type='text' name='alamat' placeholder='' class='form-control'value="<?= $df->alamat ?>" required>
                                    </div>
                                     <div class='col-md-6'>
                                       <br> <label class='control-label'>Jenjang SMP</label>
                                        <select class='form-control' name='id_paket' required>
											<?php foreach ($paket as $pk) { ?>
                                            <option value='<?= $pk->id_paket ?>'><?= $pk->paket ?></option>
											<?php } ?>
                                            
                                        </select>
                                    </div>
                                    
                                    <br><br>
                                    <div class="col-md-12 text-center " style="margin-top:10px;">
                    <input type="submit" class="btn btn-primary" value="Update"> <br>
                </div>
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


