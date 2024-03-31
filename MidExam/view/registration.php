<html>
<head>
    <title>Registration</title>
</head>
    <body>
        <main>
            <hr></hr>        
            <table width="100%">
                <tr>
                    <td>
                        <form method="POST" action="../controller/registrationCheck.php">
                            <fieldset style="width: 35%;" >
                                <table style="width: 100%;">
                                <legend><h3>Registration</h3></legend>
                
                                    <tr>
                                        <td>
                                           First Name 
                                        </td>
                                        <td>
                                            : <input type="text" name="firstname" id="firstname" value="soyed">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                           Last Name 
                                        </td>
                                        <td>
                                            : <input type="text" name="lastname" id="lastname" value="soyed">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                           Phone 
                                        </td>
                                        <td>
                                            : <input type="text" name="phone" id="phone" value="0171717171">
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
                                            Gender
                                        </td>
                                        <td>
                                            : <input type="radio" name="gender" id="gender" value="Male">Male
                                              <input type="radio" name="gender" id="gender" value="Female">Female
                                              <input type="radio" name="gender" id="gender" value="Other">Other
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Date of Birth
                                        </td>
                                        <td>
                                            : <input type="date" name="dob" id="dob" value="22/1/2000"> 
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
                                </table>
                                <hr>
                                <section style="text-align: center;">
                                    <input type="submit" name="submit" value="Submit">
                                    <input type="reset" name ="reset" value="Reset">
                                </section>
                            </fieldset>
                        </form>
                    </td>
                </tr>
                </table>
        </main>
    </body>
</html>