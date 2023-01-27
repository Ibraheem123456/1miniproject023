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
<body>
<br>
<div class="container">
<form name="frmlogin" method="post" action="login.php">
<p> </p>
<p><b> Login Form </b></p>
<p> ชื่อผู้ใช้ :
<input type="text" id="Username" required name="Username"

placeholder="Username">
</p>
<p>รหสัผา่ น :
<input type="password" id="Password" required name="Password"

placeholder="Password">
</p>
<p>
<button type="submit" class="btn btn-warning" >Login</button>
&nbsp;&nbsp;
<button type="reset" class="btn btn-warning" >Reset</button>
<br>
</p>
   </form>
     </tbody>
         </table>
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