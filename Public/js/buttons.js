function checkPassword() {
    password1 = document.getElementById("passsword").value;
    password2 = document.getElementById("dpassword").value;

    // If password not entered
    if (password1 == '')
        alert ("Please enter Password");

    // If confirm password not entered
    else if (password2 == '')
        alert ("Please enter confirm password");

    // If Not same return False.
    else if (password1 != password2) {
        alert ("\nPassword did not match: Please try again...");
        return false;
    }

    // If same return True.
    else{
        alert("")
        return true;
    }
}

function redirectButt() {
    document.getElementById("AccInfo").onclick = function () {
        location.href = "http://127.0.0.1/projektPai/AccountFarm";
    }
    document.getElementById("AccOff").onclick = function () {
        location.href = "http://127.0.0.1/projektPai/AccountOffers";
    }
    document.getElementById("AccRes").onclick = function () {
        location.href = "http://127.0.0.1/projektPai/AccountResetPassword";
    }
    document.getElementById("AccDel").onclick = function () {
        location.href = "http://127.0.0.1/projektPai/AccountDelete";
    }

}