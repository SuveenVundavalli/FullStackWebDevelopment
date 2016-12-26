<?php
    $server = "localhost";
    $username = "php_tutorials";
    $password = "12345678";
    $db = "PHP_Tutorials";
    // Connecting to Database
    $conn = mysqli_connect($server,$username,$password,$db);
?>
<!doctype html>
<html lang="en">
<head>
    <title>PHP Database Row Edit</title>

    <script   src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>

<!--
    For edit and deletion, We added two new buttons in the display table
    add post method for delete option and then run mysqli command to delete the row with id

-->


<body>
    <div class="container">
    <div class="jumbotron">
        <h2>Simple CRUD (Create . Read . Update . Delete)</h2>
        <h3><a href="PHP204_BootstrapAndDatabaseDataEdit.php">PHP with MySQL</a></h3>
    </div>
        <?php
            if(isset($_GET['edit_id'])){
                $sql = "SELECT * FROM Users WHERE ID = '$_GET[edit_id]'";
                $run = mysqli_query($conn,$sql);
                while($rows = mysqli_fetch_assoc($run)) {
                    $name = $rows['Name'];
                    $email = $rows['Email'];
                    $mobile = $rows['Mobile'];
                    $dob = $rows['DOB'];
                    $password = $rows['Password'];

                }
                ?>
                <div class="well">
                    <form action="" method="post">
                        <h3>Edit Form</h3>
                        <div class="form-group">
                            <label for="">Name <sup>*</sup></label>
                            <input type="text" label="Name" name="edit_Name" value = "<?php echo $name;?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">E-Mail <sup>*</sup></label>
                            <input type="email" class="form-control" value = "<?php echo $email;?>" name="edit_Email" required>
                        </div>
                        <div class="form-group">
                            <label for="">Password <sup>*</sup></label>
                            <input type="password" class="form-control" name="_editPassword" value = "<?php echo $password;?>" required>
                        </div>
                        <div class="form-group">
                            <label for="">Date of Birth <sup>*</sup></label>
                            <input type="date" class="form-control" name="edit_DOB" value = "<?php echo $dob;?>" required>
                        </div>
                        <div class="form-group">
                            <label for="">Mobile Number </label>
                            <input type="text" class="form-control" name="edit_Mobile" value = "<?php echo $mobile;?>">
                        </div>
                        <div class="form-group">
                            <input type="hidden" value = "<?php echo $_GET['edit_id'];?>" class="btn btn-success btn-block" name="edit_user_id">
                            <input type="submit" value = "Done Editing" class="btn btn-success btn-block" name="edit_user">
                        </div>

                    </form>
                </div>

        <?php

            } else {
                ?>
                <div class="well">
                    <form action="" method="post">
                        <h3>Sign Up</h3>
                        <div class="form-group">
                            <label for="">Name <sup>*</sup></label>
                            <input type="text" label="Name" name="Name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">E-Mail <sup>*</sup></label>
                            <input type="email" class="form-control" name="Email" required>
                        </div>
                        <div class="form-group">
                            <label for="">Password <sup>*</sup></label>
                            <input type="password" class="form-control" name="Password" required>
                        </div>
                        <div class="form-group">
                            <label for="">Date of Birth <sup>*</sup></label>
                            <input type="date" class="form-control" name="DOB" required>
                        </div>
                        <div class="form-group">
                            <label for="">Mobile Number </label>
                            <input type="text" class="form-control" name="Mobile">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success btn-block" name="Signup">
                        </div>

                    </form>
                </div>
        <?php


            }

        ?>

        <?php
            //Selecting All rows from Table Users
            $sql = "SELECT * FROM Users";

            // Connecting and then selecting
            $run = mysqli_query($conn,$sql);

            //Displaying information from database
            echo "
                    <table class='table'>
                        <thead>
                            <tr>
                                <th>S. No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Mobile</th>
                                <th>Date of birth</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                 ";

            $c = 1;
            while( $rows = mysqli_fetch_assoc($run)){
                echo "
                    
                            <tr>
                                <td>$c</td>
                                <td>$rows[Name]</td>
                                <td>$rows[Email]</td>
                                <td>$rows[Password]</td>
                                <td>$rows[Mobile]</td>
                                <td>$rows[DOB]</td>
                                <td><a href='PHP204_BootstrapAndDatabaseDataEdit.php?edit_id=$rows[ID]' class='btn btn-success'>Edit</a></td>
                                <td><a href='PHP204_BootstrapAndDatabaseDataEdit.php?del_id=$rows[ID]' class='btn btn-danger'>Delete</a></td>
                
                            </tr>
                            ";
                $c++;
            }
            echo "
                        </tbody>
                    </table>
                    ";

        ?>
    </div>


</body>
</html>

<?php

    // Inserting New User
    if(isset($_POST['Signup'])){
         $Name = mysqli_real_escape_string($conn,strip_tags($_POST['Name']));
         $Email = mysqli_real_escape_string($conn,strip_tags($_POST['Email']));
         $Date = date('Y-m-d');
         $DOB = mysqli_real_escape_string($conn,strip_tags($_POST['DOB']));
         $Password = mysqli_real_escape_string($conn,strip_tags($_POST['Password']));
        if(isset($_POST['Mobile'])){
             $Mobile = mysqli_real_escape_string($conn,strip_tags($_POST['Mobile']));
        }

        //Inserting Data
        $ins_sql = "INSERT INTO Users (Name, Email, Password, Mobile, Date, DOB) VALUES ('$Name','$Email','$Password','$Mobile', '$Date','$DOB')";

        //$run = mysqli_query($conn,$ins_sql);

        if(mysqli_query($conn,$ins_sql)){
            ?>
            <script>window.location='PHP204_BootstrapAndDatabaseDataEdit.php'</script>
<?php
        };

    }
    // Deleting User
    if(isset($_GET['del_id'])){
        $del_sql = "DELETE FROM Users WHERE ID = '$_GET[del_id]'";
        if(mysqli_query($conn,$del_sql)){
            ?>
            <script>window.location='PHP204_BootstrapAndDatabaseDataEdit.php'</script>

<?php
        }
    }


    // Editing User
    if(isset($_POST['edit_user'])){
        $edit_Name = mysqli_real_escape_string($conn,strip_tags($_POST['edit_Name']));
        $edit_Email = mysqli_real_escape_string($conn,strip_tags($_POST['edit_Email']));
        $edit_Date = date('Y-m-d');
        $edit_ID = mysqli_real_escape_string($conn,strip_tags($_POST['edit_user_id']));
        $edit_DOB = mysqli_real_escape_string($conn,strip_tags($_POST['edit_DOB']));
        $edit_Password = mysqli_real_escape_string($conn,strip_tags($_POST['edit_Password']));
        if(isset($_POST['edit_Mobile'])){
            $edit_Mobile = mysqli_real_escape_string($conn,strip_tags($_POST['edit_Mobile']));
        }
        $edit_sql = "UPDATE Users SET Name = '$edit_Name', Email = '$edit_Email', Password = '$edit_Password', Mobile = '$edit_Mobile', Date = '$edit_Date', DOB = '$edit_DOB' WHERE ID = '$edit_ID' ";

        if(mysqli_query($conn,$edit_sql)){
            ?>
            <script>window.location='PHP204_BootstrapAndDatabaseDataEdit.php'</script>

            <?php
        }
    }




?>

