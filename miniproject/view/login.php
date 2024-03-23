<html>
<head>
    <title>Login</title>
    
</head>
<body>

             <form method="POST" action="../controller/loginCheck.php">
                <fieldset style="width: 25%;" >
                <table style="width: 100%;">
                <legend><h3>Login</h3></legend>
                    <tr>
                        <td>
                            User Id <br>
                            <input type="number" name="id" id="id" value="">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Password: <br>
                            <input type="password" name="password" id="password" value="">
                        </td>
                    </tr>
                </table>
                                <input type="checkbox" name="remember" id="">Remember Me
                                <hr>
                                <input type="submit" value="Login">
                                <a href="registration.php">Register</a>
                    </fieldset>
            </form>
            <hr></hr>

</body>
</html>