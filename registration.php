
<?php
if (isset($_REQUEST['Submit'])) {
    $username = $_POST['User_Name'];
    $password = $_POST['Password'];
    $password2 = $_POST['Confirm_Password'];
    $email = $_POST['Email'];
    $name = $_POST['Name'];
    $dob = $_POST['DoB'];  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration</title>
</head>
<body>
    <center>
        <div>
            <table>
                <h2>Registration</h2>
                <form method="POST" action="#">
                    <tr>
                        <td> <label for="Name ">Name : </label> </td>
                        <td><input name="Name" type="text" id="Name"></td>
                    </tr>
                    <tr>
                        <td> <label for="Email ">Email : </label> </td>
                        <td><input name="Email" type="text" id="Email"></td>
                    </tr>
                    <tr>
                        <td> <label for="Nid ">NID : </label> </td>
                        <td><input name="Nid" type="number" id="Nid"></td>
                    </tr>
                    <tr>
                        <td> <label for="User_Name ">User Name : </label> </td>
                        <td><input name="User_Name" type="text" id="User_Name"></td>
                    </tr>
                    <tr>
                        <td> <label for="Password ">Password : </label> </td>
                        <td><input name="Password" type="password" id="Password"></td>
                    </tr>
                    <tr>
                        <td> <label for="Confirm_Password ">Confirm Password : </label> </td>
                        <td><input name="Confirm_Password" type="password" id="Confirm_Password"></td>
                    </tr>
                    <tr>
                        <td> <label>Gender : </label> </td>
                        <td>
                            <input type="radio" id="male" name="gender" value="male">
                            <label for="male">Male</label>
                            <input type="radio" id="female" name="gender" value="female">
                            <label for="female">Female</label>
                            <input type="radio" id="other" name="gender" value="other">
                            <label for="other">Other</label>
                        </td>
                    </tr>
                    <tr>
                        <td> <label for="DoB ">Date of Birth : </label> </td>
                        <td><input name="DoB" type="date" id="DoB"></td>
                    </tr>
                    <tr>
                        <td><input type="reset" name="Reset"></td>
                        <td> <input type="submit" name="Submit"></td>    
                    </tr>
                </form>
            </table>
            Already Registered?<a href="#"> Sign in</a>
        </div>
    </center>
   
</body>
</html>