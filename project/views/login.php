<?php
    session_start();
    if (!isset($_COOKIE['name'] ,$_COOKIE['password']))
    {
        $_COOKIE['name'] ="";
        $_COOKIE['password']="";
    }
?>
<html>
<head>
    <title>Login</title>
    
</head>
<body>
        <header>
            <h1 style="text-align:left;">EDU4ALL </h1>
            <section style="text-align: right;">
            <a href="signup.php">Signup</a>
            </section>  
        </header>
        <main>
        <hr></hr>
             <form method="POST" action="../controllers/loginCheck.php">
                <fieldset style="width: 25%;" >
                <table style="width: 100%;">
                <legend><h3>Login</h3></legend>
                    <tr>
                        <td>
                            Name: <br>
                            <input type="text" name="name" id="name" value="<?php echo $_COOKIE['name'];?>" id="">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Password: <br>
                            <input type="password" name="password" id="password" value="<?php echo $_COOKIE['password'];?>" id="">
                        </td>
                    </tr>
                </table>
                                <input type="checkbox" name="remember" id="">Remember Me
                                <hr>
                                <input type="submit" value="Login">
                                <a href="forgetPassword.php">Forgot Password?</a>
                    </fieldset>
            </form>
            <hr></hr>
        </main>
        <footer>
            <h4 style="text-align: center;">Copyright©2024</h4>
        </footer>
        <hr></hr>

</body>
</html>