//Navbar
document.addEventListener("click", function (event) {
  const navbarToggler = document.querySelector(".navbar-toggler");
  const navbarCollapse = document.querySelector("#navbarScroll");
  const isNavbarExpanded = navbarCollapse.classList.contains("show");

  // Handle closing mobile menu when clicking outside
  if (isNavbarExpanded) {
    const isClickInsideToggler = navbarToggler.contains(event.target);
    const isClickInsideCollapse = navbarCollapse.contains(event.target);

    if (!isClickInsideToggler && !isClickInsideCollapse) {
      navbarCollapse.classList.remove("show");
      navbarToggler.setAttribute("aria-expanded", "false");
    }
  }

  // Handle FINANCES dropdown
  const financesDropdown = document.querySelector("#financesDropdown");
  const dropdownMenu = financesDropdown.nextElementSibling;
  const isDropdownExpanded = dropdownMenu.classList.contains("show");

  if (
    !financesDropdown.contains(event.target) &&
    !dropdownMenu.contains(event.target) &&
    isDropdownExpanded
  ) {
    dropdownMenu.classList.remove("show");
  }
});

//Navbar Modal
// Modal functionality
const modal = document.getElementById("formModal");
const openBtn = document.querySelector(".open-modal-btn");
const closeBtn = document.querySelector(".close-btn");

// Open modal
openBtn.addEventListener("click", () => {
  modal.style.display = "flex";
  // Add small delay to trigger animation
  setTimeout(() => {
    modal.classList.add("show");
  }, 10);
});

// Close modal
closeBtn.addEventListener("click", () => {
  modal.classList.remove("show");
  // Wait for animation to finish before hiding
  setTimeout(() => {
    modal.style.display = "none";
  }, 1000);
});

// Close modal when clicking outside
window.addEventListener("click", (event) => {
  if (event.target === modal) {
    modal.classList.remove("show");
    setTimeout(() => {
      modal.style.display = "none";
    }, 1000);
  }
});

//About Page
document.addEventListener("DOMContentLoaded", function () {
  const readMoreButtons = document.querySelectorAll(".read-more-btn");

  readMoreButtons.forEach((button) => {
    button.addEventListener("click", function () {
      const paragraph = this.previousElementSibling;
      paragraph.classList.toggle("expanded");

      if (paragraph.classList.contains("expanded")) {
        this.textContent = "Read Less";
      } else {
        this.textContent = "Read More";
        // Smooth scroll back to the start of the paragraph
        paragraph.scrollIntoView({ behavior: "smooth" });
      }
    });
  });

  // Only show read more button if content is actually truncated
  function checkTruncation() {
    document.querySelectorAll(".truncate-text").forEach((p) => {
      const btn = p.nextElementSibling;
      if (p.scrollHeight > p.clientHeight) {
        btn.classList.remove("hidden");
      } else {
        btn.classList.add("hidden");
      }
    });
  }

  // Check on load and resize
  checkTruncation();
  window.addEventListener("resize", checkTruncation);
});

//Loan Page

let acc = document.getElementsByClassName("accordion");
let i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function () {
    this.classList.toggle("active");
    let panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}

//Case Studies Page
function calculateMortgage() {
  // Get input values
  const loanAmount = parseFloat(document.getElementById("loanAmount").value);
  const interestRate = parseFloat(
    document.getElementById("interestRate").value
  );
  const loanTerm = parseInt(document.getElementById("loanTerm").value);

  // Get error message elements
  const loanAmountError = document.getElementById("loanAmountError");
  const interestRateError = document.getElementById("interestRateError");
  const loanTermError = document.getElementById("loanTermError");
  const resultDiv = document.getElementById("result");

  // Reset error messages
  loanAmountError.style.display = "none";
  interestRateError.style.display = "none";
  loanTermError.style.display = "none";
  resultDiv.innerHTML = "";

  // Validate inputs
  let hasError = false;
  if (isNaN(loanAmount) || loanAmount <= 0) {
    loanAmountError.style.display = "block";
    hasError = true;
  }
  if (isNaN(interestRate) || interestRate <= 0) {
    interestRateError.style.display = "block";
    hasError = true;
  }
  if (isNaN(loanTerm) || loanTerm <= 0) {
    loanTermError.style.display = "block";
    hasError = true;
  }

  if (hasError) return;

  // Calculate monthly payment
  const monthlyInterestRate = interestRate / 100 / 12;
  const numberOfPayments = loanTerm * 12;
  const monthlyPayment =
    (loanAmount *
      (monthlyInterestRate *
        Math.pow(1 + monthlyInterestRate, numberOfPayments))) /
    (Math.pow(1 + monthlyInterestRate, numberOfPayments) - 1);

  // Display result
  resultDiv.innerHTML = `Monthly Payment: $${monthlyPayment.toFixed(2)}`;
}
