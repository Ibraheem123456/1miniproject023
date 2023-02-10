<?php
$Sale = $_POST["S_Sale"];
$Idcustomer = $_POST["S_Idcustomer"];
$Idemployee = $_POST["S_Idemployee"];
$Dateout = $_POST["S_Dateout"];

include('connection.php');
//สร้างคา สั่ง sql
$sql = "INSERT INTO tbl_sale (S_Sale , S_Idcustomer , S_Idemployee , S_Dateout) VALUES ( '$Sale' , '$Idcustomer' , '$Idemployee' , '$Dateout' )";

if ($conn->query($sql)) 
{
echo "New record created successfully";
echo "<script>window.location.href='kankay.php'</script>";
header('location:kankay.php'); //กลับไปยังหน้าตาราง
} 
else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
                       
}
$conn->close();
?>