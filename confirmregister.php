<?php require_once("includes/header.php");?>
    <h5 class="alert-light text-danger text-center">Confirm profile photo has been added</h5>
<?php

// uploads file to put in the map
if(isset($_POST['submit'])){

    $target = "uploads_p/".basename($_FILES['img_data']['name']);
    $data = $_FILES['img_data']['name'];
    $admin_id = $_POST['id_admin'];

    $sql_img = "INSERT INTO profileimage (img_data, id_admin) VALUES ('$data', '$admin_id')";
    mysqli_query($dbc, $sql_img);

    if(move_uploaded_file($_FILES['img_data']['tmp_name'], $target)){

        echo
            '<div class="card border-left-danger shadow w-100">
                <!-- get hidden id then put id in the database photo-->
                <h4 class="text-gray-500 mx-5 mt-5 pt-1">Your profile photo has been added</h4>
                <a class="text-sm text-danger mx-5 mb-3" href="#">Send information to your email</a>
            <!--add profile photo form-->
            <div class="row">
            <div class="form-group col-md-12">
            <div class="row m-5">
                <!--photo-->
                <div class="col-md-3">
                <!--preview photo-->
                    <img id="output" class="bg-profile border-bottom-danger" src="uploads_p/'. $data .'"/><br>
                </div>
                <!--input photo-->
                <div class="col-md-8 pt-3 ml-5">
                <div class="row">
                <div class="col-12 col-md-6">First Name: ' . $_SESSION["first_name"] . '</div><div class="col-12 col-md-6"> Last Name: ' . $_SESSION["last_name"] . '</div>
                <div class="col-12 col-md-6">User name: ' . $_SESSION["username"] . ' </div><div hidden class="col-12 col-md-6"> Password: ' . $_SESSION["password"] . '</div>
                <div class="col-12 col-md-6">Department: ' . $_SESSION["department"] . ' </div><div class="col-12 col-md-6"> Identity Number: ' . $_SESSION["id_number"] . '</div>
                <div class="col-12 col-md-6"> Admin ID No: ' . $_SESSION["admins_id"] . '</div>
                <a class="text-sm text-danger mt-3" href="login.php">Go to log in page</a>
                </div>
            </div>
            </div>
            </div>
            <!--end profile photo form-->
            </div>';

    }else{
        echo "Error! contact your webmaster, Cause she doesn't has time to add extra condition yet";
    }
}

?>

    </div>
    </div>
    </div>
<?php include("includes/footer.php"); ?>