document.addEventListener("DOMContentLoaded", function () {
  const modal = document.getElementById("myModal");
  const closeBtn = document.querySelector(".modal-close");
  const modalBtn = document.querySelector(".modal-btn");

  // Function to open modal
  function openModal() {
    modal.style.display = "block";
  }

  // Function to close modal
  function closeModal() {
    modal.style.display = "none";
  }

  // Close modal when clicking close button
  closeBtn.addEventListener("click", closeModal);
  modalBtn.addEventListener("click", closeModal);

  // Close modal when clicking outside
  window.addEventListener("click", function (event) {
    if (event.target === modal) {
      closeModal();
    }
  });
});
