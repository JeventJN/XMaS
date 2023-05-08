var modal1 = document.getElementById('modalpopupLI');
var modal2 = document.getElementById('modalpopupLO');
var modal3 = document.getElementById('modalpopupDEL');
var hidemodal1 = document.getElementById('hidemodalLI');
var hidemodal2 = document.getElementById('hidemodalLO');
var hidemodal3 = document.getElementById('hidemodalDEL');

hidemodal1.addEventListener('click', closePopup1);
hidemodal2.addEventListener('click', closePopup2);
hidemodal3.addEventListener('click', closePopup3);

function closePopup1(){
    modal1.style.display="none";
}

function closePopup2(){
    modal2.style.display="none";
}

function closePopup3(){
    modal3.style.display="none";
}



