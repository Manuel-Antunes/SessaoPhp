<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SESSION['name'] ?></title>
</head>

<body>
    <div class="container">
        Nome: <?php echo $_SESSION['name'] ?>
        Telefone: <?php echo $_SESSION['phone'] ?>
    </div>
</body>

</html>