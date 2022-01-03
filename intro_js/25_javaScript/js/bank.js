document.getElementById('login-submit').addEventListener
('click',function(){
    const emailField = document.getElementById('user-email');
    const userEmail = emailField.value;
   //console.log(userEmail);
    //get user password
    const passwordField =document.getElementById('user-password');
    const userPass = passwordField.value;
   // console.log(userPass);

   if(userEmail == 'natasha@gmail.com' && userPass == 'natasha'){
    window.location.href="bank.html";
 }
});
document.getElementById('deposit-submit').addEventListener('click', function(){
    //get amount
    const depositInput = document.getElementById('deposit');
    const depositAmount = depositInput.value;
    //console.log(depositAmount);
    const depositTotal = document.getElementById('deposit-total');
   depositTotal.innerText = depositAmount;
})