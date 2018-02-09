<!DOCTYPE html>
<html>
  <head>
    <title>Create an Account</title>
    <link rel="icon" href="../img/icon.jpg">

    <link href="../css/navbar.css" rel="stylesheet" type="text/css"/>
    <link href="../css/main.css" rel="stylesheet" type="text/css"/>
    <link href="../css/signup.css" rel="stylesheet" type="text/css"/>
  </head>
  <body>

      <ul>
            <!--<li><a class="active" href="second.html"><img src="img/icon.jpg" alt="img link" height="46" width="46" /></a>-->
            <li><a href="index.html">HOME</a></li>
            <li><a href="forums.html">FORUMS</a></li>
            <li><a href="about.html">ABOUT</a></li>
            <li style="float:right"><a class="active" href="signup.html">SIGN UP</a></li>
            <li style="float:right"><a href="login.html">LOG IN</a></li>
        </ul>

      <div class="signup_container">
        <h1>Sign Up</h1>
        <p>Please fill in this form to create an account.</p><br />

        <label for="email"><b>Email</b></label><br />
        <input type="text" placeholder="Email address" name="email" required><br />

        <label for="psw"><b>Password</b></label><br />
        <input type="password" placeholder="Password" name="psw" required><br />

        <label for="psw-repeat"><b>Re-enter Password</b></label><br />
        <input type="password" placeholder="Re-enter password" name="psw-repeat" required><br />
        
        <label>
          <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
        </label>

        <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

        <div class="clearfix">
          <button type="submit" class="signupbtn">Sign Up</button>
        </div>
      </div>
  </body>
</html>
