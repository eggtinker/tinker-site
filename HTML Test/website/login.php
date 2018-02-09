<!DOCTYPE html>
<html>
    <head>
        <title>Sign In</title>
        <link rel="icon" href="../img/icon.jpg">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="../css/navbar.css" rel="stylesheet" type="text/css"/>
        <link href="../css/main.css" rel="stylesheet" type="text/css"/>
        <link href="../css/login.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <ul>
            <!--<li><a class="active" href="second.html"><img src="img/icon.jpg" alt="img link" height="46" width="46" /></a>-->
            <li><a href="index.html">HOME</a></li>
            <li><a href="forums.html">FORUMS</a></li>
            <li><a href="about.html">ABOUT</a></li>
            <li style="float:right"><a href="signup.html">SIGN UP</a></li>
            <li style="float:right"><a class="active" href="login.html">LOG IN</a></li>
        </ul>
        <br />
        <br />

        <div class="login_container">
            <h2 style="margin-left: 25%;">Sign in</h2>
                <div class="imgcontainer">
                  <img src="../img/blank_avatar.png" alt="Avatar" class="avatar" height="128" width="128"> 
                </div>

                  <label for="email"><b>Email</b></label><br />
                  <input type="text" placeholder="Email address" name="email" required><br />

                  <label for="psw"><b>Password</b></label><br />
                  <input type="password" placeholder="Password" name="psw" required>
                    
                  <button type="submit">Login</button>
                  <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                  </label>

                  <span class="psw"><a href="#">Forgot password?</a></span>
        </div>

    </body>
</html>