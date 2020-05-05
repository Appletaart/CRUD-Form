<?php require_once("includes/header.php"); ?>

<!--Start page-->
                <h5 class="alert-light text-danger text-center">Registration an admin</h5>

                <!--input form-->
                <div class="card border-left-danger shadow py-2 mt-2">
                    <div class="col-12 mx-auto">
                        <br>
                        <form action="admin_added.php" method="post">
                            <div class="form-row"> 
                                <div class="form-group col-md-6">
                                    <label for="first_name">First Name</label>
                                    <input type="text" class="form-control" name="first_name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="last_name">Last Name</label>
                                    <input type="text" class="form-control" name="last_name">
                                </div>
                            </div>
                            <!--verify password-->
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="username">Username</label>
                                    <input type="text" name="username" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="password">Password</label>
                                    <!-- Password field -->
                                    <input type="password" name="password" id="myInput" class="form-control">
                                    <!-- An element to toggle between password visibility -->
                                    <input type="checkbox" onclick="myFunction()"> Show Password (max 20)
                                    <script>
                                    function myFunction() {
                                    var x = document.getElementById("myInput");
                                    if (x.type === "password") {
                                    x.type = "text";
                                    } else {
                                    x.type = "password";}}</script>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="department">Department</label>
                                    <select id="department" name="department" class="form-control">
                                        <option selected>Choose...</option>
                                        <option value="kindergarten" <?php if($sex==='kindergarten') echo 'selected="selected"';?> >Kindergarten</option>
                                        <option value="primary" <?php if($sex==='primary') echo 'selected="selected"';?> >Primary</option>
                                        <option value="secondery" <?php if($sex==='secondery') echo 'selected="selected"';?> >Secondery</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="id_number">add ID card number</label>
                                    <input type="number" name="id_number" class="form-control">
                                </div>
                                <!--<div class="form-group col-md-4">
                                    <label for="profile_photo">add profile photo</label>
                                    <input type="file" name="profile_photo" class="form-control">
                                </div>-->
                            </div>
                            <button type="submit" name="submit" value="Get Selected Values" class="btn btn-danger float-right px-5 m-3">Send</button>
                        </form>
                    </div>
                </div>

                <!--table-->
                <div class="row mt-5">
                    <!--search form-->
                    <div class="col-12">
                        <?php  //code return from admin_added ?>
                    </div>
                    <div class="col-12">
                        <?php
                        if($sresult) {
                            echo '<table class="table table-hover mx-3">
            <thead><tr>
                <th scope="col">ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Sex</th>
                <th scope="col" class="text-center">edit</th>
                <th scope="col" class="text-center">delete</th></tr></thead>'; /*confirm delete too*/

                            //while loop show the database
                            while ($row = mysqli_fetch_array($sresult)) {
                                echo ' <tbody>
                <tr>
                <td align="left">' . $row['id'] . '</td>
                <td align="left"> ' . $row['first_name'] . '</td>
                <td align="left"> ' . $row['last_name'] . '</td>
                <td align="left"> ' . $row['email'] . '</td>
                <td align="left"> ' . $row['phone'] . '</td>
                <td align="left"> ' . $row['sex'] . '</td>
                <td align="center"> ' . '<a class="btn btn-outline-danger btn-sm" href="edit_id.php?edit1=' . $row['id'] . '&edit2=' . $row['first_name'] . '&edit3=' . $row['last_name'] . '&edit4=' . $row['email'] . '&edit5=' . $row['phone'] . '&edit6=' . $row['sex'] . '"><i class="fas fa-edit"></i></a>' . '</td>
                <td align="center"> ' . '<a class="btn btn-outline-danger btn-sm" href="includes/delete_id.php?del=' . $row['id'] . '"><i class="far fa-trash-alt"></i></a>' . '</td>';
                                echo '</tr>';}
                            echo '</table>';}
                        //count search result
                        if($sresult > 0) {
                            echo "Total students are $queryResult persons";
                        }// Perform a query, check for error
                        if(!mysqli_query($dbc, $myquery)) { echo "<p class=\"text-gray-500 px-2 pt-3 pb-0\">Sorry, The database could not find the name that you are looking for</p>' . mysqli_error($dbc) . '"; }
                        mysqli_close($dbc);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include("includes/footer.php"); ?>


