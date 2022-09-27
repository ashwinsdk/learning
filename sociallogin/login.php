<html>

<head>
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="login">

<ul class="pagination" style="margin: left 30px;">
  <li class="page-item"><a class="page-link" href="login.php">Login</a></li>
  <li class="page-item"><a class="page-link" href="register.php">Register</a></li>
</ul>

<form class="needs-validation" action="userlog.php" method="POST">
    <div class="form-group was-validated">
        <label class="form-label" for="email">Email address</label>
        <input class="form-control" type="text" name="email" required>
        <div class="invalid-feedback">
            Please enter your email address
        </div>
    </div>

    <div class="form-group was-validated">
        <label class="form-label" for="password">Password</label>
        <input class="form-control" type="text" name="password" required>
        <div class="invalid-feedback">
            Please enter your password
        </div>
    </div>

     <div class="form-group form-check">
        <input class="form-check-input" type="checkbox" id="check">
        <label class="form-check-label" for="check">Remember me</label>
    </div>
   
   <input class="btn btn-success w-100" type="submit" name="submit" value="SIGN IN">

</form>

</div>

</body>

</html>