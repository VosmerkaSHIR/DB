<?php
require ('../php-validate/validate/session.php');
?>
<!DOCTYPE HTML>
<html lang="ru">
<head>
 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Создать резюме</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../img/icon.png" type="image/png">
</head>
<body>
    <?php
    require ('../pages/header.php');
    ?>
    <main class="flex-container">
                <?php
require ('../php-validate/create/createa2.php');
?>


        </main>
    <script src="../scripts/checkNew.js"></script>
    <script src="../scripts/checkPrimary.js"></script>
        <script src="../scripts/handleFile.js"></script>
    <script src="../scripts/checkDates.js"></script>
</body>
</html>
