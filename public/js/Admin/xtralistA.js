var modal = document.getElementById('modalpopupA');
var popup = document.getElementById('popupA');
var showmodal = document.getElementById('showmodalA');
var showmodal1 = document.getElementById('showmodalA1');
var hidemodal = document.getElementById('hidemodalA');
var hidemodal1 = document.getElementById('hidemodalno1');
var hidemodal2 = document.getElementById('hidemodalno2');

showmodal1.addEventListener('click', openModal1);
showmodal.addEventListener('click', openModal);
hidemodal.addEventListener('click', closeModal);
hidemodal1.addEventListener('click', closeModal1);
hidemodal2.addEventListener('click', closeModal1);

function openModal(){
    modal.style.display="block";
}

function closeModal1(){
    popup.style.display="none";
}

function closeModal(){
    modal.style.display="none";
}

function openModal1(){
    const xtraname = document.getElementById('xtraname')
    const category = document.getElementById('category')

    if(xtraname.value.length < 1){
        alert("Fill Xtra name.");
        return false;
    }

    if(!category.checked){
        alert("Choose one category.");
        return false;
    }

    return popup.style.display="block";

}

