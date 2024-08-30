let queue = [];

// Push 10 random numbers onto the queue and print them
for (let i = 0; i < 10; i++) {
  let number = Math.floor(Math.random() * 51);
  queue.push(number);
  console.log(number + " ");
}

console.log("\n");

// Pop and print the numbers from the queue
while (queue.length > 0) {
  console.log(queue.shift() + " ");
}

console.log();
