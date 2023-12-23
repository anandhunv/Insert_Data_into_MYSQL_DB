function validate(){
    //creating variables
    var email=document.getElementById("email");//method //username enna id yil ezhuthunu value ne username enna variablil vekunu

    var password=document.getElementById("password");//method //username enna id yil ezhuthunu value ne username enna variablil vekunu


    //if anyone didint miss the username field or didint eneter the username
 

    if(email.value===""){
        alert("Please enter the email");
        //tofocus on that field
        document.form1.email.focus();
        return false;
    }

    if(password.value===""){
        alert("Please enter the password");
        //tofocus on that field
        document.form1.password.focus();
        return false;
    }


    return true;  //ithrem karyagal  onum ilathe elam field um filled anel direct ayi purath vanu baki execute cheyum
     
}