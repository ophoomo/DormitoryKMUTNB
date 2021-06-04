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