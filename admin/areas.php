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

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
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
        <li class="nav-item active">
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
        <li class="nav-item">
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
          <!--Upload form-->
          <form class="needs-validation" id="areaForm" enctype="multipart/form-data" method="post"
                autocomplete="off">
                <div class="row">
                  <div class="col-md-6">
                  <ol class="backgroundbreadcrumb breadcrumb">
                        <li class="breadcrumb-item">
                            <a class="text-success" href="#">Irrigated & Unirrigated Areas</a>
                        </li>
                        <li class="breadcrumb-item active">
                          English Content
                        </li>
                    </ol>
                          <div class="form-group">
                              <label for="headerTitle">District</label>
                              <select name="district_en" class="form-control">
                                <option selected disabled>Select District</option>
                                <?php
                                $districtenresult = $con->query("SELECT * FROM district_en");
                                if ($districtenresult && $districtenresult->num_rows) {
                                    foreach ($districtenresult as $crop) {
                                        echo "<option value='". $crop['districtname']."'>".$crop['districtname']. "</option>";
                                    }
                                }

                                ?>
                              </select>
                              <small class="form-text text-muted">Name of the District</small>
                          </div>
                          <div class="form-group">
                              <label for="content">Comments</label>
                              <div id="editorEnglish">

                              </div>
                              <small class="form-text text-muted">Comments
                              </small>
                          </div>
                          <div class="form-group">
                              <label for="headerTitle">Irrigated areas / నీటిపారుదల ప్రాంతాలు</label>
                              <input type="number" class="form-control" name="irrigated"
                                     placeholder="Percentage / శాతం" required>
                          </div>
                          <div class="form-group">
                              <label for="headerTitle">Un-irrigated area / సాగునీటి ప్రాంతం</label>
                              <input type="number" class="form-control" name="unirrigated"
                                     placeholder="Percentage / శాతం" required>
                          </div>
                  </div>
                  <div class="col-md-6">
                  <ol class="backgroundbreadcrumb breadcrumb">
                        <li class="breadcrumb-item">
                            <a class="text-success" href="#">నీటిపారుదల మరియు నిర్జలీకరణ ప్రాంతాలు</a>
                        </li>
                        <li class="breadcrumb-item active">
                            Telugu Content
                        </li>
                    </ol>
                          <div class="form-group">
                              <label for="headerTitle">జిల్లా</label>
                              <select name="district_te" class="form-control">
                                <option selected disabled>జిల్లా ఎంచుకోండి</option>
                                <?php
                                $districtenresult = $con->query("SELECT * FROM district_te");
                                if ($districtenresult && $districtenresult->num_rows) {
                                    foreach ($districtenresult as $crop) {
                                        echo "<option value='". $crop['districtname']."'>".$crop['districtname']. "</option>";
                                    }
                                }

                                ?>
                              </select>
                              <small class="form-text text-muted">Name of the District</small>
                          </div>
                          <div class="form-group">
                              <label for="content">వ్యాఖ్యలు</label>
                              <div id="editorTelugu">

                              </div>
                              <small class="form-text text-muted">వ్యాఖ్యానించండి
                              </small>
                          </div>
                  </div>
                </div>
                <button class="btn btn-primary upload-image" onclick="addArea()" name="submitButton" id="submitButton" type="submit">
                    Submit
                </button>
            </form>
          <!-- /end of upload form -->
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

<!-- Demo scripts for this page-->
<script src="js/demo/datatables-demo.js"></script>
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script src="./js/quilleditor.js"></script>
<script src="./js/post.js"></script>
</body>

</html>
