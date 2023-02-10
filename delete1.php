<?php 
 $P_Id = $_GET['P_Id'];
include('connection.php');
$sql = "DELETE FROM tbl_product WHERE P_Id=$P_Id";
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('ecord deleted successfully');</script>";
    echo "<script>window.location.href='sinka.php'</script>";
} else {
  
    echo "<script>alert('Error deleting record: ');</script>";
    echo "<script>window.location.href='sinka.php'</script>";
}

$conn->close();
?>