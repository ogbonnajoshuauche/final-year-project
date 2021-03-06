<?php
  
  include_once '../contoller/insert.php';

  $insert = new insert();

  if (isset($_GET['case'])) {
      
      $case = $_GET['case'];
  }

  $registeredOrganizationMember = $insert->registeredOrganizationMember($case);


?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

    <style type="text/css">
    .d-block{
      color: #7971EA !important;
    }
  </style>
  
</head>

<body class="bg-dark">

  <div class="container" style="margin-top: 110px;">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header text-center" style="font-size: 25px;">Organization Registeration</div>
      <div class="card-body">

        <?php

          switch ($registeredOrganizationMember) {
            case 'userfound':

                    echo  $_GET["case"];
                    echo '

                        <div class="alert alert-danger text-center">
                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                          <strong>Sorry!</strong> You Are Already Registered.
                        </div>

                    ';
              break;
             case 'success':
                   echo '

                        <div class="alert alert-success text-center">
                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                          <strong>Success!</strong> Your Are Registered Successfull.
                        </div>

                    ';
              break;

            case 'nope':
                  echo '

                        <div class="alert alert-danger text-center">
                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                          <strong>Sorry!</strong> Falied To Register, Try Again.
                        </div>

                    ';
              break;

            default:
              
              break;
          }

        ?>
        <form method="POST">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="name" name="name" class="form-control" placeholder="Name" required="required" autofocus="autofocus">
                  <label for="name">Name</label>
                </div>
              </div>
             <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="country" name="country" class="form-control" placeholder="Country" required="required" autofocus="autofocus">
                  <label for="country">Country</label>
                </div>
              </div>
            </div>
          </div>

           <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="state" name="state" class="form-control" placeholder="State" required="required">
                  <label for="state">State</label>
                </div>
              </div>

               <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="city" name="city" class="form-control" placeholder="CITY" required="required" autofocus="autofocus">
                  <label for="city">City</label>
                </div>
              </div>

            </div>
          </div>

           <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="lga" name="lga" class="form-control" placeholder="Local Government Area" required="required" autofocus="autofocus">
                  <label for="lga">L.G.A</label>
                </div>
              </div>

              <div class="col-md-6">
               <div class="form-label-group">
                  <select class="form-control" name="organization">
                    <option value="" selected="">Select Type Of Organization</option>
                    <option value="Private Orgaization">Private Orgaization</option>
                    <option value="Gornment Organization">Gornment Organization</option>
                  </select> 
               </div>               
             </div>
            </div>
          </div>

           <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="email" name="email" class="form-control" placeholder="Email" required="required">
              <label for="email">Email</label>
            </div>
          </div>
          

          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
                  <label for="inputPassword">Password</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone Number" required="required">
                  <label for="phone">Phone Number</label>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="form-label-group">
              <input type="text" name="address" id="address" class="form-control" placeholder="Address" required="required">
              <label for="address">Address</label>
            </div>
          </div>
          

          <input type="submit" name="signup" class="btn btn-primary btn-block" value="Register" style="background-color: #7971EA; border-color: #7971EA;" />
        </form>
        <div class="text-center" style="color: #7971EA;">
          <a class="d-block small mt-3" href="register_individual.php">OR Register As An Individual</a>
          <a class="d-block small mt-3" href="../index.php.">Login Page</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
