function eventsubmits(){
    const nipuser = document.getElementById('nipuser')
    const pass = document.getElementById('pass')
    const form = document.getElementById('loginvalid')

    if(nipuser.value.length < 1){
        alert("NIP must be filled.");
        return false;
    }

    if(nipuser.value.length != 4){
        alert("NIP must be 4 numbers.");
        return false;
    }

    if(pass.value.length < 1)
    {
        alert("Password must be filled.")
        return false;
    }

    if(pass.value.length < 6)
    {
        alert("Password can't be less than 6 characters")
        return false;
    }

    // validasi ada gak username dan password di database

    return true;
}

