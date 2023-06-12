function eventsubmits(){
    const xtrachs = document.getElementById('xtrachs')
    const reason = document.getElementById('reason')

    if(xtrachs.value == "choose"){
        alert("Choose one xtra");
        return false;
    }

    // if(reason.value.length < 1){
    //     alert("Reason Must Be Filled");
    //     return false;
    // }

    return true;
}
