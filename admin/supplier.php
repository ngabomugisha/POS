<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
include('security.php')
?>


<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Regeistered Customer</h5>
      </div>
      <form action="code.php" method="POST">
        <div class="modal-body">

            <div class="form-group">
                <label> Supplier Name </label>
                <input type="text" name="p_name" class="form-control" placeholder="Enter Product name">
            </div>
            <div class="form-group">
                <label>TP Number</label>
                <input type="text" name="bn" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label>Registered On</label>
                <input type="text" name="bn" class="form-control" placeholder="">
            </div>
          </div>
    </div>
  </div>
</div>


        <?php

            if(isset($_POST['edit_btn']))
            {
                $id = $_POST['edit_id'];
                
                $query = "SELECT * FROM employee WHERE eid='$id' ";
                $query_run = mysqli_query($connection, $query);

                foreach($query_run as $row)
                {
                    ?>

                        <form action="code.php" method="POST">

                            <input type="hidden" name="edit_id" value="<?php echo $row['eid'] ?>">

                            <div class="form-group">
                                <label> Username </label>
                                <input type="text" name="edit_username" value="<?php echo $row['employee_username'] ?>" class="form-control"
                                    placeholder="Enter Username">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="edit_name" value="<?php echo $row['Employee_Name'] ?>" class="form-control"
                                    placeholder="Enter Email">
                            </div>
                            <div class="form-group">
                                <label>Employee Type</label>
                                <select  name="e_type" class="form-control">
                                <?php
                                if($row['employee_type'] == Manager)
                                {?>
                                    <option value = "Manager">Manager</option>
                                <?php }
                                else{
                                    ?>
                                    <option value = "Cashier">Cashier</option>
                                    <?php
                                }
                                ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="edit_password" value="<?php echo $row['employee_password'] ?>"
                                    class="form-control" placeholder="Enter Password">
                            </div>

                            <a href="register.php" class="btn btn-danger"> CANCEL </a>
                            <button type="submit" name="updatebtn" class="btn btn-primary"> Update </button>

                        </form>
                        <?php
                }
            }
        ?>



<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">

    </h6>
  </div>

  <div class="card-body">

    <div class="table-responsive">

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <?php
                $query = "SELECT * FROM supplier ORDER BY supplier_Name";
                $query_run = mysqli_query($connection, $query);
            ?>
        <thead>
          <tr>
            <th> # </th>
            <th> Supplier Name </th>
            <th> TIN Number </th>
            <th> Registered on </th>
          </tr>
        </thead>
        <tbody>
        <?php
                        if(mysqli_num_rows($query_run) > 0)        
                        {
                          $count++;
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                        ?>
                            <tr>
                                <td><?php  echo $count++; ?></td>
                                <td><?php  echo $row['supplier_Name']; ?></td>
                                <td><?php  echo $row['Tp_Number']; ?></td>
                                <td><?php  echo $row['sregTime']; ?></td>
                            </tr>
                        <?php
                            } 
                        }
                        else {
                            echo "No Record Found";
                        }
                        ?>
        
        </tbody>
      </table>

    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>