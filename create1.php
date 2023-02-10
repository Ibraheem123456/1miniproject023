<?php
$Id = $_POST["P_Id"];
$Name = $_POST["P_Name"];
$Price = $_POST["P_Price"];
$Number = $_POST["P_Number"];

include('connection.php');
//สร้างคา สั่ง sql
$sql = "INSERT INTO tbl_product (P_Id , P_Name , P_Price , P_Number) VALUES ( '$Id' , '$Name' , '$Price' , '$Number' )";

if ($conn->query($sql)) 
{
echo "New record created successfully";
echo "<script>window.location.href='sinka.php'</script>";
header('location:sinka.php'); //กลับไปยังหน้าตาราง
} 
else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
                       
}
$conn->close();
?>