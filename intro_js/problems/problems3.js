//reverse string

function reverseString(str) {
    var newString = "";
    // i = 0 --> str.length-1 / i< 0 --> i >=0/ i++ --> i--
    for (var i = str.length - 1; i >= 0; i--) {
        newString = newString + str[i];
    }
    return newString;
}
const reverseStrings = reverseString('Natasha');
console.log(reverseStrings);
