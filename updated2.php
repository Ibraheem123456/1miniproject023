<?php
session_start();
include('connection.php');

if ($conn->query("UPDATE tbl_type SET T_Idtype = '$_POST[T_Idtype]',T_Nametype = '$_POST[T_Nametype]' WHERE T_Idtype=$_SESSION[T_Idtype];") === TRUE) {
    echo "<script>alert('ecord deleted successfully');</script>";
    echo "<script>window.location.href='prakpet.php'</script>";
    header('locatiom: prakpet.php');
} else {
  
    echo "<script>alert('Error deleting record: ');</script>";
    echo "<script>window.location.href='prakpet.php'</script>";
}

$conn->close();
?>
