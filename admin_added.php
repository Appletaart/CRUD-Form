<?php require_once("includes/header.php");?>

<h5 class="alert-light text-danger text-center">Confirm registration has been added</h5>


<?php

if(isset($_POST['submit'])) {

    $data_missing = array();


    if (empty($_POST['first_name'])) {
        $data_missing[] = 'First Name';
    } else {
        $fname = strtolower($_POST['first_name']);
    }

    if (empty($_POST['last_name'])) {
        $data_missing[] = 'Last Name';
    } else {
        $lname = strtolower($_POST['last_name']);
    }

    if (empty($_POST['username'])) {
        $data_missing[] = 'User Name';
    } else {
        $u_n = strtolower($_POST['username']);
    }

    if (empty($_POST['password'])) {
        $data_missing[] = 'Password';
    } else {
        $p_w = $_POST['password'];
    }

    if (empty($_POST['department'])) {
        $data_missing[] = 'Department';
    } else {
        $d_p = strtolower($_POST['department']);
    }

    if (empty($_POST['id_number'])) {
        $data_missing[] = 'ID Number';
    } else {
        $id_unique = $_POST['id_number'];
    }

    $_SESSION["first_name"]=$fname;
    $_SESSION["last_name"]=$lname;
    $_SESSION["username"]=$u_n;
    $_SESSION["password"]=$p_w;
    $_SESSION["department"]=$d_p;
    $_SESSION["id_number"]=$id_unique;

    

//check register
    if (empty($data_missing)) {

        require_once("includes/mysqli_connect.php");

        $login_query = "INSERT INTO admins (admins_id, first_name, last_name, username, password, department, id_number) VALUES (NULL, ?,?,?,?,?,?)";
        $stmt = mysqli_prepare($dbc, $login_query);
        mysqli_stmt_bind_param($stmt, 'sssssi', $fname, $lname, $u_n, $p_w, $d_p, $id_unique);
        mysqli_stmt_execute($stmt);
        $affected_rows = mysqli_stmt_affected_rows($stmt);
        $latest_id = $stmt->insert_id;
        $_SESSION["admins_id"]=$latest_id;
        // echo "Insert successful. Latest ID is: " . $latest_id;

        if ($affected_rows == 1) {

            echo
                '<div class="card border-left-danger shadow w-100">
             <!-- get hidden id then put id in the database photo-->
            <h4 class="text-gray-500 mx-5 mt-5 pt-1">your registration was successful</h4>
            <a class="text-sm text-danger mx-5 mb-3">Please add your profile photo</a>
            <!--add profile photo form-->
            <div class="row">
            <div class="form-group col-md-12">
            <form class="row mx-5" action="confirmregister.php" method="post" enctype="multipart/form-data">
            <div class="col-12 col-md-6">First Name: ' . $fname . '</div><div class="col-12 col-md-6"> Last Name: ' . $lname . '</div>
            <div class="col-12 col-md-6">User name: ' . $u_n . ' </div><div hidden class="col-12 col-md-6"> Password: ' . $p_w . '</div>
            <div class="col-12 col-md-6">Department: ' . $d_p . ' </div><div class="col-12 col-md-6"> Identity Number: ' . $id_unique . '</div>
            <div class="row m-5">
                <!--photo-->
                <div class="col-md-3">
                <!--preview photo-->
                    <img id="output" class="bg-profile border-bottom-danger" /><br>
                    <input hidden name="size" value="1000000">
                    <input type="file"  accept="image/*" name="img_data" id="file"  onchange="loadFile(event)" style="display: none;">
                </div>
                <!--input photo-->
                <div class="col-md-8 pt-3 ml-5">
                <label for="profile_photo">add your profile photo:</label><br>
                <label for="file" class="choose btn btn-dark">Choose your photo here</label><br>
                <input type="text" hidden name="id_admin" value="'. $latest_id . '">
                <button type="submit" name="submit" class="btn btn-danger px-5 my-3" >Send</button>
                </div>
                <!--text condition-->
                <div class="col-12 text-xs pt-3">Allow a photo file<br>• Photo size is up to 1 Mb</br>• Photo type are jpg, jpeg, png, gif</div>
             </form>
             </div>
            </div>
            <!--end profile photo form-->
            </div>
            </div>';

        } else {    /*error register ต้องแก้จุด*/
            echo
                '<div class="card border-left-danger shadow w-100 h-20 py-2 mt-5 mx-auto">
                <div class="col-12 mx-auto">
                <h4 class="text-gray-500 px-3 pt-3 pb-0">Error Occurred<br/></h4>
                <a class="text-gray-500 px-3" href="registeradmin.php">Return back to fill in registor form</a>
                ' . mysqli_error($dbc);
                mysqli_stmt_close($stmt);
                mysqli_close($dbc);'
                </div>
                </div>';
        }
        } else {  /*error need to fill in again ต้องแก้ต้องแก้*/
            echo
                '<div class="card border-left-danger shadow w-100 h-20 py-2 mt-5 mx-auto">
                <div class="col-12 mx-auto">
                <h4 class="text-gray-500 px-3 pt-3 pb-0">You need to enter the following data<br/></h4><br>
                <p class="text-gray-500 px-3">The info, you have forgot to filled in </p><br>';

                foreach ($data_missing as $missing) {
                    echo $missing . ' <br> '  ; mysqli_stmt_close($stmt); mysqli_close(); '</div></div>' ;
        }
    }
}
?>
<script>
    var loadFile = function(event) {
        var image = document.getElementById('output');
        image.src = URL.createObjectURL(event.target.files[0]);
    };
</script>
    </div>
    </div>
    </div>
<?php include("includes/footer.php"); ?>
