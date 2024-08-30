let stack = [];

// Push 10 random numbers onto the stack and print them
for (let i = 0; i < 10; i++) {
  let number = Math.floor(Math.random() * 51);
  stack.push(number);
  console.log(number + " ");
}

console.log("\n");

// Pop and print the numbers from the stack
while (stack.length > 0) {
  console.log(stack.pop() + " ");
}

console.log();
