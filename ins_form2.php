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
    <title>Insert Page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
       
        <h1 class="mt-5">เพิ่มข้อมูลประเภทสินค้า</h1>
        
    <div class="mb-3">

 <div class="mb-3">
    <form action="create2.php" method="post">
        <label for="Idtype" class="form-label">รหัสประเภทสินค้า</label>
                <input type="text" class="form-control" name="T_Idtype" required>
            </div>
            <div class="mb-3">
                <label for="Nametype" class="form-label">ชื่อประเภทสินค้า</label>
                <input type="text" class="form-control" name="T_Nametype" required>
            </div>
        </div>
        <button type="submit" class="btn btn-success" >Create</button>
        <a class="btn" href="prakpet.php">Back</a>
    </form>
</body>