function eventsubmits(){
    const name = document.getElementById('name')
    const nip = document.getElementById('NIP')
    const phone = document.getElementById('phone')
    const password = document.getElementById('password')
    const password1 = document.getElementById('password1')
    const form = document.getElementById('signupvalid')

    if(name.value.length < 1){
        alert("Name must be filled.");
        return false;
    }

    if(name.value.length < 6){
        alert("Name can't be less than 6 characters.");
        return false;
    }

    if(name.value.length > 25){
        alert("Name must be less than 25 characters.");
        return false;
    }

    if(nip.value.length < 1){
        alert("NIP must be filled.");
        return false;
    }

    if(nip.value.length != 4){
        alert("NIP must be 4 numbers.");
        return false;
    }

    if (form.program.value != 'PPTI' && form.program.value != 'PPBP')
    {
        alert ("Please select one program");
        return false;
    }

    if(phone.value.length < 1){
        alert("Phone must be filled.");
        return false;
    }

    if(phone.value.length < 11 || phone.value.length > 13)
    {
        alert("Phone number must be around 11 to 13.");
        return false;
    }

    if(password.value.length < 1)
    {
        alert("Password must be filled.")
        return false;
    }

    if(password.value.length < 6)
    {
        alert("Password can't be less than 6 characters.")
        return false;
    }

    if(password.value != password1.value)
    {
        alert("Password is not the same.")
        return false;
    }

    if(!form.checkbox.checked) {
        alert("Please check on term and condition.");
        return false;
    }

    return true;
}

