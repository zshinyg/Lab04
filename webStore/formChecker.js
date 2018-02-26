
let isValid = true;


function formCheck() {
    isValid = true;
    checkUsrPwd();
    checkShipping();
    return isValid;
}

function checkUsrPwd() {
    let user = document.getElementById("user").value;
    let password = document.getElementById("pwd").value;

    if (user == "" || password == "") {
        isValid = false;
        alert("Please fill out the User Name and Password field")
        return isValid;
    }

    let atCheck = user.indexOf("@");
    let dotCheck = user.lastIndexOf(".");

    if ( atCheck == -1 || dotCheck == -1) {
        isValid = false;
        alert("Please insert a valid email (user@domain.com)")
        return isValid;
    }

}

function checkShipping() {
    let shipping = document.getElementsByName("shipOption");
    let isChecked = false;

    for (let i = 0; i < shipping.length; i++) {
        if (shipping[i].checked) {
            isChecked = true;
            break;
        }
        else {
            isChecked = false;
        }
        
    }
    if(isChecked == false) {
        isValid = false;
        alert("Please select a shipping Option");
        return isValid;
    }
}

