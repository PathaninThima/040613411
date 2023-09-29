<?php include "connect.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $stmt = $pdo->prepare("SELECT * FROM member");
        $stmt->execute();
    ?>

    <?php while ($row = $stmt->fetch()): ?>

        <div style="padding-top: 15px;">
            <?php echo "ชื่อสมาชิก: " . $row["name"] . "<br>"; ?>
            <?php echo "ที่อยู่: " . $row["address"] . "<br>"; ?>
            <?php echo "อีเมลล์: " . $row["email"] . "<br>"; ?>
            <a href="detailno5.php?usename=<?=$row["username"]?>">
                <img src='img/<?=$row["username"]?>.jpg'>
            </a><br>
            <?php echo "<hr>\n"?>
        </div>

    <?php endwhile; ?>
</body>
</html>