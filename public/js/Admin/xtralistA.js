var modal = document.getElementById('modalpopupA');
var showmodal = document.getElementById('showmodalA');
var hidemodal = document.getElementById('hidemodalA');

showmodal.addEventListener('click', openModal);
hidemodal.addEventListener('click', closeModal);

function openModal(){
    modal.style.display="block";
}

function closeModal(){
    modal.style.display="none";
}

function eventsubmits(){
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


    return true;
}

