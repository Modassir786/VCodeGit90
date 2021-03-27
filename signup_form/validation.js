function myvalidation(){

    // TAKEN A VARIABLE IS SORT VALUE AND ELEMENT ID USER
    var name = document.getElementById("A").value;
    var email = document.getElementById("B").value;
    var password = document.getElementById("C").value;
    var confpass = document.getElementById("D").value;
    var city = document.getElementById("E").value;
    var term = document.getElementById("Icheck");
    var birth = document.getElementById("G").value;
    var upload = document.getElementById("H").value;
    var Gender = document.formControl.sex;

    // NAME FIELD CHECK VALIDATION
    if(name==""){
        document.getElementById("alert").innerHTML="Your Username field is blank please enter username";
        document.getElementById("I").value="Submit";
        document.getElementById("I").style.color="#fff";
        return false;
    }
    if(!isNaN(name)){
        document.getElementById("alert").innerHTML="Number is not allowed user only characters";
        document.getElementById("I").value="Submit";
        document.getElementById("I").style.color="#fff";
        return false;
    }
    if(name.length<=2){
        document.getElementById("alert").innerHTML="Username enter must be Minimum 3 chracters";
        document.getElementById("I").value="Submit";
        document.getElementById("I").style.color="#fff";
        return false;
    }
    if(name.length>14){
        document.getElementById("alert").innerHTML="Username enter must be Maximum 15 chracters";
        document.getElementById("I").value="Submit";
        document.getElementById("I").style.color="#fff";
        return false;
    }
    else{

    }
    // EMAIL FILED CHECK VALIDATION
    if(email==""){
        document.getElementById("alert").innerHTML="Your email address field is blank please enter email";
        document.getElementById("I").value="Submit";
        document.getElementById("I").style.color="#fff";
        return false;
    }
    if(email.length<=12){
        document.getElementById("alert").innerHTML="Invalid email address Please enter valid email";
        document.getElementById("I").value="Submit";
        document.getElementById("I").style.color="#fff";
        return false;
    }
    else{
        
    }
    // PASSWORD FIELD CHECK VALIDATION
    if(password==""){
        document.getElementById("alert").innerHTML="Password field is blank please enter password";
        document.getElementById("I").value="Submit";
        document.getElementById("I").style.color="#fff";
        return false;
    }
    if(password.length<=5){
        document.getElementById("alert").innerHTML="Please choose strong password minimum 6 mix letters";
        document.getElementById("I").value="Submit";
        document.getElementById("I").style.color="#fff";
        return false;
    }
    if(password.length>14){
        document.getElementById("alert").innerHTML="Sorry your password too longer maximum 15 letters allowed";
        document.getElementById("I").value="Submit";
        document.getElementById("I").style.color="#fff";
        return false;
    }
    else{
       
    }
    // CONFIRM PASSWORD FIED CHECK VALIDATION
    if(confpass==""){
        document.getElementById("alert").innerHTML="Confirm Password field is blank please enter confirm password";
        document.getElementById("I").value="Submit";
        document.getElementById("I").style.color="#fff";
        return false;
    }else{
       
    }
    // CHECK PASSWORD FIELD AND CONFIRM PASSWORD FIELD MATCH VALIDATION
    if(password!==confpass){
        document.getElementById("alert").innerHTML="Password does not match please enter same password";
        document.getElementById("I").value="Submit";
        document.getElementById("I").style.color="#fff";
        return false;
    }
    // CITY FIELD CHECK VALIDATION
    if(city==""){
        document.getElementById("alert").innerHTML="Your city field is blank please enter cirty";
        document.getElementById("I").value="Submit";
        document.getElementById("I").style.color="#fff";
        return false;
    }else{
       
    }
    // CHECK BIRTH FIELD VALIDATION
    if(birth == ""){
        document.getElementById("alert").innerHTML="Dathe of birth is not selected Please select D_O_B";
        document.getElementById("I").value="Submit";
        document.getElementById("I").style.color="#fff";
        return false;
    }else{
       
    }
    // CHECK UPLOAD ID FIELD VALIDATION 
    if(upload == ""){
        document.getElementById("alert").innerHTML="Your ID is not uploaded Please upload you ID";
        document.getElementById("I").value="Submit";
        document.getElementById("I").style.color="#fff";
        return false;
    }else{
       
    }
    // CHECK GENDER FILED VALIDATION IN COLUM NO THREE
    for(a=0; a<Gender.length; a++){
        if(Gender[a].checked==true)
        return true;
    }
    // CHECK LAST CONDITON TERM AND CONDITON VALIDATION
    if(term.checked == false){
        document.getElementById("alert").innerHTML="If you Agree Term & Conditon please check";
        document.getElementById("I").value="Submit";
        document.getElementById("I").style.color="#fff";
        return false;
    }else{
       
    }
    document.getElementById("alert").innerHTML="Not choosen gender Please choose your gender";
    document.getElementById("I").value="Submit";
    document.getElementById("I").style.color="#fff";
    return false;
}