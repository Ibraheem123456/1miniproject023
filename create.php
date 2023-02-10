<?php
$name = $_POST["S_Name"];
$lastname = $_POST["S_LastName"];
$address = $_POST["S_Address"];
$sunjectname = $_POST["S_SunjectName"];

include('connection.php');
//สร้างคา สั่ง sql
$sql = "INSERT INTO tbl_customers (S_Name , S_LastName , S_Address , S_SunjectName) VALUES ( '$name' , '$lastname' , '$address' , '$sunjectname' )";

if ($conn->query($sql)) 
{
echo "New record created successfully";
echo "<script>window.location.href='lukka.php'</script>";
header('location:lukka.php'); //กลับไปยังหน้าตาราง
} 
else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
                       
}
$conn->close();
?>