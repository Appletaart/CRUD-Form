<?php require_once("includes/header.php");?>
    <h5 class="alert-light text-danger text-center">Total students</h5>

    <!--search bar-->
    <div>
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand"><?php
                //count total students
                $total = "SELECT COUNT(id) FROM students";
                $reCount = mysqli_query($dbc, $total);
                $totals = mysqli_fetch_array($reCount);

                if($totals) {
                    echo "Total students are " . $totals[0] . " persons";
                }else{
                    echo "can not connect to the database" . mysqli_error($totals);
                }
                ?>
            </a>
            <form class="form-inline" action="searchstudent.php" method="post">
                <input class="form-control mr-sm-2" type="search" placeholder="First or last name" aria-label="search" name="search">
                <button class="btn-sm btn-outline-dark my-2 my-sm-0" name="submit_searchBar" type="submit"><i class="fas fa-search"></i></button>
            </form>
        </nav>
        <a class="text-gray-500 px-3 pt-0" href="addstudent.php">Go to add new student</a>
    </div>


    <!--table-->
    <div class="row">
        <?php
        $query = "SELECT * FROM students";
        $response = @mysqli_query($dbc, $query);
        if($response) {
            echo '<table class="table table-hover mx-3">
            <thead><tr>
                <th scope="col">ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Sex</th>
                <th scope="col" class="text-center">Edit</th>
                <th scope="col" class="text-center">Delete</th></tr></thead>';

            //while loop show the database
            while ($row = mysqli_fetch_array($response)) {
                echo ' <tbody>
            <tr>
            <td align="left">' . $row['id'] . '</td>
            <td align="left"> ' . $row['first_name'] . '</td>
            <td align="left"> ' . $row['last_name'] . '</td>
            <td align="left"> ' . $row['email'] . '</td>
            <td align="left"> ' . $row['phone'] . '</td>
            <td align="left"> ' . $row['sex'] . '</td>
            <td align="center"> ' . '<a class="btn btn-outline-danger btn-sm" href="edit_id.php?edit1=' . $row['id'] . '&edit2=' . $row['first_name'] . '&edit3=' . $row['last_name'] . '&edit4=' . $row['email'] . '&edit5=' . $row['phone'] . '&edit6=' . $row['sex'] . '"><i class="fas fa-edit"></i></a>' . '</td>
            <td align="center"> ' . '<a class="btn btn-outline-danger btn-sm" href="includes/delete_info.php?del=' . $row['id'] . '"><i class="far fa-trash-alt"></i></a>' .'</td>';
                echo '</tr>';
            }
            echo '</table>';
        }
        else{
            echo "Couldn't issue database query<br>";
            echo mysqli_error($dbc);
        }
        mysqli_close($dbc);

        ?>
    </div>


    </div>
    </div>
    </div>
<?php include("includes/footer.php"); ?>