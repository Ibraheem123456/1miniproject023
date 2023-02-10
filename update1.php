<?php 
    session_start();
    include('connection.php');
    $Id = $_GET['P_Id'];
    $sql = "SELECT * FROM tbl_product WHERE P_Id= $Id";
    $result = $conn->query($sql);

    $row;
    
    if($result->num_rows > 0) 
    {
        $row = $result->fetch_assoc();
        $_SESSION['P_Id'] = $Id;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Product</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="mt-3">แก้ไขข้อมูล</h1>
        <hr>
        <form action="updated1.php" method="POST">
            <label for="P_Id" class="form-label">รหัสสินค้า</label>
            <input class="form-control" type="text" name="P_Id" value="<?php echo $row['P_Id']; ?>">
            <label for="P_Name" class="form-label">ชื่อสินค้า</label>
            <input class="form-control" type="text"  name="P_Name" value="<?php echo $row['P_Name']; ?>">
            <label for="P_Price" class="form-label">ราคาสินค้า</label>
            <input class="form-control" type="text" name="P_Price" value="<?php echo $row['P_Price']; ?>">
            <label for="P_Number" class="form-label">จำนวนสินค้า</label>
            <input class="form-control" type="text" name="P_Number" value="<?php echo $row['P_Number']; ?>">
            <input class="btn btn-success mt-3" type="submit" value="Update">
            <a href="sinka.php" class="btn btn-primary mt-3">Go Back</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>