<?php 
 $T_Idtype = $_GET['T_Idtype'];
include('connection.php');
$sql = "DELETE FROM tbl_type WHERE T_Idtype=$T_Idtype";
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('ecord deleted successfully');</script>";
    echo "<script>window.location.href='prakpet.php'</script>";
} else {
  
    echo "<script>alert('Error deleting record: ');</script>";
    echo "<script>window.location.href='prakpet.php'</script>";
}

$conn->close();
?>