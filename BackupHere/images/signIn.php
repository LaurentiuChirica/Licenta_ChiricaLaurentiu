<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="styleSignIn.css" rel="stylesheet" />
</head>

<body>
    <div class="main-content-container">
        
        <div class="signIn-container">
            <h2>Sign In</h2>

            <form action="/action_page.php" method="post" class="signIn-form">
            <div class="container">

                <label for="uname"><b>Email</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>
            
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>
                
                <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
                <div class="bottom-container">

                    <button type="submit" class="logInButton">Login</button>
                </div>
                
            </div>
                <span class="goToSignUp">Don't have an account? &nbsp<a href="signUp.html">Sign Up</a></span>
            </form>
        </div>
    </div>
</body>
</html>