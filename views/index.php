<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Login</title>
</head>

<body class="bg-light">
    <div style="height: 100vh;">
        <div class="row h-100 m-0">
            <div class="card w-25 my-auto mx-auto">
                <div class="card-header bg-white border-0 py-3">
                    <h1 class="text-center">LOGIN</h1>
                </div>
                <div class="card-body">
                    <form action="../actions/login.php" method="post">
                        <div class="mb-3">
                            <input type="text" name="username" id="username" class="form-control" placeholder="USERNAME" maxlength="15"
                                required>
                        </div>
                        <div class="mb-5">
                            <input type="password" name="password" id="password" placeholder="PASSWORD" class="form-control"
                                aria-describedby="password-info" required>
                        </div>
                        <button type="submit" class="btn w-100 btn-primary w-180">Log in</button>
                    </form>
                    <p class="text-center mt-3 small"><a class="text-decoration-none"
                            href="../views/register.php">Create Account</a></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>