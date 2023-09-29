<?php include "connect.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="insertno8.php" method="post">
        ชื่อผู้ใช้: <input type="text" name="username"><br><br>
        รหัสผ่าน: <input type="password" name="password"><br><br>
        ชื่อสมาชิก: <input type="text" name="name"><br><br>
        ที่อยู่: <br><textarea name="address" rows="3" cols="40"></textarea><br><br>
        เบอร์โทรศัพท์: <input type="text" name="mobile"><br><br>
        อีเมล: <input type="email" name="email"><br><br>
        <input type="submit" value="เพิ่มสมาชิก">
    </form>
</body>
</html>