<?php
session_start();
include('connection.php');

if ($conn->query("UPDATE tbl_sale SET S_Sale= '$_POST[S_Sale]',S_Idcustomer = '$_POST[S_Idcustomer]',S_Idemployee = '$_POST[S_Idemployee]',S_Dateout = '$_POST[S_Dateout]' WHERE S_Sale=$_SESSION[S_Sale];") === TRUE) 
{
    echo "<script>alert('ecord deleted successfully');</script>";
    echo "<script>window.location.href='kankay.php'</script>";
    header('locatiom: kankay.php');
} 
else 
{
  
    echo "<script>alert('Error deleting record: ');</script>";
    echo "<script>window.location.href='kankay.php'</script>";
}

$conn->close();
?>
