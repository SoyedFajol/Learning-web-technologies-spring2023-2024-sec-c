<?php
require_once "db.php";

//function to add 
function add_products ($product) 
{
    $con = getconnection();
    $sql = "INSERT INTO product VALUES ('','{$product['name']}','{$product['buying_price']}','{$product['selling_price']}' ,  '{$product['displayable']}' )";

    $status = mysqli_query($con, $sql);
    if ($status)
    {
        return true ; 
    }
    else 
    {
        return false ; 
    }
}
// function to update product 
function update_product($product)
{
    $con = getconnection();
    $sql = "UPDATE product 
            SET name = '{$product['name']}' , buying_price = '{$product['buying_price']}', selling_price = '{$product['selling_price']}'
            WHERE id = '{$product['id']}'";

    $status = mysqli_query($con , $sql);
    return $status;

}
// function to delete specific product
function delete_product($product)
{
    $con = getconnection();
    $sql = "DELETE FROM product WHERE id = '{$product['id']}'";
    $status = mysqli_query ($con , $sql);
    return $status ;

}
?>