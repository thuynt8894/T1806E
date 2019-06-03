<?php
session_start();
session_destroy();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ASM1</title>
</head>
<body>
<h1>Login</h1>
<form action="post_asm1.php" method="post">
    <table>
        <tr>
            <td><label for="">Username:</label></td>
            <td><input type="text" name="username"></td>

        </tr>
        <tr>
            <td><label for="">Email   :</td>
            <td><input type="email" name="email"></label></td>
        </tr>
        <tr>
            <td><label for="">Password:</label></td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td><label for="">Confirm :</label></td>
            <td><input type="password" name="confirm"></td>

        </tr>
        <tr>
            <td><label for="">Gender  :</label></td>
            <td><input type="radio" name="gender" value="male"> Male
                <input type="radio" name="gender" value="female"> Female</td>
        </tr>
        <tr>
            <td><button type="submit" name="sent"><b>Submit</b></button></td>
            <td><button type="reset"><b>Reset</b></button></td>
        </tr>
    </table>
</form>
</body>
</html>
<?php
