<?php
    require('../../conn.php');
$query="SELECT * FROM BUSINESS WHERE STAGE=1";
$result=mysqli_query($conn,$query);
$query1="SELECT * FROM REGION";
$result1=mysqli_query($conn,$query1);
$query2="SELECT * FROM NOEMP";
$result2=mysqli_query($conn,$query2);
$query3="SELECT * FROM AREA";
$result3=mysqli_query($conn,$query3);

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Verification</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  


</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
 <?php
    require('../../nav.php');
   ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php
    require('../../aside.php');
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Business Verification Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="ver.php" method="post" enctype="multipart/form-data">
                <div class="card-body">


                  <div class="form-group">
                  <label for="exampleInputEmail1">Business Name</label>

                   <select name="name" id="name" class="form-control" required="">
                      <option value="0" selected disabled>What is the Name of the Business?</option>
                      <?php while ($row=mysqli_fetch_array($result)):;?>
                      <option value="<?php echo $row[0]; ?>"><?php echo $row[13].' '.$row[2]; ?></option>
                      <?php endwhile;?>
                   </select>
                  </div>

                  <div class="form-group">
                  <label for="exampleInputEmail1">Tax Area</label>

                   <select name="location" id="location" class="form-control" required="">
                      <option value="0" selected disabled>Where is the Business Located?</option>
                      <?php while ($row1=mysqli_fetch_array($result1)):;?>
                      <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1].': '.$row1[2]; ?></option>
                      <?php endwhile;?>
                   </select>
                  </div>

    
                  <div class="form-group">
                  <label for="exampleInputEmail1">Number of Employees</label>
                   <select name="emp" id="emp" class="form-control" required="">
                      <option value="0" selected disabled>How many Employees?</option>
                      <?php while ($row2=mysqli_fetch_array($result2)):;?>
                      <option value="<?php echo $row2[0]; ?>"><?php echo $row2[1] ?></option>
                      <?php endwhile;?>
                   </select>
                  </div>



                  <div class="form-group">
                  <label for="exampleInputEmail1">Size of Business</label>
                   <select name="size" id="size" class="form-control" required="">
                      <option value="0" selected disabled>How big is the Business?</option>
                      <?php while ($row3=mysqli_fetch_array($result3)):;?>
                      <option value="<?php echo $row3[0]; ?>"><?php echo $row3[1] ?></option>
                      <?php endwhile;?>
                   </select>
                  </div>

                  

                  

                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" required="">
                    <label class="form-check-label" for="exampleCheck1">I understand the<a href="#"> Terms & Conditions</a></label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" id="submit" class="btn btn-primary">Validate</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            

            <!-- Input addon -->
           
            <!-- /.card -->
            <!-- Horizontal Form -->
           

          </div>
          <!--/.col (left) -->
          <!-- right column -->
         
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
    require('../../footer.php');
  ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<?php
    require('../../fileinput.php');
?>



<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
