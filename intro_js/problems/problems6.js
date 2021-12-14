const products =[
    {name :'laptop', price: 33000},
    {name : 'dress', price: 300},
    {name: 'shoe', price: 500}
];
let totalPrice = 0;
for (const product of products){
    totalPrice = totalPrice + product.price;
}
console.log(totalPrice);