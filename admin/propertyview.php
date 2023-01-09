<?php
    session_start();
    require('../config.php');

    if (!isset($_SESSION['auser'])) {
        header('Location: index.php');
        die();
    }
    ?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
  <title>Ventura - Data Tables</title>
  
  <!-- Favicon -->
      <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
  
  <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  
  <!-- Fontawesome CSS -->
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  
  <!-- Feathericon CSS -->
      <link rel="stylesheet" href="assets/css/feathericon.min.css">
  
  <!-- Datatables CSS -->
  <link rel="stylesheet" href="assets/plugins/datatables/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/plugins/datatables/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/plugins/datatables/select.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/plugins/datatables/buttons.bootstrap4.min.css">
  
  <!-- Main CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  
  <!--[if lt IE 9]>
  <script src="assets/js/html5shiv.min.js"></script>
  <script src="assets/js/respond.min.js"></script>
  <![endif]-->
  </head>
  <body>
  <?php include('header.php'); ?>

  <div class="page-wrapper">
    <div class="content container-flui">
      <div class="page-header">
        <div class="row">
          <div class="col">
            <h3 class="page-title">Property</h3>
            <ul class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="dashboard.php">Dashboard</a>
              </li>
              <li class="breadcrumb-item active">Property</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <h4 class="header-title mt-0 mb-4">Property View</h4>
              <table id="datatable-buttons" class="table table-striped dt-responsive nowrap">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>TITLE</th>
                    <th>DESCRIPTION</th>
                    <th>TYPE</th>
                    <th>BHK</th>
                    <th>SELLING TYPE</th>
                    <th>BEDROOM</th>
                    <th>BATHROOM</th>
                    <th>BALCONY</th>
                    <th>KITCHEN</th>
                    <th>HALL</th>
                    <th>FLOOR</th>
                    <th>AREA SIZE</th>
                    <th>PRICE</th>
                    <th>LOCATION</th>
                    <th>CITY</th>
                    <th>STATE</th>
                    <th>FEATURES</th>
                    <th>IMAGE 1</th>
                    <th>IMAGE 2</th>
                    <th>IMAGE 3</th>
                    <th>IMAGE 4</th>
                    <th>IMAGE 5</th>
                    <th>UID</th>
                    <th>STATUS</th>
                    <th>FLOOR PLAN</th>
                    <th>BASEMENT PLAN</th>
                    <th>GROUND FLOOR PLAN</th>
                    <th>TOTAL FLOOR</th>
                    <th>DATE</th>
                    <th>EDIT</th>
                    <th>DELETE</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                        $query = mysqli_query($con, "SELECT * FROM property");
    while ($row = mysqli_fetch_row($query)) {
        ?>
                  <tr>
                    <td><?= $row['0']; ?></td>
                    <td><?= $row['1']; ?></td>
                    <td><?= "property description"; ?></td>
                    <td><?= $row['3']; ?></td>
                    <td><?= $row['4']; ?></td>
                    <td><?= $row['5']; ?></td>
                    <td><?= $row['6']; ?></td>
                    <td><?= $row['7']; ?></td>
                    <td><?= $row['8']; ?></td>
                    <td><?= $row['9']; ?></td>
                    <td><?= $row['10']; ?></td>
                    <td><?= $row['11']; ?></td>
                    <td><?= $row['12']; ?></td>
                    <td><?= $row['13']; ?></td>
                    <td><?= $row['14']; ?></td>
                    <td><?= $row['15']; ?></td>
                    <td><?= $row['16']; ?></td>
                    <td><?= $row['17']; ?></td>
                    <td><img src="property/<?php echo $row['18']; ?>" alt="pimage" height="70px"width="70px"></td>
                    <td><img src="property/<?php echo $row['19']; ?>" alt="pimage" height="70px"width="70px"></td>
                    <td><img src="property/<?php echo $row['20']; ?>" alt="pimage" height="70px"width="70px"></td>
                    <td><img src="property/<?php echo $row['21']; ?>" alt="pimage" height="70px"width="70px"></td>
                    <td><img src="property/<?php echo $row['22']; ?>" alt="pimage" height="70px"width="70px"></td>
                    <td><?php echo $row['23']; ?></td>
                    <td><?php echo $row['24']; ?></td>
                    <td><img src="property/<?php echo $row['25']; ?>" alt="plan" height="70px"width="70px"></td>
                    <td><img src="property/<?php echo $row['26']; ?>" alt="plan" height="70px"width="70px"></td>
                    <td><img src="property/<?php echo $row['27']; ?>" alt="plan" height="70px"width="70px"></td>
                    <td><?php echo $row['28']; ?></td>
                    <td><?php echo $row['29']; ?></td>
                    <td><a href="propertyedit.php?id=<?php echo $row['0'];?>">Edit</a></td>
                    <td><a href="propertydelete.php?id=<?php echo $row['0'];?>"><i class="fa-solid fa-trash-can"></i></a></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  
  <!-- jQuery -->
  <script src="assets/js/jquery-3.2.1.min.js"></script>
  
  <!-- Bootstrap Core JS -->
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  
  <!-- Slimscroll JS -->
  <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
  
  <!-- Datatables JS -->
  <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
  <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
  <script src="assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
  
  <script src="assets/plugins/datatables/dataTables.select.min.js"></script>
  
  <script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
  <script src="assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
  <script src="assets/plugins/datatables/buttons.html5.min.js"></script>
  <script src="assets/plugins/datatables/buttons.flash.min.js"></script>
  <script src="assets/plugins/datatables/buttons.print.min.js"></script>
  
  <!-- Custom JS -->
  <script  src="assets/js/script.js"></script>
		
</body>
</html>