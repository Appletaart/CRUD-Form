<?php require_once("includes/mysqli_connect.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Apple academy databank</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

</head>
<!--
--><?php
/*//if session sign in already done then redirect to index.php
//PHP $_POST is a PHP super Global variable
if($session->is_signed_in()){
  redirect("index.php");
}

if(isset($_POST['submit'])){
  $username = trim($_POST['username']);
  $password = trim($_POST['password']);

  $user_found = User::verify_user($username, $password);

  if($user_found){
    $session->login($user_found);
    redirect("index.php");
  }else{
    $the_message = "Your password or username was FAILED";
  }
  }
  else{
    $username = "";
    $password = "";
}
*/?>

<body class="bg-gradient-danger">

  <div class="container-fluid">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome to Apple academy!</h1>
                      <h6 class="h6 text-danger mb-4">Are you looking for an apple?</h6>
                  </div>
                  <h2 class="bg-danger"><?php echo $the_message; ?></h2> <!--if login false then it will show-->
                  <form class="user" method="post">
                    <div class="form-group">
                      <input type="text" name="username" value="<?php echo htmlentities($username); ?>" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Under construction">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" value="<?php echo htmlentities($password); ?>" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <hr>
                    <div class="form-group">
                      <input type="submit" name="submit" class="btn btn-danger btn-user btn-block" value="Submit">
                    </div>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small text-danger" href="forgot-password.html">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small text-danger" href="register.html">Create an Account!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

