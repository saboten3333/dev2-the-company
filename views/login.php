<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" 
/>
  <title>Login</title>
</head>
<body class="bg-light">
  <div style ="height:100vh;">
<div class="row h-100 m-0">
  <div class="card w-25 mx-auto my-auto p-0">
    <div class="card-header text-primary bg-white">
      <h1 class="card-title mb-0">Login</h1>
    </div>
    <div class="card-body">
      <form method="POST">
        <div class="mb-3">
          <label for="username" class="form-label fw-bold small">Username</label>
          <input type="text" name="username" id="username" class="form-control" required autofocus>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label fw-bold small">Password</label>
          <input type="password" name="password" id="password" class="form-control" required>
        </div>
        <button class="btm btn_primary w-100" name="btn_login" type="submit">Login</button>
      </form>
      <div class="text-center mt-3">
        <a href="sign-up.php">Create an Account.</a>
      </div>
    </div>
  </div>
</div>
</div>
 

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>