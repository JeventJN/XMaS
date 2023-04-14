function eventsubmits(){
    const user = document.getElementById('user')
    const pass = document.getElementById('pass')
    const form = document.getElementById('loginvalid')

    if(user.value.length < 6){
        alert("Username can't be less than 6 characters");
        return false;
    }

    if(user.value.length > 25){
        alert("Username must be less than 25 characters");
        return false;
    }

    if(pass.value.length < 6)
    {
        alert("Password can't be less than 6")
        return false;
    }

    // validasi ada gak username dan password di database

    return true;
}

