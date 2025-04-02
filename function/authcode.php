<?php

session_start();
include('../config/dbcon.php');


//user register
if(isset($_POST['register_btn']))
{
    $name = mysqli_real_escape_string($con,$_POST['name']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    $cpassword = mysqli_real_escape_string($con,$_POST['cpassword']);

    // Check if email already registered or not
    $check_email_query = "SELECT email FROM customer WHERE email='$email' ";
    $check_email_query_run = mysqli_query($con, $check_email_query);

    if(mysqli_num_rows($check_email_query_run) > 0)
    {
        echo "Email is already registered. Please use a different email.";
        echo  "<script type='text/javascript'>
                    setTimeout(function() {
                        window.location.href = '../register.php'; // Redirect to login page
                    }, 1000); // 3000ms = 3 seconds
                </script>";
        // header('Location: ../register.php');
    }
    else
    {
        if($password == $cpassword)
        {
            $insert_query = "INSERT INTO customer (name,email,password) VALUES ('$name','$email','$password')";
            $insert_query_run = mysqli_query($con, $insert_query);

            if($insert_query_run)
            {
                echo "Registration successful!";
                echo  "<script type='text/javascript'>
                    setTimeout(function() {
                        window.location.href = '../login.php'; // Redirect to login page
                    }, 1000); // 3000ms = 3 seconds
                </script>";
                // header('Location: ../login.php');
            }
            else
            {
                echo "Something went wrong";
                echo  "<script type='text/javascript'>
                    setTimeout(function() {
                        window.location.href = '../register.php'; // Redirect to login page
                    }, 1000); // 3000ms = 3 seconds
                </script>";
                // header('Location: ../register.php');
            }
        }
        else
        {
            echo "Password do not match";
            echo  "<script type='text/javascript'>
                    setTimeout(function() {
                        window.location.href = '../register.php'; // Redirect to login page
                    }, 1000); // 3000ms = 3 seconds
                </script>";
            // header('Location: ../register.php');
        }
    }
}

//user login
else if(isset($_POST['login_btn']))
{
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $login_query = "SELECT * FROM customer WHERE email='$email' AND password='$password' ";
    $login_query_run = mysqli_query($con, $login_query);

    if(mysqli_num_rows($login_query_run) > 0)
    {
        $_SESSION['auth'] = true;

        $userdata = mysqli_fetch_array($login_query_run);
        $userid = $userdata['id'];
        $username = $userdata['name'];
        $useremail = $userdata['email'];
        $role_as = $userdata['role_as'];

        $_SESSION['auth_user'] = [
            'user_id' => $userid,
            'name' => $username,
            'email' => $useremail
        ];

        $_SESSION['role_as'] = $role_as;

        if($role_as == 1)
        {
            echo "<p>You are logged in!</p>";
            header('Location: ../admin/index.php');
            // echo "<p>Logged in Sucessfully</p>";
            // echo  "<script type='text/javascript'>
            //         setTimeout(function() {
            //             window.location.href = '../admin/index.php'; // Redirect to admin page
            //         }, 1000); // 3000ms = 3 seconds
            //     </script>"; 
            
        }
        else
            echo "<p>Logged in Sucessfully</p>";
            echo  "<script type='text/javascript'>
                    setTimeout(function() {
                        window.location.href = '../index.php'; // Redirect to index pae
                    }, 1000); // 3000ms = 3 seconds
                </script>";  
    }
    else
    {
        echo "Invalid email and password";
        echo  "<script type='text/javascript'>
                    setTimeout(function() {
                        window.location.href = '../login.php'; // Redirect to login page
                    }, 1000); // 3000ms = 3 seconds
                </script>";
    }
}
?>
