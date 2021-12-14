// find duplicate 
const fruits = ['mango', 'apple', 'orange', 'banana', 'apple', 'mango'];

function removeDuplicate(fruits){
    const unique = [];
    
    for(const element of fruits){
        console.log(element);
        if(unique.indexOf(element) == -1 ){
            unique.push(element);
        }
    }
    return unique;
     
}
const allFruits = removeDuplicate(fruits);
console.log(allFruits);