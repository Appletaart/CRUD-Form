<?php require_once("includes/header.php");?>
<?php ob_start(); ?>
    <h5 class="alert-light text-danger text-center">Confirm a student added</h5>
<?php



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

if (empty($_POST['email'])) {
    $data_missing[] = 'Email';
} else {
    $email = strtolower($_POST['email']);
}

if (empty($_POST['phone'])) {
    $data_missing[] = 'Phone Number';
} else {
    $phone = strtolower($_POST['phone']);
}

if (empty($_POST['sex'])) {
    $data_missing[] = 'Sex';
} else {
    $sex = strtolower($_POST['sex']);
}

//check submit
if (empty($data_missing)) {

    require_once("includes/mysqli_connect.php");

    $query = "INSERT INTO students (first_name, last_name, email, phone, sex, date_in) VALUES (?,?,?,?,?,NOW())";

    $stmt = mysqli_prepare($dbc, $query);

    mysqli_stmt_bind_param($stmt, 'sssss', $fname, $lname, $email, $phone, $sex);

    mysqli_stmt_execute($stmt);

    $affected_rows = mysqli_stmt_affected_rows($stmt);

    if ($affected_rows == 1) {
        echo
            '<div class="card border-left-danger shadow w-50 h-20 py-2 mt-5 mx-auto">
            <p class="text-gray-500 px-3 pt-3 pb-0">'.
            "First Name: ". $fname .
            "</br> Last Name: " . $lname .
            "</br> Email: " . $email .
            "</br> Telephone Number: " . $phone .
            "</br> Gender: ". $sex .
            "</br>".'</p>
                  
            <h4 class="text-gray-500 px-3 pt-3 pb-0">'.
            "Student Entered<br/>".'</h4>' . '
            <a class="text-gray-500 px-3" href="addstudent.php">' . "Return to add new student" . '</a>' . '
            <a class="text-gray-500 px-3 pb-3" href="getstudentinfo.php">' . "Go to all students info". '</a></div>';
        mysqli_stmt_close($stmt);
        mysqli_close($dbc);

    } else {
        echo '<div class="card border-left-danger shadow w-50 h-20 py-2 mt-5 mx-auto">
            <h4 class="text-gray-500 px-3 pt-3 pb-0">'."Error Occurred<br/>".'</h4>' . '
            <a class="text-gray-500 px-3 pt-0 pb-3" href="addstudent.php">' . "return to add new student". '</a></div>';
        echo mysqli_error($dbc);
        mysqli_stmt_close($stmt);
        mysqli_close($dbc);
    }
}

    else {
    echo '<div class="card border-left-danger shadow w-50 h-20 py-2 mt-5 mx-auto">
            <h4 class="text-gray-500 px-3 pt-3 pb-0">'."You need to enter the following data<br/>".'</h4>' . '
            <a class="text-gray-500 px-3 pt-0 pb-3" href="addstudent.php">' . "return to add new student". '</a></div>';
    echo  "<br>The info, you have forgot to filled in <br>";
    foreach ($data_missing as $missing) {
        echo "$missing<br/>";
    }
}

?>
    </div>
    </div>
    </div>
<?php include("includes/footer.php"); ?>

