<?php
session_start();
include('connection.php');

if ($conn->query("UPDATE tbl_customers SET S_Name = '$_POST[S_Name]',S_LastName = '$_POST[S_LastName]',S_Address = '$_POST[S_Address]',S_SunjectName = '$_POST[S_SunjectName]' WHERE c_no=$_SESSION[c_no];") === TRUE) {
    echo "<script>alert('ecord deleted successfully');</script>";
    echo "<script>window.location.href='lukka.php'</script>";
    header('locatiom: lukka.php');
} else {
  
    echo "<script>alert('Error deleting record: ');</script>";
    echo "<script>window.location.href='lukka.php'</script>";
}

$conn->close();
?>
