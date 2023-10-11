
// mascara para telefone sem plugin 
function mask(o,f){
    v_obj=o
    v_fun=f
    setTimeout("execmask()",1)
    }
    
function execmask(){
    v_obj.value=v_fun(v_obj.value)
    }
    
function masktel(v){
    v=v.replace(/\D/g,"");
    v=v.replace(/^(\d{2})(\d)/g,"($1) $2");
    v=v.replace(/(\d)(\d{4})$/,"$1-$2");
    return v;
}

function idcss( el ){
    return document.getElementById( el );
}    
window.addEventListener('load', function() {
  idcss('telefone').setAttribute('maxlength', 15);
  idcss('telefone').addEventListener('keypress', function(event) {
      mask(this, masktel);
  });
});


// validação do email 

function validaEmail(){
    var email = document.querySelector('#email');
    var error = document.querySelector('#error-email');
    
    if(!email.checkValidity()){
      error.innerHTML = "Email invalido";  
    }
     
  }
  
  function redefinirMsg(){
    var error = document.querySelector('#error-email');
    if (error.innerHTML == "Email invalido"){
      error.innerHTML = "";
    }
  }

 