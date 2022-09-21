<html>

<head>
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <form action="userlog.php" method="POST">
    <div style="margin:300px;padding-left:280px;">
      
      <div class="mb-3 mt-3" style="width:300px;">
        <label for="email" class="form-label">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
      
      <div class="mb-3" style="width:300px;">
        <label for="pwd" class="form-label">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
      </div>
      
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    
    </div>
  </form>
</body>

</html>