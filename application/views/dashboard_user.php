
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
                <a href="#" class="simple-text">
                    Dashboard User
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
                    <a href="<?= site_url('pendaftar') ?>">
                        <i class="ti-view-list-alt"></i>
                        <p>Pendaftar</p><br>
                    </a>
                </li>
                </li>
            </ul>
    	</div>
    </div>
<body>
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
               <b> Hi, <?= $this->session->userdata('nama') ?><b>

<a href="<?= base_url('login/logout') ?>" 
class="btn btn-danger square-btn-adjust"
onclick="return confirm('Apakah anda ingin logout ?')">Logout</a> </div>
</div>
        </nav>   
        <br><br><br><br><br><div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="">
          Bagaimana melakukan pendaftaran ?
          <span> </span>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne" aria-expanded="true" style="">
      <div class="panel-body">
			<ul type="circle">
				<li>Daftar Online, mengisi Formulir pada menu [<span class="fa fa-edit fa-fw"></span> Form Daftar], setelah selesai daftar cek ke menu [<span class="fa fa-shopping-cart fa-fw"></span> Pendaftar] untuk melakukan Pengecekan data.</li> 
			</ul>
	   </div>
    </div>
  </div>
</body>

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


