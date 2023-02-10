<?php
session_start();
include('connection.php');

if ($conn->query("UPDATE tbl_employee SET E_Id = '$_POST[E_Id]',E_Name = '$_POST[E_Name]',E_Lastname = '$_POST[E_Lastname]',E_Phone = '$_POST[E_Phone]' WHERE E_Id=$_SESSION[E_Id];") === TRUE) 
{
    echo "<script>alert('ecord deleted successfully');</script>";
    echo "<script>window.location.href='pnakngan.php'</script>";
    header('locatiom: pnakngan.php');
} 
else 
{
  
    echo "<script>alert('Error deleting record: ');</script>";
    echo "<script>window.location.href='pnakngan.php'</script>";
}

$conn->close();
?>
