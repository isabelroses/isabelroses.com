<!DOCTYPE html>
<html lang="en">

<?php
$title = $_GET['title'];
if (!isset($title) || empty($title)) {
    header("Location: /gallery.php");
    exit();
}
$lbase = "/var/www/isabel/blog/";
$wbase = "C:/xampp/htdocs/blog/";
$file = realpath($wbase . $title . ".md") ?: realpath($lbase . $title . ".md");
if (!file_exists($file)) {
    header("Location: /404.php");
    exit();
}
if (strpos($title . ".md", $wbase) || strpos($title . ".md", $lbase)) {
    header("Location: /404.php");
    exit();
}

$clean_title = str_replace(" ", "-", $title);

include_once 'components/head.php';
?>

<head>
    <title><?php echo $clean_title ?></title>
</head>

<body>
    <?php include_once 'components/header.php'; ?>

    <main class="flex flex-col w-full max-w-[80ch] mx-auto">
        <article class="prose enhanced-prose">
            <?php
            require_once 'includes/Parsedown.php';
            $Parsedown = new Parsedown();
            echo $Parsedown->text(file_get_contents("$file"));
            ?>
        </article>
    </main>

    <?php include_once 'components/footer.php'; ?>

</body>

</html>