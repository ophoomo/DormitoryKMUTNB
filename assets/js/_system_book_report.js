var checkClick = true;
function report() {
    getLocalStorage();

    let btn = document.getElementById('btn_report');
    btn.value = "เพิ่มข้อมูลในเอกสารและพิมพ์อีกครั้ง";

    if (checkClick) {
        checkClick = false;
        setInterval(() => {
            btn.classList.remove('scale-100');
            btn.classList.add('scale-105');
            setTimeout(() => {
                btn.classList.remove('scale-105');
                btn.classList.add('scale-100');
            }, 1000);
        }, 2000)
    }
    document.getElementById('areaDataAppend').classList.remove('hidden');
    document.getElementById('overlay').classList.remove('hidden');
}

function closePopup() {
    document.getElementById('areaDataAppend').classList.add('hidden');
    document.getElementById('overlay').classList.add('hidden');
}

function is_disease() {
    switch(document.getElementById('select_disease').value) {
        case '0':
            document.forms["dataAppend"]["txt_disease"].value = "";
            document.getElementsByClassName('is_disease')[0].classList.add('hidden');
            document.getElementsByClassName('is_disease')[1].classList.add('hidden');
            break;
        case '1': 
            document.getElementsByClassName('is_disease')[0].classList.remove('hidden');
            document.getElementsByClassName('is_disease')[1].classList.remove('hidden');
    }
}
