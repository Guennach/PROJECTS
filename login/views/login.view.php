<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Sign in page | Contact App</title>
</head>

<body>
    <main class="container">
        <div class="login">
            <form action="." method="post">
                <div class="header">
                    <h1>Sign in</h1>
                    <p>Sign in and start managing your contacts!</p>
                </div>
                <div class="form_control">
                    <input type="text" name="login" id="login" placeholder="Login">
                </div>
                <div class="form_control">
                    <input type="password" name="pass" id="pass" placeholder="Password">
                </div>
                <div class="links">
                    <div class="remember_me">
                        <input type="checkbox" class="check">
                        <p>Remember me</p>
                    </div>
                    
                    <a href="#" class="forget_pass">Forgot password?</a>
                </div>
                <div class="submit">
                    <input type="hidden" name="action" value="login_btn">
                    <button class="btn_submit">Login</button>
                </div>
            </form>
        </div>
    </main>
    <footer>
        <img src="img/Vectors.png" alt="waves" class="waves">
        <button type="button" id="mode_handler"><img src="img/Dark Mode.png" alt="darkmode" class="dark"></button>
    </footer>
</body>

</html>