function isLeapYear(year){
    if(year%4 == 0){
        return true;
    }
    else {
        return false; 
    }
}
const myYear = 2024;
const n = isLeapYear(myYear);
console.log(+myYear+ ' is leap year: ', n);