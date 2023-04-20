var modal = document.getElementById('modalpopup');
var showmodal = document.getElementById('showmodal');
var hidemodal = document.getElementById('hidemodal');
var window = document.getElementById('window');

showmodal.addEventListener('click', openModal);
hidemodal.addEventListener('click', closeModal);

function openModal(){
    modal.style.display="block";
}

function closeModal(){
    modal.style.display="none";
}

var valuelist = document.getElementById('valueList');
var listArray = [];
var checkboxes = document.querySelectorAll('.checkbox');

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