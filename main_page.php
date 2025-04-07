<?php
require_once "includes/functions.php"; // Підключаємо налаштування
?>


<!DOCTYPE html>
<html lang="uk">
<?php include_once "includes/head.php" ?>
<body>
    <header>
        <?php include_once "includes/header.php"; ?> <!-- Підключаємо хедер -->
    </header>
    <main>
        <h1><?php echo greet('Lucy');
        include_once "includes/kontakt.php";
        ?></h1>
        <p>Ласкаво просимо на сайт!</p>
    </main>
    <footer>
    <?php include_once "includes/footer.php"; ?>
    </footer> <!-- Підключаємо футер -->
</body>
</html>
