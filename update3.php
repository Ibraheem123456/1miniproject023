<?php 
    session_start();
    include('connection.php');
    $Sale = $_GET['S_Sale'];
    $sql = "SELECT * FROM tbl_Sale WHERE S_Sale= $Sale";
    $result = $conn->query($sql);

    $row;
    
    if($result->num_rows > 0) 
    {
        $row = $result->fetch_assoc();
        $_SESSION['S_Sale'] = $Sale;
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
        <form action="updated3.php" method="POST">
            <label for="S_Sale" class="form-label">รหัสการขาย</label>
            <input class="form-control" type="text" name="S_Sale" value="<?php echo $row['S_Sale']; ?>">
            <label for="S_Idcustomer" class="form-label">รหัสลูกค้า</label>
            <input class="form-control" type="text"  name="S_Idcustomer" value="<?php echo $row['S_Idcustomer']; ?>">
            <label for="S_Idemployee" class="form-label">รหัสพนักงาน</label>
            <input class="form-control" type="text" name="S_Idemployee" value="<?php echo $row['S_Idemployee']; ?>">
            <label for="S_Dateout" class="form-label">วันที่ขาย</label>
            <input class="form-control" type="date" name="S_Dateout" value="<?php echo $row['S_Dateout']; ?>">
            <input class="btn btn-success mt-3" type="submit" value="Update">
            <a href="kankay.php" class="btn btn-primary mt-3">Go Back</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>