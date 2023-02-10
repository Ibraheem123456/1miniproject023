<?php 
 $S_Sale = $_GET['S_Sale'];
include('connection.php');
$sql = "DELETE FROM tbl_sale WHERE S_Sale=$S_Sale";
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('ecord deleted successfully');</script>";
    echo "<script>window.location.href='kankay.php'</script>";
} else {
  
    echo "<script>alert('Error deleting record: ');</script>";
    echo "<script>window.location.href='kankay.php'</script>";
}

$conn->close();
?>