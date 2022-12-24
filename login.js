
/* forma per me nrru prej login ne regjister dhe anasjelltas*/

function next(){
   loginforma = document.querySelector('.login-form').style.display = "none";
   registerforma = document.querySelector('.register-form').style.display = "block";

 }
 function prev(){
   document.querySelector('.login-form').style.display = "block";
   document.querySelector('.register-form').style.display = "none";
   }


/* validimi i login formes*/

function validateFormLogin(){

   const username = document.getElementById("username");
   const password = document.getElementById("password");
   const usernameError = document.getElementById("usernameError");
   const passwordError = document.getElementById("passwordError");
   let isValid = true;

   if (username.value.trim() === "") {
     usernameError.textContent = "Please enter a username";
     isValid = false;
   } else {
     usernameError.textContent = "";

   }
 
   if (password.value.trim() === "") {
     passwordError.textContent = "Please enter a password";
     isValid = false;
   }   else if (password.value.trim().length < 8) {
      passwordError.textContent = "Password must be at least 8 characters long";
      isValid = false;
   }
       else {
     passwordError.textContent = "";
   }

    
     if (isValid) {
      // Navigate to the products page
      location.href = "products.html";
    }
}
const form = document.querySelector(".login-form");
form.addEventListener("submit", validateForm);



/* validimi i regjister formes*/

function validateRegisterForm(){
  
    const user =document.getElementById('useri');
    const pass = document.getElementById('pass');
    const email =document.getElementById('email');
    const erroruser = document.getElementById('erroruser');
    const erroremail = document.getElementById('erroremail');
    const errorpass = document.getElementById('errorpass');
    const errorconfirm = document.getElementById('errorconfirm');
    const confirmpass = document.getElementById('confirmpass');
    
    
    if (username.value.trim() === "") {
      erroruser.textContent = "Please enter a username";
      isValid = false;
    } else {
      usernameError.textContent = "";
 
    }
  
    if (password.value.trim() === "") {
      errorpass.textContent = "Please enter a password";
      isValid = false;
    }   else if (password.value.trim().length < 8) {
       passwordError.textContent = "Password must be at least 8 characters long";
       isValid = false;
    }
        else {
      errorpass.textContent = "";
    }
    

    if (user.value.trim() === "") {
      erroruser.textContent = "Please enter a username";
      isValid = false;
    } else {
      erroruser.textContent = "";
 
    }
  
    if (pass.value.trim() === "") {
      errorpass.textContent = "Please enter a password";
      isValid = false;
    }   else if (pass.value.trim().length < 8) {
       errorpass.textContent = "Password must be at least 8 characters long";
       isValid = false;
    }
        else {
      errorpass.textContent = "";
    }

   if(email.value.trim() ==="" ) {
          erroremail.textContent = "Please enter an email";
   }
     else if(email.value.indexOf("@") === -1){
      erroremail.textContent = "Please enter a @";
     }
      else{
        erroremail.textContent = "";
      }

        if(confirmpass.value.trim() ===""){
                confirmpass.textContent = "Please enter a password";

        }

        else if(confirmpass.value.trim() !== pass.value.trim()){
           errorconfirm.textContent = "Password must match";
        } 

        else{
          errorconfirm.textContent = "";
        }
}