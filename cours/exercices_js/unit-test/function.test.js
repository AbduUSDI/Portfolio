// functions.test.js : Tests unitaires pour les fonctions

const { addition, soustraction, multiplication } = require('./functions');

// Test pour addition
test('addition de 5 et 10 donne 15', () => {
    expect(addition(5, 10)).toBe(15);
});

// Test pour soustraction
test('soustraction de 10 et 5 donne 5', () => {
    expect(soustraction(10, 5)).toBe(5);
});

// Test pour multiplication
test('multiplication de 4 et 3 donne 12', () => {
    expect(multiplication(4, 3)).toBe(12);
});
