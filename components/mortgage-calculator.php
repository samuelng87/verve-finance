                <div class="calculator">
                    <h2>Mortgage Calculator</h2>
                    <label for="loanAmount">Loan Amount ($):</label>
                    <input type="number" id="loanAmount" placeholder="Enter loan amount" required>
                    <div id="loanAmountError" class="error">Please enter a valid loan amount</div>

                    <label for="interestRate">Annual Interest Rate (%):</label>
                    <input type="number" id="interestRate" placeholder="Enter interest rate" step="0.01" required>
                    <div id="interestRateError" class="error">Please enter a valid interest rate</div>

                    <label for="loanTerm">Loan Term (Years):</label>
                    <input type="number" id="loanTerm" placeholder="Enter loan term" required>
                    <div id="loanTermError" class="error">Please enter a valid loan term</div>

                    <button onclick="calculateMortgage()">Calculate</button>
                    <div id="result">Monthly Payment: $0</div>
                </div>

                <script>
        function calculateMortgage() {
            // Get input values
            const loanAmount = parseFloat(document.getElementById('loanAmount').value);
            const interestRate = parseFloat(document.getElementById('interestRate').value);
            const loanTerm = parseInt(document.getElementById('loanTerm').value);

            // Get error message elements
            const loanAmountError = document.getElementById('loanAmountError');
            const interestRateError = document.getElementById('interestRateError');
            const loanTermError = document.getElementById('loanTermError');
            const resultDiv = document.getElementById('result');

            // Reset error messages
            loanAmountError.style.display = 'none';
            interestRateError.style.display = 'none';
            loanTermError.style.display = 'none';
            resultDiv.innerHTML = '';

            // Validate inputs
            let hasError = false;
            if (isNaN(loanAmount) || loanAmount <= 0) {
                loanAmountError.style.display = 'block';
                hasError = true;
            }
            if (isNaN(interestRate) || interestRate <= 0) {
                interestRateError.style.display = 'block';
                hasError = true;
            }
            if (isNaN(loanTerm) || loanTerm <= 0) {
                loanTermError.style.display = 'block';
                hasError = true;
            }

            if (hasError) return;

            // Calculate monthly payment
            const monthlyInterestRate = interestRate / 100 / 12;
            const numberOfPayments = loanTerm * 12;
            const monthlyPayment = loanAmount * (monthlyInterestRate * Math.pow(1 + monthlyInterestRate, numberOfPayments)) /
                                 (Math.pow(1 + monthlyInterestRate, numberOfPayments) - 1);

            // Display result
            resultDiv.innerHTML = `Monthly Payment: $${monthlyPayment.toFixed(2)}`;
        }
    </script>