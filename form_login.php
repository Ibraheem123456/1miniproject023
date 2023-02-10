<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Index Page</title>
<link rel="stylesheet"
href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-
alpha1/css/bootstrap.min.css" integrity="sha384-
r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I"
crossorigin="anonymous">
</head>
<body style="background: black;">   
<div class="container">
  <h2 style="color: white;">login form</h2>
  <form action="login.php" method="post">
    <div class="form-group">
      <label for="email" style="color: white;">Usernamel:</label>
      <input type="text" class="form-control" placeholder="Enter email" name="Username">
    </div>
    <div class="form-group">
      <label for="pwd" style="color: white;">Password:</label>
      <input type="password" class="form-control" placeholder="Enter password" name="Password">
    </div>
    <br>
    <button type="submit" class="btn btn-primary">login</button>
  </form>
</div>
<script
src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
integrity="sha384-
Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-
alpha1/js/bootstrap.min.js" integrity="sha384-
oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
crossorigin="anonymous"></script>
</body>
</html>