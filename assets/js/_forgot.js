var delaySend = 30;
var delayClock;
myTimer();
// checkStatus(1); // 0 = Not pass , 1 = pass

function sendMail() {
    delayClock = setInterval(myTimer, 1000);
    document.getElementsByClassName('btnSendMail')[0].disabled = true;
    document.getElementsByClassName('statusSend')[0].classList.remove('deactive');
    document.getElementsByClassName('btnSendMail')[0].classList.add('disableBtnSend');
}

function myTimer() {
    document.getElementsByClassName('timeSendMail')[0].innerHTML = delaySend;
    delaySend--;
    if (delaySend < 0) {
        delaySend = 30;
        document.getElementsByClassName('btnSendMail')[0].disabled = false;
        document.getElementsByClassName('statusSend')[0].classList.add('deactive');
        document.getElementsByClassName('btnSendMail')[0].classList.remove('disableBtnSend');
        clearInterval(delayClock);
    }
}

function checkStatus(status) {
    switch (status) {
        case 0:
            document.getElementsByClassName('textStatus')[0].innerHTML = "รหัสยืนยันไม่ถูกต้อง โปรดลองใหม่อีกครั้ง";
            break;
        case 1:
            document.getElementsByClassName('textStatus')[0].innerHTML = "คุณสามารถรีเช็ตรหัสได้";
            document.getElementsByClassName('textStatus')[0].style.color = "green";
            document.getElementsByClassName('userNameShow')[0].classList.remove('deactive');
            document.getElementsByClassName('inputPass')[0].classList.add('checkPass');
            document.getElementsByClassName('inputPass')[1].classList.add('checkPass');
            document.getElementsByClassName('inputPass')[0].disabled = false;
            document.getElementsByClassName('inputPass')[1].disabled = false;
            break;
        default:
            alert("Error");
    }
}