function togglePopupInsert() {
    document.getElementsByClassName('popupInsert')[0].classList.toggle('hidden');
}

function togglePopupEdit(index) {
    document.getElementsByClassName('popupEdit')[0].classList.toggle('hidden');
    if (index != undefined){
        showDataForEdit(index);
    }
}

document.onkeydown = function(evt) {
    evt = evt || window.event;
    if (evt.keyCode === 27) {
        document.getElementsByClassName('popupInsert')[0].classList.add('hidden');
        document.getElementsByClassName('popupEdit')[0].classList.add('hidden');
    }
};
function showDataForEdit(index) {
    let valueInRow = document.getElementsByClassName('valueAdmin')[index];
    document.forms['form_editDataAdmin']['txt_adm_id_edit'].value = valueInRow.getElementsByClassName('adm_id')[0].innerText;
    document.forms['form_editDataAdmin']['txt_firstname_edit'].value = valueInRow.getElementsByClassName('firstname')[0].innerText;
    document.forms['form_editDataAdmin']['txt_lastname_edit'].value = valueInRow.getElementsByClassName('lastname')[0].innerText;
    document.forms['form_editDataAdmin']['txt_username_edit'].value = valueInRow.getElementsByClassName('username')[0].innerText;
}

document.getElementsByClassName('btn_changePassword')[0].addEventListener('click', () => {
    let elements = document.getElementsByClassName('changePassword');

    for (let i = 0; i < elements.length; i++) {
        elements[i].classList.toggle('hidden');
    }
    let btn_changePassword = document.getElementsByClassName('btn_changePassword')[0].innerHTML;
    document.getElementsByClassName('btn_changePassword')[0].innerHTML = (btn_changePassword == "ยกเลิกเปลี่ยนรหัส" ? 'เปลี่ยนรหัสผ่าน':'ยกเลิกเปลี่ยนรหัส');
    document.forms["form_editDataAdmin"]["txt_password"].value = (btn_changePassword == "ยกเลิกเปลี่ยนรหัส" ? '' : document.forms["form_editDataAdmin"]["txt_password"].value);
    document.forms["form_editDataAdmin"]["txt_password_again"].value = (btn_changePassword == "ยกเลิกเปลี่ยนรหัส" ? '' : document.forms["form_editDataAdmin"]["txt_password_again"].value);
});

document.getElementsByClassName('btn_addAdmin')[0].addEventListener('click', () => { togglePopupInsert(); })
document.getElementsByClassName('btn_cancelEdit')[0].addEventListener('click', () => { togglePopupEdit(); })
document.getElementsByClassName('btn_cancelInsert')[0].addEventListener('click', () => { togglePopupInsert(); })

for (let i = 0; i < document.getElementsByClassName('btn_delete_admin_check').length; i++) {
    document.getElementsByClassName('btn_delete_admin_check')[i].addEventListener('click', () => {
        Swal.fire({
            title: 'คุณต้องการที่จะลบผู้ดูแลใช่หรือไม่',
            text: 'หากลบแล้วจะไม่สามารถกู้คืนข้อมูลกลับมาได้',
            icon: 'warning',
            showConfirmButton: true,
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'ยืนยัน',
            cancelButtonText: 'ยกเลิก'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementsByClassName('btn_delete_admin')[i].click();
            }
        })
    });
}
