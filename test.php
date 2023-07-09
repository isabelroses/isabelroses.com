<?php
$title = $_GET['title'];
if (!isset($title) || empty($title)) {
    echo "failed isset";
    exit();
}
if (!file_exists("blog/$title")) {
    echo "failed file exists";
    exit();
}
$lbase = "/var/www/isabel/blog/";
$wbase = "C:/xampp/htdocs/blog/";
if ((!realpath($wbase . $title)) && (!realpath($lbase . $title))) {
    echo "failed realpath";
    exit();
}
if (strpos($title, $wbase) || strpos($title, $lbase)) {
    echo "failed strpos";
    exit();
}

$clean_title = str_replace(" ", "-", $title);

echo $clean_title;
