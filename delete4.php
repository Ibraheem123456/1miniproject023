<?php 
 $E_Id = $_GET['E_Id'];
include('connection.php');
$sql = "DELETE FROM tbl_employee WHERE E_Id=$E_Id";
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('ecord deleted successfully');</script>";
    echo "<script>window.location.href='pnakngan.php'</script>";
} else {
  
    echo "<script>alert('Error deleting record: ');</script>";
    echo "<script>window.location.href='pnakngan.php'</script>";
}

$conn->close();
?>