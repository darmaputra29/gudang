
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

   <marquee><title>Sistem Informasi Gudang Obat RSPN </title></marquee>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<link href="datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css">
<link href="datatables/jquery.dataTables.css" rel="stylesheet" type="text/css">
<link href="datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"></a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
                
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="?menu=home"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    
          
                    
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#2"><i class="glyphicon glyphicon-plus-sign"></i> Obat <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="2" class="collapse">
                            <li>
                                 <a href="javascript:;" data-toggle="collapse" data-target="#2b"><i class="fa fa-fw fa-book"></i> Data Obat <i class="fa fa-fw fa-caret-down"></i></a>
								 <ul id="2b" class="collapse">
									<li>
										<a href="?menu=obat_tablet">Tablet</a>
									</li>
									<li>
										<a href="?menu=obat_injeksi">Injeksi</a>
									</li>
									<li>
										<a href="?menu=obat_sirup">Sirup</a>
									</li>
									<li>
										<a href="?menu=obat_salap">Salap</a>
									</li>
									<li>
										<a href="?menu=obat_infus">Infus</a>
									</li>
									<li>
										<a href="?menu=obat_bhp">BHP</a>
									</li>
									<li>
										<a href="?menu=semua_obat">Semua Obat</a>
									</li>
								 </ul>
                            </li>
					<?php 
					error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
					session_start();
					if(isset($_SESSION['user']))
					{
					?>
							
                            <li>
                                <a href="?menu=add_obat">Tambah Obat baru</a>
                            </li>
					<?php
					session_start();
					}
					?>
                        </ul>
                    </li>

					
					<?php 
					error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); 
					session_start();
					if(isset($_SESSION['user']))
					{
					?>
		
					<li>
                        <a href="?menu=pengeluaran_obat"><i class="fa fa-fw fa-pencil"></i>Input Pengeluaran Obat</a>
                    </li>
					<?php
					session_start();
					}
					?>
					
					<li>
                        <a href="?menu=semua_pengeluaran"><i class="fa fa-fw fa-book"></i>Data Pengeluaran Obat</a>
                    </li>
					
					<?php 
					error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); 
					session_start();
					if(isset($_SESSION['user']))
					{
					?>
					<li>
                        <a href="?menu=bantuan"><i class="fa fa-fw fa-wrench"></i>Pengaturan</a>
                    </li>
					<?php
					session_start();
					}
					?>
					
					<li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#3"><i class="fa fa-fw fa-power-off"></i> Expayer <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="3" class="collapse">
                     

									
									<li>
										<a href="?menu=hampirexpayer">Hampir Expayer</a>
									</li>
								
									<li>
										<a href="?menu=obatexpayer">Sudah Expayer</a>
									</li>	
						
								 </ul>
                            </li>
					
									
				

					
					
						
					    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#4"><i class="fa fa-fw fa-power-off"></i> User <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="4" class="collapse">
                     

									
									<li>
										<a href="login/index.php">Login</a>
									</li>
								
								<?php 
								error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); 
								session_start();
								if(isset($_SESSION['user']))
								{
								?>
								
									<li>
										<a href="logout.php">Log Out</a>
									</li>
									<?php
									session_start();
									}
									?>	
						
								 </ul>
                            </li>
					
										 
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <?php include("menu.php");?>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	
	 <!-- Bootstrap Core JavaScript -->
    <script src="datatables/dataTables.bootstrap.js"></script>
    <script src="datatables/jquery.dataTables.js"></script>
     <script type="text/javascript">
      $(function () {
        $("#table1").dataTable();
        $('#table2').dataTable();
        $('#table3').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
      });
    </script>

</body>

</html>
