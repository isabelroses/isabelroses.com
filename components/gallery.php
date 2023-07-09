<div class="gallery-links">
    <div class="gallery-container">
        <?php
        include_once 'includes/dbh.inc.php';
        $sql = "SELECT * FROM gallery ORDER BY ordered DESC;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo "There was an error loading the gallery";
        } else {
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<a class='bg-surface rounded' href=blog.php?title=" . $row['title'] . ">";
                echo "<div style='background-image: url(uploads/gallery/" . $row['img'] . ");'>";
                echo "</div><h3>" . $row['title'] . "</h3>";
                echo "<p class='text-fg-dimmed'>" . $row['description'] . "</p></a>";
            }
        }
        ?>
    </div>
</div>