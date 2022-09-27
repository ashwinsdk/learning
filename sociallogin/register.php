<?php
require "requiredata.php";
?>
<html>

<head>
  <title>Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>

<body>
    <div>
        <?php
        if(isset($_POST['create'])){
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $sql="insert into users(fname, lname, email, password) values(?,?,?,?)"
        }
        ?>
    </div>
<div class="login">

<ul class="pagination">
  <li class="page-item"><a class="page-link" href="login.php">Login</a></li>
  <li class="page-item"><a class="page-link" href="register.php">Register</a></li>
</ul>

<form class="needs-validation" action="" method="POST">

    <div class="form-group was-validated">

        <label class="form-label" for="firstname">First Name</label>
        <input class="form-control" type="text" name="fname" required>
    </div>

<div class="form-group was-validated">

    <label class="form-label" for="firstname">Last Name</label>
    <input class="form-control" type="text" name="lname" required>
</div>

<div class="form-group was-validated">

    <label class="form-label" for="email">Email</label>
    <input class="form-control" type="email" name="email" required>
</div>

<div class="form-group was-validated">

    <label class="form-label" for="password">Password</label>
    <input class="form-control" type="password" name="lname" required>
</div>
   
   <input class="btn btn-success w-100" type="submit" name="create" value="SIGN UP">

</form>

</div>

</body>

</html>