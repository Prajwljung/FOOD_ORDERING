
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
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
            <h2>Register Form</h2>
        </div>

        <div class="form-body">
            <form action="function/authcode.php" method="post" onsubmit="return validateUserRegister()">

                <div class="name">
                    <label for="name">Name</label>
                    <input type="text" class="name" name="name" id="name" placeholder="Enter your name" required onblur="nameValidation('name','nameErr')">
                    <span id="nameErr"></span>
                </div>

                <div class="email">
                    <label for="email">Email</label>
                    <input type="email" class="email" name="email" id="email" placeholder="Enter your email" required
                    onblur="emailValidation('email','emailErr')">
                    <span id="emailErr"></span>
                </div>

                <div class="password">
                    <label for="password">Password</label>
                    <input type="password" class="password" name="password" id="password" placeholder="Enter your password" required
                    onblur="passwordValidation('password','passwordErr')">
                    <span id="passwordErr" ></span>
                </div>

                <div class="cpassword">
                    <label for="cpassword">Confirm Password</label>
                    <input type="password" class="cpassword" name="cpassword" id="cpassword" placeholder="Confirm your password" required
                    onblur="checkPass('cpassword','password','cpassErr')">
                    <span id="cpassErr"></span>
                </div>

                <div class="button">
                    <button type="submit" name="register_btn">Register</button>
                </div>
                <p>Already have an account? <a href="login.php">Login</a></p>

            </form>
            <script src="assets/js/validation.js"></script>
        </div>
    </div>
</body>
</html>
