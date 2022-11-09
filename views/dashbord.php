<!DOCTYPE html>
<?php
sessions_start();
?>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" 
/>
  <title>Dashbord</title>
</head>
<body>
  <nav class="navbar nabvar-expand navbar-dark bg-dark" style="margin-bottom:80px;">
<div class="container">
  <a href="dashbord.php" class="navbar-brad">
    <h4>The company</h4>
  </a>
  <div class="navbar-nav">
    <li class="nav-item">
      
      <a href="" class="nav-link"> John</a>
     
    </li>
    <li class="nav-item">
      <form action="..actions/logout.php" method = "POST" class="d-flex ms-2">
        <button class = "text-danger  bg-transparent border-0" type="submit">Logout</button>
      </form>
    </li>
  </div>
</div>
</nav>

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>