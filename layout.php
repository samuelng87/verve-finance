<!-- layout.php -->
<!DOCTYPE html>
<html lang="en">
<!-- This are all the links to the css and js files -->
    <?php include('components/links.php'); ?> 
    <!-- This is the body of the page, you can add a class to the body to change the style of the page -->
<body class="page-<?php echo $page ?? 'default'; ?>">
    <!-- This is the navigation bar of the page -->
    <?php include('components/nav.php'); ?>
    <!-- This is the main content of the page -->
        <?php
        $sectionFiles = array_filter([
            !empty($section) && file_exists($section) ? $section : null,
            !empty($section2) && file_exists($section2) ? $section2 : null,
            !empty($section3) && file_exists($section3) ? $section3 : null,
            !empty($section4) && file_exists($section4) ? $section4 : null
        ], 'is_string');

        if ($sectionFiles) {
            foreach ($sectionFiles as $file) include $file;
        } else {
            echo "<p>Error: No content files found.</p>";
            http_response_code(404);
        }
        ?>
    <!-- This is the footer of the page -->
    <?php include('components/footer.php'); ?>
    <!-- This is the script of the page -->
    <?php include('components/script.php'); ?>
</body>
</html>