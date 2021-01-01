<?php
include 'includes/header.php';
include 'includes/navbar.php';
include 'security.php'
?>

<br/>
<div class="container-fluid">
<div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> EDIT Product Details </h6>
        </div>
        <div class="card-body">
<?php

$server_name = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "pos";

$connection = mysqli_connect($server_name, $db_username, $db_password, $db_name);
if (isset($_POST['edit_btn'])) {
    $id = $_POST['edit_id'];

    $query = "SELECT * FROM product WHERE pid = '$id'";
    $query_run = mysqli_query($connection, $query);

    foreach ($query_run as $row) {

        ?>
 <form action="code.php" method="POST">
        <div class="modal-body">

            <div class="form-group">
                <label> Product Name </label>
                <input type="text" name="p_name" class="form-control" placeholder="Enter Product name" value="<?php echo $row['Product_Name']; ?>">
            </div>
            <div class="form-group">
                <label>Barcode Number</label>
                <input type="text" name="bn" class="form-control" placeholder="" value="<?php echo $row['Bar_code']; ?>">
            </div>
            <div class="form-group">
                <label> Product Quantity</label>
                <input type="text" name="p_quantity" class="form-control" placeholder="Enter Product Quantity" value="<?php echo $row['Qty']; ?>">
            </div>
            <div class="form-group">
                <label>Unit per Package</label>
                <input type="number" name="p_unit_package" class="form-control" placeholder="Enter Product Price per Unity or Package" value="<?php echo $row['p_units_package']; ?>">
            </div>
            <div class="form-group">
                <label>Product Price</label>
                <input type="number" name="p_price" class="form-control" placeholder="Enter Product Price per Package" value="<?php echo $row['Price']; ?>">
            </div>
            <?php
                $query = "SELECT * FROM supplier";
                $query_run = mysqli_query($connection, $query);
            ?>
            <div class="form-group">
                <label>Select Supplier</label>
                <select  name="sup" class="form-control">
                <?php
                $idd = $row['Sid'];
                foreach ($query_run as $row2) {
                        $sn = $row2['supplier_Name'];
                        $sid = $row2['sid'];
                        if ($idd == $sid) {
                ?>
                <option selected="selected' value = "<?php echo $sid; ?>">
                <?php echo $sn; ?>
                </option>
            <?php
            } else {
            ?>
                <option value = "<?php
                echo $sid;
                ?>"
                >
                <?php echo $sn; ?>
                </option>
                <?php
}
        }
        ?>
                </select>
            </div>
        </div>
        
        <input type="hidden" value="<?php echo $row['pid'] ?>" name="id"/>
            <a href="product.php" class= "btn btn-danger"> CANCEL</a>
            <button  type="submit" name="updatebtn_product" class="btn btn-primary"> UPDATE </button>
      </form>


<?php
}}
?>
        </div>
</div>


<?php
include 'includes/scripts.php';
include 'includes/footer.php';
?>