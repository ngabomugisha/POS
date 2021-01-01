<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
include('security.php')
?>


<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">
        <div class="modal-body">

            <div class="form-group">
                <label> Product Name </label>
                <input type="text" name="p_name" class="form-control" placeholder="Enter Product name">
            </div>
            <div class="form-group">
                <label>Barcode Number</label>
                <input type="text" name="bn" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label> Product Quantity</label>
                <input type="text" name="p_quantity" class="form-control" placeholder="Enter Product Quantity">
            </div>
            <div class="form-group">
                <label>Unit per Package</label>
                <input type="number" name="p_unit_package" class="form-control" placeholder="Enter Product Price per Unity or Package">
            </div>
            <div class="form-group">
                <label>Product Price</label>
                <input type="number" name="p_price" class="form-control" placeholder="Enter Product Price per Package">
            </div>
            <?php
                $query = "SELECT * FROM supplier";
                $query_run = mysqli_query($connection, $query);
            ?>
            <div class="form-group">
                <label>Select Supplier</label>
                <select  name="sup" class="form-control">
                <?php
                foreach($query_run as $row)
                {
                  $sn = $row['supplier_Name'];
                  $sid = $row['sid'];
                  ?>
                <option value = "<?php 
                echo $sid; 
                ?>"
                > 
                <?php echo $sn; ?>
                </option>
                <?php
                }
                ?>
                </select>
            </div>
        </div>
        <div class="modal-footer">
        <input type="hidden" name="sid" value="
                <?php echo $sid; ?>">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="add_product" class="btn btn-primary">Save</button>
        </div>
      </form>

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
    <h6 class="m-0 font-weight-bold text-primary">List of all Products
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Add new Product 
            </button>
    </h6>
  </div>

  <div class="card-body">

    <div class="table-responsive">

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <?php
                $query = "SELECT * FROM product_view ORDER BY Product_Name";
                $query_run = mysqli_query($connection, $query);
            ?>
        <thead>
          <tr>
            <th> Product Name </th>
            <th> Barcode </th>
            <th> Quantity </th>
            <th> Units per package </th>
            <th> Price per package</th>
            <th> Supllier </th>
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
                                <td><?php  echo $row['Product_Name']; ?></td>
                                <td><?php  echo $row['Bar_code']; ?></td>
                                <td><?php  echo $row['Qty']; ?></td>
                                <td><?php  echo $row['p_units_package	']; ?></td>
                                <td><?php  echo $row['Price']; ?></td>
                                <td><?php  echo $row['supplier_Name']; ?></td>
                                <td>
                                    <form action="employee_edit.php" method="post">
                                        <input type="hidden" name="edit_id" value="<?php echo $row['pid']; ?>">
                                        <button type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="code.php" method="post">
                                        <input type="hidden" name="delete_id" value="<?php echo $row['pid']; ?>">
                                        <button type="submit" name="delete_btn_product" class="btn btn-danger"> DELETE</button>
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