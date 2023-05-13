const fs = require('fs');

const excludedNumbersStr = fs.readFileSync('excluded.txt', 'utf8');
const excludedNumbers = excludedNumbersStr.split(',').map(Number);

const start = 12;
const end = 62;
const randomNumbers = [];
while (randomNumbers.length < 3) {
  const randomNumber = Math.floor(Math.random() * (end - start + 1)) + start;
  if (!excludedNumbers.includes(randomNumber)) {
    randomNumbers.push(randomNumber);
  }
}

console.log('Random Question Numbers:', randomNumbers.join(', '));
