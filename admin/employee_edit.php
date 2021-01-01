<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
include('security.php')
?>

<br/>
<div class="container-fluid">
<div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> EDIT Employee Details </h6>
        </div>
        <div class="card-body">
<?php

$server_name = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "pos";

$connection = mysqli_connect($server_name,$db_username,$db_password,$db_name);
    if(isset($_POST['edit_btn']))
    {
        $id = $_POST['edit_id'];

        $query = "SELECT * FROM employee WHERE eid = '$id'";
        $query_run = mysqli_query($connection,$query);
        
        foreach($query_run as $row)
        {

?>
<form method="POST" action="code.php">
        <div class="form-group">
                <label> Username </label>
                <input type="text" name="username" class="form-control" value="<?php echo $row['employee_username']; ?>" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="names" class="form-control" value="<?php echo $row['Employee_Name'] ?>" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label>Employee Type</label>
                    <select  name="e_type" class="form-control">
                    <?php
                    if($row['employee_type'] == "Manager")
                    {?>
                        <option value = "Manager" selected = "selected">Manager</option>
                        <option value = "Cashier">Cashier</option>
                    <?php }
                    else{
                        ?>
                        <option value = "Cashier" selected = "selected">Cashier</option>
                        <option value = "Manager">Manager</option>
                        <?php
                    }
                    ?>
                    </select>
            </div>
            <input type="hidden" value="<?php echo $row['eid'] ?>" name="id"/>
            <a href="register.php" class= "btn btn-danger"> CANCEL</a>
            <button  type="submit" name="updatebtn" class="btn btn-primary"> UPDATE </button>
        </form>
<?php
        }}
        ?>
        </div>
</div>


<?php
include('includes/scripts.php');
include('includes/footer.php');
?>