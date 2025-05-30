<!-- layout.php -->
<!DOCTYPE html>
<html lang="en">
    <?php include('components/links.php'); ?>
<body class="page-<?php echo $page ?? 'default'; ?>">
    <?php include('components/nav.php'); ?>
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
    <?php include('components/footer.php'); ?>
    <?php include('components/script.php'); ?>
</body>
</html>