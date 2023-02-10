<?php
$Id = $_POST["E_Id"];
$Name = $_POST["E_Name"];
$Lastname = $_POST["E_Lastname"];
$Phone = $_POST["E_Phone"];

include('connection.php');
//สร้างคา สั่ง sql
$sql = "INSERT INTO tbl_employee (E_Id , E_Name , E_Lastname , E_Phone) VALUES ( '$Id' , '$Name' , '$Lastname' , '$Phone' )";

if ($conn->query($sql)) 
{
echo "New record created successfully";
echo "<script>window.location.href='pnakngan.php'</script>";
header('location:pnakngan.php'); //กลับไปยังหน้าตาราง
} 
else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
                       
}
$conn->close();
?>