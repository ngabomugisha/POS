<?php
include 'security.php';

$id = $_POST['id'];
$username = $_POST['username'];
$names = $_POST['names'];
$type = $_POST['e_type'];


//***************************** Delete button for product******************************//
if (isset($_POST['delete_btn_product'])) {
    $id = $_POST['delete_id'];
    $query = "DELETE FROM `product` WHERE `pid` = '$id'";
    $query_run = mysqli_query($connection, $query);
    echo 'robert';
    if ($query_run) {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: product.php');
    } else {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        //header('Location: product.php');
        echo 'data not saved';
    }

}

//***************************** Delete button for employee ******************************//
if (isset($_POST['delete_btn'])) {
    $id = $_POST['delete_id'];
    $query = "DELETE FROM `employee` WHERE `eid` = '$id'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: register.php');
    } else {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        header('Location: register.php');
    }

}

//***************************** Update button for Product******************************//
if (isset($_POST['updatebtn_product'])) {
    $pidd = $_POST['id'];
    $p_name = $_POST['p_name'];
    $bn =$_POST['bn'];
    $qty = $_POST['p_quantity'];
    $price = $_POST['p_price'];
    $unit = $_POST['p_unit_package'];
    $sup = $_POST['sup'];

    // $query1 = "INSERT INTO employee (employee_username,Employee_Name,employee_type,employee_password) VAlUES('$username','$names','$type','$password')";
    $query = "UPDATE employee SET employee_username='$username', employee_type='$type', employee_name = '$names WHERE eid='$id' ";
    $q_pro = "UPDATE `product` SET  `Product_Name` = '$p_name', `Bar_code` = '$bn', `Price` = '$price', `p_units_package` = '$unit', `Qty`= '$qty', `Sid` = '$sup' WHERE `pid` = '$pidd'";
    $query_run = mysqli_query($connection, $q_pro);

    if ($query_run) {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        //echo "data save".$pidd;
        header('Location: product.php');
    } else {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        
        die('Error: ' . mysqli_error($connection));
        header('Location: product.php');
        //echo "data not saved";
    }
}


//***************************** Update button for employee******************************//
if (isset($_POST['updatebtn'])) {
    $username = $_POST['username'];
    $type = $_POST['e_type'];
    $names = $_POST['names'];
    $eidd= $_POST['id'];
    // $query1 = "INSERT INTO employee (employee_username,Employee_Name,employee_type,employee_password) VAlUES('$username','$names','$type','$password')";
    $query = "UPDATE employee SET employee_username='$username', employee_type='$type', employee_name = '$names WHERE eid='$eidd' ";
    $q = "UPDATE `employee` SET `Employee_Name`='$names',`employee_username`= '$username',`employee_type`= '$type' WHERE eid = '$id'";
    $query_run = mysqli_query($connection, $q);

    if ($query_run) {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: register.php');
    } else {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        header('Location: register.php');
        //echo "data not saved";
    }
}


//***************************** adding button for product******************************//

if (isset($_POST['add_product'])) {
    $pname = $_POST['p_name'];
    $bn = $_POST['bn'];
    $quantity = $_POST['p_quantity'];
    $unites = $_POST['p_unit_package'];
    $price = $_POST['p_price'];
    $supplier = $_POST['sup'];
    $si = $_POST['sid'];

    $email_query = "SELECT * FROM product WHERE Product_Name = '$pname' ";
    $email_query_run = mysqli_query($connection, $email_query);
    if (mysqli_num_rows($email_query_run) > 0) {
        $_SESSION['status'] = "This product is Already registered. Please Try Another one.";
        $_SESSION['status_code'] = "error";
        header('Location: product.php');
    } else {
        $q2 = "INSERT INTO `product`(`pid`, `Product_Name`, `Bar_code`, `Price`, `p_units_package`, `Qty`, `Sid`) VALUES (null,$pname,$bn,$price,$unites,$quantity,$si)";
        $q = "INSERT INTO `product` (`pid`, `Product_Name`, `Bar_code`, `Price`, `p_units_package`, `Qty`, `Sid`) VALUES (NULL, '$pname', '$bn', '$price', '$unites', '$quantity', '$si')";
        //$query1 = "INSERT INTO employee (Employee_Name,employee_username,employee_type,employee_password) VAlUES('$names','$username','$user_type','$password')";
        //$query_run = mysqli_query($connection, $query);

        if (mysqli_query($connection, $q)) {
            // echo "Saved";
            echo 'saved';
            $_SESSION['status'] = "Product Added";
            $_SESSION['status_code'] = "success";
            header('Location: product.php');
        } else {
            $_SESSION['status'] = "Product Not Added";
            $_SESSION['status_code'] = "error";
            // header('Location: register.php');
            echo 'not saved'.$si."*********";
            die('Error: ' . mysqli_error($connection));

        }
    }

}


//***************************** adding button for employee ******************************//
if (isset($_POST['registerbtn'])) {
    $names = $_POST['names'];
    $username = $_POST['username'];
    $user_type = $_POST['e_type'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];

    $email_query = "SELECT * FROM employee WHERE employee_username='$username' ";
    $email_query_run = mysqli_query($connection, $email_query);
    if (mysqli_num_rows($email_query_run) > 0) {
        $_SESSION['status'] = "Username Already Taken. Please Try Another one.";
        $_SESSION['status_code'] = "error";
        header('Location: login.php');
    } else {
        if ($password === $cpassword) {
            $q = "INSERT INTO `employee` (`eid`, `Employee_Name`, `employee_username`, `employee_type`, `employee_password`) VALUES (NULL, '$names', '$username', '$user_type', '$password')";
            $query1 = "INSERT INTO employee (Employee_Name,employee_username,employee_type,employee_password) VAlUES('$names','$username','$user_type','$password')";
            //$query_run = mysqli_query($connection, $query);

            if (mysqli_query($connection, $q)) {
                // echo "Saved";
                echo 'saved';
                $_SESSION['status'] = "Admin Profile Added";
                $_SESSION['status_code'] = "success";
                //header('Location: index.php');
            } else {
                $_SESSION['status'] = "Admin Profile Not Added";
                $_SESSION['status_code'] = "error";
                // header('Location: register.php');
                die('Error: ' . mysqli_error($connection));
                echo 'not saved';
            }
        } else {
            $_SESSION['status'] = "Password and Confirm Password Does Not Match";
            $_SESSION['status_code'] = "warning";
            header('Location: register.php');
        }
    }

}
