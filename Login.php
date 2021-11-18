<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <div class="container">
       <div class="login_box">
        <div class="row">
            <div class="col-md-6">
                <h2> Login Here</h2>
                <form action="validation.php" method="post">
                    <div class="form-group">
                        <label for=""> User Name</label>
                        <input type="text" name="user" class="form-control" aria-busy="" required>
                        </div>
                        
                        <div class="form-group">
                        <label for=""> Password</label>
                        <input type="passowrd" name="password" class="form-control" aria-busy="" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
            <div class="col-md-6">
                <h2> Create Account</h2>
                <form action="registration.php" method="post">
                    <div class="form-group">
                        <label for=""> User Name</label>
                        <input type="text" name="user" class="form-control" aria-busy="" required>
                        </div>
                        
                        <div class="form-group">
                        <label for=""> Password</label>
                        <input type="passowrd" name="password" class="form-control" aria-busy="" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
        </div>
    </div>
    </div>
    
    
</body>
</html>