function largestElement(num){
 let largest = 0;
 for (let i = 0; i < num.length; i++){
     const element = num[i];
    //console.log(element);
    if(element > largest){
        largest = element;
    }
 }
 return largest;
}

const ages = [12, 54, 44, 67, 78];
const oldest = largestElement(ages);
console.log(oldest);