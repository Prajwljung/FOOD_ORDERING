<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="assets/css/style1.css">
</head>
<body>
    <nav>
        <div class="logo">
            <a href="#Home" class="logo">FOODHUB</a>
        </div>

        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php">About</a></li>
            <!-- <li><a href="#Menu">Menu</a></li> -->
        </ul> 
    </nav>
    
    <div class="container">

            <div class="header">
                <h2>Login Form</h2>
            </div>

            <div class="form-body">
                <form action="function/authcode.php" method="post">

                    <div class="email">
                        <label for="">Email</label>
                        <input type="email" name="email" class="email" placeholder="Enter your email" id="email">
                    </div>

                    <div class="password">
                        <label for="">Password</label>
                        <input type="password" name="password" class="password" placeholder="Enter your password" id="password">
                    </div>

                    <div class="button">
                        <button type="submit" name="login_btn">Login</button>
                    </div>
                    <p>Don't have an account? <a href="register.php">Sign up</a></p>

                </form>
            </div>
        </div>
    </div>
</body>
</html>