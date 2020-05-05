<?php require_once("includes/header.php"); ?>

<!--Start page-->
                <h5 class="alert-light text-danger text-center">Add a new student</h5>

                <!--input form-->
                <div class="card border-left-danger shadow py-2 mt-2">
                    <div class="col-12 mx-auto">
                        <br>
                        <form action="studentadded.php" method="POST">
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
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="phone">Phone</label>
                                    <input type="number" name="phone" class="form-control">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="sex">Gender</label>
                                    <select id="sex" name="sex" class="form-control">
                                        <option selected>Choose...</option>
                                        <option value="female" <?php if($sex==='female') echo 'selected="selected"';?> >Female</option>
                                        <option value="male" <?php if($sex==='male') echo 'selected="selected"';?> >Male</option>
                                        <option value="unisex" <?php if($sex==='unisex') echo 'selected="selected"';?> >Unisex</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" name="submit" value="Get Selected Values" class="btn btn-danger float-right px-5 m-3">Send</button>
                        </form>
                    </div>
                </div>

                <!--table-->
                <div class="row mt-5">
                    <!--search form-->

                    <nav class="navbar navbar-light w-100 bg-light">
                        <a class="text-gray-500 float-left px-4 " href="getstudentinfo.php">Go to all students info or edit info</a>

                        <form class="form-inline" action="addstudent.php" method="post">
                            <input class="form-control mr-sm-2" type="search" placeholder="First or last name" aria-label="search" name="search">
                            <button class="btn-sm btn-outline-dark my-2 my-sm-0" name="submit_searchBar" type="submit"><i class="fas fa-search"></i></button>
                            <?php
                            if(isset($_POST['submit_searchBar'])) {
                                $search = mysqli_real_escape_string($dbc, $_POST['search']);
                                $myquery = "SELECT * FROM students WHERE lower(first_name) LIKE '%$search%' OR lower(last_name) LIKE '%$search%'";
                                $sresult = mysqli_query($dbc, $myquery);
                                $queryResult = mysqli_num_rows($sresult);

                                if ($queryResult > 0) {
                                }
                            }
                            ?>
                        </form>
                    </nav>
                    <div class="col-12">
                        <?php ?>
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
                <th scope="col" class="text-center">delete</th></tr></thead>';

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