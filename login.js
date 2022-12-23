

/* forma per me nrru prej login ne regjister dhe anasjelltas*/

  function next(){
    loginforma = document.querySelector('.login-form').style.display = "none";
 registerforma = document.querySelector('.register-form').style.display = "block";
 
  }
  function prev(){
    document.querySelector('.login-form').style.display = "block";
    document.querySelector('.register-form').style.display = "none";
    }

    /* kjo eshte validimi*/
   

    function validoLogin(){
   var loginforma = document.querySelector('.login-form');
      var username = document.getElementById('useri');
       var pass  = document.getElementById('pass');
  
    var erroruseri = document.getElementById('erroremri');
      
       if(username === ""){
        erroruseri.innerHTML
       }
     
    }
    
    