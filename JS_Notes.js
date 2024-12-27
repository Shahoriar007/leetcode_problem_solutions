includes; //check in array
length; //array length

unshift; // add something in front of array

// exm1:

// const arr = [2, 3, 4];
// arr.unshift(1); // Add 1 to the front
// console.log(arr); // Output: [1, 2, 3, 4]

// arr.unshift(0, -1); // Add multiple elements
// console.log(arr); // Output: [0, -1, 1, 2, 3, 4]

// exm2:

// const arr = [2, 3, 4];
// const newArr = [1, ...arr]; // Add 1 to the front
// console.log(newArr); // Output: [1, 2, 3, 4]

// exm3:

// const arr = [2, 3, 4];
// for (let i = arr.length; i > 0; i--) {
//     arr[i] = arr[i - 1];
// }
// arr[0] = 1; // Add 1 at the front
// console.log(arr); // Output: [1, 2, 3, 4]

splice;

slice;
