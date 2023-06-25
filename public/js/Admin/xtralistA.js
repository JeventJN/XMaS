var modalA = document.getElementById('modalpopupA');
var modal= document.getElementById('modalpopup');
var popup = document.getElementById('popupA');
var showmodal = document.getElementById('showmodalA');
var showmodal1 = document.getElementById('showmodalA1');
var hidemodal = document.getElementById('hidemodalA');
var hidemodal1 = document.getElementById('hidemodalno1');
var hidemodal2 = document.getElementById('hidemodalno2');
var showmodalF = document.getElementById('showmodalF');
var hidemodalF = document.getElementById('hidemodalF');
var form = document.getElementById('modalpopupA');


showmodal1.addEventListener('click', openModal1);
showmodal.addEventListener('click', openModalA);
hidemodal.addEventListener('click', closeModalA);
hidemodal1.addEventListener('click', closeModal1);
hidemodal2.addEventListener('click', closeModal1);
showmodalF.addEventListener('click', openModal);
hidemodalF.addEventListener('click', closeModal);

function openModalA(){
    modalA.style.display="block";
}

function closeModalA(){
    modalA.style.display="none";
}

function openModal(){
    modal.style.display="block";
}

function closeModal(){
    modal.style.display="none";
}

function closeModal1(){
    popup.style.display="none";
}


function openModal1(){
    const xtraname = document.getElementById('xtraname')

    if(xtraname.value.length < 1){
        alert("Fill Xtra name.");
        return false;
    }

    if (form.category.value != 'Physique' && form.category.value != 'Non-Physique')
    {
        alert ("Please select one category");
        return false;
    }

    return popup.style.display="block";

}

var valuelist = document.getElementById('valueList');
var listArray = [];
var checkboxes = document.querySelectorAll('.checkbox');

function resetfun(){
    for(var checkbox of checkboxes) {
        {
            if(checkbox.checked == true){
                checkbox.checked = false;
            }
        }
    }
}

for(var checkbox of checkboxes) {
    checkbox.addEventListener('click', function()
    {
        if(this.checked == true){
            listArray.push(this.value);
        } else{
            listArray = listArray.filter(e => e !== this.value);
        }
    })
}



