window.onload = () => {
    if (document.getElementById('select_floor').value != '0')
        document.getElementById('section_room').classList.remove('hidden');
}

function setStatusRoom(nRoom, nUnitPerson) {
    let room = document.getElementsByClassName('room');
    let unitPerson = document.getElementsByClassName('unitPerson');
    let limitMember = document.getElementsByClassName('limitMember');

    switch(Number(nUnitPerson)) { 
        case 0:
            ['pt-3', 'pb-1'].forEach(e => document.getElementsByClassName('dropdown-room')[nRoom].classList.remove(e));
    }

    unitPerson[Number(nRoom)].innerHTML = nUnitPerson;
    if (Number(unitPerson[nRoom].innerHTML) >= Number(limitMember[nRoom].innerHTML)) room[nRoom].classList.add('bg_red');
    else if (Number(unitPerson[nRoom].innerHTML) > 2) room[nRoom].classList.add('bg_orange');
    else if (Number(unitPerson[nRoom].innerHTML) >= 0) room[nRoom].classList.add('bg_green');
}

function get_select_option_book(n) {
    let floor = document.getElementById('select_floor').value;
    switch (n) { case 1: floor = '0'; }
    window.location = 'system_book.php?' + 'branch=' + document.getElementById('select_branch').value +
                        '&' + 'building=' + document.getElementById('select_building').value + 
                        '&' + 'floor=' + floor;
}

function showRoomBook(e, idRoom) {
    let fullname = e.getElementsByClassName('text_fullname');
    let branch = e.getElementsByClassName('text_branch');
    let strOutput = '';

    if (fullname.length != 0) {
        strOutput = '<p style="color: black; font-weight: 600; margin-bottom: 4px;">สมาชิกในห้องมีดังนี้</p><span style="font-weight: 500; color: #333;">';
    } else {
        strOutput = '';
    }

    document.getElementById('id_room').value = idRoom;
    document.getElementById('number_room').value = Number(e.getElementsByClassName('numberRoom')[0].innerText);

    for (let i = 0; i < fullname.length; i++) {
        strOutput += (fullname[i].innerText + '&nbsp;&nbsp;&nbsp;' + branch[i].innerText) + '<br>';  
        console.log(fullname[i].innerText + ' ' + branch[i].innerText);
    }
    if (!(Number(e.getElementsByClassName('unitPerson')[0].innerText) >= Number(e.getElementsByClassName('limitMember')[0].innerText))) {
        Swal.fire({
            title: 'จองห้องพัก '+ e.getElementsByClassName('numberRoom')[0].innerText,
            html: strOutput+'</span>',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'ยืนยันการจอง',
            cancelButtonColor: '#d33',
            cancelButtonText: 'ยกเลิก'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('submitBook').click();
            }
        })
    } else if ((Number(e.getElementsByClassName('unitPerson')[0].innerText) < 1)) {
        e.getElementsByClassName('dorpdown-room').classList.remove('pt-3');
    } else {
        Swal.fire({
            title: 'ห้อง '+ e.getElementsByClassName('numberRoom')[0].innerText +' เต็มแล้ว',
            text: 'กรุณาเลือกจองห้องอื่น',
            icon: 'error',
            showConfirmButton: false,
            showCancelButton: false,
            timer: 1500
        }, () => {
            location.reload(true);
            tr.hide();
        });
    }

}

function reshowRoom() {
    let x = document.getElementsByClassName('room');

    for (let i = 0; i < x.length; i++)
        x[i].classList.add('hidden');
    document.getElementById('select_floor').selectedIndex = '0';

}