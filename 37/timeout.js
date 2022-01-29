function doSomething(){
    console.log('function');
}
console.log('First');
console.log('second');
//doSomething();
setTimeout(doSomething, 6000);
//way
setTimeout(() => {
    console.log('function2');
}, 4000);

console.log('third');
console.log('fourth');