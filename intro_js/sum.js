/*const num = [2, 3, 7, 88, 45, 100, 99];
let sum = 0;
for(let i = 0; i < num.length; i ++){
    const element = num[i]
    console.log(element);
    sum = sum + element;
}
console.log(sum);*/

//function

function arrayTotal(numbers){
    let sum = 0;
    for (let i = 0; i < numbers.length; i++){
        const element = numbers[i];
        sum = sum + element;
    }
    return sum;
}
const total = arrayTotal([32, 45, 67]);
console.log(total);