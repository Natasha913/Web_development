const products = [
    'Dell hardcore i29 200GB Laptop',
    'iPhone 12',
    'Acer laptop',
    '1X59 Lenovo Laptop'
];
const searching = 'laptop';

const output = [];
for (const product of products){
    if(product.toLowerCase().includes(searching.toLowerCase())){
        output .push(product);
    }
    
}
console.log(output);