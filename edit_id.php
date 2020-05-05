<?php require_once("includes/header.php");?>
<h5 class="alert-light text-danger text-center">Update student information</h5>


<!--form-->
<div class="card border-left-danger shadow py-2 mt-5">
    <div class="col-12 mx-auto">

        <p class="text-gray-100">
        </p>

        <h5>Update data <?php echo "student ID " .$_GET['edit1']. " Name ".$_GET['edit2'];?></h5>
        <br>
        <form action="edit_id.php" method="POST">
            <div class="form-row">
                <input type="text" hidden class="form-control" name="id" value="<?php echo $_GET['edit1'];?>">
                <div class="form-group col-md-6">
                    <label for="first_name">First Name</label>
                    <input type="text" class="form-control" name="first_name" value="<?php echo $_GET['edit2'];?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" name="last_name" value="<?php echo $_GET['edit3'];?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" value="<?php echo $_GET['edit4'];?>">
                </div>
                <div class="form-group col-md-4">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" class="form-control" value="<?php echo $_GET['edit5'];?>">
                </div>
                <div class="form-group col-md-2">
                    <label for="sex">Gender</label>
                    <?php $sex = $_GET['edit6']; ?>
                    <select id="sex" name="sex" class="form-control">
                        <option selected>Choose...</option>
                        <option value="Female" <?php if($sex==='female') echo 'selected="selected"';?> >Female</option>
                        <option value="Male" <?php if($sex==='male') echo 'selected="selected"';?> >Male</option>
                        <option value="Unisex" <?php if($sex==='unisex') echo 'selected="selected"';?> >Unisex</option>
                    </select>
                </div>
            </div>
            <button type="submit" name="submit" value="Get Selected Values" class="btn btn-danger float-right px-5 m-3">Update</button>
        </form>
    </div>
</div>

<div class="mt-5">
    <?php

    if(isset($_POST['submit'])) {

        $idnew = strtolower($_POST['id']);
        $fname = strtolower($_POST['first_name']);
        $lname = strtolower($_POST['last_name']);
        $email = strtolower($_POST['email']);
        $phone = strtolower($_POST['phone']);
        $sex = strtolower($_POST['sex']);

        echo "ID: ". $idnew . "
        </br> First Name: ". $fname."
        </br> Last Name: " . $lname. "
        </br> Email: " . $email. "
        </br> Telephone Number: " .$phone. "
        </br> Gender: ". $sex .'<br>';

        $sql = "UPDATE students SET first_name =?, last_name =?, email =?, phone =?, sex =? WHERE id =$idnew";
        $stmt = mysqli_prepare($dbc, $sql);
        mysqli_stmt_bind_param($stmt, 'sssss', $fname, $lname, $email, $phone, $sex);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_execute($stmt);
        if($result){
            echo '<h4 class="text-gray-500 pt-3 pb-0">'."Student updated<br/>". '</h4><a class="text-gray-500 pt-0 pb-3" href="addstudent.php">' . "return to add new student". '</a></br><a class="text-gray-500 pt-0 pb-3" href="getstudentinfo.php">' . "return to students info". '</a>';
            mysqli_stmt_close($stmt);
            mysqli_close($dbc);
        }else{
            echo '<h4 class="text-gray-500 pt-3 pb-0">'."Cannot update your data<br/>" . mysqli_error($dbc) . '</h4><a class="text-gray-500 pt-0 pb-3" href="addstudent.php">' . "return to add new student". '</a></br><a class="text-gray-500 pt-0 pb-3" href="getstudentinfo.php">' . "return to students info". '</a>';
            mysqli_stmt_close($stmt);
            mysqli_close($dbc);
        }
    }
    ?>
</div>



</div>
</div>
</div>
<?php include("includes/footer.php"); ?>
