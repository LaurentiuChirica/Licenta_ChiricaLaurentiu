<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="styleSignUp.css" rel="stylesheet" />
</head>

<body>
    <div class="main-content-container">
        
        <div class="signUp-container">
            <h2>Sign Up</h2>

            <div class="container">
                
                <form id="form" action="#">
                    <div class="emailInputBox">
                        <label for="email"><b>Email Address</b></label>
                        <input type="text" class="emailInputBox" placeholder="Enter Email Address" name="" id="email" required onkeydown="emailValidation()">
                        <span id="text"></span>
                    </div>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>
    
                    <label for="psw2"><b>Confirm your Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw2" required>
    
                    <div class="bottom-container">
                        <button type="submit" class="signUpButton">Create your Account</button>
                    </div>
                </form>
                
            </div>
                <span class="goToSignIn">Already have an account?&nbsp<a href="signIn.html">Sign In</a></span>
        </div>
    </div>
</body>
    <script src="SignUpEmailValidation.js"></script>
</html>