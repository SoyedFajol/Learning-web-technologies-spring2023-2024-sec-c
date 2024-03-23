
<html>
<head>
    <title>Signup</title>
</head>
    <body>
            <table width="100%">
                <tr>
                    <td>
                        <form method="POST" action="../controller/registrationCheck.php">
                            <fieldset style="width: 35%;" >
                                <table style="width: 100%;">
                                <legend><h3>REGISTRATION</h3></legend>
                                    
                                <tr >
                                        <td>
                                            Id 
                                        </td>
                                        <td>
                                            : <input type="number" name="id" id="id" value="01">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Password
                                        </td>
                                        <td>
                                            : <input type="password" name="password" id="password" value="!1234567">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Confirm Password
                                        </td>
                                        <td>
                                            : <input type="password" name="confirmPassword" id="confirmPassword" value="!1234567">
                                        </td>
                                    </tr>
                                    <tr >
                                        <td>
                                            Name 
                                        </td>
                                        <td>
                                            : <input type="text" name="name" id="name" value="soyed">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Email
                                        </td>
                                        <td>
                                            : <input type="text" name="email" id="email" value="soyed@gmail.com">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            User Type
                                        </td>
                                        <td>
                                            : <select name="usertype" id="usertype">
                                                <option value="user">User</option>
                                                <option value="admin">Admin</option>
                                              </select>
                                            
                                        </td>
                                    </tr>
                                </table>
                                <hr>
                                    <input type="submit" name="submit" value="Registration">
                                    <a href="login.php">Login</a>
                            </fieldset>
                        </form>
                    </td>
                </tr>
                </table>
                <hr>
</body>
</html>