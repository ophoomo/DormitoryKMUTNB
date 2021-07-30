// if login status male & female
dorm_male();
// dorm_female();


// if room is full
roomFull();


// if no member in room
emptyRoom();


function dorm_male() {
    document.getElementsByClassName('selectDorm')[0].classList.remove('deactive');
    document.getElementsByClassName('selectDorm')[1].classList.add('deactive');
    var unitPerson = document.getElementsByClassName('unitPerson');
    for (let i = 0; i < unitPerson.length; i++) {
        unitPerson[i].innerHTML = "5";
    }
}


function dorm_female() {
    document.getElementsByClassName('selectDorm')[0].classList.add('deactive');
    document.getElementsByClassName('selectDorm')[1].classList.remove('deactive');
    var unitPerson = document.getElementsByClassName('unitPerson');
    for (let i = 0; i < unitPerson.length; i++) {
        unitPerson[i].innerHTML = "4";
    }
}

function roomFull() {
    document.getElementsByClassName('clickBtn')[0].innerHTML = "เต็มแล้ว";
    document.getElementsByClassName('clickBtn')[0].classList.add('ColorStatusIsFull');
    document.getElementsByClassName('clickBtn')[0].style.cursor = "not-allowed";
    document.getElementsByClassName('clickBtn')[0].disabled = true;

}

function emptyRoom() {
    // ------------------------- change index but error
    document.getElementsByClassName('emptyRoom')[5].classList.add('active');
}


function selectFloor() {
    let value = document.getElementById('selectFloor').value;
    alert(value);
}

function selectBranch() {
    let value = document.getElementById("selectBranch").value;
    alert(value);
}

function selectDorm() {
    let value = document.getElementById("selectDormFemale").value;
    alert(value);
}