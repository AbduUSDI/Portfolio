/**
 * Calculator App for Portfolio OS
 */
function initCalculator(container) {
  const display = container.querySelector(".calculator-display");
  const buttons = container.querySelectorAll(".calculator-button");

  let currentValue = "0";
  let previousValue = null;
  let operation = null;
  let resetDisplay = false;

  // Update display
  function updateDisplay() {
    display.textContent = currentValue;
  }

  // Clear calculator
  function clear() {
    currentValue = "0";
    previousValue = null;
    operation = null;
    resetDisplay = false;
    updateDisplay();
  }

  // Handle number input
  function inputNumber(num) {
    if (resetDisplay) {
      currentValue = num;
      resetDisplay = false;
    } else {
      currentValue = currentValue === "0" ? num : currentValue + num;
    }
    updateDisplay();
  }

  // Handle decimal point
  function inputDecimal() {
    if (resetDisplay) {
      currentValue = "0.";
      resetDisplay = false;
    } else if (!currentValue.includes(".")) {
      currentValue += ".";
    }
    updateDisplay();
  }

  // Handle operation
  function handleOperation(op) {
    const value = Number.parseFloat(currentValue);

    if (previousValue === null) {
      previousValue = value;
    } else if (operation) {
      const result = calculate();
      currentValue = String(result);
      previousValue = result;
    }

    operation = op;
    resetDisplay = true;
  }

  // Calculate result
  function calculate() {
    const prev = Number.parseFloat(previousValue);
    const current = Number.parseFloat(currentValue);

    if (isNaN(prev) || isNaN(current)) return current;

    let result;
    switch (operation) {
      case "+":
        result = prev + current;
        break;
      case "-":
        result = prev - current;
        break;
      case "×":
        result = prev * current;
        break;
      case "÷":
        result = prev / current;
        break;
      default:
        return current;
    }

    return Math.round(result * 1000000) / 1000000; // Handle floating point precision
  }

  // Handle equals
  function handleEquals() {
    if (!operation) return;

    const result = calculate();
    currentValue = String(result);
    previousValue = null;
    operation = null;
    resetDisplay = true;
    updateDisplay();
  }

  // Handle percentage
  function handlePercentage() {
    const value = Number.parseFloat(currentValue);
    currentValue = String(value / 100);
    updateDisplay();
  }

  // Handle sign change
  function handleSignChange() {
    const value = Number.parseFloat(currentValue);
    currentValue = String(-value);
    updateDisplay();
  }

  // Add event listeners to buttons
  buttons.forEach((button) => {
    button.addEventListener("click", () => {
      const value = button.textContent;

      // Handle different button types
      if (value >= "0" && value <= "9") {
        inputNumber(value);
      } else if (value === ".") {
        inputDecimal();
      } else if (value === "C") {
        clear();
      } else if (value === "±") {
        handleSignChange();
      } else if (value === "%") {
        handlePercentage();
      } else if (value === "=") {
        handleEquals();
      } else if (["+", "-", "×", "÷"].includes(value)) {
        handleOperation(value);
      }
    });
  });

  // Initialize display
  updateDisplay();
}
