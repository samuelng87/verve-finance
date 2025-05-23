<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico" />
    <title>About Verve Finance</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/modal.css">
    <link rel="stylesheet" href="css/banner.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
    <!-- navbar and content are inside the banner -->
    <?php include('components/about-banner.php'); ?> 
        <div class="progress-container">
        Building in progress &nbsp<span id="progress">80</span>%
        <div class="loader"></div>
        </div>
    <?php include('components/footer.php'); ?> 
</body>
</html>

<script>
document.addEventListener("DOMContentLoaded", function () {
  const progressSpan = document.getElementById("progress");
  const startPercentage = 80;
  const endPercentage = 100;
  const startDate = new Date("2025-05-23T10:55:00+10:00"); // Start: May 23, 2025, 10:55 AM AEST
  const endDate = new Date("2025-06-12T00:00:00+10:00"); // End: June 12, 2025, 00:00 AEST
  const totalDays = 20; // Spread over 20 days
  const incrementPerDay = (endPercentage - startPercentage) / totalDays; // 1% per day

  function updateProgress() {
    const now = new Date();
    // Calculate days elapsed since start (reset to midnight for daily updates)
    const startOfToday = new Date(now.getFullYear(), now.getMonth(), now.getDate());
    const startOfStartDate = new Date(startDate.getFullYear(), startDate.getMonth(), startDate.getDate());
    const daysElapsed = Math.floor((startOfToday - startOfStartDate) / (1000 * 60 * 60 * 24));
    
    // Calculate current percentage
    const currentPercentage = Math.min(
      startPercentage + (daysElapsed * incrementPerDay),
      endPercentage
    );

    // Update only if percentage changes
    if (progressSpan.textContent !== String(Math.round(currentPercentage))) {
      progressSpan.textContent = Math.round(currentPercentage);
    }

    // Stop if reached end date or 100%
    if (now < endDate && currentPercentage < endPercentage) {
      // Check again at next midnight
      const nextMidnight = new Date(now.getFullYear(), now.getMonth(), now.getDate() + 1);
      const timeToNextUpdate = nextMidnight - now;
      setTimeout(updateProgress, timeToNextUpdate);
    } else if (progressSpan) {
      progressSpan.textContent = "100";
    }
  }

  if (startDate < endDate && progressSpan) {
    updateProgress(); // Initial update
  } else if (progressSpan) {
    progressSpan.textContent = "100";
  }
});
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js" integrity="sha384-RuyvpeZCxMJCqVUGFI0Do1mQrods/hhxYlcVfGPOfQtPJh0JCw12tUAZ/Mv10S7D" crossorigin="anonymous"></script>