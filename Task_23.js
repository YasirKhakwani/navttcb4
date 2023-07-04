const firstNumber = prompt("Enter the first number: ");
const secondNumber = prompt("Enter the second number: ");

function calculate(operator, firstNumber, secondNumber) {
  switch (operator) {
    case "+":
      return firstNumber + secondNumber;
    case "-":
      return firstNumber - secondNumber;
    case "*":
      return firstNumber * secondNumber;
    case "/":
      return firstNumber / secondNumber;
    default:
      return "Invalid operator";
  }
}

// Get the operator from the user
const operator = prompt("Enter the operator (+, -, *, /): ");

// Calculate the result
const result = calculate(operator, firstNumber, secondNumber);


alert(`The result of ${firstNumber} ${operator} ${secondNumber} is ${result}`);
