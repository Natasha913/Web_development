function inchToFeet(inches){
    var feet = inches/12;
    return feet;
}
var myInches = 125;
var feet = parseInt(inchToFeet(myInches));
console.log('Inches in feet', feet);