
const num = ['1', '2', '3', '3', '1'];
function duplicateNum (num){
    const unique = [];
    for(const element of num){
    //    console.log(element);
        if(unique.indexOf(element) == -1){
        unique.push(element);
        }
    }
    return unique;
}
const uniqueNum = duplicateNum(num);
console.log('unique numbers are : ' , uniqueNum);
