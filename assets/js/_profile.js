function editData() {
    document.getElementsByClassName('btnEditData')[0].classList.add('deactive');
    document.getElementsByClassName('btnSaveData')[0].classList.remove('deactive');
    for (let i = 0; i < 11; i++) {
        document.getElementsByClassName('input')[i].disabled = false;
        document.getElementsByClassName('input')[i].style.cursor = "auto";
    }
}

function selectFaculty() {
    document.getElementsByClassName('branchNonSelect')[0].classList.add('deactive');
    let x = document.getElementById("faculty").value;
    if (x === "engineer") {
        document.getElementsByClassName('branch')[0].classList.remove('deactive');
        document.getElementsByClassName('branch')[1].classList.add('deactive');
        document.getElementsByClassName('branch')[2].classList.add('deactive');
        document.getElementsByClassName('branch')[3].classList.add('deactive');
    } else if (x === "ai") {
        document.getElementsByClassName('branch')[0].classList.add('deactive');
        document.getElementsByClassName('branch')[1].classList.remove('deactive');
        document.getElementsByClassName('branch')[2].classList.add('deactive');
        document.getElementsByClassName('branch')[3].classList.add('deactive');
    } else if (x === "fitm") {
        document.getElementsByClassName('branch')[0].classList.add('deactive');
        document.getElementsByClassName('branch')[1].classList.add('deactive');
        document.getElementsByClassName('branch')[2].classList.remove('deactive');
        document.getElementsByClassName('branch')[3].classList.add('deactive');
    } else if (x === "bas") {
        document.getElementsByClassName('branch')[0].classList.add('deactive');
        document.getElementsByClassName('branch')[1].classList.add('deactive');
        document.getElementsByClassName('branch')[2].classList.add('deactive');
        document.getElementsByClassName('branch')[3].classList.remove('deactive');
    }
}