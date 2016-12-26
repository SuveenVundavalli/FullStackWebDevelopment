

<?php

    include 'A217_db.php';

    if(isset($_REQUEST['submit_form'])){

        $username = mysqli_real_escape_string($conn, strip_tags($_REQUEST['name']));
        $email = mysqli_real_escape_string($conn, strip_tags($_REQUEST['email']));
        $contactnumber = mysqli_real_escape_string($conn, strip_tags($_REQUEST['mobile']));
        $notes = mysqli_real_escape_string($conn, strip_tags($_REQUEST['notes']));
        $ins_sql = "INSERT INTO users (u_name, u_email, u_mobile, u_notes) VALUES ('$username', '$email', '$contactnumber', '$notes')";
        $run_sql = mysqli_query($conn, $ins_sql);

    }

    if(isset($_REQUEST['del_id'])){
        $del_sql = "DELETE FROM Users WHERE u_id = '$_REQUEST[del_id]'";
        $del_run = mysqli_query($conn, $del_sql);
    }

    $sql = "SELECT * FROM Users";
    $run = mysqli_query($conn,$sql);
    $srn = 1;

    while($rows = mysqli_fetch_assoc($run)){
        echo "
            <tr>
                <td>$srn</td>
                <td>$rows[u_name]</td>
                <td>$rows[u_email]</td>
                <td>$rows[u_mobile]</td>
                <td>$rows[u_notes]</td>
                <td>
                    <button class='btn btn-primary btn-xs'>Edit</button>
                    <button class='btn btn-danger btn-xs' onclick=delete_func('$rows[u_id]');>Delete</button>
                </td>
            </tr>
        ";
        $srn++;
    }
?>
