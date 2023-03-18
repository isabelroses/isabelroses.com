<!DOCTYPE html>
<html lang="en">

<?php include_once 'components/head.php'; ?>

<head>
    <title>Document</title>
</head>

<body>
    <?php include_once 'components/header.php'; ?>

    <main class="flex flex-col w-full max-w-[80ch] mx-auto">
        <article class="prose enhanced-prose">
            <?php require_once 'includes/Parsedown.php';
            $Parsedown = new Parsedown();
            echo $Parsedown->text(file_get_contents('https://raw.githubusercontent.com/isabelroses/Userstyles/main/README.md'));
            ?>
        </article>
    </main>

    <?php include_once 'components/footer.php'; ?>

</body>
</html>