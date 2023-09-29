<?php include "connect.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form>
        <input type="text" name="keyword">
        <input type="submit" value="ค้นหา">
    </form>
    <?php
        $stmt = $pdo->prepare("SELECT * FROM member WHERE name LIKE ?");

        if (!empty($_GET))
            $value = '%' . $_GET["keyword"] . '%'; 
        
        $stmt->bindParam(1, $value);
        $stmt->execute();
    ?>
    <?php 
        while ($row = $stmt->fetch()):
            $imgName = "img/" . $row["name"] . ".jpg";
    ?>
    <div style="padding-top: 15px;">
        <?php echo "ชื่อสมาชิก: " . $row["name"] . "<br>"; ?>
        <?php echo "ที่อยู่: " . $row["address"] . "<br>"; ?>
        <?php echo "อีเมลล์: " . $row["email"] . "<br>"; ?>
        <img src='<?php echo $imgName; ?>'><br>
        <?php echo "<hr>\n"?>
    </div>
    <?php endwhile; ?>
</body>
</html>