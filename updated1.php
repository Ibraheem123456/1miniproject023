<?php
session_start();
include('connection.php');

if ($conn->query("UPDATE tbl_product SET P_Id = '$_POST[P_Id]',P_Name = '$_POST[P_Name]',P_Price = '$_POST[P_Price]',P_Number = '$_POST[P_Number]' WHERE P_Id=$_SESSION[P_Id];") === TRUE) {
    echo "<script>alert('ecord deleted successfully');</script>";
    echo "<script>window.location.href='sinka.php'</script>";
    header('locatiom: sinka.php');
} else {
  
    echo "<script>alert('Error deleting record: ');</script>";
    echo "<script>window.location.href='sinka.php'</script>";
}

$conn->close();
?>
