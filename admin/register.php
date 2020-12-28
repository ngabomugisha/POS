<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
include('security.php')
?>


<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">
        <div class="modal-body">

            <div class="form-group">
                <label> Username </label>
                <input type="text" name="username" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="names" class="form-control" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label>Employee Type</label>
                <select  name="e_type" class="form-control">
                <option value = "Manager">Manager</option>
                <option value = "Cashier">Cashier</option>
                </select>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password">
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password">
            </div>
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>

<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> EDIT Admin Profile </h6>
        </div>
        <div class="card-body">
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
        </div>
    </div>
</div>

</div>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Admin Profile 
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Add Admin Profile 
            </button>
    </h6>
  </div>

  <div class="card-body">

    <div class="table-responsive">

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <?php
                $query = "SELECT * FROM employee";
                $query_run = mysqli_query($connection, $query);
            ?>
        <thead>
          <tr>
            <th> name </th>
            <th> Username </th>
            <th>user Type </th>
            <th>Password</th>
            <th>EDIT </th>
            <th>DELETE </th>
          </tr>
        </thead>
        <tbody>
        <?php
                        if(mysqli_num_rows($query_run) > 0)        
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                        ?>
                            <tr>
                                <td><?php  echo $row['Employee_Name']; ?></td>
                                <td><?php  echo $row['employee_username']; ?></td>
                                <td><?php  echo $row['employee_type']; ?></td>
                                <td><?php  echo $row['employee_password']; ?></td>
                                <td>
                                    <form action="employee_edit.php" method="post">
                                        <input type="hidden" name="edit_id" value="<?php echo $row['eid']; ?>">
                                        <button type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="code.php" method="post">
                                        <input type="hidden" name="delete_id" value="<?php echo $row['eid']; ?>">
                                        <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                                    </form>
                                </td>
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