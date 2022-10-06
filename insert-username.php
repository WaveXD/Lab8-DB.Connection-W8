<?php include "connect.php" ?>
<?php
    $stmp = $pdo->prepare("INSERT INTO member VALUES(?,?,?,?,?,?)");
    $stmp ->bindParam(1,$_POST["username"]);
    $stmp ->bindParam(2,$_POST["password"]);
    $stmp ->bindParam(3,$_POST["name"]);
    $stmp ->bindParam(4,$_POST["address"]);
    $stmp ->bindParam(5,$_POST["mobile"]);
    $stmp ->bindParam(6,$_POST["email"]);

    $stmp->execute();
    $username = $_POST["username"];
    header("location: username-detail.php?username=" . $username);
?>

