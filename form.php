<?php
require_once("includes/connection.php");
if(isset($_POST['save'])) {
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $pnumber=$_POST['pnumber'];
    $queries=$_POST['queries'];

    $query="insert into reg(fname, lname, gender, email, pnumber, queries) values('$fname', '$lname', '$gender', '$email', '$pnumber', '$queries')";
    $run=mysqli_query($conn, $query);

    if($run){
        echo "data inserted successfully";
    }
    else{
        echo "error".mysqli_error($conn);
    }
}


?>