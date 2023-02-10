<?php
$Idtype = $_POST["T_Idtype"];
$Nametype = $_POST["T_Nametype"];

include('connection.php');
//สร้างคา สั่ง sql
$sql = "INSERT INTO tbl_type (T_Idtype , T_Nametype ) VALUES ( '$Idtype' , '$Nametype' )";

if ($conn->query($sql)) 
{
echo "New record created successfully";
echo "<script>window.location.href='prakpet.php'</script>";
header('location:prakpet.php'); //กลับไปยังหน้าตาราง
} 
else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
                       
}
$conn->close();
?>