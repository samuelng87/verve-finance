<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="nav-img" aria-current="page" href="build.php">
      <img src="images/verve-finance-logo.png" alt="Verve Finance" class="verve-logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100%;">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="financesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            FINANCES
          </a>
          <ul class="dropdown-menu" aria-labelledby="financesDropdown">
            <li><a class="dropdown-item" href="#">Home Loan</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Business Loan</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Commercial Loan</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">ABOUT <span style="color:#F36F20; font-size:17px;">VERVE</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">WHY REFINANCE?</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">CASE STUDIES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">CONTACT US</a>
        </li>
      </ul>
      <?php include('components/modal.php'); ?>
    </div>
  </div>
  
</nav>

<!-- Custom JS -->
<script>
document.addEventListener('click', function (event) {
  const navbarToggler = document.querySelector('.navbar-toggler');
  const navbarCollapse = document.querySelector('#navbarScroll');
  const isNavbarExpanded = navbarCollapse.classList.contains('show');
  
  // Handle closing mobile menu when clicking outside
  if (isNavbarExpanded) {
    const isClickInsideToggler = navbarToggler.contains(event.target);
    const isClickInsideCollapse = navbarCollapse.contains(event.target);
    
    if (!isClickInsideToggler && !isClickInsideCollapse) {
      navbarCollapse.classList.remove('show');
      navbarToggler.setAttribute('aria-expanded', 'false');
    }
  }

  // Handle FINANCES dropdown
  const financesDropdown = document.querySelector('#financesDropdown');
  const dropdownMenu = financesDropdown.nextElementSibling;
  const isDropdownExpanded = dropdownMenu.classList.contains('show');
  
  if (!financesDropdown.contains(event.target) && !dropdownMenu.contains(event.target) && isDropdownExpanded) {
    dropdownMenu.classList.remove('show');
  }
});
</script>