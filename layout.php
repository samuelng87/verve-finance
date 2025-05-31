<!DOCTYPE html>
<html lang="en">
<?php include('components/links.php'); ?>
<body class="page-<?php echo $page ?? 'default'; ?>">
    <?php include('components/nav.php'); ?>
    <?php
    function getValidSections(...$sections) {
        return array_filter($sections, function ($file) {
            return !empty($file) && is_string($file) && file_exists($file);
        });
    }

    $sectionFiles = getValidSections($section ?? null, $section2 ?? null, $section3 ?? null, $section4 ?? null);

    if ($sectionFiles) {
        foreach ($sectionFiles as $file) {
            include $file;
        }
    } else {
        echo "<p>Error: No content files found.</p>";
        http_response_code(404);
    }
    ?>
    <?php include('components/footer.php'); ?>
    <?php include('components/script.php'); ?>
</body>
</html>