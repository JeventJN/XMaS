function eventsubmits(){
    const username = document.getElementById('username')
    const nip = document.getElementById('nip')
    const phone = document.getElementById('phone')
    const password = document.getElementById('password')
    const password1 = document.getElementById('password1')
    const form = document.getElementById('signupvalid')

    if(username.value.length < 6){
        alert("Username can't be less than 6 characters");
        return false;
    }

    if(username.value.length > 25){
        alert("Username must be less than 25 characters");
        return false;
    }

    if(nip.value.length != 4){
        alert("NIP must be 4 number");
        return false;
    }

    if(phone.value.length < 11 || phone.value.length > 13)
    {
        alert("Phone number must be around 11 to 13");
        return false;
    }

    if(password.value.length < 6)
    {
        alert("Password can't be less than 6")
        return false;
    }

    if(password.value != password1.value)
    {
        alert("Password is not the same")
        return false;
    }

    return true;
}

