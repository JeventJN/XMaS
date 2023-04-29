var modal = document.getElementById('modalpopup');
var showmodal = document.getElementById('showmodal');
var hidemodal = document.getElementById('hidemodal');
var hidemodalno = document.getElementById('hidemodalno');
var window = document.getElementById('window');

showmodal.addEventListener('click', openModal);
hidemodal.addEventListener('click', closeModal);
hidemodalno.addEventListener('click', closeModal);

function openModal(){
    const xtraname = document.getElementById('xtraname')
    const leadername = document.getElementById('leadername')
    const reporttitle = document.getElementById('reporttitle')
    const reportdesc = document.getElementById('reportdesc')
    const photo = document.getElementById('photo')
    const reportdate = document.getElementById('reportdate')

    if(xtraname.value.length < 1){
        alert("Extracurricular Name must be filled.");
        return false;
    }

    if(xtraname.value.length > 30){
        alert("Extracurricular Name must be least than 30 characters.");
        return false;
    }

    if(leadername.value.length < 1){
        alert("Leader Name must be filled.");
        return false;
    }

    if(leadername.value.length < 6){
        alert("Leader Name can't be less than 6 characters.");
        return false;
    }

    if(leadername.value.length > 25){
        alert("Leader Name must be less than 25 characters.");
        return false;
    }

    if (reportdate.value == '')
    {
        alert ("Please choose Report's Date.");
        return false;
    }

    if(reporttitle.value.length < 1){
        alert("Report Title Name must be filled.");
        return false;
    }

    if(reporttitle.value.length > 30){
        alert("Report's Title must be least than 30 characters.");
        return false;
    }

    if(reportdesc.value.length < 1){
        alert("Report's Description must be filled.");
        return false;
    }

    if(reportdesc.value.length > 180){
        alert("Report's Description must be least than 30 characters.");
        return false;
    }

    if (photo.value == '')
    {
        alert ("Please choose photo to be uploaded.");
        return false;
    }

    return modal.style.display="block";
}

    function closeModal(){
    modal.style.display="none";
}


