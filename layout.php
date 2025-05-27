<!-- layout.php -->
<!DOCTYPE html>
<html lang="en">
    <?php include('components/links.php'); ?>
<body>
    <?php
        // Include page-specific content
        if (isset($content) && file_exists($content)) {
            include($content);
        } else {
            echo "<p>Error: Content file not found.</p>";
            http_response_code(404);
        }
    ?>
    <?php include('components/footer.php'); ?>
    <?php include('components/script.php'); ?>
</body>
</html>