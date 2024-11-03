// app.js

import { addition, soustraction, multiplication, division } from './calculations.js';

function performOperations() {
    const number1 = parseFloat(document.getElementById('number1').value);
    const number2 = parseFloat(document.getElementById('number2').value);

    if (isNaN(number1) || isNaN(number2)) {
        document.getElementById('result').innerHTML = "<div class='alert alert-danger'>Veuillez entrer deux nombres valides.</div>";
        return;
    }

    const additionResult = addition(number1, number2);
    const soustractionResult = soustraction(number1, number2);
    const multiplicationResult = multiplication(number1, number2);
    const divisionResult = division(number1, number2);

    document.getElementById('result').innerHTML = `
        <div class="alert alert-info">
            <p><strong>Addition :</strong> ${additionResult}</p>
            <p><strong>Soustraction :</strong> ${soustractionResult}</p>
            <p><strong>Multiplication :</strong> ${multiplicationResult}</p>
            <p><strong>Division :</strong> ${divisionResult}</p>
        </div>
    `;
}

// Rendre la fonction accessible globalement
window.performOperations = performOperations;
