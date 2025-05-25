
    <button class="open-modal-btn">Enquire Now</button>
    <div id="formModal" class="custom-modal">
        <div class="custom-modal-content">
            <span class="close-btn">×</span>
    <script src="https://js.hsforms.net/forms/embed/48134754.js" defer></script>
    <div class="hs-form-frame" data-region="na1" data-form-id="3b0a85a8-ea4b-4937-9d8d-55246d9bcb9f" data-portal-id="48134754"></div>
        </div>
    </div>



    <script>
        // Modal functionality
        const modal = document.getElementById('formModal');
        const openBtn = document.querySelector('.open-modal-btn');
        const closeBtn = document.querySelector('.close-btn');

        // Open modal
        openBtn.addEventListener('click', () => {
            modal.style.display = 'flex';
            // Add small delay to trigger animation
            setTimeout(() => {
                modal.classList.add('show');
            }, 10);
        });

        // Close modal
        closeBtn.addEventListener('click', () => {
            modal.classList.remove('show');
            // Wait for animation to finish before hiding
            setTimeout(() => {
                modal.style.display = 'none';
            }, 1000);
        });

        // Close modal when clicking outside
        window.addEventListener('click', (event) => {
            if (event.target === modal) {
                modal.classList.remove('show');
                setTimeout(() => {
                    modal.style.display = 'none';
                }, 1000);
            }
        });
    </script>
