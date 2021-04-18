function formvalidation(){
    var Fullname=document.getElementById("FullName");
    var username=document.getElementById("UserName");
    var number=document.getElementById('ContactNo');
    var email=document.getElementById("Email")
    var password=document.getElementById('Password');
    var conpassword=document.getElementById('ConfirmPass');
    if(Fullname.value.trim()==''){
        alert('Full Name must be filled out')
        return false
    }
    else if(username.value.trim()==''){
        alert('UserName must be filled out')
        return false
    }
    else if(number.value.trim()==''){
        alert('Mobile Number must be filled out')
        return false
    }
    else if(number.value.trim().length<10){
        alert('Mobile Number must be filled out 10 Digit')
        return false
    }
    else if(email.value.trim()==''){
        alert('Email must be filles out')
        return false
    }
    else if(password.value.trim()==''){
        alert('Password must be filled out(Upper,Lower&Special Letter include Number)')
        return false;
        
    }
    else if(conpassword.value.trim()==''){
        alert("Conform Password must filled out")
        return false;
    }
    else{

        return true;
    }
}

function validationEmail(){
    var email=document.getElementById("Email")
    var emailVal=email.value
    var pattern=/^[A-Za-z0-9.]{2,}@[a-z]{2,}[.]{1}[a-z]{2,3}[.]{0,1}[a-z]{0,3}$/
    if(pattern.test(emailVal))
    {
        email.style.backgroundColor='green'
    }
    else
    {
        email.style.backgroundColor='red'
        
    }
    
}
function Passvalidation(){
    var password=document.getElementById("Password").value
    var cpassword=document.getElementById("ConfirmPass").value
    var pattern=/^(?=.*[0-9])(?=.*[!@#$%^&*])(?=.*[A-Z])[a-z0-9A-Z!@#$%^&*]{4,}$/
    if(pattern.test(password)){
        document.getElementById('p1').innerHTML=''

    }
    else{
        alert('Password must be fill (Upper,Lower&Special Letter include Number)');
        return false;
    }
    if(password != cpassword){
        alert("Conform Password must fill Same");
        return false;
        
    }
    else{
        alert("Welcome To Lovely Professional University");
        document.getElementById('p2').innerHTML=''
        
    } 
}
