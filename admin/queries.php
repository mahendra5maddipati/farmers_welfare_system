<!DOCTYPE html>
<html lang="en">
<?php
require_once './core/authenticator.php';
require_once './core/Database.php';
$db = Database::getInstance();
$con = $db->getConnection();
?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="icon.png" type="image/gif" sizes="16x16">
    <title>Admin Welfare System Admin - Dashboard</title>

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/record.css">
    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">
<nav class="navbar navbar-expand navbar-dark bg-success static-top">

    <a class="navbar-brand mr-1" href="index.php">Admin Welfare System</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-2 my-2 my-md-0">
        <!--        <div class="input-group">-->
        <!--            <input type="text" class="form-control" placeholder="Search for..." aria-label="Search"-->
        <!--                   aria-describedby="basic-addon2">-->
        <!--            <div class="input-group-append">-->
        <!--                <button class="btn btn-success" type="button">-->
        <!--                    <i class="fas fa-search"></i>-->
        <!--                </button>-->
        <!--            </div>-->
        <!--        </div>-->
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item">
          <a class="nav-link" target="_blank" href="../index.php" role="button">
              <i class="fas fa-link fa-fw"></i>
          </a>
      </li>
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user-circle fa-fw"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="profile.php"><?php echo $_SESSION['name']; ?></a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
            </div>
        </li>
    </ul>

</nav>

<div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item">
          <a class="nav-link" href="index.php">
              <i class="fas fa-fw fa-tachometer-alt"></i>
              <span>Dashboard</span>
          </a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="addcrop.php">
              <i class="fas fa-fw fa-leaf"></i>
              <span>Add Crop</span>
          </a>
      </li>
        <li class="nav-item">
            <a class="nav-link" href="marketprices.php">
                <i class="fas fa-fw fa-rss"></i>
                <span>Market Prices</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="seeds.php">
                <i class="fas fa-fw fa-leaf"></i>
                <span>Seeds</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pesticides.php">
                <i class="fas fa-fw fa-leaf"></i>
                <span>Pesticides</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="fertilizers.php">
                <i class="fas fa-fw fa-leaf"></i>
                <span>Fertilizers</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="soilfertility.php">
                <i class="fas fa-fw fa-globe"></i>
                <span>Soil Fertility Details</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="areas.php">
                <i class="fas fa-fw fa-book"></i>
                <span>Irrigated & Unirrigated Areas</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="cropweather.php">
                <i class="fas fa-fw fa-bolt"></i>
                <span>Crop weather details</span>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa-suitcase"></i>
                <span>Government wise</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <a class="dropdown-item" href="govt.php?type=schemes">Schemes</a>
                <a class="dropdown-item" href="govt.php?type=funds">Funds</a>
                <a class="dropdown-item" href="govt.php?type=loans">Loans</a>
            </div>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="queries.php">
                <i class="fas fa-fw fa-question"></i>
                <span>Queries</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="equipments.php">
                <i class="fas fa-fw fa-cogs"></i>
                <span>Equipments</span></a>
        </li>
    </ul>

    <div id="content-wrapper">

        <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="backgroundbreadcrumb breadcrumb">
                <li class="breadcrumb-item">
                    <a class="text-success" href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Queries</li>
            </ol>
            <!--Upload form-->
            <div class="col-md-6">
                <h1>Welcome <?= $_SESSION['name'] ?></h1>
                <p>These are the queries which are not answered yet..</p>
            </div>
            <div class="col-md-10">
              <input type="hidden" id="lang" value="en"/>
              <div class="col-md-6 col-md-offset-3 form-group">
                <input type="number" placeholder="Id of the query" name="query" id="query" class="form-control"/>
              </div>
              <div id="controls" class="col-md-8 col-md-offset-2">
               <button class="button" id="recordButton">Record</button>
               <button class="button" id="pauseButton" disabled>Pause</button>
               <button class="button" id="stopButton" disabled>Stop</button>
              </div>
              <div id="formats" class="col-md-6">Start Recording</div>
              <br>
              <p>Reply</p>
              <ol id="recordingsList"></ol>
            </div>
            <br/>
            <div class="col-md-10">
              <?php
                $query = "SELECT * FROM query WHERE destination IS NULL";
                $result = $con->query($query);
                if ($result && $result->num_rows > 0) {
                    foreach ($result as $data) {
                        $source = '../audios/' . $data['source'];
                        $destination = '../audios/' . $data['destination'];
                        echo '<h5>' . $data['id'] . '. ' .$data['title'].'</h5>';
                        echo "<div>";
                          echo '<audio src="'. $source .'" controls="true"/>';
                        echo "</div>";
                    }
                }
               ?>
            </div>
            <!-- /end of upload form -->
        <!-- Sticky Footer -->
        <?php include 'footer.php'; ?>

    </div>
    <!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Logout?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.php">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Page level plugin JavaScript-->
<script src="vendor/datatables/jquery.dataTables.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin.min.js"></script>
<script src="https://cdn.rawgit.com/mattdiamond/Recorderjs/08e7abd9/dist/recorder.js"></script>
<script src="js/record.js"></script>
<!-- Demo scripts for this page-->
<script src="js/demo/datatables-demo.js"></script>

</body>

</html>
