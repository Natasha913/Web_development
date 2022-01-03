/*
document.getElementById('case-plus').addEventListener('click', function(){
    
    const caseInput = document.getElementById('case-number');
    const caseNumber = caseInput.value;
    caseInput.value = parseInt(caseNumber)+1;
    //console.log(caseNumber);
});
document.getElementById('case-minus').addEventListener('click', function(){
    const caseInput = document.getElementById('case-number');
    const caseNumber = caseInput.value;
    caseInput.value = parseInt(caseNumber)-1;
})

*/
//mobile case
function updateCaseNumber(product, price, isIncreasing){
    const caseInput = document.getElementById(product + '-number');//id
    let caseNumber = caseInput.value;
   if(isIncreasing == true){
    caseNumber = parseInt(caseNumber) + 1;
    }
    else if(caseNumber > 0){
        caseNumber = parseInt(caseNumber) - 1;
    }
    caseInput.value =caseNumber;
    //update case total
    const caseTotal = document.getElementById('case-total');
    caseTotal.innerText = caseNumber * price;
    calculateTotal();

}

document.getElementById('case-plus').addEventListener('click', //case-plus id
 function(){
    updateCaseNumber('case',59, true);
});
document.getElementById('case-minus').addEventListener('click', //case-minus id
 function(){
    updateCaseNumber('case',59,false);
});



//mobile
function updateMobileNumber(product,price,isIncreasing){
    const mobileInput = document.getElementById(product + '-number');//id
    let mobileNumber = mobileInput.value;
   if(isIncreasing == true){
    mobileNumber = parseInt(mobileNumber) + 1;
    }
    else if(mobileNumber > 0){
        mobileNumber = parseInt(mobileNumber) - 1;
    }
    mobileInput.value =mobileNumber;
    //update case total
    const mobileTotal = document.getElementById('mobile-total');
    mobileTotal.innerText = mobileNumber * price;
    calculateTotal();

}
//////calculate
function getInputValue(product){
    const productInput = document.getElementById(product + '-number');
    const productNumber = parseInt(productInput.value);
    return productNumber;
}
function calculateTotal(){
    const phoneTotal = getInputValue('mobile') * 1219;
    const caseTotal = getInputValue('case') * 59;
    const subTotal = phoneTotal + caseTotal;
    const tax = subTotal / 10;
    const totalPrice = subTotal + tax;
    
    //update on the html
    document.getElementById('sub-total').innerText = subTotal;
    document.getElementById('tax-amount').innerText = tax;
    document.getElementById('total-price').innerText = totalPrice;

}
///////


document.getElementById('mobile-plus').addEventListener('click', //case-plus id
 function(){
    updateMobileNumber('mobile',1219,true);
});
document.getElementById('mobile-minus').addEventListener('click', //case-minus id
 function(){
    updateMobileNumber('mobile',1219,false);
}); 

