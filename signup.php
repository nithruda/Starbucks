
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Starbucks Signup</title>
    <link rel="stylesheet" href="signstyles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12" id="signup_container">
                <h2 id="heading">Create Your Account</h2>
                <form class="signup_form" method="post" action="config.php">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter your full name">
        
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email">
        
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Create a password">
        
                    <label for="confirm-password">Confirm Password</label>
                    <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm your password">
        
                    <button type="submit" class="btn_signup">Sign Up</button>
                </form>
                <p class="login_prompt">Already have an account? <a href="login.html">Log in</a></p>
            </div>
        </div>
    </div>

   

</body>
</html>
