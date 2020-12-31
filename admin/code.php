<?php
include('security.php');

$id = $_POST['id'];
$username = $_POST['username'];
$names = $_POST['names'];
$type = $_POST['e_type'];


if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];
    $query = "DELETE FROM `employee` WHERE `eid` = '$id'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: register.php');
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        header('Location: register.php'); 
    }

}




if(isset($_POST['updatebtn']))
{
    echo $id + $username ;
   // $query1 = "INSERT INTO employee (employee_username,Employee_Name,employee_type,employee_password) VAlUES('$username','$names','$type','$password')";
    $query = "UPDATE employee SET employee_username='$username', employee_type='$type', employee_name = '$names WHERE eid='$id' ";
    $q = "UPDATE `employee` SET `Employee_Name`='$names',`employee_username`= '$username',`employee_type`= '$type' WHERE eid = '$id'";
    $query_run = mysqli_query($connection, $q);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: register.php');
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        header('Location: register.php'); 
        //echo "data not saved";
    }
}

if(isset($_POST['registerbtn']))
{
    $names = $_POST['names'];
    $username = $_POST['username'];
    $user_type = $_POST['e_type'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];

    $email_query = "SELECT * FROM employee WHERE employee_username='$username' ";
    $email_query_run = mysqli_query($connection, $email_query);
    if(mysqli_num_rows($email_query_run) > 0)
    {
        $_SESSION['status'] = "Username Already Taken. Please Try Another one.";
        $_SESSION['status_code'] = "error";
        header('Location: login.php');  
    }
    else
    {
        if($password === $cpassword)
        {
            $q ="INSERT INTO `employee` (`eid`, `Employee_Name`, `employee_username`, `employee_type`, `employee_password`) VALUES (NULL, '$names', '$username', '$user_type', '$password')";
            $query1 = "INSERT INTO employee (Employee_Name,employee_username,employee_type,employee_password) VAlUES('$names','$username','$user_type','$password')";
            //$query_run = mysqli_query($connection, $query);
            
            if(mysqli_query($connection, $q))
            {
                // echo "Saved";
                echo 'saved';
                $_SESSION['status'] = "Admin Profile Added";
                $_SESSION['status_code'] = "success";
                //header('Location: index.php');
            }
            else 
            {
                $_SESSION['status'] = "Admin Profile Not Added";
                $_SESSION['status_code'] = "error";
               // header('Location: register.php');  
               die('Error: ' . mysqli_error($connection));
               echo 'not saved';
            }
        }
        else 
        {
            $_SESSION['status'] = "Password and Confirm Password Does Not Match";
            $_SESSION['status_code'] = "warning";
            header('Location: register.php');  
        }
    }

}






?>