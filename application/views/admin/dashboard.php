
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
                    Dashboard
                </a>
                
            </div>

            <ul class="nav">
                <li><br>
                    <a class='active-menu'href="http://localhost/pendaftaran_bimbel/admin/dashboard">
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
                    <a href="http://localhost/pendaftaran_bimbel/admin/pendaftar">
                        <i class="ti-view-list-alt"></i>
                        <p>pendaftar</p><br>
                    </a>
                </li>
                <li>
                    <a href="http://localhost/pendaftaran_bimbel/admin/message">
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
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                                <div class="row">
                                <!-- <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-reload"></i> Updated now
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">  
                                        <div class="icon-big icon-success text-center">
                                            <i class="ti-wallet"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>
<div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: Notice</p>
<p>Message:  Undefined variable: count1</p>
<p>Filename: admin/dashboard.php</p>
<p>Line Number: 42</p>


	<p>Backtrace:</p>
	
		
	
		
	
		
			<p style="margin-left:10px">
			File: C:\xampp\htdocs\pendaftaran_bimbel\application\views\admin\dashboard.php<br />
			Line: 42<br />
			Function: _error_handler			</p>

		
	
		
	
		
	
		
			<p style="margin-left:10px">
			File: C:\xampp\htdocs\pendaftaran_bimbel\application\views\admin\template.php<br />
			Line: 128<br />
			Function: view			</p>

		
	
		
	
		
	
		
			<p style="margin-left:10px">
			File: C:\xampp\htdocs\pendaftaran_bimbel\application\controllers\admin\Dashboard.php<br />
			Line: 26<br />
			Function: view			</p>

		
	
		
	
		
			<p style="margin-left:10px">
			File: C:\xampp\htdocs\pendaftaran_bimbel\index.php<br />
			Line: 315<br />
			Function: require_once			</p>

		
	

</div></p>
                                          <p class="text-muted">Biodata</p>

                                        </div>
                                    </div>
                                </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-danger text-center">
                                            <i class="ti-pulse"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                              <p class="text-muted">Daftar</p>
                      <h5><?= $count1 ?></h5>

                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-timer"></i> In the last hour
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-danger text-center">
                                        <i class=" ti-twitter-alt"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                              <p class="text-muted">Message</p>
                      <h5><?= $count2 ?></h5>
                                              

                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-timer"></i> In the last hour
                                    </div>
                                </div>
                            </div>
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


