function validateForm() {

  let uname = document.forms["myForm"]["userName"].value;
  let password = document.forms["myForm"]["password"].value;
  let email = document.forms["myForm"]["email"].value;
  let confirm = document.forms["myForm"]["confirm"].value;
  let code = document.forms["myForm"]["code"].value;  


  if (uname == "" || password =="" || email == "" || confirm =="") {
    alert("All feilds must be filled out");
    return false;
  }


 if (password.length < 7 ) {
    alert("password should be more than 7 characters !");
    return false;
  }

else if (uname.length < 7) {
  alert("user name should be more than 6 characters !");
    return false;
} 

else if (uname.includes("!")||uname.includes(" ")||uname.includes("#")||uname.includes("$")||uname.includes("%")||uname.includes("^")||uname.includes("*")||uname.includes("(")||uname.includes(")")||uname.includes("-")||uname.includes("=")||uname.includes("+")||uname.includes("{")||uname.includes("}")||uname.includes("[")||uname.includes("]")||uname.includes("/")||uname.includes(",")||uname.includes("\\")||uname.includes("|")) {
  alert("user Name should not contain spaces or specialll characters");
  return false;
}

else if (uname.charAt(0)!="@") {
  document.forms["myForm"]["userName"].value="@"+uname;
  return false;
}

else if (email.length < 6) {
  alert("email should be more than 6 characters !");
    return false;
}

else if (confirm != password) {
  alert("please enter the same password in both feilds");
    return false;
} else if (code!='0999272') {
  alert("please enter the right owener code");
  return false;
}

}

