<?php session_start();
include('connection.php');
$ID = $_SESSION['a_id'];
$name = $_SESSION['a_username'];
$level = $_SESSION['a_level'];
if($level!='A'){
Header("Location:logout.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body style="background:#293242;">
<div class="container">
 <?php include("menu.php");?>
    <table id="mytable" class="table table-bordered table-striped"> 
        <h2 style="color: white;">ข้อมูลสินค้า</h2>
<div class="mb-3">   

<thead>    
</thead>
<tr>
<th style="color: white;">รหัสสินค้า</th>
<th style="color: white;">ชื่อสินค้า</th>
<th style="color: white;">ราคาสินค้า</th>
<th style="color: white;">จำนวนสินค้า</th>
<th style="color: white;">Action</th>
</tr>
<div class="container">  
    <a href="ins_form1.php" class="btn btn-success">เพิ่มข้อมูลสินค้า</a>
<div class="mb-3">   
</thead>
<tbody>
<?php
include('connection.php');
$sql = "SELECT * FROM tbl_product";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
//แสดงข้อมูลเป็นตาราง
while($row = $result->fetch_assoc()) {
echo '<tr>';
echo '<td style="color: white;">'. $row['P_Id'] . '</td>';
echo '<td style="color: white;">'. $row['P_Name'] . '</td>';
echo '<td style="color: white;">'. $row['P_Price'] . '</td>';
echo '<td style="color: white;">'. $row['P_Number'] . '</td>';
echo '<td style="color: white;"><a role="button"  href="update1.php?P_Id='.$row['P_Id'].'" class="btn btn-primary">Update</a> ';  //ปุ่มที่เพิ่มเข้ามา
echo '<a href="delete1.php?P_Id='.$row['P_Id'].'" class="btn btn-danger">delete</a>';  //ปุ่มที่เพิ่มเข้ามา
echo '</tr>';
}
} else {
echo " ";
}
$conn->close();
?>
</tbody>
</table>
</div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>

