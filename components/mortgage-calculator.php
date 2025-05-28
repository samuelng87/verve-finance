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