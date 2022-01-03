const products = [
    {name: 'samsung s3 phone', price: 12000},
    {name: 'samsung s4 phone', price: 13000},
    {name: 'samsung s5 phone', price: 14000},
    {name: 'samsung s6 watch', price: 15000},
    {name: 'samsung s7 phone', price: 16000},
    {name: 'samsung s8 watch', price: 17000},
]
function searchProducts(products, searchText){
    const allProduct = [];
    for(const product of products){
       const name = product.name;
      if(name.indexOf(searchText) !== -1){
         allProduct.push(product);
      }
    
    }
    return allProduct;
}
const allProduct = searchProducts(products, 'watch');
console.log(allProduct);